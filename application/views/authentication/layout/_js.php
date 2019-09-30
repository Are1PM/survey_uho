<script>
	src = "<?php echo base_url("assets"); ?>/thematic/vendor/vendors/base/vendor.bundle.base.js" >
</script>
<!-- endinject -->
<!-- inject:js -->
<script src="<?php echo base_url('assets'); ?>/vendor/thematic/js/off-canvas.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/thematic/js/hoverable-collapse.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/thematic/js/template.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/thematic/sweetalert/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/vendor/thematic/sweetalert/mysweet2.js"></script>

<script>
	window.onload = function() {
		<?php if ($this->session->flashdata('msg') != '') {
			echo "effect_msg();";
		} ?>
	}

	function effect_msg_form() {
		$('.form-msg').slideDown(1000),
			setTimeout(function() {
				$('.form-msg').slideUp(1000);
			}, 3000)
	}

	function effect_msg() {
		$('.msg').show(1000),
			setTimeout(function() {
				$('.msg').fadeOut(1000);
			}, 3000)
	}
</script>