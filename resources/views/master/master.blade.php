<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
 @yield('mainTitle')


    <!-- Bootstrap core CSS -->
    <link href="frontEnd/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="frontEnd/home/assets/css/fontawesome.css">
    <link rel="stylesheet" href="frontEnd/home/assets/css/templatemo-stand-blog.css">
    <link rel="stylesheet" href="frontEnd/home/assets/css/owl.css">
<!--

TemplateMo 551 Stand Blog

https://templatemo.com/tm-551-stand-blog

-->
  </head>

  <body>



    <!-- Header -->
@include('master.include.header')

<!-- Content -->

@yield('mainContent')

@yield('aboutContent')

@yield('blogContent')

@yield('contactContent')

@yield('detailsContent')

<!-- footer -->
@include('master.include.footer')


    <!-- Bootstrap core JavaScript -->
    <script src="frontEnd/home/vendor/jquery/jquery.min.js"></script>
    <script src="frontEnd/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="frontEnd/home/assets/js/custom.js"></script>
    <script src="frontEnd/home/assets/js/owl.js"></script>
    <script src="frontEnd/home/assets/js/slick.js"></script>
    <script src="frontEnd/home/assets/js/isotope.js"></script>
    <script src="frontEnd/home/assets/js/accordions.js"></script>

    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>
