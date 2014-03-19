<?php

use Wikimart\MerchantAPIClient\Client;

require_once 'vendor/autoload.php';

$client = new Client( 'http://merchant-api-host.com', 'app_id', 'app_secret' );
$result = $client->methodGetOrderList( 100, 0 );
var_dump( $result );