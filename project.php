<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Rishita Srivastava</title>
        
        <!-- Font Family -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
            rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet"/>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"/>

        <link rel="stylesheet" href="css/style.css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

       
    </head>
    <body>

<!-- Navbar starts -->
      
<?php require_once 'navbar.php' ?>


<!--Nabar end -->
        


       <section class="container-fluid">
            <div class="container u-mt-large">
                <div class="row">
                    <div class="col-md-6 col-sm-12 text-black">
                        <h3 class="u-fs-large ">
                         PROJECTS
                        </h3>
                        <figure class="mt-4">
                           
                                <p>
                                 Projects are the best way to implement our learnings.This way we could solve rea-world problems.
                                 I have included all the projects which I have made os far, be it academic or non-academic. The 
                                </p>
                                </figure>
                        
                    </div>
                    
                    <div class="mt-sm-5 mt-md-0 col-md-6 col-sm-12 u-mt-xs-5">
                        <img
                            src="images/project1.png"
                           
                            class="u-width-100per"
                        />
                    </div>
                </div>
            </div>
        </section>

      <div style="text-align: center; font-weight: bold;"><h3 class="fs-4 mt-5">ACADEMIC PROJECTS</h3></div>
      <br>
        
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="images/project2.gif" class="card-img-top" alt="face">
      <div class="card-body">
        <h5 class="card-title">Face Detection and Recognition</h5>
        <p class="card-text">It was a project which was designed to detect the face of a person even with spectacles, mask,etc.</p>
      </div>
      <div class="card-footer">
        <a href="face.php" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="images/project3.png" class="card-img-top" alt="dpad">
      <div class="card-body">
        <h5 class="card-title">Dpad</h5>
        <p class="card-text">This is a text editor with doodling features and adding emoticons while writing using bush/pen of different size,shape.</p>
      </div>
      <div class="card-footer">
        <a href="dpad.php" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="images/project4.png" class="card-img-top" alt="calmaura">
      <div class="card-body">
        <h5 class="card-title">CalmAura</h5>
        <p class="card-text">Many people are suffering from depression these days. To solve this problem we have designed a band to detect depression and it's level.</p>
      </div>
      <div class="card-footer">
        <a href="calmaura.php" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>
</div>



<div style="text-align: center; font-weight: bold;"><h3 class="fs-4 mt-5">INDIVIDUAL PROJECTS</h3></div>
      <br>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="images/project5.png" class="card-img-top" alt="donate">
      <div class="card-body">
        <h5 class="card-title">DonateKart</h5>
        <p class="card-text">People find it hard to search from one website to another if they are looking for NGO's to donate. Therfore to act as a medium between NGOs and donars, I have designed this website which provides one-stop solution.</p>
      </div>
      <div class="card-footer">
        <a href="donatekart.php" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="images/project6.png" class="card-img-top" alt="kidney">
      <div class="card-body">
        <h5 class="card-title">Chronic Kidney Disease analysis </h5>
        <p class="card-text">Many people suffer from chronic kidney disease.This website will take certain inputs from the user and apply the machine learning model to presict whether the person os suffering from this disease or not.</p>
      </div>
      <div class="card-footer">
        <a href="kidney.php" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/project7.png" class="card-img-top" alt="calmaura">
      <div class="card-body">
        <h5 class="card-title">Payment Gateway integration</h5>
        <p class="card-text">I have made a Payment gateway using PHP. This was build during my internship at Sparks Foundation. It includes all the basic methods of transaction such as UPI, credit cards, etc.</p>
      </div>
      <div class="card-footer">
        <a href="payment.php" class="btn btn-primary">View Details</a>
      </div>
    </div>
  </div>
</div>
<br>
  <?php require_once 'footer.php' ?>


        <script src="js/indexapp.js"></script>
    </body>
</html>
