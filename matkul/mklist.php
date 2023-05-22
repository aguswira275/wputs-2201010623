<main>
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            <div class="col-xl-12">
                <h5 class="card-category">List MataKuliah</h5>
                <h2 class="card-title">Total Daftar MataKuliah
                    <b>
                        <?php $stt = mysqli_query($cnn, "SELECT * FROM tbMATKUL");
                        echo mysqli_num_rows($stt); ?>
                    </b>
                </h2>
            </div>
        </div>
        <div class="card-body mt-4">
            <div class="chart-area h-auto">
                <div class="container konten">
                    <?php $stt = mysqli_query($cnn, "SELECT * FROM tbMATKUL");
                    mysqli_num_rows($stt); ?>
                    <table class="table text-center m-auto">
                        <thead class="border-bottom">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama MataKuliah</th>
                                <th scope="col">SKS</th>
                                <th scope="col">Semester</th>
                                <th scope="col"><a href="./datamk.php?aksi=new" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i>&nbsp;Tambah</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM tbMATKUL ORDER BY nama;";
                            $hasil = mysqli_query($cnn, $sql);
                            $cx = 0;
                            while ($h = mysqli_fetch_assoc($hasil)) {
                                $cx++;
                            ?>
                                <tr>
                                    <td scope="row"><?= $cx ?></td>
                                    <td><?= $h["nama"] ?></td>
                                    <td><?= $h["sks"] ?></td>
                                    <td><?= $h["semester"] ?></td>
                                    <td><a href="datamk.php?aksi=edit&p1=<?= $h["id_mk"] ?>" class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>&nbsp;Edit</a>
                                        <a href="datamk.php?aksi=del&p1=<?= $h["id_mk"] ?>" class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i>&nbsp;Del</a>
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