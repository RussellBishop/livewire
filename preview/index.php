<?php
    // The URL you're watching
    $url = '/projects/clarkebanks/index.php';
    // Set up your screen sizes
    $sizes = array(320, 760, 960, 1200);
?>

<!doctype html>

<head>

<style>
* {
	margin: 0; padding: 0;
}
body {
	overflow-x: scroll; overflow-y: hidden;
	max-height: 100vh;
	font-size: 0; white-space: nowrap;
}
iframe {
	height: calc(100vh - 30px); overflow-x: hidden; overflow-y: scroll;
	border: none;
}
.window {
    display: inline-block;
}
.window:before {
    display: block;
    line-height: 30px;33
    height: 30px;
    font-size: 16px;]
    font-family: bariol;
    background: #dedede;
    border-right: 1px solid #ccc;
    text-align: center;
    content: attr(data-width) 'w';
}
</style>

</head>

<body>

<?php
    foreach ($sizes as $size) {
        echo '<div class="window" data-width="'.$size.'"><iframe src="'.$url.'" width="'.$size.'"></iframe></div>';
    }
?>

</body>
