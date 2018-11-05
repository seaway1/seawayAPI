
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
</head>
<body>
    <head>

            <!-- Navbar -->
            <?php include("includes/nav.html"); ?>
            
            <?php include("includes/pageintro.html"); ?>
            

    </head>

     <main>

         <div class="container row">
             <!--    ticket form -->
             <?php include ("includes/ticketform.php");?>
             <!--ticket form-->
         </div>
          <div class="container">
            <!--Grid row-->
            <div class="row py-5">
              <!--Grid column-->
              <div class="col-md-12 text-center">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
              <!--Grid column-->
            </div>
            <!--    Newsletter-->
              <div>

                <?php include("includes/services.html"); ?>
              </div>
        </div>
            <!--Grid row-->
       
        </main>
        <!--Main Layout-->

    <div class="row container-fluid" style="margin-top: 20px;">
        <!--    contuct us form-->
        <div class="col-md-4">
            <?php include("includes/contactus.html"); ?>
            
        </div>


<!--        help us form-->
        <div class="col-md-8 mb-auto">
            <?php include("includes/help.html");?>

        </div>
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
