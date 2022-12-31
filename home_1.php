<?php
require 'vendor/autoload.php';
use Symfony\Component\DomCrawler\Crawler;

$html = <<<'HTML'
<!DOCTYPE html>
<html>
    <body>
        <p class="message">Hello World!</p>
        <p>Hello Crawler!</p>
    </body>
</html>
HTML;

$crawler = new Crawler($html);

// foreach ($crawler as $domElement) {
//     var_dump($domElement->nodeName);
// }

echo $crawler->filter('body > p');

?>