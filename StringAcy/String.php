<?php
$test = "     JANE_DOE@ComputerScience2026!!!     ";
//expected output: jane.doe_cs2026

echo strtolower(str_replace("@", "_", str_replace("_", ".", str_replace("ComputerScience2026!!!", "cs2026", $test))));
?>
