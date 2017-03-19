<?php
class Kemasan_Controller extends Controller{
	private $error;
	private $success;

	private $kd_dok;
	private $kd_tps;
	private $nm_angkut;
	private $no_voy_flight;
	private $call_sign;
	private $tgl_tiba;
	private $kd_gudang;
	private $ref_number;

	private $no_bl_awb;
	private $tgl_bl_awb;
	private $no_master_bl_awb;
	private $tgl_master_bl_awb;
	private $id_consignee;
	private $consignee;
	private $bruto;
	private $no_bc11;
	private $tgl_bc11;
	private $no_pos_bc11;
	private $cont_asal;
	private $seri_kemas;
	private $kd_kemas;
	private $jml_kemas;
	private $kd_timbun;
	private $kd_dok_inout;
	private $no_dok_inout;
	private $tgl_dok_inout;
	private $wk_inout;
	private $kd_sar_angkut_inout;
	private $no_pol;
	private $pel_muat;
	private $pel_transit;
	private $pel_bongkar;
	private $gudang_tujuan;
	private $kode_kantor;
	private $no_daftar_pabean;
	private $tgl_daftar_pabean;
	private $no_segel_bc;
	private $tgl_segel_bc;
	private $no_ijin_tps;
	private $tgl_ijin_tps;

	public function __construct() {
		parent::__construct();

		$header = new View();
		$header->Assign('app_title',APP_TITLE);
		$header->Assign('brand',APP_NAME);
		$header->Assign('user',getLoggedUser('fullname'));
		$this->Assign('header',$header->Render('header',false));

		$footer = new View();
		$this->Assign('footer',$header->Render('footer',false));

		$this->Load_Model('kemasan');

		/* Header Zone */
	        $this->kd_dok = isset($_POST['kd_dok'])&&$_POST['kd_dok']!==''?$_POST['kd_dok']:'';
	        $this->kd_tps = isset($_POST['kd_tps'])&&$_POST['kd_tps']!==''?$_POST['kd_tps']:'TBEX';
	        $this->nm_angkut = isset($_POST['nm_angkut'])&&$_POST['nm_angkut']!==''?$_POST['nm_angkut']:'';
	        $this->no_voy_flight = isset($_POST['no_voy_flight'])&&$_POST['no_voy_flight']!==''?$_POST['no_voy_flight']:'';
	        $this->call_sign = isset($_POST['call_sign'])&&$_POST['call_sign']!==''?$_POST['call_sign']:'';
	        $this->tgl_tiba = isset($_POST['tgl_tiba'])&&$_POST['tgl_tiba']!==''?$_POST['tgl_tiba']:'';
	        $this->kd_gudang = isset($_POST['kd_gudang'])&&$_POST['kd_gudang']!==''?$_POST['kd_gudang']:'TA12';
	        $this->ref_number = isset($_POST['ref_number'])&&$_POST['ref_number']!==''?$_POST['ref_number']:'';
        /* End of Header Zone */

		/* Detail Zone */
			$this->no_bl_awb = isset($_POST['no_bl_awb'])&&$_POST['no_bl_awb']!==''?$_POST['no_bl_awb']:'';
			$this->tgl_bl_awb = isset($_POST['tgl_bl_awb'])&&$_POST['tgl_bl_awb']!==''?$_POST['tgl_bl_awb']:'';
			$this->no_master_bl_awb = isset($_POST['no_master_bl_awb'])&&$_POST['no_master_bl_awb']!==''?$_POST['no_master_bl_awb']:'';
			$this->tgl_master_bl_awb = isset($_POST['tgl_master_bl_awb'])&&$_POST['tgl_master_bl_awb']!==''?$_POST['tgl_master_bl_awb']:'';
			$this->id_consignee = isset($_POST['id_consignee'])&&$_POST['id_consignee']!==''?$_POST['id_consignee']:'';
			$this->consignee = isset($_POST['consignee'])&&$_POST['consignee']!==''?$_POST['consignee']:'';
			$this->bruto = isset($_POST['bruto'])&&$_POST['bruto']!==''?$_POST['bruto']:'';
			$this->no_bc11 = isset($_POST['no_bc11'])&&$_POST['no_bc11']!==''?$_POST['no_bc11']:'';
			$this->tgl_bc11 = isset($_POST['tgl_bc11'])&&$_POST['tgl_bc11']!==''?$_POST['tgl_bc11']:'';
			$this->no_pos_bc11 = isset($_POST['no_pos_bc11'])&&$_POST['no_pos_bc11']!==''?$_POST['no_pos_bc11']:'';
			$this->cont_asal = isset($_POST['cont_asal'])&&$_POST['cont_asal']!==''?$_POST['cont_asal']:'';
			$this->seri_kemas = isset($_POST['seri_kemas'])&&$_POST['seri_kemas']!==''?$_POST['seri_kemas']:'';
			$this->kd_kemas = isset($_POST['kd_kemas'])&&$_POST['kd_kemas']!==''?$_POST['kd_kemas']:'';
			$this->jml_kemas = isset($_POST['jml_kemas'])&&$_POST['jml_kemas']!==''?$_POST['jml_kemas']:'';
			$this->kd_timbun = isset($_POST['kd_timbun'])&&$_POST['kd_timbun']!==''?$_POST['kd_timbun']:'';
			$this->kd_dok_inout = isset($_POST['kd_dok_inout'])&&$_POST['kd_dok_inout']!==''?$_POST['kd_dok_inout']:'';
			$this->no_dok_inout = isset($_POST['no_dok_inout'])&&$_POST['no_dok_inout']!==''?$_POST['no_dok_inout']:'';
			$this->tgl_dok_inout = isset($_POST['tgl_dok_inout'])&&$_POST['tgl_dok_inout']!==''?$_POST['tgl_dok_inout']:'';
			$this->wk_inout = isset($_POST['wk_inout'])&&$_POST['wk_inout']!==''?$_POST['wk_inout']:'';
			$this->kd_sar_angkut_inout = isset($_POST['kd_sar_angkut_inout'])&&$_POST['kd_sar_angkut_inout']!==''?$_POST['kd_sar_angkut_inout']:'';
			$this->no_pol = isset($_POST['no_pol'])&&$_POST['no_pol']!==''?$_POST['no_pol']:'';
			$this->pel_muat = isset($_POST['pel_muat'])&&$_POST['pel_muat']!==''?$_POST['pel_muat']:'';
			$this->pel_transit = isset($_POST['pel_transit'])&&$_POST['pel_transit']!==''?$_POST['pel_transit']:'';
			$this->pel_bongkar = isset($_POST['pel_bongkar'])&&$_POST['pel_bongkar']!==''?$_POST['pel_bongkar']:'';
			$this->gudang_tujuan = isset($_POST['gudang_tujuan'])&&$_POST['gudang_tujuan']!==''?$_POST['gudang_tujuan']:'';
			$this->kode_kantor = isset($_POST['kode_kantor'])&&$_POST['kode_kantor']!==''?$_POST['kode_kantor']:'';
			$this->no_daftar_pabean = isset($_POST['no_daftar_pabean'])&&$_POST['no_daftar_pabean']!==''?$_POST['no_daftar_pabean']:'';
			$this->tgl_daftar_pabean = isset($_POST['tgl_daftar_pabean'])&&$_POST['tgl_daftar_pabean']!==''?$_POST['tgl_daftar_pabean']:'';
			$this->no_segel_bc = isset($_POST['no_segel_bc'])&&$_POST['no_segel_bc']!==''?$_POST['no_segel_bc']:'';
			$this->tgl_segel_bc = isset($_POST['tgl_segel_bc'])&&$_POST['tgl_segel_bc']!==''?$_POST['tgl_segel_bc']:'';
			$this->no_ijin_tps = isset($_POST['no_ijin_tps'])&&$_POST['no_ijin_tps']!==''?$_POST['no_ijin_tps']:'';
			$this->tgl_ijin_tps = isset($_POST['tgl_ijin_tps'])&&$_POST['tgl_ijin_tps']!==''?$_POST['tgl_ijin_tps']:'';
		/* End of Detail Zone */
	}

/*	public function index() {
		logs('Masuk index Controller');
		// if(!checkSession()){
		// 	logs('Session tidak ditemukan');
		// 	redirect(SITE_ROOT,'auth/login');
		// }
		if(isset($_SESSION['path'])&&($_SESSION['path']!=='')){
			redirect(SITE_ROOT,$_SESSION['path']);
		}
		$this->Load_View('kemasan');
	}*/

