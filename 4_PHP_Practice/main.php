<?php include('header.php'); ?>


<?php
	//create array of all the menu items
	$menuLists = array();

	//array for pastries
	$menuLists['pastries'] = array(
		'blueberry pie' => array('price'=>3.50, 'calories'=>500),
		'brownies' => array('price'=>2.50, 'calories'=>350),
		'cakepop' => array('price'=>2.25, 'calories'=>320),
		'chocolate croissant' => array('price'=>2.25, 'calories'=>320),
		'cupcake' => array('price'=>3.45, 'calories'=>600),
		'donuts' => array('price'=>1.25, 'calories'=>220),
		'macarons' => array('price'=>2.65, 'calories'=>100),
		'tart' => array('price'=>4.50, 'calories'=>450)
		);

	//array for drinks
	$menuLists['drinks'] = array(
		'latte' => array('price'=>3.25, 'calories'=>290),
		'iced coffee' => array('price'=>2.15, 'calories'=>10),
		'hot chocolate' => array('price'=>2.95, 'calories'=>385),
		'caramel coffee' => array('price'=>2.75, 'calories'=>450)
		);

	//echo $menuLists['pastries']['cakepop']['calories'];

	// //turning the list into json
	// header('Access-Control-Origin: *');
	// header('Content-Type: application/json');
	// echo json_encode($menuLists);
?>

<article>
	<h2>Pastries</h2>
	<?php
		foreach($menuLists as $menuList => $itemList){
			foreach ($itemList as $item => $itemDetail){
				echo $item; ?> <br> <?php
			}
		}
		// endforeach;
	?>

	<h2>Coffee Drinks</h2>
	<?php
	?>
</article>


<?php include('footer.php'); ?>