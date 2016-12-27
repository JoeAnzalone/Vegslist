<?php

require_once 'vendor/autoload.php';

use Jcroll\FoursquareApiClient\Client\FoursquareClient;

$config = parse_ini_file('.env');
$foursquare_client_id = $config['FOURSQUARE_CLIENT_ID'];
$foursquare_client_secret = $config['FOURSQUARE_CLIENT_SECRET'];

$foursquare = FoursquareClient::factory([
    'client_id'     => $foursquare_client_id,
    'client_secret' => $foursquare_client_secret,
]);

$venue_ids = require_once 'venues.php';

$venues_csv = '"Name","Foursquare URL","Address","Latitude","Longitude"';
$venues_csv .= "\n";

foreach ($venue_ids as $id) {
    $command = $foursquare->getCommand('venues', [
        'venue_id'  => $id,
    ]);

    $results = (array) $foursquare->execute($command); // returns an array of results

    $venue = $results['response']['venue'];

    $name = $venue['name'];
    $url = $venue['canonicalUrl'];
    $lat = $venue['location']['lat'];
    $long = $venue['location']['lng'];
    $address = implode(' ', $venue['location']['formattedAddress']);

    $info = [$name, $url, $address, $lat, $long];
    $info_escaped = [];

    foreach ($info as $key => $value) {
        $info_escaped[$key] = '"' . str_replace('"', '""', $value) . '"';
    }

    $venues_csv .= implode(',', $info_escaped);
    $venues_csv .= "\n";
}

header('Content-Type: text/csv');

echo $venues_csv;
