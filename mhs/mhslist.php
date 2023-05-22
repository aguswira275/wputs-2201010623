<main>
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            <div class="col-xl-12">
                <h5 class="card-category">List Mahasiswa</h5>
                <h2 class="card-title">Total Daftar Mahasiswa
                    <b>
                        <?php $stt = mysqli_query($cnn, "SELECT * FROM tbMHS");
                        echo mysqli_num_rows($stt); ?>
                    </b>
                </h2>
            </div>
        </div>
        <div class="card-body mt-4">
            <div class="chart-area h-auto">
                <div class="container konten">
                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbMHS");
                    mysqli_num_rows($stt); ?>
                    <table class="table text-center m-auto">
                        <thead class="border-bottom">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Prodi</th>
                                <th scope="col">Tangal Lahir</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col"><a href="./datamhs.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM tbMHS ORDER BY nama;";
                            $hasil = mysqli_query($cnn, $sql);
                            $cx = 0;
                            while ($h = mysqli_fetch_assoc($hasil)) {
                                $cx++;
                            ?>
                                <tr>
                                    <td scope="row"><?= $cx ?></td>
                                    <td><?= $h["nama"] ?></td>
                                    <td><?= $h["nim"] ?></td>
                                    <td><?= $h["prodi"] ?></td>
                                    <td><?= $h["tgl_lahir"] ?></td>
                                    <td><?= $h["jk"] ?></td>
                                    <td><a href="datamhs.php?aksi=edit&p1=<?= $h["id_mhs"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
                                        <a href="datamhs.php?aksi=del&p1=<?= $h["id_mhs"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>
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