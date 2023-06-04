<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="30">
    <title>TE | The Exhibiton - Digital Art Collection</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/TE.png">
</head>
<body>
    <nav>
    <img src="images/TE.png" height="100px" id=logo style="margin-left: 10px;" />
      <ul class="topnav">
        <li><a href="index.php">Home</a></li>
        <li><a href="artworks.php" target="_self">Artworks</a></li>
        <li><a href="artists.php" target="_self">Artists</a></li>
        <li><a href="login.html" target="_self">Submission</a></li>
      </ul>
    </nav>
    <?php
        include("userService.php");
        $user = new userService($_POST['email'], $_POST['password']);
        if ($get_user = $user->login()) {
          echo '<span style="color: white">Welcome </span>';
          echo '<span style="color: #856a0d">' . $user->getRole() . '</span>';
          echo '<span style="color: white">, Logged in as: </span';
          echo  '<span style="color:white">' . $get_user . '</span>';
      }
       else {
        }
        ?>
        <div class="container1">
          <div class="row">
            <br>
            <a style="color: white; font-family: vogue;">Artwork:</a>
            <br>
            <form action="submission.html" method="POST">
                <div class="row">
                    <div class="col-75">
                        <input type="file" name="file">
                    </div>
                </div>
                <br>
                <br>
                <br>
            <a style="color: white; font-family: vogue;">Artwork Title:</a>
            <div class="row">
                <br>
                <input type="text" name="text" placeholder="Title">
              <br>
              <br>
              <button type="submit">Submit</button>
              <button type="reset">Reset</button>
              <div class="row">
            </form>
          </div>
</body>
</html>