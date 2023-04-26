<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


	<div class="container">
<div class="jumbotron jumbotron text-center mt-5">
    <h1 class="display-4">Page 2</h1>
    <p class="lead">Enter Other Details</p>
</div>

<div class="container-fluid pb-5">
    <form method="POST" action="success.php">
        <div class="form-group mb-3">
            <label for="floatingInput1">Location</label>
            <input type="text" class="form-control" id="floatingInput1" placeholder="Location" name="location" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="floatingInput2">Age</label>
            <input type="number" class="form-control" id="floatingInput2" min="1" max="150" placeholder="Age" name="age" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="floatingInput3">University</label>
            <input type="text" class="form-control" id="floatingInput3" placeholder="University" name="university" required>
        </div>
        
		<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
		<input type="hidden" name="phone" value="<?php echo $_POST['phone']; ?>">
		<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">

        <input type="submit" class="btn btn-primary btn-block mt-4" value="Submit"></input>

    </form>
</div></div>

</body>
</html>