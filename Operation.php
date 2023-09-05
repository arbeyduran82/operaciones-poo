<?php
    class Operation{
        public $Data_1 = 0;
        public $Data_2 = 0;
        public $Result = 0;

        function __construct($intData_1, $intData_2){
            $this->Data_1 = $intData_1;
            $this->Data_2 = $intData_2;
        }

        public function getAdd(){
            $this->Result = $this->Data_1 + $this->Data_2;
            return $this->Result;
        }

        public function getSubtract(){
            $this->Result = $this->Data_1 - $this->Data_2;
            return $this->Result;
        }

        public function getProduct (){
            $this->Result = $this->Data_1 * $this->Data_2;
            return $this->Result;
        }

        public function getDivision (){
            $this->Result = $this->Data_1 / $this->Data_2;
            return $this->Result;
        }

    }//and class operation
?>