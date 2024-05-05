<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>Sign Up Page</title>
    
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <img src="../images\logo.png" alt="Logo" class="img-fluid">
            </div>
            <div class="card-body">
                <h4 class="text-center mb-4">Sign Up to Your Account</h4>
                <form action="signup" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control " id="name" placeholder="Name" name="name" required>
                        <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" required>
                    </div>
                   
                    <div class="form-group">
                        <input type="text" class="form-control" id="cnic" placeholder="Cnic" name="cnic" required>
                        <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
                    </div>
                    
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email address" name="email" required>
                         <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                    </div>
                  
                   <button type="submit" class="btn  btn-block" id="sign"><a href="signup" id="signA">Sign Up</a></button>
                    <button  class="btn btn-block" id="log"><a href="login" >Login ?</a></button>
                   
                    <div class="text-center  mt-2">
                        <a href="main">Back to Main</a>
                    </div>
                </form>
                
            </div>
        </div>
    </div>

    <script src="js/signupValidation.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>