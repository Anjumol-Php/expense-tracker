<?php

namespace App\Controllers;
use App\Models\ExpenseModel;
use App\Models\IncomeModel;
use App\Models\SavingsModel;
class Dashboard extends BaseController
{
    public function index()
    {
        if(!session()->get('user_id'))
        {
            return redirect()->to(base_url('login'));
        }

        $expenseModel = new ExpenseModel();
        $incomeModel = new IncomeModel();
        $savingsModel = new SavingsModel();
        
        $user_id = session()->get('user_id');


        $from = $this->request->getGet('from');

        $to = $this->request->getGet('to');

        $builder = $expenseModel
            ->where('user_id', $user_id);

        if($from && $to)
        {
            $builder->where('expense_date >=', $from);

            $builder->where('expense_date <=', $to);
        }

        $expenses = $builder
            ->orderBy('id', 'DESC')
            ->findAll();

        $totalExpense = $expenseModel
            ->selectSum('amount')
            ->where('user_id', $user_id)
            ->first();

        $monthlyExpense = $expenseModel
            ->selectSum('amount')
            ->where('user_id', $user_id)
            ->where('MONTH(expense_date)', date('m'))
            ->first();

        $todayExpense = $expenseModel
            ->selectSum('amount')
            ->where('user_id', $user_id)
            ->where('expense_date', date('Y-m-d'))
            ->first();
        $totalIncome = $incomeModel
            ->selectSum('amount')
            ->where('user_id', $user_id)
            ->first();
        $totalSavings = $savingsModel
            ->selectSum('amount')
            ->where('user_id', $user_id)
            ->first();
        $data = [

            'expenses' => $expenses,

            'totalExpense' => $totalExpense,

            'monthlyExpense' => $monthlyExpense,

            'todayExpense' => $todayExpense,
            'totalIncome' => $totalIncome,
            'totalSavings' => $totalSavings,

        ];

        return view('dashboard/index', $data);
    }
}