<!DOCTYPE html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="icon" href="img/favicon.png"/>
        <title>Driving School | Message sent</title>
    </head>
    <body class="minh-100vh bg-secondary">
        <header class="position-absolute w-100">
            <nav class="navbar navbar-dark navbar-expand-md bg-transparent">
                <a href="index.html" class="navbar-brand ms-3">
                    <img src="img/navbar_logo.png" class="img-fluid" alt="logo"/>
                </a>
                <button class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#main-nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mx-3" id="main-nav">
                    <ul class="navbar-nav ms-auto text-end fw-bold">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link text-teal">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="courses.html" class="nav-link text-teal">Courses</a>
                        </li>
                        <li class="nav-item">
                            <a href="branches.html" class="nav-link text-teal">Branches</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link text-teal">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="user.php" class="nav-link text-teal">
                                <span class="fa fa-user"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="login-s1 container-fluid d-flex align-items-center bg-secondary py-5 minh-100vh">
            <div class="my-auto w-100">
                <div class="row mx-0 w-100 pt-5 mt-5">
                    <div class="col-xs-12 col-sm-8 col-md-6 offset-sm-2 offset-md-3 text-center">
                        <h3 class="text-center font-header text-secondary mb-3">Message sent!</h3>
                        <table class="table table-hover border text-start font-menu bg-light opacity-8">
                            <thead class="thead-light">
                                <tr>
                                    <th colspan="2" class="font-header">Summary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Full name</td>
                                    <td>
                                        <?php 
                                        if(isset($_POST['fname']))
                                            echo htmlspecialchars($_POST['fname']);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>
                                        <?php 
                                        if(isset($_POST['fphone']))
                                            echo htmlspecialchars($_POST['fphone']);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <?php 
                                        if(isset($_POST['fmail']))
                                            echo htmlspecialchars($_POST['fmail']);
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Message</td>
                                    <td>
                                        <?php 
                                        if(isset($_POST['fmsg']))
                                            echo htmlspecialchars($_POST['fmsg']);
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="contact.html" 
                            class="btn btn-success font-header mt-3">OK</a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="container-fluid d-flex text-dark align-items-center bg-black border-teal text-white pt-3 opacity-9 border-top">
            <div class="row mx-0 w-100 small opacity-9">
                <div class="col-12 col-md-5 col-lg-4 text-center text-md-start">
                    <h6 class="text-uppercase mb-3">
                        Contact us
                    </h6>
                    <p class="initialism fw-normal">
                        Our online driving courses are here to help you - so get in touch with 
                        us today to help you.
                    </p>
                    <address class="border-start border-dark ps-3 small">
                        Abcdfg Street 12,<br/>
                        00-000 City,<br/>
                        +(00) 987 654 124<br/>
                        email&#64;email.com
                    </address>
                </div>
                <div class="col-12 col-md-7 col-lg-8 text-center text-md-end">                    
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa fa-facebook text-white"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa fa-instagram text-white"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa fa-twitter text-white"></span>
                            </a>
                        </li>
                    </ul>       
                </div>
                <div class="col-12 text-center border-top">
                    <p class="mb-1">
                        Copyright &copy; 2021 Tomasz Pankowski. 
                        <a href="privacy.html" class="fw-bold text-white text-decoration-none">
                            Privacy policy
                        </a>
                    </p>
                </div>
            </div>
        </footer>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>