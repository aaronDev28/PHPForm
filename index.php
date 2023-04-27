<!DOCTYPE html>
<html lang="en">
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
    <h1 class="display-4">Page 1</h1>
    <p class="lead">Enter Personal Details</p>
</div>

<div class="container-fluid pb-5">
    <form method="POST" action="page2.php">
        <div class="form-group mb-3">
            <label for="floatingInput1">Name</label>
            <input type="text" class="form-control" id="floatingInput1" placeholder="Name" pattern="[a-zA-Z .\s]+" title="Only Alphabets, Whitespaces and Periods allowed!" name="name" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="floatingInput2">Phone</label>
            <input type="tel" class="form-control" id="floatingInput2" placeholder="Phone" pattern="[0-9]{10}" title="Phone number should be 10 digits!" name="phone" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="floatingInput3">Email</label>
            <input type="email" class="form-control" id="floatingInput3" placeholder="Email" name="email" required>
        </div>
        
        <input type="submit" class="btn btn-primary btn-block mt-4" value="Submit"></input>

    </form>
</div></div>

</body> 
</html>