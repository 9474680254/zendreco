




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Student Photo and Guardian Signature</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }

        .form-container {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f9f9f9;
            cursor: pointer;
        }

        .preview-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .preview-box {
            width: 150px;
            height: 150px;
            border: 1px solid #ccc;
            border-radius: 4px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            color: #666;
            background-color: #f0f0f0;
            overflow: hidden;
        }

        .preview-box img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }

        .button-container {
            text-align: center;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Upload Student Photo and Guardian Signature</h1>
        <form id="uploadForm"  method="post" enctype="multipart/form-data">
            <!-- Student Photo Upload -->
            <div class="form-group">
                <label for="student-photo">Upload Student Photo:</label>
                <input type="file" id="student-photo" name="student-photo" accept="image/*">
            </div>

            <!-- Guardian Signature Upload -->
            <div class="form-group">
                <label for="guardian-signature">Upload Guardian Signature:</label>
                <input type="file" id="guardian-signature" name="guardian-signature" accept="image/*" >
            </div>

            <!-- Preview Section -->
            <div class="preview-container">
                <div class="preview-box" id="photo-preview">
                    <span>Photo Preview</span>
                </div>
                <div class="preview-box" id="signature-preview">
                    <span>Signature Preview</span>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="button-container">
                <button type="submit">Upload</button>
            </div>
        </form>
    </div>

  
</body>
</html>
