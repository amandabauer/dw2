<?php

class Div {
    private $class;
    private $elements;

    public function __construct($class, ...$elements){
        $this->class = $class;
        $this->elements = $elements;
    }

    public function __toString(){      
        $retorno = '<div class="'.$this->class.'">';
        foreach ($this->elements as $element) {
            $retorno .= $element;
        }
        $retorno .= '</div>';
        return $retorno;
    }
}
?>