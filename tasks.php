<?php

 print_r($_POST);
$connect = mysqli_connect("localhost", "root", "", "newdatabase");
$tbl_name="tble1";
if(!$connect) {
    die("Failed to connect: " . mysql_error());
}
if(!mysqli_select_db($connect, "newdatabase")){
    die("Failed to select DB:" . mysql_error());
}
{
$tg1 = isset($_POST['1']);
if(in_array(1,$_POST['task']))
 $tg1 = 1;
else
 $tg1 = 0;
$tg2 = isset($_POST['2']);
if(in_array(2,$_POST['task']))
 $tg2 = 2;
else
 $tg2 = 0;
$tg3 = isset($_POST['3']);
if(in_array(3,$_POST['task']))
 $tg3 = 3;
else
 $tg3 = 0;
$tg4 = isset($_POST['4']);
if(in_array(4,$_POST['task']))
 $tg4 = 4;
else
 $tg4 = 0;
$query="INSERT INTO tble1(A, B, C , D) VALUES ('$tg1', '$tg2', '$tg3', '$tg4')";
mysqli_query($connect, $query) or die("error") ;
echo("$query");
$jobs = mysqli_query($connect, "SELECT * from tble1");
while ($row = mysqli_fetch_assoc($jobs)){
if( $row['A'] = 1)
{
echo "Finished: Plan Data Base" ;
print "<br \>";
}
if( $row['B'] == 2)
{
echo "Finished: Put Tasks into data table" ;
print "<br \>";
}
if( $row['C'] == 3)
{
echo "Finished: Retrieve tasks one at a time" ;
print "<br \>";
}
if( $row['D'] == 4)
{
echo "Finished: Display tasks in a table" ;
print "<br \>";
}
}
}
?>