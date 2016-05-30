

<?php
session_start();
$userid = $_SESSION["id"];
$EMPID="";
$BANKNAME="";
$ACCOUNTNUMBER="";
$PAN_NO="";
$ID="";
$loginerror="";
$success="";
$passwderror="";


$IDD="";
$BANKNAME="";
$ACCOUNTNO="";
$PANNO="";
$EMPID="";





include_once 'functions.php';
$userid = $_SESSION["id"];

$sql = "SELECT *
FROM Bankdetails WHERE EMPid='$userid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    
    while($row = $result->fetch_assoc()) {
        

$IDD=$row["ID"];
$BANKNAME=$row["Bankname"];
$ACCOUNTNO=$row["Accountno"];
$PANNO=$row["Pancard_no"];
$EMPID=$row["EMPid"];

}
}





if (isset($_POST['bdetails']))
    {
	
$BANKNAME = $_POST['bankname'];
$ACCOUNTNUMBER = $_POST['accountnumber'];
$PAN_NO = $_POST['panno'];
$ID = $_POST['id'];


$result=$conn->query("SELECT * FROM Bankdetails where EMPid='$userid'");
 $num    = $result->num_rows;
//var_dump($result);
if ($num == 0) {

$sql = "INSERT INTO Bankdetails (bankname,Accountno,Pancard_no,ID,EMPid) VALUES ('$BANKNAME','$ACCOUNTNUMBER','$PAN_NO','$ID','$userid')";
if ($conn->query($sql) === TRUE) {
   			$success="record added successfuly";
			$loginerror="";
                                                } 
			else {
                             echo "Error: " . $sql . "<br>" . $conn->error;
                             }
}

else{
//echo"record is pressent";
$sql="UPDATE Bankdetails
SET bankname='$BANKNAME', Accountno='$ACCOUNTNUMBER',Pancard_no='$PAN_NO',ID='$ID',EMPid='$userid'
WHERE EMPid='$userid'";

		if ($conn->query($sql) === TRUE) {
   			$success="record updates successfuly";
			$loginerror="";
                                                } 
			else {
                             echo "Error: " . $sql . "<br>" . $conn->error;
                             }

}
}
/*$sql = "INSERT INTO Bankdetails (bankname,Accountno,Pancard_no,ID,EMPid) VALUES ('$BANKNAME','$ACCOUNTNUMBER','$PAN_NO','$ID','$EMPID')";
/*$sql="UPDATE Bankdetails
SET bankname='$BANKNAME', Accountno='$ACCOUNTNUMBER',Pancard_no='$PAN_NO',ID='$ID'
WHERE EMPid='$EMPID'";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	if($BANKNAME!=""&&$ACCOUNTNUMBER!=""&&$PAN_NO!=""&&$ID!=""){
            
		if ($conn->query($sql) === TRUE) {
   			$success="record updates successfuly";
			$loginerror="";
                                                } 
			else {
                             echo "Error: " . $sql . "<br>" . $conn->error;
                             }
                                       
                                                        }
	else{
		$loginerror="All fiels are require123456";
		$success="";

		}

}

*/
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
    <meta charset="utf-8">
    <link type="text/css"  href="css/default.css" rel="stylesheet"/>
    <link type="text/css" href="css/groupUser.css" rel="stylesheet"/>


  <style>nav a:link, a:visited {
    display: block;
    width: 120px;
    font-weight: bold;
    color: black;
    border-radius:10px;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    text-transform: uppercase;
}

nav a:hover, a:active {
    background-color: red;
}</style>  





</head>

  <body>


<div class="maincontainer">
<?php
include 'include/employeeHeader.php';
?>
<div id="content">
<nav style="margin:60px 0px 0px 0px; ">
 <a   href="profile.php" > Personal Detail</a>
  <a  href="bank.php" >Bank Detail</a>
  <a  href="empSkills.php" >Skills</a>

</nav>
 </div>
<div id="createUserBodycontent" style="width:90%;height:570px;margin-top:20px;">
<div><p id="adminCrUsr">Create</p></div>
<div id="userCreateDiv" style="margin-top:-17px;height:570px; width:100%;">
<div id="adminUserDiv" style="margin-bottom:100px;height:480px;">
<div id="userInnerDiv">

<form method="post" action="addbank.php">
<table>
<tr>
<td>
        <span>ID</span> </td><td>
        <p><input type="text" id = "username" name="id" value="<?php echo $IDD?>" placeholder="ID" required></p>
</td></tr><tr>
        <td><span>EmployeeID</span></td>
        <td><p><input type="text" id = "username" name="empid" disabled value="<?php echo $EMPID?>"></p> </td></tr>

	

	<tr><td><span>Bank Name</span></td>
        <td><p><input type="text" id = "emailID" name="bankname" value="<?php echo $BANKNAME?>" placeholder="Bank Name" required></p></td></tr>
		
		
		<tr><td><span>Account NO </span></td>
        <td><p><input type="text"  name="accountnumber" value="<?php echo $ACCOUNTNO?>" placeholder=" Account NO" required ></p></td></tr>
		
		<tr>
<td>
        <span>Pan NO</span> </td><td>
        <p><input type="text" id = "username" name="panno" value="<?php echo $PANNO?>" placeholder="Pan NO" required></p>
</td></tr>
		

		
		</table> 

        <p class="submit"><input id = "createUser"  type="submit"  value="submit" name="bdetails" ></p>
        
      </form>
 	<span id = "errorSpanMessage" style="color:red"></span> 
	</div>
</div>
</div>
</div>

</div>
<div class="clear"></div>
<div>
<?php
include 'include/footer.php';
?>
</div>
  </body>
</html>
