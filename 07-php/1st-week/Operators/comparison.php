<?php

// 3. Comparison Operators
$p = 20;
$q = 20;

$isEqual = ($p == $q);
$isIdentical = ($p === $q);
$isNotEqual = ($p != $q);
$isNotIdentical = ($p !== $q);

echo "Comparison Operators:\n";
echo "Equal: " . ($isEqual ? 'true' : 'false') . "\n";
echo "Identical: " . ($isIdentical ? 'true' : 'false') . "\n";
echo "Not Equal: " . ($isNotEqual ? 'true' : 'false') . "\n";
echo "Not Identical: " . ($isNotIdentical ? 'true' : 'false') . "\n\n";
