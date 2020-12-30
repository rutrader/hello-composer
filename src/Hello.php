<?php

namespace rutrader\HelloComposer;

/**
 * @author Ruslan Ishemgulov <ruslan.ishemgulov@gmail.com>
 */
class Hello
{
	
	/**
	 * @param string $greet
	 * @return string
	 */
	public function greet(string $greet = 'Hello')
	{
		return $greet;
	}
	
}