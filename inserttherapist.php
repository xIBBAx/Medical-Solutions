<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap">
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            background-image: url('assets/img/background1.png');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: rgba(255, 255, 255, 0.8); /* Added transparency to the form */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-size: 24px;
            margin-bottom: 10px;
            display: block;
        }
        input[type="file"] {
            padding: 15px;
            font-size: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 70%; /* Adjusted width to 70% */
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 25px;
            font-size: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="patient.php">
            <img src="assets/img/logooo og.png" alt="Logo" style="width: 100px; height: 100px; border-radius: 50%;">
        </a>
    </div>
    <label for="file">Choose file to upload:</label>
    <input type="file" id="file" name="fileToUpload">
    <input type="submit" value="Upload File">
</form>

</body>
</html>
