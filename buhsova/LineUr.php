<?php
namespace buhsova;
class LineUr
{
	protected $x;
	function lineUr($a, $b)
	{
        MyLog::log("Equation: $a*x + $b = 0");
		if ($a != 0) 
		{
			$x = -1*$b/$a;
			$this->x = $x;
            MyLog::log("This is line ur");

			return array($x);
		}
		throw new BuhsovaException("The equation is not");
	}
}
