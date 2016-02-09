<?php 
class query_data extends master_controller {
	function query_data(){
		parent::__construct();
		// $this->load->model("core_model","cm");
		$this->load->model("coremodel","cm");
		$this->load->helper("tanggal");
		$this->load->model("cek_model","dm");

	}

	function index(){



		$data_array['controller'] = get_class($this);
		
		$content = $this->load->view($data_array['controller']."_view",$data_array,true);
		
		$this->set_subtitle("QUERY DATA KENDARAAN");
		$this->set_title("QUERY DATA KENDARAAN");
		$this->set_content($content);
		$this->render_baru();
	}

	 
	

function cek_status(){
	$data = $this->input->post();

	$prod_db = $this->load->database('production',true);
	//show_array($data);
	$prod_db->where("NO_RANGKA",$data['no_rangka']);
	$res  = $prod_db->get("V_BPKB_SIFOBAR");

	if($res->num_rows() == 0 ){
		$ret = array("error"=>true,"pesan"=>"DATA TIDAK DITEMUKAN");
	}

	else { 
	$data = $res->row_array(); 

	$data['ALAMAT'] = $data['ALAMAT1']." ".$data['ALAMAT2']." ".$data['ALAMAT3'];
	//show_array($data); 
		$ret = array("error"=>false,"pesan"=>$data);
	}
	echo json_encode($ret);
}



}
?>