<?php 
// 1. database credentials
$host = "localhost";
$db_name = "schedule";
$username = "root";
$password = "";
 
// 2. connect to database
$con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
 
// 3. prepare select query
$query = "SELECT Task, Starting_Date, Starting_Time, Due_Date, Due_Time FROM set_schedules WHERE Task = ? LIMIT 0,1";
$stmt = $con->prepare( $query );
 
// 4. sample product ID
$Task=1;
 
// 5. this is the first question mark in the query
$stmt->bindParam(1, $Task);
 
// 6. execute our query
$stmt->execute();
 
// 7. store retrieved row to the 'row' variable
$row = $stmt->fetch(PDO::FETCH_ASSOC);
 
// 8. show data to user
echo "<div>Task: " . $row['Task'] . "</div>";
echo "<div> Starting_Date: " . $row[' Starting_Date'] . "</div>";
echo "<div> Starting_Time: " . $row[' Starting_Time'] . "</div>";
echo "<div>  Due_Dae: " . $row['  Due_Date'] . "</div>";
echo "<div>  Due_Time: " . $row['  Due_Time'] . "</div>";
echo"welcome pooja";
?>