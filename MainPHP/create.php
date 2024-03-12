<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
    <form action="store.php" method="POST">
        <div class="mb-3">
            <label for="prodName" class="form-label">Client Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="prodName">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">Sex</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="sex" name="color">
        </div>
        <div class="mb-3">
            <label for="prodName" class="form-label">Pay</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Pay" name="price">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Religion</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Religion" name="brand">
        </div>
        <div class="mb-3">
            <input type="submit" value="submit" class="btn btn-warning">
        </div>
    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>