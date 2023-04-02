<?php

include ("header.php");


?>

<!-- ======login All Process start  here =====  -->

<?php

$login_email = '';
$login_password = '';

if (isset($_POST['login_submit'])) {

    $login_email = $_POST['login_email'];
    $login_password = $_POST['login_password'];

    $sql = "select * from student where signup_email='$login_email' and signup_password='$login_password'";

    $result = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $_SESSION['ADMIN_LOGIN'] = 'Yes';
        $_SESSION['ADMIN_USERNAME'] = '$login_email';
        header('location:course.php');
        die();
    } else {
        echo " Please Enter Correct Details";
    }
}


?>


<!-- ======login All Process end  here =====  -->



<!-- Login Model form start here  -->



<!-- Modal -->
<div class="modal fade" id="loginexampleModal" tabindex="-1" aria-labelledby="loginexampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginexampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- login form Start Here -->

                <div id="contact-us" class="contact-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 box1">
                                <div class="contact-us-h1">Login Here</div>

                                <form action="" method="POST">

                                    <label for="email" class="fw-semibold"><i class="fa-solid fa-envelope me-2 "></i>Email</label><br>
                                    <input type="email" class="email" name="login_email" id="login_email" placeholder="Example@gmail.com"><br>

                                    <label for="password" class="margin-right-4 fw-semibold"><i class="fa-solid fa-key me-2"></i>Password</label><br>
                                    <input type="password" class="password" id="login_password" name="login_password" placeholder="*******"><br>

                                    <span class="text-black fw-semibold mt-2 mb-2">Don't Have An Account??<a class="text-decoration-none ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal" href=""> Signup Here</a></span>
                                    <input type="submit" class="submitbutton" name="login_submit" value="Login">
                                </form>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- login form end here   -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>



<!-- Login Model form end here  -->

<?php
// <!-- ======Signup All Process start here =====>


$signup_name_msg = "";
$signup_email_msg = "";
$signup_password_msg = "";


$flag = true;

if (isset($_POST['signup_submit'])) {


    // Check form filed on submission start here 

    if (empty($_POST["signup_fullname"])) {
        $signup_name_msg = 'You must enter an Name';
        $flag = false;
    } else {
        $signup_fullname = ($_POST["signup_fullname"]);
    }

    if (empty($_POST["signup_email"])) {
        $signup_email_msg = 'You must enter an Email';
        $flag = false;
    } else {
        $signup_email = ($_POST["signup_email"]);
    }

    if (empty($_POST["signup_password"])) {
        $signup_password_msg = 'You must enter an Password';
        $flag = false;
    } else {
        $signup_password = ($_POST["signup_password"]);
    }

    // Check form filed on submission end here

    // Submit form if validated succcessfully start here 
    if ($flag) {
        $signup_fullname = $_POST['signup_fullname'];
        $signup_email = $_POST['signup_email'];
        $signup_password = $_POST['signup_password'];

        // Email Allready exist checking start here 
        $emailquery = "select * from student where signup_email='$signup_email' ";
        $insertquery = mysqli_query($conn, $emailquery);

        $emailcount = mysqli_num_rows($insertquery);

        if ($emailcount > 0) {
            echo " Email Allready Exist";
            // Email Allready exist checking end here 

        } else {
            $sql = "INSERT INTO `student` ( `signup_fullname`, `signup_email`, `signup_password`) VALUES ( '$signup_fullname', '$signup_email', '$signup_password');";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo " Data Inseretd Successfully";
            }
        }
    }

    // Submit form if validated succcessfully end here 
}
?>
<!-- ======Signup All Process end here =====  -->


