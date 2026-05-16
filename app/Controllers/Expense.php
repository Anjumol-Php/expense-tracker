<?php

namespace App\Controllers;

use App\Models\ExpenseModel;

class Expense extends BaseController
{
    public function index()
{
    $model = new ExpenseModel();

    $builder = $model
        ->where('user_id', session()->get('user_id'));

    $from = $this->request->getGet('from');

    $to = $this->request->getGet('to');

    $category = $this->request->getGet('category');

    $search = $this->request->getGet('search');

    if($from)
    {
        $builder->where('expense_date >=', $from);
    }

    if($to)
    {
        $builder->where('expense_date <=', $to);
    }

    if($category)
    {
        $builder->where('category', $category);
    }

    if($search)
    {
        $builder->like('title', $search);
    }

    $expenses = $builder
        ->orderBy('id', 'DESC')
        ->findAll();

    $data['expenses'] = $expenses;

    return view('expense/index', $data);
}
    public function save()
    {
        $model = new ExpenseModel();

        $data = [

            'user_id' => session()->get('user_id'),

            'title' => $this->request->getPost('title'),

            'amount' => $this->request->getPost('amount'),

            'category' => $this->request->getPost('category'),

            'expense_date' => $this->request->getPost('expense_date'),

            'notes' => $this->request->getPost('notes')

        ];

        $model->insert($data);

        return redirect()->to(base_url('dashboard'));
    }
    public function delete($id)
    {
        $model = new ExpenseModel();

        $model->delete($id);

        return redirect()->to(base_url('dashboard'));
    }
    public function edit($id)
    {
        $model = new ExpenseModel();

        $data['expense'] = $model->find($id);

        return view('expense/edit', $data);
    }
    public function update($id)
    {
        $model = new ExpenseModel();

        $data = [

            'title' => $this->request->getPost('title'),

            'amount' => $this->request->getPost('amount'),

            'category' => $this->request->getPost('category'),

            'expense_date' => $this->request->getPost('expense_date'),

            'notes' => $this->request->getPost('notes')

        ];

        $model->update($id, $data);

        return redirect()->to(base_url('dashboard'));
    }
    public function add()
    {
        return view('expense/add');
    }
}