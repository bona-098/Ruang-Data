<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Login</title>
  <style>
    body {
      background: url("{{ asset('template/images/login.jpeg')}}") no-repeat center center fixed;
      background-size: cover;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Roboto', sans-serif;
    }

    .glass-login-container {
      max-width: 400px;
      padding: 20px;
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin: 0 auto;
    }

    .logo {
      display: block;
      margin: 0 auto;
      max-width: 150px;
      margin-bottom: 20px;
    }
  </style>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="glass-login-container mx-auto"> <!-- Menambahkan class mx-auto -->
      <img class="logo" src="https://source.unsplash.com/random" alt="Logo">
      <h2 class="text-center">Dashboard</h2>
      <form>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" placeholder="Enter username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" placeholder="Enter password">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <div class="form-group text-center">
          <a href="#">Forgot password?</a>
        </div>
      </form>
    </div>
  </div>
 
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>