<?php

namespace org\mizer;

require __DIR__ . '/../src/ClassLoader.class.php';
spl_autoload_register(array(new \org\mizer\ClassLoader(), 'load')); 

class RewindableIteratorTest extends \PHPUnit_Framework_TestCase 
{
    public function testFullIteration() {
        
        $dao = new Dao();

        $itr = new RewindableEntityIterator(
                $dao->queryWidgets(), 
                new WidgetDataMapper());
        
        $results = array();

        foreach($itr as $widget) {
            $results[] = $widget;
        }        
        
        $this->assertTrue(count($results) == 3);
    }
    
    public function testFullIterationWithInterupt() {
        
        $dao = new Dao();

        $itr = new RewindableEntityIterator(
                $dao->queryWidgets(), 
                new WidgetDataMapper());
        
        $results = array();
        
        $i = 0;
        foreach($itr as $widget) {
            if(++$i > 1) break;
            $results[] = $widget;
        }        
        
        $this->assertTrue(count($results) == 1);
    }    
    
    public function testTwoFullIterations() {
        
        $dao = new Dao();

        $itr = new RewindableEntityIterator(
                $dao->queryWidgets(), 
                new WidgetDataMapper());
        
        $results = array();

        foreach($itr as $widget) {
            $results[] = $widget;
        }        
        
        $this->assertTrue(count($results) == 3);
        
        $results = array();

        /* Prints this time */
        foreach($itr as $widget) {
            $results[] = $widget;
        }        
        
        $this->assertTrue(count($results) == 3);        
    } 
    
    public function testTwoFullIterationsWithInterupt() {
        
        $dao = new Dao();

        $itr = new RewindableEntityIterator(
                $dao->queryWidgets(), 
                new WidgetDataMapper());
        
        $results = array();
        $i = 0;
        foreach($itr as $widget) {
            if(++$i > 1) break;
            $results[] = $widget;
        }        
        
        $this->assertTrue(count($results) == 1);
        
        $results = array();

        /* Prints this time */
        foreach($itr as $widget) {
            $results[] = $widget;
        }        
        
        $this->assertTrue(count($results) == 3);        
    }    
    
}