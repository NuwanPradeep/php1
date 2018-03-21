<?php
include "header.php";
?>
    <form>
        <div class="row">
            <div class="col-md-2 mb-3">
                <label for="validationServer01">Order ID</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="Order ID" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationServer02" style="color: #0ea432">Description</label>
                <select class="form-control is-valid" required>
                    <option value="">Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-1 mb-3">
                <label for="validationServer03">Item Code</label>
                <input type="text" class="form-control is-valid" id="validationServer03" placeholder="ItemCode" required>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationServer04" style="color: #0ea432">Batch ID</label>
                <select class="form-control is-valid" required>
                    <option value="">Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mb-3">
                <label for="validationServer05">Date</label>
                <input type="date" class="form-control is-valid" id="validationServer05" placeholder="Date" required>
            </div>
            <div class="col-md-1 mb-3">
                <label for="validationServer06">QTY</label>
                <input type="number" class="form-control is-valid" id="validationServer06" placeholder="QTY" required>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationServer07">Selling price</label>
                <input type="number" class="form-control is-valid" id="validationServer07" placeholder="Selling Price" required>
            </div>
            <div class="col-md-2 mb-3">
                <label for="validationServer08">QTY on Hand</label>
                <input type="text" class="form-control is-valid" id="validationServer08" placeholder="QTY on Hand" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 mb-6">
                <button class="btn btn-primary" type="submit" style="width: 100px">ADD</button>
            </div>
            <div class="col-md-1 mb-6">
                <button class="btn btn-primary" type="submit" style="width: 100px">REMOVE</button>
            </div>
        </div>

    </form>
    <div class="row">
        <div class="col-md-1 mb-6">
            <label></label>
        </div>

    </div>
    <form>
        <div class="row">
            <div class="col-md-8 mb-9">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Item Code</th>
                        <th scope="col">Batch Id</th>
                        <th scope="col">Description</th>
                        <th scope="col">QTY</th>
                        <th scope="col">Selling Price</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-2 mb-3">
            <label for="validationServer09">Amount</label>
            <input type="text" class="form-control is-valid" id="validationServer09" placeholder="Amount" required>
        </div>
        <div class="row">
            <div class="col-md-1 mb-6">
                <button class="btn btn-primary" type="submit" style="background-color: #0ea432 ; width: 150px">SUBMIT</button>
            </div>
        </div>
    </form>
<?php
include "footer.php"
?>