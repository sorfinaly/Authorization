
// // filename = form.js

// document.addEventListener("DOMContentLoaded", function() {

//     document.querySelectorAll(".form__input, .form__textarea").forEach(function(input) {
//         const errorMessage = input.nextElementSibling; // Select the next sibling element (error message) of the input

//         input.addEventListener("input", function() {
//             const pattern = input.getAttribute("pattern"); // Get the pattern attribute value of the input (if applicable)
//             const inputValue = input.value; // Get the value entered by the user
            
//             if (pattern && !new RegExp(pattern).test(inputValue)) {
//                 input.classList.add("form__input--error"); // Add error class to input
//                 errorMessage.style.visibility = "visible"; // Show error message
//             } else {
//                 input.classList.remove("form__input--error"); // Remove error class from input
//                 errorMessage.style.visibility = "hidden"; // Hide error message
//             }
//         });
//     });

//     document.getElementById('studentform').addEventListener('submit', function(event) {
//         event.preventDefault(); // Prevent the default form submission
    
//         var formData = new FormData(this);
    
//         // Check if ID parameter is present in URL
//         var urlParams = new URLSearchParams(window.location.search);
//         var id = urlParams.get('id');
    
//         // Set ID in form data if present
//         if (id) {
//             formData.append('id', id);
//         }
    
//         // Send form data to form.php for processing
//         fetch('form.php', {
//             method: 'POST',
//             body: formData
//         })
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Network response was not ok');
//             }
//             return response.text();
//         })
//         .then(data => {
//             // Handle success response, if needed
//             console.log(data);
//             // Redirect to student_details.php or any other page as per your requirement
//             window.location.href = 'student_details.php?id=' + id; // Redirect to student_details.php with ID parameter
//         })
//         .catch(error => {
//             // Handle error
//             console.error('There was an error!', error);
//         });
//     });
// });

