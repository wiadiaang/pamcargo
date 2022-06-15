$(document).ready(function(event){

	var protocol = location.protocol;
	var slashes = protocol.concat("//");
	var host = slashes.concat(window.location.hostname) + '/mono';

	function signIn(){

		var signIn = $(".signIn"),
			contents = signIn.serialize();
		/* 	Simpan nilai dari setiap elemen INPUT berdasarkan 'type' pada
			elemen FORM dengan class signIn ke variabel contents. */

		$.ajax({

			type: "post",
			url: "system/process/signIn.php",
			data: contents,
			success: function(data){
			/*	Jika ajax berhasil, maka nilai dari signIn.php akan
				disimpan di parameter data. */

				if(data == 1){

					window.location = host + "/pages/edit.general.php";
					//	Berhasil, arahkan ke halaman general.

				} else if(data == 0){

					$('.info span').html("Your ID was not found.");
					$('.info').addClass('showFLex');
					//	Username dan kata sandi tidak ditemukan.

				} else if(data == 2){

					$('.info span').html("Form username and password can not be empty.");
					//	Nilai $_POST username dan password kosong.

				} else if(data == 3){

					$('.info span').html("Failed to record your access code.");
					//	Gagal menyimpan kode access ke basis data.

				}

			}

		});

	}

	$(".signIn").keypress(function(e){
	//	Tombol enter ditekan saat fokus berada di elemen FORM.

		if(e.keyCode == 13){
		//	13 adalah ASCII untuk tombol enter.

			signIn();
			//	Jalankan function signIn.

			return false;
			//	Cegah berpindah halaman.

		}

	});

	$(".signIn").on('submit', function(){
	//	Tombol submit pada elemen FORM ditekan.

		signIn();
		//	Jalankan function signIn.

		return false;
		//	Cegah berpindah halaman.

	});

	$(".closeInfo").click(function(){
	//	Tombol element dengan class closeInfo ditekan.

		$('.info').removeClass('showFLex');
		//	Hapus class showFlex.

		return false;

	});

});