<!-- =======Signup Form model Start here ====== -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Signup form Start Here -->

                <div id="signup-form" class="contact-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 box1">
                                <div class="contact-us-h1 ">Just' Signup</div>

                                <form action="" method="POST">
                                    <label for="fullname" class="pe-1 fw-semibold"><i class="fa-solid fa-user"></i>UserName</label><br>
                                    <input type="text" id="signup_fullname" class="firstname" name="signup_fullname" placeholder="Your Name"><br>
                                    <span class="text-danger"><?php

                                                                echo "$signup_name_msg";
                                                                ?></span>
                                    </br>


                                    <label for="email" class="fw-semibold"><i class="fa-solid fa-envelope me-2 "></i>Email</label><br>
                                    <input type="email" class="email" name="signup_email" id="signup_email" placeholder="Example@gmail.com"><br>
                                    <span class="text-danger"><?php

                                                                echo "$signup_email_msg";
                                                                ?></span><br>

                                    <label for="password" class="margin-right-4 fw-semibold"><i class="fa-solid fa-key me-2"></i>Password </label><br>
                                    <input type="password" class="password" id="signup_password" name="signup_password" placeholder="*******"><br>
                                    <span class="text-danger"><?php

                                                                echo "$signup_password_msg";
                                                                ?></span><br>

                                    <span class="text-black fw-semibold mt-2 mb-2">Allready Have An Account??<a class="text-decoration-none ms-2" data-bs-toggle="modal" data-bs-target="#loginexampleModal" href=""> Login Here</a></span>

                                    <input type="submit" class="submitbutton" onclick="signup_student()" name="signup_submit" value="Signup">
                                    <!-- <span id="signupsuccesss" class="text-success">Signup Successfully</span> -->
                                </form>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Signup form end here   -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<!-- =======Signup Form model end here ====== -->





<!-- Hero Section Start Here  -->

<div class="hero-section">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="hero-1st-box">
                    <div class="hero-heading-1">The World’s Leading Distance Learning Provider
                    </div>
                    <div class="hero-heading-2">Flexible easy to access learning opportunities can bring a significant change in how individuals prefer to learn! The Vdemy can offer you to enjoy the beauty of eLearning!

                    </div>
                    <div class="hero-button">
                        <a href="course.php">View Course<i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card-section">
                    <div class="image-section">
                        <img src="assets\images\course-online-02.jpg" alt="">
                    </div>
                    <span class="text-section-1">
                        <span class="card-1st-para"><i class="fa-solid fa-book"></i>12 Lessons
                        </span>
                        <span class="text-section-2">
                            <span class="card-2nd-para"><i class="fa-solid fa-user"></i>50 Students
                            </span>
                        </span>
                        <div class="text-section-3">React </div>
                        <div class="text-section-4">React Js long fact that a reader will be distracted by the readable.</div>
                        <span class="text-section-5">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <span>(15 Reviews)</span>
                        </span>
                        <div class="text-section-6">
                            <span class="sign1">&#8377 70</span>
                            <span><span class="sign2"><del>&#8377 120</del></span></span>
                            <a class="fw-bold text-decoration-none" href="add_to_cart.php">
                                <div class="text-section-8">
                                    <span class="button">Add To Cart<i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </a>
                            <a class="text-black bg-danger text-decoration-none text-section9 fw-bold" href="checkout.php">
                                <div class="text-section-9">
                                    <span class="button">Buy Now<i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </a>
                        </div>

                    </span>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Hero Section end here  -->

<!-- About us Section Start here  -->

<div class="about-us-section">
    <div class="container">
        <div class="about-top-h1 text-center">Learn New Things</div>
        <div class="about-top-h2 text-center">Affordable Online Courses and Learning Opportunities
        </div>
        <div class="row about-us-main-box">
            <div class="col-md-6 about-us-box1">
                <img src="assets\images\about-img1.8c5024bd.png" alt="">
                <img src="assets\images\about-img2.200e6f6a.png" alt="">
                <img src="assets\images\about-img3.52f05381.png" alt="">
                <!-- <img src="assets\images\about-img4.0ee6e970.png" alt=""> -->
            </div>
            <div class="col-md-6">
                <div class="about-box2-h1">ONLINE LEARNING</div>
                <div class="about-box2-h2">Develop Your Skills, Learn Something New, and Grow Your Skills From Anywhere in the World!
                </div>
                <div class="about-box2-h3">We understand better that online-based learning can make a significant change to reach students from all over the world! Giving options to learn better always can offer the best outcomes!
                </div>
                <div class="hero-button">
                    <a href="course.php">View Course<i class="fa-solid fa-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- About us Section end here  -->

