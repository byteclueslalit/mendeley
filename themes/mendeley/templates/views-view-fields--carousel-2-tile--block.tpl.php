<?php //echo "<pre>";print_r($fields);die;?>
<div class="container">
<?php /*<h2 class="section--title"><?php echo $fields['title']->handler->original_value; ?></h2>*/ ?>
	<div class="carousel-nav"></div>
	<div class="carousel">
		<div class="item">
		<?php foreach ($fields as $id => $field): ?>
			<?php print $field->content; ?>
		<?php endforeach; ?>
		</div>
	</div>
</div>




<?php /*

<?php
$node=node_load($row->nid); 
$field_carousel_2_tile=field_get_items('node',$node,'field_carousel_2_tile');
?>

<div class="container">
	<h2 class="section--title"><?php echo $node->title; ?></h2>
	<div class="carousel-nav"></div>
	<div class="carousel">
		<div class="item">
			<div class="grid">
				<div class="grid--row">
					<?php
					$count = 1;
					foreach($field_carousel_2_tile as $itemid) { 
						if($count>2){
							$style = "style='display:none;'";
						}else{
							$style = "";
						}
						$item = field_collection_field_get_entity($itemid);
						if($count%2!=0){
							$class = "endorsement-dark";
						} else {
							$class = "";
						}
					?>
					<div class="grid--row--column grid--row--column-6" <?php echo $style; ?>>
						<div class="endorsement <?php echo $class;?>">
							<div class="headshot-wrapper">
								<img src="<?php echo file_create_url($item->field_image['und'][0]['uri']);?>" width="100%" alt="<?php echo $item->field_image['und'][0]['alt'];?>" />
							</div>
							<p class="endorsement--quote"><?php echo $item->field_sub_copy['und'][0]['value'];?></p>
							<div class="endorsement--bio">
								<p class="endorsement--name"><?php echo $item->field_user_name['und'][0]['title'];?></p>
								<p class="endorsement--company"><?php echo $item->field_user_details['und'][0]['value'];?></p>
							</div>
						</div>
					</div>
					<?php $count++; ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div> */ ?>
