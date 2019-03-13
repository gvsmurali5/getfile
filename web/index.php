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
<script>
            function validate()
            {
                var uname = document.forms["myForm"]["rname"].value;
				var name1 = document.forms["myForm"]["month"].value;
				if(!(uname.match("^[A-Za-z]{1,20}")))
				{
				   document.getElementById("div1").innerHTML="Enter a valid name (consists only alphabets)";
                    document.getElementById("div1").style.color="Red";
					return false;
				}
                else
                {
                    document.getElementById("div1").innerHTML="";
                }
			}
</script>
</head>
<body style="background-color:powderblue;">
<h1><center><font color="SlateBlue">Resource Utilization</font></center></h1>
<form action="index1.php" method="post" name="myForm" onsubmit="return validate()">
<table style="width:60%" align="center" height="40%">
  <tr>
    <th>Sprint No :</th>
    <td><input type="number" name="sprint" placeholder="enter a number" size="50" required></td> 
    <th>Resource Name :</th>
	<td><input type="text" name="rname" onblur="validate()" required><div id="div1"></div></td>
  </tr>
  <tr>
    <th>Month (MMM-YY) :</th>
    <td> <select name="month">
  <option value="Jan">Jan</option>
  <option value="Feb">Feb</option>
  <option value="Mar">Mar</option>
  <option value="Apr">Apr</option>
  <option value="May">May</option>
  <option value="Jun">Jun</option>
  <option value="Jul">Jul</option>
  <option value="Aug">Aug</option>
  <option value="Sep">Sep</option>
  <option value="Oct">Oct</option>
  <option value="Nov">Nov</option>
  <option value="Dec">Dec</option>
        </select>
        <select name="month1">
  <option value="18">2018</option>
  <option value="19">2019</option>
  <option value="20">2020</option>
  <option value="21">2021</option>
  <option value="22">2022</option>
  <option value="23">2023</option>
  <option value="24">2024</option>
  <option value="25">2025</option>
  <option value="26">2026</option>
  <option value="27">2027</option>
  <option value="28">2028</option>
  <option value="29">2029</option>
       </select>
    </td> 
    <th>Available Effort (Hrs) :</th>
	<td><input type="number" name="effort1" placeholder="enter a number" required></td> 
  </tr>
  <tr>
    <th>Actual Effort (Hrs) :</th>
    <td><input type="number" name="effort2" placeholder="enter a number" required></td> 
    <th> Leaves (Hrs) :</th>
	<td><input type="number" name="leave" placeholder="enter a number" required></td> 
  </tr>
  <tr>
	<th> File name :</th>
	<td><input type="text" name="file" required></td>
  </tr>
</table>
<center><button>SUBMIT</button></center>
</form>

</body>
</html>
<?php
?>