<!-- Course Fetch from database Start here  -->

<?php



$sql = "SELECT id, course_name, course_mrp, course_price,course_students, course_lessons,course_reviews, course_image, course_short_desc, course_description FROM product";

$result = mysqli_query($conn, $sql);


?>

<!-- Course Fetch from database end here  -->



<!-- Course Section Start here  -->

<div class="course-section">
    <div class="container">
        <div class="course-h1 ">TOP POPULAR COURSE</div>
        <div class="course-h2 text-center">Histudy Course student
            can join with us.</div>
        <div class="row ">
            <?php

            $i = 1;


            while (($row = mysqli_fetch_assoc($result))) {
                $id = $row['id'];


            ?>
                <div class="col-md-4">

                    <div class="card-section">
                        <div class="image-section">
                            <img src="<?php echo "assets/images" . $row['course_image'] ?>" alt="images">
                        </div>
                        <span class="text-section-1">
                            <span class="card-1st-para"><i class="fa-solid fa-book"></i><?php echo $row['course_lessons'] ?> Lessons
                            </span>
                            <span class="text-section-2">
                                <span class="card-2nd-para"><i class="fa-solid fa-user"></i><?php echo $row['course_students'] ?> Students
                                </span>
                            </span>
                            <div class="text-section-3">
                                <?php echo $row['course_name'] ?>
                            </div>
                            <div class="text-section-4">
                                <?php echo $row['course_short_desc'] ?>
                            </div>
                            <span class="text-section-5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(<?php echo $row['course_reviews'] ?> Reviews)</span>
                            </span>
                            <div class="text-section-6">
                                <span class="sign1">&#8377 <?php echo $row['course_price'] ?></span>
                                <span><span class="sign2"><del>&#8377 <?php echo $row['course_mrp'] ?></del></span></span>

                                <a class="text-black bg-danger text-decoration-none text-section9 fw-bold" href="checkout.php">
                                <div class="text-section-9">
                                    <span class="button">Buy Now<i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </a>
                                <a class="fw-bold text-decoration-none" href="add_to_cart.php">
                                <div class="text-section-8">
                                    <span class="button">Add To Cart<i class="fa-solid fa-arrow-right"></i></span>
                                </div>
                            </a>
                            
                    </div>

                    </span>
                </div>



        </div>
    <?php
            }

    ?>



    </div>


    <a href="course.php"><span class="header-login-butto text-center "><span class="fw-semibold">Load More Course <i class="fa-solid fa-arrow-right"></i> </span>
        </span></a>

</div>


</div>

<!-- Course Section end here  -->


<!-- Contact us connecting to database start here  -->

<?php

if (isset($_POST['contact_us_submit'])) {
    $contact_us_name = $_POST['contact_us_name'];
    $contact_us_email = $_POST['contact_us_email'];
    $contact_us_message = $_POST['contact_us_message'];

    $sql = "INSERT INTO `contact_us` (`contact_us_name`, `contact_us_email`, `contact_us_message`) VALUES ( '$contact_us_name', '$contact_us_email', '$contact_us_message');";

    $insertquery = mysqli_query($conn, $sql);
}


?>

<!-- Contact us connecting to database end here  -->

<!-- Contact section start here  -->

<div id="contact" class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 box1">
                <div class="contact-us-h1">Let's Talk</div>
                <div class="contact-us-h2">We Are here for you ? how can we help?</div>
                <form action="" method="POST">
                    <!-- <label for="fullname" >First Name</label><br> -->
                    <input type="text" class="firstname" name="contact_us_name" placeholder="Your Name"><br>

                    <!-- <label for="email">Email</label><br> -->
                    <input type="email" class="email" name="contact_us_email" placeholder="Example@gmail.com"><br>

                    <!-- <label for="message">Message</label><br> -->
                    <input type="text" class="message" name="contact_us_message" placeholder="Message...."><br>
                    <input type="submit" class="submitbutton" name="contact_us_submit" value="Submit">
                </form>
            </div>

            <div class="col-md-6 box2 text-center">
                <img src="assets\images\5138237.jpg" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Contact section end here  -->

<?php

include ("footer.php");


?>