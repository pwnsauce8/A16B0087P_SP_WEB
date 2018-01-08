<?php
/**
 * Semistrální práce z WEB 2017
 * Author       : Mukanova Zhanel
 * Date         : 06.01.2018
 * Osobní číslo : A16B0087P
 */

/**
 * Funkce hleda potrebnou tridu v souborech
 * ktere jsme ukazali v $array_paths
 * @param $class_name jmeno potrebne tridy
 */
function __autoload($class_name)
{
    // Soubory ve kterych budeme hledat tridy
    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );

    foreach ($array_paths as $path) {

        // Vytvorime nazev a cestu k souboru s tridou
        $path = ROOT . $path . $class_name . '.php';

        // Pokud takovy soubor existuje, delame include
        if (is_file($path)) {
            include_once $path;
        }
    }
}
