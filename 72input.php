<?php

    require_once '59tag.php';
    require_once '71form.php';
	class Input extends Tag
	{
		public function __construct()
		{
			parent::__construct('input');
		}

        public function open()
		{
			$inputName = $this->getAttr('name');
			
			if ($inputName) {
				if (isset($_REQUEST[$inputName])) {
					$value = $_REQUEST[$inputName];
					$this->setAttr('value', $value);
				}
			}
			return parent::open(); 
		 }

        public function __toString()
		{
			return parent::open();
		}
	}

    $form = (new Form)->setAttrs(['action' => '', 
		'method' => 'GET']);
	
 	echo $form->open();
		echo (new Input)->setAttr('name', 'year');
		echo (new Input)->setAttr('type', 'submit');
	echo $form->close();
?>