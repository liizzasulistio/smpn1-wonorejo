<!-- Template -->
<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="mb-5">
    <div class="container text-center">
        <h2 style="font-family: 'Roboto', sans-serif;"> HASIL SELEKSI PPDB </h2>
        <hr style="width: 10%; margin:auto; height:3px; color:#cd8d7b;">
    </div>
</div>

<div class="container">
    <div class="table-responsive">

        <form class="d-flex float-md-end mb-4">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>