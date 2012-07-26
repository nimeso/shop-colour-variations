<?php
class ProductAttributeValueColourDecorator extends DataObjectDecorator{
	function extraStatics(){
		return array(
			'db' => array(
				'Colour' => 'Varchar(64)'
			)
		);
	}
	
	function updateCMSFields(&$fields){
		$fields->addFieldToTab('Root.Main',new ColorField("Colour","Pick a colour"));
	}
	
	function updateTableFields (&$fields){
		$fields["Colour"] = "Colour";
	}
	
	function updateTableTypeFields (&$fields){
		$fields['Colour'] = "ColorField";
	}
}
