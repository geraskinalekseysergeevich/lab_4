<?php
	$products = array(
        array(
            'id'=>1,
            'img'=>'source/shop/kaktus.jpg',
            'name'=> 'Kaktus-Plants',
            'price'=>  '85.000',
            'description'=>''
        ),
        array(
            'id'=>2,
            'img'=>'source/shop/landak.jpg',
            'name'=> 'Landak Plants',
            'price'=>  '105.000',
            'description'=>''
        ),
        array(
            'id'=>3,
            'img'=>'source/shop/kecubung.jpg',
            'name'=> 'Kecubung Plants',
            'price'=>  '85.000',
            'description'=>''
        ),
        array(
            'id'=>4,
            'img'=>'source/shop/kecubung2.jpg',
            'name'=> 'Kecubung Plants',
            'price'=>  '85.000',
            'description'=>''
        ),
        array(
            'id'=>5,
            'img'=>'source/shop/kecubung3.jpg',
            'name'=> 'Kecubung Plants',
            'price'=>  '85.000',
            'description'=>''
        ),
    );
    $products2 = $products;
	$xml =new DOMDocument('1.0','UTF-8');

	$root = $xml->createElement('products');
	$xml->appendChild($root);

	foreach ($products as $value ){
	    $product = $xml->createElement('product');
	    foreach ($value as $key=>$value){
	        $node = $xml->createElement($key,$value);
	        $product->appendChild($node);
	    }
	    $root->appendChild($product);

	}
	$xml->formatOutput = true;
	$xml->save('products.xml')or die('Error');
	print_r($products);
