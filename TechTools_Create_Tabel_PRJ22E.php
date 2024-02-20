<html>
<head>
<title> Membuat Tabel PRJ22E di Data Base Techtool </title>
</head>
<body>
<H2> Field Tanggal Jadi Interger dulu, maklum belum ketemu Solusi </H2>

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
echo "Create Tabel PRJ22E di database Techtool";
echo "<br>";
$sql = "CREATE TABLE f_prj22e ( 
ANO	Char 	(10),	
BRANCH	Char 	(5),	
SEGMENT	Char 	(10),	
SEGMENT_G 	Char 	(10),	
MO_CODE	Char 	(10),	
MO_NAME	Char 	(50),	
INSURED_ID	Char 	(10),	
INSURED_Nm	varchar (300),	
POLICYNO	Char 	(20),	
TRANS_TYPE	Char 	(20),	
END_NO	Char 	(5),	
ISTYPE	Char 	(5),	
INCEPTION	date,	
EXPIRY	date,	
BOOKING_D 	date,	
EFFECT_D 	date,	
USER_INPUT	Char 	(20),	
DATE_INPUT	date,	
USER_APRv	Char 	(20),	
USER_APRvd	date,	
REFNO	Char 	(10),	
COB	Char 	(5),	
TOC	Char 	(5),	
TOC_DESC 	Char 	(50),	
TOC_GROUP	Char 	(5),	
PRODUCT	Char 	(10),	
SOURCE_ID	Char 	(10),	
SOURCE_Nm	Char 	(50),	
CUR_OC	Char 	(3),	
TSI_OC	FLOAT 	(20,2),	
TSI	FLOAT 	(20,2),	
Valuta	Char 	(3),	
Prm_DI 	FLOAT	(20,2),	
Prm_IN_Co	FLOAT	(20,2),	
Prm_IN_R	FLOAT	(20,2),	
Prm_InTTY	FLOAT	(20,2),	
Prm_Co_OUT	FLOAT	(20,2),	
Prm_JPLC 	FLOAT	(20,2),	
Prm_GROSS	FLOAT	(20,2),	
UJROH_FEE	FLOAT	(20,2),	
DISCOUNT	FLOAT	(20,2),	
HFEE_IN_Co	FLOAT	(20,2),	
HFEE_CoOUT	FLOAT	(20,2),	
HFE_JOJPL 	FLOAT	(20,2),	
HFEE_IN_R	FLOAT	(20,2),	
HFEE_INTTY	FLOAT	(20,2),	
UC_IN_Co	FLOAT	(20,2),	
UC_Co_OUT	FLOAT	(20,2),	
UC_JPLC 	FLOAT	(20,2),	
UC_IN_R	FLOAT	(20,2),	
UC_INTTY	FLOAT	(20,2),	
com_Co_OUT	FLOAT	(20,2),	
com_JPLC 	FLOAT	(20,2),	
com_IN_Co	FLOAT	(20,2),	
com_IN_R	FLOAT	(20,2),	
com_INTTY	FLOAT	(20,2),	
com_ABRk	FLOAT	(20,2),	
com_POOL	FLOAT	(20,2),	
VAT	FLOAT	(20,2),	
TAX	FLOAT	(20,2),	
R_P_BPPDAN	FLOAT	(20,2),	
R_P_DECREE	FLOAT	(20,2),	
R_PMAIPARK	FLOAT	(20,2),	
R_Prm_QS	FLOAT	(20,2),	
R_Prm_SP_1	FLOAT	(20,2),	
R_Prm_SP_2	FLOAT	(20,2),	
R_Prm_SP_3	FLOAT	(20,2),	
R_PFOB	FLOAT	(20,2),	
R_P_FAC 	FLOAT	(20,2),	
UC_BPPDAN	FLOAT	(20,2),	
UC_DEC 	FLOAT	(20,2),	
UC_MAIPARK	FLOAT	(20,2),	
UC_QS	FLOAT	(20,2),	
UC_SP_1	FLOAT	(20,2),	
UC_SP_2	FLOAT	(20,2),	
UC_SP_3	FLOAT	(20,2),	
UC_FOB	FLOAT	(20,2),	
UC_FAC 	FLOAT	(20,2),	
R_c_BPPDAN	FLOAT	(20,2),	
R_com_DEC 	FLOAT	(20,2),	
R_comMPRK	FLOAT	(20,2),	
R_com_QS	FLOAT	(20,2),	
R_com_SP_1	FLOAT	(20,2),	
R_com_SP_2	FLOAT	(20,2),	
R_com_SP_3	FLOAT	(20,2),	
R_comFOB	FLOAT	(20,2),	
R_comFAC 	FLOAT	(20,2),	
OP_FEE	FLOAT	(20,2),	
POLICY_FEE	FLOAT	(20,2),	
STAMP_DUTY	FLOAT	(20,2),	
BACKD_FLAG	Char 	(10)
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabel f_Prj22e created successfully";
} else {
  echo "Error creating Tabel f_Prj22e " . $conn->error;
}
echo "Create Tabel PRJ22E di database Techtool Berhasil";
echo "<br>";

$conn->close();

?>



</body>


</html>
