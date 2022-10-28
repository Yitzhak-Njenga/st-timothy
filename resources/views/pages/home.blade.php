@extends('layout.master')
@section('content')


<main>

    <section class="hero-section hero-section-full-height">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-12 col-12 p-0">
                    <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slide/image-1.png"
                                     class="carousel-image img-fluid" alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="custom-btn btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                        Apply Online
                                    </button>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="images/slide/image-2.png"
                                     class="carousel-image img-fluid" alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <button type="button" class="custom-btn btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                        Apply Online
                                    </button>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="images/slide/image-3.png"
                                     class="carousel-image img-fluid" alt="...">

                                <div class="carousel-caption d-flex flex-column justify-content-end">
                                    <button type="button" class="custom-btn btn" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                        Apply Online
                                    </button>
                                </div>
                            </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#hero-slide"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto">
                    <h2 class="mb-5">Why Study with Us?</h2>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">


                            <p class="featured-block-text"><strong>Learn with the Best</strong></p>
                            Our Staff have rich and deep experiences
                            on all levels of study.
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">


                            <p class="featured-block-text"><strong>Employability</strong></p>
                            Our courses are structured as bridges to
                            lead students into employment.
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">


                            <p class="featured-block-text"><strong>Transformation Education</strong></p>
                            The curriculum has been structured with
                            flexibility that allows practice- based
                            learning and relevance in handling common
                            problems in the society.
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                    <div class="featured-block d-flex justify-content-center align-items-center">
                        <a href="donate.html" class="d-block">


                            <p class="featured-block-text"><strong>Facilities</strong></p>
                            Spacious classrooms and
                            Wonderful Chapel/church and very friendly
                            learning environment
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section-padding section-bg" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <img src="images/history.png"
                         class="custom-text-box-image img-fluid" alt="">
                </div>

                <div class="col-lg-6 col-12">
                    <div class="custom-text-box">
                        <h2 class="mb-2">Our History</h2>

                        <h5 class="mb-3">St.Timothy Divinity College</h5>

                        <p class="mb-0">In the year 2007, St. Stephen’s Church Waithaka experienced a kind of
                            exodus when a group of members started to settle down in their homes
                            built far away from Dagoretti, some in Ruai and others in Ruiru.
                            <a href="/history" class="custom-btn btn">Read More...</a></p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box mb-lg-0">
                                <h5 class="mb-3">Our Mission</h5>

                                <p>To equip and empower learners with relevant
                                    knowledge and skills through training and mentorship.</p>


                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                <div class="counter-thumb">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="0" data-to="55"
                                              data-speed="10000"></span>
                                        <span class="counter-number-text"></span>
                                    </div>

                                    <span class="counter-text">Graduated Students</span>
                                </div>

                                <div class="counter-thumb mt-4">
                                    <div class="d-flex">
                                        <span class="counter-number" data-from="0" data-to="120"
                                              data-speed="10000"></span>
                                        <span class="counter-number-text">+</span>
                                    </div>

                                    <span class="counter-text">Current Students</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about-section section-padding">
        <div class="container">
            <div class="row">



                <div class="col-lg-6 col-md-5 col-12">
                    <img src="images/bishop.jpg"
                         class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                </div>

                <div class="col-lg-5 col-md-7 col-12">
                    <div class="custom-text-block">
                        <h2 class="mb-0">Rt.Rev. Canon Charles M. Muturi</h2>

                        <p class="text-muted mb-lg-4 mb-md-4">The 6<sup>th</sup> Mt. Kenya South</p>

                        <p>St. Timothy College is a noble initiative for us
                            and our future generations. It was an idea that
                            was brought to us by God Himself through
                            friends and Parishioners of ACK St. Stephen’s
                            Waithaka. The friends formed an Organization
                            named “The Fish” with the Church in mind not
                            only for the Anglican Church but the entire body
                            of Christ with membership drawn from different
                            denominations.To assist Church
                            development and work for God, they embarked
                            on earmarking the venue where the future
                            University would be built and they settled for
                            Kagira.
                        </p>


                        {{--                        <ul class="social-icon mt-4">--}}
                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-twitter"></a>--}}
                        {{--                            </li>--}}

                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-facebook"></a>--}}
                        {{--                            </li>--}}

                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-instagram"></a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div>
                <hr style="margin: 10px">


                <div class="col-lg-6 col-md-5 col-12">
                    <img src="images/Principal.jpg"
                         class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                </div>

                <div class="col-lg-5 col-md-7 col-12">
                    <div class="custom-text-block">
                        <h2 class="mb-0">Rev. Dr. John Mungai</h2>

                        <p class="text-muted mb-lg-4 mb-md-4">Principal</p>

                        <p>The first thing is to make
                            sure that the sailor has all the tools and
                            equipment, knowledge and skill to secure the
                            boat with an anchor that digs into the seabed.
                            The larger cruise ships require a larger anchor
                            to hold it to safety.</p>


                        {{--                        <ul class="social-icon mt-4">--}}
                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-twitter"></a>--}}
                        {{--                            </li>--}}

                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-facebook"></a>--}}
                        {{--                            </li>--}}

                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-instagram"></a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div>
                <hr style="margin: 10px">

                <div class="col-lg-6 col-md-5 col-12">
                    <img src="images/Chaplain.jpg"
                         class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                </div>


                <div class="col-lg-5 col-md-7 col-12">
                    <div class="custom-text-block">
                        <h2 class="mb-0">Rev. Sarah Muturi</h2>

                        <p class="text-muted mb-lg-4 mb-md-4">Chaplain</p>

                        <p>In Chaplaincy we obey the command "go ye prech the Good News of deliverance and healing to
                            all Nations Mathew 28:16-20; Luke 4:18.</p>


                        {{--                        <ul class="social-icon mt-4">--}}
                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-twitter"></a>--}}
                        {{--                            </li>--}}

                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-facebook"></a>--}}
                        {{--                            </li>--}}

                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-instagram"></a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div>
                <hr style="margin: 10px">


                <div class="col-lg-6 col-md-5 col-12">
                    <img src="images/Dean.jpg"
                         class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                </div>

                <div class="col-lg-5 col-md-7 col-12">
                    <div class="custom-text-block">
                        <h2 class="mb-0">Jesse Mutugi</h2>

                        <p class="text-muted mb-lg-4 mb-md-4">Dean</p>

                        <p>St Timothy Anglican Divinity College was solely to make saws of the ministry sharpened.The
                            mission is to equip God's people academically in order to holistically transform society.The
                            college salutes the ACK Diocese of Mount Kenya South for encouraging all evangelists within
                            Diocese to enroll and be equipped for sacred ,ministry</p>


                        {{--                        <ul class="social-icon mt-4">--}}
                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-twitter"></a>--}}
                        {{--                            </li>--}}

                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-facebook"></a>--}}
                        {{--                            </li>--}}

                        {{--                            <li class="social-icon-item">--}}
                        {{--                                <a href="#" class="social-icon-link bi-instagram"></a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section section-padding section-bg">
        <div class="container">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-5 col-12 ms-auto">
                    <h2 class="mb-0">Become Part <br> Of Us.</h2>
                </div>

                <div class="col-lg-5 col-12">
                    {{--                    <a href="#" class="me-4">Download Brochure</a>--}}
                    <object data="pdf/sample.pdf#view=Fit" type="application/pdf" width="100%" height="400px">
                        <p><a rel="external" href="ST. TIMOTHY ANGLICAN DIVINTY COLLEGE BROCHURE.pdf"
                              class="custom-btn btn">Download Brochure</a></p>
                    </object>
                    <i class="fas fa-expand ms-2"></i></div>
            </div>

        </div>
        </div>
    </section>



{{--    <section class="news-section section-padding" id="section_5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class="col-lg-12 col-12 mb-5">--}}
{{--                    <h2>Latest News</h2>--}}
{{--                </div>--}}

{{--                <div class="col-lg-7 col-12">--}}
{{--                    <div class="news-block">--}}
{{--                        <div class="news-block-top">--}}
{{--                            <a href="news-detail.html">--}}
{{--                                <img src="images/news/medium-shot-volunteers-with-clothing-donations.jpg"--}}
{{--                                     class="news-image img-fluid" alt="">--}}
{{--                            </a>--}}

{{--                            <div class="news-category-block">--}}
{{--                                <a href="#" class="category-block-link">--}}
{{--                                    Lifestyle,--}}
{{--                                </a>--}}

{{--                                <a href="#" class="category-block-link">--}}
{{--                                    Clothing Donation--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="news-block-info">--}}
{{--                            <div class="d-flex mt-2">--}}
{{--                                <div class="news-block-date">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-calendar4 custom-icon me-1"></i>--}}
{{--                                        October 12, 2036--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="news-block-author mx-5">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-person custom-icon me-1"></i>--}}
{{--                                        By Admin--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="news-block-comment">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-chat-left custom-icon me-1"></i>--}}
{{--                                        32 Comments--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="news-block-title mb-2">--}}
{{--                                <h4><a href="news-detail.html" class="news-block-title-link">Clothing donation to urban--}}
{{--                                        area</a></h4>--}}
{{--                            </div>--}}

{{--                            <div class="news-block-body">--}}
{{--                                <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito--}}
{{--                                    Professional charity theme based on Bootstrap</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="news-block mt-3">--}}
{{--                        <div class="news-block-top">--}}
{{--                            <a href="news-detail.html">--}}
{{--                                <img src="images/news/medium-shot-people-collecting-foodstuff.jpg"--}}
{{--                                     class="news-image img-fluid" alt="">--}}
{{--                            </a>--}}

{{--                            <div class="news-category-block">--}}
{{--                                <a href="#" class="category-block-link">--}}
{{--                                    Food,--}}
{{--                                </a>--}}

{{--                                <a href="#" class="category-block-link">--}}
{{--                                    Donation,--}}
{{--                                </a>--}}

{{--                                <a href="#" class="category-block-link">--}}
{{--                                    Caring--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="news-block-info">--}}
{{--                            <div class="d-flex mt-2">--}}
{{--                                <div class="news-block-date">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-calendar4 custom-icon me-1"></i>--}}
{{--                                        October 20, 2036--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="news-block-author mx-5">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-person custom-icon me-1"></i>--}}
{{--                                        By Admin--}}
{{--                                    </p>--}}
{{--                                </div>--}}

{{--                                <div class="news-block-comment">--}}
{{--                                    <p>--}}
{{--                                        <i class="bi-chat-left custom-icon me-1"></i>--}}
{{--                                        35 Comments--}}
{{--                                    </p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="news-block-title mb-2">--}}
{{--                                <h4><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h4>--}}
{{--                            </div>--}}

{{--                            <div class="news-block-body">--}}
{{--                                <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus--}}
{{--                                    elementum, tempor risus vel, condimentum orci</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-12 mx-auto">--}}
{{--                    <form class="custom-form search-form" action="#" method="get" role="form">--}}
{{--                        <input name="search" type="search" class="form-control" id="search" placeholder="Search"--}}
{{--                               aria-label="Search">--}}

{{--                        <button type="submit" class="form-control">--}}
{{--                            <i class="bi-search"></i>--}}
{{--                        </button>--}}
{{--                    </form>--}}

{{--                    <h5 class="mt-5 mb-3">Recent news</h5>--}}

{{--                    <div class="news-block news-block-two-col d-flex mt-4">--}}
{{--                        <div class="news-block-two-col-image-wrap">--}}
{{--                            <a href="news-detail.html">--}}
{{--                                <img src="images/news/africa-humanitarian-aid-doctor.jpg" class="news-image img-fluid"--}}
{{--                                     alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div class="news-block-two-col-info">--}}
{{--                            <div class="news-block-title mb-2">--}}
{{--                                <h6><a href="news-detail.html" class="news-block-title-link">Food donation area</a></h6>--}}
{{--                            </div>--}}

{{--                            <div class="news-block-date">--}}
{{--                                <p>--}}
{{--                                    <i class="bi-calendar4 custom-icon me-1"></i>--}}
{{--                                    October 16, 2036--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="news-block news-block-two-col d-flex mt-4">--}}
{{--                        <div class="news-block-two-col-image-wrap">--}}
{{--                            <a href="news-detail.html">--}}
{{--                                <img src="images/news/close-up-happy-people-working-together.jpg"--}}
{{--                                     class="news-image img-fluid" alt="">--}}
{{--                            </a>--}}
{{--                        </div>--}}

{{--                        <div class="news-block-two-col-info">--}}
{{--                            <div class="news-block-title mb-2">--}}
{{--                                <h6><a href="news-detail.html" class="news-block-title-link">Volunteering Clean</a></h6>--}}
{{--                            </div>--}}

{{--                            <div class="news-block-date">--}}
{{--                                <p>--}}
{{--                                    <i class="bi-calendar4 custom-icon me-1"></i>--}}
{{--                                    October 24, 2036--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="category-block d-flex flex-column">--}}
{{--                        <h5 class="mb-3">Categories</h5>--}}

{{--                        <a href="#" class="category-block-link">--}}
{{--                            Drinking water--}}
{{--                            <span class="badge">20</span>--}}
{{--                        </a>--}}

{{--                        <a href="#" class="category-block-link">--}}
{{--                            Food Donation--}}
{{--                            <span class="badge">30</span>--}}
{{--                        </a>--}}

{{--                        <a href="#" class="category-block-link">--}}
{{--                            Children Education--}}
{{--                            <span class="badge">10</span>--}}
{{--                        </a>--}}

{{--                        <a href="#" class="category-block-link">--}}
{{--                            Poverty Development--}}
{{--                            <span class="badge">15</span>--}}
{{--                        </a>--}}

{{--                        <a href="#" class="category-block-link">--}}
{{--                            Clothing Donation--}}
{{--                            <span class="badge">20</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <div class="tags-block">--}}
{{--                        <h5 class="mb-3">Tags</h5>--}}

{{--                        <a href="#" class="tags-block-link">--}}
{{--                            Donation--}}
{{--                        </a>--}}

{{--                        <a href="#" class="tags-block-link">--}}
{{--                            Clothing--}}
{{--                        </a>--}}

{{--                        <a href="#" class="tags-block-link">--}}
{{--                            Food--}}
{{--                        </a>--}}

{{--                        <a href="#" class="tags-block-link">--}}
{{--                            Children--}}
{{--                        </a>--}}

{{--                        <a href="#" class="tags-block-link">--}}
{{--                            Education--}}
{{--                        </a>--}}

{{--                        <a href="#" class="tags-block-link">--}}
{{--                            Poverty--}}
{{--                        </a>--}}

{{--                        <a href="#" class="tags-block-link">--}}
{{--                            Clean Water--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                    <form class="custom-form subscribe-form" action="#" method="get" role="form">--}}
{{--                        <h5 class="mb-4">Newsletter Form</h5>--}}

{{--                        <input type="email" name="subscribe-email" id="subscribe-email" pattern="[^ @]*@[^ @]*"--}}
{{--                               class="form-control" placeholder="Email Address" required>--}}

{{--                        <div class="col-lg-12 col-12">--}}
{{--                            <button type="submit" class="form-control">Subscribe</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}


    <section style="margin-top: 20px" class="testimonial-section section-padding section-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 mx-auto">
                    <h2 class="mb-lg-3">Testimonials</h2>

                    <div id="testimonial-carousel" class="carousel carousel-fade slide" data-bs-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="carousel-caption">
                                    <h6 class="carousel-title" style="font-size: 15px">St.Timothy Anglican Divinity
                                        College is no exception . It was a journey of faith, reflection and
                                        transformation.
                                        Any Journey in life presents a chance to make memories in event of both
                                        enjoyable or otherwise which make history.</h6>

                                    <small class="carousel-name"><span
                                            class="carousel-name-title">Wambui Gitau</span></small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h6 class="carousel-title" style="font-size: 15px">Joining St. Timothy Anglican
                                        Divinity College was a bag of mixed feelings of Joy and fear to fulfill my
                                        desire to have strong foundation in ministry and the fear of unknown.</h6>

                                    <small class="carousel-name"><span class="carousel-name-title">James Gachanja</span></small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h6 class="carousel-title" style="font-size: 15px">My experiences at St. Timothy
                                        Anglican Divinity
                                        College are for theological training aiming at
                                        transforming societies. This college offers many
                                        courses for ministerial formation. Am so glad
                                        that the knowledge I am acquiring will help
                                        transform society at large and mostly
                                        Madagascar.</h6>

                                    <small class="carousel-name"><span class="carousel-name-title">Randrianasolo Jimmy(from
                                            Madagascar)</span></small>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="carousel-caption">
                                    <h6 class="carousel-title" style="font-size: 15px">In St.
                                        Timothy Anglican
                                        Divinity College,
                                        students have an
                                        opportunity to
                                        grow holistically.
                                        We cater for the

                                        soul by having a programme for the students to
                                        have morning devotion from Monday-Friday
                                        with an additional Thursday Bible Study to help
                                        the students to understand the bible and to
                                        interpret the Word of God.</h6>

                                    <small class="carousel-name"><span
                                            class="carousel-name-title">Kelvin Kahare</span></small>
                                </div>
                            </div>

                            <ol class="carousel-indicators">
                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active">
                                    <img src="images/wambui-gitau.png"
                                         class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>

                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="1" class="">
                                    <img src="images/jaches-gachanja.png"
                                         class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>

                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="2" class="">
                                    <img src="images/jimmie.png"
                                         class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>

                                <li data-bs-target="#testimonial-carousel" data-bs-slide-to="3" class="">
                                    <img src="images/kevin-kahare.png"
                                         class="img-fluid rounded-circle avatar-image" alt="avatar">
                                </li>
                            </ol>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>Get in touch</h2>

{{--                        <div class="contact-image-wrap d-flex flex-wrap">--}}
{{--                            <img src="images/avatar/pretty-blonde-woman-wearing-white-t-shirt.jpg"--}}
{{--                                 class="img-fluid avatar-image" alt="">--}}

{{--                            <div class="d-flex flex-column justify-content-center ms-3">--}}
{{--                                <p class="mb-0">Clara Barton</p>--}}
{{--                                <p class="mb-0"><strong>HR & Office Manager</strong></p>--}}
{{--                            </div>--}}
{{--                        </div>--}}



                        <div class="contact-info">
                            <h5 class="mb-3">Contact Infomation</h5>


                            <p class="d-flex mb-2">
                                <i class="bi-telephone me-2"></i>

                                <a href="tel: 0758259848">
                                    0758259848
                                </a>
                            </p>

                            <p class="d-flex mb-2">
                                <i class="bi-telephone me-2"></i>

                                <a href="tel: 0722394654">
                                    0722394654
                                </a>
                            </p>

                            <p class="d-flex">
                                <i class="bi-envelope me-2"></i>

                                <a href="mailto:admin@sttimothyadc.ac.ke/">
                                    admin@sttimothyadc.co.ke
                                </a>
                            </p>

                            <h4 class="mb-3 text-center">Get Direction</h4>
                            <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63821.96098459102!2d36.65131483841115!3d-1.2475554170460739!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f19846b91e123%3A0x7cfda6ff6ef95a5c!2sST.TIMOTHY%20ANGLICAN%20DIVINITY%20COLLEGE!5e0!3m2!1sen!2ske!4v1666880729099!5m2!1sen!2ske" width="340" height="400" style="border:0;" allowfullscreen=""  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-6 container custom-text-box mb-lg-0">
                    <form class="custom-form col-12"   action="/contact" method="post" >
                        @csrf
                        <h2 class="">Contact Us</h2>


                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="first-name" id="first_name" class="form-control"
                                       placeholder="First Name" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="last-name" id="last-name" class="form-control"
                                       placeholder="Last Name" required>
                            </div>
                        </div>

                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                               placeholder="Email" required>
                        <input type="number" name="phone-number" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                               placeholder="Phone Number" required>
                        <input type="text" name="country"   class="form-control"
                               placeholder="Country" required>
                        <input type="text" name="location" id="email"  class="form-control"
                               placeholder="Location">
                        <textarea name="message" rows="5" class="form-control" id="message"
                                  placeholder="Your Message"></textarea>

                        <button type="submit" class="form-control col-8">Send Message</button>

                    </form>
                </div>

            </div>
        </div>
    </section>
</main>


@endsection

