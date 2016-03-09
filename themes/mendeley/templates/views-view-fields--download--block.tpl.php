<?php 
$node=node_load($row->nid); 
$field_image=field_get_items('node',$node,'field_image');
$field_cta=field_get_items('node',$node,'field_cta');
$field_operating_systems=field_get_items('node',$node,'field_operating_systems');
?>
<div class="container">
	<div class="image-wrapper">
		<img src="<?php echo file_create_url($field_image[0]['uri']);?>" width="100%" alt="<?php echo $field_image[0]['alt'];?>" />
	</div>
	<h2 class="section--title section--title-alternate"><?php echo $node->title; ?></h2>
	<a href="<?php echo $field_cta[0]['url'];?>" class="nav--item btn btn-large">
		<?php echo $field_cta[0]['title'];?>
	</a>
	<div class="operating-systems">
		<?php
		$count = 1;
		foreach($field_operating_systems as $itemid) { 
			$item = field_collection_field_get_entity($itemid);
			if($count==1){
				$class = "android";
			} else if($count==2){
				$class = "apple";
			} else if($count==3){
				$class = "windows";
			} else if($count==4){
				$class = "linux";
			}
		?>
		<a href="<?php echo $item->field_cta['und'][0]['url'];?>" class="os-item <?php echo $class; ?>">
			<img src="<?php echo file_create_url($item->field_image['und'][0]['uri']);?>" width="100%" title="<?php echo $item->field_image['und'][0]['title'];?>" alt="<?php echo $item->field_image['und'][0]['alt'];?>" />
		</a>
		<?php $count++;?>
		<?php } ?>
	</div>
</div>