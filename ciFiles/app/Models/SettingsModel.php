<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{

    protected $table      = 'settings';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'address', 'contact_number', 'gstin', 'logo'];
    
}