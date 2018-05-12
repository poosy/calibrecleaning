<?php /* Template Name: Booking Demo */ get_header(); ?>

<main class='bgr-gray page-template-page-booking'>

      <!-- Begin of  .subheader -->
      <section class="subheader p0">
        <div class="tableize tableize--full tableize--middle">
          <div class="tableize__cell">
            <div>
              <div class="container">
                <div class="subheader__content">
                  <h1 class='color-white type-bold text-center type-uppercase lh-1 mb-'>TELL US ABOUT YOUR HOUSE</h1>
                  <p class="type-extrahuge text-center color-white type-light type-uppercase mb+">WE DON’t share your personal information with anyone.</p>
                  <div class="layout layout--center">
                    <div class="layout__item 1/3 large-and-up-1/5 text-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-booking1.png" alt="" class="mb-">
                      <p class="color-white type-uppercase type-bold">House Details</p>
                    </div>
                    <div class="layout__item 1/3 large-and-up-1/5 text-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-booking2.png" alt="" class="mb-">
                      <p class="color-white type-uppercase type-bold">YOUR Location</p>
                    </div>
                    <div class="layout__item 1/3 large-and-up-1/5 text-center">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-booking3.png" alt="" class="mb-">
                      <p class="color-white type-uppercase type-bold">Payment</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End of .subheader  -->

      <section id='booking-content'>
        <div class="container">
          <h2 class="type-uppercase color-gray text-center mb+">YOU’RE STEP AWAY FROM AWESOME PRO PAINTER!</h2>
        </div>
        <div class="container container--middle">
          <div class="layout">
            <div class="layout__item large-and-up-2/3">
              <div class="radius bgr-white">
                <form action="">
                  <article class="text-center no-border">
                    <h3 class="color-gray">Complete your booking.</h3>
                    <p class="type-light type-large color-gray">Great! Few details and we can complete your booking.</p>
                  </article>
                  <article>
                    <h4 class="color-gray mb--">Contact Information</h4>
                    <p class="color-gray-light type-small mb">This information will be used to contact you about your service</p>
                    <div class="layout">
                      <div class="layout__item large-and-up-1/2">
                        <label><input type="text" class="input input--primary input--full" placeholder='First Name'></label>
                      </div>
                      <div class="layout__item large-and-up-1/2">
                        <label><input type="text" class="input input--primary input--full" placeholder='Last Name'></label>
                      </div>
                      <div class="layout__item large-and-up-1/2">
                        <label><input type="email" class="input input--primary input--full" placeholder='Email'></label>
                      </div>
                      <div class="layout__item large-and-up-1/2">
                        <label><span class='phone-before'>+1</span><input type="text" class="input input--primary input--full" placeholder='Phone Number'></label>
                      </div>
                    </div>
                  </article>
                  <article>
                    <h4 class="color-gray mb--">Service Address</h4>
                    <p class="color-gray-light type-small mb">Where would you like us to provide our service?</p>
                    <div class="layout">
                      <div class="layout__item large-and-up-1/2">
                        <label><input type="text" class="input input--primary input--full" placeholder='Street Address'></label>
                      </div>
                      <div class="layout__item large-and-up-1/2">
                        <label><input type="text" class="input input--primary input--full" placeholder='Apt # (optional)'></label>
                      </div>
                      <div class="layout__item large-and-up-1/3">
                        <label><input type="text" class="input input--primary input--full" placeholder='City'></label>
                      </div>
                      <div class="layout__item large-and-up-1/3">
                        <select id="booking_state" name="" data-custom-class="select--full" data-placeholder="State">
                          <option value="AK">AK</option>
                          <option value="AL">AL</option>
                          <option value="AR">AR</option>
                          <option value="AZ">AZ</option>
                          <option value="CA">CA</option>
                          <option value="CO">CO</option>
                          <option value="CT">CT</option>
                          <option value="DC">DC</option>
                          <option value="DE">DE</option>
                          <option value="FL">FL</option>
                          <option value="GA">GA</option>
                          <option value="HI">HI</option>
                          <option value="IA">IA</option>
                          <option value="ID">ID</option>
                          <option value="IL">IL</option>
                          <option value="IN">IN</option>
                          <option value="KS">KS</option>
                          <option value="KY">KY</option>
                          <option value="LA">LA</option>
                          <option value="MA">MA</option>
                          <option value="MD">MD</option>
                          <option value="ME">ME</option>
                          <option value="MI">MI</option>
                          <option value="MN">MN</option>
                          <option value="MO">MO</option>
                          <option value="MS">MS</option>
                          <option value="MT">MT</option>
                          <option value="NC">NC</option>
                          <option value="ND">ND</option>
                          <option value="NE">NE</option>
                          <option value="NH">NH</option>
                          <option value="NJ">NJ</option>
                          <option value="NM">NM</option>
                          <option value="NV">NV</option>
                          <option value="NY">NY</option>
                          <option value="OH">OH</option>
                          <option value="OK">OK</option>
                          <option value="OR">OR</option>
                          <option value="PA">PA</option>
                          <option value="RI">RI</option>
                          <option value="SC">SC</option>
                          <option value="SD">SD</option>
                          <option value="TN">TN</option>
                          <option value="TX">TX</option>
                          <option value="UT">UT</option>
                          <option value="VA">VA</option>
                          <option value="VT">VT</option>
                          <option value="WA">WA</option>
                          <option value="WI">WI</option>
                          <option value="WV">WV</option>
                          <option value="WY">WY</option></select>
                      </div>
                      <div class="layout__item large-and-up-1/3">
                        <label><input type="text" class="input input--primary input--full" placeholder='Zipcode'></label>
                      </div>
                    </div>
                  </article>
                  <article>
                    <div class="layout">
                      <div class="layout__item large-and-up-1/2">
                        <label><input type="text" class="input input--primary input--full" placeholder='Promo code (optional)'></label>
                      </div>
                      <div class="layout__item large-and-up-1/2">
                        <button class="btn btn--primary btn--h45 btn--small-radius btn--full type-uppercase type-default">Apply</button>
                      </div>
                    </div>
                  </article>
                  <!-- <article>
                    <h4 class="color-gray mb">Choose Your Service</h4>
                    <div class="layout layout--top">
                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--icon" type="checkbox" id="chk1" name="chk" value="1" />
                          <label for="chk1">
                            <div class="img-wrap"><img src="images/icons/icon-form1.png" alt=""></div>
                          </label>
                          <p>lawn mulching</p>
                        </div>
                      </div>

                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--icon" type="checkbox" id="chk2" name="chk" value="1" />
                          <label for="chk2">
                            <div class="img-wrap"><img src="images/icons/icon-form2.png" alt=""></div>
                          </label>
                          <p>leaf removal</p>
                        </div>
                      </div>

                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--icon" type="checkbox" id="chk3" name="chk" value="1" />
                          <label for="chk3">
                            <div class="img-wrap"><img src="images/icons/icon-form3.png" alt=""></div>
                          </label>
                          <p>grass removal</p>
                        </div>
                      </div>

                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--icon" type="checkbox" id="chk4" name="chk" value="1" />
                          <label for="chk4">
                            <div class="img-wrap"><img src="images/icons/icon-form4.png" alt=""></div>
                          </label>
                          <p>weed treatment</p>
                        </div>
                      </div>
                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--icon" type="checkbox" id="chk5" name="chk" value="1" />
                          <label for="chk5">
                            <div class="img-wrap"><img src="images/icons/icon-form5.png" alt=""></div>
                          </label>
                          <p>hedge cutting</p>
                        </div>
                      </div>

                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--icon" type="checkbox" id="chk6" name="chk" value="1" />
                          <label for="chk6">
                            <div class="img-wrap"><img src="images/icons/icon-form6.png" alt=""></div>
                          </label>
                          <p>fertilizing</p>
                        </div>
                      </div>

                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--icon" type="checkbox" id="chk7" name="chk" value="1"/>
                          <label for="chk7">
                            <div class="img-wrap"><img src="images/icons/icon-form7.png" alt=""></div>
                          </label>
                          <p>pathway edging</p>
                        </div>
                      </div>

                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--icon" type="checkbox" id="chk8" name="chk" value="1" />
                          <label for="chk8">
                            <div class="img-wrap"><img src="images/icons/icon-form8.png" alt=""></div>
                          </label>
                          <p>aerating</p>
                        </div>
                      </div>
                    </div>
                  </article> -->
                  <article>
                    <h4 class="color-gray mb">What do you want to paint?</h4>
                    <div class="layout layout--middle mb-">
                      <div class="layout__item large-and-up-1/2">
                        <select name="" data-custom-class="select--full select--small" data-placeholder="Bedrooms">
                          <option>0</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                      </div>
                      <div class="layout__item large-and-up-1/2">
                        <select name="" data-custom-class="select--full select--small" data-placeholder="Bathrooms">
                          <option>0</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                      </div>
                    </div>
                    <div class="layout layout--middle mb">
                      <div class="layout__item large-and-up-1/2">
                        <div class="justifize">
                          <div class="justifize__box"><span class="pl-">Living Room</span></div>
                          <div class="justifize__box">
                            <div class="radio-yes-no-wrap">
                              <div class="radio_wrap">
                                <input type="radio" id="r-yes1" name="r-yes-no-1" class="styled-radiobutton--text styled-radiobutton--text-colored"/>
                                <label for="r-yes1" class='radio'><div class="verticalize">Yes</div></label>
                              </div>
                              <div class="radio_wrap">
                                <input type="radio" id="r-no1" name="r-yes-no-1" class="styled-radiobutton--text styled-radiobutton--text-colored" checked />
                                <label for="r-no1" class='radio'><div class="verticalize">No</div></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="layout__item large-and-up-1/2">
                        <div class="justifize">
                          <div class="justifize__box"><span class="pl-">Kitchen</span></div>
                          <div class="justifize__box">
                            <div class="radio-yes-no-wrap">
                              <div class="radio_wrap">
                                <input type="radio" id="r-yes2" name="r-yes-no-2" class="styled-radiobutton--text styled-radiobutton--text-colored"/>
                                <label for="r-yes2" class='radio'><div class="verticalize">Yes</div></label>
                              </div>
                              <div class="radio_wrap">
                                <input type="radio" id="r-no2" name="r-yes-no-2" class="styled-radiobutton--text styled-radiobutton--text-colored" checked />
                                <label for="r-no2" class='radio'><div class="verticalize">No</div></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </article>
                  <article>
                    <h4 class="color-gray mb">Anything else to paint?</h4>
                    <div class="layout mb">
                      <div class="layout__item large-and-up-1/2">
                        <select name="" data-custom-class="select--full select--small" data-placeholder="Aditional Rooms">
                          <option>0</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                        <small class="type-small color-gray-light">Dining area, hallway, closet, foyer, stairwell, etc.</small>
                      </div>
                      <div class="layout__item large-and-up-1/2">
                        <select name="" data-custom-class="select--full select--small" data-placeholder="Doors">
                          <option>0</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                        <small class="type-small color-gray-light">Include both room doors and closet doors.</small>
                      </div>
                    </div>
                  </article>
                  <article>
                    <h4 class="color-gray mb--">Trim</h4>
                    <p class="color-gray-light type-small mb">Baseboards, door frames, crown molding, and ceiling trim can have different paint types or colors.</p>

                    <div class="justifize mb">
                      <div class="justifize__box">Baseboards &amp; Door frames</div>
                      <div class="justifize__box">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--default styled-checkbox--default-large" type="checkbox" id="chk1" name="chk" value="1" />
                          <label for="chk1">
                            <span><b></b></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="justifize mb">
                      <div class="justifize__box">Crown molding or Ceiling trim</div>
                      <div class="justifize__box">
                        <div class="checkbox_wrap">
                          <input class="styled-checkbox styled-checkbox--default styled-checkbox--default-large" type="checkbox" id="chk2" name="chk" value="1" />
                          <label for="chk2">
                            <span><b></b></span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="justifize">
                      <div class="justifize__box"><span>Ceiling</span></div>
                      <div class="justifize__box">
                        <div class="radio-yes-no-wrap">
                          <div class="radio_wrap">
                            <input type="radio" id="r-yes3" name="r-yes-no-3" class="styled-radiobutton--text styled-radiobutton--text-colored" />
                            <label for="r-yes3" class='radio'><div class="verticalize">Yes</div></label>
                          </div>
                          <div class="radio_wrap">
                            <input type="radio" id="r-no3" name="r-yes-no-3" class="styled-radiobutton--text styled-radiobutton--text-colored" checked />
                            <label for="r-no3" class='radio'><div class="verticalize">No</div></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article class='ceiling-box pb'>
                    <h4 class="color-gray mb--">What is your ceiling hight?</h4>
                    <p class="color-gray-light type-small mb">Most ceilings are under 10ft. If it takes 2 people to reach, then it's 10-14 ft. If 3 people, 14+ ft.</p>

                    <div class="justifize mb">
                      <div class="justifize__box"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ceiling.png" alt="" class="inline-block align-top"><span class="ceiling-box__number">1+</span><div class="ceiling-box__text">Under 10 feet</div></div>
                      <div class="justifize__box">
                        <div class="radio-check-wrap">
                          <div class="radio_wrap">
                            <input type="radio" id="radio-check1" name="radio-check1" class="radio-check-default radio-check-default-large"/>
                            <label for="radio-check1" class='radio'>
                              <span><b></b></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="justifize mb">
                      <div class="justifize__box"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ceiling.png" alt="" class="inline-block align-top"><span class="ceiling-box__number">2+</span><div class="ceiling-box__text">10 to 14 feet</div></div>
                      <div class="justifize__box">
                        <div class="radio-check-wrap">
                          <div class="radio_wrap">
                            <input type="radio" id="radio-check2" name="radio-check1" class="radio-check-default radio-check-default-large"/>
                            <label for="radio-check2" class='radio'>
                              <span><b></b></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="justifize mb">
                      <div class="justifize__box"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-ceiling.png" alt="" class="inline-block align-top"><span class="ceiling-box__number">3+</span><div class="ceiling-box__text">Above 14 feet</div></div>
                      <div class="justifize__box">
                        <div class="radio-check-wrap">
                          <div class="radio_wrap">
                            <input type="radio" id="radio-check3" name="radio-check1" class="radio-check-default radio-check-default-large"/>
                            <label for="radio-check3" class='radio'>
                              <span><b></b></span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <hr>

                    <div class="justifize">
                      <div class="justifize__box"><span>Can we supply the paint?</span></div>
                      <div class="justifize__box">
                        <div class="radio-yes-no-wrap">
                          <div class="radio_wrap">
                            <input type="radio" id="r-yes4" name="r-yes-no-4" class="styled-radiobutton--text styled-radiobutton--text-colored"/>
                            <label for="r-yes4" class='radio'><div class="verticalize">Yes</div></label>
                          </div>
                          <div class="radio_wrap">
                            <input type="radio" id="r-no4" name="r-yes-no-4" class="styled-radiobutton--text styled-radiobutton--text-colored" checked />
                            <label for="r-no4" class='radio'><div class="verticalize">No</div></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- <article>
                    <h4 class="color-gray mb--">How often?</h4>
                    <p class="color-gray-light type-small mb">It’s all about matching you with the perfect professional for your lawn. Scheduling is flexible. Cancel or reschedule anytime.</p>
                    <div class="layout layout--top layout--small">
                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="radio_wrap">
                          <input type="radio" id="r11" name="rr2" class="styled-radiobutton--text styled-radiobutton--text-colored"/>
                          <label for="r11" class='radio'><div class="verticalize">1 time service</div></label>
                        </div>
                      </div>

                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="radio_wrap">
                          <input type="radio" id="r12" name="rr2" class="styled-radiobutton--text styled-radiobutton--text-colored"/>
                          <label for="r12" class='radio'><div class="verticalize">Every week</div></label>
                        </div>

                      </div>

                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="radio_wrap">
                          <input type="radio" id="r13" name="rr2" class="styled-radiobutton--text styled-radiobutton--text-colored" checked />
                          <label for="r13" class='radio'><div class="verticalize">Every 2 weeks</div></label>
                          <p>Most popular!</p>
                        </div>

                      </div>

                      <div class="layout__item medium-and-up-1/4 1/2">
                        <div class="radio_wrap">
                          <input type="radio" id="r14" name="rr2" class="styled-radiobutton--text styled-radiobutton--text-colored"  />
                          <label for="r14" class='radio'><div class="verticalize">Every 4 weeks</span></div></label>
                        </div>
                      </div>
                    </div>
                  </article> -->
                  <article>
                    <h4 class="color-gray mb--">Payment details</h4>
                    <p class="color-gray-light type-small mb">Enter your card information below. <br>You will be charged after service has been rendered.</p>
                    <div class="layout mb-">
                      <div class="layout__item large-and-up-1/3">
                        <input type="text" class="input input--primary input--full input--card" placeholder='card number'>
                      </div>
                      <div class="layout__item large-and-up-1/3">
                        <input type="text" class="input input--primary input--full input--cvc" placeholder='CVC'>
                      </div>
                      <div class="layout__item large-and-up-1/3">
                        <input type="text" class="input input--primary input--full input--date" placeholder='MM/YYYY'>
                      </div>
                    </div>

                    <div class="layout layout--small layout--bottom">
                      <div class="layout__item medium-and-up-1/2">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cards.png" alt="">
                      </div>
                      <div class="layout__item medium-and-up-1/2">
                        <div class="flag flag--small flag--bottom">
                          <div class="flag__img">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/icon-lock.png" alt="">
                          </div>
                          <div class="flag__body">
                            <p class="type-tiny color-gray-light lh-1">Safe and secure 256-BIT <br> SSL encrypted payment.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <article>
                    <p class="color-gray-light type-small mb">By clicking the Book Now button you are agreeing to our Terms of Service and Privacy Policy.</p>
                    <button class="btn btn--primary btn--full btn--small-radius type-bold">BOOK NOW</button>
                  </article>
                </form>
              </div>
            </div>

            <div class="layout__item large-and-up-1/3">
              <div class="layout__item--right-content radius bgr-white text-center mb">
                <article class="no-border p">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/booking-icon-small1.png" alt="" class="mb">
                    <h3 class="type-small type-bold type-uppercase color-gray mb--">INSURED SERVICES</h3>
                    <p class="type-small type-light">You’re in good company when you choose Lorem Ipsum.</p>
                </article>
                <article class="no-border p">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/booking-icon-small2.png" alt="" class="mb">
                    <h3 class="type-small type-bold type-uppercase color-gray mb--">FRIENDLY SERVICE</h3>
                    <p class="type-small type-light">Fast and friendly customer service folks and quick responses to emails.</p>
                </article>
                <article class="no-border p">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/booking-icon-small3.png" alt="" class="mb">
                    <h3 class="type-small type-bold type-uppercase color-gray mb--">WE PROVIDE SUPPLIES</h3>
                    <p class="type-small type-light">Our team partners bring everything they need.  We make things super easy.</p>
                </article>
                <article class="no-border p">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/booking-icon-small4.png" alt="" class="mb">
                    <h3 class="type-small type-bold type-uppercase color-gray mb--">SPEEDY CONFIRMATION</h3>
                    <p class="type-small type-light">Book and receive a confirmation within 30 minutes during normal biz hours.</p>
                </article>
                <article class="no-border p">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/booking-icon-small5.png" alt="" class="mb">
                    <h3 class="type-small type-bold type-uppercase color-gray mb--">SECURE GUARANTEE</h3>
                    <p class="type-small type-light">Pay nothing if unauthorized charges are made to your credit card as a result of booking with us.</p>
                </article>
                <article class="no-border p ph+ pb">
                  <a href="" class="btn btn--primary btn--transparent btn--small-radius btn--w210 mb">LEARN MORE</a>
                </article>
              </div>
              <div class="radius bgr-white text-center">
                <article class="no-border p">
                  <h2 class="h4 text-center color-red type-bold type-no-transform">Booking Summary</h2>
                </article>
                <article class="p pb-">
                  <div class="flag mb">
                    <div class="flag__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/booking1.png" alt="">
                    </div>
                    <div class="flag__body">
                      <p class="type-default type-light text-left">Room Painting Services</p>
                    </div>
                  </div>
                  <div class="flag mb">
                    <div class="flag__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/booking2.png" alt="">
                    </div>
                    <div class="flag__body">
                      <p class="type-default type-light text-left">Jul 12, 2015 @ 10:00 AM</p>
                    </div>
                  </div>
                  <div class="flag mb">
                    <div class="flag__img">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/icons/booking3.png" alt="">
                    </div>
                    <div class="flag__body">
                      <p class="type-default type-light text-left">2 Hours</p>
                    </div>
                  </div>
                <article class="p pb0">
                  <div class="justifize justifize--top">
                    <div class="justifize__box">
                      <p class="type-light lh-1 mb">SUBTOTAL <br>DISCOUNT</p>
                      <p class="color-dark type-bold type-normal">TOTAL:</p>
                    </div>
                    <div class="justifize__box">
                      <p class="type-light lh-1 mb-"><span class='text-right display-block'>$230.00</span><span class='text-right display-block'>$0.00</span></p>
                      <p class="color-yellow type-bold type-normal type-super-huge">$230</p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>


    </main>

<?php get_footer(); ?>