<?php

    require_once '59tag.php';
    require_once '70listitem.php';
    class HtmlList extends Tag
    {
        private $items = [];
        
        public function addItem(ListItem $li)
        {
            $this->items[] = $li;
            return $this;
        }
        
        public function show()
        {
            $result = $this->open();
			
			foreach ($this->items as $item) {
				$result .= $item->show();
			}
			
			$result .= $this->close();
			
			return $result;
		}
    }
    
    $list = new HtmlList('ul');
	
	echo $list
		->addItem((new ListItem())->setText('item1'))
		->addItem((new ListItem())->setText('item2'))
		->addItem((new ListItem())->setText('item3'))
		->show();
    
    $list = new HtmlList('ul');
	
    echo $list->setAttr('class', 'eee')
        ->addItem((new ListItem())->setText('item1')->setAttr('class', 'first'))
        ->addItem((new ListItem())->setText('item2'))
        ->addItem((new ListItem())->setText('item3'))
        ->show();
?>