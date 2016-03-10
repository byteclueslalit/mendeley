<?php
$node=node_load($row->nid); 
$field_tabbed_links=field_get_items('node',$node,'field_tabbed_links');
$field_tabbed_carousel_tile=field_get_items('node',$node,'field_tabbed_carousel_tile');
?>
<h2 class="section--title"><?php echo $node->title; ?></h2>
<div class="user-tabs-nav">
	<?php 
	$count = 1;
	foreach($field_tabbed_links as $field_tabbed_link){
		if($count==1){
			$class = "active";
		} else {
			$class = "";
		}
	?>
		<button class="user-tabs-nav--item <?php echo $class;?>" id="tab<?php echo $count;?>"><?php echo $field_tabbed_link['value']; ?></button>
	<?php
		$count++;
		} 
	?>
</div>
<div class="grid user-tabs">
	<?php
	$count = 1;
	foreach($field_tabbed_carousel_tile as $itemid) { 
		$item = field_collection_field_get_entity($itemid);
		if($count==1){
			$class = "tab-undergrads";
		} else if($count==2) {
			$class = "tab-postdocs";
		} else if($count==3) {
			$class = "tab-professors";
		} else if($count==4) {
			$class = "tab-librarians";
		}
		if($count==1){
			$active = " active";
		} else {
			$active = "";
		}
	?>
	<div class="tab <?php echo $class; echo $active;?>">
		<div class="grid--row">
			<div class="grid--row--column grid--row--column-6">
				<div class=" tab--image" style="background: url('<?php echo file_create_url($item->field_image['und'][0]['uri']);?>') center;background-size: cover;">
				</div>
			</div>
			<div class="grid--row--column grid--row--column-6">
				<div class=" tab--info">
					<p class="title"><?php echo $item->field_title['und'][0]['value'];?></p>
					<ul class="feature-list">
						<?php 
							$val = 1;
							foreach($item->field_tabbed_sub_copy['und'] as $sub_copy){ 
							if($val==1){
								$feature = "feature-search";
							} else if($val==2) {
								$feature = "feature-follow";
							} else if($val==3) {
								$feature = "feature-organise";
							}
							?>
							<li class="feature <?php echo $feature;?>"><?php echo $sub_copy['value'];?></li>
							<?php
							$val++;
							} 
							?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php
	$count++;
	}
	?>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script>
$(document).ready(function(){
    $("#tab1").click(function(){
		$(this).addClass("active");
		$("#tab2").removeClass("active");
		$("#tab3").removeClass("active");
		$("#tab4").removeClass("active");
        $(".tab-undergrads").show();
		$(".tab-postdocs").hide();
		$(".tab-professors").hide();
		$(".tab-librarians").hide();
    });
	$("#tab2").click(function(){
		$(this).addClass("active");
		$("#tab1").removeClass("active");
		$("#tab3").removeClass("active");
		$("#tab4").removeClass("active");
        $(".tab-postdocs").show();
		$(".tab-undergrads").hide();
		$(".tab-professors").hide();
		$(".tab-librarians").hide();
    });
	$("#tab3").click(function(){
		$(this).addClass("active");
		$("#tab2").removeClass("active");
		$("#tab1").removeClass("active");
		$("#tab4").removeClass("active");
        $(".tab-undergrads").hide();
		$(".tab-postdocs").hide();
		$(".tab-professors").show();
		$(".tab-librarians").hide();
    });
	$("#tab4").click(function(){
		$(this).addClass("active");
		$("#tab2").removeClass("active");
		$("#tab3").removeClass("active");
		$("#tab1").removeClass("active");
        $(".tab-undergrads").hide();
		$(".tab-postdocs").hide();
		$(".tab-professors").hide();
		$(".tab-librarians").show();
    });
});
</script>