<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio">
    <meta name="author" content="Ahmad Abu Hasan">
    <meta name="keyword" content="Android, Java, XML, Kotlin, HTML, CSS, JavaScript, PHP, MySQL, Developer">

    <title>Ahmad Abu Hasan</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" sizes="32x32" href="../assets/img/favicon-32x32.png">
    <link rel="icon" sizes="16x16" href="../assets/img/favicon-16x16.png">
    <link rel="manifest" href="../assets/img/site.webmanifest">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/prettyPhoto.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Header -->
    <header id="header">
        <div class="intro">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="intro-text">
                            <h1>Hello, I'm <span class="name">Ahmad Abu Hasan</span></h1>
                            <p>IT Support | Programmer</p>
                            <a href="#about" class="btn btn-default btn-lg page-scroll">About Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <div id="nav">
        <nav class="navbar navbar-custom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">
                        <i class="fa fa-code"></i> <span class="light">Ahmad Abu Hasan</span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#skills">Skills</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#portfolio">Portfolio</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#resume">Resume</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </div>

    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="section-title text-center center">
                <h2>About Me</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-12 text-center"><img src="../assets/img/me.png" alt="Ahmad Abu Hasan" class="img-responsive"></div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="about-text">
                        <p style="text-align:center; font-size:25px;">while ( ! (succed = try( ) ) );</p>
                        <p style="text-align:center; font-size:25px;">"Everybody should learn to program a computer, <br>
                            because it teaches you how to think." - Steve Jobs</p>
                        <p class="text-center">
                            <a class="btn btn-primary btn-lg" href="https://bit.ly/CVAhmadAbuHasan" target="_blank"><i class="fa fa-download"></i> Download Resume</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <div id="skills" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Skills</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 skill">
                    <span class="chart" data-percent="80">
                        <span class="percent">80</span>
                    </span>
                    <h4>Java</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill">
                    <span class="chart" data-percent="70">
                        <span class="percent">70</span>
                    </span>
                    <h4>XML</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill">
                    <span class="chart" data-percent="60">
                        <span class="percent">60</span>
                    </span>
                    <h4>Kotlin</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill">
                    <span class="chart" data-percent="70">
                        <span class="percent">70</span>
                    </span>
                    <h4>HTML</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill">
                    <span class="chart" data-percent="70">
                        <span class="percent">70</span>
                    </span>
                    <h4>PHP</h4>
                </div>
                <div class="col-md-4 col-sm-6 skill">
                    <span class="chart" data-percent="70">
                        <span class="percent">70</span>
                    </span>
                    <h4>MySQL</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Section -->
    <div id="portfolio">
        <div class="container">
            <div class="section-title text-center center">
                <h2>Portfolio</h2>
                <hr>
            </div>
            <div class="categories">
                <ul class="cat">
                    <li>
                        <ol class="type">
                            <li><a href="#" data-filter="*" class="active">All</a></li>
                            <li><a href="#" data-filter=".web">Web Development</a></li>
                            <li><a href="#" data-filter=".app">Mobile Development</a></li>
                            <!-- <li><a href="#" data-filter=".branding">Branding</a></li> -->
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="portfolio-items">
                    <!-- 1 -->
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="../assets/img/portfolio/01-large.png" title="https://github.com/eby8zevin/PhpMySQLi-MarketPlace" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Marketplace</h4>
                                        <small>Web Development</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <img src="../assets/img/portfolio/01-small.png" class="img-responsive" alt="https://blackpink-marketplace.000webhostapp.com">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="col-sm-6 col-md-3 col-lg-3 app">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="../assets/img/portfolio/02-large.gif" title="https://github.com/eby8zevin/Android-QRBarcode" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>QRBarcode</h4>
                                        <small>Mobile Development</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-android"></i>
                                    </div>
                                    <img src="../assets/img/portfolio/02-small.gif" class="img-responsive" alt="https://github.com/eby8zevin/Android-QRBarcode/actions/workflows/android.yml">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="../assets/img/portfolio/03-large.png" title="https://github.com/eby8zevin/PhpMySQLi-MarketPlace/tree/master/admin" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Guest Book</h4>
                                        <small>Web Development</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <img src="../assets/img/portfolio/03-small.png" class="img-responsive" alt="https://blackpink-marketplace.000webhostapp.com/admin">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="col-sm-6 col-md-3 col-lg-3 app">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="../assets/img/portfolio/04-large.png" title="https://github.com/eby8zevin/Android-PointOfSale" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Point Of Sale</h4>
                                        <small>Mobile Development</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-android"></i>
                                    </div>
                                    <img src="../assets/img/portfolio/04-small.png" class="img-responsive" alt="https://github.com/eby8zevin/Android-PointOfSale/actions/workflows/android_build.yml">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 5 -->
                    <div class="col-sm-6 col-md-3 col-lg-3 app">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="./assets/img/portfolio/05-large.png" title="https://github.com/eby8zevin/android-VolleyGson" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Volley GSON</h4>
                                        <small>Mobile Development</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-android"></i>
                                    </div>
                                    <img src="./assets/img/portfolio/05-small.gif" class="img-responsive" alt="https://github.com/eby8zevin/android-VolleyGson/actions/workflows/android.yml">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 6 -->
                    <div class="col-sm-6 col-md-3 col-lg-3 branding web">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="./assets/img/portfolio/06-large.png" title="https://github.com/eby8zevin/notes-app-back-end" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Notes App</h4>
                                        <small>Back End</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-database"></i>
                                    </div>
                                    <img src="./assets/img/portfolio/06-small.png" class="img-responsive" alt="https://nodejs-notes-app-backend.herokuapp.com/notes">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 7 -->
                    <div class="col-sm-6 col-md-3 col-lg-3 app">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="./assets/img/portfolio/07-large.png" title="https://github.com/eby8zevin/unity-ARMarker" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>AR Fruits</h4>
                                        <small>Mobile Development</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-android"></i>
                                    </div>
                                    <img src="./assets/img/portfolio/07-small.gif" class="img-responsive" alt="https://github.com/eby8zevin/unity-ARMarker/releases/tag/1.0">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- 8 -->
                    <div class="col-sm-6 col-md-3 col-lg-3 web">
                        <div class="portfolio-item">
                            <div class="hover-bg">
                                <a href="./assets/img/portfolio/08-large.png" title="https://github.com/eby8zevin/JavaScript-BookshelfAPI" rel="prettyPhoto">
                                    <div class="hover-text">
                                        <h4>Bookshelf API</h4>
                                        <small>Back End</small>
                                        <div class="clearfix"></div>
                                        <i class="fa fa-database"></i>
                                    </div>
                                    <img src="./assets/img/portfolio/08-small.png" class="img-responsive" alt="https://javascript-bookshelfapi.herokuapp.com/books">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Achievements Section -->
    <div id="achievements" class="text-center">
        <!-- <div class="container">
            <div class="section-title center">
                <h2>Github Stats</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="200ms">
                    <div class="achievement-box">
                        <span class="count">7038</span>
                        <h4>Total Contributions</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="400ms">
                    <div class="achievement-box">
                        <span class="count">142</span>
                        <h4>Current Streak</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="600ms">
                    <div class="achievement-box">
                        <span class="count">142</span>
                        <h4>Longest Streak</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="800ms">
                    <div class="achievement-box">
                        <span class="count">6</span>
                        <h4>Years of Experience</h4>
                    </div>
                </div>
            </div>
        </div> -->
        <marquee width="100%">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/androidstudio/androidstudio-original-wordmark.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/android/android-original-wordmark.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/jetbrains/jetbrains-original.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/java/java-original-wordmark.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original-wordmark.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vscode/vscode-original-wordmark.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original-wordmark.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original-wordmark.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original-wordmark.svg" height="100" hspace="25">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/heroku/heroku-original-wordmark.svg" height="100" hspace="25">
        </marquee>
    </div>

    <!-- Resume Section -->
    <div id="resume" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Experience</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <h4>Present<br>
                                    -<br>
                                    Sep 2021</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Freelancer</h4>
                                    <h6>upwork.com & projects.co.id</h6>
                                    <h4 class="subheading">Programmer</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>I work as Android Developer. I have passion fot the perfect Android Application, interesting and easy to use interfaces. I'm focused, dedicated, hard-working and willing to learn in a changing and challenging environment.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Apr 2022<br>
                                    -<br>
                                    Jul 2015</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>Samudra Jaya Shop</h4>
                                    <h4 class="subheading">Shopkeeper</h4>
                                </div>
                                <div class="timeline-body">
                                    <ul>
                                        <li>● Opened, closed, and managed operations of the shop, as needed.</li>
                                        <li>● Ordered, procured, and stocked all received shop items, in a proper manner.</li>
                                        <li>● Operated cash register and handled all cash/edc/transfer transactions, in an efficient manner.</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section-title center">
                <h2>Education</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <!-- Education Section-->
                        <li>
                            <div class="timeline-image">
                                <h4>2021<br>
                                    -<br>
                                    2017</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>STMIK Yadika Bangil</h4>
                                    <h5 class="subheading">Informatics Engineering</h5>
                                    <h4 class="subheading">Bachelor's Degree</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Jl. Bader No. 9, Kalirejo Bangil, <br>
                                        Pasuruan, Jawa Timur, <br>
                                        Kode POS 67153 <br>
                                        Website : stmik-yadika.ac.id</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>2015<br>
                                    -<br>
                                    2012</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>SMK Al-Mahrusiyah</h4>
                                    <h5 class="subheading">Multimedia</h5>
                                    <h4 class="subheading">High School</h4>
                                </div>
                                <div class="timeline-body">
                                    <p>Jl. Ngampel Raya, RT.04/RW.01, Kel. Ngampel, <br>
                                        Kec. Mojoroto, Kota Kediri, Jawa Timur, <br>
                                        Kode POS 64112 - Telp. 0354-780247 <br>
                                        Email : info[at]smkalmahrusiyah.sch.id <br>
                                        Website : smkalmahrusiyah.sch.id</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <h4>2012<br>
                                    -<br>
                                    2009</h4>
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>SMP Negeri 2 Kraton</h4>
                                    <h4 class="subheading">Middle School</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Jl. Pondok Pesantren Terpadu Al-Yasini, <br>
                                        Ngabar Kraton, Pasuruan, Jawa Timur, <br>
                                        Kode POS 67151 - Telp. 0343-424435 <br>
                                        Email : smp2kraton[at]gmail.com <br>
                                        Website : https://www.smpn2kraton.sch.id</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title center">
                <h2>Contact</h2>
                <hr>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-4">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <p>Pasuruan City, <br>
                        East Java, ID 67137</p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-envelope-o fa-2x"></i>
                    <p>ahmadabuhasan <br>
                        [at]mhs.stmik-yadika.ac.id</p>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-phone fa-2x"></i>
                    <p><a href="https://wa.me/6281977332483" target="_blank" onMouseOver="this.style.color='white'" onMouseOut="this.style.color='black'">Call</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <h3>Leave me a message</h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" class="form-control" placeholder="email" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-default">Send Message</button>
                </form>

                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100001555488554" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://www.twitter.com/eby8zevin" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/eby8zevin" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        <li><a href="https://www.linkedin.com/in/ahmadabuhasan" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li><a href="https://www.github.com/eby8zevin" target="_blank">
                                <i class="fa fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div id="footer">
        <div class="container text-center">
            <div class="fnav">
                <p>Copyright &copy; <?php echo date("Y"); ?> - Ahmad Abu Hasan</p>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.1.11.1.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/SmoothScroll.js"></script>
    <script src="../assets/js/easypiechart.js"></script>
    <script src="../assets/js/jquery.prettyPhoto.js"></script>
    <script src="../assets/js/jquery.isotope.js"></script>
    <script src="../assets/js/jquery.counterup.js"></script>
    <script src="../assets/js/waypoints.js"></script>
    <script src="../assets/js/jqBootstrapValidation.js"></script>
    <script src="../assets/js/contact_me.js"></script>
    <script src="../assets/js/main.js"></script>

</body>

</html>