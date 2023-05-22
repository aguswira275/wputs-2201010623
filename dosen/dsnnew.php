<main>
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            <div class="col-xl-12">
                <h5 class="card-category">List Dosen</h5>
                <h2 class="card-title">Total Daftar Dosen <b>
                        <?php $stt = mysqli_query($cnn, "SELECT * FROM tbDOSEN");
                        echo mysqli_num_rows($stt); ?></b></h2>
            </div>
        </div>
    </div>
    <div class="card-body mt-4">
        <div class="chart-area h-auto">
            <div class="container konten">
                <form method="POST" action="./datadsn.php">
                    <input type="hidden" name="act" value="store">
                    <div class="form-floating mb-3">
                        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
                        <label for="floatingInput">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txNIP" class="form-control" id="floatingInput" placeholder="NIM">
                        <label for="floatingInput">NIP</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txNOTLP" class="form-control" id="floatingInput" placeholder="Prodi">
                        <label for="floatingInput">NO Telepon</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Tanggal Lahir">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-check ms-4">
                        <input class="form-check-input" type="radio" name="txJK" id="exampleRadios1" value="Laki-laki" required>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check  ms-4">
                        <input class="form-check-input" type="radio" name="txJK" id="exampleRadios2" value="Perempuan" required>
                        <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                        </label>
                    </div>
                    <div class="form-floating mb-3 mt-4">
                        <button type="submit" class="btn btn-primary"> Buat Data Dosen </button>
                        <a href="./datadsn.php" class="btn btn-secondary"> Batal </a>
                    </div>
                </form>
            </div>
            <canvas id="chartBig1"></canvas>
        </div>
    </div>
</main>