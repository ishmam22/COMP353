<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/contract.js"></script>
    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
</head>

<?php include('head.php'); ?>
<body>
<div class="container">
    <div class="row main">
        <div class="main-login main-center">
            <h5 style="text-align: center; font-weight: bold; font-size: large">Enter contract information</h5>
            <form class="" method="post" action="../api/contracts/createContract.php">
                <div class="form-group">
                    <label>Select a Client</label>
                    <select class="form-control" id="company" name="company">
                        <option value="" disabled selected>Select a company</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Contract Category</label>
                    <div >
                        <div class="input-group">
                            <select class="form-control" id="category" name="category">
                                <option value="" disabled selected>Select a category</option>
                                <option>Premium</option>
                                <option>Gold</option>
                                <option>Diamond</option>
                                <option>Silver</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="number" class="cols-sm-2 control-label">Type of service</label>
                    <div class="cols-sm-10">
                        <div >
                            <div class="input-group">
                                <select class="form-control" id="serviceType" name="serviceType">
                                    <option value="" disabled selected>Select a service type</option>
                                    <option>Cloud</option>
                                    <option>On-premises</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">ACV</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="number" class="form-control" name="acv" id="acv"  placeholder="Enter ACV" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="FN" class="cols-sm-2 control-label">Initial Amount</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"></span>
                            <input type="text" class="form-control" name="initialAmount" id="initialAmount"  placeholder="Enter initial Amount" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Select a Manager</label>
                    <select class="form-control" id="manager" name="manager">
                        <option value="" disabled selected>Select a Manager</option>
                    </select>
                </div>
                <div class="form-group ">
                    <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="Create Contract">
                </div>

            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>