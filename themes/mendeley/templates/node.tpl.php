<?php if(!drupal_is_front_page()):?>
<div class="node">
	<?php print render($content); ?>
</div>
<?php endif;?>