<?php
$products = simplexml_load_file('products.xml');

if(isset($_POST['submitSave'])) {

    foreach($products->product as $product){
        if($product->id = $_POST['id']){
            $product->name = $_POST['name'];
            $product->price = $_POST['price'];
            $product->description = $_POST['description'];
            break;
        }
    }
    file_put_contents('products.xml', $products->asXML());
    header('location:list.php');
}
foreach($products->product as $product){
    if($product['id']==$_GET['id']){
        $id = $product['id'];
        $name = $product->name;
        $price = $product->price;
        $description = $product->description;
        break;
    }
}
?>
<form method="post">
    <table cellpadding="2" cellspacing="2">
        <tr>
            <td>Id</td>
            <td><input type="text" name="id" value="<?php echo $id; ?>" readonly="readonly"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
        </tr>
        <tr>
            <td>price</td>
            <td><input type="text" name="price" value="<?php echo $price; ?>"></td>
        </tr>
        <tr>
            <td>description</td>
            <td><input type="text" name="description" value="<?php echo $description; ?>"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" value="Save" name="submitSave"></td>
        </tr>
    </table>
</form>
<a href="index.php?id=<?php echo $product['id']; ?>">Back</a><br>
<a href="create.php?id=<?php echo $product['id']; ?>">Create</a>
