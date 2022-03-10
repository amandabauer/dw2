<?php
class a {
    private $url;
    private $texto;

    function __construct($pUrl,$pTexto) {
        $this->url = $pUrl;
        $this->texto = $pTexto;
    }

    //function setUrl($pUrl) {
    //    $this->url = $pUrl;
    //}

    //function setTexto($pTexto) {
    //    $this->texto = $pTexto;
    //}

    //function getUrl() {
    //    return $this->url;
    //}

    //function getTexto() {
    //    return $this->texto;
    //}

    //function getLink() {
    //    return "<a href=\"{$this->url}\">{$this->texto}</a>";
    //}

    function __toString() {
        return "<a href=\"{$this->url}\">{$this->texto}</a>";
    }
}

//<a href="https://www.w3schools.com">Visit W3Schools.com!</a>
$link1 = new a("http://unidavi.edu.br","Unidavi");
//$link1->url = "http://";
//$link1->texto = 'site';
//$link1->setUrl("http://unidavi.edu.br");
//$link1->setTexto("Unidavi");
//var_dump($link1);
//echo $link1->getLink();
echo $link1;
echo '<br>';

$link2 = new a("http://google.com.br","Google");
//$link2->url = "http://wwww";
//$link2->texto = 'site2';
//$link2->setUrl("http://google.com.br");
//$link2->setTexto("Google");
//var_dump($link2);
//echo $link2->getLink();
echo $link2;