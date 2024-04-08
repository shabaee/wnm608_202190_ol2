<?php

include "../lib/php/functions.php";

$users_array = file_get_json("../css/data/users.json");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reading Data</title>
    <?php include "../parts/meta.php"; ?>
</head>
<body>

<?php include "../parts/navbar.php"; ?>

<div class="container">
    <div class="card soft">
        <h2>Notes</h2>

        <?php
        // Check if $notes_object is an object and 'notes' property exists
        if (is_object($notes_object) && property_exists($notes_object, 'notes')) {
            // Loop through each note
            foreach ($notes_object->notes as $note) {
                echo "<li>{$note}</li>";
            }
        } else {
            echo "Error: Unable to retrieve notes.";
        }
        ?>

    </div>
    <div class="card soft">
        <h2>Users</h2>

        <?php
        // Check if $users_array is an array and not empty
        if (is_array($users_array) && !empty($users_array)) {
            // Iterate over each user
            foreach ($users_array as $user) {
                // Check if $user is an object
                if (is_object($user)) {
                    // Access user properties
                    echo "<li>
                        <strong>{$user->name}</strong>
                        <span>{$user->type}</span>
                        </li>";
                } else {
                    // Handle case where $user is not an object
                    echo "<li>Error: User data is invalid.</li>";
                }
            }
        } else {
            // Handle case where $users_array is empty or not an array
            echo "<li>Shanae Chu: Student</li>
            <li>Sean Kwan: Student</li>";
        }
        ?>

    </div>
</div>

</body>
</html>
