<?php

namespace App;

class BasePathDetector {

    private $serverVars;

    public function __construct($serverVars)
    {
        $this->serverVars = $serverVars; 
    }

    public function getBasePath() {
        return rtrim(dirname($this->serverVars['SCRIPT_NAME']), '/');
    }
    
}