<?php 
	createTable(100);

	function createTable(int $number): ?array {
		$tab = [];
		for ($i; $i < $number; $i++) {
			do {
				$rand = random_int(0, 100);
			} while (in_array($rand, $tab));
			$tab[] = $rand;
		}
		echo implode(", ", $tab)."\n";
		return $tab;
	}
?>