<?php

$myfile = fopen("data.txt", "r") or die("Unable to open file!");
$data = fgets($myfile);
fclose($myfile);

$data = explode('#', $data);

$barcode1 = explode('*', $data[0]);
$barcode2 = explode('*', $data[1]);

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Product Barcode Generator</title>

    <link rel="icon" href="images/barcode.png" type="image/gif" sizes="16x16">

    <style>
    .printBox {
        width: 50%;
        height: 25%;
        border: 1px solid #000000;
        padding: 15px;
    }

    .p-0 {
        padding: 0 !important;
        margin: 0 !important;
    }

    .table td,
    .table th {
        padding: 2px !important;
    }
    </style>
</head>

<body>
    <div class="container" id="inputField">
        <form action="print.php" method="post">
            <div class="row">
                <div class="col-6">
                    <div class="col-12 text-center" style="margin-top: 10%;">
                        <h4>Product Barcode Generator 1</h4>
                        <hr>
                    </div>
                    <div class="col-12 form-group">
                        <label>Artice No</label>
                        <input class="form-control" type="text" id="article" name="article1"
                            placeholder="Enter article number" value="<?php echo $barcode1[0] ?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label>Colour Code</label>
                        <input class="form-control" type="text" id="colour" name="colour1"
                            placeholder="Enter colour code" value="<?php echo $barcode1[1] ?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label>Quantity (Meter)</label>
                        <input class="form-control" type="text" id="quantity" name="quantity1"
                            placeholder="Enter quantity" value="<?php echo $barcode1[2] ?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label>Roll No</label>
                        <input class="form-control" type="text" id="roll" name="roll1"
                            value="<?php echo $barcode1[3] ?>" placeholder="Enter roll no" required>
                    </div>
                    <div class="col-12 form-group">
                        <label>Lot No</label>
                        <input class="form-control" type="text" id="lot" name="lot1" value="<?php echo $barcode1[4] ?>"
                            placeholder="Enter lot no" required>
                    </div>

                </div>
                <div class="col-6">
                    <div class="col-12 text-center" style="margin-top: 10%;">
                        <h4>Product Barcode Generator 2</h4>
                        <hr>
                    </div>
                    <div class="col-12 form-group">
                        <label>Artice No</label>
                        <input class="form-control" type="text" id="article2" name="article2"
                            placeholder="Enter article number" value="<?php echo $barcode2[0] ?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label>Colour Code</label>
                        <input class="form-control" type="text" id="colour2" name="colour2"
                            placeholder="Enter colour code" value="<?php echo $barcode2[1] ?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label>Quantity (Meter)</label>
                        <input class="form-control" type="text" id="quantity2" name="quantity2"
                            placeholder="Enter quantity" value="<?php echo $barcode2[2] ?>" required>
                    </div>
                    <div class="col-12 form-group">
                        <label>Roll No</label>
                        <input class="form-control" type="text" id="roll2" name="roll2"
                            value="<?php echo $barcode2[3] ?>" placeholder="Enter roll no" required>
                    </div>
                    <div class="col-12 form-group">
                        <label>Lot No</label>
                        <input class="form-control" type="text" id="lot2" name="lot2" value="<?php echo $barcode2[4] ?>"
                            placeholder="Enter lot no" required>
                    </div>
                </div>
                <div class="col-12" style="margin: 15px;">
                    <button type="submit" class="btn btn-primary">Generate
                        Barcode</button>
                    <button type="button" class="btn btn-danger" onclick="location.reload()">Clear All</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>