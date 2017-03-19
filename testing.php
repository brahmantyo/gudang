<?php
require_once 'lib/nusoap.php';
error_reporting(0);

$xml_data = '<?xml version="1.0" encoding="utf-8"?>
<DOCUMENT xmlns="cocokms.xsd">
    <COCOKMS>
        <HEADER>
            <KD_DOK>5</KD_DOK>
            <KD_TPS>TBEX</KD_TPS>
            <NM_ANGKUT>CATHAY</NM_ANGKUT>
            <NO_VOY_FLIGHT>CX777</NO_VOY_FLIGHT>
            <CALL_SIGN></CALL_SIGN>
            <TGL_TIBA>20161226</TGL_TIBA>
            <KD_GUDANG>TA12</KD_GUDANG>
            <REF_NUMBER>10AA16120435</REF_NUMBER>
        </HEADER>
        <DETIL>
            <KMS>
                <NO_BL_AWB>S00539169</NO_BL_AWB>
                <TGL_BL_AWB>20161222</TGL_BL_AWB>
                <NO_MASTER_BL_AWB>160-6145-7082</NO_MASTER_BL_AWB>
                <TGL_MASTER_BL_AWB>20161222</TGL_MASTER_BL_AWB>
                <ID_CONSIGNEE></ID_CONSIGNEE>
                <CONSIGNEE>PT TK INDUSTRIAL</CONSIGNEE>
                <BRUTO>537.0000</BRUTO>
                <NO_BC11>046692</NO_BC11>
                <TGL_BC11>20161226</TGL_BC11>
                <NO_POS_BC11>0013</NO_POS_BC11>
                <CONT_ASAL>-</CONT_ASAL>
                <SERI_KEMAS>1</SERI_KEMAS>
                <KD_KEMAS>CT</KD_KEMAS>
                <JML_KEMAS>42</JML_KEMAS>
                <KD_TIMBUN>TA12</KD_TIMBUN>
                <KD_DOK_INOUT>NULL</KD_DOK_INOUT>
                <NO_DOK_INOUT>NULL</NO_DOK_INOUT>
                <TGL_DOK_INOUT>NULL</TGL_DOK_INOUT>
                <WK_INOUT>NULL</WK_INOUT>
                <KD_SAR_ANGKUT_INOUT>NULL</KD_SAR_ANGKUT_INOUT>
                <NO_POL>NULL</NO_POL>
                <PEL_MUAT>NULL</PEL_MUAT>
                <PEL_TRANSIT>NULL</PEL_TRANSIT>
                <PEL_BONGKAR>NULL</PEL_BONGKAR>
                <GUDANG_TUJUAN>NULL</GUDANG_TUJUAN>
                <KODE_KANTOR>NULL</KODE_KANTOR>
                <NO_DAFTAR_PABEAN>NULL</NO_DAFTAR_PABEAN>
                <TGL_DAFTAR_PABEAN>NULL</TGL_DAFTAR_PABEAN>
                <NO_SEGEL_BC>NULL</NO_SEGEL_BC>
                <TGL_SEGEL_BC>NULL</TGL_SEGEL_BC>
                <NO_IJIN_TPS>NULL</NO_IJIN_TPS>
                <TGL_IJIN_TPS>NULL</TGL_IJIN_TPS>
            </KMS>
        </DETIL>
    </COCOKMS>
</DOCUMENT>';

$client = new nusoap_client('https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL',true);

$error  = $client->getError();
if ($error) {
    echo '<h2>Constructor error</h2><pre>' . $error . '</pre>';
} else {
    echo 'Successfull connection';
}

 
$result = $client->call('CoCoKms_Tes', 
            array(
                'Username'=>'TES',
                'Password'=>'1234',
                'fStream'=>$xml_data,
            ),
            'http://services.beacukai.go.id/',
            'http://services.beacukai.go.id/CoCoKms_Tes'
        );


if ($client->fault) {
    echo '<h2>Fault</h2><pre>';
    var_dump($result);
    echo '</pre>';
} else {
    $error = $client->getError();
    if ($error) {
        echo '<h2>Error</h2><pre>' . $error . '</pre>';
    } else {
        echo '<h2>Main</h2>';
        echo var_dump($result);
    }
}
 
// show soap request and response
echo '<h2>Request</h2>';
echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
echo '<h2>Response</h2>';
echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
echo '<h2>Debug</h2>';   
echo '<pre>' . htmlspecialchars($client->getDebug(), ENT_QUOTES) . '</pre>';