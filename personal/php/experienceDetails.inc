<?php
    class job{
        public $img;
        public $company;
        public $role;
        public $location;
        public $timeframe;

        public function __construct($img, $company, $role, $location, $timeframe){
            $this->img = $img;
            $this->company = $company;
            $this->role = $role;
            $this->location = $location;
            $this->timeframe = $timeframe;
        }
    }

    $bakhter = new job('bakhter', 'Bakhter Halal Kabab Afghan', 'Waiter', 'Queens, NY', 'July 2018 to September 2018');
    $walmart = new job('walmart', 'Walmart Canada', 'Customer Fulfillment Associate', 'Brampton, ON', 'May 2020 to October 2020');
    $mpac = new job('mpac', 'Municipal Property Assessment Corporation', 'Software Developer', 'Pickering, ON', 'May 2021 to August 2021');

    $jobs = array($mpac, $walmart, $bakhter);
?>