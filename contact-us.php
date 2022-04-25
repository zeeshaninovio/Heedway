<!-- App Include Here -->
<?php include 'inc/app.php';?>
<!-- App Include Here -->

<!-- Css Stylesheet -->
<link rel="stylesheet" href="css/contact-us.css">
<!-- Css Stylesheet -->

<!-- body section start here -->
<section class="about-us-page">
    <div class="head">
        <div class="contact-us-overlay"></div>
        <h1>Contact</h1>
    </div>
    <div class="about-us-section">
        <div class="row">
            <div class="col-md-6">
                <div class="back-video">
                    <video loop="true" autoplay="autoplay" muted="">
                        <source src="img/contact-us2.mp4" type="video/mp4">
                    </video>
                    <div class="contact-us-overlay1"></div>
                    <div class="contact-info-sec">
                        <h3>Contact Info</h3>
                        <p>
                            Phasellus auctor, velit vel porta condimentum, orci mauris gravida tortor, vel congue lacus
                            lorem eget ex. Vestibulum odio turpis, dictum quis massa vitae, ultricies gravida ipsum.
                        </p>
                        <div>
                            <div class="contactus-content">
                                <i aria-hidden="true" class="fas fa-search-location"></i>
                                <h6>123th, Round Street, Pekanbaru.</h6>
                            </div>
                            <div class="contactus-content">
                                <a href="tel:602-989-1990"><i aria-hidden="true" class="fas fa-phone-alt"></i>
                                    <h6 class="">602-989-1990</h6>
                                </a>
                            </div>
                            <div class="contactus-content">
                                <a href="mailto:cindywebb@heedwaycorporatetraining.com"><i aria-hidden="true"
                                        class="fas fa-envelope"></i>
                                    <h6>cindywebb@heedwaycorporatetraining.com</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="inputname">Name</label>
                                <input type="text" class="form-control" id="inputname" required="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="inputemail">E-mail</label>
                                <input type="email" class="form-control" id="inputemail" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="">
                                <label for="inlineFormInputGroup">Phone Number</label>
                                <input type="tel" class="form-control" name="number" id="number"
                                    placeholder="+ 123 456 789" required="">
                                <div class="input-group mb-2">


                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="">
                                <label for="inputdate">Date</label>
                                <input type="text" class="form-control" name="inputdate" id="inputdate"
                                    placeholder="mm/dd/yyyy" required="">
                                <div class="input-group mb-2">


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message *</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required=""
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <input class="contact-submit" type="submit" value="book online now">
                </form>
            </div>
        </div>
        <div class="map-contact">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.50140102212!2d-0.12123328434360657!3d51.50401661877181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2slastminute.com%20London%20Eye!5e0!3m2!1sen!2s!4v1650926070280!5m2!1sen!2s"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- body section end here -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php';?>
<!-- Footer Include Here -->