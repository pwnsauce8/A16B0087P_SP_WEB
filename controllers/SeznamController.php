<?php
/**
 * Controller Seznam ridi vsemi seznamami,
 * do kterych ma pristup jakykoliv
 * uzivatel
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

class SeznamController
{
    /**
     * Seznam vsech prispevku uzivatelu
     * @return bool
     */
    public function actionIndex()
    {
        // Zkontroluje zda uzivatel ma ban
        User::checkBan();

        // Zkontroluje zda uzivatel je uzivatelem
        $userId = User::checkLogged();

        // Vrati vsechny prispevky uzivatelem s $userId
        $list = Articles::getArtUserList($userId);

        require_once(ROOT . '/views/user/seznam_pr.php');

        return true;
    }

    /**
     * Odstrani zadany prispevek
     * @param $id   id prispevku, ktery chceme odstranit
     * @return bool
     */
    public function actionDelete($id)
    {
        // Zkontroluje zda uzivatel ma ban
        User::checkBan();

        if (isset($_POST['submit'])) {

            // Pokud vsechno je v poradku -> odstranime prispevek
            Articles::deletePostById($id);

            header("Location: /seznam");
        }

        require_once(ROOT . '/views/user/delete.php');
        return true;
    }

    /**
     * Upravi zadany prispevek
     * a nastavi nove hosnoty
     * @param $id    id zadaneho prispevku
     * @return bool
     */
    public function actionUpdate($id)
    {
        // Zkontroluje zda uzivatel ma ban
        User::checkBan();
        // Vrati informace o prispevku
        $product = Articles::getPostById($id);


        if (isset($_POST['submit'])) {

            // Pokud vsechno je v poradku -> upravime prispevek
            $options['nazev'] = $_POST['nazev'];
            $options['autori'] = $_POST['autori'];
            $options['abstract'] = $_POST['abstract'];
            $options['date'] = date("Y-m-d H:i:s");
            $options['file'] = 'file path';

            // znicime html tagy
            $options['nazev']  = strip_tags($options['nazev']);
            $options['autori'] = strip_tags($options['autori']);

            $options['nazev'] = htmlspecialchars($options['nazev']);
            $options['autori'] = htmlspecialchars($options['autori']);
            $options['abstract'] = htmlspecialchars($options['abstract']);

            // ulozime zmeny
            $result = Articles::updatePostById($id, $options);

        }

        require_once(ROOT . '/views/user/update.php');
        return true;
    }

    /**
     * Prida novy prispevek do DB
     * @return bool
     */
    public function actionAdd()
    {
        // Zkontroluje zda uzivatel ma ban
        User::checkBan();

        $nazev = false;
        $autori = false;
        $abstract = false;

        $result = false;

        if (isset($_POST['submit'])) {


            // zapisujeme nazev, autory a abstrakt, ktere jsme dostali z formy, do promennych
            $options['nazev'] = $_POST['nazev'];
            $options['autori'] = $_POST['autori'];
            $options['abstract'] = $_POST['abstract'];
            $options['date'] = date("Y-m-d H:i:s");

            // Zjistujeme informace o uzivateli
            $userId = User::checkLogged();
            $user = User::getUserById($userId);
            $options['userid'] = $user['idusers'];

            // znicime html tagy
            $options['nazev']  = strip_tags($options['nazev']);
            $options['autori'] = strip_tags($options['autori']);

            $options['nazev'] = htmlspecialchars($options['nazev']);
            $options['autori'] = htmlspecialchars($options['autori']);
            $options['abstract'] = htmlspecialchars($options['abstract']);

            // Chyby
            $errors = false;

            // Kontrola dat
            if (!Articles::checkName(($options['nazev']))) {
                $errors[] = 'Název musí být délší, než 2 symboly';
            }

            if (!Articles::checkAutori($options['autori'])) {
                $errors[] = 'Autoři musí být délší, než 6 symboly';
            }
/////////////////////////////////UPLOAD PDF////////////////////////////////////////////////
///
            if (empty($_FILES['fupload']['name'])) {  // Pokud neni file
                $options['file'] = "No file.";
            }
            else {
                if(preg_match('/[.](PDF)|(pdf)$/',$_FILES['fupload']['name'])) {

                    $path_to_directory = 'upload/files/';    	 // Soubor, kam pride PDF

                    $filename = $_FILES['fupload']['name'];
                    $datef=time(); 								// Ziskavame cas
                    $file_pdf = $datef.$filename; 				// Menime jmeno souboru, abychom nemeli stejne jmeno
                    $source = $_FILES['fupload']['tmp_name'];
                    $target = $path_to_directory . $file_pdf;
                    move_uploaded_file($source, $target);       //загрузка оригинала в папку $path_to_90_directory
                    $options['file'] = $path_to_directory.$datef.$filename;
                } else {
                    $errors[] = 'Špatný format!';
                }
            }
//////////////////////////////////////////////////////////////////////////////////////////
            if ($errors == false) {
                // Pokud nevyskytly chyby -> pridani prispevku
                $id = Articles::addAbstract($options);
                header("Location: /seznam");
            }
        }
        require_once(ROOT . '/views/user/novy_pr.php');

        return true;
    }

    /**
     * Vypise seznam prispevku k posouzeni
     * @return bool
     */
    public function actionSeznamPosouzeni()
    {
        // Zkontroluje zda uzivatel ma ban
        User::checkBan();

        // Vrati id uzivatelu, pokud autorizovan
        $id = User::checkLogged();

        // Vrati informace o prispevku s id
        $post = Articles::getPostById($id);
        $pos = $post['posouzeni'];

        // Vypise vsechne prispevky, ktere musi uzivatel ohodnotit
        $list = Articles::getArtUserListPos($id);
        require_once(ROOT . '/views/user/seznam_k_pos.php');

        return true;
    }

    /**
     * Hodnoceni zvoleneho prispevku
     * @param $id
     * @return bool
     */
    public function actionVote($id)
    {
        // Zkontroluje zda uzivatel ma ban
        User::checkBan();

        if (isset($_POST['submit'])) {

            // Zjistujeme informace o uzivateli
            $userId = User::checkLogged();
            $user = User::getUserById($userId);

            $options['userId'] = $user['idusers'];
            $options['originalita'] = $_POST['originalita'];
            $options['tema'] = $_POST['tema'];
            $options['tech_kvalita'] = $_POST['tech_kvalita'];
            $options['jaz_kvalita'] = $_POST['jaz_kvalita'];
            $options['doporuceni'] = $_POST['doporuceni'];
            $options['poznamky'] = $_POST['poznamky'];
            $options['idpost'] = $id;

            // Cheby
            $errors = false;

            // Validace
            if (!isset($options['poznamky'])) {
                $errors[] = 'Napište prosím poznamky';
            }

            if ($errors == false) {
                // Pokud nevyskytly chyby, pridame novy prispevek
                $id = Articles::addVote($options);

                header("Location: /posouzeni");
            }
        }

        require_once(ROOT . '/views/user/vote.php');

        return true;
    }
}