class BuhsovaException extends RuntimeException {
}
class LineUr {
	protected a;
	protected b;
	protected x;
	function __construct($a, $b){
		$this->a=$a;
		$this->b=$b;
	}
	function LineUr($a, $b){
		if ($a != 0) {
			$x = -1*$b/$a;
			$this->x = $x;
			return array($x);
		}
		throw new BuhsovaException ("нет решения");	
	}
}
class KvadrUr extends LineUr{
	protected c;
	protected x2;
	function __construct($a, $b, $c){
		parent::__construct($a, $b);
		$this->c=$c;
	}
	protected function dir($a, $b, $c) {
		$dir = $b*$b - 4*$a*$c;
		return $dir;
	}
	function KvadrUr($a, $b, $c) {
		if ($a == 0) {
			return $this->LineUr($a, $b);
		}
		$dir = $this->dir();
		if ($dir > 0) {
			$x = (-1*$b + sqrt($dir))/(2*$a);
			$x2 = (-1*$b - sqrt($dir))/(2*$a);
			$this->x = $x;
			$this->x2 = $x2;
			return array($x, $x2);
		} else ($dir = 0) {
			$x = (-1*$b)/(2*$a);
			$this->x = $x;
			return array($x);
		}
		throw new BuhsovaException ("нет решения");
	}
}























