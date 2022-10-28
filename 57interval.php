<?php

    require '56date.php';
    class Interval
    {
        private $d1;
        private $d2;

        public function __construct(Date $date1, Date $date2)
        {
            $this->d1 = $date1;
            $this->d2 = $date2;
        }

        public function toDays()
        {
            $interval = date_diff(new DateTime($this->d1), new DateTime($this->d2));
            return $interval->d;
        }

        public function toMonths()
        {
            $interval = date_diff(new DateTime($this->d1), new DateTime($this->d2));
            return $interval->m;
        }

        public function toYears()
        {
            $interval = date_diff(new DateTime($this->d1), new DateTime($this->d2));
            return $interval->y;
        }

        public function __toString()
        {
            return "['years' => '".$interval->toYears()."', 'months' => '".$interval->toMonths()."', 'days' => '".$interval->toDays()."']";
        }
    }

    $date1 = new Date('2025-12-31');
    $date2 = new Date('2026-11-28');
        
	$interval = new Interval($date1, $date2);
	
	echo $interval->toDays() . ' ';  
	echo $interval->toMonths() . ' '; 
	echo $interval->toYears() . ' '; 
?>