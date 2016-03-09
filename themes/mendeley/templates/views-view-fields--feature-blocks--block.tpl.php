<?php 
$node=node_load($row->nid); 
$field_feature_blocks_tile=field_get_items('node',$node,'field_feature_blocks_tile');
?>
<div class="grid_container">
	<div class="grid">
		<?php
		$count = 1;
		foreach($field_feature_blocks_tile as $itemid) { 
			$item = field_collection_field_get_entity($itemid);
		?>
			<?php if($count%2!=0) {?>
				<div class="grid--row">
					<div class="blurb blurb<?php echo $count;?>">
						<div class="grid--row--column grid--row--column-7">
							<div class="blurb--text">
								<p class="title"><?php echo $item->field_title['und'][0]['value']; ?></p>
								<p class="copy"><?php echo $item->field_blocks_sub_copy['und'][0]['value']; ?></p>
							</div>
						</div>
						<div class="grid--row--column grid--row--column-5">
							<div class="image-wrapper">
								&nbsp;
							</div>
						</div>
					</div>
				</div>
				<?php } else if($count%2==0){?>
				<div class="grid--row">
					<div class="blurb blurb<?php echo $count;?>">
						<div class="grid--row--column grid--row--column-5">
							<div class="image-wrapper">
								&nbsp;
							</div>
						</div>
						<div class="grid--row--column grid--row--column-7">
							<div class="blurb--text">
								<p class="title"><?php print $item->field_title['und'][0]['value']; ?></p>
								<p class="copy"><?php print $item->field_blocks_sub_copy['und'][0]['value']; ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php $count++;?>
		<?php } ?>
	</div>
</div>