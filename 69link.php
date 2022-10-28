<?php

    require_once '59tag.php';
    const active = 'active';
	class Link extends Tag
	{
		public function __construct()
		{
			parent::__construct('a');
			$this->setAttr('href', '');
		}

        public function open()
		{
			$this->activateSelf(); 
			return parent::open(); 
    	}

        private function activateSelf()
		{
			if ($this->getAttr('href') == $_SERVER['REQUEST_URI']) {
		 		$this->addClass('active');
			}
	    }
    }
?>