<?php

class Head {

    private $meta;
    private $linkcss;
    private $title;

    function Head($title, $linkcss, ...$meta) {
        $this->meta = $meta;
        $this->title = $title;
        $this->linkcss = $linkcss;
    }

    function __toString() {
        $sMetas = "";
        foreach($this->meta as $meta) {
            $sMetas .= $meta;
        }
        return "<head>
                    {$sMetas}
                    {$this->linkcss}
                    {$this->title}
                </head>";
    }

}
