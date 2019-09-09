<?php
//$taxNo = $_POST['taxNo'];
//$date = $_POST['date'];
//$mess = $_POST['mess'];
//$ma = $_POST['ma'];
//$gstNo = $_POST['gstNo'];
//$through = $_POST['through'];
//$lrNo = $_POST['lrNo'];
//$pMark = $_POST['pMark'];
//$docThr = $_POST['docThr'];
//$qnty = $_POST['qnty'];
//$rp = $_POST['rp'];
//$hsn = $_POST['hsn'];
//$desp = $_POST['desp'];
//$len = $_POST['len'];
//$rate = $_POST['rate'];
//$unit = $_POST['unit'];
//$amnt = $_POST['taxNo'];
//$igstVal = $_POST['igstVal'];
//$sgstVal = $_POST['sgstVal'];
//$cgstVal = $_POST['cgstVal'];
//$pkg = $_POST['pkg'];
//$tamnt = $_POST['tamnt'];
//$total = $_POST['total'];
//$tot_in_word = $_POST['tIW'];
$data = array(
"taxNo" => $_POST['taxNo'],
"date_of_entry" => $_POST['date'],
"mess" => $_POST['mess'],
"ma" => $_POST['ma'],
"gstNo" => $_POST['gstNo'],
"through" => $_POST['through'],
"lrNo" => $_POST['lrNo'],
"pMark" => $_POST['pMark'],
"docThr" => $_POST['docThr'],
"qnty" => $_POST['qnty'],
"rp" => $_POST['rp'],
"hsn" => $_POST['hsn'],
"desp" => $_POST['desp'],
"len" => $_POST['len'],
"rate" => $_POST['rate'],
"unit" => $_POST['unit'],
"amnt" => $_POST['taxNo'],
"igstVal" => $_POST['igstVal'],
"sgstVal" => $_POST['sgstVal'],
"cgstVal" => $_POST['cgstVal'],
"pkg" => $_POST['pkg'],
"tamnt" => $_POST['tamnt'],
"total" => $_POST['total'],
"tot_in_word" => $_POST['tIW']
);
//    json_decode($data);

echo"<pre>";
print_r($data);
//header("Location: table.html");
die;
?>