<?php

    require_once '59tag.php';
    class Image extends Tag
	{
		public function __construct()
		{
			$this->setAttr('src', '')->setAttr('alt', '');

            
		 	parent::__construct('img');
		}
		
		public function __toString()
		{
			return parent::open();
		}
	}

    $image = (new Image())->setAttr('src', 'img.png');
    $image->setAttr('width', '200');
    echo $image;
?>