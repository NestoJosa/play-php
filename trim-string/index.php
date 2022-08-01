<?php


$in = "This is a great but albeit way to long title for any blog post page of any page in any town of any part of the world.";

$out = strlen($in) > 50 ? substr($in,0,50)."[...]" : $in;

echo $out;