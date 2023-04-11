
<div class="container">
    <h1>Data </h1>
    <div class="row">
        <div class="col-lg-6">

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $data["mhs"]["nama"] ?> </h5>
                    <h6 class="card-subtitle mb-2 text-muted"> <?php echo $data["mhs"]["nim"]?> </h6>
                    <p class="card-text"> <?php echo $data["mhs"]["jurusan"]?> </p>
                    <p class="card-text"> <?php echo $data["mhs"]["email"]?> </p>
                    <a href="<?php echo BASEURL?>/Mahasiswa" class="card-link">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>
