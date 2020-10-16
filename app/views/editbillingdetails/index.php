<!DOCTYPE html>
<!-- Html -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <?php require APPROOT . '/views/modules/head.php'; ?>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/globals.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/editbillingdetails.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/footer.css" />

        

</head>
<!-- Body -->

<body>
    <!-- Header -->
    <?php require APPROOT . '/views/modules/header.php'; ?>
    <!-- Main Wrapper -->
    <div class="main_wrapper">
    <div id="main" role="main">

							
<div id="system-message-container">
</div>

<h1>Your account details</h1>
<div >
<div></div>
</div>
<div class="row">
<div class="col">
<form class="form-group" id="com-form-login" action="/index.php?option=com_virtuemart&amp;view=cart" method="post" name="com-login">
<fieldset >

<div  id="com-form-login-username">
<input class="form-control" class="form-control" type="text" name="username" size="18" title="Username" value="Username" onblur="if(this.value=='') this.value='Username';" onfocus="if(this.value=='Username') this.value='';">
</div>

<div  id="com-form-login-password">
<input class="form-control" id="modlgn-passwd" type="password" name="password" size="18" title="Password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';">
</div>

<div id="com-form-login-remember">
<input class="btn btn-primary" type="submit" name="Submit"  value="Login">
<label for="remember">Remember me</label>
<input  type="checkbox" id="remember" name="remember"  value="yes">
</div>
<div></div>
</fieldset>

<div>
<a href="" rel="nofollow">
Forgot your username?</a>
</div>
<div>
<a href="x" rel="nofollow">
Forgot your password?</a>
</div>

<div></div>
</form>
</div>
<div class="col">
<form  method="post" id="userForm" name="userForm"  action="https://www.stamps.lk/index.php/account">




<fieldset  class="form-group" >
<h2>Add/Edit Billing details	</h2>

<table >

<tbody>
<tr title="E-Mail">


<td >
<label for="email_field">
E-Mail <span>*</span>						
</label>
</td>
<td>
<input class="form-control" type="email" id="email_field" name="email" size="30" value="" maxlength="100" aria-required="true" required="required"> 					
</td>
</tr>
<tr title="Username">
<td>
<label for="username_field">
Username						</label>
</td>
<td>
<input class="form-control" type="text" id="username_field" name="username" size="30" value="" maxlength="25"> 					</td>
</tr>
<tr title="Displayed Name">
<td>
<label for="name_field">
Displayed Name						</label>
</td>
<td>
<input class="form-control" type="text" id="name_field" name="name" size="30" value="" maxlength="25"> 					</td>
</tr>
<tr title="Password">
<td>
<label for="password_field">
Password						</label>
</td>
<td>
<input class="form-control" type="password" id="password_field" name="password" size="30">
</td>
</tr>
<tr title="Confirm Password">
<td>
<label  for="password2_field">
Confirm Password						</label>
</td>
<td>
<input class="form-control" type="password" id="password2_field" name="password2" size="30" cl>
</td>
</tr>
</tbody>
</table>

</fieldset>



</form>
</div>
<div class="col">
<fieldset  class="form-group">
<legend>Billing details</legend>
<table >

<tbody>
<tr title="Company Name">
<td>
<label for="company_field">
Company Name						</label>
</td>
<td>
<input class="form-control" type="text" id="company_field" name="company" size="30" value="" maxlength="64"> 					</td>
</tr>
<tr title="Title">
<td >
</td>
<td>
</td>
</tr>
<tr title="First Name">
<td >
<label for="first_name_field">
First Name <span>*</span>						</label>
</td>
<td>
<input class="form-control" type="text" id="first_name_field" name="first_name" size="30" value=""> 					</td>
</tr>
<tr title="Middle Name">
<td >
<label for="middle_name_field">
Middle Name						</label>
</td>
<td>
<input class="form-control" type="text" id="middle_name_field" name="middle_name" size="30" value="" maxlength="32"> 					</td>
</tr>
<tr title="Last Name">
<td >
<label for="last_name_field">
Last Name <span>*</span>						</label>
</td>
<td>
<input class="form-control" type="text" id="last_name_field" name="last_name" size="30" value=""  maxlength="32" aria-required="true" required="required" /> 					
</td>
</tr>
<tr title="Address 1">
<td >
<label  for="address_1_field">
Address 1						</label>
</td>
<td>
<input  class="form-control" type="text" id="address_1_field" name="address_1" size="30" value="" maxlength="64"> 					</td>
</tr>
<tr title="Address 2">
<td>
<label  for="address_2_field">
Address 2						</label>
</td>
<td>
<input class="form-control" type="text" id="address_2_field" name="address_2" size="30" value="" maxlength="64"> 					</td>
</tr>
<tr title="Zip / Postal Code">
<td >
<label  for="zip_field">
Zip / Postal Code						</label>
</td>
<td>
<input class="form-control" type="text" id="zip_field" name="zip" size="30" value="" maxlength="32"> 					</td>
</tr>
<tr title="City">
<td>
<label  for="city_field">
City						</label>
</td>
<td>
<input class="form-control" type="text" id="city_field" name="city" size="30" value="" maxlength="32"> 					</td>
</tr>
<tr title="Country">
<td >

</td>


<tr title="Phone">
<td >
<label  for="phone_1_field">
Phone						</label>
</td>
<td>
<input  class="form-control" type="text" id="phone_1_field" name="phone_1" size="30" value="" maxlength="32"> 					</td>
</tr>
<tr title="Mobile phone">
<td>
<label  for="phone_2_field">
Mobile phone						</label>
</td>
<td>
<input class="form-control" type="text" id="phone_2_field" name="phone_2" size="30" value="" maxlength="32"> 					</td>
</tr>
</tbody>
</table>
<input class="btn btn-primary" type="submit" name="Submit"  value="submit">
</fieldset>
</div>
</div>










</div>

    
    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/modules/footer.php'; ?>
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT ?>/js/common.js" type="text/javascript"></script>
    <script src="<?php echo URLROOT ?>/js/editbillingdetails.js" type="text/javascript"></script>
</body>

</html>