<?php
include "../lib/php/functions.php";


$users = file_get_json("../css/data/users.json");



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['action']) && $_GET['action'] === 'add') {
    $newUser = new stdClass();
    $newUser->name = $_POST['name'] ?? '';
    $newUser->type = $_POST['type'] ?? '';
    $newUser->email = $_POST['email'] ?? '';
    $newUser->classes = array_filter(explode(',', $_POST['classes'] ?? ''));
    $users[] = $newUser;
    file_put_contents("../data/users.json", json_encode($users, JSON_PRETTY_PRINT));
    header('Location: users.php');
    exit;
}



function showUserPage($user) {
    $selectedStudent = $user->type === 'Student' ? 'selected' : '';
    $selectedTeacher = $user->type === 'Teacher' ? 'selected' : '';
    $selectedAdvisor = $user->type === 'Advisor' ? 'selected' : '';
    $selectedStaff = $user->type === 'Staff' ? 'selected' : '';
    $classes = implode(", ", $user->classes);

    echo <<<HTML

<form action="admin/users.php" method="POST" class="form-card">
    <div class="form-group">
        <h3 class="title">Edit User: {$user->name}</h3>
        <input type="hidden" name="name" value="{$user->name}">
    </div>
    <div class="form-group">
    <div class="form-select-container">
        <label for="type" class="bodytext"><strong>Type</strong></label>
        <select name="type" id="type" class="form-select">
            <option value="Student" $selectedStudent>Student</option>
            <option value="Teacher" $selectedTeacher>Teacher</option>
            <option value="Staff" $selectedStaff>Staff</option>
            <option value="Advisor" $selectedAdvisor>Advisor</option>
        </select>
    </div>
    <div class="form-group">
        <label for="email" class="bodytextt"><strong>Email</strong></label>
        <input type="email" name="email" id="email" value="$user->email" class="form-control stevie-medium">
    </div>
    <div class="form-group">
        <label for="classes" class="bodytext"><strong>Classes</strong></label>
        <input type="text" name="classes" id="classes" value="$classes" class="form-control stevie-medium">
    </div>
    <div>
        <button type="submit" class="btn stevie-bold">Update</button>
    </div>
</form>

<br>
<br>


HTML;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Admin</title>
    <?php include "../parts/meta.php"; 


    ?>



</head>
<body>

    <header class="navbar">
        <div class="container display-flex">
            <div class="flex-none">
                <div class="styletitle">User Admin</div>
            </div>
            <div class="flex-stretch"></div>
            <nav class="nav nav-pills flex-stretch">
                <ul>
                    <li><a href="admin/users.php">User List</a></li>
                    <li><a href="admin/new_user.php">Add New User</a></li>
                </ul>
            </nav>
        </div>
    </header>



           
<div class="container">


     
            <?php



            if (isset($_GET['id'])) {
                showUserPage($users[$_GET['id']]);
               
            } else {

            ?>

        <div class="card soft">

       <div class="subheading">User List</div>

        <nav class="nav">

            <ul>

        <?php


         for($i=0;$i<count($users);$i++) {
             echo "<li>
             <a href='admin/users.php?id=$i'>{$users[$i]->name}</a>
       
             </li>";

    

         }


        ?>
        </ul>
    </nav>

        <?php } ?>

    </div>
    </div> 

    <div class="flex-none"></div>
            <nav class="nav nav-pills flex-none">
    <ul>
    <li><a href="admin/users.php">Return</a></li>
    </ul>
</nav>                 

</body>
</html>