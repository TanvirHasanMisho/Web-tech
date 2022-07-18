
<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

 
   // if($conn){
     //        echo "Success";
       //  }else{
         //   echo "DB Error...";
         //}
        
         $sql = "select * from user";
    $result = mysqli_query($conn, $sql);
    
   // while($row= mysqli_fetch_assoc($result)){
     //   print_r($row);
      //  echo "<br>";
    //}
    echo "<br>";
    echo "<br>";
    

     echo "<table border=1>
        <tr>
        <td>id</td>
        <td>username</td>
        <td>password</td>
        <td>email</td>
        </tr>
        "; 

        while($row= mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" .$row['id']."</td>";
            echo "<td>". $row['username']."</td>";        
            echo "<td>". $row['password']."</td>";
            echo "<td>". $row['email']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        ?>