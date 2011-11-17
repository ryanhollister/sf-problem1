<?php
/**
 * Data Mapper Interface
 * 
 * @author Patrick Mizer
 */

namespace org\mizer;

interface DataMapper
{
    /**
     * @param array
     * @return Object
     */
    public function buildFromRow(array $row);
}