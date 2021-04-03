<?php

namespace App\Models;

use CodeIgniter\Model;

class AccountsModel extends Model
{

    protected $table      = 'accounts';
    protected $primaryKey = 'id';

    protected $allowedFields = ['bank_name', 'account_number', 'ifsc', 'branch', 'balance'];
    
}