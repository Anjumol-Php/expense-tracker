<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
 
<br><br>
<form method="get">

    <div class="row g-3 mb-4">

        <div class="col-md-3">

            <input type="date"
                   name="from"
                   class="form-control"
                   value="<?= $_GET['from'] ?? '' ?>">

        </div>

        <div class="col-md-3">

            <input type="date"
                   name="to"
                   class="form-control"
                   value="<?= $_GET['to'] ?? '' ?>">

        </div>

        <div class="col-md-2">

            <select name="category"
                    class="form-control">

                <option value="">
                    All Category
                </option>

                <option value="Food">
                    Food
                </option>

                <option value="Travel">
                    Travel
                </option>

                <option value="Shopping">
                    Shopping
                </option>

                <option value="Health">
                    Health
                </option>
                <option value="Transfer">
                    Transfer
                </option>
                <option value="Others">
                    Others
                </option>
            </select>

        </div>

        <div class="col-md-2">

            <input type="text"
                   name="search"
                   placeholder="Search"
                   class="form-control"
                   value="<?= $_GET['search'] ?? '' ?>">

        </div>

        <div class="col-md-2">

            <button class="btn btn-dark w-100">

                Filter

            </button>

        </div>

    </div>

</form>
<div class="card">

    <div class="card-body">

        <h3>Expense History</h3>

        <div class="table-responsive mt-4">

            <table class="table table-bordered">

                <thead>

                    <tr>

                        <th>Title</th>

                        <th>Amount</th>

                        <th>Category</th>

                        <th>Date</th>

                        <th>Notes</th>

                        <th width="180">
                            Action
                        </th>

                    </tr>

                </thead>

                <tbody>

                    <?php foreach($expenses as $expense){ ?>

                        <tr>

                            <td>
                                <?= $expense['title'] ?>
                            </td>

                            <td>
                                ₹ <?= $expense['amount'] ?>
                            </td>

                            <td>
                                <?= $expense['category'] ?>
                            </td>

                            <td>
                                <?= $expense['expense_date'] ?>
                            </td>

                            <td>
                                <?= $expense['notes'] ?>
                            </td>

                            <td>

                                <a href="<?= base_url('expense-edit/'.$expense['id']) ?>"
                                   class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <a href="<?= base_url('expense-delete/'.$expense['id']) ?>"
                                   class="btn btn-danger btn-sm">

                                    Delete

                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection() ?>