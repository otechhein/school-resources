<?php
// 5. Logical Operators
$bool1 = true;
$bool2 = false;

$andResult = $bool1 && $bool2;
$orResult = $bool1 || $bool2;
$notResult = !$bool1;

echo "Logical Operators:\n";
echo "AND: " . ($andResult ? 'true' : 'false') . "\n";
echo "OR: " . ($orResult ? 'true' : 'false') . "\n";
echo "NOT: " . ($notResult ? 'true' : 'false') . "\n\n";