	// Barang Masuk

	public function masuk(){
		$this->Load_View('barang_masuk');
		$this->view->Assign('error',$this->error);
		$this->view->Assign('success',$this->success);

		/* Header Zone */
	    $this->view->Assign('kd_dok',$this->kd_dok);
	    $this->view->Assign('kd_tps',$this->kd_tps);
	    $this->view->Assign('nm_angkut',$this->nm_angkut);
	    $this->view->Assign('no_voy_flight',$this->no_voy_flight);
	    $this->view->Assign('call_sign',$this->call_sign);
	    $this->view->Assign('tgl_tiba',$this->tgl_tiba);
	    $this->view->Assign('kd_gudang',$this->kd_gudang);
	    $this->view->Assign('ref_number',$this->ref_number);
        /* End of Header Zone */

		/* Detail Zone */
		$this->view->Assign('no_bl_awb',$this->no_bl_awb);
		$this->view->Assign('tgl_bl_awb',$this->tgl_bl_awb);
		$this->view->Assign('no_master_bl_awb',$this->no_master_bl_awb);
		$this->view->Assign('tgl_master_bl_awb',$this->tgl_master_bl_awb);
		$this->view->Assign('id_consignee',$this->id_consignee);
		$this->view->Assign('consignee',$this->consignee);
		$this->view->Assign('bruto',$this->bruto);
		$this->view->Assign('no_bc11',$this->no_bc11);
		$this->view->Assign('tgl_bc11',$this->tgl_bc11);
		$this->view->Assign('no_pos_bc11',$this->no_pos_bc11);
		$this->view->Assign('cont_asal',$this->cont_asal);
		$this->view->Assign('seri_kemas',$this->seri_kemas);
		$this->view->Assign('kd_kemas',$this->kd_kemas);
		$this->view->Assign('jml_kemas',$this->jml_kemas);
		$this->view->Assign('kd_timbun',$this->kd_timbun);
		$this->view->Assign('kd_dok_inout',$this->kd_dok_inout);
		$this->view->Assign('no_dok_inout',$this->no_dok_inout);
		$this->view->Assign('tgl_dok_inout',$this->tgl_dok_inout);
		$this->view->Assign('wk_inout',$this->wk_inout);
		$this->view->Assign('kd_sar_angkut_inout',$this->kd_sar_angkut_inout);
		$this->view->Assign('no_pol',$this->no_pol);
		$this->view->Assign('pel_muat',$this->pel_muat);
		$this->view->Assign('pel_transit',$this->pel_transit);
		$this->view->Assign('pel_bongkar',$this->pel_bongkar);
		$this->view->Assign('gudang_tujuan',$this->gudang_tujuan);
		$this->view->Assign('kode_kantor',$this->kode_kantor);
		$this->view->Assign('no_daftar_pabean',$this->no_daftar_pabean);
		$this->view->Assign('tgl_daftar_pabean',$this->tgl_daftar_pabean);
		$this->view->Assign('no_segel_bc',$this->no_segel_bc);
		$this->view->Assign('tgl_segel_bc',$this->tgl_segel_bc);
		$this->view->Assign('no_ijin_tps',$this->no_ijin_tps);
		$this->view->Assign('tgl_ijin_tps',$this->tgl_ijin_tps);

		/* End of Detail Zone */

	}

	public function masukSave(){
		/* Validation */
		
		$this->error = "";
		/* End of Validation */

		if(isset($_POST)&&!empty($_POST)){
		$header = [
	        'kd_dok' => $this->kd_dok,
	        'kd_tps' => $this->kd_tps,
	        'nm_angkut' => $this->nm_angkut,
	        'no_voy_flight' => $this->no_voy_flight,
	        'call_sign' => $this->call_sign,
	        'tgl_tiba' => date("Y-m-d",strtotime($this->tgl_tiba)),
	        'kd_gudang' => $this->kd_gudang,
	        'ref_number' => $this->ref_number,
	        ];

	    $detail = [
	        'ref_num' => $this->ref_number,
			'no_bl_awb' => $this->no_bl_awb,
			'tgl_bl_awb' => date("Y-m-d",strtotime($this->tgl_bl_awb)),
			'no_master_bl_awb' => $this->no_master_bl_awb,
			'tgl_master_bl_awb' => date("Y-m-d",strtotime($this->tgl_master_bl_awb)),
			'id_consignee' => $this->id_consignee,
			'consignee' => $this->consignee,
			'bruto' => $this->bruto,
			'no_bc11' => $this->no_bc11,
			'tgl_bc11' => date("Y-m-d",strtotime($this->tgl_bc11)),
			'no_pos_bc11' => $this->no_pos_bc11,
			'cont_asal' => $this->cont_asal,
			'seri_kemas' => $this->seri_kemas,
			'kd_kemas' => $this->kd_kemas,
			'jml_kemas' => $this->jml_kemas,
			'kd_timbun' => $this->kd_timbun,
			'kd_dok_inout' => $this->kd_dok_inout,
			'no_dok_inout' => $this->no_dok_inout,
			'tgl_dok_inout' => date("Y-m-d",strtotime($this->tgl_dok_inout)),
			'wk_inout' => $this->wk_inout,
			'kd_sar_angkut_inout' => $this->kd_sar_angkut_inout,
			'no_pol' => $this->no_pol,
			'pel_muat' => $this->pel_muat,
			'pel_transit' => $this->pel_transit,
			'pel_bongkar' => $this->pel_bongkar,
			'gudang_tujuan' => $this->gudang_tujuan,
			'kode_kantor' => $this->kode_kantor,
			'no_daftar_pabean' => $this->no_daftar_pabean,
			'tgl_daftar_pabean' => date("Y-m-d",strtotime($this->tgl_daftar_pabean)),
			'no_segel_bc' => $this->no_segel_bc,
			'tgl_segel_bc' => $this->tgl_segel_bc,																						
			'no_ijin_tps' => $this->no_ijin_tps,
			'tgl_ijin_tps' => date("Y-m-d",strtotime($this->tgl_ijin_tps)),
			'sent' => '0',			//flag untuk status pengiriman data report
			'respon' => '',			//flag untuk respon pengiriman terakhir
			];
		}

		$resaddheader = $this->model->addHeaderMasuk($header);
		$resadddetail = $this->model->addDetailMasuk($detail);
		logs('Barang Masuk...');
		logs('Proses add header:'.$resaddheader);
		logs('Proses add detail:'.$resadddetail);
		$this->masuk();
	}

