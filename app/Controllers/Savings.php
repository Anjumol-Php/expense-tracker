<?php

namespace App\Controllers;

use App\Models\SavingsModel;

class Savings extends BaseController
{
    public function add()
    {
        return view('savings/add');
    }

    public function save()
    {
        $model = new SavingsModel();

        $data = [

            'user_id' => session()->get('user_id'),

            'amount' => $this->request->getPost('amount'),

            'transfer_date' => $this->request->getPost('transfer_date'),

            'notes' => $this->request->getPost('notes')

        ];

        $model->insert($data);

        return redirect()->to(base_url('dashboard'));
    }
}