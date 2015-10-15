<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?PHP
echo "Hello World!<br>";

$w=1;
$t=2;

echo $w+$t ,"<br>";
?>

<h2>Testing</h2>

<?php
$x=5;

function myTest() {
    global $x; // local
    echo "<p>Variable x inside function is: $x </p><br>";
} 
myTest();

echo "<p>Variable x outside function is: $x </p>";

function myTest1() {
    static $y = 0;
    echo $y;
    $y++;
}

myTest1();
myTest1();
myTest1();
myTest1()
echo "<br>";
function myself()
{
	echo "<i> NurSyafiqahRosli</i><br>";
	echo "<b> Programmer </b></br>";
	echo "<u>InfoTech Cargo Services Sdn Bhd</u><br>";
	echo "9th Floor, Block B, Quill18, Jalan Teknokrat 3,";
//63000 Cyberjaya, Selangor Darul Ehsan, Malaysia

//Tel (DID)    : +6 03 8310 3841
//Tel (Main)   : +6 03 8310 3900
//Mobile        : +6017 287 9470

//Email: nursyafiqahrosli@cargofe.com 
//Web  :  www.cargofe.com 

}
myself();
?>

</body>
</html>
