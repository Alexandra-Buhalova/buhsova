class A{
}
class B extends A{
	public a;
	function __construct($a){
		$this->a = $a;
	}
}
class C extends B{
	public b;
	public c;
	public d;
	function __construct($a, $b, $c, $d){
		parent::__construct($a);
		$this->b=$b;
		$this->c=$c;
		$this->d=$d;
	}
}
$b = new A();
$a= new C(new A(), new A(), new B($b), $b);