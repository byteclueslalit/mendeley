<?php 
$node=node_load($row->nid);   
$field_footer_logo=field_get_items('node',$node,'field_footer_logo');
$field_footer_links=field_get_items('node',$node,'field_footer_links'); 
$field_copyright_text=field_get_items('node',$node,'field_copyright_text');  
$field_social_media_images=field_get_items('node',$node,'field_social_media_images');
$field_social_media_links=field_get_items('node',$node,'field_social_media_links');
?> 
<div class="footer--nav-primary">
	<a href="http://www.mendeley.com" class="footer--nav modal-open">
		<div class="logo-wrapper nav--item">
			<img src="<?php echo file_create_url($field_footer_logo[0]['uri']);?>" width="100%" alt="<?php echo $field_footer_logo[0]['alt'];?>" />
		</div>
	</a>
	<a href="<?php echo $field_footer_links[0]['url'];?>" class="footer--nav modal-open">
		<p class="nav--item"><?php echo $field_footer_links[0]['title'];?></p>
	</a>
	<a href="<?php echo $field_footer_links[1]['url'];?>" class="footer--nav modal-open">		
		<p class="nav--item"><?php echo $field_footer_links[1]['title'];?></p>
	</a>	
	<a href="<?php echo $field_footer_links[2]['url'];?>" class="footer--nav modal-open">	
		<p class="nav--item"><?php echo $field_footer_links[2]['title'];?></p>
	</a>	
	<a href="<?php echo $field_footer_links[3]['url'];?>" class="footer--nav modal-open">
		<p class="nav--item"><?php echo $field_footer_links[3]['title'];?></p>
	</a>
	
	<div style="width:168px;float:right;">
		<a href="<?php echo $field_social_media_links[0]['url'];?>" style="float:left;padding:0 10px;">
			<img src="<?php echo file_create_url($field_social_media_images[0]['uri']);?>" width="20px" height="24px" alt="<?php echo $field_social_media_images[0]['alt'];?>" title="<?php echo $field_social_media_images[0]['title'];?>" />
		</a>
		<a href="<?php echo $field_social_media_links[1]['url'];?>" style="float:left;padding:0 10px;">
			<img src="<?php echo file_create_url($field_social_media_images[1]['uri']);?>" width="32px" height="24px" alt="<?php echo $field_social_media_images[1]['alt'];?>" title="<?php echo $field_social_media_images[1]['title'];?>" />
		</a>
		<a href="<?php echo $field_social_media_links[2]['url'];?>" style="float:left;padding:0 10px;">
			<img src="<?php echo file_create_url($field_social_media_images[2]['uri']);?>" width="32px" height="24px" alt="<?php echo $field_social_media_images[2]['alt'];?>" title="<?php echo $field_social_media_images[2]['title'];?>" />
		</a>
	</div>
</div>
<div class="footer--nav-secondary">
	<a href="http://www.mendeley.com" class="footer--nav modal-open">
		<p class="nav--item"><?php echo $field_copyright_text[0]['value'];?></p>
	</a>
	<a href="<?php echo $field_footer_links[4]['url'];?>" class="footer--nav modal-open">	
		<p class="nav--item"><?php echo $field_footer_links[4]['title'];?></p>
	</a>
	<a href="<?php echo $field_footer_links[5]['url'];?>" class="footer--nav modal-open">
		<p class="nav--item"><?php echo $field_footer_links[5]['title'];?></p>
	</a>
	<a href="<?php echo $field_footer_links[6]['url'];?>" class="footer--nav modal-open">
		<p class="nav--item"><?php echo $field_footer_links[6]['title'];?></p>
	</a>
</div>