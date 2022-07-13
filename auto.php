<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <title>ThePhoenixQuotes</title>
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
      integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
      crossorigin="anonymous"
    /> -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    /> -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />

    <link href="assets/css/plugins.css" rel="stylesheet" /> 
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="multi-form.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"
      rel="stylesheet"
    />

    <!-- <link href="assets/css/yearpicker.css" rel="stylesheet" /> -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    
    <style type="text/css">
	.bgBorder-1 {
    border: 1px solid #e6e8eb !important;
    padding: 2px 4px;
	}
  </style>

    <!-- slider -->

    <!-- slider -->
  </head>
  <body>
  <div class="body-inner">
    <header id="header" class="light" data-transparent="false">
        <div class="header-inner">
          <div class="container">
            <div id="logo">
              <a href="index.php">
                <span class="logo-default"
                  ><img src="assets/img/logo.png" alt="" srcset=""
                /></span>
                <span class="logo-dark"
                  ><img src="assets/img/logo.png" alt="" srcset=""
                /></span>
              </a>
            </div>

            <!-- <div id="search">
              <a
                id="btn-search-close"
                class="btn-search-close"
                aria-label="Close search form"
                ><i class="icon-x"></i
              ></a>
              <form class="search-form" action="" method="get">
                <input
                  type="hidden"
                  name="csrfmiddlewaretoken"
                  value="7RregcsadywtuU34L7vGtjwqqb08qF1qd716hPbK8dGcKmVv3eq7WLTVossXQZXP"
                />
                <input
                  class="form-control"
                  name="q"
                  type="text"
                  placeholder="Type & Search..."
                />
                <span class="text-muted"
                  >Start typing & press "Enter" or "ESC" to close</span
                >
              </form>
            </div> -->

            <div id="mainMenu-trigger">
              <a class="lines-button x"><span class="lines"></span></a>
            </div>

            <div id="mainMenu">
              <div class="container">
                <nav>
                  <ul>
                    <li>
                      <a :active class="" href="index.php">HOME</a>
                    </li>
                    <li>
                      <a class="dropdown">SERVICES</a>
                      <ul class="dropdown-menu">
                        <!--<li><a href="#">AUTO</a></li>-->
                        <!--<li><a href="#">HEALTH</a></li>-->
                        <!--<li>-->
                        <!--  <a href="#">FINAL EXPENSE</a>-->
                        <!--</li>-->

                        <!--<li>-->
                        <!--  <a href="#">HOME INSURANCE</a>-->
                        <!--</li>-->
                        <li><a href="auto.php">AUTO INSURANCE</a></li>
                        <!--<li>-->
                        <!--  <a href="#">HOME IMPROVEMENT</a>-->
                        <!--</li>-->
                      </ul>
                    </li>

                    <!-- <li>
                      <a href="#">GET QUOTES</a>
                    </li> -->
                    <!-- <li>
                      <a href="#">ABOUT US</a>
                    </li> -->
                    <li>
                      <a href="terms.html">TERMS</a>
                    </li>
                    <li>
                      <a href="privacy.html">PRIVACY</a>
                    </li>
                    <li>
                      <a href="#">CONTACT US</a>
                    </li>
                    <li class="disp">
                      <a href="#">Terms</a>
                    </li>
                    <li class="disp">
                      <a href="#">Privacy</a>
                    </li>
                    <li class="disp">
                      <a href="#">Partners</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>

      <section id="page-title" style="background-image: url(assets/img/Coverauto.jpg);">
        <div class="container">
          <div class="page-title">
            <h1 class="text-uppercase text-medium">AUTO</h1>
            <span
              >securing the customer's interest and providing them with
              felicitous insurance deal.</span>
          </div>
        </div>
      </section>

<!-- wizard form -->

