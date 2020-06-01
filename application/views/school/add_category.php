<?php include 'sidemenu.php'; ?>
<?php include 'blue.php'; ?>

<div class="row page-titles">
    <div class="col-md-5 col-8 col-xs-12 align-self-center">
        <h3 class="text-themecolor">Category</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('school/index')?>">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
        </ol>
    </div>
</div>
<?=$this->session->flashdata('msg') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Add Category Of Images</h4>
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/save_category') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Category&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:red;font-size: 13px;">*</span></label>
                                   <input type="text" class="form-control" name="category" placeholder="category name.." >
                                </div>
                            </div>
                            <div class="col-md-6">
                               
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success" > <i class="fa fa-check"></i>Add  Category </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card card-outline-info">
            <div class="card-header">
                <h4 class="m-b-0 text-white">Category List</h4>
            </div>
            <div class="card-body">
                
                <div class="table-responsive m-t-40">
                    <table id="category_list" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>S No.</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($all_category)){  $i=1; foreach($all_category as $row) { ?>
                            <tr id="row_<?=$row['id']?>">
                                <td><?=$i?></td>
                                <td><?=$row['category']?></td>
                                <td><a href="javascript:void()" onclick="Delete(<?=$row['id']?>)" class="fa fa-trash text-danger" ></a> </td>
                            </tr>
                        <?php $i++; } }else{?><tr><td colspan="3" class="text-center text-danger">There are no data</td></tr><?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url('admin_assets/js/jquery.min.js'); ?>"></script>
<script>
    $(document).ready(function() {
       $('#category_list').DataTable();
     } );
    function Delete(id){
        if(confirm("This Record will be Permanently Removed !! Are You Sure ??")) {
            var value = {id: id};
            $.ajax({
                type: "post",
                url: "<?= site_url('admin/delete_category'); ?>", 
                data: value, 
                cache: false,
                success: function(result) {
                    console.log(result) 
                    $('#row_'+id).remove(); 
                }
            });
        }
    };
</script>