<?php
if(isset($_GET['action'])) {
    $products = simplexml_load_file('products.xml');
    $id = $_GET['id'];
    $index = 0;
    $i = 0;
    foreach($products->product as $product) {
        if($product['id']==$id){
            $index = $i;
            break;
        }
        $i++;
    }
    unset($products->product[$index]);
    file_put_contents('products.xml', $products->asXML());
    header("location:list.php?id=".$id);
}
?>
<a href="index.php?id=<?php echo $product['id']; ?>">Back</a>
