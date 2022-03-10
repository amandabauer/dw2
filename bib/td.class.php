<?php

class Td {

    private $td;

    public function __construct($td){
        $this->td = $td;
    }

    public function __toString(){
        return '<td>'.$this->td.'</td>';
    }
} 