<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "kuys";

    //connection
    $connection = new mysqli($servername,$username,$password,$database);


    $name = "";
    $email = "";
    $addr = "";
    $errorMessage = "";
    $successMessage = "";

    if($_SERVER['REQUEST_METHOD'] == 'GET'){

        if(!isset($_GET["id"])){
            header("/ADMIN/admin.php");
            exit;
        }

        $id = $_GET["id"];

        //read the row of selected users from database table
        $sql = "SELECT * FROM customers WHERE customerID = $id";
        $result = $connection->query($sql);
        $row = $result->fetch_assoc();

        if(!$row){
            header("location/ADMIN/admin.php");
        }
        $name = $row ["name"];
        $email = $row ["email"];
        $addr = $row ["addr"];
    }
    else{
        //post method: update data
        $id = $_POST ["id"];
        $name = $_POST ["name"];
        $email = $_POST ["email"];
        $addr = $_POST ["addr"];

        do{
            if(empty($id) || empty($name) || empty($email) || empty($addr)){
                $errorMessage = "all fields are required!";
                break;
            }

            $sql = "UPDATE customers " .
                    "SET name = '$name', email = '$email', addr = '$addr'" .
                    "WHERE customerID = $id";

            $result = $connection->query($sql);

            if(!$result){
                $errorMessage = "Invalid Query: " . $connection->error;
                break;
            }
            $successMessage = "Customer Update successfully!";
            header("location: /ADMIN/admin.php");
            sleep(.5);
            exit;
            
        }while(false);

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User data</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

</head>
<body>
    <div class="container my-5">
        <h2>Edit Users</h2>
        <?php
            if(!empty($errorMessage)){
                echo "
                    <div class='alert alert-warning alert-dismissible fade show' role = 'alert'>
                        <strong>$errorMessage</strong>
                        <button type ='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                ";
            }
         ?>
        <form method = "post">
            <input type="hidden" name = "id" value = "<?php echo $id; ?>" >
            
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="addr" value="<?php echo $addr; ?>">
                </div>
            </div>

            <!-- submit -->

            <?php
                if(!empty($successMessage)){    
                    echo "
                        <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                            </div>
                        </div>
                    </div>
                    ";
                }
            ?>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="admin.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>