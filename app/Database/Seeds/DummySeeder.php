<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Libraries\Hash;

class DummySeeder extends Seeder
{
    public function run()
    {
        $dummyData = array (
            'fullname' => "John Doe",
            'email' => "JohnDoe123@gmail.com",
            'birthday' => 12-25-01,
            'password' => Hash::make("DummyPassword"),
        );
        
        $this->db->table('users')->insert($dummyData);
    }
}
