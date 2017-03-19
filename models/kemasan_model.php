<?php
/**
* 
*/
class Kemasan_Model extends Model
{
	var $a;

	function __construct()
	{
		$classname = DB_ENGINE;
		$this->_db = new $classname();
		logs('Load Model Kemasan');
	}

	public function exec($sql){
		return $this->_db->Exec($sql);
	}

	public function getAll($page=null){
		return $this->_db->getAll('header',PAGE_LENGTH,$page);
	}

	public function getDetail($id){
		return $this->_db->getById($id,'detail','ref_num',['limit'=>0]);
	}

/*	*******************************************************************/
	public function addHeaderMasuk($data){
		return $this->_db->create('header_m',$data,$type);
	}

	public function addDetailMasuk($data){
		return $this->_db->create('detail_m',$data,$type);
	}
/*	*******************************************************************/
	public function addHeaderKeluar($data){
		return $this->_db->create('header_k',$data,$type);
	}

	public function addDetailKeluar($data){
		return $this->_db->create('detail_k',$data,$type);
	}
}