<?php
    include_once "./assect/app/function.php";
    include_once "./assect/app/process.php";
    include_once "./assect/app/query.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        
        <div class="w-50 mx-auto my-5 rounded shadow">
            <div class="card">
                <div class="card-header">
                    <h2>Create an Account</h2>
                </div>
                <div class="card-body">
                    
                  <!-- start-form -->
                    <form action="" method="POST">

                        <?php
                            if(isset($msg)) {
                                echo $msg;
                            }
                        ?>
                        
                        <!-- name field -->
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control" type="text" name="name" id="name" value="<?php echo old('name')?>">
                            <div class="text-danger">
                                <?php
                                    if(isset($error['name'])){
                                        echo $error['name'];
                                    }
                                ?>
                            </div>
                        </div>

                        <!-- email field -->
                        <div class="form-group">
                            <label for="email">email</label>
                            <input class="form-control" type="text" name="email" id="email" value="<?php echo old('email') ?>">
                            <div class="text-danger">
                                <?php
                                    if(isset($error['email'])){
                                        echo $error['email'];
                                    }
                                ?>
                            </div>
                        </div>

                        <!-- cell field -->
                        <div class="form-group">
                            <label for="cell">cell</label>
                            <input class="form-control" type="tel" name="cell" id="cell" value="<?php echo old('cell') ?>">
                            <div class="text-danger">
                                <?php
                                    if(isset($error['cell'])){
                                        echo $error['cell'];
                                    }
                                ?>
                            </div>
                        </div>

                        <!-- Location field -->
                        <div class="form-group">
                            <label for="location">Location</label>
                            <select class="form-control" name="location" id="location">
                                <option value="">Location</option>
                                <option <?php echo old('location') == "monohardi" ? 'selected' : ''?> value="monohardi">Monohardi</option>
                                <option <?php echo old('location') == "shibpur" ? 'selected' : ''?> value="shibpur">Shibpur</option>
                                <option <?php echo old('location') == "polash" ? 'selected' : ''?> value="polash">Polash</option>
                                <option <?php echo old('location') == "gurashal" ? 'selected' : ''?> value="gurashal">Gurashal</option>
                            </select>
                            <div class="text-danger">
                                <?php
                                    if(isset($error['location'])){
                                        echo $error['location'];
                                    }
                                ?>
                            </div>
                        </div>
                        
                        <!-- gender field -->
                        <div class="form-group">
                            <input <?php echo old('gender')== 'male' ? 'checked' : ''?> type="radio" name="gender" id="male" value="male"> <label for="male">Male</label>
                            <input <?php echo old('gender')== 'female' ? 'checked' : ''?> type="radio" name="gender" id="female" value="female"> <label for="female">Female</label>
                            <div class="text-danger">
                                <?php
                                    if(isset($error['gender'])){
                                        echo $error['gender'];
                                    }
                                ?>
                            </div>
                        </div>
                        <!-- username field -->
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username" id="username" value="<?php echo old('username') ?>">
                            <div class="text-danger">
                                <?php
                                    if(isset($error['username'])){
                                        echo $error['username'];
                                    }
                                ?>
                            </div>
                        </div>

                        <!-- password field -->
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input class="form-control" type="password" name="password" id="password" value="<?php echo old('password') ?>">
                            <div class="text-danger">
                                <?php
                                    if(isset($error['password'])){
                                        echo $error['password'];
                                    }
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="crmpass">Confarm Password</label>
                            <input class="form-control" type="password" name="crmpass" id="crmpass" value="<?php echo old('crmpass') ?>">
                            <div class="text-danger">
                                <?php
                                    if(isset($error['conpass'])){
                                        echo $error['conpass'];
                                    }
                                ?>
                            </div>
                        </div>
                        <!-- END password field -->

                        <div class="form-group">
                            <input type="checkbox" id="agree" name="agree"> <label for="agree">I agree treams & condation.</label>
                            <div class="text-warning">
                                <?php
                                    if(isset($error['agree'])){
                                        echo $error['agree'];
                                    }
                                ?>
                            </div>   
                        </div>

                        <!-- submit field -->
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Create" name = "submit">
                        </div>
                    </form>
                  <!-- end form -->
                </div>
                <div class="card-footer">
                    <a href="#">Already I have an account.</a>
                </div>
            </div>
        </div>




    </div>






    <!-- bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    <script>

    </script>

</body>
</html>