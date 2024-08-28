<?php
// Include the database connection
include 'connect.php'; // Adjust the path if necessary

// Retrieve and sanitize form data
$firstName = $_POST['first_name'] ?? '';
$middleName = $_POST['middle_name'] ?? '';
$lastName = $_POST['last_name'] ?? '';
$nickname = $_POST['nickname'] ?? '';
$dateOfBirth = $_POST['date_of_birth'] ?? '';
$age = $_POST['age'] ?? '';
$gender = $_POST['gender'] ?? '';
$civilStatus = $_POST['civil_status'] ?? '';
$nationality = $_POST['nationality'] ?? '';
$religion = $_POST['religion'] ?? '';
$bloodType = $_POST['blood_type'] ?? '';
$street = $_POST['street'] ?? '';
$purokSitio = $_POST['purok_sitio'] ?? '';
$barangay = $_POST['barangay'] ?? '';
$municipalityCity = $_POST['municipality_city'] ?? '';
$province = $_POST['province'] ?? '';
$zipCode = $_POST['zip_code'] ?? '';
$mobileNumber = $_POST['mobile_number'] ?? '';
$landlineNumber = $_POST['landline_number'] ?? '';
$emailAddress = $_POST['email_address'] ?? '';
$facebookAccount = $_POST['facebook_account'] ?? '';
$twitterAccount = $_POST['twitter_account'] ?? '';
$householdHead = $_POST['household_head'] ?? '';
$relationshipToHouseholdHead = $_POST['relationship_to_household_head'] ?? '';
$numberOfFamilyMembers = $_POST['number_of_family_members'] ?? '';
$spouseName = $_POST['spouse_name'] ?? '';
$spouseOccupation = $_POST['spouse_occupation'] ?? '';
$numberOfChildren = $_POST['number_of_children'] ?? '';
$namesAndAgesOfChildren = $_POST['names_and_ages_of_children'] ?? '';
$emergencyContactName = $_POST['emergency_contact_name'] ?? '';
$emergencyContactRelationship = $_POST['emergency_contact_relationship'] ?? '';
$emergencyContactNumber = $_POST['emergency_contact_number'] ?? '';
$highestEducationalAttainment = $_POST['highest_educational_attainment'] ?? '';
$nameOfSchoolAttended = $_POST['name_of_school_attended'] ?? '';
$skillsTrainings = $_POST['skills_trainings'] ?? '';
$occupation = $_POST['occupation'] ?? '';
$employmentStatus = $_POST['employment_status'] ?? '';
$nameOfEmployerBusiness = $_POST['name_of_employer_business'] ?? '';
$natureOfWork = $_POST['nature_of_work'] ?? '';
$monthlyIncomeRange = $_POST['monthly_income_range'] ?? '';
$workAddress = $_POST['work_address'] ?? '';
$yearsOfServiceExperience = $_POST['years_of_service_experience'] ?? '';
$lengthOfStayInBarangay = $_POST['length_of_stay_in_barangay'] ?? '';
$placeOfBirth = $_POST['place_of_birth'] ?? '';
$previousAddress = $_POST['previous_address'] ?? '';
$reasonForMovingToBarangay = $_POST['reason_for_moving_to_barangay'] ?? '';
$medicalConditions = $_POST['medical_conditions'] ?? '';
$disabilities = $_POST['disabilities'] ?? '';
$allergies = $_POST['allergies'] ?? '';
$healthInsuranceProvider = $_POST['health_insurance_provider'] ?? '';
$healthInsurancePlanType = $_POST['health_insurance_plan_type'] ?? '';
$vaccinationStatus = $_POST['vaccination_status'] ?? '';
$barangayIdNumber = $_POST['barangay_id_number'] ?? '';
$barangayMemberships = $_POST['barangay_memberships'] ?? '';
$participationInBarangayActivities = $_POST['participation_in_barangay_activities'] ?? '';
$barangayComplaintsIncidentsInvolved = $_POST['barangay_complaints_incidents_involved'] ?? '';

