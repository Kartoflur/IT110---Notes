<?php
  session_start();
  if(!isset($_SESSION['User'])){
      header("location:about.php");
    }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Group Members</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script type="text/javascript" src="../js/script.js"></script>

</head>
<body>

<header class="pageheader">
  <nav class="navbar navbar-expand-lg" style="background-color: yellow;">
    <div class="collapse navbar-collapse ml-5" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="members.php">Group Members<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Project</a>
        </li>
      </ul>
    </div>
    <h5 class="mr-2 text-white">Welcome , <?php echo $_SESSION['User']; ?>
    </h5>

    <form action="../php/logout.php" method="POST">
    <button type="submit" name="Signout" class="btn btn-outline-success" id="btn_signout" type="button">Sign Out</button>
    </form>
  </nav>
</header>
                  <!-- END OF NAVBAR! -->



              <center><br><br><h1>PAGE UNDER CONSTRUCTION</h1></center>
</body>
</html>
