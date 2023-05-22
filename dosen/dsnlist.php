<main>
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            <div class="col-xl-12">
                <h5 class="card-category">List Dosen</h5>
                <h2 class="card-title">Total Daftar Dosen
                    <b>
                        <?php $stt = mysqli_query($cnn, "SELECT * FROM tbDOSEN");
                        echo mysqli_num_rows($stt); ?>
                    </b>
                </h2>
            </div>
        </div>
        <div class="card-body mt-4">
            <div class="chart-area h-auto">
                <div class="container konten">
                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbDOSEN");
                    mysqli_num_rows($stt); ?>
                    <table class="table text-center m-auto">
                        <thead class="border-bottom">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIP</th>
                                <th scope="col">No Telepon</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col"><a href="./datadsn.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM tbDOSEN ORDER BY nama;";
                            $hasil = mysqli_query($cnn, $sql);
                            $cx = 0;
                            while ($h = mysqli_fetch_assoc($hasil)) {
                                $cx++;
                            ?>
                                <tr>
                                    <td scope="row"><?= $cx ?></td>
                                    <td><?= $h["nama"] ?></td>
                                    <td><?= $h["nip"] ?></td>
                                    <td><?= $h["notlp"] ?></td>
                                    <td><?= $h["email"] ?></td>
                                    <td><?= $h["jk"] ?></td>
                                    <td><a href="datadsn.php?aksi=edit&p1=<?= $h["id_dsn"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
                                        <a href="datadsn.php?aksi=del&p1=<?= $h["id_dsn"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <canvas id="chartBig1"></canvas>
            </div>
        </div>
    </div>
</main>