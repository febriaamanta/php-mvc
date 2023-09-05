<div class="container mt-5">
    <div class="row">
        <div class="col-6">

            <div class="row">
                <div class="">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
            <button type="button" class="btn btn-primary tombolTambahData " data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Data Siswa
            </button>


            <h3 class="mt-4">Data Siswa</h3>
            <?php foreach ($data['siswa'] as $siswa) : ?>
                <ul class="list-group my-2">
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $siswa['nama']; ?>

                        <div class="d-flex ">
                            <a href="<?= BASE_URL; ?>/datasiswa/show/<?= $siswa['id']; ?>" class="badge bg-primary" style="text-decoration: none; color: white;">detail</a>
                            <a href="<?= BASE_URL; ?>/datasiswa/edit/<?= $siswa['id']; ?>" class="badge bg-success tampilModalUbah mx-2" style="text-decoration: none; color: white;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $siswa['id']; ?>">ubah</a>
                            <a href="<?= BASE_URL; ?>/datasiswa/delete/<?= $siswa['id']; ?>" class="badge bg-danger" style="text-decoration: none; color: white;" onClick="return confirm('yakin');">hapus</a>
                        </div>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>



</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL; ?>/datasiswa/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="L">Laki - laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>


</div>