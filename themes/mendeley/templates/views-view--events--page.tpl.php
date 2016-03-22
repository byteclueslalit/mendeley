<link rel="stylesheet" href="<?php echo base_path().$directory."/css/searchevent/jquery-ui.css";?>">
<script src="<?php echo base_path().$directory."/scripts/searchevent/jquery-1.10.2.js";?>"></script>
<script src="<?php echo base_path().$directory."/scripts/searchevent/jquery-ui.js";?>"></script>
<script>
$(function() {
	$(".form-text").datepicker();
});
</script>
<header class="header">
	<?php print render($page['header']);?>
</header>
<div class="node upcoming">
	<div class="node-title">
		<h2 class="section--title">Upcoming Events</h2>
		<div class="section--subcopy">Our enthusiastic community of researchers put on regular presentations, workshops, webinars and other events to help spread the word on Mendeley</div>
	</div>
	<div class="event">
		<div class="event-left">
			<img src="<?php echo base_path().$directory."/images/event.PNG";?>" width="100%"/>
		</div>
		<div class="event-right">
			
		</div>
	</div>
</div>
<div class="browse-events">
	<div class="browse-title">Browse and find events</div>
	<div class="browse-form">
		<?php $form = drupal_get_form('search_event_form');
		print render($form); ?>
	</div>
	<section class="section section-tertiary user-segments">
		<div class="event">
			<div class="event-right">
				
			</div>
		</div>
	</section>
</div>