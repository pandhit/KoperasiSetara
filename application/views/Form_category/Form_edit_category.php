
<div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Edit Category</a>
            </li>
        </ul>
    </div>
    
<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i>Edit</h2>
            </div>
            <div class="box-content">
                <form name="fromeditalat" action="<?= base_url('ControllerCategory/Controller_category/editCategory')?>"  method="post">
                    <div class="form-group">
                        <label>Nama Category</label>
                        <input required type="Text" name="name" class="form-control" value="<?php echo $editcategory->Name_Category?>">
                    </div>
                    <button type="submit" name="submitid" value=<?= $editcategory->Category_id?> class="btn btn-default">Update</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->