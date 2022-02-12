<?php

/* classe refactoritzada com a Singleton */
class Tigger {

    /* una sola instància de la classe Tiger */
    private static $instance = null;
    /* nombre de vegades que tigger fa un rugit" */
    public $times = 1; /* nombre sencer major que zero. Valor per defecte: 1 */

    /* no es pot fer servir 'new' per crear un objecte */
    protected function __construct() {}

    /* no es pot clonar l'objecte creat */
    protected function __clone() {}

    /* no es pot deserialitzar l'objecte creat */
    public function __wakeup() {}

    /* crea un objecte de la classe Tigger una sola vegada i el retorna cada vegada que es crida */
    public static function getInstance() {
        if(!isset(self::$instance)) {
            echo "Building character..." . PHP_EOL;
            self::$instance = new static();
        }
        
        return self::$instance;
    }

    /* rugit del tigre */
    public function roar() {
        echo "Grrr!" . PHP_EOL;
    }

    /* imprimeix per pantalla múltiples vegades el rugit de Tigger */
    public function printSeveralRoars($times) {
        if ($times > 0) {
            for($i = 1; $i <= $times; $i++){
                $this->roar();
                /* echo "Grrr!" . PHP_EOL; */
            }
        }
    }
    
    /* compta el nombre de vegades que Tigger ha rugit */
    public function getCounter(int $times) {
        echo "Tigger ha rugit " . $times . " cop(s)". PHP_EOL;
    }

}

/* test */
if($argc == 2 && isset($argv[1]) && $argv[1] > 0) {
    $tigger1 = Tigger::getInstance();
    $times = rand(0, $argv[1]);
    $tigger1->printSeveralRoars($times);
    $tigger1->getCounter($times);
} else {
    echo "Per executar el programa, has d'indicar el nombre màxim de rugits que podria fer Tigger\n";
    echo "Per exemple: 'php tigger.php 10'\n";
}

?>