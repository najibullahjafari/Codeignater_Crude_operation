<?php
namespace App\Models;

use CodeIgniter\Model;

class Student_model extends Model
{

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'dob', 'course'];

    public function insert_student($data)
    {
        return $this->insert($data);
    }

    public function update_student($id, $data)
    {
        return $this->update($id, $data);
    }

    public function delete_student($id)
    {
        return $this->delete($id);
    }

    public function get_students()
    {
        return $this->findAll();
    }

    public function get_student($id)
    {
        return $this->find($id);
    }
}
