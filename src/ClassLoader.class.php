<?php
/**
 * Simple Class Loader
 * 
 * @author Patrick Mizer
 */

namespace org\mizer;

class ClassLoader
{
    public function load($className) {
        if(strpos($className, __NAMESPACE__) !== false)
            require __DIR__.'/'.str_replace(__NAMESPACE__.'\\', '', $className) . '.class.php';
    }
}