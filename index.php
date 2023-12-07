<?php
$nums = [15, 85, 15];
$target = 100;
echo "Assalomu alaykum<br>";
    for ($i = 0; $i < count($nums) - 1; $i++ )
        for ($f = $i + 1; $f < count($nums); $f ++)
            if ($nums[$i] + $nums[$f] === $target)
                echo "[$i, $f]";
?>
