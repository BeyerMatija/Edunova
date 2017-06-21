<script src="scripts/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

<script src="scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="scripts/camera/scripts/jquery.mobile.customized.min.js" type="text/javascript"></script>
<script type="text/javascript">
	function startCamera() {
		$('#camera_wrap').camera({
			fx : 'scrollLeft',
			time : 2000,
			loader : 'none',
			playPause : false,
			height : '65%',
			pagination : true
		});
	}$(function() {
		startCamera()
	}); 
</script>