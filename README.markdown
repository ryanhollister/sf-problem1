The Rewindable Entity Iterator
==============================

Our EntityIterators are composed of a standard PDO PreparedStatement and a 
DataMapper.  The DataMapper maps rows into objects in real time as we iterate 
over the the Statement.  There is a limitation with PDO Statements in that you
can only iterate over them one time.  

For example:

    // first loop works fine
    foreach($statement as $result) {
        // do something with result
    }
    
    // but subsequent loops don't
    foreach($statement as $result) {
        // never called 
    }

Since our EntityIterator operates by iterating over the statement it 
can also only be looped over once.  This causes all sorts of problems.

Your Job
--------

Derive a RewindableEntityIterator from the EntityIterator class.  Your new 
iterator should be rewindable and thus able to iterate over its elements 
repeatedly.  To simplify the task we have used a ResultSet object instead of a 
PDO Statement.  The EntityIterator iterates over the ResultSet object 
directly.  Like the PDO Statement, the ResultSet does not have the ability to rewind.

A few constraints and notes
---------------------------

* Implement the RewindableEntityIterator class in the src directory
* Do not alter any other files in the src directory
* There are quite a few corner cases to consider
* There is a PHPUnit test file in the tests directory - add additional tests if it's helpful to you.
* Be conscious of time & space complexity

Good luck