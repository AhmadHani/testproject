<?php
session_start();
?>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="jquery-2.1.4.min.js" type="text/javascript"></script>
<style>
    #notwrite{
        
        display:none;
        color:red;
        font-family: B Elham;
    }
        #yeswrite{
        text-align: center;
        display:none;
        color:green;
        font-family: B Elham;
    }
    .form-control{
        
        width:30%;
    }
    center {
width: 35%;
    background: #2E2E2E;
    padding: 15px;
    font-family: JF Flat;
    margin-left: 30%;
    color: white;
    border-radius: 10px 10px 10px 10px;
    margin-top: 10%;
}
div#welcome {
   text-align: center;
    color: #253E5F;
    font-size: 25px;
    background: #f9f9f9;
    width: 50%;
    padding: 15px;
    border-radius: 10px 10px;
    margin-left: 25%;
    margin-top: 10%;
    display:none;
}
</style>
<meta charset="UTF-8" />
        <?php
$username = $_POST['usernamee'];
$password = $_POST['passwordd'];
if (isset($_POST['logout'])) {
if ($_REQUEST['type'] == logout) {


    session_destroy();
   
}
}
if (isset($_POST['login'])) {
    if (empty($username) || empty($password)) {
    echo '
    <script type="text/javascript">
    
    $(function () {
        
        $("#notwrite").show(500);
    })

</script>
    <h1 id="notwrite">الرجاء ملئ الحقول</h1>
    ';
    
}
else {
    echo '
       <script type="text/javascript">
    
    $(function () {
        
        $("#yeswrite").show(500);
        
    })

</script>
 <h1 id="yeswrite">تم التسجيل بنجاح</h1>
    ';
    $_SESSION['user'] = $username;
    $_SESSION['pass'] = $password;
	// hELLO I'M AHMAD IN THE GITHUB :)
   }
}
$session = $_SESSION['user'];
if (empty($session)) {
$loginself = $_SERVER["PHP_SELF"];
echo '

<center>
<h5 style="    font-size: 14px;
    /* text-align: right; */
    margin-left: 270px;">تسجيل دخول</h5>
<form action="'.$loginself.'" method="post">

<div class="form-group">
 
  <input type="text"     style="width: 80%;
    margin-top: 40px;
    direction: rtl;
    margin-bottom: 35px;
"  placeholder="اسم المستخدم" class="form-control" name="usernamee" id="usr">
</div>
<div class="form-group">

  <input type="password" style="width: 80%;
    margin-top: 40px;
    direction: rtl;
    margin-bottom: 35px;
" placeholder="كلمة السر" name = "passwordd" class="form-control" id="pwd">
</div>
<input type="submit" value="تسجيل الدخول" class="btn btn-primary
" name="login" /></center>
</form>

    </div>



';
}
else {
        echo '
       <script type="text/javascript">
    
    $(function () {
        
        
        
    })

</script>

    ';
    echo '
    <script type="text/javascript">
    $(function () {
          $("#welcome").slideDown(3000);
        
    })
    </script>
    <div id="welcome">مرحبا بك  '.'<br />
    '.$session.'<br /><br />
    '.'<form action="?type=logout" method="post">
    <input type="submit" name="logout" class="btn btn-danger" value="تسجيل الخروج"/>
    </form>';
}
?>

