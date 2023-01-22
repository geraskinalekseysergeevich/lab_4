<?php
if(isset($_POST['submitSave'])) {
    $products = simplexml_load_file('products.xml');
    $product = $products->addChild('product');
    $z = 0;
    foreach ($products as $product){
                $z++;
                $product->addAttribute('id', $z);
            }
            $product->addChild('name', $_POST['name']);
            $product->addChild('price', $_POST['price']);
            $product->addChild('description', $_POST['description']);
            file_put_contents('products.xml', $products->asXML());
            header('location:list.php');

}
?>
<form method="post">
    <table cellpadding="2" cellspacing="2">
        <tr>
            <td>Id</td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Price ($):</td>
            <td><input type="number" name="price"></td>
        </tr>
        <tr>
            <td>Description:</td>
            <td><input type="text" name="description"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Save" name="submitSave"></td>
        </tr>
    </table>
</form>
<a href="update.php?id=<?php echo $product['id']; ?>">Update</a><br>
<a href="index.php?id=<?php echo $product['id']; ?>">Back</a><br>
<form action="delete.php" method="post" name="delete">
	<a href="delete.php?action=delete&id=<?php echo $product['id']; ?>"onclick="return confirm('Are you sure?')">Delete</a>
</form>
