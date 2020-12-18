<?php
include './config/koneksi.php';
$r = $_SESSION['sess_id'];

               $tampil = mysqli_query($koneksi, "SELECT * from pengaduan WHERE status !='0' ORDER BY tgl_pengaduan DESC LIMIT 5 ");
               $no=1; 
?>		   
<section class="ftco-section bg-light">
   
    <div class="container">
	    <div class="row">
       
        <div class="col-md-1 ftco-animate"></div>
            <div class="col-md-7 ftco-animate">
            <?php if(mysqli_num_rows($tampil)>0){ ?>
        <?php
            $no = 1;    
            while($data = mysqli_fetch_array($tampil)){
                    
        ?>
                <div class="blog-entry ">
                <div class="row">
                        <div class="user-img">
                        <img class="nav-user-photo" src="../assets/images/avatars/avatar2.png" alt="Jason's Photo" />
                        </div>
                        <div class="col-md-8">
                            <h5 class="heading"><?php echo $data['nik']; ?></h5>
                            <span class="text-id">#<?php echo $data['id_pengaduan']; ?></span>
                            <span class="text-status"><?php echo $data['status']; ?></span>
                        </div>
                        <div class="col-md-3">
                        <div class="meta-date text-center p-2">
                        <span class="mos"><?php echo $data['tgl_pengaduan']; ?></span>
                        </div>
                        </div>
                </div>
                <div class="row">
                    <div class="text col-md-11">
                        <p><?php echo $data['isi_laporan']; ?></p>
                    </div>
                </div>
                <div class="row">
                        <div class="d-flex align-items-center mt-4">
                        <?php echo "<p class='mb-0'><a href='#tanggapan' data-toggle='modal' id='custId' data-id=".$data['id_pengaduan']." class='btn btn-primary'>Tanggapan <span class='ion-ios-arrow-round-forward'></span></a></p>";?>
                        </div>
                </div>
                </div>
                <?php  } ?>
            <?php } ?>
            <div class="row no-gutters my-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
            <div class="col-md-4 ftco-animate">
                <div class="sidebar">
                <div class="bar-menu">
                    <div class="heading-bar">    
                          Kategori Populer  
                    </div>
                    <div class="body-bar">
                        <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama Kategori</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbod>
                                <tr>
                                    <td>Administrasi</td>
                                    <?php                   
                                        $tampil = mysqli_query($koneksi, "SELECT COUNT(kategori) AS jumlah FROM pengaduan WHERE kategori ='administrasi'");
                                        $data = mysqli_fetch_array($tampil);
                                        echo "<td> {$data['jumlah']} </td>";
                                    ?>
                                    
                                </tr>
                                <tr>
                                <td>Kesehatan</td>
                                    <?php                   
                                        $tampil = mysqli_query($koneksi, "SELECT COUNT(kategori) AS jumlah FROM pengaduan WHERE kategori ='kesehatan'");
                                        $data = mysqli_fetch_array($tampil);
                                        echo "<td> {$data['jumlah']} </td>";
                                    ?>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
</section>
<!-- Modal -->
<div id="tanggapan" class="modal fade" role="dialog">
  <div class="modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
      <form method="post" action="../config/cek_update.php">
        <div class="fetched-data"></div>
        </form>
			</div>
		</div>
</div>  
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#tanggapan').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'include/detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 