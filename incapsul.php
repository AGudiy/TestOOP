<?php

class Base
{
	public $a='a';
	protected $b='b';
	private $c='c';
	function properties()
	{
		echo '<br>'.$a;
		echo '<br>'.$b;
		echo '<br>'.$c;
	}
}

$b=new Base;
echo $b->a;
echo $b->b;
echo $b->c;
echo $b->properties();
