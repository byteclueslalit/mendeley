<?php 
$node=node_load($row->nid);   
$field_secondary_logo=field_get_items('node',$node,'field_secondary_logo');
$field_primary_links=field_get_items('node',$node,'field_primary_links');
$field_secondary_links=field_get_items('node',$node,'field_secondary_links'); 
$count = count($field_primary_links);
$count_sec = count($field_secondary_links);
?> 
<nav class="nav nav-primary dark">
	<div class="logo-wrapper" style="float:left;">
		<a href="/">
		<img src="<?php echo base_path().$directory."/images/mendeley-dark.png";?>" alt="<?php echo $field_secondary_logo[0]['alt'];?>" width="100%" />
		</a>
	</div>
	<?php if($count>0){
		for($i=0;$i<$count;$i++){
			if($i==4)
				break;
		?>
		<a href="<?php echo $field_primary_links[$i]['url'];?>" class="nav--item nav-item-dark">
			<?php echo $field_primary_links[$i]['title'];?>
		</a>
	<?php } 
	}
	?>
</nav>
<nav class="nav nav-secondary dark">
	<a href="/"><img src="<?php echo base_path().$directory."/images/iconset/icon-search-dark.png";?>" width="16"/></a>
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
		<a href="<?php echo $field_primary_links[$i]['url'];?>" class="nav--item nav-item-dark <?php echo $class;?>">
			<?php echo $field_primary_links[$i]['title'];?>
		</a>
	<?php }
	endif;?>
</nav>
<nav class="nav-sub-menu dark">
	<div class="section-border">&nbsp;</div>
	<?php if($count_sec>0){
		for($i=0;$i<$count_sec;$i++){
		?>
		<a href="<?php echo $field_secondary_links[$i]['url'];?>" class="nav--item" style="color:#737373;">
			<?php echo $field_secondary_links[$i]['title'];?>
		</a>
	<?php }
	}?>
</nav>
