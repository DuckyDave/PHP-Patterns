<?php

class Duck {

    public function quack() {
        echo "Quack \n";
    }

    public function fly() {
        echo "I'm flying \n";
    }

}

class Turkey {

    public function gobble() {
        echo "Gobble gobble \n";
    }

    public function fly() {
        echo "I'm flying a short distance \n";
    }
}

/* classe creada com a Adapter */
/* adaptem el so i el comportament de vol dels ànecs als galls dindis */
class TurkeyAdapter extends Turkey {

    public function quack() {
        /* tradueix el 'quack' a 'gobble gobble' */ 
        $this->gobble();
    }

    public function fly() {
        /* tradueix el vol de l'ànec en cinc vols de curta distància del gall dindi */ 
        for($i = 1; $i <= 5; $i++) {
            echo "I'm flying a short distance \n";
        }
    }
}

?>