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
		function keu()
			{
			echo $this->tiengkeu;
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
	$conmeo->keu();
?>
