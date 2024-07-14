<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'dob' => [
                'type' => 'DATE',
            ],
            'course' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'father_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'grand_father_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'farsi_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'farsi_last_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'farsi_father_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'farsi_grand_father_name' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'farsi_dob_hegri_shamsi' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'farsi_dob_hegri_qamari' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'gender' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
            'local_language' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'id_card_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'province' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'district' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'village' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'current_province' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'current_district' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'current_village' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'home_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'country' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'city' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'school' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'graduate_year' => [
                'type' => 'INT',
                'constraint' => 4,
            ],
            'taqder' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'education_level' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'call_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'whatsapp_number' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('students');
    }

    public function down()
    {
        $this->forge->dropTable('students');
    }
}
