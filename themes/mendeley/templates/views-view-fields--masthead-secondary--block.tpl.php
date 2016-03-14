<?php 
$node=node_load($row->nid);   
$field_secondary_logo=field_get_items('node',$node,'field_secondary_logo');
$field_primary_links=field_get_items('node',$node,'field_primary_links');
$field_secondary_links=field_get_items('node',$node,'field_secondary_links'); 
$count = count($field_primary_links);
$count_sec = count($field_secondary_links);
?> 
<nav class="nav nav-primary">
	<div class="logo-wrapper" style="float:left;">
		<img src="<?php echo file_create_url($field_secondary_logo[0]['uri']);?>" alt="<?php echo $field_secondary_logo[0]['alt'];?>" width="100%" />
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
	<a href="/"><img src="<?php echo $directory."/images/iconset/icon-search-white.png";?>" width="16" style="float: left;margin: 5px;"/></a>
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
</nav>
<nav style="float:left;width:100%;font-size:12px;">
	<div style="width:100%;height:2px;background-color:gray;margin:5px 0px;"></div>
	<?php if($count_sec>0){
		for($i=0;$i<$count_sec;$i++){
		?>
		<a href="<?php echo $field_secondary_links[$i]['url'];?>" class="nav--item">
			<?php echo $field_secondary_links[$i]['title'];?>
		</a>
	<?php }
	}?>
</nav>
