<?php
/**
 * Created by IntelliJ IDEA.
 * User: ranjith-suranga
 * Date: 10/17/17
 * Time: 2:45 PM
 */
$connection = mysqli_connect("localhost", "root", "7785", "CarRental", "3306");

if (!$connection){
    $message = mysqli_connect_error();
    mysqli_close($connection);
    echo "<script>window.location.replace('message.php?title=Message&subtitle=Error&message={$message}'); </script>";
}else{

    $action = $_GET["action"];

    $id = $_POST["customerID"];
    $name = $_POST["customerName"];
    $licenseID = $_POST["licenseID"];
    $nic = $_POST["nic"];
    $dob = $_POST["dob"];
    $address = $_POST["customerAddress"];
    $tp = $_POST["tp"];
    $email = $_POST["email"];

    if ($action === "save"){
        $result = mysqli_query($connection, "INSERT INTO Customer VALUES ('$id','$name','$licenseID','$nic','$dob','$address','$tp','$email')");

        if (mysqli_affected_rows($connection)> 0){
            mysqli_close($connection);
            $message = "Customer has been successfully added";
            echo "<script>window.location.replace('message.php?title=Message&subtitle=Success&message={$message}'); </script>";
        }else{
            mysqli_close($connection);
            $message = "Failed to add the customer";
            echo "<script>window.location.replace('message.php?title=Message&subtitle=Error&message={$message}'); </script>";
        }
    }else if ($action === "update"){

        $result = mysqli_query($connection, "UPDATE Customer SET Name='$name', LicenseID ='$licenseID', NIC='$nic', DOB='$dob', address='$address', NIC='$tp', DOB='$email' WHERE CID='$id'");

        if (mysqli_affected_rows($connection)> 0){
            mysqli_close($connection);
            $message = "Customer has been successfully updated";
            echo "<script>window.location.replace('message.php?title=Message&subtitle=Success&message={$message}'); </script>";
        }else{
            $message = "Failed to update the customer";
            mysqli_close($connection);
            echo "<script>window.location.replace('message.php?title=Message&subtitle=Error&message={$message}'); </script>";
        }

    }

    mysqli_close($connection);
}