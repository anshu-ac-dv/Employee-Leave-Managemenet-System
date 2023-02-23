<!doctype html>
<html lang="en">
  <head>
    <title>Home || Casinal</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <script>
      function check()
      {
        if (document.getElementById("name").value==""){
          alert("First Name Field is Empty");
          return false;
        }
        if (document.getElementById("lname").value=="") {
          alert("Last Name Field is Empty.");
          return false;
        }
        if (document.getElementById("city").value=="") {
          alert("City Field is Empty.");
          return false;
        }
      }
    </script>

  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <?php
       include 'Header.php';
       include 'Header2.php';
    ?>
    <div class="container-fluid p-5">
      <div class="row">
        <div class="col-sm-8 mt-5">
          <p class="fs-1">Welcome To Casinal</p>
          <p class="lh-base me-5">Confused on which course to take? I have got you covered. Browse courses and find out the best course for you. Its free! Code With Harry is my attempt to teach basics and those coding techniques to people in short time which took me ages to learn.</p>
          <button type="button" class="btn btn-dark">Get Start</button>
          <button type="button" class="btn btn-info ms-2">Explore more</button>

        </div>
        <div class="col-sm-4 mt-5">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_1acs9bwi.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
        </div>
      </div>
    </div>

    <p class="h3 text-center mt-1 mb-1">Populor Courses</p>

      <div class="container-fluid p-5">

        <div class="row justify-content-center mb-0">
          <div class="col-4">
          <div class="card shadow" style="width: 17rem;">
            <img src="web.jpg" class="card-img-top rounded float" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Web Devlopment</h5>
                <p class="card-text">Web Devlopment is one of the most demanded languages in the job market. Surprisingly, it is equally easy to learn and master Web devlopment.</p>
                <a href="Web.php" class="btn btn-info rounded-pill">Start Learning</a>
              </div>
            </div>
          </div>

          <div class="col-4">
          <div class="card shadow" style="width: 17rem;">
            <img src="android.jpg" class="card-img-top rounded float" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Android Devlopment</h5>
                <p class="card-text">Java is one of the most demanded programming languages in the job market. Surprisingly, it is equally easy to learn Android Devlopment.</p>
                <a href="Android.php" class="btn btn-info rounded-pill">Start Learning</a>
              </div>
            </div>
          </div>

          <div class="col-4">
          <div class="card shadow" style="width: 17rem;">
            <img src="python.jpg" class="card-img-top rounded float" alt="...">
              <div class="card-body text-center">
                <h5 class="card-title">Python Programming</h5>
                <p class="card-text">Python is one of the most demanded programming languages in the job market. Surprisingly, it is equally easy to learn and master Python.</p>
                <a href="Python.php" class="btn btn-info rounded-pill">Start Learning</a>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      <p class="h3 text-center mb-1">Send me a Message</p>

        <div class="container-fluid p-5">
          <div class="row">
              <div class="col-sm-6 mt-0">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_eroqjb7w.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop  autoplay></lottie-player>
              </div>
              <div class="col-sm-5 mt-0">
                  <div class="card">
                      <form class="row g-2 justify-content-center mt-4" >
                          <div class="col-md-4">
                            <label class="form-label">First name*</label>
                            <input type="text" class="form-control" id="name">
                          </div>
                          <div class="col-md-4">
                            <label class="form-label">Last name*</label>
                            <input type="text" class="form-control" id="lname">
                          </div>
                          <div class="col-md-5">
                            <label class="form-label">City*</label>
                            <input type="text" class="form-control" id="city">
                          </div>
                          <div class="col-md-3">
                            <label class="form-label">State*</label>
                              <select class="form-select" id="validationCustom04">
                                <option selected disabled value="">Choose...</option>
                                <option>Bihar</option>
                                <option>Utter Predesh</option>
                                <option>New Delhi</option>
                                <option>Punjab</option>
                                <option>Kolkata</option>
                                <option>Goa</option>
                                <option>Other</option>
                              </select>
                          </div>
                          <div class="col-md-8">
                              <label class="form-label">Message*</label>
                              <textarea class="form-control" aria-label="With textarea"></textarea>
                          </div>
                          <div class="col-8 mt-4 mb-4">
                            <button class="btn btn-info rounded-pill" type="submit" onclick="return check()">Submit form</button>
                          </div>
                      </form>
                  </div>
                </div>
          </div>
        </div>

        <?php
              include 'Footer.php';
        ?>

  </body>
</html>