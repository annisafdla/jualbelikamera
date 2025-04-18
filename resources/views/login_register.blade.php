<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css">

    <!-- Tailwind css -->
    <link rel=”stylesheet” href=”https://cdn.tailwindcss.com/3.4.1”>
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div class="container">

        <div class="form-box register">
            <form  method="POST">
                <h1>Register</h1>
                <div class="input-box">
                    <input type="text" placeholder="Email" name="email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="number" placeholder="No. Handphone" name="contact" required>
                    <i class='bx bxs-contact'></i>
                </div>
                <div class="input-box">
                    <input type="text" placeholder="Address" name="address" required>
                    <i class='bx bxs-map'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn" name="register">Register</button>
            </form>
        </div>

        <div class="form-box login">
            <form  method="POST">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required> 
                    <i class='bx bxs-envelope'></i>
                </div>
                    <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn" name="login">Login</button>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Welcome to BagItUp</h1>
                <p>Already have an account?</p>
                <button class="btn login-btn">Login</button>
            </div>
            <div class="toggle-panel toggle-right">
                <h1>BagItUp!</h1>
                <p>Don't have an account?</p>
                <button class="btn register-btn">Register</button>
            </div>
        </div>
    </div>


    <script src="styles/script2.js"></script>
</body>
</html>
