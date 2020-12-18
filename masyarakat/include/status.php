<?php
include './config/koneksi.php';
$r = $_SESSION['sess_id'];

               $tampil = mysqli_query($koneksi, "SELECT * from pengaduan WHERE nik =$r");
               $no=1; 
?>		

    <section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
              <?php echo $r ?>
                <tr>
                  <th>No</th>
                  <th>Id</th>
                  <th>Tanggal</th>
                  <th>NIK</th>
                  <th>Kategori</th>
                  <th>Isi</th>
                  <th>Bukti</th>
                  <th>status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
                <?php if(mysqli_num_rows($tampil)>0){ ?>
          <?php
              $no = 1;
              
              while($data = mysqli_fetch_array($tampil)){
                
          ?>
              <tbody>
                <tr>
                
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['id_pengaduan']; ?></td>
                  <td><?php echo $data['tgl_pengaduan']; ?></td>
                  <td><?php echo $data['nik']; ?></td>
                  <td><?php echo $data['kategori']; ?></td>
                  <td><?php echo $data['isi_laporan']; ?></td>
                  <td><?php echo $data['foto']; ?></td>
                  <td><?php echo $data['status']; ?></td>
                  <?php echo "<td><a href='#tanggapan' data-toggle='modal' class='btn btn-info' id='custId' data-id=".$data['id_pengaduan'].">Lihat Tanggapan</a></td>";?>
                </tr>
              </tbody>
              <?php $no++; } ?>
        <?php } ?>

            </table>
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
 