<?php
/** Development Environment **/
// when Set to false, no error will be throw out, but saved in temp/log.txt file.
define ('DEVELOPMENT_ENVIRONMENT',false);
define ('MYSOAP_DEBUG',true);

/** Site Root **/
// Domain name of the site (no slash at the end!)
//define('SITE_ROOT' , 'http://You domain name');
define('SITE_ROOT' , 'http://localhost/tabitha');
define ('DEFAULT_CONTROLLER', 'index');
define ('DEFAULT_ACTION', 'index');

//Time Zone
define('TIME_ZONE','Asia/Jakarta');

//Database
define('DB_ENGINE','Mysql');
define('DB','tpsonline');
define('USERNAME','root');
define('PASSWORD','');
define('HOST','localhost');


define('APP_NAME','Entry Data');
define('APP_TITLE','Sistem Entry Data Sederhana');
define('PAGE_LENGTH',5);

//DIRECTORIES
define('LIBRARY_PATH',ROOT . DS . 'library' . DS); //Library Directories
define('CONTROLLER_PATH',ROOT . DS . 'controllers' . DS); //Controllers Directories
define('MODEL_PATH',ROOT . DS . 'models' . DS); //Models Directories
define('LIBRARY',ROOT . DS . 'library' . DS); //Library Directories

define('ENDPOINT','https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL'); //End Point Site
define('SERVICESITE','http://service.beacukai.go.id/'); //Service Server
//define('SUSERNAME','TEST');
//define('SPASSWORD','1234');
//define('SOAPFUNCTION_KMS','CoCoKms_Tes');

define('SUSERNAME','TBEX');
define('SPASSWORD','TBEX123456');
define('SOAPFUNCTION_KMS','CoarriCodeco_Kemasan');

$path;
