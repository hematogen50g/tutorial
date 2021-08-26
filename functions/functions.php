<?php
	function sum(...$args)
	{
		$s=0;
		foreach ($args as $n) 
		{
			$s += $n;
		}
		return $s;
	}
	function mult(...$args)
	{
		return array_reduce($args, fn($carry, $n) => $carry + $n);
	}
?>
<?php include_once "../../header.php"?>
<body>
	<h1>
		<?php				
			echo sum(2,7).'<br>';
			echo mult(5,6);				
		?>
	</h1>
</body>

