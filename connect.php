<?php
$BusinessName = $_POST['bname'];
$StreetName = $_POST['sname'];
$AlreadyMember = $_POST['amember'];
$Comments = $_POST['comments'];
$StreetName = $_POST['sname'];
$Date = $_POST['date'];
if (!empty($BusinessName)) {
    if (!empty($Date)) {
        $host = "sql4.freesqldatabase.com";
        $dbusername = "sql4497902";
        $dbpassword = "wBbtRDUBrp";
        $dbname = "sql4497902";
        // Create connection
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            $sql = "INSERT INTO Onstreet Tracker (Business Name, Street Name, Already Members, Comments, Date)
            values ('$BusinessName','$StreetName','$AlreadyMember','$Comments','$StreetName','$Date')";
            if ($conn->query($sql)) {
                echo "New record is inserted sucessfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();
        }
    } else {
        echo "Business Name should not be empty";
        die();
    }
} else {
    echo "Date should not be empty";
    die();
}
