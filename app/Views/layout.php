<!-- here to create a layout admin panel -->
<!DOCTYPE html>
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
    <div class="container"></div>
    <div class="row">
        <div class="col-lg-12">
            <?php $this->renderSection('content'); ?>


        </div>
    </div>
</body>

</html>