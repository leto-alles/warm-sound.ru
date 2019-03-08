<?php
if (!isset($discount) || $discount == '') {
	$discount = 10;
} else {
	switch ($discount) {
		case 5: $discount_get = 'wpv'; break;
		case 10: $discount_get = 'ude'; break;
	}
}
