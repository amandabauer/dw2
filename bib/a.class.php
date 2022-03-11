<?php
class a {
    private $url;
    private $texto;

    function __construct($pUrl,$pTexto) {
        $this->url = $pUrl;
        $this->texto = $pTexto;
    }

    function __toString() {
        return "<a href=\"{$this->url}\">{$this->texto}</a>";
    }
}
