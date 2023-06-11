<?php
session_start();

require('config.php');

$name=$_POST['name'];
$password=$_POST['password'];

$query="SELECT * FROM `users` WHERE `name`='$_POST[name]' AND `password`='$_POST[password]'";
$result=mysqli_query($conn,$query);
#for login
if(isset($_POST['login']))
{
    if($result)
    {
    if(mysqli_num_rows($result) >0)#if any user has already exits or mail
    {
        
    $result_fetch=mysqli_fetch_assoc($result);
    if($result_fetch['name']==$_POST['name'] && $_POST['password'])
    {
        $query="INSERT INTO `log`(`name`,`password`) VALUES ('$_POST[name]','$_POST[password]')";
        if(mysqli_query($conn,$query))
        {
            #if data inserted
            echo"
        <script>alert('login successful');
        window.location.href='register.php';
        </script>
        ";
        }
    }
    
    
    else{
        #error for email already registered 
        echo"
        <script>alert('$result_fetch[name]  email is not registered taken');
        window.location.href='register.php';
        </script>
        ";
        }
    }
    
}
}


#for registration

if(isset($_POST['rg']))
{
$user_exits_query="SELECT * FROM `users` WHERE `name`='$_POST[name]' OR `email`='$_POST[email]'";
$result=mysqli_query($conn,$user_exits_query);

if($result)
{
if(mysqli_num_rows($result) >0)#if any user has already exits or mail
{
    
$result_fetch=mysqli_fetch_assoc($result);
if($result_fetch['name']==$_POST['name'])
{
    #error for user name already registered
    echo"
    <script>alert('$result_fetch[name] user name already taken');
    window.location.href='register.php';
    </script>
    ";
}


else{
    #error for email already registered 
    echo"
    <script>alert('$result_fetch[email]  email already taken');
    window.location.href='register.php';
    </script>
    ";
    }
}
else{
    #if new username or email is entered

    
$query="INSERT INTO `users`(`name`, `email`, `number`, `password`) VALUES ('$_POST[name]','$_POST[email]','$_POST[number]','$_POST[password]')";
if(mysqli_query($conn,$query))
{
    #if data inserted
    echo"
<script>alert('Registration successful');
window.location.href='register.php';
</script>
";

}
else
{
    #if data cannot be inserted
    echo"
    <script>alert('cannot run query');
    window.location.href='register.php';
    </script>
    ";
}
}
}
else{
echo"
<script>alert('cannot run query');
window.location.href='register.php';
</script>
";
}
}
?>
