<?php
$string = "A'punya motor B' punya mobil C'. Jika C' ingin membeli mobil seharga $ 1,000,000 maka C' akan mendapatkan discount $ 20,000. B' akan mendapatkan bonus $30,000, dan 'A' akan mendapatkan bonus $ 20,000.";
$result = preg_replace("/[^a-zA-Z0-9]/", "", $string);
echo $result;
