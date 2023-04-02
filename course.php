<?php

include("header.php");

?>

<!-- Course Fetch from database Start here  -->

<?php

$sql = "SELECT id, course_name, course_mrp, course_price,course_students, course_lessons,course_reviews, course_image, course_short_desc, course_description FROM product";

$result = mysqli_query($conn, $sql);


?>

<!-- Course Fetch from database end here  -->



<!-- Course Section Start here  -->

<div class="course-section">
    <div class="container">
        <!-- Course upper details section start here  -->

        <div class="course-upper-section">

            <span class="course-upper-h1"><a href="index.php">Home</a></span>
            <span class="course-upper-h2"><i class="fa-solid fa-arrow-right"></i> <span> All Courses</span></span>
            <div class="course-upper-h3">All Courses</div>
            <div class="course-upper-h4">Courses that help beginner designers become true unicorns.</div>

        </div>

        <!-- Course upper details section end here  -->

        <div class="row ">
            <?php

            $i = 1;
            

            while (($row = mysqli_fetch_assoc($result))) {
    

            ?>
                <div class="col-md-4">

                    <div class="card-section">
                        <div class="image-section">
                            <img src="<?php echo "images".$row['course_image']?>" alt="images">
                        </div>
                        <span class="text-section-1">
                            <span class="card-1st-para"><i class="fa-solid fa-book"></i><?php echo $row['course_lessons']?> Lessons
                            </span>
                            <span class="text-section-2">
                                <span class="card-2nd-para"><i class="fa-solid fa-user"></i><?php echo $row['course_students']?> Students
                                </span>
                            </span>
                            <div class="text-section-3">
                                <?php echo $row['course_name'] ?>
                                </div>
                            <div class="text-section-4">
                                <?php echo $row['course_short_desc']?>
                            </div>
                            <span class="text-section-5">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>(<?php echo $row['course_reviews']?> Reviews)</span>
                            </span>
                            <div class="text-section-6">
                                <span class="sign1">&#8377 <?php echo $row['course_price']?></span>
                                <span><span class="sign2"><del>&#8377 <?php  echo $row['course_mrp']?></del></span></span>
                                <div class="text-section-8">
                                    <a href="add_to_cart.php"><span class="button">Add To Cart<i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>

                                <div class="text-section-9">
                                    <a href="checkout.php"><span class="button">Buy Now<i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>

                        </span>
                    </div>



                </div>
            <?php
            }
            
            ?>



        </div>





    </div>
</div>

<!-- Course Section end here  -->

<!-- Contact section start here  -->

<div id="contact" class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6 box1">
                <div class="contact-us-h1">Let's Talk</div>
                <div class="contact-us-h2">We Are here for you ? how can we help?</div>
                <form action="" method="POST">
                    <!-- <label for="fullname" >First Name</label><br> -->
                    <input type="text" class="firstname" name="fullname" placeholder="Your Name"><br>

                    <!-- <label for="email">Email</label><br> -->
                    <input type="email" class="email" name="email" placeholder="Example@gmail.com"><br>

                    <!-- <label for="message">Message</label><br> -->
                    <input type="text" class="message" name="message" placeholder="Message...."><br>
                    <input type="submit" class="submitbutton" name="submit" value="Submit">
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

include("footer.php");

?>