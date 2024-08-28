<?php include("header.php") ?>

    <link href="css/style2.css" rel="stylesheet">
    <section class="content">
        <div class="container-fluid">
       <!-- Resident Information Form -->
<form action="add_resident_query.php" method="POST" enctype="multipart/form-data" name="form1" id="form1">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>RESIDENT INFORMATION</h4>
                    </div>
                </div>
                <div class="body">
                    <div class="container-fluid" style="background-color: #ddds;">
                        <div class="demo-masked-input">
                            <div class="row clearfix">
                                <!-- Name Fields -->
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">First Name:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Middle Name:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Last Name:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Nickname and Date of Birth -->
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Nickname:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nickname" placeholder="Nickname">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Date of Birth:</span>
                                        <div class="form-line">
                                            <input type="date" class="form-control" name="date_of_birth">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Age:</span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="age" placeholder="Age">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Gender, Civil Status, Nationality -->
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Gender:</span>
                                        <select class="form-control show-tick" name="gender">
                                            <option></option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Civil Status:</span>
                                        <select class="form-control show-tick" name="civil_status">
                                            <option></option>
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Widowed</option>
                                            <option>Separated</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Nationality:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nationality" placeholder="Nationality">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Religion:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="religion" placeholder="Religion">
                                        </div>
                                    </div>
                                </div>
                              <!-- Bld type -->   
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <span class="input-group-addon">Blood Type:</span>
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="blood_type" required>
                                                <option disabled selected>Select your blood type</option>
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                
                                <!-- Address Fields -->
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Street:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="street" placeholder="Street">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Purok/Sitio:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="purok_sitio" placeholder="Purok/Sitio">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Barangay:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="barangay" placeholder="Barangay">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Municipality/City:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="municipality_city" placeholder="Municipality/City">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Province:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="province" placeholder="Province">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Zip Code:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="zip_code" placeholder="Zip Code">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Contact Information -->
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Mobile No.:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="mobile_number" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Landline No.:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="landline_number" placeholder="Landline Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Email:</span>
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email_address" placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Facebook Account:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="facebook_account" placeholder="Facebook Account">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Twitter Account:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="twitter_account" placeholder="Twitter Account">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Household Information -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Household Head:</span>
                                        <select class="form-control show-tick" name="household_head">
                                            <option></option>
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Relationship to Household Head:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="relationship_to_household_head" placeholder="Relationship to Household Head">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Number of Family Members:</span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="number_of_family_members" placeholder="Number of Family Members">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Spouse Information -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Spouse Name:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="spouse_name" placeholder="Spouse Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Spouse Occupation:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="spouse_occupation" placeholder="Spouse Occupation">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Number of Children:</span>
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="number_of_children" placeholder="Number of Children">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Names and Ages of Children:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="names_and_ages_of_children" placeholder="Names and Ages of Children">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Emergency Contact Information -->
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Emergency Contact Name:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="emergency_contact_name" placeholder="Emergency Contact Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Emergency Contact Relationship:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="emergency_contact_relationship" placeholder="Emergency Contact Relationship">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">Emergency Contact Number:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="emergency_contact_number" placeholder="Emergency Contact Number">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Educational and Occupational Information -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Highest Educational Attainment:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="highest_educational_attainment" placeholder="Highest Educational Attainment">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Name of School Attended:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name_of_school_attended" placeholder="Name of School Attended">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Skills/Trainings:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="skills_trainings" placeholder="Skills/Trainings">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Occupation:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="occupation" placeholder="Occupation">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Employment Status:</span>
                                        <div class="form-line">
                                            <select class="form-control show-tick" name="employment_status" required>
                                                <option disabled selected>Please select your employment status</option>
                                                <option value="Full-Time">Full-Time</option>
                                                <option value="Part-Time">Part-Time</option>
                                                <option value="Self-Employed">Self-Employed</option>
                                                <option value="Unemployed">Unemployed</option>
                                                <option value="Retired">Retired</option>
                                                <option value="Student">Student</option>
                                                <option value="Freelancer">Freelancer</option>
                                                <option value="Contractor">Contractor</option>
                                                <option value="Temporary">Temporary</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Name of Employer/Business:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name_of_employer_business" placeholder="Name of Employer/Business">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Nature of Work:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="nature_of_work" placeholder="Nature of Work">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Monthly Income Range:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="monthly_income_range" placeholder="Monthly Income Range">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Work Address:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="work_address" placeholder="Work Address">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Other Information -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Years of Service/Experience:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="years_of_service_experience" placeholder="Years of Service/Experience">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Length of Stay in Barangay:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="length_of_stay_in_barangay" placeholder="Length of Stay in Barangay">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Place of Birth:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="place_of_birth" placeholder="Place of Birth">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Previous Address:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="previous_address" placeholder="Previous Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Reason for Moving to Barangay:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="reason_for_moving_to_barangay" placeholder="Reason for Moving to Barangay">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Health Information -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Medical Conditions:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="medical_conditions" placeholder="Medical Conditions">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Disabilities:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="disabilities" placeholder="Disabilities">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Allergies:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="allergies" placeholder="Allergies">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Health Insurance Provider:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="health_insurance_provider" placeholder="Health Insurance Provider">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Health Insurance Plan Type:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="health_insurance_plan_type" placeholder="Health Insurance Plan Type">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Vaccination Status:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="vaccination_status" placeholder="Vaccination Status">
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Barangay Information -->
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Barangay ID Number:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="barangay_id_number" placeholder="Barangay ID Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Barangay Memberships:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="barangay_memberships" placeholder="Barangay Memberships">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Participation in Barangay Activities:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="participation_in_barangay_activities" placeholder="Participation in Barangay Activities">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Barangay Complaints/Incidents Involved:</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="barangay_complaints_incidents_involved" placeholder="Barangay Complaints/Incidents Involved">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div> <!-- End of .row -->
                        </form>
                    </div> <!-- End of .container -->
                </div> <!-- End of .col-md-12 -->
            </div> <!-- End of .row -->
        </div> <!-- End of .container -->
    </div> <!-- End of .form-section -->
