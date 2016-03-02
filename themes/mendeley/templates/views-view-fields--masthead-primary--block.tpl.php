<?php 
$node=node_load($row->nid);   
$field_primary_logo=field_get_items('node',$node,'field_primary_logo');
$field_header_links=field_get_items('node',$node,'field_header_links');   
?> 
<nav class="nav nav-primary">
<div class="logo-wrapper" style="float:left;">
		<img src="<?php echo file_create_url($field_primary_logo[0]['uri']);?>" alt="<?php echo $field_primary_logo[0]['alt'];?>" width="100%" />
</div>
<a href="<?php echo $field_header_links[0]['url'];?>" style="margin:5px 15px;padding:0;" class="nav--item">
	<?php echo $field_header_links[0]['title'];?>
</a>
<a href="<?php echo $field_header_links[1]['url'];?>" style="margin:5px 15px;padding:0;" class="nav--item">
	<?php echo $field_header_links[1]['title'];?>
</a>
<a href="<?php echo $field_header_links[2]['url'];?>" style="margin:5px 15px;padding:0;" class="nav--item">
	<?php echo $field_header_links[2]['title'];?>
</a>
<a href="<?php echo $field_header_links[3]['url'];?>" style="margin:5px 15px;padding:0;" class="nav--item">
	<?php echo $field_header_links[3]['title'];?>
</a>
</nav>
<nav class="nav nav-secondary">
<a href="<?php echo $field_header_links[4]['url'];?>" class="nav--item signin-icon">
	<?php echo $field_header_links[4]['title'];?>
</a>
<a href="<?php echo $field_header_links[5]['url'];?>" class="nav--item">
	<?php echo $field_header_links[5]['title'];?>
</a>
<a href="<?php echo $field_header_links[6]['url'];?>" class="nav--item btn">
	<?php echo $field_header_links[6]['title'];?>
</a>
<div class="beta-label">
	BETA
</div>
</nav>


