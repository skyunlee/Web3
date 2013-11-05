<?php include('header.php'); ?>


<?php
	//create array of all the menu items
	$menuLists = array();

	//array for pastries
	$menuLists['pastries'] = array(
		'Brownies' => array('price'=>2.50, 'calories'=>350),
		'Cake Pop' => array('price'=>2.25, 'calories'=>320),
		'Chocolate Croissant' => array('price'=>2.25, 'calories'=>320),
		'Cupcake' => array('price'=>3.45, 'calories'=>600),
		'Donuts' => array('price'=>1.25, 'calories'=>220),
		'Macarons' => array('price'=>2.65, 'calories'=>100),
		'Fruit Tart' => array('price'=>4.50, 'calories'=>450),
		'Blueberry Pie' => array('price'=>3.50, 'calories'=>500)
		);

	//array for drinks
	$menuLists['drinks'] = array(
		'Latte' => array('price'=>3.25, 'calories'=>290),
		'Iced Coffee' => array('price'=>2.15, 'calories'=>10),
		'Caramel Coffee' => array('price'=>2.75, 'calories'=>450),
		'Hot Chocolate' => array('price'=>2.95, 'calories'=>385)
		);

	//echo $menuLists['pastries']['cakepop']['calories'];

	// //turning the list into json
	// header('Access-Control-Origin: *');
	// header('Content-Type: application/json');
	// echo json_encode($menuLists);
?>

<article>
	<h2>Pastries</h2>
	<p class="itemName">
		<?php 
			$pastryList = $menuLists['pastries'];
			foreach($pastryList as $pastry => $pastryInfo){
				echo $pastry; ?>
				<br>
				<p class="itemInfo">
					$<?php echo $pastryInfo['price']; ?> / <?php echo $pastryInfo['calories']; ?> cal
				</p>
				<br> <?php
			}
		?>
	</p>

	<h2>Coffee Drinks</h2>
	<p class="itemName">
		<?php
			$drinkList = $menuLists['drinks'];
			foreach($drinkList as $drink => $drinkInfo){
				echo $drink; ?> 
				<br>
				<p class="itemInfo">
					<!--"$price / calories"-->
					$<?php echo $drinkInfo[price]; ?> / <?php echo $drinkInfo['calories']; ?> cal
				</p>
				<br> <?php
			}
		?>
	</p>


	<!--code below displays the entire list of all items (pastry and drinks)-->
 <!-- 	<?php
		foreach($menuLists as $menuList => $itemList){
			foreach ($itemList as $item => $itemDetail){
				echo $item; ?> <br> <?php
			}
		}
		// endforeach;
	?>  -->


	<!--code below didn't work-->
<!-- 	<?php
		foreach(array_slice(menuLists, 1) as $itemList){
			foreach($itemList as $item => $itemDetail){
				echo $item;
			}
		}
	?> -->

</article>


<?php include('footer.php'); ?>