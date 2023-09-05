<div class="container">
    <div class="card my-5">
        <div class="card-header pb-0">
            <h5>Table Guru</h5>
        </div>
        <div class="d-flex justify-content-between mb-2">
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive px-2">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jurusan</th>
                            <th>Pelajaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['guru'] as $guru) : ?>
                        <tr>
                            <td><?= $guru['nama']; ?></td>
                            <td><?= $guru['jurusan']; ?></td>
                            <td><?= $guru['pelajaran']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>