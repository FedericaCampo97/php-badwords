<?php
$input1 = $_POST['para'];
echo ('<p>' . $input1 . '</p>');
$input2 = $_POST['censured'];
$password = str_repeat("*", strlen($input2));
echo ($password);
