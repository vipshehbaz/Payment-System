<?php include ('conf.php');
$showSuccess = false;
$showNotSuccess = false;
$showError = false;
$showAddSuccess = false;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    $query = "SELECT * FROM registration";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    $row = mysqli_fetch_array($res);
        $id=$row["0"];

    if (isset($_POST["withdraw"])) {
        $balance = $_POST["balance"];

        if($balance == 500 || $balance == 1000 || $balance == 1500 || $balance == 2000 || 
        $balance == 2500 || $balance == 3000 || $balance == 3500 || $balance == 4000 || 
        $balance == 4500 || $balance == 5000){
            $query1 = "UPDATE registration SET balance = balance - $balance WHERE id='$id'";
            $result = mysqli_query($con, $query1) or die(mysqli_error($con));
            if ($result) {
                $showSuccess = true;
            } else {
                $showNotSuccess = true;
            }
            
        }else{
            $showError = true;
        }
    }

    if (isset($_POST["add"])) {
        $balance = $_POST["addmoney"];

        if($balance == 500 || $balance == 1000 || $balance == 1500 || $balance == 2000 || 
        $balance == 2500 || $balance == 3000 || $balance == 3500 || $balance == 4000 || 
        $balance == 4500 || $balance == 5000){
            $query2 = "UPDATE registration SET balance = balance + $balance WHERE id='$id'";
            $result = mysqli_query($con, $query2) or die(mysqli_error($con));
            if ($result) {
                $showAddSuccess = true;
            } else {
                // $showNotSuccess = true;
            }
            
        }else{
            $showError = true;
        }
    }
    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pytm - Made by M.Shehbaz Khan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hover:hover {
            font-size: 20px;
            transition-duration: 0.1s;
            transition-timing-function: ease-in;
            transition-property: all;

            .text-primary {
                color: #914424 !important;
            }

            .transition {
                transition-duration: 0.5s;
                transition-property: all;
                transition-timing-function: ease-in-out;
            }

        }
    </style>
</head>

<body>
    <div class="sidebar pe-4 pb-3">
        <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>PYTM</h3>
            </a>
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                </div>
                <div class="ms-3">
                    <span class="fs-2 text-capitalize"><?php echo $_SESSION['username']; ?></span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="home.php" class="nav-item hover nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Add
                    & Draw</a>
            </div>

        </nav>
    </div>
    <div class="content">
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-3 py-2">
            <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
            </a>
            <a href="#" class="sidebar-toggler flex-shrink-0">
                <i class="fa fa-bars"></i>
            </a>
            <span class=""><b class="ms-2">Account Number : </b><?php echo $_SESSION['accnum']; ?> please copy this
                number next
                time you need this number for login.</span>
            <div class="navbar-nav align-items-center ms-auto">

                <a href="logout.php" class="dropdown-item">Log Out</a>
            </div>
        </nav>
        <section>
        <?php
                                if($showSuccess == true){
                                ?>
                                    <div class="bg-success ps-1"><p class="text-light text-center fs-3">
                                        Withdraw Successful
                                    </p></div>
                                <?php
                                }
                                ?>

<?php
                                if($showAddSuccess == true){
                                ?>
                                    <div class="bg-success ps-1"><p class="text-light text-center fs-3">
                                        Credit Successful
                                    </p></div>
                                <?php
                                }
                                ?>

<?php
                                if($showError == true){
                                ?>
                                    <div class="bg-danger ps-1"><p class="text-light text-center fs-3">
                                        Please enter 500, 1000 and 1500 like numbers!
                                    </p></div>
                                <?php
                                }
                                ?>  
            <div class=" bg-dark p-2 ">
                <p class="text-light text-center fs-4">Your Balance</p>
                <p class="text-light text-center fs-3" id="balance"><?php echo $row['balance']; ?></p>
            </div>
            <div class="d-flex justify-content-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mt-2 mx-2" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    Add Money
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Money</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form method="post">
                            <div class="modal-body">
                                    <label for="" class="lh-2">Please Enter Number <b>(Min : 500 & Max : 5000)</b>
                                    </label>
                                    <input class="form-control" type="number" name="addmoney"
                                        placeholder="eg : 500, 1000, 1500">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary" value="Save changes" name="add">
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mt-2 mx-2" data-bs-toggle="modal"
                    data-bs-target="#exampleModal1">
                    Withdraw
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Withdraw</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <form method="post">
                            <div class="modal-body">
                                    <label for="" class="lh-2">Please Enter Number <b>(Min : 500 & Max : 5000)</b>
                                    </label>
                                    <input class="form-control" type="number" name="balance"
                                        placeholder="eg : 500, 1000, 1500">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="withdraw" class="btn btn-primary" value="Save changes">
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="script/main.js"></script>
        <script>
            $("#balance").load("home.php #balance");
            var $balance = $("#balance");
setInterval(function () {
    $scores.load("home.php #balance");
}, 30000);
        </script>
</body>

</html>