<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card">

    <div class="card-body">

        <h3>Transfer to Savings</h3>

        <form method="post"
              action="<?= base_url('savings-save') ?>">

            <div class="row g-3">

                <div class="col-md-6">

                    <label>Amount</label>

                    <input type="number"
                           step="0.01"
                           name="amount"
                           class="form-control">

                </div>

                <div class="col-md-6">

                    <label>Transfer Date</label>

                    <input type="date"
                           name="transfer_date"
                           class="form-control">

                </div>

                <div class="col-md-12">

                    <label>Notes</label>

                    <textarea name="notes"
                              class="form-control"></textarea>

                </div>

            </div>

            <button class="btn btn-dark mt-4">

                Save Transfer

            </button>

        </form>

    </div>

</div>

<?= $this->endSection() ?>