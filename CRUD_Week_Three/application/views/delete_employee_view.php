<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoneBook - Private Area</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/home.css"); ?>" />
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>FoneBook</h1>
<a href="home/logout" class="btn btn-primary btn-lg">Logout</a>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped table-hover align-center">
                <thead>
                <tr class="bg-primary">
                    <th>#</th>
                    <th>Employee No</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Hired Date</th>
                    <th>Phone #</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($employee_list); $i++) { ?>
                    <tr>
                        <td><?php echo ($i+1); ?></td>
                        <td><?php echo $employee_list[$i]->employee_no; ?></td>
                        <td><?php echo $employee_list[$i]->employee_name; ?></td>
                        <td><?php echo $employee_list[$i]->department_name; ?></td>
                        <td><?php echo $employee_list[$i]->designation_name; ?></td>
                        <td><?php echo $employee_list[$i]->hired_date; ?></td>
                        <td><?php echo $employee_list[$i]->salary; ?></td>
                        <td><a href="<?php echo base_url() . "index.php/update_employee/index/" . $employee_list[$i]->employee_no; ?>">Update</a></td>
                        <td><a href="<?php echo base_url() . "index.php/deleteemployee/delete_employee/" . $employee_list[$i]->employee_id; ?>">Delete</a></td>

                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <a href="../../index.php/employee" class="btn btn-primary btn-lg" >Add Employees</a>
            <br><br>

        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>