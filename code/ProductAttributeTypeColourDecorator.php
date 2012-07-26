<?php
class ProductAttributeTypeColourDecorator extends DataObjectDecorator{
	function extraStatics(){
		return array(
			'db' => array(
				'IsColour' => 'Boolean'
			)
		);
	}
	
	function updateCMSFields(FieldSet &$fields){
		$fields->addFieldToTab('Root.Main',new CheckboxField("IsColour","Is this a colour variation type?"));
		
		/*
		$fieldList = array(
			'Value' => 'Value',
			'Sort' => 'Sort',
			'Colour' => 'Colour'
		);
		$fieldTypes = array(
			'Value' => 'TextField',
			'Sort' => 'TextField',
			'Colour' => 'ColorField'
		);
		
		$valuesTable = new TableField("Values", "ProductAttributeValue",$fieldList,$fieldTypes);
		// Need this or else the table shows all value objects
		$values = DataObject::get('ProductAttributeValue','TypeID = '.$this->owner->ID);
		$valuesTable->setCustomSourceItems($values);
		$fields->addFieldToTab("Root.Values", $valuesTable);
		*/
		
	}
}
