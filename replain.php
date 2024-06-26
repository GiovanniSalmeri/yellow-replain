<?php
// Replain extension, https://github.com/GiovanniSalmeri/yellow-replain

class YellowReplain {
    const VERSION = "0.9.1";
    public $yellow;         //access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
        $this->yellow->system->setDefault("replainId", "########-####-####-####-############");
    }
    
    // Handle page extra data
    public function onParsePageExtra($page, $name) {
        $output = null;
        if ($name == "header") {
            $output .= "<script>\n";
            $output .= "document.addEventListener('DOMContentLoaded', function() {\n";
            $output .= "window.replainSettings = { id: '".$this->yellow->system->get("replainId")."' };\n";
            $output .= "(function(u){var s=document.createElement('script');s.type='text/javascript';s.async=true;s.src=u;\n";
            $output .= "var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);\n";
            $output .= "})('https://widget.replain.cc/dist/client.js');\n";
            $output .= "});\n";
            $output .= "</script>\n";
        }
        return $output;
    }
}
