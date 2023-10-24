<?php


namespace APP;


class Autoloader {

   static function register() {

        spl_autoload_register(array(__CLASS__,'autoload'));


}

static function autoload($class) {



    $class = str_replace(__NAMESPACE__ . '\\', '', $class);

    $class = str_replace('\\','/', $class);

 // Créez le chemin complet vers le fichier de la classe en utilisant votre structure de dossiers
        $file = __DIR__ .'/'. $class . '.php';
        echo $file;
        echo $class;

       

        // Vérifiez si le fichier de la classe existe
        if (file_exists($file)) {
            return require_once $file;
      

}


}

}

Autoloader::register();
