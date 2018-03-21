<?php
include "header.php";
$id = !empty($_GET["customerID"]) ? $_GET["customerID"] : "";
$name = !empty($_GET["customerName"]) ? $_GET["customerName"] : "";
$licenseID = !empty($_GET["licenseID"]) ? $_GET["licenseID"] : "";
$nic = !empty($_GET["nic"]) ? $_GET["nic"] : "";
$dob = !empty($_GET["dob"]) ? $_GET["dob"] : "";
$address = !empty($_GET["customerAddress"]) ? $_GET["customerAddress"] : "";
$tp = !empty($_GET["tp"]) ? $_GET["tp"] : "";
$email = !empty($_GET["email"]) ? $_GET["email"] : "";
?>
<div id="new-customer">
    <form action="save-customer.php?action=update" method="POST" enctype="application/x-www-form-urlencoded">

        <div class="row">
            <div class="col-xs-2">
                <label class="lblCus" for="txtCustomerID">Customer ID</label>
            </div>
            <div class="col-xs-9">
                <input type="text" name="customerID" class="form-control" id="txtCustomerID" placeholder="Enter Customer ID (Eg. C001)"
                       value="<?= $id ?>">
            </div>
        </div><br>
        <div class="row">
            <div class="col-xs-2">
                <label class="lblCus" for="txtCustomerName">Customer Name</label>
            </div>
            <div class="col-xs-9">
                <input type="text" name="customerName" class="form-control" id="txtCustomerName" placeholder="Enter Customer Name"
                       value="<?= $name ?>">
            </div>
        </div><br>
        <div class="row">
            <div class="col-xs-2">
                <label class="lblCus" for="txtCustomerID">License ID</label>
            </div>
            <div class="col-xs-9">
                <input type="text" name="licenseID" class="form-control" id="txtLicenseID" placeholder="Enter Your License ID"
                       value="<?= $licenseID ?>">
            </div>
        </div><br>
        <div class="row">
            <div class="col-xs-2">
                <label class="lblCus" for="txtNIC">NIC</label>
            </div>
            <div class="col-xs-9">
                <input type="text" name="nic" class="form-control" id="txtNIC" placeholder="Enter Your NIC"
                       value="<?= $nic ?>">
            </div>
        </div><br>
        <div class="row">
            <div class="col-xs-2">
                <label class="lblCus" for="txtDOB">Date of Birth</label>

            </div>
            <div class="col-xs-9">
                <input type="text" name="dob" class="form-control" id="txtDOB" placeholder="Enter Your Date of Birth"
                       value="<?= $dob ?>">
            </div>
        </div><br>
        <div class="row">
            <div class="col-xs-2">
                <label class="lblCus" for="txtCustomerAddress">Customer Address</label>

            </div>
            <div class="col-xs-9">
                <textarea name="customerAddress" class="form-control" id="txtCustomerAddress"
                          placeholder="Enter Customer Address"><?= $address ?></textarea>
            </div>
        </div><br>
        <div class="row">
            <div class="col-xs-2">
                <label class="lblCus" for="txtTp">Telephone Number</label>
            </div>
            <div class="col-xs-9">
                <input type="text" name="tp" class="form-control" id="txtTp" placeholder="Enter Your Telephone Number"
                       value="<?= $tp ?>">
            </div>
        </div><br>
        <div class="row">
            <div class="col-xs-2">
                <label class="lblCus" for="txtEmail">E-mail</label>
            </div>
            <div class="col-xs-9">
                <input type="text" name="email" class="form-control" id="txtEmail" placeholder="Enter Your E-mail"
                       value="<?= $email ?>">
            </div>
        </div>

        <!--        <div class="form-group">-->
<!--            <label class="lblCus" for="txtCustomerID">Customer ID</label>-->
<!--            <input type="text" name="customerID" class="form-control" id="txtCustomerID" placeholder="Enter Customer ID (Eg. C001)"-->
<!--                   value="--><?//= $id ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="lblCus" for="txtCustomerName">Customer Name</label>-->
<!--            <input type="text" name="customerName" class="form-control" id="txtCustomerName" placeholder="Enter Customer Name"-->
<!--                   value="--><?//= $name ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="lblCus" for="txtCustomerID">License ID</label>-->
<!--            <input type="text" name="licenseID" class="form-control" id="txtLicenseID" placeholder="Enter Your License ID"-->
<!--                   value="--><?//= $licenseID ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="lblCus" for="txtNIC">NIC</label>-->
<!--            <input type="text" name="nic" class="form-control" id="txtNIC" placeholder="Enter Your NIC"-->
<!--                   value="--><?//= $nic ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="lblCus" for="txtDOB">Date of Birth</label>-->
<!--            <input type="text" name="dob" class="form-control" id="txtDOB" placeholder="Enter Your Date of Birth"-->
<!--                   value="--><?//= $dob ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="lblCus" for="txtCustomerAddress">Customer Address</label>-->
<!--            <textarea name="customerAddress" class="form-control" id="txtCustomerAddress"-->
<!--                      placeholder="Enter Customer Address">--><?//= $address ?><!--</textarea>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="lblCus" for="txtTp">Telephone Number</label>-->
<!--            <input type="text" name="tp" class="form-control" id="txtTp" placeholder="Enter Your Telephone Number"-->
<!--                   value="--><?//= $tp ?><!--">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label class="lblCus" for="txtEmail">E-mail</label>-->
<!--            <input type="text" name="email" class="form-control" id="txtEmail" placeholder="Enter Your E-mail"-->
<!--                   value="--><?//= $email ?><!--">-->
<!--        </div>-->
        <button type="button" id="btnUpdateCustomer" class="btn btn-primary">Update Customer</button>
    </form>
</div>
<?php
include "footer.php"
?>
