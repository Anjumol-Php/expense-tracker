<!DOCTYPE html>
<html>
<head>

    <title>Edit Expense</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <div class="card">

        <div class="card-body">

            <h3>Edit Expense</h3>

            <form method="post"
                  action="<?= base_url('expense-update/'.$expense['id']) ?>">

                <div class="mb-3">

                    <label>Title</label>

                    <input type="text"
                           name="title"
                           value="<?= $expense['title'] ?>"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label>Amount</label>

                    <input type="number"
                           step="0.01"
                           name="amount"
                           value="<?= $expense['amount'] ?>"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label>Category</label>

                    <input type="text"
                           name="category"
                           value="<?= $expense['category'] ?>"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label>Date</label>

                    <input type="date"
                           name="expense_date"
                           value="<?= $expense['expense_date'] ?>"
                           class="form-control">

                </div>

                <div class="mb-3">

                    <label>Notes</label>

                    <textarea name="notes"
                              class="form-control"><?= $expense['notes'] ?></textarea>

                </div>

                <button class="btn btn-primary">

                    Update Expense

                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>