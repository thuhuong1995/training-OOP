<?php

    class cha
    {
    	
    	function __construct()
    	{
             echo 'Khởi tạo th cha';
    	}
    }
    class Con extends cha
    {
    	/*
    	function __construct()
    	{
            
    	}
    	*/ 
    }
    
    $a = new Con;

?>