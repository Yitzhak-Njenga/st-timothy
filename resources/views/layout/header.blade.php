<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-8 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-geo-alt me-2"></i>
                    <a target="_blank" href="https://goo.gl/maps/BVCsGDxQesVb6DTH6">St Timothy Anglican Divinity College</a>
                </p>

                <p class="d-flex mb-0">
                    <i class="bi-envelope me-2"></i>

                    <a target="_blank" href="mailto:admin@sttimothyadc.co.ke">
                        admin@sttimothyadc.co.ke
                    </a>
                </p>
            </div>

            <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                <ul class="social-icon">

                    <li class="social-icon-item">
                        <a href="https://www.facebook.com/profile.php?id=100063612780545" class="social-icon-link bi-facebook"></a>
                    </li>

                    <li class="social-icon-item">
                        <a href="https://api.whatsapp.com/send?phone=%2B254758259848&fbclid=IwAR0iovS2BDbd02ZYLp0CiPdmuoOb4iPEPJl-u4Pb3TJySQvlVntivx4g97Y" class="social-icon-link bi-whatsapp"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="images/logo-1.png" class="logo img-fluid" alt="">
            <span>
                <h5 style="font-size: 15px">St. Timothy Anglican Divinity College</h5>
                        <small>Transforming Society For God</small>
                    </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink"
                       role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="/history">Our History</a></li>

                        <li><a class="dropdown-item" href="/mission">Our Mission</a></li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/courses">Courses</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/contact">Contact</a>
                </li>

                <li class="nav-item ms-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="nav-link custom-btn custom-border-btn btn" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                        Apply Now
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="custom-form contact-form" action="/course-apply" method="post" role="form">
                @csrf
                <h2>Apply Here</h2>


                </p>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <input type="text" name="first_name" id="first_name" class="form-control"
                               placeholder="First Name" required>
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <input type="text" name="last-name" id="last-name" class="form-control"
                               placeholder="Last Name" required>
                    </div>
                </div>

                <input type="email" name="email" id="email"  class="form-control"
                       placeholder="Email" required>
                <input type="text" name="number" id="email"  class="form-control"
                       placeholder="Contact" required>
                <select class="form-select form-control" name="course" aria-label="Default select example">
                    <option selected>Select Course</option>
                    <option value="Diploma in Sacred Ministries">Diploma in Sacred Ministries</option>
                    <option value="Diploma in Counselling Psychology">Diploma in Counselling Psychology</option>
                    <option value="Diploma in Business Management">Diploma in Business Management</option>
                    <option value="Certificate in Sacred Ministries">Certificate in Sacred Ministries</option>
                    <option value="Certificate in Counselling Psychology">Certificate in Counselling Psychology
                    </option>
                    <option value="Accounts">Accounts</option>
                    <option value="ICT">ICT</option>
                    <option value="Computer Packages<">Computer Packages</option>

                </select>
                <input type="text" name="country" id="email"  class="form-control"
                       placeholder="Country" required>


                <textarea name="message" rows="5" class="form-control" id="message"
                          placeholder="Your Message"></textarea>



            <div class="modal-footer">

                <button type="button" class="btn btn-secondary col-3" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="custom-btn btn" style="width: 100px">Apply</button>

            </div>
            </form>
        </div>
    </div>
</div>

</div>
