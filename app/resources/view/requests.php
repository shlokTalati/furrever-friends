
    <style>
        h1{
            font-size: 30px;
            text-align: center;
            background-color: #f1f1f1;
            padding: 20px 0px 20px 0px;
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
        .view{
            background-color: rgb(86, 94, 245);
            color: white;
        }
        .view:hover{
            background-color: rgb(53, 63, 255);
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


    
    <?php
    
    if($requestData == 0){
        echo "<h1>No pending requests</h1>";
    } else {
        foreach ($requestData as $data): ?>

    <div class="notification">
        <div class="notification-header">Adoption Request</div>
        <div class="notification-message">
            <p><strong><?php echo $data['adopter_id'] ?></strong> wants to adopt <strong><?php echo $data['pet_name'] ?></strong> listed by you.</p>
            <p>Do you want to approve their adoption request?</p>
        </div>
        <div class="buttons">
            <button class="button view" onclick="viewRequest()">View</button>
            
            <a href="/petmarket/requests?adoptionId=<?php echo $data['id']; ?>&petId=<?php echo $data['pet_id'] ?>&action=Approve">
            <button class="button approve" onclick="approveRequest()"><span class="icon">&#10004;</span> Approve</button>
            </a>

            <a href="/petmarket/requests?adoptionId=<?php echo $data['id']; ?>&petId=<?php echo $data['pet_id'] ?>&action=Reject">
            <button class="button reject" onclick="rejectRequest()"><span class="icon">&#10006;</span> Reject</button>
            </a>
        </div>
    </div>

    <?php endforeach;
    }
    ?>
   
    

    <!-- Other notifications can go here -->



