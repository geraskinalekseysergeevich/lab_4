<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$products = simplexml_load_file('products.xml');
	?>
	<table cellpadding="2" cellspacing="2" border="1">
	    <tr>
	        <th>Id</th>
	        <th>Name</th>
	        <th>Price</th>
	        <th>Description</th>
	        <th>Options</th>
	    </tr>
	    <?php foreach($products->product as $product) { ?>
	        <tr>
	            <td><?php echo $product['id']; ?></td>
	            <td><?php echo $product->name; ?></td>
	            <td><?php echo $product->price; ?></td>
	            <td><?php echo $product->description;?></td>
	            <td><a href="update.php?id=<?php echo $product->id; ?>">Update</a>
	              </td>
	        </tr>
	    <?php } ?>
	    <a href="update.php?id=<?php echo $product['id']; ?>">Update</a><br>
	    <a href="list.php?id=<?php echo $product['id']; ?>">List</a><br>
	    <form action="delete.php" method="post" name="delete">
            <a href="delete.php?action=delete&id=<?php echo $product['id']; ?>"onclick="return confirm('Are you sure?')">Delete</a>
        </form>

	</table>
</body>
</html>
