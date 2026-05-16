<?php

namespace App\Models;

use CodeIgniter\Model;

class IncomeModel extends Model
{
    protected $table = 'income';

    protected $primaryKey = 'id';

    protected $allowedFields = [
        'user_id',
        'amount',
        'credited_date',
        'notes'
    ];
}