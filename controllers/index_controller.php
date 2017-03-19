<?php
class Index_Controller extends Controller{

	public function __construct() {
		parent::__construct();
		$header = new View();
		$header->Assign('app_title',APP_TITLE);
		$header->Assign('brand',APP_NAME);
		$header->Assign('user',getLoggedUser('fullname'));
		$this->Assign('header',$header->Render('header',false));

		$footer = new View();
		$this->Assign('footer',$header->Render('footer',false));
	}

	public function index() {
		logs('Masuk index Controller');
		// if(!checkSession()){
		// 	logs('Session tidak ditemukan');
		// 	redirect(SITE_ROOT,'auth/login');
		// }
		if(isset($_SESSION['path'])&&($_SESSION['path']!=='')){
			redirect(SITE_ROOT,$_SESSION['path']);
		}
		$this->Load_View('index');
	}

	public function about($data) {
		$this->Load_View('about');
		$this->Assign('heading','Tentang ' . APP_NAME);
		$this->Assign('content',' Donec id ....');
	}

	public function testdb(){
		$tbheader = new Kemasan_Model;
		var_dump($tbheader->getAll());
	}

	public function test() {
		$dataheader = [
			'KD_DOK'=>'5',
			'KD_TPS'=>'TBEX',
			'NM_ANGKUT'=>'CATHAY',
			'NO_VOY_FLIGHT'=>'CX777',
			'CALL_SIGN'=>'',
			'TGL_TIBA'=>'20161226',
			'KD_GUDANG'=>'CIMP',
			'REF_NUMBER'=>'10AA16120433'
		];
		$datadetail = [
			'NO_BL_AWB'=>'S00539166',
			'TGL_BL_AWB'=>'20161222',
			'NO_MASTER_BL_AWB'=>'160',
			'TGL_MASTER_BL_AWB'=>'20161222',
			'ID_CONSIGNEE'=>'',
			'CONSIGNEE'=>'PTNIKOMAS',
			'BRUTO'=>'661',
			'NO_BC11'=>'046692',
			'TGL_BC11'=>'20161226',
			'NO_POS_BC11'=>'0013',
			'CONT_ASAL'=>'NULL',
			'SERI_KEMAS'=>'KG',
			'KD_KEMAS'=>'CTN',
			'JML_KEMAS'=>'47',
			'KD_TIMBUN'=>'TA12',
			'KD_DOK_INOUT'=>'NULL',
			'NO_DOK_INOUT'=>'NULL',
			'TGL_DOK_INOUT'=>'NULL',
			'WK_INOUT'=>'NULL',
			'KD_SAR_ANGKUT_INOUT'=>'NULL',
			'NO_POL'=>'NULL',
			'PEL_MUAT'=>'NULL',
			'PEL_TRANSIT'=>'NULL',
			'PEL_BONGKAR'=>'NULL',
			'GUDANG_TUJUAN'=>'NULL',
			'KODE_KANTOR'=>'NULL',
			'NO_DAFTAR_PABEAN'=>'NULL',
			'TGL_DAFTAR_PABEAN'=>'>',
			'NO_SEGEL_BC'=>'NULL',
			'TGL_SEGEL_BC'=>'NULL',
			'NO_IJIN_TPS'=>'NULL',
			'TGL_IJIN_TPS'=>'NULL'
		];


		/* Initialisasi */
		$endpoint = 'https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL';
		$mode = true;
		$t = new mysoap($endpoint,$mode);
		
		/* Configuration */
		$t->username = 'TES';
		$t->password = '1234';
		$t->context = 'KMS';
		$t->soapFunction = 'CoCoKms_Tes';
		$t->namespace = 'http://services.beacukai.go.id/';

		$header = $t->setHeader($dataheader);
		$detail = $t->setDetail($datadetail);
		
		$res = $t->exec();


		//echo $res->CoCoKms_TesResult;
		// echo $t->getDebug();
	}
}
