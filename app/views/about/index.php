<!DOCTYPE html>
<!-- Html -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
    <!-- Common Head Components -->
    <?php require APPROOT . '/views/modules/head.php'; ?>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/globals.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/about.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/footer.css" />
</head>
<!-- Body -->

<body>
    <!-- Header -->
    <?php require APPROOT . '/views/modules/header.php'; ?>
    <!-- Main Wrapper -->
    <div class="main_wrapper">
    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Sri Lanka Stamps store started with an ambition of providing a one stop web resource for Sri Lankan.</p>
  
</div>

<h2 style="text-align:center">Our Services</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>We currently offer</h2>
        
        <p>Information on new & forthcoming philately . <br>
facility for you to buy philatelic products online.</p>
     
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>More to come, such as,</h2>
        
        <p>Background information and all technical details related to stamps issued in Sri Lanka.<br>
Postal Stationery of Ceylon & Sri Lanka.<br>
Research papers on Ceylon/Sri Lankan Philately.<br>
Publications and an e library.<br>
Postal History of Ceylon.</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>This resource is for you</h2>
        
        <p>This is a passionate project to benefit philatelists by philatelists.<br> The amateur web is still at its infancy.<br> You can shape the way it looks and the contents its offer.<br> Please send you suggestions to us.</p>
 
      </div>
    </div>
  </div>
</div>

</body>
</html>

    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/modules/footer.php'; ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="<?php echo URLROOT ?>/js/common.js" type="text/javascript"></script>
    <script src="<?php echo URLROOT ?>/js/about.js" type="text/javascript"></script>
</body>

</html>