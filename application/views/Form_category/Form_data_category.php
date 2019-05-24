<div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Data Alat</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-12">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Data Alat</h2>

        <div class="box-icon">
            <a href="#" class="btn addCategory btn-round btn-default"><i class="glyphicon glyphicon-plus-sign"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <!-- <div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div> -->
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
            <thead>
                <tr>
                    <th>Nama Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($Category as $k) { ?>
                    <tr>
                      
                        <td><?= $k->Name_Category?></td>
                        <td class="center">
                            <a class="btn btn-info" href="<?= base_url('ControllerCategory/Controller_category/viewFormEditCategory?Category_id='.$k->Category_id.'')?>">
                                <i class="glyphicon glyphicon-edit icon-white"></i>
                                Edit
                            </a>
                            <a class="btn btn-danger" href="<?= base_url('ControllerCategory/Controller_category/deleteCategory?Category_id='.$k->Category_id.'')?>">
                                <i class="glyphicon glyphicon-trash icon-white"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
        </div>
        </div>
        <!--/span-->
        </div><!--/row-->
    </div><!--/span-->

    <?php include "Form_add_category.php";?>

<script>
    $('.addCategory').click(function (e) {
        e.preventDefault();
        $('#addCategory').modal('show');
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