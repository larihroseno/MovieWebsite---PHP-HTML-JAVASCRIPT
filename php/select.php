<?php




$database = mysqli_connect('127.0.0.1:3307', 'root', '', 'user');          

    
                // Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$action=$_POST["action"];
if ($action=="showroom") {
    


$result = mysqli_query($database,"SELECT * FROM users");

echo "<table border='1'>
<tr>
<th>Username</th>
<th>Password</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['userName'] . "</td>";
echo "<td>" . $row['password'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($database);
}
?>