<section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6 style="color: #FF4500;">Contact Us</h6>
                            <h2 style="font-weight: 500;">Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                        </div>
                        <p style="text-align: justify;">Your table is just a reservation away. To secure your spot and enjoy a seamless dining experience, please refer to the contact details below and make your reservation with us.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4 style="font-weight: 500;">Phone Numbers</h4>
                                    <span><a href="#">+94 767980099</a><br><a href="#">+94 767234509</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4 style="font-weight: 500;">Emails</h4>
                                    <span><a href="#">chow01@gmail.com</a><br><a href="#">chow02@gmail.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="{{url('reservation')}}" method="post">
                              @csrf

                          <div class="row">
                            <div class="col-lg-12">
                                <h4 style="font-weight: 500;">Table Reservation</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required>
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address*" required>
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <input name="phone" type="text" id="phone" placeholder="Phone Number*" required>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <fieldset>
                                <input  name="guest" type="number"  placeholder="Number of Guest" required>
                              </fieldset>
                            </div>
                            <div class="col-lg-6">
                                <div id="filterDate2">    
                                  <div class="input-group date" data-date-format="dd/mm/yyyy">
                                    <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy" required>
                                    <div class="input-group-addon" >
                                      <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                  </div>
                                </div>   
                            </div>
                            <div class="col-md-6 col-sm-12">
                            <fieldset>
                                <input  name="time" type="time" required>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required></textarea>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon" style="font-size: 15px; letter-spacing: 2px; border-radius: 10px;">Make A Reservation</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>