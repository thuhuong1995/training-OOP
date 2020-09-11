
<?php 

    class Connguoi
        {
            var $Hoten = '';
            var $Ngaysinh = '';
            var $GT = '';
            var $Diachi = '';
            var $Ghichu = '';

            function Them()
            {
                echo 'hãy nhập thông tin : ';
            }
        }
    class Sinhvien extends Connguoi
    {
        

        function gioithieu()
        {
        	$this->MaSV = 'Sinh viên số :';
    	    $this->Hoten = 'Họ và tên : ';
    	    parent::Them();
        }
    }

?>