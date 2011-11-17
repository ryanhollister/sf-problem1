<?php
/**
 * Data Access Object (DAO)
 * 
 * @author Patrick Mizer
 */

namespace org\mizer;

class Dao
{
    /**
     *
     * @return MockWidgetResultSet
     */
    public function queryWidgets() {
        return new MockWidgetResultSet();
    }
}