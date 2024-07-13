<!-- to extend laoyt -->
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
        <!-- <a class="navbar-brand" href="/student/insert_student">Edit student</a> -->

    </nav>
    <div class=" shadow-sm  p-3">
        <?php $this->renderSection('content'); ?>
        <form method="post" action="<?php echo base_url('index.php/student/insert_student'); ?>">
            <div class="row $gray-300 ">
                <div class="col-md-4">
                    <label for="name" class="form_label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="col-md-4">
                    <label for="dob" class="form_label">Date of Birth:</label><br>
                    <input type="date" class="form-control" id="dob" name="dob"><br>
                </div>

                <div class="col-md-4">
                    <label for="course" class="form_label">Course:</label><br>
                    <select id="course" class="form-control" name="course">
                        <option value="Computer Science">Computer Science</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                    </select>
                </div>

                <div class="col-md-4 mb-4">
                    <input class="mt-3 btn btn-primary" type="submit" value="Submit">
                </div>
            </div>
        </form>

    </div>

</html>