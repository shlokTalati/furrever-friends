<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Pet Adoption</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background-color: #ff6e01;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            animation: fadeIn 1s ease-out;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #000;
            text-align: center;
            font-size: 36px;
        }
        h2 {
            color: #ff6e01;
            font-size: 24px;
        }
        p {
            line-height: 1.6;
            font-size: 18px;
            opacity: 1; /* Ensure the paragraph is visible */
            transition: opacity 1s ease-in-out;
        }
        #emailheading{
            color: #ff6e01;
            font-size: 24px;
        }
        #phoneheading{
            color: #ff6e01;
            font-size: 24px;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>About Us - Pet Adoption</h1>
    </header>
    <div class="container">
        <h2>Our Mission</h2>
        <p>We are dedicated to finding loving homes for pets in need. Our mission is to connect animals in shelters with caring individuals and families who are ready to welcome them into their lives.</p>
        
        <h2>Why Choose Us?</h2>
        <p>At Pet Adoption, we prioritize the well-being of our animals above all else. Our team works tirelessly to ensure that each pet receives proper care, love, and attention while they wait for their forever home. By choosing us, you're not just adopting a pet – you're saving a life.</p>
        
        <h2>Meet Our Team</h2>
        <p>Our team consists of passionate animal lovers who are dedicated to making a difference in the lives of homeless pets. From our volunteers who spend countless hours socializing with the animals to our adoption counselors who match pets with their perfect families, each member plays a vital role in our organization.</p>
        
        <h2>Contact Us</h2>
        <p>If you have any questions about our adoption process, the animals available for adoption, or if you're interested in volunteering, please don't hesitate to reach out to us.</p>
        <!-- <p>Email: info@petadoption.com<br>Phone: 123-456-7890</p> -->
        <p id="emailheading">Email: </p> <p>info@FurrEverFriends.com  </p> <br> <p id="phoneheading"> Phone: </p> <p> (+91) 78748 45813 </p>
    </div>
    <script>
        window.addEventListener('scroll', () => {
            const paragraphs = document.querySelectorAll('p');
            paragraphs.forEach(paragraph => {
                if (isInViewport(paragraph)) {
                    paragraph.style.opacity = 1;
                }
            });
        });

        function isInViewport(element) {
            const rect = element.getBoundingClientRect();
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
