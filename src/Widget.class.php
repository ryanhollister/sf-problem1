<?php
/**
 * Widget Entity
 * 
 * @author Patrick Mizer
 */

namespace org\mizer;

class Widget
{
    /**
     *
     * @var int
     */
    private $id;
    
    /**
     *
     * @var string
     */
    private $name;
    
    /**
     *
     * @return string
     */
    public function getId() {
        return $this->id;
    }

    /**
     *
     * @param int $id 
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     *
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }


    
}
