<?php

class Li {
    private $class;
    private $a;

    public function __construct($class, $a){
        $this->class = $class;
        $this->a = $a;
    }

    public function __toString(){      
        return '<li class="'.$this->class.'">'.$this->a.'</li>';
    }
}
?>