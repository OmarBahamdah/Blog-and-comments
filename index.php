<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Nature beauty Blog</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">Nature's Beauty Blog</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#Home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#signup">Comments</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header id= "Home" class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Nature's Beauty &nbsp;</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Welcome to Nature Beauty Blog.</h2>
                    </div>
                </div>
            </div>
        </header>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row-->
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>How can nature benefit my mental health?</h4>
                            <p class="text-black-50 mb-0">pending time in green space or bringing nature into your everyday life can benefit both your mental and physical wellbeing. For example, doing things like growing food or flowers, exercising outdoors or being around animals can have lots of positive effects.</p>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="./assets/img/HK1.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-Black">How nature helps us:</h4>
                                    <p class="mb-0 text-white-50"><ul>
                                        <li>Improve your mood</li>
                                        <li>Reduce feelings of stress or anger</li>
                                        <li>Help you take time out and feel more relaxed</li>
                                        <li>Improve your physical health
                                        <li>Improve your confidence and self-esteem
                                        <li>Help you be more active
                                        <li>Help you meet and get to know new people
                                        <li>Connect you to your local community
                                        <li>Reduce loneliness
                                        <li>Help you feel more connected to nature
                                    </ul></p>
                                    <hr class="d-none d-lg-block mb-0 ms-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="./assets/img/P4.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-black"> What nature ideas could I try?</h4>
                                   
                                    <ul class="mb-0 text-black-50">
                                        <li>Grow or pick food</li>
                                        <li>Bring nature indoors</li>
                                        <li>Do activities outdoors</li>
                                        <li>Help the environment</li>
                                        <li>Take notice of nature</li>
                                        <li>Connect with animals</li>
                                        <li>Go Hiking</li>
                                    </ul>
                                 
                                    <hr class="d-none d-lg-block mb-0 me-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="signup">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">





                        <h2>Thank you for reading and visting our blog and Don't forget to comment</h2><br>
                        <h2>Users Comments </h2><hr>
                        <div style="background-color:none;" class="text-white">
                            <?php
                            include 'DB-CONFIG.php';
                            $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);

                            if (mysqli_connect_errno()) {

                                die("Error while connecing to DB!");
                            }
                            $query = "SELECT * FROM comment";
                            $result = mysqli_query($con, $query);
                            ?>
                            <table border =0>
                                <tr class="T1"><th>Title</th><th>Name</th><th>Comments</th></tr>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo "<tr><td>" . $row['title'] . "<hr></td><td>" . $row['name'] . "<hr></td><td>" . $row['comment'] . "<hr></td></tr>";
                                }
                                mysqli_close($con);
                                ?>
                            </table>

                        </div>
                        <h3>Leave a Comment : </h3>
                        <div>
                            <form Style="background-color:none;" action="UserComments.php" method="post"> 
                                <div>
                                    <span class="text-white"> Title:<select name="title"></span>
                                        <option>Ms.</option>
                                        <option>Mrs.</option>
                                        <option>Mr.</option>
                                    </select>
                                </div>
                                <div class="text-white" > Your Name: <input type="text" name="Uname" > </div>
                                <div class ="text-white" >Comment:<br> <textarea name="comment" rows="3" cols="35"> </textarea></div>
                                <div> <button type="submit">send</button> </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2022</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
