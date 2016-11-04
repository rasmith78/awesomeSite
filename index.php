<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>AwesomeSite</title>
    <?php require_once("lib/partials/headUtils.php");?>
  </head>
  <body>

        <div class="jumbotron">
        <h1>My Awesome Site</h1>
        <p>
          Welcome to my website
        </p>

        <div class="row">
          <div class="col-md-4">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </div>
         </div>

          <div class="row">
            <div class="col-md-4">
           <i class="fa fa-envelope-o" aria-hidden="true"></i>
          </div>
        </div>

          <div class="row">
            <div class="col-md-4">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </div>
         </div>
         </div>

      <div class="container">
      <form class="form-inline">
      <div class="form-group">
       <label for="exampleInputName2">Name</label>
       <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
      </div>
      <div class="form-group">
       <label for="exampleInputEmail2">Email</label>
       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
      </div>
      <button type="submit" class="btn btn-default">Send invitation</button>
      </form>
      </div>

      <h1>Our Team<h1>

      <div class="container">
      <div class="col-md-4">
      <img src="lib/images/img2.jpg" class="img-responsive img-circle">
       </div>
      </div>

      <div class="container">
      <div class="col-md-4">
      <img src="lib/images/img2.jpg" class="img-responsive img-circle">
       </div>
      </div>

      <div class="container">
      <div class="col-md-4">
      <img src="lib/images/img2.jpg" class="img-responsive img-circle">
       </div>
      </div>
    </div>

  </body>
</html>
