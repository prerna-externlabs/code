<!DOCTYPE html>
<html>
<head>
    <title>Crud Application - Create User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/bootstrap.min.css">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class = "container">
            <a href="#" class="navbar-brand">CRUD Appliction</a>
        </div>

    </div>

    <div class="container" style="padding-top:10px">
        <h3>Create User</h3>
        <hr>
        <div class="row">
            <form  action="<?php  echo base_url();?>user/created" method="post">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="" class="form-control">
                    <?php echo form_error('name');?>
                </div>


                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="" class="form-control">
                    <?php echo form_error('email');?>
                </div>

                <div class="form-group">
                    <label>Upload file</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Create</button>
                    <a href="<?php echo base_url().'user/index';?>" class ="btn-secondary btn">Cancel</a>
                </div>
            </div>
            </form>
        </div>

    </div>
</body>
</html>