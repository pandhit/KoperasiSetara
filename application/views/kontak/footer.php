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
	<script src="<?php echo base_url('assets/Admin/')?>js/bootstrap-notify.js"></script>
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
		
<?php if (!empty($this->session->flashdata('Status'))){?>
    setnotifstatus('<?php echo $this->session->flashdata('Status')?>');
<?php }?>


 function setnotifstatus(err)
{ 
if (err == 'Input Succes' || err == 'Edit Succes' || err == 'Delete Succes')
    {
      ttp='success';
    }
 else
    {
    ttp='danger';
    }

  $.notify({
	// options
	message: err,
  },{
    // settings
    element: 'body',
    position: null,
    type: ttp,
    allow_dismiss: true,
    newest_on_top: false,
    showProgressbar: false,
    placement: {
      from: "top",
      align: "center"
    },
    offset: 20,
    spacing: 10,
    z_index: 1031,
    delay: 2000,
    timer: 500,
    url_target: '_blank',
    mouse_over: null,
    animate: {
        enter: 'animated bounceIn',
		exit: 'animated bounceOut'
    },
    onShow: null,
    onShown: null,
    onClose: null,
    onClosed: null,
    icon_type: 'class',
    template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
      '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
      '<span data-notify="icon"></span> ' +
      '<span data-notify="title">{1}</span> ' +
      '<span data-notify="message">{2}</span>' +
      '<div class="progress" data-notify="progressbar">' +
        '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
      '</div>' +
      '<a href="{3}" target="{4}" data-notify="url"></a>' +
    '</div>' 
  });

}
	</script>

<!--===============================================================================================-->
	<script src="<?php echo base_url('').'assets/'?>js/main.js"></script>
