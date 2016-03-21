<?php if(!drupal_is_front_page()):?>
<div class="node">
	<div class="node-title">
		<h2 class="section--title">Attend Event</h2>
	</div>
	<div class="event">
		<div class="event-left">
			<img src="<?php echo base_path().$directory."/images/event.PNG";?>" width="100%"/>
		</div>
		<div class="event-right">
			<?php print render($content);?>
		</div>
	</div>
	<div class="div-form">
		<div class="node-title">
			<h2 class="form-title">Enter your details</h2>
		</div>
		<div class="drupal-form">
			<?php
			$form = drupal_get_form('attend_event_form');
			print render($form);
			?>
		</div>
	</div>
</div>
<?php endif;?>
<script>
	 $(document).ready(function() {
		 $('.field-name-field-speaker-name .field-items').prepend('<div class="speaker-name-label">Speaker</div>');
		 $('.field-name-field-cta').css('display','none');
		 $('.field-name-field-event-details-link a').append('     +');
		 
		 $('.field-name-field-event-date .field-items').prepend('<div class="date-icon"><img src="<?php echo base_path().$directory."/images/iconset/calender.png";?>" width="10" style="float:left;"/></div>');
		 $('.field-name-field-event-location .field-items').prepend('<div class="globe-icon"><img src="<?php echo base_path().$directory."/images/iconset/globe.png";?>" width="10" style="float:left;margin-right: 5px;"/></div>');
		 $('.field-name-field-event-institution .field-items').prepend('<div class="location-icon"><img src="<?php echo base_path().$directory."/images/iconset/location.png";?>" width="10" style="float:left;margin-right: 5px;"/></div>');
		 $('.field-name-field-event-time .field-items').prepend('<div class="time-icon"><img src="<?php echo base_path().$directory."/images/iconset/time.png";?>" width="10" style="float:left;margin-right: 5px;"/></div>');
	 });
</script>