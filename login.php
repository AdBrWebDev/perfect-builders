<?php include './header.php'; include 'connect.php'; ?>

<button class="btn-floating btn waves-effect waves-light teal pulse" onclick="history.back()" style="margin: 20px"><i class="material-icons">arrow_back</i></button>

<div class="container">
<form action="./login.php" method="POST" class="form-horizontal card z-depth-5" style="text-align: center; padding: 3%; margin-top: 5%">
<h2>Prihlasenie</h2>
<?php if (isset($_GET['error'])){ ?>
    <div>
    <span style="margin: auto" class="new badge red"><?php echo $_GET['error']; ?></span>
    </div>
<?php } ?>
<div class="input-field container">
<input type="email" id="login" name="email" class="validate" autocomplete="off">
<label for="login">E-mail</label>
</div>
<div class="input-field container">
<input type="password" id="login" name="password" autocomplete="off">
<label for="login">Heslo</label>
</div>
<button class="btn waves-effect waves-light btn-large" type="submit" name="submit" style="margin-top: 2%">Prihlásiť <i class="material-icons">login</i></button>
</form>
</div>

<?php 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email)){
        header("Location: ./login.php?error=Vyplňte e-mail");
        exit();
    }else if(empty($password)){
        header("Location: ./login.php?error=Vyplňte heslo");
        exit();
    }else{
        $sql = "SELECT * FROM team WHERE mail = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if($result > 0){
            while($user = mysqli_fetch_assoc($result)){
                $_SESSION['id'] = $user['id_user'];
                $_SESSION['name'] = $user['name'];
            }
            header("Location: ./profile.php");
        }else{
            header("Location: ./login.php?error=Nesprávne prihlasovacie údaje");
            exit();
        }
    }
}
?>