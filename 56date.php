<?php
    class Date
    {
        private $week_ru = ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'];
        private $week_en = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
        private $month_ru = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август', 'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];
        private $month_en = ["january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december"];
    
        private $date;
    
        public function __construct($d = null)
        {
            if ($d == null) {
                echo "null";
                $this->date = date_create(date('y-m-j'));
            } else {
                $this->date = date_create($d);
            }
        }
    
        public function getDay()
        {
            return date_format($this->date, 'j');
        }
    
        public function getMonth($lang = null)
        {
            if ($lang == 'ru') return $this->month_ru[date_format($this->date, 'm')];
            else if ($lang == 'en') return $this->month_en[date_format($this->date, 'm')];
            else return date_format($this->date, 'm');
        }
    
        public function getYear()
        {
            return date_format($this->date, 'Y');
        }
    
        public function getWeekDay($lang = null)
        {
            if ($lang == 'ru') return $this->week_ru[date_format($this->date, 'w')];
            else if ($lang == 'en') return $this->week_en[date_format($this->date, 'w')];
            else return date_format($this->date, 'w');
        }
    
        public function addDay($value)
        {
            date_modify($this->date, '+'.$value.' day');
        }
    
        public function subDay($value)
        {
            date_modify($this->date, '-'.$value.' day');
        }
    
        public function addMonth($value)
        {
            date_modify($this->date, '+'.$value.' month');
        }
    
        public function subMonth($value)
        {
            date_modify($this->date, '-'.$value.' month');
        }
    
        public function addYear($value)
        {
            date_modify($this->date, '+'.$value.' year');
        }
    
        public function subYear($value)
        {
            date_modify($this->date, '-'.$value.' year');
        }
    
        public function format($format)
        {
            return date_format($this->date, $format);
        }
    
        public function __toString()
        {
            return date_format($this->date, 'Y-m-j');
        }
    }

    $date = new Date('2025-12-31');
	
	echo $date->getYear();  
	echo $date->getMonth(); 
	echo $date->getDay();  
	
	echo $date->getWeekDay();     
	echo $date->getWeekDay('ru'); 
	echo $date->getWeekDay('en'); 
    
    echo (new Date('2025-12-31'))->addYear(1); 
	echo (new Date('2025-12-31'))->addDay(1); 
?> 