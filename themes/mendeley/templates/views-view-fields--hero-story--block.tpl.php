<?php 
$node=node_load($row->nid);   
$field_full_background_image=field_get_items('node',$node,'field_full_background_image');
$title=field_get_items('node',$node,'title');
$body=field_get_items('node',$node,'body');
$field_cta=field_get_items('node',$node,'field_cta'); 
?> 
<div class="container">
	<div class="hero--main">
		<h1 class="title"><?php echo $node->title; ?></h1>
		<p class="subheading"><?php echo $node->body['und'][0]['value']; ?></p>
		<a href="<?php echo $field_cta[0]['url']; ?>" class="btn btn-large"><?php echo $field_cta[0]['title']; ?></a>
	</div>
</div>
