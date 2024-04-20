<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Requests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .notification {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
        .notification-header {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .notification-message {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .buttons {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .button {
            font-size: 16px;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
            border-radius: 5px;
            border: none;
            outline: none;
            transition: background-color 0.3s ease;
        }
        .approve {
            background-color: #2ecc71;
            color: white;
        }
        .approve:hover {
            background-color: #27ae60;
        }
        .reject {
            background-color: #e74c3c;
            color: white;
        }
        .reject:hover {
            background-color: #c0392b;
        }
        .icon {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="notification">
        <div class="notification-header">Adoption Request</div>
        <div class="notification-message">
            <p><strong>akshankhanna@gmail.com</strong> wants to adopt <strong>Jim</strong> listed by you.</p>
            <p>Do you want to approve their adoption request?</p>
        </div>
        <div class="buttons">
            <button class="button approve" onclick="approveRequest()"><span class="icon">&#10004;</span> Approve</button>
            <button class="button reject" onclick="rejectRequest()"><span class="icon">&#10006;</span> Reject</button>
        </div>
    </div>
    <div class="notification">
        <div class="notification-header">Adoption Request</div>
        <div class="notification-message">
            <p><strong>shloktalati3@gmail.com</strong> wants to adopt <strong>Bunny</strong> listed by you.</p>
            <p>Do you want to approve their adoption request?</p>
        </div>
        <div class="buttons">
            <button class="button approve" onclick="approveRequest()"><span class="icon">&#10004;</span> Approve</button>
            <button class="button reject" onclick="rejectRequest()"><span class="icon">&#10006;</span> Reject</button>
        </div>
    </div>
    <div class="notification">
        <div class="notification-header">Adoption Request</div>
        <div class="notification-message">
            <p><strong>panchaljay@gmail.com</strong> wants to adopt <strong>Anju</strong> listed by you.</p>
            <p>Do you want to approve their adoption request?</p>
        </div>
        <div class="buttons">
            <button class="button approve" onclick="approveRequest()"><span class="icon">&#10004;</span> Approve</button>
            <button class="button reject" onclick="rejectRequest()"><span class="icon">&#10006;</span> Reject</button>
        </div>
    </div>
    <div class="notification">
        <div class="notification-header">Adoption Request</div>
        <div class="notification-message">
            <p><strong>patelnaman@gmail.com</strong> wants to adopt <strong>Ronaldo</strong> listed by you.</p>
            <p>Do you want to approve their adoption request?</p>
        </div>
        <div class="buttons">
            <button class="button approve" onclick="approveRequest()"><span class="icon">&#10004;</span> Approve</button>
            <button class="button reject" onclick="rejectRequest()"><span class="icon">&#10006;</span> Reject</button>
        </div>
    </div>
    

    <!-- Other notifications can go here -->

    <script>
        function approveRequest(adopterEmail) {
            // Simulate sending an email to the adopter
            sendEmail(adopterEmail, "Adoption Approved", "Congratulations! You have successfully adopted a pet.");
            alert("Adoption request approved!");
        }

        function rejectRequest(adopterEmail) {
            // Simulate sending an email to the adopter
            sendEmail(adopterEmail, "Adoption Rejected", "We're sorry, but your pet adoption request has been rejected.");
            alert("Adoption request rejected!");
        }

        function sendEmail(email, subject, message) {
            // Here you would make an API call to your backend to send the email
            // This is just a placeholder function
            console.log("Sending email to " + email + " with subject: " + subject + " and message: " + message);
        }
    </script>
</body>
</html>
