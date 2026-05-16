<?php

namespace App\Models;

use CodeIgniter\Model;

class SavingsModel extends Model
{
    protected $table = 'savings';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'amount',
        'transfer_date',
        'notes'
    ];
}