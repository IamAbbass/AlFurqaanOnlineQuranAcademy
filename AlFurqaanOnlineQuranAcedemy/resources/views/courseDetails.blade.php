@extends('layouts.app')
@section('content')
    
<!-- ================ start banner Area ================= -->
<section class="banner-area">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-12 banner-right">
                <h1 class="text-white">
                    Course Details
                </h1>
                <p class="mx-auto text-white  mt-20 mb-40">
                    In the history of modern astronomy, there is probably no one greater leap forward than the
                    building.
                </p>
                <div class="link-nav">
                    <span class="box">
                        <a href="{{ route('index') }}">Home </a>
                        <span class="icons">
                            <i class="fas fa-long-arrow-alt-right"></i>
                          </span>
                        <a href="{{ route('courses') }}">Courses </a>
                        <span class="icons">
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </span>
                        <a href="{{ route('course.details') }}">Course Details</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================ End banner Area ================= -->

<!--================ Start Course Details Area =================-->
<section class="course-details-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 course-details-left">
                <div class="main-image">
                    <img class="img-fluid" src="img/courses/course-details.jpg" alt="">
                </div>
                <div class="content-wrapper">
                    <h4 class="title">Objectives</h4>
                    <div class="content">
                        When you enter into any new area of science, you almost always find yourself with a
                        baffling new language of
                        technical terms to learn before you can converse with the experts. This is certainly
                        true in astronomy both in
                        terms of terms that refer to the cosmos and terms that describe the tools of the trade,
                        the most prevalent
                        being the telescope.
                        <br>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea
                        commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum. Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum.
                    </div>

                    <h4 class="title">Eligibility</h4>
                    <div class="content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
                        <br>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                        ut aliquip ex ea
                        commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum. Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim
                        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum.
                    </div>

                    <h4 class="title">Course Outline</h4>
                    <div class="content">
                        <ul class="course-list">
                            <li class="justify-content-between d-flex">
                                <p>Introduction Lesson</p>
                                <a class="btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Basics of HTML</p>
                                <a class="btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Getting Know about HTML</p>
                                <a class="btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Tags and Attributes</p>
                                <a class="btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Basics of CSS</p>
                                <a class="btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Getting Familiar with CSS</p>
                                <a class="btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Introduction to Bootstrap</p>
                                <a class="btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Responsive Design</p>
                                <a class="btn text-uppercase" href="#">View Details</a>
                            </li>
                            <li class="justify-content-between d-flex">
                                <p>Canvas in HTML 5</p>
                                <a class="btn text-uppercase" href="#">View Details</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-4 right-contents">
                <ul>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Trainer’s Name</p>
                            <span class="or">George Mathews</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Course Fee </p>
                            <span>$230</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Available Seats </p>
                            <span>15</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Schedule </p>
                            <span>2.00 pm to 4.00 pm</span>
                        </a>
                    </li>
                </ul>
                <a href="#" class="btn text-uppercase enroll">Enroll the course</a>

                <h4 class="title">Reviews</h4>
                <div class="content">
                    <div class="review-top row pt-40">
                        <div class="col-lg-12">
                            <h6 class="mb-15">Provide Your Rating</h6>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="star">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Puncuality</span>
                                <div class="star">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                            <div class="d-flex flex-row reviews justify-content-between">
                                <span>Quality</span>
                                <div class="star">
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span>Outstanding</span>
                            </div>
                        </div>
                    </div>
                    <div class="feedeback">
                        <h6 class="mb-10">Your Feedback</h6>
                        <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                        <div class="mt-10 text-right">
                            <a href="#" class="btn text-center text-uppercase enroll">Submit</a>
                        </div>
                    </div>
                    <div class="comments-area mb-30">
                        <div class="comment-list">
                            <div class="single-comment single-reviews justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c1.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a>
                                            <div class="star">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </h5>
                                        <p class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment single-reviews justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c2.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Elsie Cunningham</a>
                                            <div class="star">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </h5>
                                        <p class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment single-reviews justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="img/blog/c3.jpg" alt="">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a>
                                            <div class="star">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </h5>
                                        <p class="comment">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->

@endsection