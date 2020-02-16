<footer id="footer" class="pBG pt-3">
        <div class="container-fluid">
            <!-- Subscribe & Social Media Row -->
            <div id="subscribe-row" class="row">
                <!-- Subscribe Col -->
                <div class="col-sm-6 col-md-6 col-lg-8">

                    <div class="input-group mb-2 ">
                        <!-- Subscribe Form -->
                        <form action="" class="d-flex " method="post">
                            <input type="email" class=" p-2  form-control" placeholder="Enter Email Address Here"
                                aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                            <button class="input-group-append p-2 form-control w-auto">Subscribe</button>
                        </form>
                    </div>

                </div>
                <!-- Icons Section -->
                <div class="col-sm-6 col-md-6 col-lg-4 d-flex  justify-content-between pb-2">

                    <div class="img-fluid ">
                        <a href="https://www.youtube.com/channel/UCATgbHbBBDeEJVMH2qFdEVA" target="_blank"><img
                                src="images/media-icons/youtube.png" alt="" class="img-fluid grayscale" /> </a>
                    </div>
                    <div class="img-fluid "><a href="http://www.twitter.com" target="_blank"><img
                                src="images/media-icons/twitter.png" alt="" class="img-fluid grayscale" /></a></div>
                    <div class="img-fluid "><a href="http://www.facebook.com" target="_blank"><img
                                src="images/media-icons/facebook.png" alt="" class="grayscale img-fluid" /></a></div>
                    <div class="img-fluid "><a href="http://www.flickr.com" target="_blank"><img
                                src="images/media-icons/flickr.png" alt="" class="grayscale img-fluid" /></a></div>

                </div>
            </div>
            <hr>
            <div class="row py-4 text-center">
                <!-- Contact Us-->
                <div class="col-md-4 ">
                    <h4 class="tGB">Contact Us</h4>
                    <div class="card ">
                        <ul class="list-group list-group-flash text-center">
                            <li class="list-group-item"> Kerugoya Kutus Town </li>
                            <li class="list-group-item"> <i class="fas fa-phone-volume fa-1x"></i> +254791342771</li>
                            <li class="list-group-item"> <i class="fas fa-envelope fa-1x"></i> info@kyucu.co.ke</li>
                            <li class="list-group-item"> P. O. Box 183–10303 <br>
                                kutus </li>
                        </ul>
                    </div>
                </div>

                <!-- Location-->
                <div class="col-md-4 tGB">
                    <h4>Location</h4>
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6231837372593!2d37.31809741475345!3d-0.5666725995865723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182629b5a37f6381%3A0x859cebe37dc37639!2sKirinyaga+University!5e0!3m2!1sen!2ske!4v1563723692972!5m2!1sen!2ske"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>


                </div>

                <!-- Feedback-->
                <div class="col-md-4 ">
                    <h4 class="tGB">Feedback</h4>
                    <div class="card card-body">
                        <form method="post" action="includes\comment.inc.php">
                            <div class="row text-dark">
                                <div class="col-md-6 form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                        anyone
                                        else.</small>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="exampleInputPassword1">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                        required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <textarea name="comment" id="comment" cols="30" rows="4" class="w-100"
                                        required></textarea>
                                </div>

                            </div>

                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target=".bd-example-modal-sm">Submit</button>

                            <!-- Submit modal -->
                            <div class="modal fade bd-example-modal-sm text-dark" tabindex="-1" role="dialog"
                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content p-3">
                                        <p> Are You sure You Want to Submit Your Feedback?</p>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Yes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>


            </div>
        </div>
        </div>
        <div class="container-fluid" id="last-row">

            <p id="last-row-para" class="text-center mb-0 mx-auto"> &copy; Kirinyaga University Christian Union <?php echo date('M Y') ; ?></p>
        </div>
    </footer>