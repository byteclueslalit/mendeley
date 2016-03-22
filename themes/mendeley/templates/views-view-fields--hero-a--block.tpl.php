<?php 
$node=node_load($row->nid);  
$field_full_background_image=field_get_items('node',$node,'field_full_background_image');
$field_optional_cta=field_get_items('node',$node,'field_optional_cta');
$field_hero_component=field_get_items('node',$node,'field_hero_component');
?> 
<section class="section hero hero3" style="background: #00729A url('<?php echo file_create_url($field_full_background_image[0]['uri']); ?>') top right;background-size: 1440px;background-repeat: no-repeat;">
<div class="container">
	<div class="hero--main">
		<h1 class="title"><?php echo $node->title; ?></h1>
		<p class="subheading"><?php echo $node->body['und'][0]['value']; ?></p>
		<a href="<?php echo $field_optional_cta[0]['url']; ?>" class="btn btn-large"><?php echo $field_optional_cta[0]['title']; ?></a>
	</div>
</div>
<div class="hero-component">
	<?php foreach($field_hero_component as $itemid) { 
			$item = field_collection_field_get_entity($itemid);
	?>
	<div class="hero-component-details">
		<div class="hero-component-title">
			<?php print $item->field_title['und'][0]['value']; ?>
		</div>
		<div class="hero-component-subcopy">
			<?php print $item->field_sub_copy['und'][0]['value']; ?>
		</div>
	</div>
	<?php } ?>
</div>
</section>
<script>
$(document).ready(function() {
	$('.pane-views-feature-blocks-block .section-border').css('border','0 none');
});
</script>
