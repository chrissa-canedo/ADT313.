<h1> Switch </h1>
<?php
    $role = "Student";
    switch ($role){
        
        case 'student'
            echo "You are a student. you are not allowed to access....";
            break;

        case 'instructor'
            echo "You are an instructor, ypou have limited access to....";
            break;

        case 'Admin'
            echo "You are an admin, ypou have full access to....";
            break;

    }
?>