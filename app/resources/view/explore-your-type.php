<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Your Type</title>
    <style>
        body {
            position: relative;
            /* Required for footer positioning */
            margin: 0;
            padding: 0;
            background-image: url('/petmarket/app/resources/img/bg2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        header {
            background-color: rgba(255, 110, 1, 0.8);
            /* Adjust the alpha value (0.8 in this case) to control transparency */
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .main-text {
            text-align: center;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .main-text h2 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .main-text p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .quiz-section {
            text-align: center;
            margin: 20px;
        }

        .quiz-section button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }

        .info-section {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .pet-info h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .pet-info p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }



        .modal-content {
            background-color: #FFD580;
            margin: 15% auto;
            /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
            /* Decreased width */
            text-align: center;
            /* Align contents to center */
        }

        .modal-content p,
        .modal-content input[type="radio"] {
            display: inline-block;
            /* Display questions and radio buttons in one line */
            vertical-align: middle;
            /* Align vertically in the middle */
            margin: 10px 0;
            /* Add spacing between questions */
            text-align: left;
            /* Align text to the left */
            width: 100%;
            /* Make sure each question takes full width */
        }

        .modal-content p {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .modal-content input[type="radio"] {
            display: inline-block;
            /* Display radio buttons in one line */
            margin-right: 20px;
            /* Add space between radio buttons */
            vertical-align: middle;
            /* Align vertically in the middle */
        }




        /* Adjust font size and spacing for better readability */
        .modal-content p {
            background-color: #FFA07A;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .modal-content input[type="radio"] {
            margin-right: 10px;
        }

        .modal-content h2 {
            background-color: #FFA07A;
            /* Add background color */
            padding: 10px;
            /* Add padding for better appearance */
        }

        .modal-content input[type="text"] {
            color: #333;
            /* Match the text color of the page */
            background-color: #fefefe;
            /* Match the background color of the modal content */
            border: 1px solid #ccc;
            /* Add border for contrast */
            padding: 8px;
            /* Add padding for spacing */
            border-radius: 5px;
            /* Add border radius for rounded corners */
            width: 50%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        h2 {
            font-size: 60px;
        }

        #submit-quiz {
            padding: 10px 20px;
            background-color: #ff6e01;
            /* Orange color */
            color: #fff;
            /* White text color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
            transition: background-color 0.3s ease;
            /* Smooth color transition */
        }

        #submit-quiz:hover {
            background-color: #ff9933;
            /* Lighter orange color on hover */
        }

        .fade-in {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .fade-in.active {
            opacity: 1;
        }

        .pet-info {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .pet-info.visible {
            opacity: 1;
        }
    </style>
</head>

<body>
    <header>
        <h1>Explore Your Type</h1>
    </header>
    <section class="main-text">
        <h2>DISCOVER YOUR WHAT TYPE OF ANIMAL SUITS YOU</h2>
        <p>The Original and Most Reliablity Test on the Web</p>
        <p>Take the simple 15 Question Quiz and Answer the questions and find out what type of pet suits you!!</p>
    </section>
    <section class="quiz-section">
        <button id="quiz-btn">Take Quiz</button>
    </section>
    <section class="info-section fade-in">
        <h2>About Pets</h2>
        <div class="pet-info">
            <h3>Dogs</h3>
            <p>Dogs are loyal, friendly, and great for companionship. They are often called "man's best friend" for a reason. They love to play, go for walks, and spend time with their owners. Dogs come in various breeds, sizes, and temperaments, so there's likely one that fits your lifestyle perfectly.</p>
        </div>
        <div class="pet-info">
            <h3>Cats</h3>
            <p>Cats are independent and low-maintenance pets. They are known for their playful and curious nature. Cats can be affectionate companions but also enjoy spending time alone. They are perfect for people who have a busy lifestyle but still want the joy of having a pet.</p>
        </div>
        <div class="pet-info">
            <h3>Fish</h3>
            <p>Fish are calming and beautiful creatures that can add tranquility to any space with an aquarium. They require minimal care compared to other pets and can be an excellent option for those who don't have a lot of time to dedicate to pet care. Watching fish swim can also be therapeutic and relaxing.</p>
        </div>
        <div class="pet-info">
            <h3>Horses</h3>
            <p>Horses are majestic animals known for their grace and strength. They have been companions to humans for centuries, used for riding, racing, and working. Horses require dedicated care and space, but for those who love them, they offer a deep connection and rewarding relationship.</p>
        </div>




    </section>


    <!-- Modal -->
    <div id="quiz-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <!-- Add quiz content here -->
            <h2>Quiz</h2>

            <p>Question 1: How much time can you dedicate to taking care of a pet?</p>
            <input type="radio" name="time" value="1"> Less than 1 hour per day<br>
            <input type="radio" name="time" value="2"> 1-2 hours per day<br>
            <input type="radio" name="time" value="3"> More than 2 hours per day<br><br>

            <p>Question 2: How much space do you have available for a pet?</p>
            <input type="radio" name="space" value="small"> Small apartment or limited space<br>
            <input type="radio" name="space" value="medium"> Moderate space with a yard<br>
            <input type="radio" name="space" value="large"> Large house with ample outdoor space<br><br>

            <p>Question 3: How active are you and your family?</p>
            <input type="radio" name="activity" value="low"> Low activity, prefer quiet activities<br>
            <input type="radio" name="activity" value="medium"> Moderate activity, enjoy occasional outings<br>
            <input type="radio" name="activity" value="high"> High activity, always on the go<br><br>

            <p>Question 4: How much grooming are you willing to do for your pet?</p>
            <input type="radio" name="grooming" value="low"> Minimal grooming<br>
            <input type="radio" name="grooming" value="medium"> Regular grooming is fine<br>
            <input type="radio" name="grooming" value="high"> Willing to commit to extensive grooming<br><br>

            <p>Question 5: Do you have any specific preferences for a type of pet?</p>
            <input type="text" name="preferences" placeholder="Enter preferences if any"><br><br>

            <p>Question 6: Are there any allergies in your household?</p>
            <input type="radio" name="allergies" value="yes"> Yes<br>
            <input type="radio" name="allergies" value="no"> No<br><br>

            <p>Question 7: How often are you away from home?</p>
            <input type="radio" name="away" value="rarely"> Rarely, mostly at home<br>
            <input type="radio" name="away" value="sometimes"> Sometimes, for work or travel<br>
            <input type="radio" name="away" value="frequently"> Frequently, for extended periods<br><br>

            <p>Question 8: Do you have children in the household?</p>
            <input type="radio" name="children" value="yes"> Yes<br>
            <input type="radio" name="children" value="no"> No<br><br>

            <p>Question 9: Are you willing to train a pet?</p>
            <input type="radio" name="training" value="yes"> Yes, I'm willing to train<br>
            <input type="radio" name="training" value="no"> No, I prefer a pet that doesn't require training<br><br>

            <p>Question 10: How long do you plan to keep a pet?</p>
            <input type="radio" name="duration" value="short"> Short-term (less than 1 year)<br>
            <input type="radio" name="duration" value="medium"> Medium-term (1-5 years)<br>
            <input type="radio" name="duration" value="long"> Long-term (more than 5 years)<br><br>

            <p>Question 11: How much noise can you tolerate in your living environment?</p>
            <input type="radio" name="noise" value="low"> Prefer quiet surroundings<br>
            <input type="radio" name="noise" value="medium"> Moderate noise is acceptable<br>
            <input type="radio" name="noise" value="high"> Comfortable with loud or constant noise<br><br>

            <p>Question 12: Are you willing to provide specialized care for a pet with specific needs (e.g., medical conditions, behavioral issues)?</p>
            <input type="radio" name="specialized_care" value="yes"> Yes, I'm willing to provide specialized care<br>
            <input type="radio" name="specialized_care" value="no"> Prefer a pet without specialized needs<br><br>

            <p>Question 13: How important is it for your pet to be social and interact with other animals or people?</p>
            <input type="radio" name="social_interaction" value="low"> Not important, prefer a more independent pet<br>
            <input type="radio" name="social_interaction" value="medium"> Moderately important, occasional interaction is fine<br>
            <input type="radio" name="social_interaction" value="high"> Very important, want a highly social pet<br><br>

            <p>Question 14: How often do you travel?</p>
            <input type="radio" name="travel_frequency" value="rarely"> Rarely, mostly at home<br>
            <input type="radio" name="travel_frequency" value="occasionally"> Occasionally, for short trips<br>
            <input type="radio" name="travel_frequency" value="frequently"> Frequently, for extended periods<br><br>

            <p>Question 15: Are you prepared for the financial responsibilities associated with pet ownership (e.g., veterinary care, food, grooming)?</p>
            <input type="radio" name="financial_responsibilities" value="yes"> Yes, I'm prepared<br>
            <input type="radio" name="financial_responsibilities" value="no"> Concerned about financial commitment<br><br>
            <!-- Add more questions here -->
            <br>
            <br>
            <br>
            <br>
            <button id="submit-quiz">Submit</button>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById("quiz-modal");

        // Get the button that opens the modal
        var btn = document.getElementById("quiz-btn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        // Function to handle quiz submission
        // Function to handle quiz submission
        document.getElementById("submit-quiz").addEventListener("click", function() {
            // Get all the selected radio button values
            var time = document.querySelector('input[name="time"]:checked').value;
            var space = document.querySelector('input[name="space"]:checked').value;
            var activity = document.querySelector('input[name="activity"]:checked').value;
            var grooming = document.querySelector('input[name="grooming"]:checked').value;
            var allergies = document.querySelector('input[name="allergies"]:checked').value;
            var away = document.querySelector('input[name="away"]:checked').value;
            var children = document.querySelector('input[name="children"]:checked').value;
            var training = document.querySelector('input[name="training"]:checked').value;
            var duration = document.querySelector('input[name="duration"]:checked').value;
            var noise = document.querySelector('input[name="noise"]:checked').value;
            var specializedCare = document.querySelector('input[name="specialized_care"]:checked').value;
            var socialInteraction = document.querySelector('input[name="social_interaction"]:checked').value;
            var travelFrequency = document.querySelector('input[name="travel_frequency"]:checked').value;
            var financialResponsibilities = document.querySelector('input[name="financial_responsibilities"]:checked').value;

            // Perform analysis based on user responses
            var suitablePet = "";

            // Example logic (you can customize this based on your criteria)
            if (time === "1" && space === "small" && activity === "low" && grooming === "low" && allergies === "no" && away === "rarely" && children === "no" && training === "no" && duration === "long" && noise === "low" && specializedCare === "no" && socialInteraction === "low" && travelFrequency === "rarely" && financialResponsibilities === "yes") {
                suitablePet = "Fish";
            } else if (time === "3" && space === "large" && activity === "high" && grooming === "high" && allergies === "no" && away === "sometimes" && children === "yes" && training === "yes" && duration === "long" && noise === "medium" && specializedCare === "yes" && socialInteraction === "high" && travelFrequency === "occasionally" && financialResponsibilities === "yes") {
                suitablePet = "Dog";
            } else if (time === "2" && space === "medium" && activity === "medium" && grooming === "medium" && allergies === "no" && away === "sometimes" && children === "no" && training === "yes" && duration === "medium" && noise === "medium" && specializedCare === "no" && socialInteraction === "medium" && travelFrequency === "occasionally" && financialResponsibilities === "yes") {
                suitablePet = "Cat";
            } else {
                suitablePet = "No specific recommendation based on provided answers.";
            }

            // Display the result
            alert("Based on your answers, a suitable pet for you is: " + suitablePet);
        });

        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener("scroll", function() {
                var aboutPetsSection = document.querySelector(".info-section");
                if (isInViewport(aboutPetsSection)) {
                    aboutPetsSection.classList.add("active");
                    // Add visible class to pet-info sections
                    var petInfoSections = document.querySelectorAll(".pet-info");
                    petInfoSections.forEach(function(section) {
                        section.classList.add("visible");
                    });
                } else {
                    aboutPetsSection.classList.remove("active");
                    // Remove visible class from pet-info sections
                    var petInfoSections = document.querySelectorAll(".pet-info");
                    petInfoSections.forEach(function(section) {
                        section.classList.remove("visible");
                    });
                }
            });
        });

        function isInViewport(element) {
            var rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
    </script>
</body>

</html>