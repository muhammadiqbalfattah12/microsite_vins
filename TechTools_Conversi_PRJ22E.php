<html>
<head>
<title> Konversi Report PRJ22E ke Tabel di Data Base Techtool </title>
</head>
<body>
<H2> Aku Siap Konvesi Tabel PRJ22E di Data Base Techtool </H2>

<?php
echo "Koneksi ke SQL";
echo "<br>";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techtool";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Koneksi ke Database Techtool Berhasil";
echo "<br>";
echo "Akses File PRJ22e.txt";
echo "<br>";
$yourfile = fopen("PRJ22e.txt", "r") or die("Unable to open file!");
echo "<br>";

// Output one line until end-of-file and save to table
while(!feof($yourfile)) {
  echo fgets($yourfile) . "<br>";
  $brsStr = fgets($yourfile);
print_r (explode("]",$brsStr));
$araybrs =(explode("]",$brsStr));
echo "<br>";
echo "Simpan ke Tabel PRJ22E di database Techtool";
echo "<br>";

$inception=strtotime(str_replace("/","-",($araybrs[12])));
$expiry=strtotime(str_replace("/","-",($araybrs[13])));
$booking_d =strtotime(str_replace("/","-",($araybrs[14])));
$effect_d =strtotime(str_replace("/","-",($araybrs[15])));
$date_input=strtotime(str_replace("/","-",($araybrs[17])));
$user_aprvd=strtotime(str_replace("/","-",($araybrs[19])));


$dinception=date("Y-m-d",$inception);
$dexpiry=date("Y-m-d",$expiry);
$dbooking_d =date("Y-m-d",$booking_d );
$deffect_d =date("Y-m-d",$effect_d );
$ddate_input=date("Y-m-d",$date_input);
$duser_aprvd=date("Y-m-d",$user_aprvd);


$tsi_oc=intval($araybrs[29])/100;
$tsi=intval($araybrs[30])/100;
$prm_di=intval($araybrs[32])/100;
$prm_in_co=intval($araybrs[33])/100;
$prm_in_r=intval($araybrs[34])/100;
$prm_intty=intval($araybrs[35])/100;
$prm_co_out=intval($araybrs[36])/100;
$prm_jplc=intval($araybrs[37])/100;
$prm_gross=intval($araybrs[38])/100;
$ujroh_fee=intval($araybrs[39])/100;
$discount=intval($araybrs[40])/100;
$hfee_in_co=intval($araybrs[41])/100;
$hfee_coout=intval($araybrs[42])/100;
$hfe_jojpl=intval($araybrs[43])/100;
$hfee_in_r=intval($araybrs[44])/100;
$hfee_intty=intval($araybrs[45])/100;
$uc_in_co=intval($araybrs[46])/100;
$uc_co_out=intval($araybrs[47])/100;
$uc_jplc=intval($araybrs[48])/100;
$uc_in_r=intval($araybrs[49])/100;
$uc_intty=intval($araybrs[50])/100;
$com_co_out=intval($araybrs[51])/100;
$com_jplc=intval($araybrs[52])/100;
$com_in_co=intval($araybrs[53])/100;
$com_in_r=intval($araybrs[54])/100;
$com_intty=intval($araybrs[55])/100;
$com_abrk=intval($araybrs[56])/100;
$com_pool=intval($araybrs[57])/100;
$vat=intval($araybrs[58])/100;
$tax=intval($araybrs[59])/100;
$r_p_bppdan=intval($araybrs[60])/100;
$r_p_decree=intval($araybrs[61])/100;
$r_pmaipark=intval($araybrs[62])/100;
$r_prm_qs=intval($araybrs[63])/100;
$r_prm_sp_1=intval($araybrs[64])/100;
$r_prm_sp_2=intval($araybrs[65])/100;
$r_prm_sp_3=intval($araybrs[66])/100;
$r_pfob=intval($araybrs[67])/100;
$r_p_fac=intval($araybrs[68])/100;
$uc_bppdan=intval($araybrs[69])/100;
$uc_dec=intval($araybrs[70])/100;
$uc_maipark=intval($araybrs[71])/100;
$uc_qs=intval($araybrs[72])/100;
$uc_sp_1=intval($araybrs[73])/100;
$uc_sp_2=intval($araybrs[74])/100;
$uc_sp_3=intval($araybrs[75])/100;
$uc_fob=intval($araybrs[76])/100;
$uc_fac=intval($araybrs[77])/100;
$r_c_bppdan=intval($araybrs[78])/100;
$r_com_dec=intval($araybrs[79])/100;
$r_commprk=intval($araybrs[80])/100;
$r_com_qs=intval($araybrs[81])/100;
$r_com_sp_1=intval($araybrs[82])/100;
$r_com_sp_2=intval($araybrs[83])/100;
$r_com_sp_3=intval($araybrs[84])/100;
$r_comfob=intval($araybrs[85])/100;
$r_comfac=intval($araybrs[86])/100;
$op_fee=intval($araybrs[87])/100;
$policy_fee=intval($araybrs[88])/100;
$stamp_duty=intval($araybrs[89])/100;

echo var_dump($tsi_oc);
echo "<br>";
$sql = "INSERT INTO f_prj22e ( 
ANO,	
BRANCH,	
SEGMENT,	
SEGMENT_G,	
MO_CODE,	
MO_NAME,	
INSURED_ID,	
INSURED_Nm,	
POLICYNO,	
TRANS_TYPE,	
END_NO,	
ISTYPE,	
INCEPTION,	
EXPIRY,	
BOOKING_D,	
EFFECT_D,	
USER_INPUT,	
DATE_INPUT,	
USER_APRv,	
USER_APRvd,
REFNO,
COB,
TOC,
TOC_DESC,
TOC_GROUP,
PRODUCT,
SOURCE_ID,
SOURCE_Nm,
CUR_OC,
TSI_OC,
TSI,
Valuta,	
Prm_DI,	
Prm_IN_Co,	
Prm_IN_R,	
Prm_InTTY,	
Prm_Co_OUT,	
Prm_JPLC ,	
Prm_GROSS,	
UJROH_FEE,	
DISCOUNT,	
HFEE_IN_Co,	
HFEE_CoOUT,	
HFE_JOJPL ,	
HFEE_IN_R,	
HFEE_INTTY,	
UC_IN_Co,	
UC_Co_OUT,	
UC_JPLC ,	
UC_IN_R,	
UC_INTTY,	
com_Co_OUT,	
com_JPLC ,	
com_IN_Co,	
com_IN_R,	
com_INTTY,	
com_ABRk,	
com_POOL,	
VAT,	
TAX,	
R_P_BPPDAN,	
R_P_DECREE,	
R_PMAIPARK,	
R_Prm_QS,	
R_Prm_SP_1,	
R_Prm_SP_2,	
R_Prm_SP_3,	
R_PFOB,	
R_P_FAC ,	
UC_BPPDAN,	
UC_DEC ,	
UC_MAIPARK,	
UC_QS,	
UC_SP_1,	
UC_SP_2,	
UC_SP_3,	
UC_FOB,	
UC_FAC ,	
R_c_BPPDAN,	
R_com_DEC ,	
R_comMPRK,	
R_com_QS,	
R_com_SP_1,	
R_com_SP_2,	
R_com_SP_3,	
R_comFOB,	
R_comFAC ,	
OP_FEE,	
POLICY_FEE,	
STAMP_DUTY,	
BACKD_FLAG	
)
VALUES( 
'$araybrs[0]',
'$araybrs[1]',
'$araybrs[2]',
'$araybrs[3]',
'$araybrs[4]',
'$araybrs[5]',
'$araybrs[6]',
'$araybrs[7]',
'$araybrs[8]',
'$araybrs[9]',
'$araybrs[10]',
'$araybrs[11]',
'$dinception',
'$dexpiry',
'$dbooking_d', 
'$deffect_d', 
'$araybrs[16]',
'$ddate_input',
'$araybrs[18]',
'$duser_aprvd',
'$araybrs[20]',
'$araybrs[21]',
'$araybrs[22]',
'$araybrs[23]',
'$araybrs[24]',
'$araybrs[25]',
'$araybrs[26]',
'$araybrs[27]',
'$araybrs[28]',
'$tsi_oc',
'$tsi',
'$araybrs[31]',
'$prm_di',
'$prm_in_co',
'$prm_in_r',
'$prm_intty',
'$prm_co_out',
'$prm_jplc',
'$prm_gross',
'$ujroh_fee',
'$discount',
'$hfee_in_co',
'$hfee_coout',
'$hfe_jojpl',
'$hfee_in_r',
'$hfee_intty',
'$uc_in_co',
'$uc_co_out',
'$uc_jplc',
'$uc_in_r',
'$uc_intty',
'$com_co_out',
'$com_jplc',
'$com_in_co',
'$com_in_r',
'$com_intty',
'$com_abrk',
'$com_pool',
'$vat',
'$tax',
'$r_p_bppdan',
'$r_p_decree',
'$r_pmaipark',
'$r_prm_qs',
'$r_prm_sp_1',
'$r_prm_sp_2',
'$r_prm_sp_3',
'$r_pfob',
'$r_p_fac',
'$uc_bppdan',
'$uc_dec',
'$uc_maipark',
'$uc_qs',
'$uc_sp_1',
'$uc_sp_2',
'$uc_sp_3',
'$uc_fob',
'$uc_fac',
'$r_c_bppdan',
'$r_com_dec',
'$r_commprk',
'$r_com_qs',
'$r_com_sp_1',
'$r_com_sp_2',
'$r_com_sp_3',
'$r_comfob',
'$r_comfac',
'$op_fee',
'$policy_fee',
'$stamp_duty',
'$araybrs[90]'
)
";

if ($conn->query($sql) === TRUE) {
  echo "Tabel f_Prj22e Inserted successfully";
} else {
  echo "Error Inserted Tabel f_Prj22e " . $conn->error;
}
echo "Inserted Tabel PRJ22E di database Techtool Berhasil";
echo "<br>";

}
fclose($yourfile);

$conn->close();

?>



</body>


</html>
