<?php

class Body {

    private $components;

    function Body(...$components) {
        $this->components = $components;
    }

    function __toString() {
        $retorno = '<body>';
        foreach ($this->components as $component) {
            $retorno .= $component;
        }
        $retorno .= '</body>';
        return $retorno;
    }

}