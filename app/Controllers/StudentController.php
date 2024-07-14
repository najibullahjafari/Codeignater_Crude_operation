<?php
namespace App\Controllers;

use App\Models\Student_model;
use CodeIgniter\Controller;

class Student extends Controller
{

    public function index()
    {

        return view('students');
    }
    public function insert_student()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'dob' => 'required',
            'course' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('insert_student');
        } else {
            $data = [
                'name' => $this->request->getPost('name'),
                'dob' => $this->request->getPost('dob'),
                'course' => $this->request->getPost('course')
            ];
            $model = new Student_model();
            $model->insert_student($data);
            return redirect()->to(base_url('student'));
        }
    }

    public function edit_student($id)
    {
        $model = new Student_model();
        $data['student'] = $model->get_student($id);
        return view('student_edit', $data);
    }

    public function update_student($id)
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'dob' => 'required',
            'course' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $model = new Student_model();
            $data['student'] = $model->get_student($id);
            return view('student_edit', $data);
        } else {
            $data = [
                'name' => $this->request->getPost('name'),
                'dob' => $this->request->getPost('dob'),
                'course' => $this->request->getPost('course')
            ];
            $model = new Student_model();
            $model->update_student($id, $data);
            return redirect()->to(base_url('student'));
        }
    }

    public function delete_student($id)
    {
        $model = new Student_model();
        $model->delete_student($id);
        return redirect()->to(base_url('student'));
    }
}
