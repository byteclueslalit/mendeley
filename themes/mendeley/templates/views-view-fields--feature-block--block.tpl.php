<?php 
$node=node_load($row->nid); 
$field_feature_block_tile=field_get_items('node',$node,'field_feature_block_tile');
?>
<div class="grid_container">
	<div class="grid">
		<div class="grid--row">
			<?php
			$count = 1;
			foreach($field_feature_block_tile as $itemid) { 
				$item = field_collection_field_get_entity($itemid);
				if($count==1){
					$class = "search";
				}else if($count==2){
					$class = "access";
				}else if($count==3){
					$class = "groups";
				}
			?>
			<div class="grid--row--column grid--row--column-4">
				<div class="feature feature-<?php echo $class;?>">
					<div class="feature--image" style="background: url('<?php echo file_create_url($item->field_image['und'][0]['uri']); ?>') center;">
					</div>
					<div class="feature--details">
						<p class="title"><?php print $item->field_title['und'][0]['value']; ?></p>
						<p class="info"><?php print $item->field_sub_copy['und'][0]['value']; ?></p>
					</div>
				</div>
			</div>
			<?php $count++; ?>
			<?php } ?>
		</div>
	</div>
</div>