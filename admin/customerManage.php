<?php
include "header.php";
$connection = mysqli_connect("localhost","root","7785","CarRental","3306");
if (!$connection){
    echo mysqli_connect_error();
}else{
    $resultset = mysqli_query($connection, "SELECT * FROM Customer");
    ?>
    <div class="col-md-12 offset-md-2">
    <div id="mc-first-row">
        <span class="pull-right">
            <a href="customerNew.php?title=Manage Customers&subtitle=New Customer" class="btn btn-success"><i
                        class="fa fa-plus" aria-hidden="true"></i> New Customer</a>
            <a id="btnDeleteCustomers" href="#" class="btn btn-danger"><i class="fa fa-times" style="margin-left:10px" aria-hidden="true"></i> Delete</a>
            <span>Total Number of Customers : <?= mysqli_num_rows($resultset) ?></span>
        </span>
    </div>
    <br>
    <br>
    <table id="tblCustomers" class="table table-bordered table-hover" data-show-header="true" data-pagination="true">
    <thead>
    <tr>
        <th></th>
        <th>Customer ID</th>
        <th>Customer Name</th>
        <th>Customer License ID</th>
        <th>Customer NIC</th>
        <th>Customer B.Date</th>
        <th>Customer Address</th>
        <th>Customer TP</th>
        <th>Customer E-mail</th>
        <th></th>
    </tr>
    </thead>
    <tbody>

    <?php
    while ($rowData = mysqli_fetch_row($resultset)) {
        ?>

        <tr>
            <td><input type="checkbox" value="<?= $rowData[0] ?>"></td>
            <td><?= $rowData[0] ?></td>
            <td><?= $rowData[1] ?></td>
            <td><?= $rowData[2] ?></td>
            <td><?= $rowData[3] ?></td>
            <td><?= $rowData[4] ?></td>
            <td><?= $rowData[5] ?></td>
            <td><?= $rowData[6] ?></td>
            <td><?= $rowData[7] ?></td>
            <td><a href="customerUpdate.php?title=Manage Customers&subtitle=Update Customer&customerID=<?=$rowData[0] ?>&customerName=<?= $rowData[1] ?>&licenseID=<?= $rowData[2] ?>&nic=<?= $rowData[3] ?>&dob=<?= $rowData[4] ?>&customerAddress=<?=$rowData[5] ?>&tp=<?= $rowData[6] ?>&email=<?= $rowData[7] ?>"><i
                            class="fa fa-pencil" aria-hidden="true"></i></a></td>
        </tr>

        <?php
    }
    mysqli_free_result($resultset);
    mysqli_close($connection);
}
?>

    <div class="custom-pagination pull-right">
        <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul>
    </div>
    </tbody>
    </table>
    </div>
<?php
include "footer.php"
?>