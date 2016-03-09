<?php 
$node=node_load($row->nid); 
$field_image=field_get_items('node',$node,'field_image');
$field_cta=field_get_items('node',$node,'field_cta');
?>
<div class="container">
	<div class="image-wrapper">
		<img src="<?php echo file_create_url($field_image[0]['uri']);?>" width="100%" alt="<?php echo $field_image[0]['alt'];?>" />
	</div>
	<h2 class="section--title"><?php echo $node->title; ?></h2>
	<p class="subheading"><?php echo $node->body['und'][0]['value']; ?></p>
	<a href="<?php echo $field_cta[0]['url'];?>" class="btn btn-large">
		<?php echo $field_cta[0]['title'];?>
	</a>
</div>