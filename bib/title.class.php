<?php

class Title {

    private $title;

    function Title($title) {
        $this->title = $title;
    }

    function __toString() {
        return "<title>{$this->title}</title>";
    }

}
