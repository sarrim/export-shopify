<?php
    # scraping books to scrape: https://books.toscrape.com/
    require 'vendor/autoload.php';
    $httpClient = new \GuzzleHttp\Client();
    $response = $httpClient->get('https://books.toscrape.com/');
    // $response = $httpClient->get('https://patpatwholesale.com/collections/all');
    $htmlString = $response->getBody();

    // $json = json_encode($htmlString, true);
    // var_dump($json);

    // print_r($jsonResponse);
    // die;


    //add this line to suppress any warnings
    libxml_use_internal_errors(true);
    $doc = new DOMDocument();
    $doc->loadHTML($htmlString);
    
    // print_r($doc);
    // die;
    
    $xpath = new DOMXPath($doc);
    $titles = $xpath->evaluate('//div[@class="grid-uniform"]//div[@class="grid__item"]//div[@class="relative"]//a//p');
    $titles = $xpath->evaluate('//div[@class="grid-uniform"]//div[@class="grid__item"]//div[@class="on-sale"]//a[@class="grid-link"]//p[@class="grid-link__title"]');
    $titles = $xpath->evaluate('//div[@class="grid-uniform"]//div[@class="grid__item"]//div[@class="on-sale"]//a//span/p');

    $titles = $xpath->evaluate('//ol[@class="row"]//li//article//h3/a');

    // print_r($titles);
    // die;

    // $prices = $xpath->evaluate('//ol[@class="row"]//li//article//div[@class="product_price"]//p[@class="price_color"]');
    $prices = $xpath->evaluate('//ol[@class="row"]//li//article//div[@class="product_price"]//p[@class="price_color"]');
    foreach ($titles as $key => $title) {
        echo $title->textContent . ' @ ' . $prices[$key]->textContent . PHP_EOL;
        echo '<br>';
    }
