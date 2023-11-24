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
            <th>Action</th>
            </tr>
            
            <tr>
                <td>nasuu</td>
                <td>01</td>
                <td>hahatdog@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>

            <tr>
                <td>lasika</td>
                <td>20</td>
                <td>elastei@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>

            <tr>
                <td>spur</td>
                <td>04</td>
                <td>mywoas@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>

            <tr>
                <td>jaud</td>
                <td>03</td>
                <td>asdahcu@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>

            <tr>
                <td>hehe</td>
                <td>09</td>
                <td>haheheh@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>
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
            
            <tr>
                <td>Kuys</td>
                <td>02</td>
                <td>brgy.69 malolos bulacan</td>
                <td>asdasdsad@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>

            <tr>
                <td>Kuys</td>
                <td>02</td>
                <td>brgy.69 malolos bulacan</td>
                <td>asdasdsad@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>

            <tr>
                <td>Kuys</td>
                <td>02</td>
                <td>brgy.69 malolos bulacan</td>
                <td>asdasdsad@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>

            <tr>
                <td>Kuys</td>
                <td>02</td>
                <td>brgy.69 malolos bulacan</td>
                <td>asdasdsad@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>

            <tr>
                <td>Kuys</td>
                <td>02</td>
                <td>brgy.69 malolos bulacan</td>
                <td>asdasdsad@gmail.com</td>
                <td>
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                    <input type="image" src="" alt="logo">
                </td>
            </tr>
        </table>
        <script src="script.js"></script>

        <!-- end of customer table -->
</body>

</html>