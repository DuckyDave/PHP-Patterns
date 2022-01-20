<?php

/* classe refactoritzada com a Singleton */
class Tigger {

    private static $instance = null;

    /* no es pot fer servir 'new' per crear un objecte */
    protected function __construct() {}

    /* no es pot clonar l'objecte creat */
    private function __clone() {}

    /* crea un objecte de la classe Tigger una sola vegada i el retorna cada vegada que es crida */
    public static function getInstance(): self {
        if(self::$instance == null) {
            echo "Building character..." . PHP_EOL;
            self::$instance = new self();
        }
        
        return self::$instance;
    }

    /* no es pot deserialitzar l'objecte creat */
    private function __wakeup() {}

    /* rugit del tigre */
    public function roar() {
        echo "Grrr!" . PHP_EOL;
    }

    /* compta el nombre de vegades que Tigger ha rugit */
    public function getCounter(int $times) {
        echo "Tigger ha rugit " . $times . " cop(s)". PHP_EOL;
    }

}

$times = rand(1, 10);
$tigger = Tigger::getInstance();
for($i=1; $i <= $times; $i++) {
    $tigger->roar();
}
$tigger->getCounter($times);

?>