<?php
#----hightech - It's not a bug, it's a feature----#

$data = "hello world";

foreach (hash_algos() as $v) {
        $r = hash($v, $data, false);
        printf("%-12s %3d %s\n", $v, strlen($r), $r)."<br />";
}
?>
