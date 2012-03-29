<?php
/**
 * Rewindable Entity Iterator
 *
 * @author Ryan Hollister
 */

namespace org\mizer;

class RewindableEntityIterator extends EntityIterator
{
	protected $cache = array();

	public function next() {
		$this->index++;
		
		if(!isset($this->cache[$this->index]))
		{
			$result = parent::next();
			if ($result)
			{
				$this->cache[$this->index] = $result;
			}
		}
		else
		{
			$result = $this->cache[$this->index];
			$this->next = $result;
		}
		
		return $result;
	}
	
	public function rewind() {
		$this->index = 0;
		$this->next = $this->cache[$this->index];
	}

}