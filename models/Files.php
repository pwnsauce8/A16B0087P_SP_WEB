<?php
/**
 * Funkce pro praci s soubory
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 07.01.2018
 * Osobní číslo : A16B0087P
 */

class Files
{
    /**
     * Stahni file
     * Off. dokumentace PHP http://php.net/manual/en/function.readfile.php#example-2287 + ZMENA
     * @param $file cesta k souboru
     */
    public static function file_force_download($file) {
        if (file_exists($file)) {
            // Obnovinme Buffer, aby nedoslo k preteceni pameti,
            // Pokud toto neudelame soubor bude zapsan do pameti celkem!
            if (ob_get_level()) {
                ob_end_clean();
            }

            // Nutime prohlizec, aby ukazal okno pro ulozeni souboru
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            // cteme soubor a odesilame
            readfile($file);
            exit;
        }
    }

    public static function getFileNameById ($id) {

        // Pripojeni k DB
        $db = Db::getConnection();

        // SQL dotaz
        $sql = 'SELECT `file` FROM `post` WHERE idpost = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Spusteni prikazu
        $result->execute();

        // Příjem a vracení výsledků
        return $result->fetch();
    }

}