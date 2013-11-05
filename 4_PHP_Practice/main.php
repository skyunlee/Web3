<?php include('header.php'); ?>


<?php
	//create array of all the menu items
	$menuLists = array();

	//array for pastries
	$menuLists['pastries'] = array(
		'Blueberry Pie' => array('price'=>3.50, 'calories'=>500),
		'Brownies' => array('price'=>2.50, 'calories'=>350),
		'Cakepop' => array('price'=>2.25, 'calories'=>320),
		'Chocolate Croissant' => array('price'=>2.25, 'calories'=>320),
		'Cupcake' => array('price'=>3.45, 'calories'=>600),
		'Donuts' => array('price'=>1.25, 'calories'=>220),
		'Macarons' => array('price'=>2.65, 'calories'=>100),
		'Tart' => array('price'=>4.50, 'calories'=>450)
		);

	//array for drinks
	$menuLists['drinks'] = array(
		'Latte' => array('price'=>3.25, 'calories'=>290),
		'Iced Coffee' => array('price'=>2.15, 'calories'=>10),
		'Hot Chocolate' => array('price'=>2.95, 'calories'=>385),
		'Caramel Coffee' => array('price'=>2.75, 'calories'=>450)
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