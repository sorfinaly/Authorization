document.addEventListener("DOMContentLoaded", function() {
    // Function to handle update button click event
    function updateStudent() {
        // Retrieve form data
        var formData = new FormData(document.getElementById("student-form"));
        
        // Make sure to include the student ID in the form data
        var studentId = "<?php echo $_GET['id']; ?>";
        formData.append("id", studentId);

        // Make PUT request to update student record
        fetch("crud.php", {
            method: "PUT",
            body: formData
        })
        .then(response => {
            // Check if response is successful
            if (response.ok) {
                return response.json(); // Parse JSON response
            } else {
                throw new Error("Failed to update student record");
            }
        })
        .then(data => {
            // Handle successful response
            console.log("Student record updated successfully:", data);
            // Redirect to student details page
            window.location.href = "student_details.php?id=" + studentId;
        })
        .catch(error => {
            // Handle errors
            console.error("Error updating student record:", error.message);
            // Display error message to the user
            alert("Failed to update student record. Please try again.");
        });
    }

  // Function to handle delete button click event
function deleteStudent() {
    // Perform AJAX request to delete student
    fetch("crud.php?id=<?php echo $student['id']; ?>", {
        method: "DELETE",
    })
    .then(response => response.json())
    .then(data => {
        if (data && data.success) {
            // Redirect to login page or do something else
            window.location.href = "index.html";
        } else {
            // Deletion failed, log error or show message
            alert("Deletion failed: Unable to delete student record.");
        }
    })
    .catch(error => {
        // AJAX request failed, log error or show message
        alert("AJAX request failed: " + error);
    });
}


    // Function to handle back button click event
    function back() {
        // Redirect to login page
        window.location.href = "index.html";
    }

    // Event listeners for button clicks
    document.getElementById('update-btn').addEventListener('click', updateStudent);
    document.getElementById('delete-btn').addEventListener('click', deleteStudent);
    document.getElementById('back-btn').addEventListener('click', back);
});
