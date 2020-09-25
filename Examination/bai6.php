<?php

    class Xe
    {
        private $loaixe;
    
        function getLoaixe()
        {
            return $this-> loaixe;
        }
        function setLoaixe($loaixe)
        {
            $this -> loaixe = $loaixe;
        }
    }

    $Xe = new Xe();
    $Xe -> setLoaixe('Wave');
    echo $Xe -> getLoaixe();
    
?>
