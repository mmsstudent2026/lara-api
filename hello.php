<?php

// plan text
$myName = "hein htet zan";

// md5 encrypted string
// ddd6d2c39c4a93260869cc88906c7b67

// PASSWORD_DEFAULT
// $2y$12$5a3KN39uBUmY3pklyBDicudPao0ItzfGvW6NdxTiJ4ycacMmET8wG

// echo password_hash($myName, PASSWORD_DEFAULT);
// echo "\n";

// echo password_hash($myName, PASSWORD_DEFAULT);
// echo "\n";

// echo password_hash($myName, PASSWORD_DEFAULT);
// echo "\n";


// echo password_verify("hein htet zan","$2y$12$5a3KN39uBUmY3pklyBDicudPao0ItzfGvW6NdxTiJ4ycacMmET8wG") ? "true" : "false";


// echo md5("a");

// echo "\n";

// echo md5("a");

// echo "\n";


$arr =  md5(json_encode(["a" => "aaa", "b" => "bbb", "c" => "ccc"]));
$arr2 =  md5(json_encode(["a" => "aaa", "b" => "bb", "c" => "ccc"]));

var_dump($arr);
var_dump($arr2);