<div class="container">
    <h1></h1>
	<!-- <div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="40" aria-valuemax="100"></div>
	</div> -->
	
	<form id="regiration_form" action="autoaction.php" method="POST">
      <!-- <h1>Your Personal</h1> -->
      <!-- One "tab" for each step in the form: -->
      <div class="tab">
        <h3>Please fill Your Personal Information</h3>
        <div class="form-row d-flex">
          <div class="form-group col-md-6">
            <label for="username">First Name</label>
            <input
              type="text"
              id="fname"
              class="form-control"
              name="fname"
              required
            />
          </div>
          <div class="form-group col-md-6">
            <label for="username">Last Name</label>
            <input
              type="text"
              id="lname"
              class="form-control"
              name="lname"
              required
            />
          </div>
        </div>
        <div class="form-row d-flex">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              class="form-control"
              name="email"
              required
            />
          </div>
          <div class="form-group col-md-6">
            <label for="gender">Date of Birth</label>
            <input
              class="form-control"
              id="dob"
              type="date"
              value=""
              name="dateofbirth"
              required
            />
          </div>
        </div>
        <div class="form-row d-flex">
          <div class="form-group col-md-4">
            <label for="telephone">Phone</label>
            <input
              class="form-control"
              id="phone"
              type="tel"
              name="phone"
              required
            />
          </div>
          <div class="form-group col-md-4">
            <label for="address">Address</label>
            <input
              type="text"
              id="address"
              class="form-control"
              name="address"
              required
            />
          </div>

          <div class="form-group col-md-4">
            <label>Zip Code:</label>
            <input
              type="number"
              id="zip"
              class="form-control zipcode"
              name="zip"
              required
            />
          </div>
        </div>
      </div>

      <div class="tab">
        <div class="h3 mb-4">Please fill Your Auto Insurance Information</div>
        <div class="form-row d-flex">
          <div class="form-group col-md-4">
            <div class="">
              <label for="year">Year</label>
              <input type="text" class="form-control" name="datepicker" id="datepicker" required>
            </div>
          </div>

      <div class="form-group col-md-4">
      <label for="address2">Car Make</label>
        <select class="form-control" id="cmake" name="cmake" required>
          <option value=""></option>
          <option value="ALFA ROMEO">ALFA ROMEO</option>
          <option value="AMC">AMC</option>
          <option value="AUDI">AUDI</option>
          <option value="BMW">BMW</option>
          <option value="BUICK">BUICK</option>
          <option value="CADILLAC">CADILLAC</option>
          <option value="CHEVROLET">CHEVROLET</option>
          <option value="CHRYSLER">CHRYSLER</option>
          <option value="DATSUN">DATSUN</option>
          <option value="DODGE">DODGE</option>
          <option value="FORD">FORD</option>
          <option value="GMC">GMC</option>
          <option value="HONDA">HONDA</option>
          <option value="JAGUAR">JAGUAR</option>
          <option value="JEEP">JEEP</option>
          <option value="LINCOLN">LINCOLN</option>
          <option value="MAZDA">MAZDA</option>
          <option value="MERCDEZ BENZ">MERCDEZ BENZ</option>
          <option value="MERCURY">MERCURY</option>
          <option value="OLDSMOBILE">OLDSMOBILE</option>
          <option value="PLYMOUTH">PLYMOUTH</option>
          <option value="PONTIAC">PONTIAC</option>
          <option value="PORSCHE">PORSCHE</option>
          <option value="RENAULT">RENAULT</option>
          <option value="SAAB">SAAB</option>
          <option value="SABARU">SABARU</option>
          <option value="TOYOTA">TOYOTA</option>
          <option value="VOLKSWAGEN">VOLKSWAGEN</option>
          <option value="VOLVO">VOLVO</option>
          <option value="ISUZU">ISUZU</option>
          <option value="ACURA">ACURA</option>
          <option value="FIAT">FIAT</option>
          <option value="GENISIS">GENISIS</option>
          <option value="INFINITI">INFINITI</option>
          <option value="KIA">KIA</option>
          <option value="LAND ROVER">LAND ROVER</option>
          <option value="LEXUS">LEXUS</option>
          <option value="TESLA">TESLA</option>
          <option value="MINI">MINI</option>
          <option value="MITSUBISHI">MITSUBISHI</option>
          <option value="NISSAN">NISSAN</option>
          <option value="RAM">RAM</option>
          <option value="SMART">SMART</option>
        </select>
      </div>
      <div class="form-group col-md-4">
        <label for="address2">Model</label>
        <input type="text" id="model" class="form-control" name="model" required>
      </div>
        </div>

        <div class="form-row d-flex">
          <div class="form-group col-md-4">
            <div class="bgBorder">
              <label for="city">Are you insured from past 6 months?</label>
              <div class="form-check">
                <fieldset id="insured">
                  <label class="form-check-label" for="insured" style="width: 72px;"> YES </label>
                  <input type="radio" value="yes" name="insured" style="vertical-align: middle;" />
                  <br>
                  <label class="form-check-label" for="insured" style="width: 72px;"> NO </label>
                  <input type="radio" value="no" name="insured" style="vertical-align: middle;"/>
                </fieldset>
              </div>
            </div>
          </div>
          <div class="form-group col-md-4">
            <div class="bgBorder">
              <label for="city">Do you have any DUIs?</label>
              <div class="form-check">
                <fieldset id="dui">
                  <label class="form-check-label" for="dui" style="width: 72px;"> YES </label>    
                  <input type="radio" value="yes" name="dui" style="vertical-align: middle;"/>
                  <br>
                  <label class="form-check-label" for="dui" style="width: 72px;"> NO </label>
                  <input type="radio" value="no" name="dui" style="vertical-align: middle;"/>
                </fieldset>
              </div>
            </div>
          </div>
          <div class="form-group col-md-4">
            <div class="bgBorder">
              <label for="city">Do you have any accidents in past 6 months?</label>
              <div class="form-check">
                <fieldset id="accident">
                  <label class="form-check-label" for="accident" style="width: 72px;"> YES </label>    
                  <input type="radio" value="yes" name="accident" style="vertical-align: middle;"/>
                  <br>
                  <label class="form-check-label" for="accident" style="width: 72px;"> NO </label>
                  <input type="radio" value="no" name="accident" style="vertical-align: middle;"/>
                </fieldset>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row d-flex">
          <div class="form-group col-md-4">
            <div class="bgBorder">
              <label for="city">Do you have tickets in past 6 months?</label>
              <div class="form-check">
                <fieldset id="ticket">
                  <label class="form-check-label" for="ticket" style="width: 72px;"> YES </label>    
                  <input type="radio" value="yes" name="ticket" style="vertical-align: middle;"/>
                  <br>
                  <label class="form-check-label" for="ticket" style="width: 72px;"> NO </label>
                  <input type="radio" value="no" name="ticket" style="vertical-align: middle;"/>
                </fieldset>
              </div>
            </div>
          </div>

          <div class="form-group col-md-4">
            <div class="bgBorder">
              <label for="city">Home Owner?</label>
              <div class="form-check">
                <fieldset id="owner">
                  <label class="form-check-label" for="owner" style="width: 72px;"> YES </label>
                  <input type="radio" value="yes" name="owner" style="vertical-align: middle;"/>
                  <br>
                  <label class="form-check-label" for="owner" style="width: 72px;"> NO </label>
                  <input type="radio" value="no" name="owner" style="vertical-align: middle;"/>
                </fieldset>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      <div class="tab">
        <!-- <h3>Confirmation</h3> -->
        <div class="">
          <div class="h5 mb-4">Confimration</div>
          <p>
            By checking this box and submitting this form, I agree to the
            <a href="terms.html" target="_blank">Terms and Conditions</a> and
            <a href="privacy.html" target="_blank">Privacy Policy</a> and authorize
            insurance companies, their agents and marketing
            <a href="#" target="_blank"> partners</a> to contact me
            about Medicare insurance and other non-insurance offers by telephone
            calls and text messages to the number I provided above.
          </p>
          <p>
            I agree to receive telemarketing calls and pre-recorded messages via
            an auto dialed phone system, even if my telephone number is a mobile
            number that is currently listed on any state, federal or corporate
            Do Not Call list. I understand that my consent is not a condition of
            purchase of any goods or services and that I may revoke my consent
            at any time. I understand that standard message and data rates may
            apply.
          </p>
          <div class="form-group mb-1 mt-5">
            <div class="custom-control custom-checkbox">
              <input
                type="checkbox"
                name="reminders"
                id="reminders3"
                class="custom-control-input"
                required
              />
              <label
                class="custom-control-label"
                id="leadid_tcpa_disclosure"
                for="reminders3"
                >I AGREE</label>
            </div>
          </div>
          <!-- <div class="form-row d-flex">
          <div class="form-group col-6">
            <label for="">Agent Name</label>
            <input
              type="text"
              id="agname"
              class="form-control"
              name="agname"
              required
            />
          </div>
          </div> -->
        </div>
      </div>
      <div style="overflow: auto;">
        <div style="float: right; margin-top: 5px;">
          <button type="button" class="previous">Previous</button>
          <button type="button" class="next">Next</button>
          <button type="button" class="submit">Submit</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align: center; margin-top: 40px; display: none;">
        <span class="step">1</span>
        <span class="step">2</span>
        <!-- <span class="step">3</span> -->
        <span class="step">3</span>
      </div>
    </form>
