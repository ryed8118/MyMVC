<?php

include_once 'bootstrap.php';

echo '<ol>';
$log = glob('logs/2013-'.$_GET['month'].'*');

foreach($log as $f){
    echo '<li><a href="' .$f. '">' . $f . '</a></li>';
}

echo '</ol>';