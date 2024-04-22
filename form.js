
// filename = form.js

document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll(".form__input, .form__textarea").forEach(function(input) {
        const errorMessage = input.nextElementSibling; // Select the next sibling element (error message) of the input

        input.addEventListener("input", function() {
            const pattern = input.getAttribute("pattern"); // Get the pattern attribute value of the input (if applicable)
            const inputValue = input.value; // Get the value entered by the user
            
            if (pattern && !new RegExp(pattern).test(inputValue)) {
                input.classList.add("form__input--error"); // Add error class to input
                errorMessage.style.visibility = "visible"; // Show error message
            } else {
                input.classList.remove("form__input--error"); // Remove error class from input
                errorMessage.style.visibility = "hidden"; // Hide error message
            }
        });
    });

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

    
    function updateStudent() {

        let form = document.getElementById("studentform");
        console.log("Form element:", form); // Check if form is correctly retrieved
        if (!form) {
            console.error("Form not found!");
            return;
        }
    
        var formData = new FormData(form);
        
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
    

    // Function to handle back button click event
    function back() {
        window.location.href = "index.html";
    }

    // Event listener for back button click
    document.getElementById('update-btn').addEventListener('click', updateStudent);
    document.getElementById('delete-btn').addEventListener('click', deleteStudent);
    document.getElementById('back-btn').addEventListener('click', back);
});

