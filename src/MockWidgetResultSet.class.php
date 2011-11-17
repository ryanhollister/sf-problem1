<?php
/**
 * ResultSet Iterator
 * 
 * @author Patrick Mizer
 */

namespace org\mizer;

class MockWidgetResultSet implements ResultSet
{
    
    /**
     *
     * @var int
     */
    private $index;
    
    /**
     *
     * @var array
     */
    private $data;
    
    /**
     * Constructor
     */
    public function __construct() {
        $this->index = -1;
        $this->_init();
    }
    
    /**
     * Get next row
     * 
     * @return array
     */
    public function fetchNextRow() {
        ++ $this->index;
        
        if(isset($this->data[$this->index])) {
            return $this->data[$this->index];
        }
        
        return false;
    }
    
    /**
     * Init mock data
     * 
     * @return array
     */
    private function _init() {
        $this->data = array(
            array(
                'id'   => 1,
                'name' => 'Foo'
            ),
            array(
                'id'   => 2,
                'name' => 'Bar'
            ),
            array(
                'id'   => 3,
                'name' => 'Baz'
            )           
        );
    }
}