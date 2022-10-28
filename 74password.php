<?php

    require_once '72input.php';
    require_once '73submit.php';
    class Password extends Input
    {
        public function __construct()
        {
            $this->setAttr('type', 'password');
            parent::__construct();
        }
    }

    $form = (new Form)->setAttrs(['action' => 'tes
		t.php', 'method' => 'GET']);
	
 	echo $form->open();
		echo (new Input)->setAttr('name', 'login');
		 echo (new Password)->setAttr('name', 'passw');
		 echo new Submit;
	echo $form->close();
?>