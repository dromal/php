<?php

    require_once '59tag.php';
    require_once '71form.php';
    require_once '72input.php';
    require_once '73submit.php';
    class Textarea extends Tag
    {
        public function __construct()
        {
            parent::__construct('textarea');
        }
    }

    $form = (new Form)->setAttrs(['action' => 'tes
		t.php', 'method' => 'GET']);
	
 	echo $form->open();
		echo (new Input)->setAttr('name', 'user');
		echo (new Textarea)->setAttr('name', 'me
			ssage')->show();
		 echo new Submit;
	echo $form->close();
?>