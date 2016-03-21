<?php 
$node=node_load($row->nid);   
$field_full_background_image=field_get_items('node',$node,'field_full_background_image');
$field_cta=field_get_items('node',$node,'field_cta');
$field_persona_tile=field_get_items('node',$node,'field_persona_tile');
?> 
<section class="section hero hero3" style="background: #095A75 url('<?php echo file_create_url($field_full_background_image[0]['uri']); ?>') top right;background-size: 1440px;background-repeat: no-repeat;">
<div class="container">
	<div class="hero--main">
		<h1 class="title"><?php echo $node->title; ?></h1>
		<p class="subheading"><?php echo $node->body['und'][0]['value']; ?></p>
		<a href="<?php echo $field_cta[0]['url']; ?>" class="btn btn-large"><?php echo $field_cta[0]['title']; ?></a>
	</div>
	<div class="persona-tile">
		<?php 
		foreach($field_persona_tile as $itemid) { 
				$item = field_collection_field_get_entity($itemid);
		?>
		<div class="persona-img">
			<img src="<?php print file_create_url($item->field_image['und'][0]['uri']);?>"/>
		</div>
		<div class="persona-details">
			<div class="persona-title">
				<a href="<?php print $item->field_cta['und'][0]['url']; ?>">
					<?php print $item->field_title['und'][0]['value'];?>
				</a>
			</div>
			<div class="persona-sub-copy">
				<?php print $item->field_sub_copy['und'][0]['value'];?>
			</div>
		</div>
		<?php } ?>
	</div>
</div>
</section>
