<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update_menu.css">
    <link rel="stylesheet" href="menu.css">
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


<div id="main-content">
    
    
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <? php 
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><? php echo $row['sid']; ?></td>
                <td><? php echo $row['sname']; ?></td>
                <td><? php echo $row['saddress']; ?></td>
                <td><? php echo $row['sclass']; ?></td>
                <td><? php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <? php  } ?>
        </tbody>
    </table>
    
</div>