<?php
//include the file that loads the PhpSpreadsheet classes
require 'php_spreadsheet/vendor/autoload.php';

//include the classes needed to create and write .xlsx file
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

//now you can use the Spreadsheet and Xlsx classes
$sprint1=$_POST['sprint'];
$rname1=$_POST['rname'];
$month1=$_POST['month'];
$eff=$_POST['effort1'];
$eff1=$_POST['effort2'];
$leave1=$_POST['leave'];
$filename=$_POST['file'];
$inputFileName = 'sample/'.$_POST['file'];
if (file_exists($inputFileName)) {
    //echo "The file $inputFileName exists";
} else {
	
    $spreadsheet = new Spreadsheet($inputFileName); 
	$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
	$writer->save($inputFileName);
}

//$data=$sprint1.",".$rname1.",".$month1.",".$eff.",".$eff1.",".$leave1;
//$data=array('No'=>$sprint1, "Name"=>$rname1, "Month"=>$month1, "Effort"=>$eff,"Effort1"=>$eff1,"Leave"=>$leave);
$spreadsheet = IOFactory::load($inputFileName);
//echo "<pre>";
//print_r($spreadsheet);
//print_r($sprint1);
//$file="file.xlsx";
//$reader = IOFactory::createReader('Xlsx');
//$spreadsheet = $reader->load("nTest.xlsx");

$spreadsheet->setActiveSheetIndex(0);
    $objSheet = $spreadsheet->getActiveSheet();
    $last_line = $objSheet->getHighestRow();
    //$last_id = $objSheet->getCellByColumnAndRow(0, $last_line)->getCalculatedValue();
	$row = $last_line + 1; $col = 1;
	//foreach($data as $data1){
        $objSheet->setCellValueByColumnAndRow($col++, $row, $sprint1);
        $objSheet->setCellValueByColumnAndRow($col++, $row, $rname1);
        $objSheet->setCellValueByColumnAndRow($col++, $row, $month1);
        $objSheet->setCellValueByColumnAndRow($col++, $row, $eff);
        $objSheet->setCellValueByColumnAndRow($col++, $row, $eff1);
        $objSheet->setCellValueByColumnAndRow($col++, $row, $leave1);
         $col=1;$row++;
   // }
	$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
	PhpOffice\PhpSpreadsheet\Shared\File::setUseUploadTempDirectory(true);


$writer->save($inputFileName);
//echo "murali";
//file_put_contents($inputFileName, $data . PHP_EOL, FILE_APPEND);
// Retrieve the current active worksheet 
//$sheet = $spreadsheet->getActiveSheet(); 
  
// Set the value of cell A1 
//$sheet->setCellValue('A1', 'GeeksForGeeks!'); 
  
// Sets the value of cell B1 
//$sheet->setCellValue('B1', 'A Computer Science Portal For Geeks'); 
   
//file_put_contents("nTest.xlsx", $data.PHP_EOL, FILE_APPEND);
//print "<h1 align=center>Thank you for submitting your email address!</h1>";

 
//require_once('spreadsheet/vendor/autoload.php'); 
//use PhpOffice\PhpSpreadsheet\Spreadsheet; 
//use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 
  
// Creates New Spreadsheet 
//$spreadsheet = new Spreadsheet(); 
  
// Retrieve the current active worksheet 
//$sheet = $spreadsheet->getActiveSheet(); 
  
// Set the value of cell A1 
//$sheet->setCellValue('A1', 'GeeksForGeeks!'); 
  
// Sets the value of cell B1 
//$sheet->setCellValue('B1', 'A Computer Science Portal For Geeks'); 
   
// Write an .xlsx file  
//$writer = new Xlsx($spreadsheet); 
  
// Save .xlsx file to the current directory 
//$writer->save('gfg.xlsx'); 

?> 

<html>
<head>
<title>Zimbra</title>
 <style>
 title{ color: red; font: 12px tahoma;} 
        a:link, a:visited {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin-left:30px;
                		  }

        a:hover, a:active {
            background-color: red;
                          }
        th,td {
  padding: 10px;
}
th {
  text-align: right;
  color:#B8860B;
}

button {
  background-color: #A52A2A;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left:400px;
  cursor: pointer;
}
     </style>    
</head>
<body>    
<form action="index2.php" method="post">
<table style="width:60%" align="center" height="40%">
<tr>
    <th>Username :</th>
    <td><input type="text" name="user"></td> 
    <th>Password :</th>
	<td><input type="password" name="pass"></td>
  </tr>
  <tr>
    <th> Recepient :</th>
    <td><input type="text" name="to"></td> 
    <th> CC :</th>
	<td><input type="text" name="cc"></td>
  </tr>
  <tr>
    <th> File name :</th>
	<td><input type="text" name="file"></td>	
  </tr>
  </table>
  </br></br>
<button>Send Mail</button>
<a href="index.php">HOME</a>
</form>
</body>
</html>