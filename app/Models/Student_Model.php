<?php
namespace App\Models;

use CodeIgniter\Model;

class Student_model extends Model
{

    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'dob',
        'course',
        'last_name',
        'father_name',
        'grand_father_name',
        'farsi_name',
        'farsi_last_name',
        'farsi_father_name',
        'farsi_grand_father_name',
        'farsi_dob_hegri_shamsi',
        'farsi_dob_hegri_qamari',
        'gender',
        'local_language',
        'id_card_number',
        'province',
        'district',
        'village',
        'current_province',
        'current_district',
        'current_village',
        'home_number',
        'country',
        'city',
        'school',
        'graduate_year',
        'taqder',
        'education_level',
        'call_number',
        'whatsapp_number',
        'email'
    ];

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
