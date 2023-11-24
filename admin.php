<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="sidebar">
        <div class="logo">
            <a href="#"><img src="assets/CONDE.gif" alt=""></a>
        </div>
        <!-- nav links -->
        <ul class="nav-link">
            <li>
                <a href="website.php">
                    Go to website
                </a>
            </li>

            <li>
                <a href="">
                    News
                </a>
            </li>

            <li>
                <a href="">
                    Events
                </a>
            </li>

            <li>
                <a href="">
                    Announcement
                </a>
            </li>
            <li>
                <a href="">
                    Product
                </a>
            </li>
            <li>
                <a href="">
                    Service
                </a>
            </li>
            <li>
                <a href="#" onclick ="displayContainer('customer-table')">
                    Customer
                </a>
            </li>
            <li>
                <a href="#" onclick ="displayContainer('user-table')">
                    User
                </a>
            </li>
            <li>
                <a href="">
                    Settings
                </a>
            </li>
        </ul>
    </div>
<!-- end of nav bar -->
    <!-- usertable -->
    <table cellspacing="5" cellpadding="5" border  = "1" id = "user-table">
            <tr>
            <th>User Name</th>
            <th>User ID</th>
            <th>Email Address</th>
            <th>Address</th>
            <th>Action</th>
            </tr>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "kuys";

                $connection = new mysqli($servername,$username,$password,$database);

                // check connection
                if($connection->connect_error){
                    die("Connection : ERROR " . $connection->connect_error);
                }

                //read data
                $sql = "SELECT * FROM users";
                $result = $connection->query($sql);

                if(!$result){
                    die("INVALID query " . $connection->error);
                }

                
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[addr]</td>
                        <td>
                            <a href = 'edit.php?id=$row[id]'><button>EDIT</button></a>
                            <a href = 'delete.php?id=$row[id]'><button>DELETE</button></a>
                        </td>
                </tr>
                    ";
                }
            ?>

        </table> 

        <!-- end of user table -->

        <!-- customer table -->
        <table cellspacing="5" cellpadding="5" border  = "1" id = "customer-table">
            <tr>
            <th> Name</th>
            <th>Customer ID</th>
            <th>Customer Address</th>
            <th>Email Address</th>
            <th>Action</th>
            </tr>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "kuys";

                $connection = new mysqli($servername,$username,$password,$database);

                // check connection
                if($connection->connect_error){
                    die("Connection : ERROR " . $connection->connect_error);
                }

                //read data
                $sql = "SELECT * FROM customers";
                $result = $connection->query($sql);

                if(!$result){
                    die("INVALID query " . $connection->error);
                }

                
                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[customerID]</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[addr]</td>
                        <td>
                            <a href = 'edit.php?id=$row[customerID]'><button>EDIT</button></a>
                            <a href = 'delete.php?id=$row[customerID]'><button>DELETE</button></a>
                        </td>
                </tr>
                    ";
                }
            ?>
        </table>
        <script src="script.js"></script>

        <!-- end of customer table -->
</body>

</html>