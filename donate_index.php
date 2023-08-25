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
    <div class="">
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
              
            </div>
          </div>
        </div>
      </nav>
    </div>

    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        $ques = mysqli_query($db, "SELECT * FROM `donation_posts`") or die(mysqli_error($db));
        while ($q = mysqli_fetch_assoc($ques)) {
        ?>
          <div class="col">
            <div class="card shadow-sm h-100">
              <img src="<?php echo $q['image']; ?>" class="card-img-top" alt="Post Image">
              <div class="card-body">
                <h5 class="card-title"><?php echo $q['title']; ?></h5>
                <p><?php echo $q['description']; ?></p>
                <a class="btn btn-primary" target="" href="donate_amount.php?donation-id=<?php echo $q['post_id']; ?>">Donate</a>
                <div class="d-flex last-card-line">
                  <div class="p-2 flex-grow-1">
                    <img class="img-cal" src="images/ICON/calendar.png" alt="Calendar Icon">
                  </div>
                  <div class="p-2 flex-grow-1">
                    <h3 class="date-cal">Deadline <?php echo $q['end_date']; ?></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

        
      </div>
     
   <div class="container" id="about">
    <div class="d-flex justify-content-center categories">
        <h3 class="online-courses" >About Us</h3>
    </div>
   </div>
   <div class="container">
    <div class="row">
      <div class="thirty-width col-md-6">
        <img src="images/Photos/Man.png" alt="">
      </div>
      <div class="seventy-width col-md-6">
        <p>Our dedicated team is driven by a shared passion for making a positive impact. Comprising diverse talents and backgrounds, we come together to drive change through our donation platform. With a commitment to transparency and empathy, we strive to connect donors with causes they care about. Together, we aim to create a community that fosters generosity and transforms lives. Join us in our journey towards a better and more compassionate world.</p>
      </div>
    </div>
   </div>

     <div class="last-part">
       <div class="row">
         <div class="col-md-3">
           <p>Your smallest act of kindness can ignite a powerful chain reaction of giving, lighting up the world for those in need.</p>
         </div>
         <div class="col-md-3">
           <h3>Members of the project</h3>
           <p class="last-para">
            Nahiduzzaman   
            Lailafin
            Shourav
            Ramisa
            Debopriyo 
            </p>
         </div>
         
         <div class="col-md-3">
           <h3>Useful Links</h3>
           <p class="last-para">
            <a href="www.facebook.com">Facebook</a>
            <a href="www.X.com">Twitter/X</a>
            <a href="www.Instagram.com">Instagram</a>
            <a href="www.whatsapp.com">Whatsapp</a>
              </p>
         </div>
       </div>
       <footer>
        <p>@ Joy 2023 | all right reserved.</p>
       </footer>
   </div>

      
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>