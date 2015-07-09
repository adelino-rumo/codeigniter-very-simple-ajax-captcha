	<!-- 
		NOTES:
			- include jQuery library
			- complete the form (HTML and PHP)
			- (this is just the aditional code)
	-->
	...

	<h5>Please insert the result of: </h5>
	<span id="captcha">&nbsp;</span>
	<input type="text" name="captcha" value="<?php echo set_value('captcha'); ?>"  size="5" /> <span id="refresh_captcha"><a>refresh</a></span>
	...

<script type="text/javascript">
	function new_captcha() {
		$.ajax({
			url: "<?php echo site_url('captcha'); ?>", 
			success: function(result){
    			$("#captcha").html(result);
    		}
    	});		
	}

	$(function(){
		new_captcha();
		$('#refresh_captcha').click(function(){
			new_captcha();
		});
	});
</script>
