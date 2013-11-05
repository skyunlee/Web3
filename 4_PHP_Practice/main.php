<?php include('header.php'); ?>

	<h2>menu will appear below</h2>

	<?php
		//create array of all the menu items
		$pastries = array(
			'blueberry pie' => array('price'=>3.50, 'calories'=>500),
			'brownies' => array('price'=>2.50, 'calories'=>350),
			'cakepop' => array('price'=>2.25, 'calories'=>320),
			'caramelcoffee' => array('price'=>2.75, 'calories'=>450),
			'chocolatecroissant' => array('price'=>2.25, 'calories'=>320),
			'cupcake' => array('price'=>3.45, 'calories'=>600),
			'donuts' => array('price'=>1.25, 'calories'=>220),
			'hotchoco' => array('price'=>2.95, 'calories'=>385),
			'icedcoffee' => array('price'=>2.15, 'calories'=>10),
			'latte' => array('price'=>3.25, 'calories'=>290),
			'macarons' => array('price'=>2.65, 'calories'=>100),
			'tart' => array('price'=>4.50, 'calories'=>450)
			);

		echo $pastries['brownies']['price'];

		// header('Access-Control-Origin: *');
		// header('Content-Type: application/json');
		// echo json_encode($pastries);

		// echo "HI";

	?>

<?php include('footer.php'); ?>