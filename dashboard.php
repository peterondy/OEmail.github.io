<?php include 'header.php';?>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        
            $email       = $_POST['email'];
            $password    = $_POST['password'];
            $country     = $_POST['country'];
            $phonenumber = $_POST['phoneNumber'];
            if (empty($_POST['email']) || empty($_POST['password']) 
                    || empty($_POST['country']) || empty($_POST['phoneNumber'])) {
                
                    echo "<h4 class='errorMessage alert alert-danger' role='alert'>One Input Or More Are Empty</h4>";
            
            }else{
                 //check if the user exist in the database

                 $stmt = $con->prepare("INSERT INTO emails (adress_name, password, country, phone_number)
                 VALUES (:zemail, :zpassword, :zcountry, :zphonenumber");

                 $stmt->execute(array(
                    'zemail'          => $email,
                    'zpassword'       => $password,
                    'zcountry'        => $country,
                    'zphonenumber'    => $phonenumber,

                ));
                $count = $stmt->rowCount();


            }

    }
?>

<div class="float-start bg-danger col-md-2 mt-2">
    <ul>
        <li><a href="?eact=general" class="pt-3 fs">> General Informations</a></li>
    </ul>
</div>

<?php
    if(isset($_GET['eact'])){
        $eact = $_GET['eact'];
    }else{
        $eact = 'general';
    }


    if($eact == 'general'){


        echo '<div class="container float-end bg-danger col-md-10 mt-1 pb-4" style="margin: 0 !important;margin-top: 1rem !important;">
                    <h2>Welcome To General Page</h2>
                <form method="POST">
                    <h4 class="pt-2 pb-2">Email Adress</h4>
                    <input type="email" name="email" placeholder="Email" autocomplete="off">
                    <h4 class="pt-2 pb-2">Password</h4>
                    <input type="number" name="password" placeholder="Password" autocomplete="off">
                    <h4 class="pt-2 pb-2">Country Number</h4>
                    <input type="number" name="country" placeholder="Country" autocomplete="off">
                    <h4 class="pt-2 pb-2">Phone Number</h4>
                    <input type="number" name="phoneNumber" placeholder="Phone Number" autocomplete="off"><br/>
                    <input type="submit" class="btn btn-primary btn-block float-end p-4 pt-2 pb-2" value="Save"> 
                </form>
        </div>';
    }
?>
<?php include 'sidebar.php';?>
<?php include 'footer.php';?>