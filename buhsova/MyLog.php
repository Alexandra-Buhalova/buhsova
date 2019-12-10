<?php
namespace buhsova;
use \DateTime;
class MyLog extends \core\LogAbstract implements \core\LogInterface
{
	public static function log($str) 
	{
		self::Instance()->log[] = $str;
	}
	public function _write() 
	{
		echo implode("\n", $this->log) . "\n";
		$d = new DateTime();
		if (!is_dir("/../Log/")) mkdir ("/../Log/");
		$name="/../Log/".$d->format("d.m.Y_H.i.s.u").".log";
		file_put_contents($name, implode("\n\r", $this->log) . "\n\r");
	}
	public static function write() 
	{
		static::Instance()->_write();
	}
}
