<?php
class Html {
   private $lang;
    private $head;
    private $body;
    
    public function __construct($slang, $oHead, $oBody) {
        $this->slang = $slang;
        $this->head = $oHead;
        $this->body = $oBody;
    }

    public function __toString(){            
        $sHtml  = "<!DOCTYPE html>\n<html lang=\"{$this->slang}\">\n"; 
        $sHtml .= $this->head;
        $sHtml .= $this->body;        
        $sHtml .= '</html>';
        return $sHtml;
    }

}