<?php

class Button {

    private $type;
    private $class;
    private $value;
    
    public function __construct($type, $class, $value) {
       $this->type = $type;
       $this->class = $class;
       $this->value = $value;
    }

    public function __toString() {
        return "<button type=\"{$this->type}\" class=\"{$this->class}\">{$this->value}</button>";
    }

}

