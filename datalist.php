<?php
// include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Messages</title>
    <link
      rel="Webpage icon"
      type="device-icon/png"
      href="images/dhonmarkdosal.png"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: linear-gradient(50deg, #84fab0 , #c9f090);
        }
        .text-light:hover{
            text-decoration: none;
        }
        .btn {
            background-color: #16123f;
            border-color: #16123f;
        }
        .btn:hover {
            box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;
              
        }
    </style>
</head>
<body>

<div class="container">
<button class="btn btn-info mt-5" type="button"><a href="index.php" class="text-light"><svg style="margin: 0px 5px -4px 1px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Home page</a></button>
</div>

<div class="container">
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email Address</th>
      <th scope="col">Message</th>
      <th scope="col">Date Create</th>
      <th scope="col">Button Function</th>
    </tr>
  </thead>
  <tbody>

        <?php


        $sql="select * from `contacts`";
        $result=mysqli_query($con, $sql);
        if($result) {
            while($row=mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $message=$row['message'];
            $created=$row['created'];
            echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$message.'</td>
            <td>'.$created.'</td>
            <td>
            <button class="btn btn-danger"><a class="text-light" href="delete.php? deleteid='.$id.'">Remove <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" style="margin: 0px -5px -2px 3px;" viewBox="0 0 16 16">
            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
          </svg></a></button>
            </td>
          </tr>';
        }
    }
        ?>   

  </tbody>
</table>
</div>
    
</body>
</html>