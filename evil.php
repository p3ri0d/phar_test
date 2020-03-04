<?php
$filename=$_GET['filename'];
class AnyClass{
    $output = 'flag{123456}';
    function __destruct()
    {
        eval($this -> output);
    }
}
file_exists($filename);
