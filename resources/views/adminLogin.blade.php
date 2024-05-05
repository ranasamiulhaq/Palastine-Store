<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Page</title>
    <style>
            body {
                background-color: rgb(255, 247, 192);
            }

            .container {
                border-radius: 20px;
                max-width: 400px;
                margin-top: 20px;
            }

            .card {
                border: none;
                border-radius: 20px;
                background-color : rgb(255, 255, 255);
                box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            }

            .card-header {
                background-color: rgb(53, 53, 53)g;
                color:rgb(53, 53, 53) ;
            }
            #sign{
                background-color: rgb(244, 218, 52);
                border: none;
                color: #000000;
            }
            #log{
                background-color: rgb(10, 10, 10);
                border: none;
                color: #f8f9fa;   
            }
            .btn a {
                color: #f8f9fa;
            }

            #signA{
                color: black;
            }
            .footer-text a{
                color: #000000;
            }
            .login{
                color: #000000;
            }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <img src="images\logo.png" alt="Logo" class="img-fluid">
            </div>
            <div class="card-body">
                <h4 class="text-center mb-4 login">Login to Your Account</h4>
                <form action="/admin" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="User name" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
                <div class="text-center  mt-3 footer-text">
                    <a href="main">Back to Main</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>