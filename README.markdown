Implement a Rewindable Entity Iterator
======================================

Our EntityIterators are composed of a standard PDO PreparedStatement and a 
DataMapper.  The DataMapper maps rows into objects in real time as we iterate 
over the the Statement.  There is a limitation with PDO Statements in that you
can only iterate over them one time.  For example:

    // first loop works fine
    foreach($statement as $result) {
        // do something with result
    }
    
    // but subsequent loops don't
    foreach($statement as $result) {
        // never called 
    }

Since our EntityIterators operate by iterating over the statement they 
are also unable to rewind and can only be looped over once.  This is clearly 
undesirable.

I would like for you to derive a RewindableEntityIterator from the 
EntityIterator class.  Your new iterator should implement the rewind method
such that it can be iterated over more than once.

In the example code I have replaced the PDO Statement with a ResultSet object.  
Like the Statement the ResultSet can not be rewound.  

A few constraints:

-- You may not alter any file other that the RewindableEntityIterator class in any way
-- You must account for the case where the iterator is rewound before all elements have been iterated over

Good luck