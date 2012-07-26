<div class="productListingImagesHolder">
	<% control Images %>
		<a href="$DetailsLink" class="productListingImage image_{$ColourID}" <% if First %>style="display: block;"<% end_if %>>
		$Image.CroppedImage(165,165)
		</a>
	<% end_control %>
</div>