<?php 
$node=node_load($row->nid); 
$field_hero_primary_nav_tile=field_get_items('node',$node,'field_hero_primary_nav_tile'); 
?>
<div class="grid">
	<div class="benefits">
		<div class="grid--row">
			<?php 
			foreach($field_hero_primary_nav_tile as $itemid) { 
				$item = field_collection_field_get_entity($itemid);
				if($itemid['value']==1){
					$class = "borderless";
				}	else	{
					$class = "";
				}				
			?>
			<div class="grid--row--column grid--row--column-3">
				<div class="benefits--item <?php echo $class;?>">
					<div class="item-wrapper">
						<a href="<?php print $item->field_landing_title['und'][0]['url']; ?>" class="benefits--link modal-open"><?php print $item->field_landing_title['und'][0]['title']; ?></a>
						<p class="benefits--copy"><?php print $item->field_landing_sub_copy['und'][0]['value']; ?></p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>