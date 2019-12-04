<?php
namespace buhsova;
class LineUr
{
	protected $x;
	function lineUr($a, $b)
	{
		if ($a != 0) 
		{
			$x = -1*$b/$a;
			$this->x = $x;
			return array($x);
		}
		throw new BuhsovaException("The equation is not");
	}
}