</div>

<!-- <noscript><img src='//create.leadid.com/noscript.gif?lac=234b1f51-6336-9a31-5e22-81ab624567d5&lck=67f0c081-7c92-72d6-7fb6-482017f7abe6&snippet_version=2' /></noscript> -->

<footer id="footer">
        <div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="widget">
                  <div class="widget-title">ThePhoenixQuotes</div>
                  <p class="">
                  These five values Rule the way we do business and how we treat our colleagues and customers.</p>
                  <p class="mb-4">Righteousness, Customer Orientation, Aim, Brilliance, Gain</p>
                  <a href="#" class="btn btn-inverted btnGrey" target="_blank"
                    >Contact Us</a
                  >
                </div>
                
              </div>
              <div class="col-lg-7">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="widget">
                      <div class="widget-title">Services</div>
                      <ul class="list">
                        <!--<li><a href="#">Auto</a></li>-->
                        <!--<li><a href="#">Health</a></li>-->
                        <!--<li>-->
                        <!--  <a href="#">Final Expense</a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--  <a href="#">Home Insurance</a>-->
                        <!--</li>-->
                        <li><a href="auto.php">Auto</a></li>
                        <!--<li>-->
                        <!--  <a href="#">Home Improvement</a>-->
                        <!--</li>-->
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="widget">
                      <div class="widget-title">Policies</div>
                      <ul class="list">
                        <li><a href="terms.html">Terms</a></li>
                        <li><a href="privacy.html">Privacy</a></li>
                        <!-- <li><a href="#">Partners</a></li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="widget">
                      <div class="widget-title">Pages</div>
                      <ul class="list">
                        <!-- <li><a href="#">Blogs</a></li> -->
                        <!-- <li><a href="#">About us</a></li> -->
                        <li><a href="#">Contact us</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-content">
          <div class="container">
            <div class="copyright-text text-center txtA">
              <p style="color: #fff">
                © Copyright 2021 MedicareSolutionsJoy | All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <a id="scrollTop">
      <i class="fa">&#xf106;</i>
      <!-- <i class="icon-chevron-up"></i><i class="icon-chevron-up"></i> -->
    </a>
 
