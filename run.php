<?php

namespace org\mizer;

require __DIR__ . '/src/ClassLoader.class.php';
spl_autoload_register(array(new ClassLoader(), 'load')); 

$dao = new Dao();

$itr = new EntityIterator(
        $dao->queryWidgets(), 
        new WidgetDataMapper());

foreach($itr as $widget) {
    print_r($widget);
}