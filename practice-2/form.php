<!DOCTYPE html>

<html>

<head>
    <title>Exercise II</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <div class="col-md-12">

            <h1 class="text-center">Calculator</h1>

            <!-- Form that sends data to capture.php -->

            <form role="form" method="post" action="capture.php">

                <!-- Number Field 1 -->

                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="number_1" required="required" name="number_1">
                    </div>
                </div>

                <!-- Method Select -->

                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control" name="method">
                            <option value="plus">Addition ( + )</option>
                            <option value="minus">Subtraction ( - )</option>
                            <option value="times">Multiplication ( * )</option>
                            <option value="through">Division ( / )</option>
                            <option value="rest">Modulo ( % )</option>
                            <option value="power">Exponential ( ** )</option>
                        </select>
                    </div>
                </div>

                <!-- Number Field 2 -->

                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="number_2" required="required" name="number_2">
                    </div>
                </div>

                <!-- Button to submit -->
                <div>&nbsp;</div>

                <button type="submit" class="btn btn-info btn-block">Calculate!</button>

            </form>

        </div>
    </div>
</body>

</html> 