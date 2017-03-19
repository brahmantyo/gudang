<?php
echo 'cek';die;
$t = new mysoap();
$t->setEndPoint('https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL');
$t->generateXML();