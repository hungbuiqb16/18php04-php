<?php
  function mySum($numberA, $numberB) {
  	return $numberA + $numberB;
  }
  echo "<br>";
  echo mySum(5,7);
  echo "<br>";
  $total = mySum(5,8);
  if ($total % 2 == 0) {
  	echo "Tong la so chan";
  } elseif ($total % 3 == 0) {
  	echo "Tong la so le va chia het cho 3";
  } else {
  	echo "Tong la so le va khong chia het cho 3";
  }
?>