<?php

namespace App\Models;
use CodeIgniter\Model;

class SearchModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['fullname','email', 'birthday'];
}

