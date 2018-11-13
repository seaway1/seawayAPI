
<!DOCTYPE html>
<html>
<head>
    <title>seaway</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--my local css file-->
    <link rel="stylesheet" href="css/styleindex.css" type="text/css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.13/css/mdb.min.css" rel="stylesheet">
    <!--  font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>

    </style>

</head>
<body>
<a name="top"></a>
    <head>

            <!-- Navbar -->
            <?php include("includes/nav.html"); ?>

            <!-- landing page -->

            <?php include("includes/pageintro.html"); ?>
            

    </head>

     <main>

   <div class="container">
            <!--Grid row-->
            <div class="row py-5">
              <!--Grid column-->
              <div class="col-md-12" id="ticketform">
<!--                  menu icons-->
                  <div class="col-md-12">
                        <?php include 'includes/ticketmenu.html';?>
                  </div>
         <div class="container">

             <!--    ticket form -->
            <div class="row py-5 col-md-12 text-center">
               


                <form>
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                 <label class="sr-only" for="inlineFormInput">Name</label>
                                <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
                            </div>
                            <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                            </div>
                            <div class="col-auto">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                <label class="form-check-label" for="autoSizingCheck">
                                Remember me
                                </label>
                            </div>
                            </div>
                            <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                            </div>
                     </form>
                </div>
        

            </div>
             <!--ticket form-->
         </div>
       

<!--      load forms here-->
                  <div class="col-md-10" #id="ticketforms">
                      


                  </div>
              </div>
              <!--Grid column-->
            </div>
            <!--    Newsletter-->

              <div class="row">
                  <div class="col-md-12 c blue-text card-body text-center text-uppercase font-weight-bold">
                      <h2>What is offered by Seaway Travellers? </h2>
                  </div>

                <?php include("includes/services.html"); ?>
              </div>
        </div>
            <!--Grid row-->

        </main>
        <!--Main Layout-->

    <div class="row container-fluid" style="margin-top: 20px;">
        <!--    contuct us form-->
        <div class="col-md-4">
            <a name="service"></a>
            <a name="help"></a>
            <?php include("includes/contactus.html"); ?>
            
        </div>


<!--        help us form-->
        <div class="col-md-8 mb-auto" id="help">

            <?php include("includes/help.html");?>

        </div>
    </div>

<!--back to top link-->
    <div class="row col-md-12 ">
        <a href="#top" class=" mr-auto ml-auto btn btn-outline-info rounded btn-block z-depth-0 my-4 waves-effect" style="width:200px; margin-top: auto; margin-bottom: auto;">back to top</a>
    </div>
<!--    footer -->
    <div style="margin-top: 20px;">

        <?php include("includes/footer.html");  ?>
    </div>
<!--    footer-->

</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
