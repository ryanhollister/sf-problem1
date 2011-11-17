<?php
/**
 * Widget Data Mapper
 * 
 * @author Patrick Mizer
 */

namespace org\mizer;

class WidgetDataMapper implements DataMapper
{
    /**
     * Build storage facility object from result set row
     * 
     * @param array $row
     * @return Widget 
     */
    public function buildFromRow(array $row) {
        
        $obj = new Widget();
        
        $obj->setId($row['id']);
        $obj->setName($row['name']);
        
        return $obj;
    }
}