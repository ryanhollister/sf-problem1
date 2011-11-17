<?php
/**
 * ResultSet Interface
 * 
 * @author Patrick Mizer
 */

namespace org\mizer;

interface ResultSet
{
    /**
     * @return array
     */
    public function fetchNextRow();
}