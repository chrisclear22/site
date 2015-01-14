<?php
require ('mysqli_connect.php'); // Connect to the db.

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$errors = array(); // Initialize an error array.
	
	// Personal Information

	// Check for a first name:
	if (empty($_POST['firstName'])) {
		$errors[] = 'Please enter your first name.';
	} else {
	$fn = mysqli_real_escape_string($dbcon, trim($_POST['firstName']));
	
	}
	// Check for a last name:
	if (empty($_POST['lastName'])) {
		$errors[] = 'Please enter your last name.';
	} else {
	$ln = mysqli_real_escape_string($dbcon, trim($_POST['lastName']));
	}
	// Check for address:
	if (empty($_POST['address'])) {
		$errors[] = 'Please enter your address.';
	} else {
	$ad = mysqli_real_escape_string($dbcon, trim($_POST['address']));
	}
	// Check for city:
	if (empty($_POST['city'])) {
		$errors[] = 'Please enter your city.';
	} else {
	$cy = mysqli_real_escape_string($dbcon, trim($_POST['city']));
	}
	// Check for state:
	if (empty($_POST['state'])) {
		$errors[] = 'Please enter your state.';
	} else {
	$st = mysqli_real_escape_string($dbcon, trim($_POST['state']));
	}
	// Check for zip:
	if (empty($_POST['zip'])) {
		$errors[] = 'Please enter your zip code.';
	} else {
	$zip = mysqli_real_escape_string($dbcon, trim($_POST['zip']));
	}
	// Phone number
	$ph = mysqli_real_escape_string($dbcon, trim($_POST['phone']));
	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
	$e = mysqli_real_escape_string($dbcon, trim($_POST['email']));
	}
	
	// Destination Details

	// Check for destination
	if (empty($_POST['destination'])) {
		$errors[] = 'Please enter a location.';
	} else {
	$dt = mysqli_real_escape_string($dbcon, trim($_POST['destination']));
	}
	// Check for leave date
	if (empty($_POST['departure'])) {
		$errors[] = 'You forgot to enter your departure date.';
	} else {
	$dp = mysqli_real_escape_string($dbcon, trim($_POST['departure']));
	}
	// Check for return date
	if (empty($_POST['return'])) {
		$errors[] = 'You forgot to enter your return date.';
	} else {
	$re = mysqli_real_escape_string($dbcon, trim($_POST['return']));
	}
	// Check for air-port
	if (empty($_POST['from'])) {
		$errors[] = 'You forgot to enter your air-port.';
	} else {
	$ap = mysqli_real_escape_string($dbcon, trim($_POST['from']));
	}
	// Check for flying to
	if (empty($_POST['to'])) {
		$errors[] = 'You forgot to enter your fly to.';
	} else {
	$to = mysqli_real_escape_string($dbcon, trim($_POST['to']));
	}
	// Check for passenger
	if (empty($_POST['adult'])) {
		$errors[] = 'Please select number of passengers.';
	} else {
	$al = mysqli_real_escape_string($dbcon, trim($_POST['adult']));
	}
	$cl = mysqli_real_escape_string($dbcon, trim($_POST['child']));

	// Purchase Information

	// Check for card type
	if (empty($_POST['type'])) {
		$errors[] = 'Please select card type.';
	} else {
	$tp = mysqli_real_escape_string($dbcon, trim($_POST['type']));
	}
	// Check for card number
	if (empty($_POST['number'])) {
		$errors[] = 'Please enter card number.';
	} else {
	$nu = mysqli_real_escape_string($dbcon, trim($_POST['number']));
	}
	// Check for CCV code
	if (empty($_POST['code'])) {
		$errors[] = 'Please enter CCV code.';
	} else {
	$ccv = mysqli_real_escape_string($dbcon, trim($_POST['code']));
	}
	// Check month expire
	if (empty($_POST['month'])) {
		$errors[] = 'Please select moth of expiry.';
	} else {
	$mn = mysqli_real_escape_string($dbcon, trim($_POST['month']));
	}
	// Check year expire
	if (empty($_POST['year'])) {
		$errors[] = 'Please select year of expiry.';
	} else {
	$yr = mysqli_real_escape_string($dbcon, trim($_POST['year']));
	}
	$pr = mysqli_real_escape_string($dbcon, trim($_POST['cost']));
	if (empty($errors)) { 
// Make query:
$q = "INSERT INTO form (passenger_id, firstName, lastName, address, city, state, zip, phone, email) 
VALUES (' ', '$fn', '$ln', '$ad', '$cy', '$st', '$zip', '$ph', '$e')";	
$t = " INSERT INTO reservation (reservation_id, passenger_id, reservation_date, destination, adult_passengers, child_passengers, air_port, to, leave, return) VALUES (' ', ' ', ' ', '$dt', '$al', '$cl', '$ap', '$to', '$dp', '$re')";	
$p = "INSERT INTO payments (payment_id, payment_date, payment_amount, card_type, card_number, ccv_code, month_exp, year_exp) VALUES (' ', ' ', ' ', '$pr', '$tp', '$nu', '$ccv', '$mn', '$yr')";
		$result = @mysqli_query ($dbcon, $q, $t, $p); // Run the query.
		if ($result) {
		header ("location: thanks.php"); 
		exit();
		
		} else { // If it did not run
		// Message:
			echo '<h2>System Error</h2>
<p class="error">Your purchase could not be completed. We apologize for any inconvenience.</p>'; 
		// Debugging message:
		echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
		echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $t . '</p>';
		echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $p . '</p>';
		} // End of if ($result)
		mysqli_close($dbcon); // Close the database connection.
		exit();
	} else { // Report the errors.
		//header ("location: register-page.php"); 
		echo '<h2>Error!</h2>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br>\n";
		}
		echo '</p><h3>Please try again.</h3><p><br></p>';
		}// End of if (empty($errors))
} // End of the main Submit conditional.
?>