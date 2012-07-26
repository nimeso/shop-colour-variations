<?php
class ProductVariationColourDecorator extends DataObjectDecorator{
	
	function updateCMSFields(&$fields){
		$fields->push(new ImageField("Image","Image"));
	}
	
}
