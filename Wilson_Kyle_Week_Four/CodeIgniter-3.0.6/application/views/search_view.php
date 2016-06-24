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
            margin-left: 0;
            margin-right: 0;
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
<h1 class="bounceIn">FoneBook</h1>
<br>
<a href="../../../index.php/login" class="btn btn-primary btn-lg">Logout</a><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 well">
            <legend>Search</legend>
            <?php
            $attributes = array("class" => "form-horizontal", "id" => "employeeform", "name" => "employeeform");
            echo form_open("search/index/" . $empno, $attributes);?>
            <fieldset>

                <div class="form-group">
                    <div class="row colbox">

                        <div class="col-md-4">
                            <label for="employeeno" class="control-label">Employee Number</label>
                        </div>
                        <div class="col-md-8">
                            <input id="employeeno" name="employeeno" placeholder="employeeno" type="text" disabled="disabled" class="form-control"  value="<?php echo $emprecord[0]->employee_no; ?>" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-md-4">
                            <label for="employeename" class="control-label">Employee Name</label>
                        </div>
                        <div class="col-md-8">
                            <input id="employeename" name="employeename" placeholder="employeename" type="text" class="form-control"  value="<?php echo set_value('employeename', $emprecord[0]->employee_name); ?>" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-md-4">
                            <label for="department" class="control-label">Department</label>
                        </div>
                        <div class="col-md-8">

                            <?php
                            $attributes = 'class = "form-control" id = "department"';
                            echo form_dropdown('department',$department,set_value('department', $emprecord[0]->department_id),$attributes);?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-md-4">
                            <label for="designation" class="control-label">Designation</label>
                        </div>
                        <div class="col-md-8">

                            <?php
                            $attributes = 'class = "form-control" id = "designation"';
                            echo form_dropdown('designation',$designation, set_value('designation', $emprecord[0]->designation_id), $attributes);?>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-md-4">
                            <label for="hireddate" class="control-label">Hired Date</label>
                        </div>
                        <div class="col-md-8">
                            <input id="hireddate" name="hireddate" placeholder="hireddate" type="text" class="form-control"  value="<?php echo set_value('hireddate', @date('d-m-Y', @strtotime($emprecord[0]->hired_date))); ?>" />

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-md-4">
                            <label for="salary" class="control-label">Phone Number</label>
                        </div>
                        <div class="col-md-8">
                            <input id="salary" name="salary" placeholder="Phone Number" type="text" class="form-control"  value="<?php echo set_value('salary', $emprecord[0]->salary); ?>" />
                        </div>
                    </div>
                </div>

            </fieldset>
            <?php echo form_close(); ?>
        </div>
        <a href="../../employee" class="btn btn-primary btn-lg">Add Employees</a>
        <a href="../../deleteemployee" class="btn btn-primary btn-lg" >View Employees</a>
        <br>
        <br>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>