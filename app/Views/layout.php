<!-- here to create a layout admin panel -->
<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <nav class="shadow-lg navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <a class=" nav-link active" href="/">Admin Panel</a>
            <a class=" nav-link active" href="/student">Registered students</a>
            <a class=" nav-link active" href="/student/insert_student">Add student</a>
        </ul>
    </nav>
    <div class="container"></div>
    <div class="row">
        <div class="col-lg-12">
            <?php $this->renderSection('content'); ?>


        </div>
    </div>
</body>

</html>