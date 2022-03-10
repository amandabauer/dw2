<?php

class Th {
    private $scope;
    private $value;

    public function __construct($scope, $value){
        $this->scope = $scope;
        $this->value = $value;
    }

    public function __toString(){
        return '<th scope="'.$this->scope.'">'.$this->value.'</th>';
    }
}