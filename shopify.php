<?php
$products_array = array(
    "product" => array( 
        "title"        => "Test Product 3",
        "body_html"    => "<strong>Description!</strong>",
        "vendor"       => "DC",
        "product_type" => "Check Product 3",
        "published"    => true ,
        "tags" => "Emotive, Flash Memory, MP3, Music",
        "variants"     => array(
                array(
                    'name' => 'Color',
                    'title'=> 'Color',
                    "option1"   => 'White',
                    "sku"     => "t_009",
                    "price"   => 50.00,
                    "taxable" => false,
                ),
                array(
                    'name' => 'Color',
                    'title'=> 'Color',
                    "option1"   => 'Red',
                    "sku"     => "t_009",
                    "price"   => 50.00,
                    "taxable" => false,
                ),
            ),  
            "options"     => array(
                array(
                    'name' => 'Color',
                    'title'=> 'Color',
                    "option1"   => 'White',
                    "sku"     => "t_009",
                    "price"   => 50.00,
                    "taxable" => false,
                ),
                array(
                    'name' => 'Size',
                    'title'=> 'Size',
                    'value' => 'Small',
                    "option1"   => 554,
                    "sku"     => "t_009",
                    "price"   => 50.00,
                    "taxable" => false,
                ),
                array(
                    'name' => 'Image',
                    'title'=> 'Image',
                    'value' => 'img1',
                    "option1"   => 554,
                    "sku"     => "t_009",
                    "price"   => 50.00,
                    "taxable" => false,
                ),
            ),  
            // 'options'=> array(
            //         'name' => 'Color',
            //         'value'=>'White',
            // ),
            // 'options'=> array(
            //         'name' => 'Size',
            //         'value'=>'Small',
            // ),
            'images'=> [
                [
                    'src'=>'https://cdn.shopify.com/s/files/1/0396/4810/0511/products/5ea44137ab1db.png?v=1591582054',
                ],
                [
                    'src'=>'https://cdn.shopify.com/s/files/1/0396/4810/0511/products/5ea444229ad34.png?v=1591582054',
                ]
                ],
                
    )
);
$API_KEY = '566fa3d317e1a9b223f15258f38bbf21';
$PASSWORD = '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';
$SHOP_URL = 'fashion-mart-8751.myshopify.com';
$SHOPIFY_API = "https://".$API_KEY.":".$PASSWORD.'@'.$SHOP_URL.'/admin/api/2022-10/products.json';
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $SHOPIFY_API);
$headers = array(
    "Authorization: Basic ".base64_encode("$API_KEY:$PASSWORD"),
    "Content-Type: application/json",
    "charset: utf-8"
);
curl_setopt($curl, CURLOPT_HTTPHEADER,$headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_VERBOSE, 0);
curl_setopt($curl, CURLOPT_HEADER, 1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($products_array));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

$response = curl_exec ($curl);
curl_close ($curl);
echo "<pre>";
print_r($response);
echo "</pre>";
?>