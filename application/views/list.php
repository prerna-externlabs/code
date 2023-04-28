<!DOCTYPE html>
<html>
<head>
    <title>Crud Application - View User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/css/bootstrap.min.css">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class = "container">
            <a href="#" class="navbar-brand">CRUD Appliction</a>
        </div>
    </div>
<div class="container" style="padding-top:10px">
<div class="row">
    <div class="col-md-12">
        <?php 
        $success = $this->session->userdata('success');
        if($success != ""){
        ?>
        <div class="alert alert-success"><?php echo $success;?></div>
        <?php
        }
        ?>
        <?php
         $failure = $this->session->userdata('failure');
         if($failure != ""){
        ?>
        <div class="alert alert-success"><?php echo $failure;?></div>
        <?php
        }
        ?>
    </div>
</div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
            <div class="col-6"><h3>View user</h3></div>
            <div class="col-6 text-right">
                <a href="<?php echo base_url();?>user/created" class="btn btn-primary">Create</a>
            </div>
        </div>
    </div>
</div>
        
        <hr>
        <div class="row">
            <div class="col-md-8">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th width = "60">Edit</th>
                        <th width = "100">Delete</th>
                    </tr>
                    <?php if(!empty($users)) {foreach($users as $user){?>
                    <tr>
                        <td><?php echo $user['user_id']?></td>
                        <td><?php echo $user['name']?></td>
                        <td><?php echo $user['email']?></td>
                        <td>
                            <a href="<?php echo base_url(). 'user/edit/'.$user['user_id']?>" class = "btn btn-primary">Edit</a>
                        </td>
                        <td>
                        <a href="<?php echo base_url(). 'user/delete/'.$user['user_id']?>" class = "btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php } } else{?>
                    <tr>
                        <td colspan = "5">Record not found</td>
                    <?php }?>
                    </tr>


                </table>

            </div>
        </div>

    </div>
</body>
</html>