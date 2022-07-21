<?php

class MajeurClass {
    public $age ;
    private $filtre = 22 ;
    public function passOrNot(){
        if ( $this->age < $this->filtre) {
            echo "viré" ;

        }else{
            echo "ok" ;
        }
    }
}

?>