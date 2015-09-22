<?php
foreach (glob("bin/*.php") as $filename){
    include $filename;
}

foreach (glob("etc/*.php") as $filename){
    include $filename;
}
?>