	public function view($refnum,$type){
		$state = '';
		// switch ($type) {
		// 	case 'masuk':
		// 		$state_h = '5';
		// 		$state_d = '0';
		// 		break;
		// 	case 'masukview':
		// 		$state_h = '5';
		// 		$state_d = '1';
		// 		break;
		// 	case 'keluar':
		// 		$state_h = '6';
		// 		$state_d = '2';
		// 		break;
		// 	case 'keluarview':
		// 		$state_h = '6';
		// 		$state_d = '3';
		// 		break;
		// 	case 'komplit':
		// 		$state_h = '6';
		// 		$state_d = '5';
		// 		break;
		// }

		switch ($type) {
					case 'masuk':
						$sql_h = "SELECT * FROM header_m WHERE ref_number = '$refnum'"; 
						$sql_d = "SELECT * FROM detail_m WHERE ref_num = '$refnum'"; 
						break;
					case 'keluar':
						$sql_h = "SELECT * FROM header_k WHERE ref_number = '$refnum'"; 
						$sql_d = "SELECT * FROM detail_k WHERE ref_num = '$refnum'"; 
						break;
					
					// default:
					// 	# code...
					// 	break;
				}		
		$dheader = $this->model->exec($sql_h);

		if(count($dheader)==0){
			$this->error = "Data header tidak ditemukan";
			return $this->daftar();
		} else if(count($dheader)>1){
			$this->error = "Data duplikasi";
			return $this->daftar();			
		}

		$ddetail = $this->model->exec($sql_d);

		if(count($ddetail)==0){
			$this->error = "Data detail barang masuk tidak ditemukan";
			return $this->daftar();
		} else if(count($ddetail)>1){
			$this->error = "Data duplikasi, gunakan yang pertama";
			return $this->daftar();	
		}

		$this->Load_View('barang_detail');
		$this->view->Assign('error',$this->error);
		$this->view->Assign('success',$this->success);

		/* Header Zone */
	    $this->view->Assign('kd_dok',$dheader[0]->kd_dok);
	    $this->view->Assign('kd_tps',$dheader[0]->kd_tps);
	    $this->view->Assign('nm_angkut',$dheader[0]->nm_angkut);
	    $this->view->Assign('no_voy_flight',$dheader[0]->no_voy_flight);
	    $this->view->Assign('call_sign',$dheader[0]->call_sign);
	    $this->view->Assign('tgl_tiba',$dheader[0]->tgl_tiba);
	    $this->view->Assign('kd_gudang',$dheader[0]->kd_gudang);
	    $this->view->Assign('ref_number',$dheader[0]->ref_number);
        /* End of Header Zone */

		/* Detail Zone */
		$this->view->Assign('no_bl_awb',$ddetail[0]->no_bl_awb);
		$this->view->Assign('tgl_bl_awb',$ddetail[0]->tgl_bl_awb);
		$this->view->Assign('no_master_bl_awb',$ddetail[0]->no_master_bl_awb);
		$this->view->Assign('tgl_master_bl_awb',$ddetail[0]->tgl_master_bl_awb);
		$this->view->Assign('id_consignee',$ddetail[0]->id_consignee);
		$this->view->Assign('consignee',$ddetail[0]->consignee);
		$this->view->Assign('bruto',$ddetail[0]->bruto);
		$this->view->Assign('no_bc11',$ddetail[0]->no_bc11);
		$this->view->Assign('tgl_bc11',$ddetail[0]->tgl_bc11);
		$this->view->Assign('no_pos_bc11',$ddetail[0]->no_pos_bc11);
		$this->view->Assign('cont_asal',$ddetail[0]->cont_asal);
		$this->view->Assign('seri_kemas',$ddetail[0]->seri_kemas);
		$this->view->Assign('kd_kemas',$ddetail[0]->kd_kemas);
		$this->view->Assign('jml_kemas',$ddetail[0]->jml_kemas);
		$this->view->Assign('kd_timbun',$ddetail[0]->kd_timbun);

		$this->view->Assign('kd_dok_inout',$ddetail[0]->kd_dok_inout);
		$this->view->Assign('no_dok_inout',$ddetail[0]->no_dok_inout);
		$this->view->Assign('tgl_dok_inout',$ddetail[0]->tgl_dok_inout);
		$this->view->Assign('wk_inout',$ddetail[0]->wk_inout);
		$this->view->Assign('kd_sar_angkut_inout',$ddetail[0]->kd_sar_angkut_inout);
		$this->view->Assign('no_pol',$ddetail[0]->no_pol);
		$this->view->Assign('pel_muat',$ddetail[0]->pel_muat);
		$this->view->Assign('pel_transit',$ddetail[0]->pel_transit);
		$this->view->Assign('pel_bongkar',$ddetail[0]->pel_bongkar);
		$this->view->Assign('gudang_tujuan',$ddetail[0]->gudang_tujuan);
		$this->view->Assign('kode_kantor',$ddetail[0]->kode_kantor);
		$this->view->Assign('no_daftar_pabean',$ddetail[0]->no_daftar_pabean);
		$this->view->Assign('tgl_daftar_pabean',$ddetail[0]->tgl_daftar_pabean);
		$this->view->Assign('no_segel_bc',$ddetail[0]->no_segel_bc);
		$this->view->Assign('tgl_segel_bc',$ddetail[0]->tgl_segel_bc);
		$this->view->Assign('no_ijin_tps',$ddetail[0]->no_ijin_tps);
		$this->view->Assign('tgl_ijin_tps',$ddetail[0]->tgl_ijin_tps);

	}
	// Barang Keluar

