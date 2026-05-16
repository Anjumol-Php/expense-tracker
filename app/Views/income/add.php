<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card">

    <div class="card-body">

        <h3>Add Income</h3>

        <form method="post"
              action="<?= base_url('income-save') ?>">

            <div class="row g-3">

                <div class="col-md-6">

                    <label>Amount Credited</label>

                    <input type="number"
                           step="0.01"
                           name="amount"
                           class="form-control">

                </div>

                <div class="col-md-6">

                    <label>Credited Date</label>

                    <input type="date"
                           name="credited_date"
                           class="form-control">

                </div>

                <div class="col-md-12">

                    <label>Notes</label>

                    <textarea name="notes"
                              class="form-control"></textarea>

                </div>

            </div>

            <button class="btn btn-success mt-4">

                Save Income

            </button>

        </form>

    </div>

</div>

<?= $this->endSection() ?>