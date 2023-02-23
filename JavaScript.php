<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <script>
        function check()
        {
            if (document.getElementById("email").value=="") {
                alert("Email field id Empty");
                return false;
            }
            if (document.getElementById("password").value=="") {
                alert("Password Field Is Empty");
                return false;
            }
            if (document.getElementById("address").value==""){
                alert("Address field is empty..");
                return false;
            }   
            if (document.getElemmentById("city").value==""){
                alert("City Part is empty");
                return false;
            }  
        }
    </script>

  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container">
        <form class="row g-3 mt-5 p-5 shadow">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="col-6">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="address">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="city">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" onclick="return check()">Sign in</button>
            </div>
        </form>
    </div>

  </body>
</html>