<?php
    session_start();

    if(!isset($_SESSION['User'])){
      header("location:../php/login.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Notes Application</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>

<header class="pageheader">
  <nav class="navbar navbar-expand-lg" style="background-color: yellow;">
    <div class="collapse navbar-collapse ml-5" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../IT110_notes_webApp/php/members.php">Group Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../IT110_notes_webApp/php/about.php">About Project</a>
        </li>
      </ul>
    </div>
    <h5 class="mr-2 text-white">Welcome , <?php
    echo $_SESSION['User'];
    ?>
    </h5>
    <form action="../IT110_notes_webApp/php/logout.php" method="POST">
    <button type="submit" name="Signout" class="btn btn-outline-success" id="btn_signout" type="button">Sign Out</button>
    </form>
  </nav>
</header>
                <!-- END OF NAVBAR! -->
  	<h1 class="heading">My Notes</h1>
  	<div class="container">
  		<div class="row">
  			<button class="btn btn-primary col-1 offset-10" data-toggle="modal" data-target="#addNoteModal">
  				<i class="fa fa-plus"></i>
  			</button>
  		</div>
      <div class="notes">
        <ul class="notes_list">
        </ul>
      </div>

  	</div>





<!-- MODALS -->
<div class="modal fade" id="addNoteModal" tabindex="-1" role="dialog" aria-labelledby="addNoteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addNoteModalLabel">New Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="note-title" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="note-title">
          </div>
          <div class="form-group">
            <label for="note-description" class="col-form-label">Description:</label>
            <textarea class="form-control" id="note-description"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save_note">Save Note</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="editNoteModal" tabindex="-1" role="dialog" aria-labelledby="editNoteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editNoteModalLabel">Edit Note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="edit_note-title" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="edit_note-title">
          </div>
          <div class="form-group">
            <label for="edit_note-description" class="col-form-label">Description:</label>
            <textarea class="form-control" id="edit_note-description"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="edit_note">Save Changes</button>
      </div>
    </div>
  </div>
</div>
<!-- MODALS -->
</body>

</html>
