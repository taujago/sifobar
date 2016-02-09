<?php 
$userdata = $this->session->userdata("userdata");
?>
<script>
var daft_id = false;
$(document).ready(function(){
 
 $("#fuckyouform").submit(function(){

 		$('#myPleaseWait').modal('show');

		$.ajax({
				url : '<?php echo site_url("$controller/cek_status"); ?>',
				dataType:'json',
				beforeSend : function(){
					 
					$("#benar").show();
					$("#message2").html('Sedang diproses. Harap menunggu...');
				},
				// complete : function(){
				// 	$("#benar").hide();
				// },
				type : 'post',
				data : $(this).serialize(),
				success : function(obj) {
					$('#myPleaseWait').modal('hide');
					 if(obj.error==true){

							$("#benar").hide('fast');
						 	$("#salah").show('fast');
							$("#message").html('Data tidak ditemukan');
							$("#data_detail").hide('fast');
							 
					 }
					 else {
							

					 	$("#benar").show();
						$("#message2").html('Data ditemukan');

							$("#data_detail").show('fast');


						 	$("#benar").show('fast');
						 	$("#salah").hide('fast');
							$("#message2").html(obj.pesan.message);

							$("#NoRangka").html(obj.pesan.NO_RANGKA);
							$("#ThnBuat").html(obj.pesan.THN_BUAT);
							$("#Nama").html(obj.pesan.NAMA_PEMILIK1);
							$("#Alamat").html(obj.pesan.ALAMAT);

							$("#Merk").html(obj.pesan.MERK_NAMA);
							$("#Tipe").html(obj.pesan.TIPE);
							$("#ThnBuat").html(obj.pesan.THN_RAKIT);
							$("#NoBpkb").html(obj.pesan.NO_BPKB);
							$("#TglBpkb").html(obj.pesan.TGL_BPKB);
							$("#NoPolisi").html(obj.pesan.NO_POLISI);

							$("#NoMesin").html(obj.pesan.NO_MESIN);
							$("#NoFaktur").html(obj.pesan.NO_FAKTUR);
							$("#TglFaktur").html(obj.pesan.TGL_FAKTUR);
							 
							// if(obj.data.Status == "AKTIF" ) {
							// 	$("#Status").css( "color", "green" );
							// }
							// else {
							// 	$("#Status").css( "color", "red" );
							// }
							 
						}
				}
			});
			
			return false;
		});
		
		
});





</script>