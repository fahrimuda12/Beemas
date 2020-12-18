<?php
session_start();
include '../config/koneksi.php';
    if($_POST['rowid']) {
        $id = $_POST['rowid'];
        // mengambil data berdasarkan id
        $sql = mysqli_query($koneksi,"SELECT * FROM pengaduan AS u INNER JOIN tanggapan AS i ON u.id_pengaduan = i.id_pengaduan WHERE u.id_pengaduan = '$id'");
        if(mysqli_num_rows($sql)>0){
            while($data=mysqli_fetch_array($sql)): ?>
                	<!-- heading modal -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tanggapan</h4>
				</div>
				<!-- body modal -->
				<div class="modal-body">
                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id_pengaduan'] ?>"/>  
                    <p><?php echo $data['tanggapan'] ?> </p>
        
				</div>
				<!-- footer modal -->
				<div class="modal-footer">
                <button type="submit" onclick="printDiv('print')" class="btn btn-success pull-right"><i class="fa fa-print"></i> Selesai
                </button>
				</div>
      
            <?php 
            endwhile; 
        }
        else{
           
            echo "
            <script type='text/javascript'>
            alert('Maaf belum ada tanggapan');
            window.location=''
            </script>";
        }
    }
?>