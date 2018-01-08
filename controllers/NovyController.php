<?php
/**
 *
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

class NovyController
{

    public function actionIndex()
    {
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
                $result = Articles::addAbstract($options);
                header("Location: /seznam");
            }
        }
        require_once(ROOT . '/views/user/novy_pr.php');

        return true;
    }

}