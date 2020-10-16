<!DOCTYPE html>
<!-- Html -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
    <!-- Common Head Components -->
    <?php require APPROOT . '/views/modules/head.php'; ?>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/globals.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/orders.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/footer.css" />
</head>
<!-- Body -->

<body>
    <!-- Header -->
    <?php require APPROOT . '/views/modules/header.php'; ?>
    <!-- Main Wrapper -->
    <div class="main_wrapper">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="body">



<div class="container main_container">
    
    <div class="row">
        <div class="col">
    
        </div>
        <div class="col list-order">
            <p class="alert alert-primary">
                List Order
            </p>
        </div>
        <div class="col">
            
        </div>
    </div>



    <div class="row">
        <div class="col">
            <p class="alert alert-warning">Track My order</p>
        </div>
        
    </div>


    <div class="row">
        <div class="col">
           <input require class="form-control" type="text" placeholder="Enter Order Number"/>
        </div>
        <div class="col">
            <input require class="form-control" type="password" placeholder="Enter Secret Key" />
        </div>
        <div class="col">
           <input require class="btn btn-primary mb-2" type="button" value="See Order" />
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="alert alert-warning">If you are already registered, Please Login...</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <input require class="form-control" type="text" placeholder="Enter Username" name="" id="">
        </div>
        <div class="col">
            <input require class="form-control" type="password" placeholder="Enter Password" name="" id="">
        </div>
        <div class="col">
            <input require class="btn btn-primary mb-2" type="button" value="Login">
        </div>
    </div>

    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/modules/footer.php'; ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?php echo URLROOT ?>/js/common.js" type="text/javascript"></script>
    <script src="<?php echo URLROOT ?>/js/orders.js" type="text/javascript"></script>
</body>

</html>