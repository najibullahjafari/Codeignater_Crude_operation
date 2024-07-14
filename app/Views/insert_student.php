<!-- to extend laoyt -->
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
    <div class="container m-5 shadow-sm bg-light  p-3 font-sm">
        <?php $this->renderSection('content'); ?>
        <form method="post" action="<?php echo base_url('index.php/student/insert_student'); ?>">
            <div class="row $gray-300 ">
                <div class="col-md-3">
                    <label for="name" class="form_label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-md-3">
                    <label for="last_name" class="form_label">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
                <div class="col-md-3">
                    <label for="father_name" class="form_label">Father Name:</label>
                    <input type="text" class="form-control" id="father_name" name="father_name">
                </div>
                <div class="col-md-3">
                    <label for="grand_father_name" class="form_label">Grand Father Name:</label>
                    <input type="text" class="form-control" id="grand_father_name" name="grand_father_name">
                </div>
                <!-- Persian part -->
                <div class="col-md-3">
                    <label for="farsi_name" class="form_label">نام</label>
                    <input type="text" class="form-control" id="farsi_name" name="farsi_name">
                </div>
                <div class="col-md-3">
                    <label for="farsi_last_name" class="form_label">تخلص</label>
                    <input type="text" class="form-control" id="farsi_last_name" name="farsi_last_name">
                </div>
                <div class="col-md-3">
                    <label for="farsi_father_name" class="form_label">نام پدر</label>
                    <input type="text" class="form-control" id="farsi_father_name" name="farsi_father_name">
                </div>
                <div class="col-md-3">
                    <label for="farsi_grand_father_name" class="form_label"> نام پدر کلان</label>
                    <input type="text" class="form-control" id="farsi_grand_father_name" name="farsi_grand_father_name">
                </div>

                <div class="col-md-3">
                    <label for="dob" class="form_label">Date of Birth:</label><br>
                    <input type="date" class="form-control" id="dob" name="dob"><br>
                </div>
                <div class="col-md-3">
                    <label for="farsi_dob_hegri_shamsi" class="form_label"> تاریخ تولد (ه ش)</label><br>
                    <input type="date" class="form-control" id="farsi_dob_hegri_shamsi"
                        name="farsi_dob_hegri_shamsi"><br>
                </div>
                <div class="col-md-3">
                    <label for="farsi_dob_hegri_qamari" class="form_label"> تاریخ تولد (ه ق)</label><br>
                    <input type="date" class="form-control" id="farsi_dob_hegri_qamari"
                        name="farsi_dob_hegri_qamari"><br>
                </div>
                <div class="col-md-3">
                    <label for="gender" class="form-label">جنسیت:</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="gender_male" name="gender" value="male">
                        <label class="form-check-label" for="gender_male">Male</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="gender_female" name="gender" value="female">
                        <label class="form-check-label" for="gender_female">Female</label>
                    </div>
                </div>

                <div class="col-md-2">
                    <label for="local_language" class="form_label">مورنی ژبه</label><br>
                    <select id="local_language" class="form-control" name="local_language">
                        <option value="Farsi">فارسی</option>
                        <option value="Pashto">پشتو</option>
                        <option value="Other">دیگر</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <label for="id_card_number" class="form_label"> تذکره نمبر</label><br>
                    <input type="text" class="form-control" id="id_card_number" name="id_card_number">
                </div>

                <div class="col-md-4">
                    <label for="course" class="form_label">Course:</label><br>
                    <select id="course" class="form-control" name="course">
                        <option value="Computer Science">Computer Science</option>
                        <option value="Electrical Engineering">Electrical Engineering</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                    </select>
                </div>


                <span class="col-md-12 mb-4 mt-4">اصلی اسټوګنی</span>

                <div class="col-md-4">
                    <label for="province" class="form_label"> ولایت</label><br>
                    <input type="text" class="form-control" id="province" name="province">
                </div>
                <div class="col-md-4">
                    <label for="district" class="form_label"> ولسوالی / ناحیه</label><br>
                    <input type="text" class="form-control" id="district" name="district">
                </div>
                <div class="col-md-4">
                    <label for="village" class="form_label"> کلی / کوڅه</label><br>
                    <input type="text" class="form-control" id="village" name="village">
                </div>

                <span class="col-md-12 mb-4">فعلی اسټوګنی</span>

                <div class="col-md-4">
                    <label for="current_province" class="form_label"> ولایت</label><br>
                    <input type="text" class="form-control" id="current_province" name="current_province">
                </div>
                <div class="col-md-4">
                    <label for="current_district" class="form_label"> ولسوالی / ناحیه</label><br>
                    <input type="text" class="form-control" id="current_district" name="current_district">
                </div>
                <div class="col-md-4">
                    <label for="current_village" class="form_label"> کلی / کوڅه</label><br>
                    <input type="text" class="form-control" id="current_village" name="current_village">
                </div>
                <div class="col-md-4">
                    <label for="home_number" class="form_label">کور نمبر</label><br>
                    <input type="text" class="form-control" id="home_number" name="home_number">
                </div>

                <div class="col-md-4">
                    <label for="country" class="form_label">زدکری هیواد</label><br>
                    <input type="text" class="form-control" id="country" name="country">
                </div>
                <div class="col-md-4">
                    <label for="city" class="form_label">زدکری شار</label><br>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                <div class="col-md-4">
                    <label for="school" class="form_label"> مدرسه / جامعه</label><br>
                    <input type="text" class="form-control" id="school" name="school">
                </div>
                <div class="col-md-4">
                    <label for="graduate_year" class="form_label"> فراغت کال</label><br>
                    <input type="date" class="form-control" id="graduate_year" name="graduate_year">
                </div>
                <div class="col-md-4">
                    <label for="taqder" class="form_label"> تقدیر </label><br>
                    <input type="date" class="form-control" id="taqder" name="taqder">
                </div>
                <div class="col-md-4">
                    <label for="education_level" class="form_label"> د عصری زدکری کچه </label><br>
                    <input type="date" class="form-control" id="education_level" name="education_level">
                </div>
                <div class="col-md-4">
                    <label for="call_number" class="form_label"> د اړیګی شمیره </label><br>
                    <input type="text" class="form-control" id="call_number" name="call_number">
                </div>
                <div class="col-md-4">
                    <label for="whatsapp_number" class="form_label"> د وتساپ شمیره </label><br>
                    <input type="text" class="form-control" id="whatsapp_number" name="whatsapp_number">
                </div>
                <div class="col-md-4">
                    <label for="email" class="form_label"> ایمیل </label><br>
                    <input type="email" class="form-control" id="email" name="email">
                </div>




                <div class="col-md-12 mb-4">
                    <input class="mt-3 btn btn-primary" type="submit" value="Submit">
                </div>
            </div>
        </form>

    </div>

</html>