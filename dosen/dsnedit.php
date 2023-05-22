<main>
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            <div class="col-xl-12">
                <h5 class="card-category">List User</h5>
                <h2 class="card-title">Total Daftar Dosen <b>
                        <?php $stt = mysqli_query($cnn, "SELECT * FROM tbDOSEN");
                        echo mysqli_num_rows($stt); ?></b></h2>
            </div>
        </div>
    </div>
    <div class="card-body mt-4">
        <div class="chart-area h-auto">
            <div class="container konten">
                <?php
                $id_dsn = $_GET["p1"];
                $sql = "SELECT * FROM tbDOSEN tu WHERE id_dsn='$id_dsn';";
                $hasil = mysqli_query($cnn, $sql);
                if (mysqli_num_rows($hasil) > 0) {
                    $h = mysqli_fetch_assoc($hasil);
                ?>
                    <h3>Ubah Data User <?= $h["nama"] ?></h3>
                    <form method="POST" action="./datadsn.php">
                        <input type="hidden" name="act" value="update">
                        <input type="hidden" name="id_dsn" value="<?= $id_mhs ?>">
                        <div class="form-floating mb-3">
                            <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap" value="<?= $h["nama"] ?>">
                            <label for="floatingInput">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="txNIP" class="form-control" id="floatingInput" placeholder="NIM" value="<?= $h["nip"] ?>">
                            <label for="floatingInput">NIP</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="txNOTLP" class="form-control" id="floatingInput" placeholder="Prodi" value="<?= $h["notlp"] ?>">
                            <label for="floatingInput">No Telepon</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" value="<?= $h["email"] ?>">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-check ms-4">
                            <input class="form-check-input" type="radio" name="txJK" id="floatingInput" value="Laki-laki" value="<?php if ($h['jk'] == 'Laki-laki') echo 'checked'; ?>">
                            <label class="form-check-label" for="floatingInput" checked>
                                Laki - Laki
                            </label>
                        </div>
                        <div class="form-check  ms-4">
                            <input class="form-check-input" type="radio" name="txJK" id="floatingInput" value="Perempuan" value="<?php if ($h['jk'] == 'Perempuan') echo 'checked'; ?>">
                            <label class="form-check-label" for="floatingInput">
                                Perempuan
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            &nbsp;
                        </div>
                        <button type="submit" class="btn btn-primary"> Ubah Data Dosen </button>
                        <a href="./datadsn.php" class="btn btn-secondary"> Batal </a>
                    </form>
            </div>
            <canvas id="chartBig1"></canvas>
        </div>
    </div>
</main>
<?php
                } else {
                    echo "<script>window.location.href='./datamhs.php';</script>";
                }
?>