</body>
</html>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="multi-form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    var dp = $("#datepicker").datepicker({
      format: "yyyy",
      viewMode: "years",
      minViewMode: "years",
      startDate: "-30y",
      endDate: "+0y",
      autoclose: true,
    });
    //changeYear event trigger's
    /* dp.on('changeYear', function (e) {    
   //do something here
   alert("Year changed ");
    }); */
  </script>
<script type="text/javascript">
  $(document).ready(function () {
    $.validator.addMethod(
      "username",
      function (value, element, param) {
        var nameRegex = /^[a-zA-Z0-9]+$/;
        return value.match(nameRegex);
      },
      "Only a-z, A-Z, 0-9 characters are allowed"
    );

    var val = {
      // Specify validation rules
      rules: {
        fname: "required",
        lname: "required",
        email: {
          required: true,
          email: true,
        },
        phone: {
          required: true,
          minlength: 10,
          maxlength: 10,
          digits: true,
        },
        insured: {
          required: true,
        },
        dui: {
          required: true,
        },
        accident: {
          required: true,
        },
        ticket: {
          required: true,
        },
        owner: {
          required: true,
        },
      },
      // Specify validation error messages 
      messages: {
        fname: "First name is required",
        email: {
          required: "Email is required",
          email: "Please enter a valid e-mail",
        },
        phone: {
          required: "Phone number is requied",
          minlength: "Please enter 10 digit mobile number",
          maxlength: "Please enter 10 digit mobile number",
          digits: "Only numbers are allowed in this field",
        },
        username: {
          required: "Username is required",
          minlength: "Username should be minimum 4 characters",
          maxlength: "Username should be maximum 16 characters",
        },
      },
    };
    $("#regiration_form")
      .multiStepForm({
        // defaultStep:0,
        beforeSubmit: function (form, submit) {
          console.log("called before submiting the form");
          console.log(form);
          console.log(submit);
        },
        validations: val,
      })
      .navigateTo(0);
  });
</script>