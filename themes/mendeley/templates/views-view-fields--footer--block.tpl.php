<?php 
$node=node_load($row->nid);   
$field_footer_logo=field_get_items('node',$node,'field_footer_logo');
$field_footer_links=field_get_items('node',$node,'field_footer_links'); 
$field_copyright_text=field_get_items('node',$node,'field_copyright_text'); 
$field_social_icons=field_get_items('node',$node,'field_social_icons');
$count_footer_links = count($field_footer_links);
?> 
<div class="footer--nav-primary">
	<a href="/" class="footer--nav modal-open">
		<div class="logo-wrapper nav--item">
			<img src="<?php echo file_create_url($field_footer_logo[0]['uri']);?>" width="100%" alt="<?php echo $field_footer_logo[0]['alt'];?>" />
		</div>
	</a>
	<?php if($count_footer_links>0){
		for($i=0;$i<$count_footer_links;$i++){
			if($i==4)
				break;
		?>
		<a href="<?php echo $field_footer_links[$i]['url'];?>" class="footer--nav modal-open">
			<p class="nav--item"><?php echo $field_footer_links[$i]['title'];?></p>
		</a>
	<?php } 
	} ?>
	<div class="social-links">
		<?php foreach($field_social_icons as $itemid) { 
				$item = field_collection_field_get_entity($itemid);?>
			<a href="<?php echo $item->field_cta['und'][0]['url']?>">
				<img src="<?php echo file_create_url($item->field_image['und'][0]['uri']);?>" width="20px" height="24px" alt="<?php echo $item->field_image['und'][0]['alt'];?>" title="<?php echo $item->field_image['und'][0]['title'];?>" />
			</a>
		<?php } ?>
	</div>
</div>
<div class="footer--nav-secondary">
	<a href="/" class="footer--nav modal-open">
		<p class="nav--item"><?php echo $field_copyright_text[0]['value'];?></p>
	</a>
	<?php if($count_footer_links>4){
		for($i=4;$i<$count_footer_links;$i++){?>
		<a href="<?php echo $field_footer_links[$i]['url'];?>" class="footer--nav modal-open">	
			<p class="nav--item"><?php echo $field_footer_links[$i]['title'];?></p>
		</a>
	<?php }
	} ?>
</div>