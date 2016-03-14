<div class="carousel-1-tile">
	<div class="container">
		<div class="carousel-nav"></div>
		<div class="carousel">
			<div class="item">
				<?php foreach ($fields as $id => $field): ?>
					<?php print $field->content; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>
<script>
	 $(document).ready(function() {
		 $('.carousel-1-tile .content .field-name-field-background-image').after('<div class="sub-tile"></div>');
	 });
</script>