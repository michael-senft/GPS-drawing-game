<?php
$Name = $_POST['Firstname'];
$Lname = $_POST['Lastname'];
$User = $_POST['Username'];
$Pwd= $_POST['Pwd'];
$Pwd= $_POST['VerPwd'];
$Mail= $_POST['Mail'];
$Mail= $_POST['VerMail'];
$xml = simplexml_load_file('registerform.xml');
$employee -> addChild('Firstname',$name);
$employee -> addChild('Lastname',$Lname);
$employee -> addChild ('Username',$User);
$employee -> addChild('Pwd',$Pwd);
$employee -> addChild('Pwd',$Pwd);
$employee -> addChild('Mail',$Mail);
$employee -> addChild('Mail',$Mail);
file_put_contents('registerform.xml',$xml->asXML());
print "Account succesfull";
header("basisform2.php");
?>