	public function cari(){
		$this->Load_View('cari');
		if(isset($_POST)&&$_POST['s_refnum']){
			$refnum = $_POST['s_refnum'];
			
			$tmp = [];
			$datas = [];
			$datas = $this->model->exec("SELECT * FROM header_m WHERE ref_number LIKE '%$refnum%'");
			if($datas){
				foreach($datas as $d){
					$tmp['masuk'] = $d;
					$output[$d->ref_number][] = $tmp;
				}
			}
			
			$tmp = [];
			$datas = [];
			$datas = $this->model->exec("SELECT * FROM header_k WHERE ref_number LIKE '%$refnum%'");
			if($datas){
				foreach($datas as $d){
					$tmp['keluar'] = $d;
					$output[$d->ref_number][] = $tmp;
				}
			}
			$this->view->Assign('datas',$output);
		}
	}

	public function keluar(){
		if(isset($_POST['s_refnum'])&&$_POST['s_refnum']!==''){
			$refnum = $_POST['s_refnum'];
			$dheader = $this->model->exec("SELECT * FROM header_m WHERE ref_number = '$refnum' LIMIT 1");

			if(count($dheader)>0){
				$ddetail = $this->model->exec("SELECT * FROM detail_m WHERE ref_num = '$refnum' LIMIT 1");
			} else {
				$dheader = $this->model->exec("SELECT * FROM header_k WHERE ref_number = '$refnum' LIMIT 1");
				if(count($dheader)>0){
					$ddetail = $this->model->exec("SELECT * FROM detail_k WHERE ref_num = '$refnum' LIMIT 1");
				}
			}

			if(count($dheader)==0){
				$this->error = "Data header barang masuk tidak ditemukan";
			}

			if(count($ddetail)==0){
				$this->error = "Data detail barang masuk tidak ditemukan";
			}
		}
		if($this->error==''){
			$this->Load_View('barang_keluar');

			$this->view->Assign('error',$this->error);
			$this->view->Assign('success',$this->success);

			/* Header Zone */
		    $this->view->Assign('kd_dok',$dheader[0]->kd_dok);
		    $this->view->Assign('kd_tps',$dheader[0]->kd_tps);
		    $this->view->Assign('nm_angkut',$dheader[0]->nm_angkut);
		    $this->view->Assign('no_voy_flight',$dheader[0]->no_voy_flight);
		    $this->view->Assign('call_sign',$dheader[0]->call_sign);
		    $this->view->Assign('tgl_tiba',$dheader[0]->tgl_tiba);
		    $this->view->Assign('kd_gudang',$dheader[0]->kd_gudang);
		    $this->view->Assign('ref_number',$dheader[0]->ref_number);
	        /* End of Header Zone */

			/* Detail Zone */
			$this->view->Assign('no_bl_awb',$ddetail[0]->no_bl_awb);
			$this->view->Assign('tgl_bl_awb',$ddetail[0]->tgl_bl_awb);
			$this->view->Assign('no_master_bl_awb',$ddetail[0]->no_master_bl_awb);
			$this->view->Assign('tgl_master_bl_awb',$ddetail[0]->tgl_master_bl_awb);
			$this->view->Assign('id_consignee',$ddetail[0]->id_consignee);
			$this->view->Assign('consignee',$ddetail[0]->consignee);
			$this->view->Assign('bruto',$ddetail[0]->bruto);
			$this->view->Assign('no_bc11',$ddetail[0]->no_bc11);
			$this->view->Assign('tgl_bc11',$ddetail[0]->tgl_bc11);
			$this->view->Assign('no_pos_bc11',$ddetail[0]->no_pos_bc11);
			$this->view->Assign('cont_asal',$ddetail[0]->cont_asal);
			$this->view->Assign('seri_kemas',$ddetail[0]->seri_kemas);
			$this->view->Assign('kd_kemas',$ddetail[0]->kd_kemas);
			$this->view->Assign('jml_kemas',$ddetail[0]->jml_kemas);
			$this->view->Assign('kd_timbun',$ddetail[0]->kd_timbun);
			/*Detail Zone Barang Keluar*/
			$this->view->Assign('kd_dok_inout',$this->kd_dok_inout);
			$this->view->Assign('no_dok_inout',$this->no_dok_inout);
			$this->view->Assign('tgl_dok_inout',$this->tgl_dok_inout);
			$this->view->Assign('wk_inout',$this->wk_inout);
			$this->view->Assign('kd_sar_angkut_inout',$this->kd_sar_angkut_inout);
			$this->view->Assign('no_pol',$this->no_pol);
			$this->view->Assign('pel_muat',$this->pel_muat);
			$this->view->Assign('pel_transit',$this->pel_transit);
			$this->view->Assign('pel_bongkar',$this->pel_bongkar);
			$this->view->Assign('gudang_tujuan',$this->gudang_tujuan);
			$this->view->Assign('kode_kantor',$this->kode_kantor);
			$this->view->Assign('no_daftar_pabean',$this->no_daftar_pabean);
			$this->view->Assign('tgl_daftar_pabean',$this->tgl_daftar_pabean);
			$this->view->Assign('no_segel_bc',$this->no_segel_bc);
			$this->view->Assign('tgl_segel_bc',$this->tgl_segel_bc);
			$this->view->Assign('no_ijin_tps',$this->no_ijin_tps);
			$this->view->Assign('tgl_ijin_tps',$this->tgl_ijin_tps);
		} else {
			$this->Load_View('barang_keluar_blank');

			/* Header Zone */
		    $this->view->Assign('kd_dok',$this->kd_dok);
		    $this->view->Assign('kd_tps',$this->kd_tps);
		    $this->view->Assign('nm_angkut',$this->nm_angkut);
		    $this->view->Assign('no_voy_flight',$this->no_voy_flight);
		    $this->view->Assign('call_sign',$this->call_sign);
		    $this->view->Assign('tgl_tiba',$this->tgl_tiba);
		    $this->view->Assign('kd_gudang',$this->kd_gudang);
		    $this->view->Assign('ref_number',$this->ref_number);
	        /* End of Header Zone */

			/* Detail Zone */
			$this->view->Assign('no_bl_awb',$this->no_bl_awb);
			$this->view->Assign('tgl_bl_awb',$this->tgl_bl_awb);
			$this->view->Assign('no_master_bl_awb',$this->no_master_bl_awb);
			$this->view->Assign('tgl_master_bl_awb',$this->tgl_master_bl_awb);
			$this->view->Assign('id_consignee',$this->id_consignee);
			$this->view->Assign('consignee',$this->consignee);
			$this->view->Assign('bruto',$this->bruto);
			$this->view->Assign('no_bc11',$this->no_bc11);
			$this->view->Assign('tgl_bc11',$this->tgl_bc11);
			$this->view->Assign('no_pos_bc11',$this->no_pos_bc11);
			$this->view->Assign('cont_asal',$this->cont_asal);
			$this->view->Assign('seri_kemas',$this->seri_kemas);
			$this->view->Assign('kd_kemas',$this->kd_kemas);
			$this->view->Assign('jml_kemas',$this->jml_kemas);
			$this->view->Assign('kd_timbun',$this->kd_timbun);
			$this->view->Assign('kd_dok_inout',$this->kd_dok_inout);
			$this->view->Assign('no_dok_inout',$this->no_dok_inout);
			$this->view->Assign('tgl_dok_inout',$this->tgl_dok_inout);
			$this->view->Assign('wk_inout',$this->wk_inout);
			$this->view->Assign('kd_sar_angkut_inout',$this->kd_sar_angkut_inout);
			$this->view->Assign('no_pol',$this->no_pol);
			$this->view->Assign('pel_muat',$this->pel_muat);
			$this->view->Assign('pel_transit',$this->pel_transit);
			$this->view->Assign('pel_bongkar',$this->pel_bongkar);
			$this->view->Assign('gudang_tujuan',$this->gudang_tujuan);
			$this->view->Assign('kode_kantor',$this->kode_kantor);
			$this->view->Assign('no_daftar_pabean',$this->no_daftar_pabean);
			$this->view->Assign('tgl_daftar_pabean',$this->tgl_daftar_pabean);
			$this->view->Assign('no_segel_bc',$this->no_segel_bc);
			$this->view->Assign('tgl_segel_bc',$this->tgl_segel_bc);
			$this->view->Assign('no_ijin_tps',$this->no_ijin_tps);
			$this->view->Assign('tgl_ijin_tps',$this->tgl_ijin_tps);

				/* End of Detail Zone */
		}

	}

