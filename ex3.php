
<?php
function compare($a, $b)
{
  if ($a % 2 == 0 && $b % 2 != 0) {
    return -1;
  } elseif ($a % 2 != 0 && $b % 2 == 0) {
    return 1;
  } else {
    return $a - $b;
  }
}

function sortOddEven($array)
{
  usort($array, "compare");
  return $array;
}

// Coloque aqui o seu array (Input)
$input = array(3, 1, 2, 4, 6, 5);

$result = sortOddEven($input);
echo "Output: " . implode(", ", $result);
?>
