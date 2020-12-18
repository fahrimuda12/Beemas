<?php
include 'config/koneksi.php';
               $tampil = mysqli_query($koneksi, "SELECT COUNT(*) AS total from pengaduan WHERE status ='selesai' ");
               $data = mysqli_fetch_array($tampil);
               $tampil2 = mysqli_query($koneksi, "SELECT COUNT(*) AS total2 from petugas WHERE level='petugas'");
               $data2 = mysqli_fetch_array($tampil2);
               $tampil3 = mysqli_query($koneksi, "SELECT COUNT(*) AS total3 from masyarakat");
               $data3 = mysqli_fetch_array($tampil3);
?>	
<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(assets/images/gambar1.jpeg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center " data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate pl-md-5">
            <h1 class="mb-4">Pelayanan Terbaik <span>Kepentingan Kami</span></h1>
            <h3 class="subheading">Kenyamanan anda adalah yang kami utamakan dalam mengadu</h3>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Request A Quote</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets/images/gambar2.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center" data-scrollax-parent="true">
          <div class="col-md-6 text ftco-animate pl-md-5">
            <h1 class="mb-4">Membangun Negeri<span>Mari BeMas</span></h1>
            <h3 class="subheading">Dengan membuat pengaduan anda sama dengan membantu negara ini menjadi maju</h3>
            <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Request A Quote</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>


    <section class="ftco-services ftco-no-pt">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading">Hubungan</span>
            <h2 class="mb-4">Hubungan Departemen</h2>
          </div>
        </div>
				<div class="row">
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-hook"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Pembangunan</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-skyline"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Tata Kota</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stairs"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Sosial dan Keuangan</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-home"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Pendidikan</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		<section class="ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="30">0</strong>
              </div>
              <div class="text-2">
              	<span>Instansi <br>Terhubung</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="<?php echo $data['total']; ?>">0</strong>
              </div>
              <div class="text-2">
              	<span>Pengaduan <br>Selesai</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="<?php echo $data2['total2']; ?>">0</strong>
              </div>
              <div class="text-2">
              	<span>Pegawai <br>Expert</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="<?php echo $data3['total3']; ?>">0</strong>
              </div>
              <div class="text-2">
              	<span>Pelayanan <br>Senang</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>