<?php
$name = "John";

// 1. Pad the string with underscores (`_`) on the left side to make its total length 10 characters.
$name_left = str_pad($name,10,"_",STR_PAD_LEFT);

// 2. Pad the string with asterisks (`*`) on the right side to make its total length 8 characters.
$name_right = str_pad($name_left,18,"*",STR_PAD_RIGHT);

// 3. Print the resulting strings.
echo ($name_right);
?>