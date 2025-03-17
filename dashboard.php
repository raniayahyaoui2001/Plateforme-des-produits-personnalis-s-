<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    session_start();
    $role = $_SESSION['role'];
if($role=="admin")

include 'dashboard-admin.php'; 




else 


include 'dashboard-user.php'; 

?>

</body>
</html>
