<?php 
include("header.php");
include('connect.php');
// Fetch residents data

try {
    // Create a PDO instance (connect to the database)
    $sql = "SELECT * FROM tbl_residents"; // Change 'residents' to your actual table name
    $stmt = $con->prepare($sql);
    $stmt->execute();
    $residents = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Query failed: ' . $e->getMessage();
}

?>
  <style>
        /* Your existing styles here */
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
            margin: 20px auto;
        }

        .panel-heading {
            color: #fff;
            background-color: #f44336;
            padding: 10px;
            font-size: 18px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
        
            color: #f44336;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .print {
            background-color: #f44336;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 4px;
        }

        .print:hover {
            background-color: #d32f2f;
        }
    </style>
<section class="content">
    <div class="container-fluid">
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="panel panel-primary">
                    <div class = "panel-heading" style="background-color: #f44336;">
                            <h4>ALL RESIDENTS</h4>
                            <a href="add_residents.php">
                                <input type="button" value="Add Resident" class="print btn-default" style="margin-right: 80px; width: auto;">
                            </a>
                            <a href="print_all_residents.php">
                                <input type="button" value="Print" class="print">
                            </a>
                        </div>
                    </div>
                    <div id="print">
                        <div class="scroll">
                            <div class="body">
                                <table id="example" class="stripe" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Resident ID</th>
                                            <th>First Name</th>
                                            <th>Middle Name</th>
                                            <th>Last Name</th>
                                            <th>Nickname</th>
                                            <th>Date of Birth</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Civil Status</th>
                                            <th>Nationality</th>
                                            <th>Religion</th>
                                            <th>Blood Type</th>
                                            <th>Street</th>
                                            <th>Purok/Sitio</th>
                                            <th>Barangay</th>
                                            <th>Municipality/City</th>
                                            <th>Province</th>
                                            <th>Zip Code</th>
                                            <th>Mobile Number</th>
                                            <th>Landline Number</th>
                                            <th>Email Address</th>
                                            <th>Facebook Account</th>
                                            <th>Twitter Account</th>
                                            <th>Household Head</th>
                                            <th>Relationship to Household Head</th>
                                            <th>Number of Family Members</th>
                                            <th>Spouse Name</th>
                                            <th>Spouse Occupation</th>
                                            <th>Number of Children</th>
                                            <th>Names and Ages of Children</th>
                                            <th>Emergency Contact Name</th>
                                            <th>Emergency Contact Relationship</th>
                                            <th>Emergency Contact Number</th>
                                            <th>Highest Educational Attainment</th>
                                            <th>Name of School Attended</th>
                                            <th>Skills/Trainings</th>
                                            <th>Occupation</th>
                                            <th>Employment Status</th>
                                            <th>Name of Employer/Business</th>
                                            <th>Nature of Work</th>
                                            <th>Monthly Income Range</th>
                                            <th>Work Address</th>
                                            <th>Years of Service Experience</th>
                                            <th>Length of Stay in Barangay</th>
                                            <th>Place of Birth</th>
                                            <th>Previous Address</th>
                                            <th>Reason for Moving to Barangay</th>
                                            <th>Medical Conditions</th>
                                            <th>Disabilities</th>
                                            <th>Allergies</th>
                                            <th>Health Insurance Provider</th>
                                            <th>Health Insurance Plan Type</th>
                                            <th>Vaccination Status</th>
                                            <th>Barangay ID Number</th>
                                            <th>Barangay Memberships</th>
                                            <th>Participation in Barangay Activities</th>
                                            <th>Barangay Complaints/Incidents Involved</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($residents as $resident): ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($resident['resident_id']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['first_name']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['middle_name']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['last_name']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['nickname']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['date_of_birth']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['age']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['gender']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['civil_status']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['nationality']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['religion']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['blood_type']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['street']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['purok_sitio']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['barangay']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['municipality_city']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['province']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['zip_code']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['mobile_number']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['landline_number']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['email_address']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['facebook_account']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['twitter_account']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['household_head']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['relationship_to_household_head']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['number_of_family_members']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['spouse_name']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['spouse_occupation']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['number_of_children']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['names_and_ages_of_children']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['emergency_contact_name']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['emergency_contact_relationship']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['emergency_contact_number']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['highest_educational_attainment']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['name_of_school_attended']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['skills_trainings']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['occupation']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['employment_status']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['name_of_employer_business']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['nature_of_work']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['monthly_income_range']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['work_address']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['years_of_service_experience']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['length_of_stay_in_barangay']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['place_of_birth']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['previous_address']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['reason_for_moving_to_barangay']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['medical_conditions']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['disabilities']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['allergies']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['health_insurance_provider']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['health_insurance_plan_type']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['vaccination_status']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['barangay_id_number']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['barangay_memberships']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['participation_in_barangay_activities']); ?></td>
                                                <td><?php echo htmlspecialchars($resident['barangay_complaints_incidents_involved']); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function printDiv() {
        // Get the HTML of div
        var divElements = document.getElementById("print").innerHTML;
        // Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        // Reset the page's HTML with div's HTML only
        document.body.innerHTML = "<table></table>" + divElements;
        // Print Page
        window.print();
        // Restore original HTML
        document.body.innerHTML = oldPage;
    }
</script>
<script src="plugins/js/jquery-1.js"></script>
<script src="plugins/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
<?php 
include("script.php");
?>
