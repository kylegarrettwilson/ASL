<!-- dont use this one -->
<html>
<head>
    <title>Department Master</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link the bootstrap css file-->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Employee Name</th>
                    <th>Employee Number</th>
                    <th>Date of Hire</th>
                    <th>Salary</th>
                </tr>
                </thead>
                <tbody>
                <?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
                    <tr>
                        <td><?php echo ($i+1); ?></td>
                        <td><?php echo $deptlist[$i]->employee_name; ?></td>
                        <td><?php echo $deptlist[$i]->employee_no; ?></td>
                        <td><?php echo $deptlist[$i]->hired_date; ?></td>
                        <td><?php echo $deptlist[$i]->salary; ?></td>
                        <td><a href="../../index.php/update_employee/index/<?php echo $deptlist[$i]->employee_no?>"</a>Update</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