	// public function keluar($refnum){
	// 	$dheader = $this->model->exec("SELECT * FROM header_m WHERE ref_number = '$refnum'");

	// 	if(count($dheader)==0){
	// 		$this->error = "Data header tidak ditemukan";
	// 		return $this->daftar();
	// 	} else if(count($dheader)>1){
	// 		$this->error = "Data duplikasi";
	// 		return $this->daftar();			
	// 	}

	// 	$ddetail = $this->model->exec("SELECT * FROM detail WHERE ref_num = '$refnum' AND sent = '1'");

	// 	if(count($ddetail)==0){
	// 		$this->error = "Data detail barang masuk tidak ditemukan";
	// 		return $this->daftar();
	// 	} else if(count($ddetail)>1){
	// 		$this->error = "Data duplikasi, gunakan yang pertama";
	// 		return $this->daftar();	
	// 	}


	// 	$this->Load_View('barang_keluar');
	// 	$this->view->Assign('error',$this->error);
	// 	$this->view->Assign('success',$this->success);

	// 	/* Header Zone */
	//     $this->view->Assign('kd_dok',$dheader[0]->kd_dok);
	//     $this->view->Assign('kd_tps',$dheader[0]->kd_tps);
	//     $this->view->Assign('nm_angkut',$dheader[0]->nm_angkut);
	//     $this->view->Assign('no_voy_flight',$dheader[0]->no_voy_flight);
	//     $this->view->Assign('call_sign',$dheader[0]->call_sign);
	//     $this->view->Assign('tgl_tiba',$dheader[0]->tgl_tiba);
	//     $this->view->Assign('kd_gudang',$dheader[0]->kd_gudang);
	//     $this->view->Assign('ref_number',$dheader[0]->ref_number);
 //        /* End of Header Zone */

	// 	/* Detail Zone */
	// 	$this->view->Assign('no_bl_awb',$ddetail[0]->no_bl_awb);
	// 	$this->view->Assign('tgl_bl_awb',$ddetail[0]->tgl_bl_awb);
	// 	$this->view->Assign('no_master_bl_awb',$ddetail[0]->no_master_bl_awb);
	// 	$this->view->Assign('tgl_master_bl_awb',$ddetail[0]->tgl_master_bl_awb);
	// 	$this->view->Assign('id_consignee',$ddetail[0]->id_consignee);
	// 	$this->view->Assign('consignee',$ddetail[0]->consignee);
	// 	$this->view->Assign('bruto',$ddetail[0]->bruto);
	// 	$this->view->Assign('no_bc11',$ddetail[0]->no_bc11);
	// 	$this->view->Assign('tgl_bc11',$ddetail[0]->tgl_bc11);
	// 	$this->view->Assign('no_pos_bc11',$ddetail[0]->no_pos_bc11);
	// 	$this->view->Assign('cont_asal',$ddetail[0]->cont_asal);
	// 	$this->view->Assign('seri_kemas',$ddetail[0]->seri_kemas);
	// 	$this->view->Assign('kd_kemas',$ddetail[0]->kd_kemas);
	// 	$this->view->Assign('jml_kemas',$ddetail[0]->jml_kemas);
	// 	$this->view->Assign('kd_timbun',$ddetail[0]->kd_timbun);
	// 	/*Detail Zone Barang Keluar*/
	// 	$this->view->Assign('kd_dok_inout',$this->kd_dok_inout);
	// 	$this->view->Assign('no_dok_inout',$this->no_dok_inout);
	// 	$this->view->Assign('tgl_dok_inout',$this->tgl_dok_inout);
	// 	$this->view->Assign('wk_inout',$this->wk_inout);
	// 	$this->view->Assign('kd_sar_angkut_inout',$this->kd_sar_angkut_inout);
	// 	$this->view->Assign('no_pol',$this->no_pol);
	// 	$this->view->Assign('pel_muat',$this->pel_muat);
	// 	$this->view->Assign('pel_transit',$this->pel_transit);
	// 	$this->view->Assign('pel_bongkar',$this->pel_bongkar);
	// 	$this->view->Assign('gudang_tujuan',$this->gudang_tujuan);
	// 	$this->view->Assign('kode_kantor',$this->kode_kantor);
	// 	$this->view->Assign('no_daftar_pabean',$this->no_daftar_pabean);
	// 	$this->view->Assign('tgl_daftar_pabean',$this->tgl_daftar_pabean);
	// 	$this->view->Assign('no_segel_bc',$this->no_segel_bc);
	// 	$this->view->Assign('tgl_segel_bc',$this->tgl_segel_bc);
	// 	$this->view->Assign('no_ijin_tps',$this->no_ijin_tps);
	// 	$this->view->Assign('tgl_ijin_tps',$this->tgl_ijin_tps);

	// }

