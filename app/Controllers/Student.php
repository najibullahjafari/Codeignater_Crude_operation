<?php
namespace App\Controllers;

use App\Models\Student_model;

class Student extends BaseController
{


    public function index()
    {
        $model = new Student_model();
        $data['students'] = $model->get_students();
        return view('student_details', $data);
    }
    public function show_insert_student()
    {
        return view('insert_student');
    }


    public function insert_student()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'dob' => 'required',
            'course' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('insert_student');
        } else {
            $data = [
                'name' => $this->request->getPost('name'),
                'dob' => $this->request->getPost('dob'),
                'course' => $this->request->getPost('course'),
                'last_name' => $this->request->getPost('last_name'),
                'father_name' => $this->request->getPost('father_name'),
                'grand_father_name' => $this->request->getPost('grand_father_name'),
                'farsi_name' => $this->request->getPost('farsi_name'),
                'farsi_last_name' => $this->request->getPost('farsi_last_name'),
                'farsi_father_name' => $this->request->getPost('farsi_father_name'),
                'farsi_grand_father_name' => $this->request->getPost('farsi_grand_father_name'),
                'farsi_dob_hegri_shamsi' => $this->request->getPost('farsi_dob_hegri_shamsi'),
                'farsi_dob_hegri_qamari' => $this->request->getPost('farsi_dob_hegri_qamari'),
                'gender' => $this->request->getPost('gender'),
                'local_language' => $this->request->getPost('local_language'),
                'id_card_number' => $this->request->getPost('id_card_number'),
                'province' => $this->request->getPost('province'),
                'district' => $this->request->getPost('district'),
                'village' => $this->request->getPost('village'),
                'current_province' => $this->request->getPost('current_province'),
                'current_district' => $this->request->getPost('current_district'),
                'current_village' => $this->request->getPost('current_village'),
                'home_number' => $this->request->getPost('home_number'),
                'country' => $this->request->getPost('country'),
                'city' => $this->request->getPost('city'),
                'school' => $this->request->getPost('school'),
                'graduate_year' => $this->request->getPost('graduate_year'),
                'taqder' => $this->request->getPost('taqder'),
                'education_level' => $this->request->getPost('education_level'),
                'call_number' => $this->request->getPost('call_number'),
                'whatsapp_number' => $this->request->getPost('whatsapp_number'),
                'email' => $this->request->getPost('email'),
            ];

            $model = new \App\Models\Student_model();
            $model->insert_student($data);
            return redirect()->to('student')->with('status', 'Student added successfully');
        }
    }





    public function edit_student($id)
    {
        $model = new \App\Models\Student_model();
        $data['student'] = $model->get_student($id);
        return view('student_edit', $data);
    }


    public function update_student($id)
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'dob' => 'required',
            'course' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('student_edit');
        } else {
            $data = [
                'name' => $this->request->getPost('name'),
                'dob' => $this->request->getPost('dob'),
                'course' => $this->request->getPost('course'),
                'last_name' => $this->request->getPost('last_name'),
                'father_name' => $this->request->getPost('father_name'),
                'grand_father_name' => $this->request->getPost('grand_father_name'),
                'farsi_name' => $this->request->getPost('farsi_name'),
                'farsi_last_name' => $this->request->getPost('farsi_last_name'),
                'farsi_father_name' => $this->request->getPost('farsi_father_name'),
                'farsi_grand_father_name' => $this->request->getPost('farsi_grand_father_name'),
                'farsi_dob_hegri_shamsi' => $this->request->getPost('farsi_dob_hegri_shamsi'),
                'farsi_dob_hegri_qamari' => $this->request->getPost('farsi_dob_hegri_qamari'),
                'gender' => $this->request->getPost('gender'),
                'local_language' => $this->request->getPost('local_language'),
                'id_card_number' => $this->request->getPost('id_card_number'),
                'province' => $this->request->getPost('province'),
                'district' => $this->request->getPost('district'),
                'village' => $this->request->getPost('village'),
                'current_province' => $this->request->getPost('current_province'),
                'current_district' => $this->request->getPost('current_district'),
                'current_village' => $this->request->getPost('current_village'),
                'home_number' => $this->request->getPost('home_number'),
                'country' => $this->request->getPost('country'),
                'city' => $this->request->getPost('city'),
                'school' => $this->request->getPost('school'),
                'graduate_year' => $this->request->getPost('graduate_year'),
                'taqder' => $this->request->getPost('taqder'),
                'education_level' => $this->request->getPost('education_level'),
                'call_number' => $this->request->getPost('call_number'),
                'whatsapp_number' => $this->request->getPost('whatsapp_number'),
                'email' => $this->request->getPost('email'),
            ];
            $model = new \App\Models\Student_model();
            $model->update_student($id, $data);
            return redirect()->to('/student');
        }
    }

    public function delete_student($id)
    {
        $model = new \App\Models\Student_model();

        // $this->load->model('student_model');
        $model->delete_student($id);
        return redirect('student');
    }
}
