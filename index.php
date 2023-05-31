<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XS</title>
    <script src="https://kit.fontawesome.com/9b3053ac98.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1>Log In</h1>
            <form method="post">
                <div class="input-group">
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" placeholder="Email">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Input must have one lowercase, one uppercase , one number and atleast password of size 8 char" name="password"placeholder="Password">
                    </div>
                    <div class="btn-field">
                        <button name="login" type="submit">Log In</button>
                    </div>
                </div>
                <?php
        @session_start();
                    if(isset($_POST['login']))
                    {
                        include('Database.php');
                        $link=@mysqli_connect($server,$username,$password)or Die("<font color='red'>Server not connected!!!</font>");
                       mysqli_select_db($link,$database)or die("<font color='red'>Database not connected!!!</font>");                                                                                                                                                
                    
                      $Email=$_POST['email'];
                     
                     $pwd=$_POST['password'];
                     
                     if($Email!='' && $pwd!='' )
                     {
                       $query=mysqli_query($link,"select * from details where email='".$Email."' and password='".$pwd."'") or die(mysql_error());
                       $res=@mysqli_fetch_row($query);
                       if($res)
                       {
                        $_SESSION['email']=$Email;
                        $Email=$_SESSION['email'];
                        echo 
                        "<script>
                    
                        window.location.href='./Home/home.php?';
                        
                        </script>";;

                        }
                     else
                       {
                        echo"<font color='Green' ><h3 align='center'>You  have entered wrong username or password !!!!!!</h3></font>";
                       }
                     }
                        }
                    ?>
            </form>
        </div>
    </div>
</body>
</html>