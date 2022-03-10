<?php
class Meta {
    
    private $charset;
    private $name;
    private $httpEquiv;
    private $content;
    
    public function __construct($pCharset, $pName = null, $pHttpEquiv = null, $pContent = null) {
        $this->charset = $pCharset;
        $this->name = $pName;
        $this->httpEquiv = $pHttpEquiv;
        $this->content = $pContent;

    }
    
    public function __toString() {
        $tag = '<meta';
        $tag.= (isset($this->charset)) ? " charset=\"{$this->charset}\"":'';
        $tag.= (isset($this->name)) ? " name=\"{$this->name}\"":'';
        $tag.= (isset($this->httpEquiv)) ? " http-equiv=\"{$this->httpEquiv}\"":'';
        $tag.= (isset($this->content)) ? " content=\"{$this->content}\"":'';

        $tag .= ">\n";

        return $tag;
    }

}