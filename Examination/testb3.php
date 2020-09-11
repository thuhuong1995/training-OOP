<?php 
    class DongVat
    {
        var $tiengkeu = 'Và con này kêu';
        var $mat;
        var $mui;
        var $tay;
        var $chan;

        function an($thuc_an)
            {
                echo 'con này ăn' . $thuc_an;
            }
        function keu($tieng_keu)
            {
            echo $this->tiengkeu . $tieng_keu;
            }
        function chay()
            {
            
            }
    }
    $conmeo = new DongVat();


    $conmeo->mat = 'Mắt chột';
    $conmeo->mui = 'Mũi tẹt';

    echo $conmeo->mat;
    echo $conmeo->mui;
    $conmeo->an('chuột');
    $conmeo->keu('meoo');
?>