	public function keluarSave(){
		// $refnum = $_POST['refnum'];
		// $dheader = $this->model->exec("SELECT * FROM header WHERE ref_number = '$refnum' AND kd_dok = '6'");
		
		// if(count($dheader)==0){
		// 	$this->error = "Data header tidak ditemukan";
		// 	return $this->daftar();
		// } else if(count($dheader)>1){
		// 	$this->error = "Data duplikasi";
		// 	return $this->daftar();			
		// }

		// $ddetail = $this->model->exec("SELECT * FROM detail WHERE ref_num = '$refnum' AND sent = '1'");

		// if(count($ddetail)==0){
		// 	$this->error = "Data detail barang masuk tidak ditemukan";
		// 	return $this->daftar();
		// } else if(count($ddetail)>1){
		// 	$this->error = "Data duplikasi, gunakan yang pertama";
		// 	return $this->daftar();	
		// }

	 //    $dh['kd_dok'] = $dheader[0]->kd_dok;
	 //    $dh['kd_tps'] = $dheader[0]->kd_tps;
	 //    $dh['nm_angkut'] = $dheader[0]->nm_angkut;
	 //    $dh['no_voy_flight'] = $dheader[0]->no_voy_flight;
	 //    $dh['call_sign'] = $dheader[0]->call_sign;
	 //    $dh['tgl_tiba'] = $dheader[0]->tgl_tiba;
	 //    $dh['kd_gudang'] = $dheader[0]->kd_gudang;
	 //    $dh['ref_number'] = $dheader[0]->ref_number;

  //       /* End of Header Zone */

		// /* Detail Zone */
	 //    $dd['ref_num'] = $refnum;
		// $dd['no_bl_awb'] = $ddetail[0]->no_bl_awb;
		// $dd['tgl_bl_awb'] = $ddetail[0]->tgl_bl_awb;
		// $dd['no_master_bl_awb'] = $ddetail[0]->no_master_bl_awb;
		// $dd['tgl_master_bl_awb'] = $ddetail[0]->tgl_master_bl_awb;
		// $dd['id_consignee'] = $ddetail[0]->id_consignee;
		// $dd['consignee'] = $ddetail[0]->consignee;
		// $dd['bruto'] = $ddetail[0]->bruto;
		// $dd['no_bc11'] = $ddetail[0]->no_bc11;
		// $dd['tgl_bc11'] = $ddetail[0]->tgl_bc11;
		// $dd['no_pos_bc11'] = $ddetail[0]->no_pos_bc11;
		// $dd['cont_asal'] = $ddetail[0]->cont_asal;
		// $dd['seri_kemas'] = $ddetail[0]->seri_kemas;
		// $dd['kd_kemas'] = $ddetail[0]->kd_kemas;
		// $dd['jml_kemas'] = $ddetail[0]->jml_kemas;
		// $dd['kd_timbun'] = $ddetail[0]->kd_timbun;
		// /*Detail Zone Barang Keluar*/
		// $dd['kd_dok_inout'] = $this->kd_dok_inout;
		// $dd['no_dok_inout'] = $this->no_dok_inout;
		// $dd['tgl_dok_inout'] = $this->tgl_dok_inout;
		// $dd['wk_inout'] = $this->wk_inout;
		// $dd['kd_sar_angkut_inout'] = $this->kd_sar_angkut_inout;
		// $dd['no_pol'] = $this->no_pol;
		// $dd['pel_muat'] = $this->pel_muat;
		// $dd['pel_transit'] = $this->pel_transit;
		// $dd['pel_bongkar'] = $this->pel_bongkar;
		// $dd['gudang_tujuan'] = $this->gudang_tujuan;
		// $dd['kode_kantor'] = $this->kode_kantor;
		// $dd['no_daftar_pabean'] = $this->no_daftar_pabean;
		// $dd['tgl_daftar_pabean'] = $this->tgl_daftar_pabean;
		// $dd['no_segel_bc'] = $this->no_segel_bc;
		// $dd['tgl_segel_bc'] = $this->tgl_segel_bc;
		// $dd['no_ijin_tps'] = $this->no_ijin_tps;
		// $dd['tgl_ijin_tps'] = $this->tgl_ijin_tps;

		// $dd['sent'] = '2';

		if(isset($_POST)&&!empty($_POST)){
		$header = [
	        'kd_dok' => $this->kd_dok,
	        'kd_tps' => $this->kd_tps,
	        'nm_angkut' => $this->nm_angkut,
	        'no_voy_flight' => $this->no_voy_flight,
	        'call_sign' => $this->call_sign,
	        'tgl_tiba' => date("Y-m-d",strtotime($this->tgl_tiba)),
	        'kd_gudang' => $this->kd_gudang,
	        'ref_number' => $this->ref_number,
	        ];

	    $detail = [
	        'ref_num' => $this->ref_number,
			'no_bl_awb' => $this->no_bl_awb,
			'tgl_bl_awb' => date("Y-m-d",strtotime($this->tgl_bl_awb)),
			'no_master_bl_awb' => $this->no_master_bl_awb,
			'tgl_master_bl_awb' => date("Y-m-d",strtotime($this->tgl_master_bl_awb)),
			'id_consignee' => $this->id_consignee,
			'consignee' => $this->consignee,
			'bruto' => $this->bruto,
			'no_bc11' => $this->no_bc11,
			'tgl_bc11' => date("Y-m-d",strtotime($this->tgl_bc11)),
			'no_pos_bc11' => $this->no_pos_bc11,
			'cont_asal' => $this->cont_asal,
			'seri_kemas' => $this->seri_kemas,
			'kd_kemas' => $this->kd_kemas,
			'jml_kemas' => $this->jml_kemas,
			'kd_timbun' => $this->kd_timbun,
			'kd_dok_inout' => $this->kd_dok_inout,
			'no_dok_inout' => $this->no_dok_inout,
			'tgl_dok_inout' => date("Y-m-d",strtotime($this->tgl_dok_inout)),
			'wk_inout' => $this->wk_inout,
			'kd_sar_angkut_inout' => $this->kd_sar_angkut_inout,
			'no_pol' => $this->no_pol,
			'pel_muat' => $this->pel_muat,
			'pel_transit' => $this->pel_transit,
			'pel_bongkar' => $this->pel_bongkar,
			'gudang_tujuan' => $this->gudang_tujuan,
			'kode_kantor' => $this->kode_kantor,
			'no_daftar_pabean' => $this->no_daftar_pabean,
			'tgl_daftar_pabean' => date("Y-m-d",strtotime($this->tgl_daftar_pabean)),
			'no_segel_bc' => $this->no_segel_bc,
			'tgl_segel_bc' => $this->tgl_segel_bc,																						
			'no_ijin_tps' => $this->no_ijin_tps,
			'tgl_ijin_tps' => date("Y-m-d",strtotime($this->tgl_ijin_tps)),
			'sent' => '0',			//flag untuk status pengiriman data report
			'respon' => '',			//flag untuk respon pengiriman terakhir
			];
		}



		$this->model->addHeaderKeluar($header);
		$this->model->addDetailKeluar($detail);
		// $this->model->exec("UPDATE header SET kd_dok = '$this->kd_dok' WHERE ref_number = '$refnum'");
		// $this->model->exec("UPDATE detail SET sent = '5', respon = '$respon' WHERE sent = '1' AND ref_num = '$refnum'");

		$message = $this->error==''?'Data Barang Keluar Disimpan':$this->error;
		redirect(SITE_ROOT,'kemasan/keluar',$message);
	}

