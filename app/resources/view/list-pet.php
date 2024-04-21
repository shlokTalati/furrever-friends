<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Listing Form</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #ff6e01;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #ff6e01;
            margin-bottom: 10px;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #555;
            /* Added */
        }

        select {
            background-image: url('data:image/svg+xml;utf8,<svg fill="#ff6e01" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg>');
            background-repeat: no-repeat;
            background-position: right 10px top 50%;
            background-size: 24px;
            padding-right: 40px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #ff6e01;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #e66000;
        }

        .radio-label {
            margin-right: 20px;
        }

        /* Media Query for responsiveness */
        @media (max-width: 768px) {
            form {
                padding: 20px 10px;
            }
        }

        /* Hide number input arrows */
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type=number] {
            -moz-appearance: textfield;
        }

        header,
        h1 {
            color: #000;
        }
    </style>
</head>

<body>

    <header>
        <h1>Pet Listing Form</h1>
    </header>

    <form action="/petmarket/listpet" enctype="multipart/form-data" method="post">

        <label for="user_email">User Email:</label>
        <input type="email" id="user_email" name="user_email" value="<?php echo $_SESSION['user']['email']; ?>" readonly>

        <label for="species_select">Species:</label>
        <select id="species_select" name="list_species_id" required onchange="update_breeds()">
            <!-- Options will be added dynamically through JavaScript -->
        </select>

        <label for="breed_select">Breed:</label>
        <select id="breed_select" name="list_breed_id" required>
            <!-- Options will be added dynamically through JavaScript -->
        </select>

        <label for="list_name">Name:</label>
        <input type="text" id="list_name" name="list_name" required>

        <label for="list_gender">Gender:</label>
        <select id="list_gender" name="list_gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <label for="list_age">Age:</label>
        <input type="number" id="list_age" name="list_age" required style="-moz-appearance: textfield; -webkit-appearance: none; appearance: none;">


        <label for="list_nature">Nature:</label>
        <select id="list_nature" name="list_nature" required>
            <option value="Aggressive">Aggressive</option>
            <option value="Calm">Calm</option>
            <option value="Playful">Playful</option>
        </select>

        <label for="list_food_preference">Food Preference:</label>
        <select id="list_food_preference" name="list_food_preference" required>
            <option value="Vegetarian">Vegetarian</option>
            <option value="Non-Vegetarian">Non-Vegetarian</option>
        </select>

        <p>Vaccination Status:</p>
        <label class="radio-label"><input type="radio" class="list_vaccination_status" name="list_vaccination_status" value="Done" required> Done</label>
        <label class="radio-label"><input type="radio" class="list_vaccination_status" name="list_vaccination_status" value="Not Done" required checked> Not Done</label>
        <label class="radio-label"><input type="radio" class="list_vaccination_status" name="list_vaccination_status" value="Partially Done" required> Partially Done</label>

        <label for="list_extra_info">Extra Info:</label>
        <textarea id="list_extra_info" name="list_extra_info" required></textarea>

        <label for="pet_photoFile">Upload Photo</label>
        <input type="file" name="pet_photo" >

        <br>
        <br>
        <br>

        <input type="submit" value="Submit" name="listpet">
    </form>

    <br><br>

    <script>
        var species_data = <?php echo json_encode($species_data); ?>;
        var breed_data = <?php echo json_encode($breed_data); ?>;

        // Add Species options to the Species Dropdown dynamically
        function update_species() {

            species_data.forEach(element => {
                species_select.appendChild(new Option(element.name, element.id));
            });

        }

        // Add Breed options to the Breed Dropdown dynamically
        function update_breeds() {
            breed_select.innerHTML = '';

            breed_data.forEach(element => {
                if (element.species_id == species_select.value) {
                    breed_select.appendChild(new Option(element.name, element.id));
                }
            });
        }

        update_species();
        update_breeds();
    </script>



    <?php
    // Check if form is submitted
   







        // if (isset($_FILES["pet_photo"]) && $_FILES["pet_photo"]["error"] == 0) {
        //     $targetDir = "/app/images/"; // Directory where you want to store the uploaded files
        //     $img_name = $_FILES['pet_photo']['name'];
        //     $img_size = $_FILES['pet_photo']['size'];
        //     $tmp_name = $_FILES['pet_photo']['tmp_name'];
        //     $error = $_FILES['pet_photo']['error'];

        //     // Check if file already exists
        //     if (file_exists($targetFile)) {
        //         echo "Sorry, file already exists.";
        //     } else {
        //         // Move uploaded file to designated directory
        //         if (move_uploaded_file($_FILES["pet_photo"]["tmp_name"], $targetFile)) {
        //             echo "The file " . basename($_FILES["pet_photo"]["name"]) . " has been uploaded.";
        //         } else {
        //             echo "Sorry, there was an error uploading your file.";
        //         }
        //     }
        // } else {
        //     echo "No file uploaded.";
        // }
    // }

    // Fetch the image
    // $imagePath = "uploads/" . basename($_FILES["pet_photo"]["name"]);
    ?>

    


    <?php

    // if(isset($_POST['createEvent'])){
    //     require "eventClass.php";
    //     $obj = new db();    

    //     $eventName = $_POST['EventName'];
    //     $organizerName = $_POST['OrganizerName'];
    //     $date = $_POST['date'];
    //     $time = $_POST['time'];
    //     $venue = $_POST['veneu']; 
    //     $Description = $_POST['description'];
    //     $cost = $_POST['cost'];

    //     // Handling image upload
    //     $target_dir = "image/";
    //     $img_name = $_FILES['eImage']['name'];
    //     $img_size = $_FILES['eImage']['size'];
    //     $tmp_name = $_FILES['eImage']['tmp_name'];
    //     $error = $_FILES['eImage']['error'];

    //     if($error === 0){
    //         if($img_size > 125000){
    //             $em = "File size too large";
    //             header('location:createEvent.php?error=' . $em); 
    //             exit;   
    //         } else {
    //             $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    //             $new_img_name = uniqid() . "." . $img_ex;
    //             $target_file = $target_dir . $new_img_name;

    //             // Move uploaded file to desired location
    //             if(move_uploaded_file($tmp_name, $target_file)) {
    //                 // Getting user ID from session
    //                 $s_id = $_SESSION['epId'];

    //                 // Call the event_register function with all the parameters
    //                 $r = $obj->event_register($eventName, $organizerName, $date, $time, $venue, $Description, $cost, $target_file, $s_id);

    //                 if($r > 0) {
    //                     header('location:manageEvent.php');
    //                     exit;
    //                 } else {
    //                     $em = "Failed to register event";
    //                     header('location:createEvent.php?error=' . $em); 
    //                     exit;
    //                 }
    //             } else {
    //                 $em = "Error uploading file";
    //                 header('location:createEvent.php?error=' . $em); 
    //                 exit;
    //             }
    //         }
    //     } else {
    //         $em = "Error uploading file";
    //         header('location:createEvent.php?error=' . $em); 
    //      exit;
    // }
    // }

    ?>