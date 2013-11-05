<?php include('header.php'); ?>


<?php
	//create array of all the menu items
	$menuLists = array();

	//array for pastries
	$menuLists['pastries'] = array(
		'Brownies' => array('price'=>2.50, 'calories'=>350, 'filename'=>'brownies.png'),
		'Cake Pop' => array('price'=>2.25, 'calories'=>320, 'filename'=>'cakepop.png'),
		'Chocolate Croissant' => array('price'=>2.25, 'calories'=>320, 'filename'=>'chocolatecroissant.png'),
		'Cupcake' => array('price'=>3.45, 'calories'=>600, 'filename'=>'cupcake.png'),
		'Donuts' => array('price'=>1.25, 'calories'=>220, 'filename'=>'donuts.png'),
		'Macarons' => array('price'=>2.65, 'calories'=>100, 'filename'=>'macarons.png'),
		'Fruit Tart' => array('price'=>4.50, 'calories'=>450, 'filename'=>'tart.png'),
		'Blueberry Pie' => array('price'=>3.50, 'calories'=>500, 'filename'=>'blueberrypie.png')
		);

	//array for drinks
	$menuLists['drinks'] = array(
		'Latte' => array('price'=>3.25, 'calories'=>290, 'filename'=>'latte.png'),
		'Iced Coffee' => array('price'=>2.15, 'calories'=>10, 'filename'=>'icedcoffee.png'),
		'Caramel Coffee' => array('price'=>2.75, 'calories'=>450, 'filename'=>'caramelcoffee.png'),
		'Hot Chocolate' => array('price'=>2.95, 'calories'=>385, 'filename'=>'hotchoco.png')
		);

	//echo $menuLists['pastries']['cakepop']['calories'];

	// //turning the list into json
	// header('Access-Control-Origin: *');
	// header('Content-Type: application/json');
	// echo json_encode($menuLists);
?>

<article class="pastries_menu">
	<h2>Pastries</h2>
<!-- 	<p class="itemName">
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
	</p> -->
	<?php $pastryList = $menuLists['pastries'];
		foreach($pastryList as $pastry => $pastryInfo){ ?>
			<p class="itemName"><?php echo $pastry; ?></p>
			<p class="itemInfo">$<?php echo $pastryInfo['price']; ?> / <?php echo $pastryInfo['calories']; ?> cal</p>
			<br><?php
		} ?>
</article>


<article class="drinks_menu">
	<h2>Coffee Drinks</h2>
	<?php $drinkList = $menuLists['drinks'];
		foreach($drinkList as $drink => $drinkInfo){ ?>
			<p class="itemName"><?php echo $drink; ?></p>
			<p class="itemInfo">$<?php echo $drinkInfo['price']; ?> / <?php echo $drinkInfo['calories']; ?> cal</p>
			<br><?php
		} ?>


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