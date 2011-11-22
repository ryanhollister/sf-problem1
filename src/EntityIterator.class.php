<?php
/**
 * Entity Iterator
 *
 * @author Patrick Mizer
 */

namespace org\mizer;

class EntityIterator implements \Iterator 
{

    /**
     * @var ResultSet
     */
    protected $rs;

    /**
     * @var Object
     */
    protected $next;

    /**
     * @var DataMapper
     */
    protected $dataMapper;
    
    /**
     * @var int
     */
    protected $index;

    /**
     * Constructor
     *
     * @param ResultSet $rs
     * @param DataMapper $dataMapper
     */
    public function __construct(ResultSet $rs, DataMapper $dataMapper) {
        
        $this->rs         = $rs;
        $this->dataMapper = $dataMapper;
        $this->index      = -1;
        
        $this->next();
    }

    /**
     * Rewind iterator
     */
    public function rewind() {
        /* TODO */
        return;
    }

    /**
     * Return current element
     *
     * @return Object
     */
    public function current() {
        return $this->next;
    }

    /**
     * Return key (index)
     *
     * @return int
     */
    public function key() {
        return $this->index;
    }

    /**
     * Get next element
     *
     * @return Object
     */
    public function next() {

        $row = $this->rs->fetchNextRow();
        
        $this->next = (isset($row) && is_array($row)) ? 
                $this->dataMapper->buildFromRow($row) : false;
       
        return $this->next;
    }

    /**
     * Iterator is valid
     *
     * @return boolean
     */
    public function valid() {
    	return $this->next != false;
    }
    
    /**
     * Get current result
     * 
     * @return type 
     */
    public function currentResult() {
        return $this->current();
    }
}