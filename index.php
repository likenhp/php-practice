<!DOCTYPE html>
<html>
	<head>
	</head>

	<body>
		<?php
			$test = 'test';
			$test = true;
			$test = 7357;

			CONST IMMUTABLE = 'hello world';
			
			print $test;

			$new = $test . IMMUTABLE;

			print $new;

			if ($test === $new) {
				echo 'hello';
			} else {
				echo 'world';
			}

			$a
			do {
				# code... will run at least once
			} while ($a <= 10) {
				$a++;
			}

			# associative arrays (aka JS objects)
			$array = [
				"name1" => "Ken",
				"name2" => "Kevin"
			];

			foreach ($array as $key => $value) {
				print $key;
				print $value;
			}

			$iter = 1;
			while ($iter++) {
				print $iter;
				while ($iter >= 10) {
					break 2; # <-- lets you break out of both loops
				}
			}

			$cont = 1;
			while ($cont < 10) {
				$cont++;
				if ($cont === 5) {
					continue; # <-- skip that particular iteration (in this case skip the fifth loop), will ignore everything below
				}
				echo $cont
			}

		?>
	</body>
</html>
