<?php 
require_once "./db/db.php";
$data = "SELECT * FROM staffs";
$datalist = $conn->query($data);
$result = $datalist->fetch_all(MYSQLI_ASSOC);
if(isset($_GET["message"])){
    echo "<label style='color:red;background-color:yellow;'>".$_GET["message"]."<label>";  
}else{
    echo "";
}

?>
<table border=1>
    <tr>
        <th>#ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
    <?php
    foreach($result as $value){
        echo "<tr><td>".$value['id']."</td>";
        echo "<td>".$value['name']."</td>";
        echo "<td>".$value['email']."</td>";
        echo "<td>".$value['age']."</td>";
        echo "<td> <a href='edit.php?id=".$value['id']."'>Edit</a> || <a href='delete.php?id=".$value['id']."'>Delete </a></td></tr>";

    }
     ?>
     </table>
    
</table>