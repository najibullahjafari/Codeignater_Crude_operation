<!-- the layout -->

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
    <div class="row m-5">
        <div class="col-lg-12 bg-light shadow-sm">
            <?php $this->renderSection('content'); ?>
            <form method="post" action="<?php echo base_url('/student/update_student/' . $student['id']); ?>">
                <div class="row m-3">
                    <div class="col-md-12">
                        <h4>Edit Details of <?php echo $student['name']; ?></h4>
                    </div>
                    <div class="col-md-4">
                        <label for="name" class="form-label">Name:</label><br>
                        <input type="text" class="form-control" id="name" name="name"
                            value="<?php echo $student['name']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="dob" class="form-label">Date of Birth:</label><br>
                        <input type="date" class="form-control" id="dob" name="dob"
                            value="<?php echo $student['dob']; ?>">
                    </div>
                    <div class="col-md-4">
                        <label for="course" class="form-label">Course:</label><br>
                        <select id="course" class="form-control" name="course">
                            <option value="Computer Science" <?php if ($student['course'] == 'Computer Science')
                                echo 'selected'; ?>>Computer Science</option>
                            <option value="Electrical Engineering" <?php if ($student['course'] == 'Electrical Engineering')
                                echo 'selected'; ?>>Electrical Engineering</option>
                            <option value="Mechanical Engineering" <?php if ($student['course'] == 'Mechanical Engineering')
                                echo 'selected'; ?>>Mechanical Engineering</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="last_name" class="form-label">Last Name:</label><br>
                        <input type="text" class="form-control" id="last_name" name="last_name"
                            value="<?php echo $student['last_name']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="father_name" class="form-label">Father Name:</label><br>
                        <input type="text" class="form-control" id="father_name" name="father_name"
                            value="<?php echo $student['father_name']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="grand_father_name" class="form-label">Grand Father Name:</label><br>
                        <input type="text" class="form-control" id="grand_father_name" name="grand_father_name"
                            value="<?php echo $student['grand_father_name']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="farsi_name" class="form-label">Farsi Name:</label><br>
                        <input type="text" class="form-control" id="farsi_name" name="farsi_name"
                            value="<?php echo $student['farsi_name']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="farsi_last_name" class="form-label">Farsi Last Name:</label><br>
                        <input type="text" class="form-control" id="farsi_last_name" name="farsi_last_name"
                            value="<?php echo $student['farsi_last_name']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="farsi_father_name" class="form-label">Farsi Father Name:</label><br>
                        <input type="text" class="form-control" id="farsi_father_name" name="farsi_father_name"
                            value="<?php echo $student['farsi_father_name']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="farsi_grand_father_name" class="form-label">Farsi Grand Father Name:</label><br>
                        <input type="text" class="form-control" id="farsi_grand_father_name"
                            name="farsi_grand_father_name"
                            value="<?php echo $student['farsi_grand_father_name']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="farsi_dob_hegri_shamsi" class="form-label">Farsi DOB Hegri Shamsi:</label><br>
                        <input type="date" class="form-control" id="farsi_dob_hegri_shamsi"
                            name="farsi_dob_hegri_shamsi" value="<?php echo $student['farsi_dob_hegri_shamsi']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="farsi_dob_hegri_qamari" class="form-label">Farsi DOB Hegri Qamari:</label><br>
                        <input type="date" class="form-control" id="farsi_dob_hegri_qamari"
                            name="farsi_dob_hegri_qamari" value="<?php echo $student['farsi_dob_hegri_qamari']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="gender" class="form-label">Gender:</label><br>
                        <input type="text" class="form-control" id="gender" name="gender"
                            value="<?php echo $student['gender']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="local_language" class="form-label">Local Language:</label><br>
                        <input type="text" class="form-control" id="local_language" name="local_language"
                            value="<?php echo $student['local_language']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="id_card_number" class="form-label">ID Card Number:</label><br>
                        <input type="text" class="form-control" id="id_card_number" name="id_card_number"
                            value="<?php echo $student['id_card_number']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="province" class="form-label">Province:</label><br>
                        <input type="text" class="form-control" id="province" name="province"
                            value="<?php echo $student['province']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="district" class="form-label">District:</label><br>
                        <input type="text" class="form-control" id="district" name="district"
                            value="<?php echo $student['district']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="village" class="form-label">Village:</label><br>
                        <input type="text" class="form-control" id="village" name="village"
                            value="<?php echo $student['village']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="current_province" class="form-label">Current Province:</label><br>
                        <input type="text" class="form-control" id="current_province" name="current_province"
                            value="<?php echo $student['current_province']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="current_district" class="form-label">Current District:</label><br>
                        <input type="text" class="form-control" id="current_district" name="current_district"
                            value="<?php echo $student['current_district']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="current_village" class="form-label">Current Village:</label><br>
                        <input type="text" class="form-control" id="current_village" name="current_village"
                            value="<?php echo $student['current_village']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="home_number" class="form-label">Home Number:</label><br>
                        <input type="text" class="form-control" id="home_number" name="home_number"
                            value="<?php echo $student['home_number']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="country" class="form-label">Country:</label><br>
                        <input type="text" class="form-control" id="country" name="country"
                            value="<?php echo $student['country']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="city" class="form-label">City:</label><br>
                        <input type="text" class="form-control" id="city" name="city"
                            value="<?php echo $student['city']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="school" class="form-label">School:</label><br>
                        <input type="text" class="form-control" id="school" name="school"
                            value="<?php echo $student['school']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="graduate_year" class="form-label">Graduate Year:</label><br>
                        <input type="text" class="form-control" id="graduate_year" name="graduate_year"
                            value="<?php echo $student['graduate_year']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="taqder" class="form-label">Taqder:</label><br>
                        <input type="text" class="form-control" id="taqder" name="taqder"
                            value="<?php echo $student['taqder']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="education_level" class="form-label">Education Level:</label><br>
                        <input type="text" class="form-control" id="education_level" name="education_level"
                            value="<?php echo $student['education_level']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="call_number" class="form-label">Call Number:</label><br>
                        <input type="text" class="form-control" id="call_number" name="call_number"
                            value="<?php echo $student['call_number']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="whatsapp_number" class="form-label">WhatsApp Number:</label><br>
                        <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number"
                            value="<?php echo $student['whatsapp_number']; ?>"><br>
                    </div>
                    <div class="col-md-4">
                        <label for="email" class="form-label">Email:</label><br>
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?php echo $student['email']; ?>"><br>
                    </div>
                    <div class="col-md-12 mt-2">
                        <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>