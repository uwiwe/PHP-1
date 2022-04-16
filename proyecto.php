<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="proyecto.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<style>

    .background {
        background-color: #012169;
    }

</style>

<body class="lg:mt-10">

    <form action="resultados.php" method="post">

    <section class="lg:h-44 lg:max-w-none lg:flex lg:pb-10 lg:justify-center lg:pt-6 lg:pl-5 lg:pr-6">

        <img src="https://pbs.twimg.com/media/FQa2v3-XMAAP3WW?format=png&name=small" alt="">

    </section>

    <section class="lg:max-w-none lg:justify-center lg:ml-96 lg:mr-96 lg:pt-5 lg:pb-24">

        <p class="lg:mb-2 lg:text-lg">First name*</p>
        <input type="text" name="nombre1" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <p class="lg:mb-2 lg:text-lg">Middle name (optional)</p>
        <input type="text" name="nombre2" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <p class="lg:mb-2 lg:text-lg">Last name*</p>
        <input type="text" name="nombre3" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <?php
                $suffix = ["None", "Jr", "Sr", "II", "III", "IV", "V"];
                echo 
                '
                <p class="lg:mb-2 lg:text-lg">Suffix (optional)</p>
                <select name="elsuffix" class="lg:mb-4 lg:border-2 lg:h-10 lg:w-full lg:pl-3.5 lg:pr-3.5">
                ';
                foreach($suffix as $suffixes){
                        echo '<option value="'.$suffixes.'">'.$suffixes.'</option>';
                }
                echo '</select>';
            ?>

        <p class="lg:mb-2 lg:text-lg">Residential address line 1*</p>
        <input type="text" name="calle1" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <p class="lg:mb-2 lg:text-lg">Residential address line 2 (optional)</p>
        <input type="text" name="calle2" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <div class="">

        <p class="lg:mb-2 lg:text-lg">City*</p>
        <input type="text" name="ciudad" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <?php
                $state = ['Select', 'ALABAMA' => 'AL', 'ALASKA' => 'AK', 'ARIZONA' => 'AZ', 'ARKANSAS' => 'AR', 'CALIFORNIA' => 'CA', 'COLORADO' => 'CO', 'CONNECTICUT' => 'CT', 'DELAWARE' => 'DE', 'FLORIDA' => 'FL', 'GEORGIA' => 'GA', 'HAWAII' => 'HI', 'IDAHO' => 'ID', 'ILLINOIS' => 'IL', 'INDIANA' => 'IN', 'IOWA' => 'IA', 'KANSAS' => 'KS', 'KENTUCKY' => 'KY', 'LOUISIANA' => 'LA', 'MAINE' => 'ME', 'MARYLAND' => 'MD', 'MASSACHUSETTS' => 'MA', 'MICHIGAN' => 'MI', 'MINNESOTA' => 'MN', 'MISSISSIPPI' => 'MS', 'MISSOURI' => 'MO', 'MONTANA' => 'MT', 'NEBRASKA' => 'NE', 'NEVADA' => 'NV', 'NEW HAMPSHIRE' => 'NH', 'NEW JERSEY' => 'NJ', 'NEW MEXICO' => 'NM', 'NEW YORK' => 'NY', 'NORTH CAROLINA' => 'NC', 'NORTH DAKOTA' => 'ND', 'OHIO' => 'OH', 'OKLAHOMA' => 'OK', 'OREGON' => 'OR', 'PENNSYLVANIA' => 'PA', 'RHODE ISLAND' => 'RI', 'SOUTH CAROLINA' => 'SC', 'SOUTH DAKOTA' => 'SD', 'TENNESSEE' => 'TN', 'TEXAS' => 'TX', 'UTAH' => 'UT', 'VERMONT' => 'VT', 'VIRGINIA' => 'VA', 'WASHINGTON' => 'WA', 'WEST VIRGINIA' => 'WV', 'WISCONSIN' => 'WI', 'WYOMING' => 'WY', 'ALBERTA' => 'AB', 'BRITISH COLUMBIA' => 'BC', 'MANITOBA' => 'MB', 'NEW BRUNSWICK' => 'NB', 'NEWFOUNDLAND AND LABRADOR' => 'NL', 'NOVA SCOTIA' => 'NS', 'NORTWEST TERRITORIES' => 'NT', 'NUNAVUT' => 'NU', 'ONTARIO' => 'ON', 'PRINCE EDWARD ISLAND' => 'PE', 'QUEBEC' => 'QC', 'SASKATCHEWAN' => 'SK', 'YUKON' => 'YT', 'PUERTO RICO' => 'PR', 'VIRGIN ISLANDS' => 'VI', 'WASHINGTON DC' => 'DC'];
                echo 
                '
                <p class="lg:text-lg lg:mb-2">State*</p>
                <select name="estados" class="lg:mb-4 lg:border-2 lg:h-10 lg:w-full lg:pl-3.5 lg:pr-3.5">
                ';
                foreach($state as $states){
                        echo '<option value="'.$states.'">'.$states.'</option>';
                }
                echo '</select>';
            ?>

        <p class="lg:mb-2 lg:text-lg">ZIP code*</p>
        <input type="text" name="codigozip" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        </div>

        <div class="mt-4 mb-5">
        <label for="" class="lg:text-lg">Send my statement to a different address:</label>
        <input type="checkbox" id="statement" onclick="statement3x()" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">
        </div>

        <div id="statement3" style="display:none">

        <p id="statement1" class="lg:mb-2 lg:text-lg">Mailing address line 1*</p>
        <input type="text" name="mailingaddress1" id="statement1i" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">
        <p id="statement2" class="lg:mb-2 lg:text-lg">Mailing address line 2 (optional)</p>
        <input type="text" name="mailingaddress2" id="statement2i" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <p class="lg:mb-2 lg:text-lg">City*</p>
        <input type="text" name="ciudad2" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <?php
                $state = ['Select', 'ALABAMA' => 'AL', 'ALASKA' => 'AK', 'ARIZONA' => 'AZ', 'ARKANSAS' => 'AR', 'CALIFORNIA' => 'CA', 'COLORADO' => 'CO', 'CONNECTICUT' => 'CT', 'DELAWARE' => 'DE', 'FLORIDA' => 'FL', 'GEORGIA' => 'GA', 'HAWAII' => 'HI', 'IDAHO' => 'ID', 'ILLINOIS' => 'IL', 'INDIANA' => 'IN', 'IOWA' => 'IA', 'KANSAS' => 'KS', 'KENTUCKY' => 'KY', 'LOUISIANA' => 'LA', 'MAINE' => 'ME', 'MARYLAND' => 'MD', 'MASSACHUSETTS' => 'MA', 'MICHIGAN' => 'MI', 'MINNESOTA' => 'MN', 'MISSISSIPPI' => 'MS', 'MISSOURI' => 'MO', 'MONTANA' => 'MT', 'NEBRASKA' => 'NE', 'NEVADA' => 'NV', 'NEW HAMPSHIRE' => 'NH', 'NEW JERSEY' => 'NJ', 'NEW MEXICO' => 'NM', 'NEW YORK' => 'NY', 'NORTH CAROLINA' => 'NC', 'NORTH DAKOTA' => 'ND', 'OHIO' => 'OH', 'OKLAHOMA' => 'OK', 'OREGON' => 'OR', 'PENNSYLVANIA' => 'PA', 'RHODE ISLAND' => 'RI', 'SOUTH CAROLINA' => 'SC', 'SOUTH DAKOTA' => 'SD', 'TENNESSEE' => 'TN', 'TEXAS' => 'TX', 'UTAH' => 'UT', 'VERMONT' => 'VT', 'VIRGINIA' => 'VA', 'WASHINGTON' => 'WA', 'WEST VIRGINIA' => 'WV', 'WISCONSIN' => 'WI', 'WYOMING' => 'WY', 'ALBERTA' => 'AB', 'BRITISH COLUMBIA' => 'BC', 'MANITOBA' => 'MB', 'NEW BRUNSWICK' => 'NB', 'NEWFOUNDLAND AND LABRADOR' => 'NL', 'NOVA SCOTIA' => 'NS', 'NORTWEST TERRITORIES' => 'NT', 'NUNAVUT' => 'NU', 'ONTARIO' => 'ON', 'PRINCE EDWARD ISLAND' => 'PE', 'QUEBEC' => 'QC', 'SASKATCHEWAN' => 'SK', 'YUKON' => 'YT', 'PUERTO RICO' => 'PR', 'VIRGIN ISLANDS' => 'VI', 'WASHINGTON DC' => 'DC'];
                echo 
                '
                <p class="lg:mb-2 lg:text-lg">State*</p>
                <select name="estados2" class="lg:mb-4 lg:border-2 lg:h-10 lg:w-full lg:pl-3.5 lg:pr-3.5">
                ';
                foreach($state as $states){
                        echo '<option value="'.$states.'">'.$states.'</option>';
                }
                echo '</select>';
            ?>

        <p class="lg:mb-2 lg:text-lg">ZIP code*</p>
        <input type="text" name="codigozip2" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        </div>

        <p class="lg:mb-2 lg:text-lg">Primary phone number*</p>
        <input type="tel" name="numero" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <p></p>
        
        <input value="phone" type="radio" name="phone" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">
        <label for="" class="lg:text-lg">Mobile phone</label>
        <input value="phone" type="radio" name="phone" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">
        <label for="" class="lg:text-lg">Home phone</label>
        <input value="phone" type="radio" name="phone" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">
        <label for="" class="lg:text-lg">Work phone</label>
        
        <p class="mt-4 mb-5 text-sm">By providing your phone number, you consent to our use of automatic dialers, text, or pre-recorded messages to service your account. Message and data rates may apply.</p>

        <p class="lg:mb-2 lg:text-lg">Email address*</p>
        <input type="email" name="email" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <p class="lg:mb-2 lg:text-lg">Are you a U.S. citizen?*</p>
        <input value="Yes" type="radio" name="citizen" id="citizen1" onclick="securitynumberx()" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">Yes
        <input value="No" type="radio" name="citizen" id="citizen2" onclick="securitynumberx()" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">No

        <div id="securitynumber" style="display:none">
        <p id="securitynumber1" class="lg:mb-2 lg:text-lg">Social security number*</p>
        <input type="text" id="securitynumber1i" name="securitynumberi" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">
        </div>

        <div id="countryofcitizenship" style="display:none">
            <?php
                    $countries = ["Select", "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];
                    echo 
                    '
                    <p class="lg:mb-2 lg:text-lg">Country of citizenship</p>
                    <select name="paises" class="lg:mb-4 lg:border-2 lg:h-10 lg:w-full lg:pl-3.5 lg:pr-3.5">
                    ';
                    foreach($countries as $country){
                            echo '<option value="'.$country.'">'.$country.'</option>';
                    }
                    echo '</select>';
                ?>
        </div>

        <p class="lg:mb-2 lg:text-lg">Do you have dual citizenship?*</p>
        <input value="dualcitizen" type="radio" name="dualcitizen" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">Yes
        <input value="dualcitizen" type="radio" name="dualcitizen" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">No

        <?php
                $countries = ["Select", "Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe"];
                echo 
                '
                <p class="lg:mb-2 lg:text-lg">Country of residence</p>
                <select name="paises" class="lg:mb-4 lg:border-2 lg:h-10 lg:w-full lg:pl-3.5 lg:pr-3.5">
                ';
                foreach($countries as $country){
                        echo '<option value="'.$country.'">'.$country.'</option>';
                }
                echo '</select>';
            ?>

        <p class="lg:mb-2 lg:text-lg">Date of birth*</p>
        <input type="date" name="fechadenac" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <p class="lg:mb-2 lg:text-lg">Is this account going to be used by an enterprise?*</p>
        <input value="enterprise" type="radio" name="enterprise" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">Yes
        <input value="enterprise" type="radio" name="enterprise" class="lg:mb-4 lg:border-2 lg:h-4 lg:w-8">No

        <?php
                $employment = ["Select", "Employed", "Homemaker", "Retired", "Self-Employed", "Student", "Unemployed"];
                echo 
                '
                <p class="lg:mb-2 lg:text-lg">Employment status</p>
                <select name="employments" class="lg:mb-4 lg:border-2 lg:h-10 lg:w-full lg:pl-3.5 lg:pr-3.5">
                ';
                foreach($employment as $employments){
                        echo '<option value="'.$employments.'">'.$employments.'</option>';
                }
                echo '</select>';
            ?>
        <p class="mt-4 mb-5 text-sm">Alimony, child support or separate maintenance income need not be revealed if you do not wish to have it considered as a basis for repayment.</p>

        <p class="lg:mb-2 lg:text-lg">Total annual income ($)*</p>
        <input type="text" name="ingresos" placeholder="$" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <?php
                $income = ["Select", "Employment", "Inheritance / Trust", "Investment Income", "Retirement Income", "Social Security", "Unemployed / Other Income"];
                echo 
                '
                <p class="lg:mb-2 lg:text-lg">Primary source of income</p>
                <select name="incomes" class="lg:mb-4 lg:border-2 lg:h-10 lg:w-full lg:pl-3.5 lg:pr-3.5">
                ';
                foreach($income as $incomes){
                        echo '<option value="'.$incomes.'">'.$incomes.'</option>';
                }
                echo '</select>';
            ?>

        <p class="lg:mb-2 lg:text-lg">Monthly housing payment ($)*</p>
        <input type="text" name="housingpayment" placeholder="$" class="lg:mb-4 lg:border-2 lg:h-9 lg:w-full lg:pl-3.5 lg:pr-3.5">

        <p class="mt-4 mb-3 text-sm">* = You have to answer this question</p>

        <p></p>

        <button class="lg:pt-12 lg:pl-8 lg:pr-8 lg:ml-72 lg:text-2xl text-red-700" type="submit">Submit</button>

    </section>

    <section class="lg:h-28 lg:max-w-none lg:justify-center lg:pt-12 bg-gray-600"></section>

    </form>

</body>
</html>