<!-- to extend layout -->
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="shadow-lg navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <a class="nav-link active" href="/">Admin Panel</a>
            <a class="nav-link active" href="/student">Registered students</a>
            <a class="nav-link active" href="/student/insert_student">Add student</a>
        </ul>
    </nav>
    <div>

    </div>
    <div class="row bg-light m-5 rounded shadow-sm">
        <div class="container col-lg-12 m-3 shadow-sm-1 mb-5">
            <?php $this->renderSection('content'); ?>
            <table class="table">
                <h4 class="justify-content-center align-item-center m-4 text-center">The Registered students</h4>
                <tr>
                    <th>Name</th>
                    <th>نام / نوم</th>
                    <th>Last Name</th>
                    <th>Father Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($students as $student): ?>
                    <tr>
                        <td><?php echo $student['name']; ?></td>
                        <td><?php echo $student['farsi_name']; ?></td>
                        <td><?php echo $student['last_name']; ?></td>
                        <td><?php echo $student['father_name']; ?></td>
                        <td><?php echo $student['email']; ?></td>
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