<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container mt-5">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5"><center>New Instractor</center></h3>
        <?php
            if(isset($_GET['errors']))
                $errors = json_decode($_GET['errors'], true);
            if(isset($_GET['data']))
                $data = json_decode($_GET['data'], true);   
            if(isset($_GET['con']))
                 $con = json_decode($_GET['con'], true);   
            ?>
        <form action="add.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">first name</label>
                <input name="First" type="test" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your first name"
                 value=<?php
                        if(isset($data) && isset($data['First']))
                            echo $data['First']; 
                    ?>>
                <small  class="form-text text-danger">
                   <?php
                        if(isset($errors) && isset($errors['First']))
                            echo $errors['First']; 
                    ?>
                </small>
            </div>
            <div class="form-group">
                <label for="lastname">last name</label>
                <input name="last" type="test" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter your last name" 
                value=<?php
                        if(isset($data) && isset($data['last']))
                            echo $data['last']; 
                    ?>>
                <small id="conHelp" class="form-text text-danger">
                <?php
                        if(isset($errors) && isset($errors['last']))
                            echo $errors['last']; 
                    ?>
                </small>
            </div>

            <div class="form-group">
                <label for="mail">Email</label>
                <input name="email" type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Enter your last name"
                 value=<?php
                        if(isset($data) && isset($data['email']))
                            echo $data['email']; 
                    ?>>
                <small  class="form-text text-danger">
                <?php
                        if(isset($errors) && isset($errors['email']))
                            echo $errors['email']; 
                    ?>
                </small>
            </div>
            <div class="row">
                
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="g"
                      id="femaleGender"
                      value="Female"
                      checked
                    />
                    <label class="form-check-label" for="femaleGender" >Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="g"
                      id="maleGender"
                      value="Male"
                    />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                
                  </div>

                </div>

            <div class="form-group">
                <label for="pass">Password</label>
                <input name="pass" type="password" class="form-control" id="pass" aria-describedby="emailHelp" placeholder="Enter your last name" value="">
                <small  class="form-text text-danger">
                <?php
                        if(isset($errors) && isset($errors['pass']))
                            echo $errors['pass']; 
                    ?>
                </small>
            </div>

            <div class="form-group">
                <label for="passcon">Password Confermation</label>
                <input name="passcon" type="password" class="form-control" id="passcon" aria-describedby="emailHelp" placeholder="Enter your last name"
                >
                <small  class="form-text text-danger">
                <?php
                        if(isset($errors) && isset($errors['passcon']))
                            echo $errors['passcon']; 

                        if(isset($con) && isset($con['passcon']))
                            echo $con['passcon'];    
                    ?>
                </small>
            </div>

            <div class="form-check form-check-inline">
            <label for="skill">Skills : </label>
            <br>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="option1">
            <label class="form-check-label" for="inlineCheckbox1">option1</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="option2">
            <label class="form-check-label" for="inlineCheckbox2">option2</label>
            </div>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" name="option3">
            <label class="form-check-label" for="inlineCheckbox3">option3 </label>
            </div>

            <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                      
                  <input class="btn btn-secondary btn-lg" type="" name="ch" value="chanGe" />

                  </div>

                </div>
            
           

                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="text" id="check" name="robot" class="form-control form-control-lg" 
                    value=<?php
                        if(isset($data) && isset($data['robot']))
                            echo $data['robot']; 
                    ?> >
                    <small  class="form-text text-danger">
                <?php
                        if(isset($errors) && isset($errors['robot']))
                            echo $errors['robot']; 
                    ?>
                </small>
                  </div>

                </div>
              </div>


            <button type="submit" class="btn btn-primary btn-block">ADD</button>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>