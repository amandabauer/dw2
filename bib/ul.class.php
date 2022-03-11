<?php

class Ul{

    private $class;
    private $lis;

    public function __construct($class,...$lis) {
        $this->class = $class;
        $this->lis = $lis;
    }

    function __toString() {
        $retorno = '<ul class="'.$this->class.'">';
        foreach ($this->lis as $lis) {
            $retorno .= $lis;
        }
        $retorno .= '</ul>';
        return $retorno;
    }

}