<!DOCTYPE html>

<html>

<head>
    <title>Exercise III</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="col-md-6 col-md-offset-3">

        <h1 class="text-center">My Products</h1>

        <div class="col-md-4">
            <h3 class="text-center">Product I</h3>
            <form method="post">
                <input type="hidden" name="id" value="1">
                <input type="hidden" name="name" value="Product I">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="price" value="32.99">
                <button class="btn btn-success btn-lg btn-block" name="add_to_cart">$ 32.99</button>
            </form>
        </div>

        <div class="col-md-4">
            <h3 class="text-center">Product II</h3>
            <form method="post">
                <input type="hidden" name="id" value="2">
                <input type="hidden" name="name" value="Product II">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="price" value="13.99">
                <button class="btn btn-warning btn-lg btn-block" name="add_to_cart">$ 13.99</button>
            </form>
        </div>

        <div class="col-md-4">
            <h3 class="text-center">Product III</h3>
            <form method="post">
                <input type="hidden" name="id" value="3">
                <input type="hidden" name="name" value="Product III">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="price" value="87.99">
                <button class="btn btn-success btn-lg btn-block" name="add_to_cart">$ 87.99</button>
            </form>
        </div>
    </div>
</body>

</html>