</div> <!-- End of .content -->


        </div>
    </section>
<script src="plugins/js/formatter.js"></script>
<script src="js/jquery.min.js"></script>
  <?php include("script.php"); ?>
    <script>
    var contanct_no = new Formatter (document.getElementById('contact_no'), {
  'pattern': '+639 {{999}}-{{999}}-{{999}}',
  'persistent': true
  });
    var pagibig = new Formatter (document.getElementById('pagibig'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
  });
     var tin = new Formatter (document.getElementById('tin'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
});
     var gsis = new Formatter (document.getElementById('gsis'), {
  'pattern': '{{999}}-{{999}}-{{999}}',
  'persistent': true
});
</script>
    <script>
        function showImage(src,target) {
          var fr=new FileReader();
          // when image is loaded, set the src of the image where you want to display it
          fr.onload = function(e) { target.src = this.result; };
          src.addEventListener("change",function() {
            // fill fr with image data    
            fr.readAsDataURL(src.files[0]);
          });
        }

        var src = document.getElementById("src");
        var target = document.getElementById("target");
        showImage(src,target);
    </script>
    
<script type="">
    $(function(){
  
  $("select.main").on("change", function(){
    //remove active
    $("select.models.active").removeClass("active");
    //check if select vlass exists..if it does show it
    var subList = $("select.models."+$(this).val());
    if (subList.length){
      //it does! show it by adding active class to it
      subList.addClass("active");
    }
  });
  
});
</script>
<script type="">
    var Privileges = jQuery('#privileges');
    var select = this.value;
    Privileges.change(function () {
        if ($(this).val() == '') {
            $('.resources').show();
        }
        else $('.resources').hide();
    });
</script>