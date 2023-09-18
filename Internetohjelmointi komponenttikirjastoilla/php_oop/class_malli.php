<?php
    //Tiedosto: class_malli.php

    class auto{
        public $renkaat = 4;
        private $ovet = 2;
        protected $istuin = 2;
        
        function __construct()
        {
            echo "<br>".$this->renkaat."<br>";
        }

        function details(){
            echo "Autossa on " . $this->renkaat .  " rengasta ja ". $this->ovet. " ovea";
        }
    }

    class rekka extends auto{


    }
?>