<header class="header">
	<?php print render($page['header']);?>
</header>

<?php
	if(drupal_is_front_page()){
		if (in_array("system_main", $page['content'])) {
			$page['content']['system_main']="";
		}
	}
	print render($page['content']);
?>

<footer class="footer">
	<?php print render($page['footer']); ?>
</footer>
<div class="modal">
	We're updating the Mendeley.com website and we're excited to show you this homepage preview, but the section you're clicking isn't ready yet.
	<a href="/" class="modal-close">Close</a>
</div>