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
                <form method="POST" action="./datamk.php">
                    <input type="hidden" name="act" value="store">
                    <div class="form-floating mb-3">
                        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama MataKuliah">
                        <label for="floatingInput">Nama MataKuliah</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txSKS" class="form-control" id="floatingInput" placeholder="NIM">
                        <label for="floatingInput">SKS</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txSEMESTER" class="form-control" id="floatingInput" placeholder="Prodi">
                        <label for="floatingInput">Semester</label>
                    </div>
                    <div class="form-floating mb-3 mt-4">
                        <button type="submit" class="btn btn-primary"> Buat Data MataKuliah </button>
                        <a href="./datamk.php" class="btn btn-secondary"> Batal </a>
                    </div>
                </form>
            </div>
            <canvas id="chartBig1"></canvas>
        </div>
    </div>
</main>