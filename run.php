/<?php
/*
    RAZEPEDIA
    https://github.com/mrzptra
    API BY RAZEPEDIA.MY.ID
*/

function tagihanlistrik($id){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://razepedia.my.id/api/cektagihan_listrik.php?idpel='.$id.'',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$respon = curl_exec($curl);

curl_close($curl);
$jsondata = json_decode($respon);
if($jsondata->status == "true"){
  echo "===================================\n";
  echo " NAMA : ".$jsondata->data->atasnama."\n";
  echo " DAYA : ".$jsondata->data->arrears."\n";
  echo " TAGIHAN BULAN : ".$jsondata->data->tagihan_bulan."\n";
  echo " TOTAL TAGIHAN : ".$jsondata->data->total_tagihan."\n";
  echo "===================================\n";
}else{
  echo "===================================\n";
  echo " Error, IDPEL tidak ditemukan atau web error \n";
  echo "===================================\n";
  }
}
print "====================================\n";
print "┏━━━┳━━━┳━━━━┳━━━┳━━━┳━━━┳━━━┳━━┳━━━┓\n";
print "┃┏━┓┃┏━┓┣━━┓━┃┏━━┫┏━┓┃┏━━┻┓┏┓┣┫┣┫┏━┓┃\n";
print "┃┗━┛┃┃╋┃┃╋┏┛┏┫┗━━┫┗━┛┃┗━━┓┃┃┃┃┃┃┃┃╋┃┃\n";
print "┃┏┓┏┫┗━┛┃┏┛┏┛┃┏━━┫┏━━┫┏━━┛┃┃┃┃┃┃┃┗━┛┃\n";
print "┃┃┃┗┫┏━┓┣┛━┗━┫┗━━┫┃╋╋┃┗━━┳┛┗┛┣┫┣┫┏━┓┃\n";
print "┗┛┗━┻┛╋┗┻━━━━┻━━━┻┛╋╋┗━━━┻━━━┻━━┻┛╋┗┛\n";
print "====================================\n";
echo "Masukkan IDPELANGGAN ? \nInput : ";
$idpel = trim(fgets(STDIN));

$gasken = tagihanlistrik($idpel);
print $gasken;
