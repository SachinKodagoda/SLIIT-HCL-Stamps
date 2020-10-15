<!DOCTYPE html>
<!-- Html -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php require APPROOT . '/views/modules/head.php'; ?>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/globals.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/sovenir.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/footer.css" />
</head>
<!-- Body -->

<body>
    <!-- Header -->
    <?php require APPROOT . '/views/modules/header.php'; ?>
    <!-- Main Wrapper -->
    <div class="main_wrapper">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
<<<<<<< HEAD
                    <img class="card-img-top" src="<?php echo URLROOT ?>/img/home/stamp1.jpg" alt="Card image" id="myImg" style="width:100%">
                    <!-- image model popup -->
                    <div id="myModal" class="modal">
                        <span class="close">&times;</span>
                        <img class="modal-content" id="img01">
                        <div id="caption"></div>
=======
                    <img class="card-img-top" src="<?php echo URLROOT ?>/img/home/stamp1.jpg" alt="Card image"  id="myImg" style="width:100%">
                    <!-- image model popup -->
                    <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
>>>>>>> 2b894ff4fe76544c805f30aae6d584defc9b2cc1
                    </div>

                    <div class="card-body">
                        <div class="stampTitle"> Mahapola 5<sup>th</sup> aniversary</div>
<<<<<<< HEAD

=======
                            
>>>>>>> 2b894ff4fe76544c805f30aae6d584defc9b2cc1
                        <div class="starCover">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
<<<<<<< HEAD
                        <div class="money previous stampTitle"><del>$10.00</del> $15.00</div>

                        <div class="addcartbtn stampTitle">
                            <button type="button" class="btn btn-primary ">Add to Cart</button>
                        </div>
                    </div>
=======
                         <div class="money previous stampTitle"><del>$10.00</del> $15.00</div> 

                        <div class="addcartbtn stampTitle">
                            <button type="button" class="btn btn-primary ">Add to Cart</button>
                        </div>  
                    </div>   
>>>>>>> 2b894ff4fe76544c805f30aae6d584defc9b2cc1
                </div>
            </div>
            <div class="col-md-8">
                <div class="print">
                    <i class="fa fa-print" onclick="printFunction()" style="font-size:20px;color:red"></i>
                </div>
<<<<<<< HEAD
                <H1 class="leftHead">Description</H1>
=======
            <H1 class="leftHead">Description</H1>
>>>>>>> 2b894ff4fe76544c805f30aae6d584defc9b2cc1
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Country</td>
                            <td>Sri Lanka</td>
                        </tr>
                        <tr>
                            <td>Year</td>
                            <td>1976</td>
                        </tr>
                        <tr>
                            <td>SG No</td>
                            <td>632</td>
                        </tr>
                        <tr>
                            <td>Value</td>
                            <td>Rs 2.25</td>
                        </tr>
                        <tr>
                            <td>Theam</td>
                            <td>Architecture, Statue of Liberty</td>
                        </tr>
                    </tbody>
                </table>

                <H1 class="leftHead">Review</H1>

                <form action="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-10">
<<<<<<< HEAD
                                <textarea class="form-control" id="address1" name="address1" placeholder="Add a reviews" rows="3"></textarea>
=======
                                <textarea class="form-control" id="address1" name="address1" placeholder="Add a reviews"  rows="3"></textarea>
>>>>>>> 2b894ff4fe76544c805f30aae6d584defc9b2cc1
                            </div>
                            <div class="col-md-2 addbtn">
                                <button type="button" class="btn btn-primary ">Add</button>
                            </div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ravindu</td>
                                        <td>Customer review</td>
                                    </tr>
<<<<<<< HEAD

                                </tbody>
                            </table>
                        </div>

=======
                                    
                                </tbody>
                            </table>
                        </div>
                        
>>>>>>> 2b894ff4fe76544c805f30aae6d584defc9b2cc1
                    </div>
                </form>
            </div>
        </div>
<<<<<<< HEAD

=======
        
>>>>>>> 2b894ff4fe76544c805f30aae6d584defc9b2cc1
    </div>
    <!-- Footer -->
    <?php require APPROOT . '/views/modules/footer.php'; ?>
    <!-- JavaScript -->
    <script>
        function printFunction() {
<<<<<<< HEAD
            window.print();
        }

        //    popup

        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>

=======
        window.print();
        }

    //    popup

    var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
    </script>
 
>>>>>>> 2b894ff4fe76544c805f30aae6d584defc9b2cc1
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT ?>/js/common.js" type="text/javascript"></script>
</body>

</html>