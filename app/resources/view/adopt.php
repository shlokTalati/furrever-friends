<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption Application</title>
    <style>
        /* Your existing CSS styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* Use a more modern sans-serif font */
            font-size: 16px;
            /* Increase the base font size for better readability */
            line-height: 1.6;
            /* Improve line spacing for better readability */
        }

        .container {
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        textarea {
            resize: vertical;
            /* Allow vertical resizing of textarea */
        }

        input[type="checkbox"] {
            margin-right: 5px;
            vertical-align: middle;
        }

        .terms-popup-link {
            color: #007bff;
            text-decoration: none;
        }

        .terms-popup-link:hover {
            text-decoration: underline;
        }

        .submit-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            border-radius: 5px;
            /* width: 80%; */
            /* max-width: 600px; */
            width: 90%;
            max-width: 800px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        #accept_terms_btn {
            background-color: #4CAF50;
            /* Green background */
            color: white;
            /* White text color */
            padding: 12px 20px;
            /* Padding */
            border: none;
            /* No border */
            border-radius: 5px;
            /* Rounded corners */
            cursor: pointer;
            /* Cursor style */
            font-size: 16px;
            /* Font size */
            transition: background-color 0.3s;
            /* Smooth transition */
            display: block;
            /* Make it a block element to center it */
            margin: 20px auto 0;
            /* Center horizontally with some top margin */
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .submit-btn {
            background-color: #4CAF50;
            /* Green background */
            color: white;
            /* White text color */
            padding: 12px 20px;
            /* Padding */
            border: none;
            /* No border */
            border-radius: 5px;
            /* Rounded corners */
            cursor: pointer;
            /* Cursor style */
            font-size: 16px;
            /* Font size */
            transition: background-color 0.3s;
            /* Smooth transition */
        }

        .submit-btn:hover {
            background-color: #45a049;
            /* Darker green on hover */
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Pet Adoption Form</h2>
        <form action="adopt" method="post">
            <input type="hidden" name="pet_id" value="<?php echo $petId; ?>">

            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Your Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>

            <div class="form-group">
                <label for="address">Your Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
            </div>

            <div class="form-group">
                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>
            </div>

            <div class="form-group">
                <label for="zip">ZIP Code:</label>
                <input type="text" id="zip" name="zip" required>
            </div>

            <div class="form-group">
                <label for="reason">Reason for Adoption:</label>
                <textarea id="reason" name="reason" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="experience">Experience with Pets:</label>
                <textarea id="experience" name="experience" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="home_description">Description of Your Home:</label>
                <textarea id="home_description" name="home_description" rows="4" required></textarea>
            </div>
            <!-- pet -->
            <div class="form-group">
                <label for="pet_option">Pet in Your Household:</label>
                <select id="pet_option" name="pet_option">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>


            <div class="form-group" id="pet_input" style="display: none;">
                <label for="pet_count">How many Pet/Pets at your home:</label>
                <input type="text" id="pet_count" name="pet_count">
            </div>

            <!-- children -->
            <div class="form-group">
                <label for="children_option">Children in Your Household:</label>
                <select id="children_option" name="children_option">
                    <option value="yes">Yes</option>
                    <option value="no" selected>No</option>
                </select>
            </div>


            <div class="form-group" id="children_input" style="display: none;">
                <label for="children_count">How many children at your home:</label>
                <input type="text" id="children_count" name="children_count">
            </div>

            <div class="form-group">
                <input type="checkbox" id="terms_conditions" name="terms_conditions" required>
                <label for="terms_conditions">I agree to the <a href="#" id="terms_popup_link">terms and conditions</a></label>
            </div>

            <button type="submit" class="submit-btn">Submit Application</button>

        </form>
    </div>

    <!-- Modal for terms and conditions -->
    <div id="terms_modal" class="modal">
        <div class="modal-content">
            <span class="close" id="close_modal">&times;</span>
            <h3>Terms and Conditions</h3>
            <p>-Welcome to our Pet Adoption platform. These terms and conditions outline the rules and regulations for the use of our website.</p>
            <p>-By accessing this website, we assume you accept these terms and conditions in full. Do not continue to use this website if you do not accept all of the terms and conditions stated on this page.</p>
            <b>
                <p>1. Definitions</p>
            </b>
            <p>"-Adopter" refers to the individual or entity seeking to adopt a pet through our platform.</p>
            <p>"-Adoption Fee" refers to the fee charged for the adoption of a pet, which may vary based on factors such as the age, breed, and medical history of the pet.</p>
            <p>"-Pet" refers to the animal available for adoption through our platform.</p>
            <b>
                <p>2. Adoption Process</p>
            </b>
            <p>-The adoption process involves the submission of an adoption application by the Adopter.</p>
            <p>-The adoption application may require information such as the Adopter's personal details, living situation, and experience with pets.</p>
            <p>-The submission of an adoption application does not guarantee approval for adoption</p>
            <p>-Our team will review the adoption application and may contact the Adopter for further information or clarification.</p>
            <p>-We reserve the right to reject any adoption application at our discretion.</p>
            <b>
                <p>3. Adoption Fee</p>
            </b>
            <p>-The Adoption Fee covers expenses such as veterinary care, vaccinations, microchipping, and spaying/neutering of the pet.</p>
            <p>-The Adopter agrees to pay the Adoption Fee as outlined for the selected pet.</p>
            <p>-The Adoption Fee is non-refundable once the adoption process is completed.</p>
            <b>
                <p>4. Pet Care</p>
            </b>
            <p>-The Adopter agrees to provide proper care, nutrition, and medical attention to the adopted pet.</p>
            <p>-The Adopter agrees to comply with all local laws and regulations regarding pet ownership, including licensing and vaccination requirements.</p>
            <b>
                <p>5. Liability</p>
            </b>
            <p>-We are not liable for any damages or injuries caused by the adopted pet.</p>
            <p>-The Adopter assumes full responsibility for any actions or behaviors of the adopted pet.</p>
            <b>
                <p>6. Termination of Adoption</p>
            </b>
            <p>-We reserve the right to reclaim the adopted pet if the Adopter fails to comply with these terms and conditions or if we determine that the pet is not receiving proper care.</p>
            <b>
                <p>7. Changes to Terms and Conditions</p>
            </b>
            <p>-We reserve the right to modify these terms and conditions at any time without prior notice.</p>
            <p>-By continuing to use our platform after any revisions become effective, you agree to be bound by the updated terms and conditions.</p>
            <p>8. Governing Law</p>
            <b>
                <p>These terms and conditions are governed by and construed in accordance with the laws of India, and any disputes relating to these terms and conditions will be subject to the exclusive jurisdiction of the courts of SUPREME COURT OF INDIA.</p>
            </b>
            <b>
                <p>-If you have any questions about these terms and conditions, please contact us.</p>
            </b>


            <!-- Add other terms and conditions here -->
            <div class="form-group">
                <input type="checkbox" id="terms_checkbox" required>
                <label for="terms_checkbox">I agree to the terms and conditions</label>
            </div>
            <button id="accept_terms_btn">Accept</button>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('terms_modal');

        // Get the link that opens the modal
        var termsLink = document.getElementById("terms_popup_link");

        // Get the <span> element that closes the modal
        var closeBtn = document.getElementById("close_modal");

        // When the user clicks on the link, open the modal
        termsLink.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        closeBtn.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Handle terms acceptance
        document.getElementById("accept_terms_btn").onclick = function() {
            var checkbox = document.getElementById("terms_checkbox");
            if (checkbox.checked) {
                modal.style.display = "none";
            } else {
                alert("Please agree to the terms and conditions.");
            }
        };
    </script>
    <script>
        // Get the children option dropdown
        var childrenOption = document.getElementById("children_option");

        // Get the children input field
        var childrenInput = document.getElementById("children_input");

        // Event listener for changes in the dropdown
        childrenOption.addEventListener("change", function() {
            if (childrenOption.value === "yes") {
                childrenInput.style.display = "block"; // Show the input field
            } else {
                childrenInput.style.display = "none"; // Hide the input field
            }
        });
    </script>
    <script>
        // Get the children option dropdown
        var petOption = document.getElementById("pet_option");

        // Get the children input field
        var petInput = document.getElementById("pet_input");

        // Event listener for changes in the dropdown
        petOption.addEventListener("change", function() {
            if (petOption.value === "yes") {
                petInput.style.display = "block"; // Show the input field
            } else {
                petInput.style.display = "none"; // Hide the input field
            }
        });
    </script>
</body>

</html>