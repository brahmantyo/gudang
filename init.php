<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
/*
   $sql =<<<EOF

EOF;
*/
   $sql = "
create table detail(
	no_bl_awb varchar(30) not null,
	tgl_bl_awb date not null,
	no_master_bl_awb varchar(30) null,
	tgl_master_bl_awb date null,
	id_consignee varchar(20) not null,
	consignee varchar(100) not null,
	bruto decimal(5,4) not null,
	no_bc11 varchar(6) not null,
	tgl_bc11 date not null,
	no_pos_bc11 varchar(12) null,
	cont_asal varchar(11) not null,
	seri_kemas int not null,
	kd_kemas varchar(2) not null,
	jml_kemas int not null,
	kd_timbun varchar(10) not null,
	kd_dok_inout varchar(2) not null,
	no_dok_inout varchar(30) not null,
	tgl_dok_inout date not null,
	wk_inout datetime not null,
	kd_sar_angkut_inout varchar(1) not null,
	no_pol varchar(10) not null,
	pel_muat varchar(5) not null,
	pel_transit varchar(5) null,
	pel_bongkar varchar(5) not null,
	gudang_tujuan varchar(4) not null,
	kode_kantor varchar(6) not null,
	no_daftar_pabean varchar(6) not null,
	tgl_daftar_pabean date not null,
	no_segel_bc varchar(30) not null,
	tgl_segel_bc date not null,
	no_ijin_tps varchar(30) not null,
	tgl_ijin_tps date not null
);
";
   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Table created successfully\n";
   }
   $db->close();
?>
