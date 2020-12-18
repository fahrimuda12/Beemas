<br />
<br />
<section class="ftco-section ftco-margin-top">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="request-quote">
    					<div class="bg-primary py-4">
    						<span class="subheading">Mulai lah dengan lapor</span>
    						<h3>Buat Laporan</h3>
    					</div>
    					<form action="config/cek_lapor.php" class="request-form ftco-animate"method="post" enctype="multipart/form-data">
						<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control" name="kategori">
                      	<option value="">Pilih Kategori</option>
						<option value="administrasi">Administrasi</option>
						<option value="badan usaha milik desa">Badan Usaha Milik Desa</option>
						<option value="sarana dan prasarana">Sarana dan Prasarana</option>
						<option value="infrastruktur pembangunan">Infrastruktur Pembangunan</option>
						<option value="organisasi">Organisasi</option>
						<option value="pendidikan">Pendidikan</option>
						<option value="ekonomi">Ekonomi</option>
						<option value="pelayanan masyarakat">Pelayanan Masyarakat</option>
						<option value="kesehatan">Kesehatan</option>
						<option value="kependudukan">Kependudukan</option>
                      </select>
                      </div>
		            </div>
		    				</div>
		    				<div class="form-group">
		    					<input type="text" class="form-control" readonly value="<?php echo $_SESSION['sess_id']; ?>">
		    				</div>
		    				<div class="form-group">
		    					<textarea type="text" class="form-control" placeholder="Isi Laporan" rows="7" name="lapor"></textarea>
		    				</div>
	    					
	    					<div class="form-group">
		    					<input type="file" class="form-control" placeholder="Phone"  name="foto">
		    				</div>
	    					
		            <div class="form-group">
		              <input type="submit" value="Lapor" class="btn btn-primary py-3 px-4">
		            </div>
		    			</form>
    				</div>
    			</div>

    			<div class="col-md-8 wrap-about py-5 ftco-animate">
	          <div class="heading-section mb-5">
	            <h2 class="mb-4">Kami Sangat Membantu Menyampaikan Aspirasi Anda</h2>
	          </div>
	          <div class="">
							<p class="mb-5">Di sini kami telah banyak bekerja sama dengan departemen departemen pemerintahan sehingga laporan anda sangat mudah sampai ke pada mereka dengan aman dan jujur</p>
						</div>
					</div>
    		</div>
    	</div>
    </section>
