<?php 

    class A
    {
        private $__username;
        private $__password;

        function getUsername()
        {
            return 'Xin chào ' . $this->__username;
        }

        function setUsername($username)
        {
            $this->__username = $username;
        }

        function getPassword()
        {
            return $this->__password;
        }

        function setPassword($password)
        {
            $this->__password = md5($password.'GhostFury');
        }
    }

    $a = new A();

    $a->setUsername('Thuhuong1995 ');

    echo $a->getUsername();

    $a->setPassword('matkhau');

    echo $a->getPassword();

?>