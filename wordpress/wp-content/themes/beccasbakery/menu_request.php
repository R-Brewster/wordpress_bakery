<?php 
    // $user = 'root';
    // $password = 'root';
    // $db = 'beccasbakery';
    // $host = 'localhost';
    // $port = 8889;
    
    // $link = mysqli_init();

    // $success = mysqli_real_connect(
    //    $link, 
    //    $host, 
    //    $user, 
    //    $password, 
    //    $db,
    //    $port
    // );

    // // $success = mysqli_connect("localhost", "root", "root", "beccasbakery");

    // echo $success;

    // $sql = "SELECT * FROM baked_goods";

    // $result = mysqli_query($success,$sql);

    // $con = mysqli_connect('localhost:8889','root','root','beccasbakery');

    // if (!$con) {
    // die('Could not connect: ' . mysqli_error($con));
    // }

    // mysqli_select_db($con,"baked_goods");

    // $sql="SELECT * FROM baked_goods";

    // $result = mysqli_query($con,$sql);

    // echo $result;

    // echo "<table>

    //     <tr>
    //     <th>Cakes</th>
    //     <th>Pies</th>
    //     <th>Cookies</th>
    //     <th>Cupcakes</th>
    //     </tr>";
    // while($row = mysqli_fetch_array($result)) {
    //     echo "<tr>";
    //     echo "<td>" . $row['Cakes'] . "</td>";
    //     echo "<td>" . $row['Pies'] . "</td>";
    //     echo "<td>" . $row['Cookies'] . "</td>";
    //     echo "<td>" . $row['Cupcakes'] . "</td>";
    //     echo "</tr>";
    // }

    // echo "</table>";

    // mysqli_close($con);

    echo "<table>

        <tr>
        <th>Cakes</th>
        <th>Pies</th> 
        <th>Cookies</th>
        <th>Cupcakes</th>
        </tr>
        <tr>
        <td>Chocolate</td>
        <td>Apple</td> 
        <td>Chocolate Chip</td>
        <td>Chocolate</td>
        </tr>
        <tr>
        <td>Vanilla</td>
        <td>Cherry</td> 
        <td>Sugar</td>
        <td>Vanilla</td>
        </tr>
        <tr>
        <td>Yellow</td>
        <td>Key Lime</td> 
        <td>Molasses</td>
        <td>Strawberry</td>
        </tr>
        <tr>
        <td>Angel Food</td>
        <td>Lemon Meringue</td> 
        <td>Peanut Butter</td>
        <td>Red Velvet</td>
        </tr>

     </table>";
    
?>