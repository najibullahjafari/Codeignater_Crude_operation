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
