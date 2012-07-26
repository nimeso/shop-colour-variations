<div id="ProductImagesHolder">
	<% control Images %>
		<div id="ProdImage_{$ID}" class="imageZoomer image_zoomer_{$ColourID}">
			<div class="productImage image_{$ColourID} small" <% if First %>style="display: block;"<% end_if %>>
				$Image.PaddedImage(430,430)
			</div>
			<div class="productImage image_{$ColourID} large" <% if First %>style="display: block;"<% end_if %>>
				$Image.PaddedImage(800,800)
			</div>
		</div>
	<% end_control %>
</div>