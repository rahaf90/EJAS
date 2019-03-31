<!DOCTYPE html>
<html lang="en">
  <head>
    <title>new-post page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <?php include("includes/header.php"); ?>

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Post a Job</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Post a Job</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
            <form action="#" class="p-5 bg-white">
              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Job Title</label>
                  <input type="text" id="fullname" class="form-control" placeholder="eg. Full Stack Frontend">
                </div>
              </div>

            
              <div class="row form-group">
                <div class="col-md-12"><h3>Job Type</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-1">
                    <input type="radio" id="option-job-type-1" name="job-type"> Full Time
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-2">
                    <input type="radio" id="option-job-type-2" name="job-type"> Part Time
                  </label>
                </div>

                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-3">
                    <input type="radio" id="option-job-type-3" name="job-type"> Freelance
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-4">
                    <input type="radio" id="option-job-type-4" name="job-type"> Internship
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-4">
                    <input type="radio" id="option-job-type-4" name="job-type"> Termporary
                  </label>
                </div>

              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                 
                 
                  <input type="text" class="form-control" placeholder="New York City or Remotly">
                </div>
              </div>
              
        
              <div class="row form-group">
                <div class="col-md-12"><h3>Job Description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <a href="evaluation.php"><input value="Next" class="btn btn-primary  py-2 px-5"></a>
                  
                </div>
              </div>

  
            </form>
          </div>

         
        </div>
      </div>
    </div>

   <?php include("includes/footer.php"); ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/main.js"></script>
    
  </body>
</html>