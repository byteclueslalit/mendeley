<?php 
$node=node_load($row->nid);   
$field_primary_logo=field_get_items('node',$node,'field_primary_logo');
$field_primary_links=field_get_items('node',$node,'field_primary_links');
$count = count($field_primary_links);   
?> 
<nav class="nav nav-primary">
<div class="logo-wrapper" style="float:left;">
	<img src="<?php echo file_create_url($field_primary_logo[0]['uri']);?>" alt="<?php echo $field_primary_logo[0]['alt'];?>" width="100%" />
</div>
	<?php if($count>0){
		for($i=0;$i<$count;$i++){
			if($i==4)
				break;
		?>
		<a href="<?php echo $field_primary_links[$i]['url'];?>" style="margin:5px 15px;padding:0;" class="nav--item">
			<?php echo $field_primary_links[$i]['title'];?>
		</a>
	<?php } 
	}
	?>
</nav>
<nav class="nav nav-secondary">
	<?php if($count>4):
		for($i=4;$i<$count;$i++){
			if(stristr($field_primary_links[$i]['title'],'Sign in')==TRUE){
				$class="signin-icon";
			} else if(stristr($field_primary_links[$i]['title'],'Download')==TRUE){
				$class="btn";
			} else {
				$class="";
			}
		?>
		<a href="<?php echo $field_primary_links[$i]['url'];?>" class="nav--item <?php echo $class;?>">
			<?php echo $field_primary_links[$i]['title'];?>
		</a>
		<?php }
	endif;?>
	<div class="beta-label">
		BETA
	</div>
</nav>