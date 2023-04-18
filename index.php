<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoubleCheck Web</title>
    <!-- Alpine Js cdn -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!-- Google Fonts CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald&family=Rubik+Gemstones&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5 cdn links -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/jpg" href="assets/images/surveybay-favicon.jpg">
    <!-- Font awesome cdn -->
    <script src="https://kit.fontawesome.com/1a015cf62c.js" crossorigin="anonymous"></script>
    <!-- Css Links -->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- js link -->
    <script defer src="assets/js/index.js"></script>
</head>

<body>

    <?php include('modules/navbar.php'); ?>

    <main class="main-body-container">
        <section class="hero-setion-container" id="hero-section">
            <div class="container">
                <div class="row hero-section-wrapper">
                    <div class="hero-text-wrapper">
                        <div class="hero-heading-text">
                            Not Sure If <br> He Or She Is Single?
                        </div>
                        <a role="link" href="#waitlist-section" class="btn hero-action-btn">Find Out Here!</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-section-container" id="about-section">
            <div class="container">
                <div class="row about-section-wrapper">
                    <div class="about-section-heading-text">About Us</div>
                    <div class="about-section-main-text">So here’s a scenario, you meet someone, everything checks out
                        with him/her and you’re seriously considering taking the talking stage to the next level,
                        however you want to be sure they aren’t playing games with you. You need to be certain there
                        isn’t someone else in the picture while you are totally oblivious. We don’t want you to
                        encounter any surprises in the future so we created an avenue for you to authenticate the
                        relationship status of the person you like.
                    </div>
                    <div class="about-section-sub-text"><span>
                            <div class="logo-text">DoubleCheck <strong><sup
                                        class="logo-heart-icon">&hearts;</sup></strong>
                            </div>
                        </span> helps you confirm if your date potential/prospect is truly available or not.
                    </div>
                </div>
            </div>
        </section>
        <section class="process-section-container" id="how-it-works-section">
            <div class="container">
                <div class="row process-section-wrapper" style="gap:12.5%;">
                    <div class="process-section-heading-text">How It Works</div>
                    <div class="row process-section-content-wrapper">
                        <div class="process-item col-12">
                            <div class="process-item counter"></div>
                            <div class="dotted-line-svg-wrapper col-5">
                                <svg class="dotted-line-svg" xmlns="http://www.w3.org/2000/svg" width="385" height="36"
                                    viewBox="0 0 385 36" style="width: 100%;height: 50%;">
                                    <g fill="currentColor" fill-rule="evenodd" transform="translate(10 10)">
                                        <path stroke="#e64398" stroke-dasharray="5" stroke-linecap="round"
                                            d="M27 8.5L1237 8.5"></path>
                                        <circle cx="25" cy="8" r="20" fill="#e64398" stroke="#e64398" stroke-width="10">
                                        </circle>
                                    </g>
                                </svg>
                            </div>
                            <div class="process-item-text col-7 ms-5">
                                Share any of your date prospect/potential’s social media handle <br> (it could be either
                                Facebook,Twitter,Instagram,Tiktok,Snapchat etc)
                            </div>
                        </div>
                        <div class="process-item col-12">
                            <div class="process-item counter"></div>
                            <div class="dotted-line-svg-wrapper col-5">
                                <svg class="dotted-line-svg" xmlns="http://www.w3.org/2000/svg" width="385" height="36"
                                    viewBox="0 0 385 36" style="width: 100%;height: 50%;">
                                    <g fill="currentColor" fill-rule="evenodd" transform="translate(10 10)">
                                        <path stroke="#e64398" stroke-dasharray="5" stroke-linecap="round"
                                            d="M27 8.5L1237 8.5"></path>
                                        <circle cx="25" cy="8" r="20" fill="#e64398" stroke="#e64398" stroke-width="10">
                                        </circle>
                                    </g>
                                </svg>
                            </div>
                            <div class="process-item-text col-7 ms-5">
                                Our proprietary AI powered digital footprints search algorithm will get to work pronto!
                            </div>
                        </div>
                        <div class="process-item col-12">
                            <div class="process-item counter"></div>
                            <div class="dotted-line-svg-wrapper col-5">
                                <svg class="dotted-line-svg" xmlns="http://www.w3.org/2000/svg" width="385" height="36"
                                    viewBox="0 0 385 36" style="width: 100%;height: 50%;">
                                    <g fill="currentColor" fill-rule="evenodd" transform="translate(10 10)">
                                        <path stroke="#e64398" stroke-dasharray="5" stroke-linecap="round"
                                            d="M27 8.5L1237 8.5"></path>
                                        <circle cx="25" cy="8" r="20" fill="#e64398" stroke="#e64398" stroke-width="10">
                                        </circle>
                                    </g>
                                </svg>
                            </div>
                            <div class="process-item-text col-7 ms-5">
                                Voila! Your search result is ready!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="waitlist-section-container" id="waitlist-section">
            <div class="container">
                <div class="row waitlist-section-wrapper align-items-center">
                    <div class="waitlist-section-heading-text">Join Our Waitlist</div>
                    <div class="waitlist-section-sub-text">Be the first to know when we go live fully, Sign up now!
                    </div>
                    <div class="waitlist-form-wrapper">
                        <form action="">
                            <div class="input-wrapper mb-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="waitlist-name" placeholder="John Doe">
                                    <label for="waitlist-name">Name</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="waitlist-email"
                                        placeholder="name@doublecheck.com">
                                    <label for="waitlist-email">Email address</label>
                                </div>
                                <div class="form-floating mb-3 d-flex justify-content-between">
                                    <select name="gender" id="waitlist-gender">
                                        <option selected>Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" list="waitlist-country" class="form-control" id="country"
                                        placeholder="e.g Nigeria">
                                    <label for="waitlist-email">Select Country</label>
                                    <datalist id="waitlist-country" name="country">
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Aland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, Democratic Republic of the Congo</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Cote D'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curacao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and Mcdonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="XK">Kosovo</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthelemy</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="CS">Serbia and Montenegro</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.s.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </datalist>
                                </div>

                                <div class="form-floating mb-5 payment-input-wrapper">
                                    <input type="tel" class="form-control" id="waitlist-amount" placeholder="Amount">
                                    <label for="waitlist-price">How Much Are You willing to pay for this
                                        service?</label>
                                    <svg class="dollar-svg-icon" xmlns="http://www.w3.org/2000/svg" width="20px"
                                        height="20px" viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M16.1538 7.15382C15.2054 6.20538 13.5351 5.54568 12 5.50437M7.84619 16.1538C8.73855 17.3436 10.3977 18.0222 12 18.0798M12 5.50437C10.1735 5.45522 8.5385 6.2815 8.5385 8.53845C8.5385 12.6923 16.1538 10.6154 16.1538 14.7692C16.1538 17.1383 14.127 18.1562 12 18.0798M12 5.50437V3M12 18.0798V20.9999"
                                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <div class="btn-submit-wrapper">
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq-section-container" id="faq-section">
            <div class="container">
                <div class="row faq-section-wrapper">
                    <div class="faq-section-heading-text">FAQ</div>
                    <div class="accordion" id="faq-accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-body-1" aria-expanded="true" aria-controls="faq-body-1">
                                    Will the social media handle submitted be hacked?
                                </button>
                            </h2>
                            <div id="faq-body-1" class="accordion-collapse collapse show" aria-labelledby="faq-1"
                                data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <div class="faq-accordion-text">
                                        No, We use priopetary AI software to run through the accounts.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-body-2" aria-expanded="true" aria-controls="faq-body-2">
                                    How long does it take?
                                </button>
                            </h2>
                            <div id="faq-body-2" class="accordion-collapse collapse" aria-labelledby="faq-2"
                                data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <div class="faq-accordion-text">
                                        2- 3 days.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-body-3" aria-expanded="false" aria-controls="faq-body-3">
                                    Can I find out about more than one person?
                                </button>
                            </h2>
                            <div id="faq-body-3" class="accordion-collapse collapse" aria-labelledby="faq-3"
                                data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <div class="faq-accordion-text">
                                        Yes, Sure you can!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-body-4" aria-expanded="false" aria-controls="faq-body-4">
                                    How authentic are the results?
                                </button>
                            </h2>
                            <div id="faq-body-4" class="accordion-collapse collapse" aria-labelledby="faq-4"
                                data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <div class="faq-accordion-text">
                                        90% Accurate.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faq-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-body-5" aria-expanded="false" aria-controls="faq-body-5">
                                    Will they know they are being investigated?
                                </button>
                            </h2>
                            <div id="faq-body-5" class="accordion-collapse collapse" aria-labelledby="faq-5"
                                data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <div class="faq-accordion-text">
                                        No, that's the uniqueness of &nbsp;
                                        <span class="logo-text">DoubleCheck <strong><sup class="logo-heart-icon"
                                                    style="font-size: 14px;">
                                                    &hearts;</sup>
                                            </strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include('modules/footer.php'); ?>

</body>

</html>