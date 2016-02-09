<link href="<?php echo base_url("assets") ?>/css/datepicker.css" rel="stylesheet">
<link href="<?php echo base_url("assets") ?>/css/jquery.dataTables.css" rel="stylesheet">

<script src="<?php echo base_url("assets") ?>/js/bootstrap-datepicker.js"></script>

<script src="<?php echo base_url("assets") ?>/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("assets") ?>/js/jquery.loadJSON.js"></script>
<link href="<?php echo base_url("assets") ?>/css/eblokir.css" rel="stylesheet">

<style>
#Status {
	font-weight:bold;
}
</style>


<div class="row">
  <div id="salah" class="col-lg-12" style="display:none">
            <div class="alert alert-danger" role="alert" id="message">
            	
            </div>
        </div>
    </div>
    
  <div class="row">
  <div id="benar" class="col-lg-12" style="display:none">
            <div class="alert alert-success" role="alert" id="message2">
            	
            </div>
        </div>
    </div> 

<div class="row">
<div class="col-md-12">
		<div class="panel panel-default">
            <div class="panel-heading">QUERY DATA KENDARAAN</div>
            <div class="panel-body">
            
            	
                <form class="form-inline" id="fuckyouform">
                      
<div class="form-group">
<?php 
	//echo form_dropdown("jenis",$jenis,'','class="form-control"');				   
?>  
                       
                      </div>                      
<div class="form-group">
                         
                        <input type="text" class="form-control"  
                        id="no_rangka" placeholder="NOMOR RANGKA"
                        name="no_rangka">
                      </div>
                     
                      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Query </button>
                      
              </form>
                <hr />
                
<div id="data_detail">                
           
             
         
          <table width="80%" border="0" cellpadding="3">
          <tr>
                    <td width="35%">NOMOR RANGKA</td>
                    <td width="1%">:</td>
                    <td width="64%"><span id="NoRangka"></span></td>
                  </tr>
                  <!-- <tr>
                    <td>STATUS BPKB</td>
                    <td>:</td>
                    <td></td>
                  </tr>-->
                 <!-- <tr>
                    <td>NOMOR BPKB</td>
                    <td>:</td>
                    <td><span id="NoRangka"></span></td>
                  </tr>-->
                  <tr>
                    <td>NOMOR MESIN</td>
                    <td>:</td>
                    <td><span id="NoMesin"></span></td>
                  </tr>
                  <tr>
                    <td>NOMOR FAKTUR</td>
                    <td>:</td>
                    <td><span id="NoFaktur"></span></td>
                  </tr>
                  <tr>
                    <td>TANGGAL FAKTUR</td>
                    <td>:</td>
                    <td><span id="TglFaktur"></span></td>
                  </tr>
                  <tr>
                    <td>NAMA</td>
                    <td>:</td>
                    <td><span id="Nama"></span></td>
                  </tr>
                  <tr>
                    <td>ALAMAT </td>
                    <td>:</td>
                    <td><span id="Alamat"></span></td>
                  </tr>
                  <tr>
                    <td>MERK</td>
                    <td>:</td>
                    <td><span id="Merk"></span></td>
                  </tr>
                  <tr>
                    <td>TIPE KENDARAAN</td>
                    <td>:</td>
                    <td><span id="Tipe"></span></td>
                  </tr>
                  <tr>
                    <td>TAHUN PEMBUATAN</td>
                    <td>:</td>
                    <td><span id="ThnBuat"></span></td>
                  </tr>
                  <tr>
                    <td>NOMOR BPKB</td>
                    <td>:</td>
                    <td><span id="NoBpkb"></span></td>
                  </tr>
                  <tr>
                    <td>TANGGAL BPKB</td>
                    <td>:</td>
                    <td><span id="TglBpkb"></span></td>
                  </tr>
                  <tr>
                    <td>NOMOR POLISI</td>
                    <td>:</td>
                    <td><span id="NoPolisi"></span></td>
                  </tr>
              </table>
              
              </div>
            </div>
        </div>
</div>

</div>







<?php $this->load->view($controller."_view_js") ?>
