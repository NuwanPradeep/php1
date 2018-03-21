<?php
include "header.php"
?>
<div id="new-customer">
    <form action="customerSave.php?action=save" method="POST" enctype="application/x-www-form-urlencoded">


        <div class="form-group">
            <label for="txtCustomerID">Customer ID</label>
            <input type="text" name="customerID" class="form-control" id="txtCustomerID" placeholder="Enter Customer ID (Eg. C001)">
        </div>
        <div class="form-group">
            <label for="txtCustomerName">Customer Name</label>
            <input type="text" name="customerName" class="form-control" id="txtCustomerName" placeholder="Enter Customer Name">
        </div>
        <div class="form-group">
            <label for="txtLicenseID">License ID</label>
            <input type="text" name="licenseID" class="form-control" id="txtLicenseID" placeholder="Enter Your License ID">
        </div>
        <div class="form-group">
            <label for="txtNIC">NIC</label>
            <input type="text" name="nic" class="form-control" id="txtNIC" placeholder="Enter Your NIC">
        </div>
        <div class="form-group">
            <label for="txtDOB">Date of Birth</label>
            <input type="text" name="dob" class="form-control" id="txtDOB" placeholder="Enter Your Date of Birth">
        </div>
        <div class="form-group">
            <label for="txtCustomerAddress">Customer Address</label>
            <textarea class="form-control" name="customerAddress" id="txtCustomerAddress" placeholder="Enter Customer Address"></textarea>
        </div>
        <div class="form-group">
            <label for="txtTp">Telephone Number</label>
            <input type="text" name="tp" class="form-control" id="txtTp" placeholder="Enter Your Telephone Number">
        </div>
        <div class="form-group">
            <label for="txtEmail">E-mail</label>
            <input type="text" name="email" class="form-control" id="txtEmail" placeholder="Enter Your E-mail">
        </div>
        <button type="button" id="btnSaveCustomer" class="btn btn-primary">Save Customer</button>
    </form>
</div>
<?php
include "footer.php"
?>
