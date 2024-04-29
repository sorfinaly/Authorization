<?php

session_start();
include 'db.php';


    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $errors = []; // Array to store error messages
    
    //     // Validate and sanitize form inputs
    //     $name = validateInput($_POST["name"], '~^[A-Za-z ]+$~', 'Invalid name');
    //     $matricno = validateInput($_POST["matricno"], '~^\d{7}$~', 'Invalid matric number');
    //     $email = validateInput($_POST["email"], '~^[a-zA-Z0-9._%+-]+@gmail+\.[a-zA-Z]{2,}$~', 'Invalid email address');
    //     $curraddress = validateInput($_POST["curraddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid current address');
    //     $homeaddress = validateInput($_POST["homeaddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid home address');
    //     $mobilephone = validateInput($_POST["mobilephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid mobile phone number');
    //     $homephone = validateInput($_POST["homephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid home phone number');
    
    //     $login_id = $_SESSION['user_id'];
    //     $student_id = $_SESSION['student_id'];
    
    //     // Check if an ID is provided for updating
    //     if (isset($_POST['id'])) {
    //         $id = $_POST['id'];
    //         // Prepare a SQL statement to update data in the database
    //         $stmt = $mysqli->prepare("UPDATE students SET name=?, matricno=?, email=?, curraddress=?, homeaddress=?, mobilephone=?, homephone=? WHERE id=? AND login_id=?");
    
    //         // Bind parameters to the prepared statement
    //         $stmt->bind_param("ssssssiii", $name, $matricno, $email, $curraddress, $homeaddress, $mobilephone, $homephone, $id, $login_id);
            
    //         // Execute the prepared statement
    //         if ($stmt->execute()) {
    //             // Redirect to student_details.php with the ID parameter
    //             header("Location: student_details.php?id=$id");
    //             exit();
    //         } else {
    //             // Error updating data in the database
    //             echo "Error: " . $mysqli->error . "<br>";
    //         }
    //     } else {
    //         // Prepare a SQL statement to insert data into the database
    //         $stmt = $mysqli->prepare("INSERT INTO students (name, matricno, email, curraddress, homeaddress, mobilephone, homephone, login_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            
    //         // Bind parameters to the prepared statement
    //         $stmt->bind_param("sssssssi", $name, $matricno, $email, $curraddress, $homeaddress, $mobilephone, $homephone, $login_id);
            
    //         // Execute the prepared statement
    //         if ($stmt->execute()) {
    //             $inserted_id = $mysqli->insert_id;
    
    //             // Redirect to student_details.php with the ID parameter
    //             header("Location: student_details.php?id=$inserted_id");
    //             exit();
    //         } else {
    //             // Error inserting data into the database
    //             echo "Error: " . $mysqli->error . "<br>";
    //         }
    //     }
        
    //     // Close the statement
    //     $stmt->close();
    


    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
        // $errors = []; // Array to store error messages
    
        // // Validate and sanitize form inputs
        // $name = validateInput($_POST["name"], '~^[A-Za-z ]+$~', 'Invalid name');
        // $matricno = validateInput($_POST["matricno"], '~^\d{7}$~', 'Invalid matric number');
        // $email = validateInput($_POST["email"], '~^[a-zA-Z0-9._%+-]+@gmail+\.[a-zA-Z]{2,}$~', 'Invalid email address');
        // $curraddress = validateInput($_POST["curraddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid current address');
        // $homeaddress = validateInput($_POST["homeaddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid home address');
        // $mobilephone = validateInput($_POST["mobilephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid mobile phone number');
        // $homephone = validateInput($_POST["homephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid home phone number');
    
        // // Get the user ID from session
        // $login_id = $_SESSION['user_id'];
    
        // // Check if an ID is provided for updating
        // // if (!isset($_POST['id'])) {
        // //     $id = $_POST['id'];
        // //     // Prepare a SQL statement to update data in the database
        // //     $stmt = $mysqli->prepare("UPDATE students SET name=?, matricno=?, email=?, curraddress=?, homeaddress=?, mobilephone=?, homephone=? WHERE id=? AND login_id=?");
    
        // //     // Bind parameters to the prepared statement
        // //     $stmt->bind_param("ssssssiii", $name, $matricno, $email, $curraddress, $homeaddress, $mobilephone, $homephone, $id, $login_id);
    
        // //     // Execute the prepared statement
        // //     if ($stmt->execute()) {
        // //         // Redirect to student_details.php with the ID parameter
        // //         header("Location: student_details.php?id=$id");
        // //         exit();
        // //     } else {
        // //         // Error updating data in the database
        // //         echo "Error: " . $mysqli->error . "<br>";
        // //     }
        // // } elseif (!isset($_POST['id'])){
        //     // Prepare a SQL statement to insert data into the database
        //     $stmt = $mysqli->prepare("INSERT INTO students (name, matricno, email, curraddress, homeaddress, mobilephone, homephone, login_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
        //     // Bind parameters to the prepared statement
        //     $stmt->bind_param("sssssssi", $name, $matricno, $email, $curraddress, $homeaddress, $mobilephone, $homephone, $login_id);
    
        //     // Execute the prepared statement
        //     if ($stmt->execute()) {
        //         $inserted_id = $mysqli->insert_id;
    
        //         // Redirect to student_details.php with the ID parameter
        //         header("Location: student_details.php?id=$inserted_id");
        //         exit();
        //     } else {
        //         // Error inserting data into the database
        //         echo "Error: " . $mysqli->error . "<br>";
        //     }
        
        // // Close the statement
        // $stmt->close();
        echo "<script>alert('enter update'); </script>";
        die();

        // $errors = []; // Array to store error messages
    
        // // Validate and sanitize form inputs
        // $name = validateInput($_POST["name"], '~^[A-Za-z ]+$~', 'Invalid name');
        // $matricno = validateInput($_POST["matricno"], '~^\d{7}$~', 'Invalid matric number');
        // $email = validateInput($_POST["email"], '~^[a-zA-Z0-9._%+-]+@gmail+\.[a-zA-Z]{2,}$~', 'Invalid email address');
        // $curraddress = validateInput($_POST["curraddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid current address');
        // $homeaddress = validateInput($_POST["homeaddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid home address');
        // $mobilephone = validateInput($_POST["mobilephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid mobile phone number');
        // $homephone = validateInput($_POST["homephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid home phone number');
    
        // // Get the user ID from session
        // $login_id = $_SESSION['user_id'];
        // $id = $_POST['id'];
        // // Prepare a SQL statement to update data in the database
        // $stmt = $mysqli->prepare("UPDATE students SET nameInsert=?, matricno=?, email=?, curraddress=?, homeaddress=?, mobilephone=?, homephone=? WHERE id=? AND login_id=?");

        // // Bind parameters to the prepared statement
        // $stmt->bind_param("ssssssiii", $name, $matricno, $email, $curraddress, $homeaddress, $mobilephone, $homephone, $id, $login_id);

        // // Execute the prepared statement
        // if ($stmt->execute()) {
        //     // Redirect to student_details.php with the ID parameter
        //     header("Location: student_details.php?id=$id");
        //     exit();
        // } else {
        //     // Error updating data in the database
        //     echo "Error: " . $mysqli->error . "<br>";
        // }

        // $stmt->close();

}
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
        // $errors = []; // Array to store error messages
    
        // // Validate and sanitize form inputs
        // $name = validateInput($_POST["name"], '~^[A-Za-z ]+$~', 'Invalid name');
        // $matricno = validateInput($_POST["matricno"], '~^\d{7}$~', 'Invalid matric number');
        // $email = validateInput($_POST["email"], '~^[a-zA-Z0-9._%+-]+@gmail+\.[a-zA-Z]{2,}$~', 'Invalid email address');
        // $curraddress = validateInput($_POST["curraddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid current address');
        // $homeaddress = validateInput($_POST["homeaddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid home address');
        // $mobilephone = validateInput($_POST["mobilephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid mobile phone number');
        // $homephone = validateInput($_POST["homephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid home phone number');
    
        // // Get the user ID from session
        // $login_id = $_SESSION['user_id'];
        // $id = $_POST['id'];
        // // Prepare a SQL statement to update data in the database
        // $stmt = $mysqli->prepare("UPDATE students SET name=?, matricno=?, email=?, curraddress=?, homeaddress=?, mobilephone=?, homephone=? WHERE id=? AND login_id=?");

        // // Bind parameters to the prepared statement
        // $stmt->bind_param("ssssssiii", $name, $matricno, $email, $curraddress, $homeaddress, $mobilephone, $homephone, $id, $login_id);

        // // Execute the prepared statement
        // if ($stmt->execute()) {
        //     // Redirect to student_details.php with the ID parameter
        //     header("Location: student_details.php?id=$id");
        //     exit();
        // } else {
        //     // Error updating data in the database
        //     echo "Error: " . $mysqli->error . "<br>";
        // }

        // $stmt->close();

        echo "<script>alert('enter insert'); </script>";
        die();


        // $errors = []; // Array to store error messages
    
        // // Validate and sanitize form inputs
        // $name = validateInput($_POST["name"], '~^[A-Za-z ]+$~', 'Invalid name');
        // $matricno = validateInput($_POST["matricno"], '~^\d{7}$~', 'Invalid matric number');
        // $email = validateInput($_POST["email"], '~^[a-zA-Z0-9._%+-]+@gmail+\.[a-zA-Z]{2,}$~', 'Invalid email address');
        // $curraddress = validateInput($_POST["curraddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid current address');
        // $homeaddress = validateInput($_POST["homeaddress"], '~^[A-Za-z0-9/\s,\-.]+$~', 'Invalid home address');
        // $mobilephone = validateInput($_POST["mobilephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid mobile phone number');
        // $homephone = validateInput($_POST["homephone"], '~^\d{3}-\d{3}-\d{4}$~', 'Invalid home phone number');
    
        // // Get the user ID from session
        // $login_id = $_SESSION['user_id'];
    
        // // Check if an ID is provided for updating
        // // if (!isset($_POST['id'])) {
        // //     $id = $_POST['id'];
        // //     // Prepare a SQL statement to update data in the database
        // //     $stmt = $mysqli->prepare("UPDATE students SET name=?, matricno=?, email=?, curraddress=?, homeaddress=?, mobilephone=?, homephone=? WHERE id=? AND login_id=?");
    
        // //     // Bind parameters to the prepared statement
        // //     $stmt->bind_param("ssssssiii", $name, $matricno, $email, $curraddress, $homeaddress, $mobilephone, $homephone, $id, $login_id);
    
        // //     // Execute the prepared statement
        // //     if ($stmt->execute()) {
        // //         // Redirect to student_details.php with the ID parameter
        // //         header("Location: student_details.php?id=$id");
        // //         exit();
        // //     } else {
        // //         // Error updating data in the database
        // //         echo "Error: " . $mysqli->error . "<br>";
        // //     }
        // // } elseif (!isset($_POST['id'])){
        //     // Prepare a SQL statement to insert data into the database
        //     $stmt = $mysqli->prepare("INSERT INTO students (name, matricno, email, curraddress, homeaddress, mobilephone, homephone, login_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    
        //     // Bind parameters to the prepared statement
        //     $stmt->bind_param("sssssssi", $name, $matricno, $email, $curraddress, $homeaddress, $mobilephone, $homephone, $login_id);
    
        //     // Execute the prepared statement
        //     if ($stmt->execute()) {
        //         $inserted_id = $mysqli->insert_id;
    
        //         // Redirect to student_details.php with the ID parameter
        //         header("Location: student_details.php?id=$inserted_id");
        //         exit();
        //     } else {
        //         // Error inserting data into the database
        //         echo "Error: " . $mysqli->error . "<br>";
        //     }
        
        // // Close the statement
        // $stmt->close();
   
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    echo "<script>alert('enter get'); </script>";
    die();

    // $response = array();

    // // Retrieve the ID from the query parameters
    // $id = $_GET['id'];

    // // Prepare a SQL statement to fetch data for the specified ID
    // $stmt = $mysqli->prepare("SELECT * FROM students WHERE id = ?");
    
    // // Bind the ID parameter to the prepared statement
    // $stmt->bind_param("i", $id);
    
    // // Execute the prepared statement
    // $stmt->execute();
    
    // // Get the result set
    // $result = $stmt->get_result();

    // // Check if there are rows returned
    // if ($result->num_rows > 0) {
    //     // Fetch data and store it in response array
    //     while ($row = $result->fetch_assoc()) {
    //         $response[] = $row;
    //     }
    // }

    // // Close the statement
    // $stmt->close();

    // // Set response header to indicate JSON content
    // header('Content-Type: application/json');

    // // Convert response array to JSON format and echo it
    // echo json_encode($response);
} else {
    
    echo "<script>alert('enter post'); </script>";
}

// Function to validate input using preg_match
function validateInput($input, $pattern, $error_message) {
    $validated_input = htmlspecialchars($input); // Sanitize input
    if (preg_match($pattern, $validated_input)) {
        return $validated_input;
    } else {
        global $errors; // Access global errors array
        $errors[] = $error_message; // Add error message to errors array
        return " "; // Return empty string for invalid input
    }
}

?>
