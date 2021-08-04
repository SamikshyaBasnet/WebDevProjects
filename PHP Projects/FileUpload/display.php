<?php

include 'links/links.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Degree</th>
      <th scope="col">Language</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
    <tbody>
        <?php
        
        include 'dbcon.php';

        $selectquery = "select * from information";

        $queryfire = mysqli_query($con, $selectquery);

        $result = mysqli_fetch_array($queryfire);

        while($result = mysqli_fetch_array($queryfire)){
        ?>
        
        <tr>
            <td scope><?php echo $result['id']?></td>
            <td scope><?php echo $result['name']?></td>
            <td scope><?php echo $result['email']?></td>
            <td scope><?php echo $result['degree']?></td>
            <td scope><?php echo $result['language']?></td>
            <td scope><img src="<?php echo $result['pic']?>" width="100px" height="50px" background="black"/></td>
            
        </tr>

        <?php
        }

        ?>
 
        
    </tbody>
</table>
</body>
</html>