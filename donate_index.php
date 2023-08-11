<?php
require_once('db-config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donation Website</title>
  <link rel="shortcut icon" href="images/ICON/Logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="donate_style.css">
</head>

<body>
  <div class="first-bg">
    <div class="container">
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="logo" src="images/ICON/Logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav h1 ">
              <a class="nav-link color-me" href="donate_index.php">Home</a>
              <a class="nav-link color-me" href="#about">About</a>
              <a href="donate_post.php" class="button">Post</a>
              <a href="" class="button">Login</a>
            </div>
          </div>
        </div>
      </nav>
    </div>


    <div class="container">
      <div class="card-group">
      <?php
      $ques = mysqli_query($db, "SELECT * FROM `donation_posts`") or die(mysqli_error($db));
      while ($q = mysqli_fetch_assoc($ques)) {
      ?>
      
        <div class="card shadow-sm h-100">
            <img src="<?php echo $q['image']; ?>" class="card-img-top" >
            <div class="card-body">
              <h5 class="card-title"> <?php echo $q['title']; ?></h5>
              <p> <?php echo $q['description']; ?> </p>
              <a class="button" target="" href="donate_payment_method_choose.php?donation-id=<?php echo $q['post_id']; ?>">Donate</a>
              <div class="d-flex last-card-line">
                <div class="p-2 flex-grow-1 ">
                  <img class="img-cal" src="images/ICON/calendar.png" alt="">
                </div>
                <div class="p-2 flex-grow-1">
                  <h3 class="date-cal">Deadline <?php echo $q['end_date']; ?></h3>
                </div>

                </div>
            </div>
          </div>
          <?php }?>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>