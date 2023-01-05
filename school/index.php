<!DOCTYPE html>
<html>

<head>
    <title>Account registration form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet'
        type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="main-block">
        <form autocomplete="on" action="signup.php" accept-charset="utf-8" enctype="multipart/form-data" method="post" target="_self"
            translate="yes" id="studentForm">
            <h1>Create a account</h1>
            <fieldset>
                <legend>
                    <h3>Account Details</h3>
                </legend>
                <div class="account-details">
                    <div><label>Username*</label><input type="text" name="username" id="username" required></div>
                    <div><label>password*</label><input type="password" id="password" name="password" required></div>
                    <div><label>email*</label><input type="email" name="email" id="email" required></div>
                    <div><label>mobileno*</label><input type="tel" name="mobileno" id="mobileno" required></div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <h3>Personal Details <small>( All Fields are mandatory*)</small></h3>
                </legend>
                <div class="personal-details">
                    <div>
                        <div><label for="fullname">Full Name*</label><input type="text" id="fullname" name="fullName"
                                required></div>
                        <div><label for="fname">Father's Name*</label><input type="text" id="fname" name="fatherName"
                                required></div>
                        <div><label for="mname">Mother's Name*</label><input type="text" id="mname" name="motherName"
                                required></div>
                        <div><label for="village">homeTown*</label><input type="text" name="homeTown" id="village"
                                required>
                        </div>
                        <div><label for="city">city*</label><input type="text" name="city" id="city" required>
                        </div>
                        <div>
                            <label for='state'>state*</label>
                            <select name="state" id="state" class="form-control" required>
                                <option value="notSelected" disabled>&nbsp;</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label>Gender*</label>
                            <div class="gender">
                                <input type="radio" value="male" id="male" name="gender" required />
                                <label for="male" class="radio">Male</label>
                                <input type="radio" value="female" id="female" name="gender" required />
                                <label for="female" class="radio">Female</label>
                            </div>
                        </div>
                        <div class="birthdate">
                            <label for="birthDate">BirthDate*</label>
                            <div class="bdate-block">
                                <input type="date" name="birthDate" id="birthDate" required>
                            </div>
                        </div>
                        <div>
                            <label>Nationality*</label>
                            <select required name="nationality">
                                <option value="notSelected" disabled>&nbsp;</option>
                                <option value="India">Indian</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div>
                            <label for="profileImage">Photo*</label>
                            <input type="file" accept="image/*" name="profileImage" required>
                        </div>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    <h3>Terms and Mailing</h3>
                </legend>
                <div class="terms-mailing">
                    <div class="checkbox">
                        <input type="checkbox" name="tnc" id="tnc" required><span>I accept the <a
                                href="https://www.w3docs.com/privacy-policy">Terms &amp; Conditions </a></span>
                    </div>
                    <div class="checkbox">
                        <input type="checkbox" name="mailAlert" id="emailAlert" required><span>I want to receive
                            educational
                            mails by your
                            site</span>
                    </div>
            </fieldset>
            <div class="btn-group">
                <button type="submit" id="submit">Submit</button>
                <button type="reset" id="clear">Clear</button>
            </div>
        </form>
    </div>
    <script src="js/main.js"></script>
</body>

</html>