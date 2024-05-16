<?php
session_start();
include_once '../assets/conn/dbconnect.php';
if (isset($_GET['appid'])) {
$appid=$_GET['appid'];
}
$res=mysqli_query($con, "SELECT a.*, b.*,c.* FROM patient a
JOIN appointment b
On a.icPatient = b.patientIc
JOIN doctorschedule c
On b.scheduleId=c.scheduleId
WHERE b.appId  =".$appid);

$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hospital Invoice</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap');

        body {
            font-family: 'Josefin Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('assets/img/background 6.png'); /* Change the URL to your background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            overflow-x: hidden; /* Hide horizontal scrollbar */
            overflow-y: auto; /* Enable vertical scrollbar if needed */
            transition: background-color 0.5s ease-in-out; /* Smooth background transition */
        }

        .invoice-box {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 20px rgba(0, 0, 0, .2); /* Added shadow effect */
            transition: background-color 0.5s ease-in-out; /* Smooth background transition */
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .invoice-box img {
            max-width: 100%;
            height: auto;
        }

        .top table td {
            padding: 5px;
            vertical-align: top;
        }

        .top table td.title {
            width: 50%;
            text-align: left;
        }

        .top table td.invoice-info {
            width: 50%;
            text-align: right;
        }

        .information table td {
            padding: 10px 0; /* Adjusted padding */
            width: 100%;
            text-align: left; /* Adjusted text alignment */
        }

        .item td {
            border-top: 1px solid #eee;
            padding: 10px;
        }

        .item:last-child td {
            border-bottom: none;
        }

        .heading td {
            font-weight: bold;
            padding: 10px;
            text-align: center;
        }

        .print {
            text-align: center;
            margin-top: 20px;
        }

        .print button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
            font-family: 'Josefin Sans', sans-serif; /* Change font-family */
            transition: background-color 0.3s ease-in-out; /* Added transition effect */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2); /* Added shadow effect */
        }

        .print button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
    </style>
</head>
<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td class="title">
                <img src="assets\img\logo.png" style="width:100%; max-width:300px;">
            </td>

            <td class="invoice-info">
                <strong>Invoice #:</strong> <?php echo $userRow['appId']; ?><br>
                <strong>Created:</strong> <?php echo date("d-m-Y"); ?><br>
            </td>
        </tr>

        <tr class="information">
            <td colspan="2">
                <table>
                    <tr>
                        <td>
                            <strong>Address:</strong><br>
                            <br>
                            <?php echo $userRow['patientAddress']; ?><br><br>

                            <strong>Patient ID:</strong><br>
                            <br>
                            <?php echo $userRow['patientIc']; ?><br><br>

                            <strong>Patient Name:</strong><br>
                            <br>
                            <?php echo $userRow['patientFirstName']; ?> <?php echo $userRow['patientLastName']; ?><br><br>

                            <strong>Email:</strong><br>
                            <br>
                            <?php echo $userRow['patientEmail']; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td colspan="2">
                <strong>Appointment Details</strong>
            </td>
        </tr>

        <tr class="item">
            <td>
                <strong>Appointment ID</strong>
            </td>

            <td>
                <?php echo $userRow['appId']; ?>
            </td>
        </tr>

        <tr class="item">
            <td>
                <strong>Schedule ID</strong>
            </td>

            <td>
                <?php echo $userRow['scheduleId']; ?>
            </td>
        </tr>

        <tr class="item">
            <td>
                <strong>Appointment Day</strong>
            </td>

            <td>
                <?php echo $userRow['scheduleDay']; ?>
            </td>
        </tr>

        <tr class="item">
            <td>
                <strong>Appointment Date</strong>
            </td>

            <td>
                <?php echo $userRow['scheduleDate']; ?>
            </td>
        </tr>

        <tr class="item">
            <td>
                <strong>Appointment Time</strong>
            </td>

            <td>
                <?php echo $userRow['startTime']; ?> until <?php echo $userRow['endTime']; ?>
            </td>
        </tr>

        <tr class="item">
            <td>
                <strong>Patient Symptom</strong>
            </td>

            <td>
                <?php echo $userRow['appSymptom']; ?>
            </td>
        </tr>

    </table>
</div>
<div class="print">
    <button onclick="myFunction()">Print this page</button>
</div>
<script>
    function myFunction() {
        window.print();
    }
</script>
</body>
</html>

