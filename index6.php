<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body background="image/pexels-hngstrm-1939485.jpg" style="background-color:beige; ">
<?php include_once ("templates/nav.php"); ?>
<?php include_once ("templates/header.php"); ?>

    <div class="row:after">

        <div class="content"> 
            <h2>Products and services offered at Peace Construction LTD</h2>
            <table>
                <tr>
                    <th>Service/Product</th>
                    <th>Description</th>
                    <th>Charges</th>
                </tr>
                
                <tr>
                    <td>Commercial Construction</td>
                    <td>Construction of office spaces, retail centers, etc</td>
                    <td>Variable, based on project size</td>
                </tr>
                <tr>
                    <td>Residential Construction</td>
                    <td>Custom homes, multi-family dwellings, renovations</td>
                    <td>Variable, based on project scope</td>
                </tr>
                <tr>
                    <td>Renovations & Remodeling</td>
                    <td>Transforming existing spaces</td>
                    <td>Variable, based on project scope</td>
                </tr>
                <tr>
                    <td>Green Building Solutions</td>
                    <td>Sustainable construction practices</td>
                    <td>Variable, based on project scope</td>
                </tr>
                
                <tr>
                    <td>Consultation Services</td>
                    <td>Expert advice and guidance</td>
                    <td>Hourly rate or fixed fee</td>
                </tr>
                <tr>
                    <td>Project Management</td>
                    <td>Overseeing project execution</td>
                    <td>Percentage of project cost</td>
                </tr>
                
                <tr>
                    <td>Building Materials</td>
                    <td>Lumber, concrete, steel, roofing materials, etc.</td>
                    <td>Variable, depending on material type and quantity</td>
                </tr>
                <tr>
                    <td>Construction Equipment</td>
                    <td>Machinery and equipment for rent or purchase</td>
                    <td>Variable, depending on equipment type and duration</td>
                </tr>
            </table>
        </div>

        <?php include_once ("templates/sidebar.php"); ?>
    </div>
    <div class="footer" style="margin-block-start: 550px;">
        copywrite CONSTRUCTION CO 2024 &copy; All rights reserved
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>