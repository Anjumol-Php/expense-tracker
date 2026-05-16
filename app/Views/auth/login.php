<!DOCTYPE html>
<html>
<head>

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background: linear-gradient(135deg,#6a11cb,#2575fc);
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            font-family:Arial;
        }

        .login-box{
            width:400px;
            background:white;
            padding:40px;
            border-radius:20px;
            box-shadow:0 10px 30px rgba(0,0,0,0.2);
        }

    </style>

</head>
<body>

<div class="login-box">

    <h2 class="text-center mb-4">
        Expense Tracker
    </h2>

    <form method="post" action="/expense/public/login-check">

        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>

        <div class="mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <button class="btn btn-primary w-100">
            Login
        </button>

    </form>

</div>

</body>
</html>