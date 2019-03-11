<html>
<head>
<title>Resource Utilization</title>
<style>
th,td {
  padding: 10px;
}
th {
  text-align: right;
  color:#B8860B;
}
h1{
 font-size: 40px;
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
  margin: 4px 2px;
  cursor: pointer;
}
</style>

</head>
<body style="background-color:powderblue;">
<h1><center><font color="SlateBlue">Resource Utilization</font></center></h1>
<form action="index1.php" method="post">
<table style="width:60%" align="center" height="40%">
  <tr>
    <th>Sprint No :</th>
    <td><input type="text" name="sprint"></td> 
    <th>Resource Name :</th>
	<td><input type="text" name="rname"></td>
  </tr>
  <tr>
    <th>Month (MMM-YY) :</th>
    <td><input type="text" name="month"></td> 
    <th>Available Effort (Hrs) :</th>
	<td><input type="text" name="effort1"></td> 
  </tr>
  <tr>
    <th>Actual Effort (Hrs) :</th>
    <td><input type="text" name="effort2"></td> 
    <th> Leaves (Hrs) :</th>
	<td><input type="text" name="leave"></td> 
  </tr>
  <tr>
	<th> File name :</th>
	<td><input type="text" name="file"></td>
  </tr>
</table>
<center><button>SUBMIT</button></center>
</form>


</body>
</html>
<?php
?>