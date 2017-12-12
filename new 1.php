<html>
	<head>
		<title>Решение квадратного уравнения</title>
	</head>
	<body>
		<?php
			if (isset($_GET['a'])) {
				$a = $_GET['a'];
			} else {
				$a = '';
			}
			if (isset($_GET['b'])) {
				$b = $_GET['b'];
			} else {
				$b = '';
			}
			if (isset($_GET['c'])) {
				$c = $_GET['c'];
			} else {
				$c = '';
			}
		?>
		
		<h1>Решение квадратного уравнения</h1>
		<h3>Введите коэффициенты :</h3>
		<h3>a * x<sup>2</sup> + b * x + с = 0</h3>
		
		<form method="GET">
			<p>a = <input type="text" name="a" value="<?= htmlspecialchars($a); ?>"></p>
			<p>b = <input type="text" name="b" value="<?= htmlspecialchars($b); ?>"></p>
			<p>c = <input type="text" name="c" value="<?= htmlspecialchars($c); ?>"></p>
			<input type="submit" value="Решить">
		</form>
		
		<hr/>
		
		<?php
			$a = str_replace(',', '.', $a);
			$b = str_replace(',', '.', $b);
			$c = str_replace(',', '.', $c);
			
			if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
				$D = pow($b, 2) - 4*$a*$c;
					if ($D > 0) {
						$x1 = ((-1)*$b+sqrt($D))/(2*$a);
						$x2 = ((-1)*$b-sqrt($D))/(2*$a);
						$x1 = number_format($x1, 2, ',', '');
						$x2 = number_format($x2, 2, ',', '');
						echo "Квадратное уравнение:<br/> <b> $a x<sup>2</sup> + $b x + $c = 0</b> <br/> имеет два решения <br/> x<sub>1</sub> = $x1; <br/> x<sub>2</sub> = $x2;";
					} elseif ($D == 0) {
						$x=((-1)*$b)/(2*$a);
						$x = number_format($x, 2, ',', '');
						echo "Квадратное уравнение:<br/> <b> $a x<sup>2</sup> + $b x + $c = 0</b> <br/> имеет  одно решение <br/> x = $x;";
					} else {
						echo "Квадратное уравнение:<br/> <b> $a x<sup>2</sup> + $b x + $c = 0</b> <br/> не имеет решений";
					}
			} else if ($a != '' || $b != ''|| $c != ''){
				echo 'Переменные не могут являться не числовыми значениями';
			}
		?>
	</body>
</html>