	public function daftar(){
		$this->Load_View('daftar_report');
		$this->view->Assign('error',$this->error);
		$this->view->Assign('success',$this->success);

		$tmp = [];
		$datas = [];
		$datas = $this->model->exec("SELECT * FROM header_m WHERE ref_number LIKE '%$refnum%'");
		if($datas){
			foreach($datas as $d){
				$tmp['masuk'] = $d;
				$output[$d->ref_number][] = $tmp;
			}
		}
		
		$tmp = [];
		$datas = [];
		$datas = $this->model->exec("SELECT * FROM header_k WHERE ref_number LIKE '%$refnum%'");
		if($datas){
			foreach($datas as $d){
				$tmp['keluar'] = $d;
				$output[$d->ref_number][] = $tmp;
			}
		}
		$this->view->Assign('datas',$output);

/*		$page = isset($_POST['page']);
		$header = new View();
		$header->Assign('app_title',APP_TITLE);
		$header->Assign('brand',APP_NAME);
		$header->Assign('user',getLoggedUser('fullname'));
		$this->Assign('header',$header->Render('header',false));

		$footer = new View();
		$this->Assign('footer',$header->Render('footer',false));

		$dheader = $this->model->getAll($page);
		foreach($dheader->data as $h){
			$ddetail = $this->model->getDetail($h->ref_number,$type);
			foreach ($ddetail->data as $d) {
				$datas[] = (Object)[
			        'kd_dok' => $h->kd_dok,
			        'kd_tps' => $h->kd_tps,
			        'nm_angkut' => $h->nm_angkut,
			        'no_voy_flight' => $h->no_voy_flight,
			        'call_sign' => $h->call_sign,
			        'tgl_tiba' => date("Y/m/d",strtotime($h->tgl_tiba)),
			        'kd_gudang' => $h->kd_gudang,
			        'ref_number' => $h->ref_number,

					'no_bl_awb' => $d->no_bl_awb,
					'tgl_bl_awb' => date("Y/m/d",strtotime($d->tgl_bl_awb)),
					'no_master_bl_awb' => $d->no_master_bl_awb,
					'tgl_master_bl_awb' => date("Y-m-d",strtotime($d->tgl_master_bl_awb)),
					'id_consignee' => $d->id_consignee,
					'consignee' => $d->consignee,
					'bruto' => $d->bruto,
					'no_bc11' => $d->no_bc11,
					'tgl_bc11' => date("Y-m-d",strtotime($d->tgl_bc11)),
					'no_pos_bc11' => $d->no_pos_bc11,
					'cont_asal' => $d->cont_asal,
					'seri_kemas' => $d->seri_kemas,
					'kd_kemas' => $d->kd_kemas,
					'jml_kemas' => $d->jml_kemas,
					'kd_timbun' => $d->kd_timbun,
					'kd_dok_inout' => $d->kd_dok_inout,
					'no_dok_inout' => $d->no_dok_inout,
					'tgl_dok_inout' => date("Y-m-d",strtotime($d->tgl_dok_inout)),
					'wk_inout' => $d->wk_inout,
					'kd_sar_angkut_inout' => $d->kd_sar_angkut_inout,
					'no_pol' => $d->no_pol,
					'pel_muat' => $d->pel_muat,
					'pel_transit' => $d->pel_transit,
					'pel_bongkar' => $d->pel_bongkar,
					'gudang_tujuan' => $d->gudang_tujuan,
					'kode_kantor' => $d->kode_kantor,
					'no_daftar_pabean' => $d->no_daftar_pabean,
					'tgl_daftar_pabean' => date("Y-m-d",strtotime($d->tgl_daftar_pabean)),
					'no_segel_bc' => $d->no_segel_bc,
					'tgl_segel_bc' => $d->tgl_segel_bc,
					'no_ijin_tps' => $d->no_ijin_tps,
					'tgl_ijin_tps' => date("Y-m-d",strtotime($d->tgl_ijin_tps)),
					'sent' => $d->sent,		//flag untuk status pengiriman data report,
					'respon' => $d->respon,
				];
			}
		}

		// var_dump($datas);
		// $datas[] = (Object)[
		// 				'id' => 'data1',
		// 				'state' => '0'
		// 			];
		// $datas[] = (Object)[
		// 				'id'	=> 'data2',
		// 				'state' => '3'
		// 			];
		$this->Load_View('daftar_report');
		$this->view->Assign('error',$this->error);
		$this->view->Assign('success',$this->success);

		$this->view->Assign('datas',$datas);
*/
	}

