<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $barcode1 = [$_POST['article1'], $_POST['colour1'], $_POST['quantity1'], $_POST['roll1'], $_POST['lot1']];
    $barcode2 = [$_POST['article2'], $_POST['colour2'], $_POST['quantity2'], $_POST['roll2'], $_POST['lot2']];

    $myfile = fopen("data.txt", "w") or die("Unable to open file!");
    $save = $_POST['article1'] . '*' . $_POST['colour1'] . '*' . $_POST['quantity1'] . '*' . $_POST['roll1'] . '*' . $_POST['lot1'] . '#' . $_POST['article2'] . '*' . $_POST['colour2'] . '*' . $_POST['quantity2'] . '*' . $_POST['roll2'] . '*' . $_POST['lot2'];
    fwrite($myfile, $save);
    fclose($myfile);
} else {
    header("Location: index.php");
    die();
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
    <div id="printReady">
        <div class="printBox" id="printBox">
            <table class="table table-bordered" style="margin-bottom: 0 !important;">
                <tr>
                    <td colspan="1">
                        <p class="text-uppercase p-0" style="font-size: 18px; font-weight: 900;">Article No</p>
                    </td>
                    <td colspan="3" id="articleIN"><?php echo $barcode1[0] ?></td>
                </tr>
                <tr>
                    <td colspan="1">
                        <p class="text-uppercase p-0" style="font-size: 18px; font-weight: 900;">Colour Code</p>
                    </td>
                    <td colspan="3" id="colourIN"><?php echo $barcode1[1] ?></td>
                </tr>
                <tr>
                    <td>
                        <p class="text-uppercase p-0" style="font-size: 18px; font-weight: 900;">Width</p>
                    </td>
                    <td>112 CM</td>
                    <td>
                        <p class="text-uppercase p-0" style="font-size: 18px; font-weight: 900;">Roll No</p>
                    </td>
                    <td id="rollIN"><?php echo $barcode1[3] ?></td>
                </tr>
                <tr>
                    <td>
                        <p class="text-uppercase p-0" style="font-size: 20px; font-weight: 900;">Quantity</p>
                    </td>
                    <td id="quantityIN"><?php echo $barcode1[2] ?></td>
                    <td>
                        <p class="text-uppercase p-0" style="font-size: 20px; font-weight: 900;">Lot</p>
                    </td>
                    <td id="lotIN"><?php echo $barcode1[4] ?></td>
                </tr>
            </table>
            <p class="text-uppercase p-0 text-center" style="font-size: 20px; font-weight: 900;">Silicon Resin Finish
            </p>
            <div class="text-center">
                <img src="" id="barcodeImg" alt="barcode">
                <!-- <canvas id="ean" height="60" style="margin-top: 5px;"></canvas> -->
            </div>
            <p class="text-uppercase p-0 text-center" style="font-size: 20px; font-weight: 800; color: blue;">JET BLUE
            </p>
        </div>

        <div class="printBox" id="printBox" style="margin-top: 20px;">
            <table class="table table-bordered" style="margin-bottom: 0 !important;">
                <tr>
                    <td colspan="1">
                        <p class="text-uppercase p-0" style="font-size: 18px; font-weight: 900;">Article No</p>
                    </td>
                    <td colspan="3" id="articleIN"><?php echo $barcode2[0] ?></td>
                </tr>
                <tr>
                    <td colspan="1">
                        <p class="text-uppercase p-0" style="font-size: 18px; font-weight: 900;">Colour Code</p>
                    </td>
                    <td colspan="3" id="colourIN"><?php echo $barcode2[1] ?></td>
                </tr>
                <tr>
                    <td>
                        <p class="text-uppercase p-0" style="font-size: 18px; font-weight: 900;">Width</p>
                    </td>
                    <td>112 CM</td>
                    <td>
                        <p class="text-uppercase p-0" style="font-size: 18px; font-weight: 900;">Roll No</p>
                    </td>
                    <td id="rollIN"><?php echo $barcode2[3] ?></td>
                </tr>
                <tr>
                    <td>
                        <p class="text-uppercase p-0" style="font-size: 20px; font-weight: 900;">Quantity</p>
                    </td>
                    <td id="quantityIN"><?php echo $barcode2[2] ?></td>
                    <td>
                        <p class="text-uppercase p-0" style="font-size: 20px; font-weight: 900;">Lot</p>
                    </td>
                    <td id="lotIN"><?php echo $barcode2[4] ?></td>
                </tr>
            </table>
            <p class="text-uppercase p-0 text-center" style="font-size: 20px; font-weight: 900;">Silicon Resin Finish
            </p>
            <div class="text-center">
                <img src="" id="barcodeImg2" alt="barcode">
                <!-- <canvas id="ean" height="60" style="margin-top: 5px;"></canvas> -->
            </div>
            <p class="text-uppercase p-0 text-center" style="font-size: 20px; font-weight: 800; color: blue;">JET BLUE
            </p>
        </div>

    </div>

    <div id="actions" style="margin: 20px;">
        <a href="index.php" class="btn btn-danger">New Barcode</a>
        <button type="button" class="btn btn-success" onclick="printDiv()">Print</button>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        var d = new Date();
        var barcode = "https://barcodes4.me/barcode/c39/" + d.getTime() + getRndInteger(10000, 99999) +
            ".jpg?IsTextDrawn=1&TextSize=16&resolution=1&height=100";
        $("#barcodeImg").attr('src', barcode);

        var barcode = "https://barcodes4.me/barcode/c39/" + d.getTime() + getRndInteger(10000, 99999) +
            ".jpg?IsTextDrawn=1&TextSize=16&resolution=1&height=100";
        $("#barcodeImg2").attr('src', barcode);
        // $("#ean").EAN13("20201019" + getRndInteger(10000, 99999));

        function getRndInteger(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }

        function printDiv() {
            $("#actions").attr('hidden', 'true');
            window.print();
            $("#actions").removeAttr('hidden');
        }
    </script>
</body>

</html>