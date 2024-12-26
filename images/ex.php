<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }

        @media print {
            body {
                margin: 0;
            }

            #print-image {
                max-width: 100%;
                height: auto;
                display: block;
                margin: 0 auto;
            }

            button {
                display: none;  /* Hide the print button during printing */
            }
        }
    </style>
</head>
<body>
    <h1>Print the Image</h1>

    <?php
    // Display the image path (fetch from database or static file)
    $imagePath = 'images/DSC2005.jpg';  // Replace with your actual image path
    echo '<img src="' . $imagePath . '" alt="Image" id="print-image">';
    ?>

    <button onclick="window.print()">Print Image</button>
</body>
</html>
