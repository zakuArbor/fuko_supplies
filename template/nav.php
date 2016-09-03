<?php 
$img = array("/images/icon/house.png", "/images/icon/cart.png", "/images/icon/bell.png", "/images/icon/star.png");
$nav = array("<img src = '$img[0]' alt='' /><a href = '/index.html'>Home</a> ",
			"<img src = '$img[1]' alt='' /><a href = '/shop.html'>Shop</a>",
			"<img src = '$img[2]' alt='' /><a href = '/support.html'>Support</a>",
			"<img src = '$img[3]' alt='' /><a href = '/credit.html'>Credit</a>"
			);

foreach ($nav as $value) {
	echo "$value    ";
}
?>