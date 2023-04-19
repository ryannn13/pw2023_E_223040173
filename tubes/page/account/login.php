<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobat Sehat</title>
    <link rel="website icon" href="/pw2023_223040173/tubes/image/logo/Sobat Sehat.png">
    <link rel="stylesheet" href="/pw2023_223040173/tubes/css/login.css">
  </head>
  <body>
<!-- Form login -->
<div class="main">
  <input type="checkbox" id="chk" aria-hidden="true">
  <div class="signup">
    <form action="user.php" method="post">
      <label for="chk" aria-hidden="true">User Login</label>
      <input type="text" name="txt" placeholder="Username">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="pswd" placeholder="Password">
      <button type="submit">Masuk</button>
    </form>
  </div>
  <div class="login">
    <form action="admin.php" method="post">
      <label for="chk" aria-hidden="true">Admin Login</label>
      <input type="text" name="txt" placeholder="Username">
      <input type="email" name="email" placeholder="Email">
      <input type="password" name="pswd" placeholder="Password">
      <button type="submit">Masuk</button>
    </form>
  </div>
</div>
<!-- End Form login -->
  </body>
</html>