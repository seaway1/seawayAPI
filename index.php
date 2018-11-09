
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

      <!-- ticket form style -->
          <style>   
        
        #body .fa-2px{
            font-size: 2em;
        }
        #body .fa{
            position: relative;
            display:table-cell;
            width: 60px;
            height: 36px;
            text-align: center;
            vertical-align: middle;
            font-size: 20px;
        }
        #body .main-menu:hover,
        #body nav.main-menu.expanded{
            width: 250px;
            overflow: visible;

        }
        #body .main-menu{
            background: #212121;
            border-right: 1px solid white;
            position:absolute;
            top:0;
            bottom:0;
            height:100%;
            left:0;
            width:60px;
            overflow: hidden;
            transition: width 0.5s linear;
            z-index: 1000;
            -webkit-transform: translateZ(0) scale(1,1);
        }
        #body .main-menu > li{
            margin:7px 0;

        }
        #body .main-menu li{
            position: relative;
            display: block;
            width: 250px;
        }
        #body .main-menu li a{
            position: relative;
            display: table;
            border-collapse: collapse;
            border-spacing: 0;
            color: #999;
            font-family: Arial;
            font-size:14px;
            text-decoration: none;
            -webkit-transform: translateZ(0) scale(1,1);
            transition: all .1s linear;
        }
        #body .main-menu .nav-icon{
            position: relative;
            display:table-cell;
            width: 60px;
            height:36px;
            text-align: center;
            vertical-align: middle;
            font-size: 18px;
        }
        #body .main-menu .nav-text{
            position: relative;
            display:table-cell;
            vertical-align:middle;
            width:190px;
            font-family: tahoma;

        }
        #body .main-menu li.logout{
            position: absolute;
            left: 0;
            bottom: 0;
        }
        #body .no-touch .scrollable.hover{
            overflow-y: hidden;

        }
        #body .no-touch .scrollable.hover:hover{
            overflow-y: auto;
            overflow: visible;
        }
        #body a:hover, a:focus{
            text-decoration: none;
        }
        #body nav{
            user-select: none;
        }
        #body nav ul, nav li{
            outline: 0;
            margin: 0;
            padding: 0;
        }
        #body .main-menu li:hover a,
        #body nav.main-menu li.active a,
        #body .dropdown-menu li a:hover,
        #body .dropdown-menu li a:focus,
        #body .dropdown-menu li a:hover,
        #body .dropdown-menu .active a,
        #body .dropdown-menu .active a:hover,
        #body .dropdown-menu .active a:focus,
        #body .no-touch .dashboard-page nav.dashboard-menu ul li:hover a,
        #body .no-touch .dashboard-page nav.dashboard-menu ul li.active a{
            color: white;
            background-color: #5fa2db;

        }
        .area{
            float: left;
            background: #e2e2e2;
            width: 100%;
            height:100%;
        }

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

             <!--    ticket form -->
            <div class="row py-5 col-md-12 text-center">
                <p>form to get ticket/book here</p>

            </div>
             <!--ticket form-->
         </div>
          <div class="container">
            <!--Grid row-->
            <div class="row py-5">
              <!--Grid column-->
              <div class="col-md-12 text-center">
                <?php include 'includes/ticketmenu.html'; ?>
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
