<?php
    
    require_once '72input.php';
    require_once '73submit.php';
    class Hidden extends Input
    {
        public function __construct()
        {
            $this->setAttr('type', 'hidden');
            parent::__construct();
        }
    }

    $form = (new Form)->setAttrs(['action' => 'tes
		t.php', 'method' => 'GET']);
	
 	echo $form->open();
		echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '123');
		 echo (new Input)->setAttr('name', 'year');
		echo new Submit;
	echo $form->close();
?>