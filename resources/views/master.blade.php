<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->

  <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}"> -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/logopku.png" type="image/x-icon">
  <link rel="icon" href="images/logopku.png" type="image/x-icon"> 

</head>

<body>

  <!-- preloader start -->
  <div class="preloader">
    <img src="images/loader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">

  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
         <a class="navbar-brand" >
          <img src="images/logopku.png" style="width: 100px; max-height: 73px;"  alt="logo" >
           </a>
          <a class="navbar-brand" >
            <img src="images/logoUR.png" style="width: 55px; height: 55px;" alt="logo"> </a>
           
<a class="navbar-brand" >

          <img src="images/logokkn.png" style="width: 60px; height: 60px; " alt="logo" > </a>
       
       
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.html">Profil</a>
            </li>
           
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Layanan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="teacher.html">KTP</a>
                <a class="dropdown-item" href="teacher-single.html">Teacher Single</a>
                <a class="dropdown-item" href="notice.html">Notice</a>
                <a class="dropdown-item" href="notice-single.html">Notice Details</a>
                <a class="dropdown-item" href="research.html">Research</a>
                <a class="dropdown-item" href="scholarship.html">Scholarship</a>
                <a class="dropdown-item" href="course-single.html">Course Details</a>
                <a class="dropdown-item" href="event-single.html">Event Details</a>
                <a class="dropdown-item" href="blog-single.html">Blog Details</a>
              </div>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.html">CONTACT</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
@yield('body')

<!-- footer -->

<footer>
  

  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            © Made By KKN Universitas Riau</p>
        </div>
        
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->


</body>
</html>