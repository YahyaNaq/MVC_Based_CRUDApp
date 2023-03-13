<?php

namespace Core;

class Validator {

    public $errors = [
        'name' => '',
        'address' => '',
        'salary' => ''
    ];

    public function string($string)
    {
        if(empty($string)){
            $this->errors['address']="Please enter an address.";     
        }
    }

    public function name($string)
    {
        if (empty($string)){
            $this->errors['name']="Please enter a name.";

        } elseif (!filter_var($string, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $this->errors['name']="Please enter a valid name.";
        }
    }
    public function salary($string)
    {
        if(empty($string)){
            $this->errors['salary']="Please enter the salary amount.";

        } elseif (!ctype_digit($string)){
            $this->errors['salary']="Please enter a positive integer value.";
        }
    }


}