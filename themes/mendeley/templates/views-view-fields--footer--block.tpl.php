<?php 
$node=node_load($row->nid);   
$field_footer_logo=field_get_items('node',$node,'field_footer_logo');
$field_footer_links=field_get_items('node',$node,'field_footer_links'); 
$field_copyright_text=field_get_items('node',$node,'field_copyright_text');  
$field_social_media_images=field_get_items('node',$node,'field_social_media_images');
$field_social_media_links=field_get_items('node',$node,'field_social_media_links');

$count_footer_links = count($field_footer_links);
$count_social_media_images = count($field_social_media_images);
$count_social_media_links = count($field_social_media_links);
?> 
<div class="footer--nav-primary">
	<a href="http://www.mendeley.com" class="footer--nav modal-open">
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
	<?php if($count_social_media_images == $count_social_media_links && $count_social_media_images!=0):?>
	<div style="width:168px;float:right;">
		<?php for($j=0;$j<$count_social_media_images;$j++){?>
			<a href="<?php echo $field_social_media_links[$j]['url'];?>" style="float:left;padding:0 10px;">
				<img src="<?php echo file_create_url($field_social_media_images[$j]['uri']);?>" width="20px" height="24px" alt="<?php echo $field_social_media_images[$j]['alt'];?>" title="<?php echo $field_social_media_images[$j]['title'];?>" />
			</a>
		<?php } ?>
	</div>
	<?php endif;?>
</div>
<div class="footer--nav-secondary">
	<a href="http://www.mendeley.com" class="footer--nav modal-open">
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