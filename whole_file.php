<?php
$data = file_get_contents("test.txt");
$impdata = str_replace("\n", "<br />", $data);
echo $impdata;
