<?php

include ("dbcontroller.php");
$db_handle = new DBController1();
if(!empty($_GET["action"])) {
	switch($_GET["action"]) {
		case "add":
			if(!empty($_POST["quantity"])) {
				$productByCode = $db_handle->runQuery("SELECT * FROM books WHERE book_id='" . $_GET["code"] . "'");
				$itemArray = array(base64_encode($productByCode[0]["book_id"])=>array('name'=>$productByCode[0]["book_title"], 'book_id'=>$productByCode[0]["book_id"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["book_mrp"]));
				if(!empty($_SESSION["cart_item"])) {
					if(in_array(base64_encode($productByCode[0]["book_id"]),$_SESSION["cart_item"])) {
						foreach($_SESSION["cart_item"] as $k => $v) {
								if(base64_encode($productByCode[0]["book_id"]) == $k)
									$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"];
						// --- Update in session cart item databases ----		
						}
					} else {
						$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
						//--- Insert in session cart item ----
					}
				} else {
					$_SESSION["cart_item"] = $itemArray; 
					//--- Insert in session cart item ----
				}
			}
		break;
		case "remove":
			if(!empty($_SESSION["cart_item"])) {
				foreach($_SESSION["cart_item"] as $k => $v) {
						if(base64_encode($_GET["code"]) == $k)
							unset($_SESSION["cart_item"][$k]);	//--- Deletion in session cart item ----		
						if(empty($_SESSION["cart_item"]))
							unset($_SESSION["cart_item"]);		//--- Deletion in session cart item ----		
				}
				
			}
			
		break;
		case "empty":
			unset($_SESSION["cart_item"]);
		break;	
	}
	header('Location: '.$_SERVER['PHP_SELF']); 
}
?>
<HTML>
<HEAD>
<TITLE> Shopping Cart</TITLE>
<link href="css/style1.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>
	<div id="shopping-cart">
		<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="product_summary.php?action=empty">Empty Cart</a></div>
		<?php
		if(isset($_SESSION["cart_item"])){
			$item_total = 0;
		?>	
		<table cellpadding="10" cellspacing="1">
			<tbody>
				<tr>
					<th><strong>Name</strong></th>
					<th><strong>Code</strong></th>
					<th><strong>Quantity</strong></th>
					<th><strong>Price</strong></th>
					<th><strong>Action</strong></th>
				</tr>	
			<?php	
				
			foreach ($_SESSION["cart_item"] as $item){
			?>
				<tr>
					<td  align="center"><strong><?php echo $item["name"]; ?></strong></td>
					<td align="center"><?php echo $item["book_id"]; ?></td>
					<td align="center"><?php echo $item["quantity"]; ?></td>
					<td align="center"><?php echo "Rs.".$item["price"]; ?></td>
					<td align="center"><a href="product_summary.php?action=remove&code=<?php echo $item["book_id"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
				$item_total += ($item["price"]*$item["quantity"]);
			}
			?>
				<tr>
				<td colspan="5" align=right><strong>Total:</strong> <?php echo "Rs.".$item_total; ?></td>
				</tr>
			</tbody>
		</table>
		<input type="hidden" id="stmt" value="1"/>
		  <?php
		} else { ?>
			<input type="hidden" id="stmt" value="0"/>	
		<?php 
		}

		?>
		<input type="submit" id="place_order" class="btn btn-large  btn-primary pull-right" value="Place Order"></input>
	</div>
	</br></br>
	<div id="product-grid">
		<div class="txt-heading">Products</div>
		<?php
		$product_array = $db_handle->runQuery("SELECT * FROM books ");
		if (!empty($product_array)) { 
			foreach($product_array as $key=>$value){
		?>
				<div class="product-item">
					<form method="post" action="product_summary.php?action=add&code=<?php echo $product_array[$key]["book_id"]; ?>">
					<div class="product-image"><img src="../logo/<?php echo base64_encode("l2w".base64_encode($product_array[$key]["book_logo"])); ?>.jpg" height="65" width="65"></div>
					<div><strong><?php echo $product_array[$key]["book_title"]; ?></strong></div>
					<div ><?php echo $product_array[$key]["book_catagory"]."(".$product_array[$key]["book_language"].")"; ?></div>
					<p align="center">Available only: <?php echo $product_array[$key]["number_of_copies"]; ?></p>
					<div class="product-price"><?php echo "Rs.".$product_array[$key]["book_mrp"]; ?></div>
					<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
					</form>
				</div>
		<?php
			}
		}
		?>
	</div>
</BODY>

</HTML>