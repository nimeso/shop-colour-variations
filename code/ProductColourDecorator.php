<?php
class ProductColourDecorator extends DataObjectDecorator{
	
	function getImages(){
		$colourTypes = $this->owner->VariationAttributeTypes('IsColour = 1');
		if($colourTypes->exists()){ // yes it has a colour attribute type
			foreach($colourTypes as $colourType){
				$colourTypeID = $colourType->ID;
			}
			$variationsAll = $this->owner->Variations();
			if($variationsAll->exists()){ 
				$usedColours = array();
				$colorImages = new DataObjectSet();
				foreach($variationsAll as $variation){
					$variationValues = $variation->AttributeValues('TypeID = '.$colourTypeID);
					if($variationsAll->exists()){ 
						foreach($variationValues as $variationValue){
							$curColour = $variationValue->Colour;
							if(in_array($curColour,$usedColours) && $variation->ImageID > 0){ // yes this colour has been used
								
							}else{ // this colour has not been used add to checked array
								$usedColours[] = $curColour;
								$obj = new DataObject(
									array(
										"ID" => $variation->ID,
										"Image" => $variation->Image(),
										"Colour" => $curColour,
										"ColourLabel" => $variationValue->Value,
										"ColourID" => $variationValue->ID,
										"DetailsLink" => $this->owner->Link()."?colour=".$variationValue->ID
									)
								);
								$colorImages->push($obj);
							}
							
						}
					}
				}
				return $colorImages;
			}
		}else{ /// product has no colour variations
			if($this->owner->ImageID > 0){
				$colorImages = new DataObjectSet();
				$obj = new DataObject(
					array(
						"Image" => $this->owner->Image(),
						"Colour" => null,
						"DetailsLink" => $this->owner->Link()
					)
				);
				$colorImages->push($obj);
				return $colorImages;
			}
		}
	}
	
}
