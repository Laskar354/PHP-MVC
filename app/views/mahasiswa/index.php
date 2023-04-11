
<div class="container">
    <h1>Data Mahasiswa</h1>

    <!-- Flash Message -->
    <div class="row">
        <div class="col-lg-6">
            <?php echo Flasher::flash() ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark mb-4 mt-3 tambahMhs" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Mahasiswa
            </button>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">

        <form action="<?php echo BASEURL ?>/Mahasiswa/cari" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari disini tod.." name="keyword" autocomplete="off">
                <button class="btn btn-dark" type="submit" id="button-addon2">Cari</button>
            </div>
        </form>
    
        <?php foreach($data["mhs"] as $mhs) { ?>
            <div class="list-group">
                <li class="list-group-item"><?php echo $mhs["nama"]?>
                    <a href="<?php echo BASEURL ?>/Mahasiswa/edit/<?php echo $mhs["id"] ?>" class="badge bg-warning text-dark text-decoration-none float-end mx-1 modalUbah" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id = "<?php echo $mhs["id"] ?> ">Edit</a>
                    <a href="<?php echo BASEURL ?>/Mahasiswa/detail_mhs/<?php echo $mhs["id"] ?>" class="badge bg-info text-dark text-decoration-none float-end mx-1">Detail</a>
                    <a href="<?php echo BASEURL ?>/Mahasiswa/delete_mhs/<?php echo $mhs["id"] ?>" class="badge bg-danger text-dark text-decoration-none float-end mx-1" onclick="return confirm('Anda yakin menghapus data ini? tod')">Delete</a>
                </li>
            </div>
        <?php } ?>

        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Mahasiswa</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


        <form action="<?php echo BASEURL ?>/Mahasiswa/tambah" method="POST">

                <input type="hidden" name="id" id="id">

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim">
                </div>
                <div class="mb-3">
                    <label class="form-label">Jurusan</label>
                    <select class="form-select" aria-label="Default select example" name="jurusan" id="jurusan">
                        <option value="Informatika">Informatika</option>
                        <option value="Teknik Komputer">Teknik Komputer</option>
                        <option value="Akuntansi">Akuntansi</option>                              
                        <option value="Sistem Informasi">Sistem Informasi</option>                              
                        <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>                           
                        <option value="Kewirausahaan">Kewirausahaan</option>                           
                        <option value="Arsitektur">Arsitektur</option>                   
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                
        </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-dark">Tambah</button>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
            </div>
        </form>


        </div>
    </div>
</div>
