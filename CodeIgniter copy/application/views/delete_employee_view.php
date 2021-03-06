<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeIgniter Delete Database Demo</title>
    <!--link the bootstrap css file-->
    <link href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <table class="table table-striped table-hover">
                <thead>
                <tr class="bg-primary">
                    <th>#</th>
                    <th>Employee No</th>
                    <th>Employee Name</th>
                    <th>Department</th>
                    <th>Designation</th>
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
                        <td><a href="<?php echo base_url() . "index.php/update_employee/index/" . $employee_list[$i]->employee_no; ?>">Update</a></td>
                        <td><a href="<?php echo base_url() . "index.php/deleteemployee/delete_employee/" . $employee_list[$i]->employee_id; ?>">Delete</a></td>

                    </tr>
                <?php } ?>
                </tbody>
            </table>

            <a href="../../index.php/employee">Add Employees</a>

        </div>
    </div>
</div>
</body>
</html>