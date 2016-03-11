<?php
$node=node_load($row->nid); 
$iteam=field_get_items('node',$node,'field_carousel_1_tile');
//print_r($node);
//print_r($node->title);
//foreach ($iteam as $item) {
//$fc = field_collection_field_get_entity($item);
//print_r(file_create_url($fc->field_image['und'][0]['uri']));
//print_r(file_create_url($fc->field_background_image['und'][0]['uri']));
//print_r($fc->field_user_name['und'][0]['title']);
//print_r($fc->field_user_name['und'][0]['url']);
//print_r($fc->field_user_details['und'][0]['value']);
//print_r($fc->field_sub_copy['und'][0]['value']);
//}
//die();
?>
<h1><?php echo $node->title;?></h1>
<?php 
foreach ($iteam as $item) {
$fc = field_collection_field_get_entity($item);
?>
<div class="row">
<div class="col-md-2 col-sm-2"></div>
<div class="col-md-8 col-sm-8">
<div style="background-image: url(<?php echo file_create_url($fc->field_background_image['und'][0]['uri']);?>);width:100%;height:500px">
<img class="class" src="<?php echo file_create_url($fc->field_image['und'][0]['uri']);?>" alt="<?php echo $fc->field_image['und'][0]['alt'];?>" title="<?php echo $fc->field_image['und'][0]['title'];?>" />
</div>
</div>
<div class="col-md-2 col-sm-2"></div>
</div>
<?php
}?>

