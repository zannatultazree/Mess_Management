<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Menu</title>
    <link rel="stylesheet" href="update_menu.css">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <ul class = "nav_item">
            <li class="nav_list"><a href="#">Home</a></li>
            <li class="nav_list"><a href="#">Billing</a></li>
            <li class="nav_list"><a href="#">Food Request</a></li>
            <li class="nav_list"><a href="#">Member Request</a></li>
            <li class="nav_list"><a href="#">Menu</a></li>
            <li class="nav_list"><a href="#">Update Menu</a></li>
            <li class="nav_list"><a href="#">Logout</a></li>

        </ul>
    </nav>




<!-- Form -->
<div class="parentBox">
<div class="container">
<?php
      $conn = mysqli_connect("localhost", "root", "", "Mess_Management") or die("Connection failed");

       $item_id = $_GET['id'];

       $sql = "SELECT * FROM updatemenu WHERE itemId = {$item_id}";
       $result = mysqli_query($conn, $sql)or die("Query failed");

       if(mysqli_num_rows($result) >0) {
         while($row = mysqli_fetch_assoc($result)){
    ?>
 <form class ="post-form" action= "updatedata.php" method = "post"><table>
    
    <tr>
        <td>
            <label for="">Day: </label>
        </td>
        <td>
            <?php
            $sql1 = "SELECT * FROM updatemenu";
            $result1 = mysqli_query($conn, $sql1)or die("Query unsuccessful");

            if(mysqli_num_rows($result1) >0) {
              echo  '<select name = "day">
                <option value="" selected disabled> Day </option>';
              while($row1 = mysqli_fetch_assoc($result1)){

              echo  "<option >{$row1['day']}</option>";
              }
            echo '</select>';
            }
            ?>
        </td>
        <td>Meal Type: </td>
        <td>
            <Select><option value="">Breakfast</option>
        <option value="">Lunch</option></Select>
    
    </td>
    </tr>
    <tr>
        <td>Item Id: </td>

        <td> <input type="number" name = "itemId" value = "<?php echo $row['itemId']; ?>"/> </td>
    </tr>
    <tr><td></td><td></td> <td>Meal Item: </td>
        <td><input type="text" value = "<?php echo $row['mealItem']; ?>" /></td></tr>
    <tr> <td></td><td></td><td>Price: </td>
        <td><input type="number" value = "<?php echo $row['price']; ?>" /></td></tr>
        <tr> <td></td><td></td><td> </td>
        <td><input type="Submit" value ="Update"></td></tr>
</table>

</form> 

<?php }
       }
       ?> 


</div>
</div>

</body>
</html>