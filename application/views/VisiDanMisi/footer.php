<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<div id="dropDownSelect1"></div>


    <script src="<?php echo base_url('').'assets/'?>vendor/jquery/jquery-3.2.1.min.js"></script>
	
	<script src="<?php echo base_url('').'assets/'?>vendor/animsition/js/animsition.min.js"></script>

	<script src="<?php echo base_url('').'assets/'?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url('').'assets/'?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('').'assets/'?>vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
<script src="<?php echo base_url('').'assets/'?>vendor/slick/slick.min.js"></script>

<script src="<?php echo base_url('').'assets/'?>js/slick-custom.js"></script>

<!--===============================================================================================-->
<script src="<?php echo base_url('').'assets/'?>vendor/countdowntime/countdowntime.js"></script>

<!--===============================================================================================-->
<script src="<?php echo base_url('').'assets/'?>vendor/lightbox2/js/lightbox.min.js"></script>
	
<!--===============================================================================================-->
<script src="<?php echo base_url('').'assets/'?>vendor/sweetalert/sweetalert.min.js"></script>
	
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="<?php echo base_url('').'assets/'?>js/main.js"></script>
	<script>
		$('#collapseExample').on('show.bs.collapse', function () {			
			$('#collapsemisi').collapse('hide')
			$('#collapsetujuan').collapse('hide')
		})		
	</script>
	<script>
		$('#collapsemisi').on('show.bs.collapse', function () {			
			$('#collapseExample').collapse('hide')
			$('#collapsetujuan').collapse('hide')
		})		
	</script>
	<script>
		$('#collapsetujuan').on('show.bs.collapse', function () {			
			$('#collapseExample').collapse('hide')
			$('#collapsemisi').collapse('hide')
		})		
	</script>