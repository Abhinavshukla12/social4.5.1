<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primarykey = 'id';
    protected $allowedFields = ['name', 'email']; // Fields that can be mass-assigned

    // You can define validation rules here or in the controller
    protected $validationRules = [
        'name' => 'required|min_length[4]|max_length[10]',
        'email' => 'required|valid_email'
    ];
}
