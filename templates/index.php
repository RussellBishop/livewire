<ul>

<?php

    $relDir = '/templates/';

    $rootDir = $_SERVER['DOCUMENT_ROOT'].'/templates/';

    $files = scandir($rootDir);

    sort($files);

    foreach($files as $file){

        $file_parts = pathinfo($file);

        if($file_parts['filename'] != 'index' && $file_parts['extension'] == 'php') {
            echo'<li><a href="'.$relDir.$file.'">'.$file.'</a></li>';
        }
    }

?>

</ul>
