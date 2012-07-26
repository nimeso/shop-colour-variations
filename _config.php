<?php
DataObject::add_extension("ProductAttributeType","ProductAttributeTypeColourDecorator");
DataObject::add_extension("ProductAttributeValue","ProductAttributeValueColourDecorator");
DataObject::add_extension("ProductVariation","ProductVariationColourDecorator");
DataObject::add_extension("Product","ProductColourDecorator");
Object::add_extension('Page_Controller', 'ProductColoursController');