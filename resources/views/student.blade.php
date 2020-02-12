<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<form>
		<div class="container text-warning">
    	<div>
    		<h1 style="text-align: center">Student Information</h1>
    	</div>
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <form action="" method="post">
                <div class="form-group">
                    <label>Student Name:</label>
                    <input type="text" class="form-control name" name="name">
                </div>
                <div class="form-group">
                    <label>Roll:</label>
                    <input type="number" class="form-control roll" name="roll">
                </div>
                <div class="form-group">
                    <label>Father Name:</label>
                    <input type="text" class="form-control father_name" name="father_name">
                </div>
                <div class="form-group">
                    <label>Mother Name:</label>
                    <input type="text" class="form-control mother_name" name="mother_name">
                </div>
                <div class="form-group">
                    <label>Phone Number:</label>
                    <input type="number" class="form-control phone_number" name="phone_number">
                </div>
                <div class="form-group">
                    <label>Institute:</label>
                    <select class="form-control institute" name="institute">
                    	<option value="Feni Computer Institute">Feni Computer Institute</option>
                    	<option value="Feni polytechnic Institute">Feni polytechnic Institute</option>
                    	<option value="ICST">ICST</option>
                    </select>
                </div>
      
                    <button class="btn btn-warning btn-sm submit" type="button" name="submit" class="btn btn-default">Submit</button>
                    <button class="btn btn-info btn-sm " type="reset" class="btn btn-reset">Reset</button>
            </form>
                </div>
               	<div class="col-sm-2"></div>
            </div>
	</form>
	
	
</body>
</html>