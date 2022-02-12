<?php
/* comportament dels ànecs */
class Duck {

    public function quack() {
        echo "Quack \n";
    }

    public function fly() {
        echo "I'm flying \n";
    }

}
/* comportament dels galls d'inidi, incompatible amb els dels ànecs */
class Turkey {

    public function gobble() {
        echo "Gobble gobble \n";
    }

    public function fly() {
        echo "I'm flying a short distance \n";
    }
}

/* Volem que els galls d'indi es comportin com ànecs */
class TurkeyAdapter extends Duck {

    private $turkey;

    public function __construct(Turkey $turkey) {
        /* crea un gall dindi que es comporta com un ànec */
        $this->turkey = $turkey;
    }

    public function quack() {
        /* tradueix el 'quack' a 'gobble gobble' */ 
        echo "Gobble gobble \n";
    }

    public function fly() {
        /* tradueix el vol de l'ànec en cinc vols de curta distància del gall dindi */ 
        for($i = 1; $i <= 5; $i++) {
            echo "I'm flying a short distance \n";
        }
    }
}

?>