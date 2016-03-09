<header class="header">
<?php 
if (drupal_is_front_page()) {
	print render($page['header']['views_masthead_primary-block']);
} else {
	print render($page['header']['views_masthead_secondary-block']);
}
?>
</header>
<section class="section hero hero3">
	<?php print render($page['banner']['views_hero_story-block']); ?>
</section>
<section class="section section-tertiary user-segments">
	<div class="grid_container">
		<?php print render($page['content']['views_hero_primary_nav-block']); ?>
		<?php print render($page['content']['views_tabbed_carousel-block']); ?>
	</div>
</section>

<section class="section product">
	<?php print render($page['content']['views_institution_download-block']); ?>
</section>

<div class="section-border"><span class="section-border--title">Explore more</span></div>

<section class="section features">
	<?php print render($page['content']['views_feature_block-block']); ?>
</section>

<div class="section-border">&nbsp;</div>

<section class="section brief">
	<?php print render($page['content']['views_feature_blocks-block']); ?>
</section>

<div class="section-border">&nbsp;</div>

<section class="section endorsements">
	<?php print render($page['content']['views_carousel_2_tile-block']); ?>
</section>

<section class="section section-secondary download">
	<?php print render($page['content']['views_download-block']); ?>
</section>
<footer class="footer">
	<?php print render($page['footer']['views_footer-block']); ?>
	<?php print render($page['footer']['user_login']); ?>
</footer>
<div class="modal">
	We're updating the Mendeley.com website and we're excited to show you this homepage preview, but the section you're clicking isn't ready yet.
	<a href="/" class="modal-close">Close</a>
</div>