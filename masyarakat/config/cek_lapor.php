<?php 
require 'koneksi.php';
session_start();
    // Ambil Data yang Dikirim dari Form
    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $tipe_file = $_FILES['foto']['type'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    // Set path folder tempat menyimpan gambarnya
    $path = "../../images/upload/".$nama_file;

    //set untuk auto incremen
    $id = base_convert(microtime(false), 10, 36);

    //pengambilan data dari session
    $r = $_SESSION['sess_id'];

    //pengambilan data sesuai tanggal terkini
    $tgl=date('Y-m-d');

    if($tipe_file == "image/jpeg" || $tipe_file == "image/png") // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    { 
      
        if($ukuran_file <= 1000000) // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
        { 
              // Proses upload
             if(move_uploaded_file($tmp_file, $path)) // Cek apakah gambar berhasil diupload atau tidak
             { 
                $query= "INSERT INTO pengaduan (id_pengaduan,tgl_pengaduan,kategori,nik,isi_laporan, foto, status)
                VALUES ('$id', '$tgl','$_POST[kategori]','$r', '$_POST[lapor]','$nama_file','0')";    

                $sql = mysqli_query($koneksi, $query);
                if($sql) // Cek jika proses simpan ke database sukses atau tidak
                { 
                    header("location: ../index.php"); // Redirectke halaman index.php
                }
                else
                {
                        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                        echo "<br><a href='form.php'>Kembali Ke Form</a>";
                }
    
              }
        }
        else
        {
                // Jika ukuran file lebih dari 1MB, lakukan :
                echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
                echo "<br><a href='form.php'>Kembali Ke Form</a>";
        }
            
        }
    else
    {
            // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
            echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
            echo "<br><a href='form.php'>Kembali Ke Form</a>";
    }
          
?>