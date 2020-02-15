<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__ . '/../core/EquationInterface.php';
include_once __DIR__ . '/../core/LogInterface.php';
include_once __DIR__ . '/../core/LogAbstract.php';
include_once __DIR__ . '/../buhsova/LineUr.php';
include_once __DIR__ . '/../buhsova/KvadrUr.php';
include_once __DIR__ . '/../buhsova/BuhsovaException.php';
include_once __DIR__ . '/../buhsova/MyLog.php';
class LineUrTest extends TestCase {
	public function testLineUr1() : void
	{
		$this->assertEquals([2],buhsova\LineUr::lineUr(5,10));
	}
	public function testLineUr2() : void
	{
		$this->assertEquals([0],buhsova\LineUr::lineUr(5,0));
	}
	public function testExpectException1() : void
	{
		$this->expectException(buhsova\BuhsovaException::class);
        buhsova\LineUr::lineUr(0,5);
	}
	public function testExpectException2() : void
	{
		$this->expectException(buhsova\BuhsovaException::class);
        buhsova\LineUr::lineUr(0,0);
	}
}
