<?php 
	include "koneksi.php";
	if(isset($_GET['act']))
	{
		if($_GET['act']=="create")
		{
			//cek apakah data dikirimkan dari form atau tidak
			if(isset($_POST['f_submit']) AND $_POST['f_submit'])
			{
				//debug hasil submit dari form
				//print_r($_POST);
				$nama = $_POST['f_nama'];
				$email = $_POST['f_email'];
				$telp = $_POST['f_telp'];
				$alamat = $_POST['f_alamat'];
				$jk = $_POST['f_jk'];
				$agama = $_POST['f_agama'];
				//looping array hobi
				$hobi = $_POST['f_hobi'];
				$hobinya = "";
				if(count($hobi) > 0)
				{
					foreach($hobi as $v_hobi)
					{
						$hobinya .= $v_hobi .",";
					}
					$hobinya = substr($hobinya, 0, -1);
				}
				//upload foto
				if($_FILES['f_foto']['size'] > 0) //cek apakah ada file yang akan diupload atau tidak
				{
					//jika ada
					
					$foto = $_FILES['f_foto']['name']; //mengambil nama gambar yang akan diupload
					@copy($_FILES['f_foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] ."/webku/upload/". $foto); //memindahkan file yang telah diupload pada folder yang diinginkan, secara default file akan diulad ada temporary
				}
				else
				{
					//jika tidak ada
					$foto = null;
				}
				$nama = $_POST['f_nama'];
				$email = $_POST['f_email'];
				$telp = $_POST['f_telp'];
				$alamat = $_POST['f_alamat'];
				$jk = $_POST['f_jk'];
				$agama = $_POST['f_agama'];
				//looping array hobi
				$hobi = $_POST['f_hobi'];
				$hobinya = "";
				if(count($hobi) > 0)
				{
					foreach($hobi as $v_hobi)
					{
						$hobinya .= $v_hobi .",";
					}
					$hobinya = substr($hobinya, 0, -1);
				}
				//upload foto
				if($_FILES['f_foto']['size'] > 0) //cek apakah ada file yang akan diupload atau tidak
				{
					//jika ada
					
					$foto = $_FILES['f_foto']['name']; //mengambil nama gambar yang akan diupload
					@copy($_FILES['f_foto']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] ."/webku/upload/". $foto); //memindahkan file yang telah diupload pada folder yang diinginkan, secara default file akan diulad ada temporary
				}
				else
				{
					//jika tidak ada
					$foto = null;
				}
				//echo $nama ." - ". $email ." - ". $telp ." - ". $alamat ." - ". $jk ." - ". $agama ." - ". $hobinya ." - ". $foto;
				
				//eksekusi perintah untuk menyimpan data ke table biodata dengan perintah query
				$QUERY = "INSERT INTO biodata (nama,email,no_telp,alamat,jenis_kelamin,hobi,agama,foto) VALUES ('$nama', '$email', '$telp', '$alamat', '$jk', '$hobinya', '$agama', '$foto')"; 
				//tidak perlu menambahkan id karena id telah di AUTO_INCREMENT (bertambah secara auto)
				//cek perintah query pada phpmyadmin
				echo $QUERY; //tampilkan perintah query
				mysql_query($QUERY);
			}
			else
			{
				header("location:biodata.php");
			}
		}
	}
	else
	{
		//create form add
		include "add-biodata.html";
	}
	
?>