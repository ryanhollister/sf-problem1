<?php

namespace org\mizer;

class ClassLoader
{
    
    public function load($className) {
        
        require __DIR__.'/'.str_replace(__NAMESPACE__.'\\', '', $className) . '.class.php';
    }
}