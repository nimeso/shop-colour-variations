<?php
class ProductColoursController extends Extension  { 
    
	public function onAfterInit() {
		Requirements::javascript("shop-colour-variations/javascript/jquery.url.js");
		Requirements::javascript("shop-colour-variations/javascript/jquery.anythingzoomer.min.js");
		Requirements::javascript("shop-colour-variations/javascript/colourvariations.js");
	}
	
}