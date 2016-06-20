<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoneBook - Private Area</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css"); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

    <style type="text/css">
        .colbox {
            margin-left: 0px;
            margin-right: 0px;
        }
    </style>

    <script type="text/javascript">
        //load datepicker control onfocus
        $(function() {
            $("#hireddate").datepicker();
        });
    </script>

</head>
<body>
<h1>FoneBook</h1>
<div class="container">
    <div class="row">
        <div class="col-sm-offset-3 col-lg-6 col-sm-6 well">
            <legend>Add Employee Details</legend>
            <?php
            $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
            echo form_open("employee/index", $attributes);?>
            <fieldset>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-lg-4 col-sm-4">
                            <label for="employeeno" class="control-label">Employee No</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input id="employeeno" name="employeeno" placeholder="employeeno" type="text" class="form-control"  value="<?php echo set_value('employeeno'); ?>" />
                            <span class="text-danger"><?php echo form_error('employeeno'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="employeename" class="control-label">Employee Name</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input id="employeename" name="employeename" placeholder="employeename" type="text" class="form-control"  value="<?php echo set_value('employeename'); ?>" />
                            <span class="text-danger"><?php echo form_error('employeename'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="department" class="control-label">Department</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">

                            <?php
                            $attributes = 'class = "form-control" id = "department"';
                            echo form_dropdown('department',$department,set_value('department'),$attributes);?>
                            <span class="text-danger"><?php echo form_error('department'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="designation" class="control-label">Designation</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">

                            <?php
                            $attributes = 'class = "form-control" id = "designation"';
                            echo form_dropdown('designation',$designation, set_value('designation'), $attributes);?>

                            <span class="text-danger"><?php echo form_error('designation'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="hireddate" class="control-label">Hired Date</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input id="hireddate" name="hireddate" placeholder="hireddate" type="text" class="form-control"  value="<?php echo set_value('hireddate'); ?>" />
                            <span class="text-danger"><?php echo form_error('hireddate'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-4 col-sm-4">
                            <label for="salary" class="control-label">Phone #</label>
                        </div>
                        <div class="col-lg-8 col-sm-8">
                            <input id="salary" name="salary" placeholder="Phone #" type="text" class="form-control" value="<?php echo set_value('salary'); ?>" />
                            <span class="text-danger"><?php echo form_error('salary'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-lg-8 col-sm-8 text-left">
                        <input id="btn_add" name="btn_add" type="submit" class="btn btn-primary" value="Insert" />
                        <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancel" />
                    </div>
                </div>
            </fieldset>

            <a href="../../index.php/deleteemployee" class="btn btn-primary btn-lg">View Employees</a>

            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>