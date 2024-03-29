<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // grab input fields 
    $firstName = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['contact'];
    $password = $_POST['password'];
    $retype_pwd = $_POST['retype-password'];

    // validate the form 
    
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Online Quiz System</title>
</head>
<body>
    <div class="container mt-2">
        <h3 class="text-center">Online Quize</h3>
        <h4 class="text-center mb-3">Registration</h4>
        <div class="border p-3 register">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="mb-3">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" name="Username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="contact">Contact</label>
                    <input type="phone" name="contact" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="phone" name="password" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="retype-password">Retype Password</label>
                    <input type="phone" name="retype-password" class="form-control">
                </div>

                <button type="submit" class="register-btn">Register</button>
            </form>
        </div>

        <div class="mt-2">
            <div class="text-center">
               <p><strong>Have an Account? <a href="login.html"> Login</a></strong> </p> 
            </div>
        </div>
    </div>
    
    <!-- bootstrap js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>