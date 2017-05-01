<?php

    $title = 'Homepage';

    require '../src/src.php';

$username = 'accounts@wearelighthouse.com';
$apikey = '8feb2dcd-e5bf-467a-be06-23a28fb665f3';
$project_id = '114588';

$sitemap = curl_init();

curl_setopt( $sitemap, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt( $sitemap, CURLOPT_HTTPHEADER, array('Accept: application/vnd.gathercontent.v0.5+json'));
curl_setopt( $sitemap, CURLOPT_USERPWD, $username . ':' . $apikey);
curl_setopt( $sitemap, CURLOPT_URL, 'https://api.gathercontent.com/items?project_id=' . $project_id);
curl_setopt( $sitemap, CURLOPT_RETURNTRANSFER, true );

$reply = json_decode( curl_exec( $sitemap ) );
curl_close( $sitemap );

?>

<body class="bg-4 spacing">

<?php

    print_r($reply);
?>

<?php include('../src/footer.php'); ?>
