<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card">

    <div class="card-body">

        <h3>Add Expense</h3>

        <form method="post"
              action="<?= base_url('expense-save') ?>">

            <div class="row g-3">

                <div class="col-md-6">

                    <label>Expense Title</label>

                    <input type="text"
                           name="title"
                           class="form-control">

                </div>

                <div class="col-md-6">

                    <label>Amount</label>

                    <input type="number"
                           step="0.01"
                           name="amount"
                           class="form-control">

                </div>

                <div class="col-md-6">

                    <label>Category</label>

                    <select name="category"
                            class="form-control">

                        <option>Food</option>
                        <option>Travel</option>
                        <option>Shopping</option>
                        <option>Health</option>
                        <option>Transfer</option>
                        <option>Others</option>

                    </select>

                </div>

                <div class="col-md-6">

                    <label>Date</label>

                    <input type="date"
                           name="expense_date"
                           class="form-control">

                </div>

                <div class="col-md-12">

                    <label>Notes</label>

                    <textarea name="notes"
                              class="form-control"></textarea>

                </div>

            </div>

            <button class="btn btn-primary mt-4">

                Save Expense

            </button>

        </form>

    </div>

</div>

<?= $this->endSection() ?>