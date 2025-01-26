<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['dropdown'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email-address'];
    $dob = $_POST['DOB'];
    $accounttype = $_POST['account-select'];
    $uk_resident = $_POST['UK-res'];
    $current_address_line1 = $_POST['line1'];
    $current_address_line2 = $_POST['line2'];
    $current_town_city = $_POST['town-city'];
    $current_county = $_POST['county'];
    $current_postcode = $_POST['postcode'];
    $lived_in_dhaka = $_POST['Bangladesh'];
    $previous_address_line1 = $_POST['line1'];
    $previous_address_line2 = $_POST['line2'];
    $previous_town_city = $_POST['town-city'];
    $previous_county = $_POST['county'];
    $previous_postcode = $_POST['postcode'];
    $credit_search = isset($_POST['credit-search']) ? 'Yes' : 'No';
    $info_request = isset($_POST['info-request']) ? 'Yes' : 'No';

    // Process the data as needed, e.g., save to a database, send an email, etc.
    // For now, we'll just output the data.
    echo "Title: $title<br>";
    echo "First Name: $firstname<br>";
    echo "Middle Name: $middlename<br>";
    echo "Last Name: $lastname<br>";
    echo "Phone: $phone<br>";
    echo "Email: $email<br>";
    echo "Date of Birth: $dob<br>";
    echo "Account Type: $accounttype<br>";
    echo "UK Resident: $uk_resident<br>";
    echo "Current Address Line 1: $current_address_line1<br>";
    echo "Current Address Line 2: $current_address_line2<br>";
    echo "Current Town/City: $current_town_city<br>";
    echo "Current County: $current_county<br>";
    echo "Current Postcode: $current_postcode<br>";
    echo "Lived in Dhaka: $lived_in_dhaka<br>";
    echo "Previous Address Line 1: $previous_address_line1<br>";
    echo "Previous Address Line 2: $previous_address_line2<br>";
    echo "Previous Town/City: $previous_town_city<br>";
    echo "Previous County: $previous_county<br>";
    echo "Previous Postcode: $previous_postcode<br>";
    echo "Credit Search Consent: $credit_search<br>";
    echo "Info Request Consent: $info_request<br>";
}
?>
