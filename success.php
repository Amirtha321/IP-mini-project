<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>success</title>
</head>

<body class="bg-primary">
    <div class="container p-5 d-flex aligns-items-center justify-content-center rounded-3">
        <div class="card text-center shadow-lg p-5" style="width: 28rem;height: 18rem;">
            <div class="card-body">
                <h1 class="card-title ">Order Successful</h1>
                <h5 class="card-text p-3">Your booking id: <?php echo(rand(10000,100000));?>  </h5>
                <a href="home.php" class="btn btn-primary">Go to Home</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>