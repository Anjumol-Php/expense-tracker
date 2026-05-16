<?php

namespace App\Controllers;

use App\Models\IncomeModel;

class Income extends BaseController
{
    public function add()
    {
        return view('income/add');
    }

    public function save()
    {
        $model = new IncomeModel();

        $data = [

            'user_id' => session()->get('user_id'),

            'amount' => $this->request->getPost('amount'),

            'credited_date' => $this->request->getPost('credited_date'),

            'notes' => $this->request->getPost('notes')

        ];

        $model->insert($data);

        return redirect()->to(base_url('dashboard'));
    }
}