// Prepare the SQL statement
$sql = "INSERT INTO tbl_residents (
    first_name, middle_name, last_name, nickname, date_of_birth, age, gender, civil_status, nationality, religion, blood_type,
    street, purok_sitio, barangay, municipality_city, province, zip_code, mobile_number, landline_number, email_address, 
    facebook_account, twitter_account, household_head, relationship_to_household_head, number_of_family_members, spouse_name,
    spouse_occupation, number_of_children, names_and_ages_of_children, emergency_contact_name, emergency_contact_relationship,
    emergency_contact_number, highest_educational_attainment, name_of_school_attended, skills_trainings, occupation, employment_status,
    name_of_employer_business, nature_of_work, monthly_income_range, work_address, years_of_service_experience, length_of_stay_in_barangay,
    place_of_birth, previous_address, reason_for_moving_to_barangay, medical_conditions, disabilities, allergies, health_insurance_provider,
    health_insurance_plan_type, vaccination_status, barangay_id_number, barangay_memberships, participation_in_barangay_activities,
    barangay_complaints_incidents_involved
) VALUES (
    :first_name, :middle_name, :last_name, :nickname, :date_of_birth, :age, :gender, :civil_status, :nationality, :religion, :blood_type,
    :street, :purok_sitio, :barangay, :municipality_city, :province, :zip_code, :mobile_number, :landline_number, :email_address, 
    :facebook_account, :twitter_account, :household_head, :relationship_to_household_head, :number_of_family_members, :spouse_name,
    :spouse_occupation, :number_of_children, :names_and_ages_of_children, :emergency_contact_name, :emergency_contact_relationship,
    :emergency_contact_number, :highest_educational_attainment, :name_of_school_attended, :skills_trainings, :occupation, :employment_status,
    :name_of_employer_business, :nature_of_work, :monthly_income_range, :work_address, :years_of_service_experience, :length_of_stay_in_barangay,
    :place_of_birth, :previous_address, :reason_for_moving_to_barangay, :medical_conditions, :disabilities, :allergies, :health_insurance_provider,
    :health_insurance_plan_type, :vaccination_status, :barangay_id_number, :barangay_memberships, :participation_in_barangay_activities,
    :barangay_complaints_incidents_involved
)";

// Prepare and execute the SQL statement
$stmt = $con->prepare($sql);

try {
    $stmt->execute([
        'first_name' => $firstName,
        'middle_name' => $middleName,
        'last_name' => $lastName,
        'nickname' => $nickname,
        'date_of_birth' => $dateOfBirth,
        'age' => $age,
        'gender' => $gender,
        'civil_status' => $civilStatus,
        'nationality' => $nationality,
        'religion' => $religion,
        'blood_type' => $bloodType,
        'street' => $street,
        'purok_sitio' => $purokSitio,
        'barangay' => $barangay,
        'municipality_city' => $municipalityCity,
        'province' => $province,
        'zip_code' => $zipCode,
        'mobile_number' => $mobileNumber,
        'landline_number' => $landlineNumber,
        'email_address' => $emailAddress,
        'facebook_account' => $facebookAccount,
        'twitter_account' => $twitterAccount,
        'household_head' => $householdHead,
        'relationship_to_household_head' => $relationshipToHouseholdHead,
        'number_of_family_members' => $numberOfFamilyMembers,
        'spouse_name' => $spouseName,
        'spouse_occupation' => $spouseOccupation,
        'number_of_children' => $numberOfChildren,
        'names_and_ages_of_children' => $namesAndAgesOfChildren,
        'emergency_contact_name' => $emergencyContactName,
        'emergency_contact_relationship' => $emergencyContactRelationship,
        'emergency_contact_number' => $emergencyContactNumber,
        'highest_educational_attainment' => $highestEducationalAttainment,
        'name_of_school_attended' => $nameOfSchoolAttended,
        'skills_trainings' => $skillsTrainings,
        'occupation' => $occupation,
        'employment_status' => $employmentStatus,
        'name_of_employer_business' => $nameOfEmployerBusiness,
        'nature_of_work' => $natureOfWork,
        'monthly_income_range' => $monthlyIncomeRange,
        'work_address' => $workAddress,
        'years_of_service_experience' => $yearsOfServiceExperience,
        'length_of_stay_in_barangay' => $lengthOfStayInBarangay,
        'place_of_birth' => $placeOfBirth,
        'previous_address' => $previousAddress,
        'reason_for_moving_to_barangay' => $reasonForMovingToBarangay,
        'medical_conditions' => $medicalConditions,
        'disabilities' => $disabilities,
        'allergies' => $allergies,
        'health_insurance_provider' => $healthInsuranceProvider,
        'health_insurance_plan_type' => $healthInsurancePlanType,
        'vaccination_status' => $vaccinationStatus,
        'barangay_id_number' => $barangayIdNumber,
        'barangay_memberships' => $barangayMemberships,
        'participation_in_barangay_activities' => $participationInBarangayActivities,
        'barangay_complaints_incidents_involved' => $barangayComplaintsIncidentsInvolved,
    ]);

    echo "<script>alert('Resident data has been successfully added!'); window.location.href='all_resident.php';</script>";

} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
