
;(function($) { 
	$(document).ready(function() {
		$("a.colourListingSwatch").live("click",function(){
			var colourID = $(this).attr("rel");
			if(colourID > 0){
				$(this).parent().parent().find(".productListingImagesHolder").find(".productListingImage").stop().fadeOut(400);
				$(this).parent().parent().find(".productListingImagesHolder").find(".image_"+colourID).stop().fadeIn(200);
				$(this).parent().find(".colourListingSwatch").removeClass("current");
				$(this).addClass("current");
			}
		});
		
		$("a.colourMainSwatch").live("click",function(){
			var colourID = $(this).attr("rel");
			if(colourID > 0){
				$(this).parent().parent().find("#ProductImagesHolder").find(".imageZoomer").stop().hide();
				$(this).parent().parent().find("#ProductImagesHolder").find(".image_zoomer_"+colourID).stop().fadeIn(400);
				$(this).parent().find(".colourMainSwatch").removeClass("current");
				$(this).addClass("current");
				
				var preQty = $("#Form_VariationForm_Quantity").val();
				$('option[value="'+colourID+'"]').attr("selected", "selected");
				$("#Form_VariationForm_Quantity").val(preQty);
				
				$(this).parent().parent().find("#ProductImagesHolder").find(".image_zoomer_"+colourID).anythingZoomer();
				//$(this).parent().parent().find("#ProductImagesHolder").find(".image_"+colourID).parent().anythingZoomer();
			}
		});
		
		var selectedColour = $.url().param("colour");
		if(selectedColour && selectedColour.length > 0){
			if($("#ProductImagesHolder").find(".image_zoomer_"+selectedColour).length > 0){
				$("#ProductImagesHolder .imageZoomer").hide();
				$("#ProductImagesHolder .image_zoomer_"+selectedColour).show();
				$('option[value="'+selectedColour+'"]').attr("selected", "selected");
				$(".colourMainSwatch").removeClass("current");
				$(".colourMainSwatch[rel='"+selectedColour+"']").addClass("current");
				
				$("#ProductImagesHolder .image_zoomer_"+selectedColour).anythingZoomer();
			}
		}else{
			$("#ProductImagesHolder .imageZoomer").hide();
			$("#ProductImagesHolder .imageZoomer").first().show();
			$("#ProductImagesHolder .imageZoomer").first().anythingZoomer();
		}
		
		
		
		$("#Form_VariationForm_Quantity").val(1);
		
		//$("#ProdImage_10").anythingZoomer();
		
		$("select").change(function () {
			if($("#ProductImagesHolder .image_zoomer_"+$(this).val()).length > 0){
				$("#ProductImagesHolder .imageZoomer").hide();
				$("#ProductImagesHolder .image_zoomer_"+$(this).val()).fadeIn(400);
				$("#ProductImagesHolder .image_zoomer_"+$(this).val()).anythingZoomer();
				$(".mainColourSelector a").removeClass("current");
				$(".mainColourSelector a[rel^="+$(this).val()+"]").addClass("current");
			}
		});
		
	});
})(jQuery);