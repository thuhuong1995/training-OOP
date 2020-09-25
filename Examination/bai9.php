<?php 

    class hinhhoc
    {
        
        function Ve()
        {

        }
        function TinhS()
        {
            
        }
    }

    class Hinhvuong extends hinhhoc
    {
     
     public $canh = 0;
     function ve()
     {
     	echo 'Vẽ hình vuông';
     }
     function TinhS()
     {
     	echo 'Tính S hình vuông: ';
     	return $this->canh*$this->canh;
     }
    }
    $hinhvuong = new Hinhvuong();
    $hinhvuong->ve();
    echo "</br>";
    $hinhvuong->canh = 50;
    echo $hinhvuong -> TinhS();

?>