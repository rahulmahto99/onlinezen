<?php

include("header.php");

if(isset($_GET['id'])){
$id=$_GET['id'];
$sql = "SELECT id, course_name, course_mrp, course_price,course_students, course_lessons,course_reviews, course_image, course_short_desc, course_description FROM product";

$result = mysqli_query($conn, $sql);


}
?>


<!-- Course upper details section start here  -->


<div class="course-details ">
    <div class="container">

        <?php

        $row = mysqli_fetch_assoc($result)


        ?>

        <div class="course-upper-section">
            <div class="row">
                <div class="col-md-8">
                    <span class="course-upper-h1"><a href="index.php">Home</a></span>
                    <span class="course-upper-h2"><i class="fa-solid fa-arrow-right"></i> <span> Category</span></span>
                    <div class="course-upper-h3 mb-5 mt-5 fs-1"><?php echo $row['course_name']
                    ?>
                    </div>
                    <div class="course-upper-h4"><?php echo $row['course_short_desc'] ?>
                    </div>

                </div>
                <div class="col-md-4">

                    <div class="card-section">
                        <div class="image-section">
                            <img src="<?php echo "images" . $row['course_image'] ?>" alt="images">
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
                                <div class="text-section-8">
                                    <a href=""><span class="button">Add To Cart<i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>

                                <div class="text-section-9">
                                    <a href=""><span class="button">Buy Now<i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div>

                        </span>
                    </div>



                </div>
             </div>
    

        </div>

    </div>



</div>

<!-- Course upper details section end here  -->

<!-- Course down details section Start here   -->

<div class="course-dwon-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card mt-5"> <img src="assets\images\course-01.jpg" class="mt-5" alt="">
                </div>
                <div class="card mt-5">
                    <div class="card-header fs-3 ">
                        <strong>What you'll learn</strong>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-normal">Are you new to PHP or need a refresher? Then this course will help you get all the fundamentals of Procedural PHP, Object Oriented PHP, MYSQLi and ending the course by building a CMS system similar to WordPress, Joomla or Drupal. Knowing PHP has allowed me to make enough money to stay home and make courses like this one for students all over the world.

                            </p>

                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header fs-3">
                        <strong>Course Content
                        </strong>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Intro to Course and Histudy
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You c
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Course Fundamentals
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    You can develop skill and setup

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-section-1" style="width: 25rem;">
                    <div class="image-section">
                        <img src="assets\images\course-online-02.jpg" alt="">
                    </div>
                    <span class="text-section-1">
                        <span class="card-1st-para"><i class="fa-solid fa-book"></i>12 Lessons
                        </span>
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
                    </div>
                    <div class="text-section-8">
                        <a href=""><span class="button">Add To Cart<i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>

                    <div class="text-section-9">
                        <a href=""><span class="button">Buy Now<i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>

            </div>
            <div class="col-md-4 ">
                <div class="card-section-1">
                    <div class="image-section">
                        <img src="assets\images\course-online-02.jpg" alt="">
                    </div>
                    <span class="text-section-1">
                        <span class="card-1st-para"><i class="fa-solid fa-book"></i>12 Lessons
                        </span>
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
                    </div>
                    <div class="text-section-8">
                        <a href=""><span class="button">Add To Cart<i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>

                    <div class="text-section-9">
                        <a href=""><span class="button">Buy Now<i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<!-- Course down details section end here   -->



<?php

include("footer.php");


?>