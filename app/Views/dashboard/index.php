<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row">

<div class="col-lg-4 col-md-6 col-12 mb-3">

    <div class="card-box bg-success">

        <h5>Total Credited</h5>

        <h2>
            ₹ <?= $totalIncome['amount'] ?? 0 ?>
        </h2>

    </div>

</div>
<div class="col-lg-4 col-md-6 col-12 mb-3">

    <div class="card-box bg-warning">

        <h5>Current Balance</h5>

        <h2>

            ₹
            <?=

            ($totalIncome['amount'] ?? 0)

            -

            ($totalExpense['amount'] ?? 0)

            -

            ($totalSavings['amount'] ?? 0)

            ?>

        </h2>

    </div>

</div>
<div class="col-lg-4 col-md-6 col-12 mb-3">

    <div class="card-box bg-info">

        <h5>Total Savings</h5>

        <h2>
            ₹ <?= $totalSavings['amount'] ?? 0 ?>
        </h2>

    </div>

</div>
    <div class="col-lg-4 col-md-6 col-12 mb-3">

        <div class="card-box bg-primary">

            <h5>Total Expense</h5>

            <h2>
                ₹ <?= $totalExpense['amount'] ?? 0 ?>
            </h2>

        </div>

    </div>

    <div class="col-lg-4 col-md-6 col-12 mb-3">

        <div class="card-box bg-success">

            <h5>This Month</h5>

            <h2>
                ₹ <?= $monthlyExpense['amount'] ?? 0 ?>
            </h2>

        </div>

    </div>

    <div class="col-lg-4 col-md-6 col-12 mb-3">

        <div class="card-box bg-dark">

            <h5>Today Expense</h5>

            <h2>
                ₹ <?= $todayExpense['amount'] ?? 0 ?>
            </h2>

        </div>

    </div>

</div>
<div class="row mt-4">

    <div class="col-lg-6 mb-4">

        <div class="card h-100">

            <div class="card-body text-center">

                <h4>Expense Analytics</h4>

                <div style="width:300px;height:300px;margin:auto;">

                    <canvas id="expenseChart"></canvas>

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-6 mb-4">

        <div class="card h-100">

            <div class="card-body">

                <h4>Monthly Expense Report</h4>

                <div style="height:300px;">

                    <canvas id="monthlyChart"></canvas>

                </div>

            </div>

        </div>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>

const ctx = document.getElementById('expenseChart');

new Chart(ctx, {

    type: 'pie',

    data: {

        labels: [

            'Food',
            'Travel',
            'Shopping',
            'Health',
            'Transfer',
            'Others'

        ],

        datasets: [{

            data: [

                <?php

                $food = 0;
                $travel = 0;
                $shopping = 0;
                $health = 0;
                $transfer = 0;
                $others = 0;

                foreach($expenses as $expense)
                {
                    if($expense['category'] == 'Food')
                    {
                        $food += $expense['amount'];
                    }

                    if($expense['category'] == 'Travel')
                    {
                        $travel += $expense['amount'];
                    }

                    if($expense['category'] == 'Shopping')
                    {
                        $shopping += $expense['amount'];
                    }

                    if($expense['category'] == 'Health')
                    {
                        $health += $expense['amount'];
                    }
                    if($expense['category'] == 'Others')
                    {
                        $others += $expense['amount'];
                    }
                    if($expense['category'] == 'Transfer')
                    {
                        $transfer += $expense['amount'];
                    }
                }

                echo $food.','.$travel.','.$shopping.','.$health.','.$others.','.$transfer;

                ?>

            ]

        }]

    }

});

</script>
<script>

const monthlyCtx = document.getElementById('monthlyChart');

new Chart(monthlyCtx, {

    type: 'bar',

    data: {

        labels: [

            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'

        ],

        datasets: [{

            label: 'Monthly Expenses',

            data: [

                <?php

                $months = [];

                for($i=1; $i<=12; $i++)
                {
                    $months[$i] = 0;
                }

                foreach($expenses as $expense)
                {
                    $month = date('n', strtotime($expense['expense_date']));

                    $months[$month] += $expense['amount'];
                }

                echo implode(',', $months);

                ?>

            ]

        }]

    }

});

</script>
<?= $this->endSection() ?>
