function hideShowShoes() {
	var $shoes = document.getElementsByClassName('shoes');
	var $shoe, index;

	$shoes = $shoes.length ? $shoes : [$shoes];
	for (index = 0; index < $shoes.length; index++) {
		$shoe = $shoes[index];

		if (isElementHidden($shoe)) {
			$shoe.style.display = '';

			if (isElementHidden($shoe)) {
				$bottom.style.display = 'block';
			}
		} else {
			$shoe.style.display = 'none';
		}
		function isElementHidden ($shoe) {
			return window.getComputedStyle($shoe, null).getPropertyValue('display') === 'none';
		}
	}
}
