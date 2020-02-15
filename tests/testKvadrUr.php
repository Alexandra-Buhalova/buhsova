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
class KvadrUrTest extends TestCase {
	public function testKvadrUr1() : void
	{
		$this->assertEquals([3,2],buhsova\KvadrUr::solve(1, -5, 6));
	}
	public function testKvadrUr2() : void
	{
		$this->assertEquals([0,-3],buhsova\KvadrUr::solve(4, 12, 0));
	}
	public function testKvadrUr3() : void
	{
		$this->assertEquals([0],buhsova\KvadrUr::solve(7, 0, 0));
	}
	public function testExpectException1() : void
	{
		$this->expectException(buhsova\BuhsovaException::class);
        buhsova\KvadrUr::solve(0,0,7);
	}
	public function testExpectException2() : void
	{
		$this->expectException(buhsova\BuhsovaException::class);
        buhsova\KvadrUr::solve(4,0,36);
	}
}