<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Details</title>
    <style>

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
            font-size: 16px;
            line-height: 1.5;
        }

        img {
            width: 100%; /* Ensure image fills its container */
            height: auto; /* Maintain aspect ratio */
            border-radius: 5px;
            margin-bottom: 20px;
            max-width: 100%; /* Prevent image from exceeding container width */
            max-height: 100%; 
            object-fit: cover; /* Cover entire space, maintaining aspect ratio */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>


</head>


<body>
    
    <div class="container">
        <?php
        
        // Check if pet details are available
        if ($petDetails) {
            // Display pet details
            echo "<h1>{$petDetails['name']}</h1>";
            
            // Fetch the image data from the database
            $photoPath = $petDetails['photo_path'];
            
            // Display pet image if available
            if ($photoPath && file_exists($photoPath)) {
                echo "<img src='{$photoPath}' alt='{$petDetails['name']}'>";
            } else {
                echo "<p>No image available.</p>";
            }
            
            echo "<p>Gender: {$petDetails['gender']}</p>";
            echo "<p>Age: {$petDetails['age']}</p>";
            echo "<p>Nature: {$petDetails['nature']}</p>";
            echo "<p>Vaccination Status: {$petDetails['vaccination_status']}</p>";
            echo "<p>Breed: {$breed_name}</p>";
            echo "<p>Species: {$species_name}</p>";

            echo "<p>Extra Info: {$petDetails['extra_info']}</p>";

           
            
            // Add more details as needed

            // Buttons
            echo "<a href='/petmarket/adopt?id={$petDetails['id']}' class='btn'>Adopt</a>";

            // echo "<a href='/petmarket/adoptpet?id={$petDetails['id']}' class='btn'>Adopt</a>";
            // echo "<a href='adoptpet.php' class='btn'>Adopt</a>";

            echo "<a href='wishlist?id={$petDetails['id']}' class='btn'>Add to My Wishlist</a>";
        } else {
            // Handle the case when no pet details are found
            echo "<p>Pet details not found.</p>";
        }
        ?>
        
      
    </div>
<script>
    //Creates an Associative Array of Species that include id and name
    var species_assoc = {};  
    species_data.forEach((obj)=> {
    species_assoc[obj.id] = obj.name;
});

    //Creates an Associative Array of Breed that include id and name
    var breed_assoc = {};  
    breed_data.forEach((obj)=> {
    breed_assoc[obj.id] = obj.name;
});
</script>

</body>

</html>