	public function send($refnum,$type){
		$konfirm=isset($_GET['konfirm'])?true:false;
		logs('Send Data:'.$refnum);
		$dh = [];
		$dd = [];
		
		// switch ($type) {
		// 	case 'masuk':
		// 		$state = '0';
		// 		break;
		// 	case 'keluar':
		// 		$state = '2';
		// 		break;
		// }

		switch ($type) {
					case 'masuk':
						$sql_h = "SELECT * FROM header_m WHERE ref_number = '$refnum'"; 
						$sql_d = "SELECT * FROM detail_m WHERE ref_num = '$refnum'"; 
						break;
					case 'keluar':
						$sql_h = "SELECT * FROM header_k WHERE ref_number = '$refnum'"; 
						$sql_d = "SELECT * FROM detail_k WHERE ref_num = '$refnum'"; 
						break;
				}

		$dheader = $this->model->exec($sql_h);

		if(count($dheader)==0){
			$this->error = "Data header tidak ditemukan";
			return $this->daftar();
		} else if(count($dheader)>1){
			$this->error = "Data duplikasi";
			return $this->daftar();			
		}

		$dh['KD_DOK'] = $dheader[0]->kd_dok;
		$dh['KD_TPS'] = $dheader[0]->kd_tps;
		$dh['NM_ANGKUT'] = $dheader[0]->nm_angkut;
		$dh['NO_VOY_FLIGHT'] = $dheader[0]->no_voy_flight;
		$dh['CALL_SIGN'] = $dheader[0]->call_sign;
		$dh['TGL_TIBA'] = date('Ymd',strtotime($dheader[0]->tgl_tiba));
		$dh['KD_GUDANG'] = $dheader[0]->kd_gudang;
		$dh['REF_NUMBER'] = $dheader[0]->ref_number;

		$ddetail = $this->model->exec($sql_d);

		if(count($ddetail)==0){
			$this->error = "Data detail tidak ditemukan";
			return $this->daftar();
		} else if(count($ddetail)>1){
			$this->error = "Data duplikasi";
			return $this->daftar();	
		}

		$dd['NO_BL_AWB'] = $ddetail[0]->no_bl_awb;
		$dd['TGL_BL_AWB'] = date('Ymd',strtotime($ddetail[0]->tgl_bl_awb));
		$dd['NO_MASTER_BL_AWB'] = $ddetail[0]->no_master_bl_awb;
		$dd['TGL_MASTER_BL_AWB'] = date('Ymd',strtotime($ddetail[0]->tgl_master_bl_awb));
		$dd['ID_CONSIGNEE'] = $ddetail[0]->id_consignee;
		$dd['CONSIGNEE'] = $ddetail[0]->consignee;
		$dd['BRUTO'] = $ddetail[0]->bruto;
		$dd['NO_BC11'] = $ddetail[0]->no_bc11;
		$dd['TGL_BC11'] = date('Ymd',strtotime($ddetail[0]->tgl_bc11));
		$dd['NO_POS_BC11'] = $ddetail[0]->no_pos_bc11;
		$dd['CONT_ASAL'] = $ddetail[0]->cont_asal?$ddetail[0]->cont_asal:'';
		$dd['SERI_KEMAS'] = $ddetail[0]->seri_kemas;
		$dd['KD_KEMAS'] = $ddetail[0]->kd_kemas;
		$dd['JML_KEMAS'] = $ddetail[0]->jml_kemas;
		$dd['KD_TIMBUN'] = $ddetail[0]->kd_timbun;

		if($type == 'masuk'){
			$dd['KD_DOK_INOUT'] = $ddetail[0]->kd_dok_inout;
			$dd['NO_DOK_INOUT'] = $ddetail[0]->no_dok_inout;
			$dd['TGL_DOK_INOUT'] = date('Ymd',strtotime($ddetail[0]->tgl_dok_inout));
			$dd['WK_INOUT'] = date('YmdHis',strtotime($ddetail[0]->wk_inout));
			$dd['KD_SAR_ANGKUT_INOUT'] = $ddetail[0]->kd_sar_angkut_inout;
			$dd['NO_POL'] = '';
			$dd['PEL_MUAT'] = $ddetail[0]->pel_muat;
			$dd['PEL_TRANSIT'] = '';
			$dd['PEL_BONGKAR'] = $ddetail[0]->pel_bongkar;
			$dd['GUDANG_TUJUAN'] = $ddetail[0]->gudang_tujuan;
			$dd['KODE_KANTOR'] = $ddetail[0]->kode_kantor;
			$dd['NO_DAFTAR_PABEAN'] = '';
			$dd['TGL_DAFTAR_PABEAN'] = '';
			$dd['NO_SEGEL_BC'] = '';
			$dd['TGL_SEGEL_BC'] = '';
			$dd['NO_IJIN_TPS'] = '';
			$dd['TGL_IJIN_TPS'] = '';
		} else if ($type == 'keluar'){
			$dd['KD_DOK_INOUT'] = $ddetail[0]->kd_dok_inout;
			$dd['NO_DOK_INOUT'] = $ddetail[0]->no_dok_inout;
			$dd['TGL_DOK_INOUT'] = date('Ymd',strtotime($ddetail[0]->tgl_dok_inout));
			$dd['WK_INOUT'] = date('YmdHis',strtotime($ddetail[0]->wk_inout));
			$dd['KD_SAR_ANGKUT_INOUT'] = $ddetail[0]->kd_sar_angkut_inout;
			$dd['NO_POL'] = $ddetail[0]->no_pol;
			$dd['PEL_MUAT'] = $ddetail[0]->pel_muat;
			$dd['PEL_TRANSIT'] = $ddetail[0]->pel_transit;
			$dd['PEL_BONGKAR'] = $ddetail[0]->pel_bongkar;
			$dd['GUDANG_TUJUAN'] = $ddetail[0]->gudang_tujuan;
			$dd['KODE_KANTOR'] = $ddetail[0]->kode_kantor;
			$dd['NO_DAFTAR_PABEAN'] = $ddetail[0]->no_daftar_pabean;
			$dd['TGL_DAFTAR_PABEAN'] = date('Ymd',strtotime($ddetail[0]->tgl_daftar_pabean));
			$dd['NO_SEGEL_BC'] = $ddetail[0]->no_segel_bc;
			$dd['TGL_SEGEL_BC'] = date('Ymd',strtotime($ddetail[0]->tgl_segel_bc));
			$dd['NO_IJIN_TPS'] = $ddetail[0]->no_ijin_tps;
			$dd['TGL_IJIN_TPS'] = date('Ymd',strtotime($ddetail[0]->tgl_ijin_tps));
		}

		/* Initialisasi */
		$endpoint = ENDPOINT;
		$mode = true;
		$t = new mysoap($endpoint,$mode);
		logs('endpoint:'.$endpoint);
		
		/* Configuration */
		$t->username = SUSERNAME;
		$t->password = SPASSWORD;
		$t->context = 'KMS';
		$t->soapFunction = SOAPFUNCTION_KMS;
		$t->namespace = SERVICESITE;

		$header = $t->setHeader($dh);
		$detail = $t->setDetail($dd);
		
		// echo $t->generateXML(); die;
		$xml = $t->generateXML();
		if(MYSOAP_DEBUG&&!$konfirm){
			$this->Load_View('send_konfirmasi');
			$this->view->Assign('xml',$xml);
			$this->view->Assign('refnum',$refnum);
			$this->view->Assign('type',$type);
			return;
		}
		
		$result = $t->exec();
		$respon = $result->result[SOAPFUNCTION_KMS.'Result'];


		if(substr($respon,0,15)==='Proses Berhasil'){
			switch ($type) {
						case 'masuk':
							$sql_d = "UPDATE detail_m SET sent = '1', respon = '$respon' WHERE ref_num = '$refnum'";
							break;
						case 'keluar':
							$sql_d = "UPDATE detail_k SET sent = '1', respon = '$respon' WHERE ref_num = '$refnum'"; 
							break;
					}
			$this->success = $respon;
		} else {
			$this->model->exec("UPDATE detail SET respon = '$respon' WHERE sent = '0' AND ref_num = '$refnum'");
			$this->error = $respon;
		}
		logs('Respon Send SOAP: '.$result->result);

		//$respon = 'Validasi data XML anda tidak benar'; --> Data salah
		//$respon = 'User Tidak Dikenal !!'   --> Username or Password wrong
		// echo $respon;
		$this->daftar();

		//Add log
		if($respon==''){
			$respon = "SEND $type FAILED";
			$this->error;
		}

		$debug = !$result->debug?$result->result[SOAPFUNCTION_KMS.'Result']:$result->error;
		$sqllog = "INSERT INTO log(tgl,ref_num,action,respon,deskripsi,xml) VALUE(NOW(),'$refnum','$type','$respon','$debug','$xml')";
		logs($sqllog);
		$this->log($sqllog);

	}

	private function log($data){
		logs('Add log '.date(now));
		$this->model->exec($data);
	}

	public function run(){

	}
}