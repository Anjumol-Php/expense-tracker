<!DOCTYPE html>
<html>
<head>

    <title>Expense Tracker</title>

    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f7fb;
        }

        .sidebar{
            width:250px;
            min-height:100vh;
            background:#111827;
            color:white;
            padding:20px;
            position:fixed;
        }

        .sidebar a{
            color:white;
            text-decoration:none;
            display:block;
            padding:12px;
            border-radius:10px;
            margin-bottom:10px;
        }

        .sidebar a:hover{
            background:#1f2937;
        }

        .content{
            margin-left:260px;
            padding:20px;
        }

        .card-box{
            border-radius:20px;
            padding:25px;
            color:white;
        }

        @media(max-width:768px){

            .sidebar{
                width:100%;
                position:relative;
                min-height:auto;
            }

            .content{
                margin-left:0;
            }

        }

    </style>

</head>
<body>

<div class="sidebar">

    <h3>Expense Tracker</h3>

    <hr>

    <a href="<?= base_url('dashboard') ?>">
        Dashboard
    </a>
    <a href="<?= base_url('add-income') ?>">
        Add Income
    </a>
    <a href="<?= base_url('add-savings') ?>">
        Savings Transfer
    </a>
    <a href="<?= base_url('add-expense') ?>">
        Add Expense
    </a>

    <a href="<?= base_url('expenses') ?>">
        View Expenses
    </a>

    <a href="<?= base_url('logout') ?>">
        Logout
    </a>

</div>

<div class="content">

    <?= $this->renderSection('content') ?>

</div>

</body>
</html>