<?php
include 'db.php';
session_start();

// Check if the request method is DELETE
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    // Check if an ID parameter is provided in the URL
        $id = $_SESSION['student_id'];
        
        // Prepare a SQL statement to delete the student record by ID
        $stmt = $mysqli->prepare("DELETE FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);

        // Execute the prepared statement
        if ($stmt->execute()) {
            // Deletion successful
            echo json_encode(array("success" => true));
            exit();
        } else {
            // Deletion failed
            echo json_encode(array("success" => false));
            exit();
        }
   
} else {
    // Invalid request method
    echo json_encode(array("success" => false));
    exit();
}

// Handle PUT request for updating a student record
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Retrieve form data from PUT request body
    parse_str(file_get_contents("php://input"), $putData);
    $login_id = $_SESSION['user_id']; // Get the user's login ID from the session
    $id = $putData['id'];
    $name = validateInput($putData["name"], '~^[A-Za-z ]+$~', 'Invalid name');
    $matricno = validateInput($putData["matricno"], '~^\d{7}$~', 'Invalid matric number');
    $email = validateInput($putData["email"], '~^[a-zA-Z0-9._%+-]+@gmail+\.[a-zA-Z]{2,}$~', 'Invalid email address');
    $curraddress = validateInput($putData["curraddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid current address');
    $homeaddress = validateInput($putData["homeaddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid home address');
    $mobilephone = validateInput($putData["mobilephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid mobile phone number');
    $homephone = validateInput($putData["homephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid home phone number');

    // Prepare SQL statement to update student record
    $stmt = $mysqli->prepare("UPDATE students SET name=?, matricno=?, email=?, curraddress=?, homeaddress=?, mobilephone=?, homephone=? WHERE login_id=? AND id=?");
    $stmt->bind_param("sssssssii", $name, $matricno, $email, $curraddress, $homeaddress, $mobilephone, $homephone, $login_id, $id);

    // Execute SQL statement
    if ($stmt->execute()) {
        // Successful update
        $response = array('success' => true);
        http_response_code(200); // Set response status code to 200 (OK)
        echo json_encode($response);
    } else {
        // Error updating record
        $response = array('success' => false);
        http_response_code(500); // Set response status code to 500 (Internal Server Error)
        echo json_encode($response);
    }

    // Close statement
    $stmt->close();
}

// Function to validate input using preg_match
function validateInput($input, $pattern, $error_message) {
    $validated_input = htmlspecialchars($input); // Sanitize input
    if (preg_match($pattern, $validated_input)) {
        return $validated_input;
    } else {
        // Invalid input
        http_response_code(400); // Set response status code to 400 (Bad Request)
        echo json_encode(array('error' => $error_message)); // Return error message in JSON format
        exit(); // Terminate script execution
    }
}

?>
