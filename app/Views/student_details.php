<!-- to extend layout -->
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
    <div class="row bg-secondary text-white">
        <div class="col-lg-12 m-3 shadow-sm-1  mb-5">
            <?php $this->renderSection('content'); ?>
            <table class="text-white table">
                <h4 class="justify-content-center align-item-center m-4 text-center">The Registered students</h4>
                <tr>
                    <th class="">Name</th>
                    <th class="">Date of Birth</th>
                    <th class=""> Course</th>
                    <th class="">Actions</th>
                </tr>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['dob']; ?></td>
                        <td><?php echo $student['course']; ?></td>
                        <td class="m-2">
                            <a class="btn btn-success m-1"
                                href="<?php echo base_url('/student/edit_student/' . $student['id']); ?>">Edit</a>
                            <a class="btn btn-danger m-1"
                                href="<?php echo base_url('/student/delete_student/' . $student['id']); ?>"
                                onclick="return confirm('Are you sure you want to delete this student?');">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>