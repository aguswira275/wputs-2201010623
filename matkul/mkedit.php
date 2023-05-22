<main>
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            <div class="col-xl-12">
                <h5 class="card-category">List MataKuliah</h5>
                <h2 class="card-title">Total Daftar MataKuliah <b>
                        <?php $stt = mysqli_query($cnn, "SELECT * FROM tbMATKUL");
                        echo mysqli_num_rows($stt); ?></b></h2>
            </div>
        </div>
    </div>
    <div class="card-body mt-4">
        <div class="chart-area h-auto">
            <div class="container konten">
                <?php
                $id_mk = $_GET["p1"];
                $sql = "SELECT * FROM tbMATKUL tu WHERE id_mk='$id_mk';";
                $hasil = mysqli_query($cnn, $sql);
                if (mysqli_num_rows($hasil) > 0) {
                    $h = mysqli_fetch_assoc($hasil);
                ?>
                    <h3>Ubah Data User <?= $h["nama"] ?></h3>
                    <form method="POST" action="./datamk.php">
                        <input type="hidden" name="act" value="update">
                        <input type="hidden" name="id_mk" value="<?= $id_mk ?>">
                        <div class="form-floating mb-3">
                            <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?= $h["nama"] ?>">
                            <label for="floatingInput">Nama MataKuliah</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="txSKS" class="form-control" id="floatingInput" placeholder="NIM" value="<?= $h["sks"] ?>">
                            <label for="floatingInput">SKS</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="txSEMESTER" class="form-control" id="floatingInput" placeholder="Prodi" value="<?= $h["semester"] ?>">
                            <label for="floatingInput">Semester</label>
                        </div>
                        <div class="form-floating mb-3">
                            &nbsp;
                        </div>
                        <button type="submit" class="btn btn-primary"> Ubah Data MataKuliah </button>
                        <a href="./datamhs.php" class="btn btn-secondary"> Batal </a>
                    </form>
            </div>
            <canvas id="chartBig1"></canvas>
        </div>
    </div>
</main>
<?php
                } else {
                    echo "<script>window.location.href='./datamk.php';</script>";
                }
?>