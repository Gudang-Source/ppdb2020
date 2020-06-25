<table id="dtBasicExample" class="table table-striped table-bordered table-hover">
                        <tr>
                            <th class="th-sm">No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Tempat Tanggal Lahir</th>
                            <th>No Telp</th>
                            <th>Email</th>
                            <th>Asal Sekolah</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                        <?php 
                        include_once ("koneksi.php");
                        $cari = $_GET['nama'];
                            $no = 1;
                            
                                $result = mysqli_query($conn,"SELECT * FROM datasiswa WHERE nama LIKE '%".$cari."%'");
                            
                            
                            while($datasiswa=mysqli_fetch_assoc($result)){
                         ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $datasiswa ['nisn'] ?> </td>
                            <td><?php echo $datasiswa ['nama'] ?></td>
                            <td><?php echo $datasiswa ['tempatLahir']; echo ',';echo $datasiswa ['tanggalLahir']; ?></td>
                            <td><?php echo $datasiswa ['noTelp'] ?></td>
                            <td><?php echo $datasiswa ['email'] ?></td>
                            <td><?php echo $datasiswa ['asalSekolah'] ?></td>
                            <td><?php echo $datasiswa ['jurusan'] ?></td>
                            <td><button class="btn btn-default btn-danger btn-xs">  <a href="hapusDataSiswa.php?nisn=<?= $datasiswa['nisn']?>" style="text-decoration: none; color: #fff;" onclick="return confirm('Apakah yakin data akan dihapus?')"><i class="fa fa-trash-o"></i>Hapus</a> </center></button> 
                                <button class="btn btn-default btn-warning btn-xs">  <a href="editProfil.php?nisn=<?= $datasiswa['nisn']?>" style="text-decoration: none; color: #fff;"><i class="fa fa-edit"></i>Edit</a> </center></button> </td>
                            
                        </tr>
                    <?php } ?>


                    </table>