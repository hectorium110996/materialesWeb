<script type="text/javascript">
	$(function(){
		
		var test=$(document).find('#message').val();
		
		if (test) {
			toastr.error(test,'Check Message:',{
	            "progressBar": true,
	            "newestOnTop": true,
	            "closeButton": true,
	        });
		}   
	});
</script>