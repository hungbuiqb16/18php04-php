<?php
  $n = 2;
  switch ($n) {
  	case '1':
  	case '3':
  	case '5':
  	case '7':
  	case '8':
  	case '10':
  	case '12':
  		echo " Thang" . $n . ' co 31 ngay';
  		break;
  	case '4':
  	case '6':
  	case '9':
  	case '11':
  		echo " Thang " . $n . " co 30 ngay";
  		break;
  	case '2':
  	    echo " Thang " . $n . " nam nhuan co 29 ngay, nam khong nhuan co 28 ngay";
  	    break;
  }