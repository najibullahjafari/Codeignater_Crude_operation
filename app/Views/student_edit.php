<!-- the layout -->

<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Admin Panel</a>
        <a class="navbar-brand" href="/student">Registered students</a>
        <a class="navbar-brand" href="/student/insert_student">Add student</a>
    </nav>
    <div class="row ">
        <div class="col-lg-12 bg-light shadow-sm-1 ">
            <?php $this->renderSection('content'); ?>
            <form method="post" action="<?php echo base_url('/student/update_student/' . $student['id']); ?>">
                <div class="row m-3 ">
                    <div class="col-md-12">
                        <h4>Edit Details of <?php echo $student['name']; ?></h4>
                    </div>
                    <div class="col-md-4">
                        <label for="name" class="form-label">Name:</label><br>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $student['name']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="dob" class="form_label">Date of Birth:</label><br>
                        <input type="date" class="form-control" id="dob" name="dob"
                            value="<?php echo $student['dob']; ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="course" class="from_label">Course:</label><br>
                        <select id="course" class="form-control" name="course">
                            <option value="Computer Science" <?php if ($student['course'] == 'Computer Science')
                                echo 'selected'; ?>>Computer
                                Science</option>
                            <option value="Electrical Engineering" <?php if ($student['course'] == 'Electrical Engineering')
                                echo 'selected'; ?>>Electrical Engineering</option>
                            <option value="Mechanical Engineering" <?php if ($student['course'] == 'Mechanical Engineering')
                                echo 'selected'; ?>>Mechanical Engineering</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-2 ">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>


</body>

</html>