<main>
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            <div class="col-xl-12">
                <h5 class="card-category">List User</h5>
                <h2 class="card-title">Total Daftar User <b>
                        <?php $stt = mysqli_query($cnn, "SELECT * FROM tbUSER");
                        echo mysqli_num_rows($stt); ?></b></h2>
            </div>
        </div>
    </div>
    <div class="card-body mt-4">
        <div class="chart-area h-auto">
            <div class="container konten">
                <form method="POST" action="./datauser.php">
                    <input type="hidden" name="act" value="store">
                    <div class="form-floating mb-3">
                        <input type="text" name="txNAMA" class="form-control" id="floatingInput" placeholder="Nama Lengkap">
                        <label for="floatingInput">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="txEMAIL" class="form-control" id="floatingInput" placeholder="Alamat Email">
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="txUSER" class="form-control" id="floatingInput" placeholder="User Name">
                        <label for="floatingInput">User Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="txPASS1" class="form-control" id="floatingInput" placeholder="Password">
                        <label for="floatingInput">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" name="txPASS2" class="form-control" id="floatingInput" placeholder="Verifikasi Password">
                        <label for="floatingInput">Verifikasi Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary"> Buat Data User </button>
                    <a href="datauser.php" class="btn btn-secondary"> Batal </a>
                </form>
            </div>
            <canvas id="chartBig1"></canvas>
        </div>
    </div>
</main>