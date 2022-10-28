<?php

    require_once '59tag.php';
    require_once '78option.php';
    class Select extends Tag
    {
        private $items = [];

        public function __construct()
        {
            parent::__construct('select');
        }

        public function add(Option $option)
        {
            $this->items[] = $option;
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

        public function __toString()
        {
            $result = $this->open();

            foreach ($this->items as $item) {
                $result .= $item->show();
            }

            $result .= $this->close();

            return $result;
        }
    }
?>