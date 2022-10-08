<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    <title>ContactUS</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
  

    


<div class="container my-4">     
<form class="row g-3">
    <div class="col-md-6">
        <label for="inputEmail4" class="form-label">First name</label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="John">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Last name</label>
        <input type="text" class="form-control" id="inputPassword4" placeholder="Doe">
    </div>
    <div class="col-12">
        <label for="inputAddress" class="form-label">Email</label>
        <input type="Email  " class="form-control" id="inputAddress" placeholder="user@gmail.com">
</div>
<div class="col-12">
<label for="inputAddress2" class="form-label">Address</label>
<input type="text" class="form-control" id="inputAddress2" placeholder="Pasrvnath plaza D-block third floor flat-no-3391">
</div>
<div class="col-md-6">
<label for="inputCity" class="form-label">City</label>
<input type="text" class="form-control" id="inputCity">
</div>
<div class="col-md-2">
  <label for="inputZip" class="form-label">Zip</label>
  <input type="text" class="form-control" id="inputZip">
</div>
<div class="col-12">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
            I am accepting with all the terms and conditions.
        </label>
    </div>
</div>
<div class="col-12 my-2">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>


    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>






<!-- <div class="container">
