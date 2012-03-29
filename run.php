<?php

namespace org\mizer;

require __DIR__ . '/src/ClassLoader.class.php';
spl_autoload_register(array(new ClassLoader(), 'load')); 

/* Instantiate data ccess object */
$dao = new Dao();

/* Compose iterator from DAO ResultSet and Widget DataMapper */
$itr = new RewindableEntityIterator(
        $dao->queryWidgets(), 
        new WidgetDataMapper());

/* Prints this time */
foreach($itr as $widget) {
    print_r($widget);
}

/* Doesn't print this time */
foreach($itr as $widget) {
    print_r($widget);
}