<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS Tbluser;
CREATE TABLE tblusers 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
gender VARCHAR(1) NOT NULL,
surname VARCHAR(20) NOT NULL,
forename VARCHAR(20) NOT NULL,
password VARCHAR(20) NOT NULL,
house VARCHAR(20) NOT NULL,
year INT(2) NOT NULL,
role TINYINT(1))"
);
$stmt->execute();
$stmt->closeCursor();
echo("tblusers created");


$stmt = $conn->prepare("DROP TABLE IF EXISTS tblsubjects;
CREATE TABLE tblsubjects
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
gender VARCHAR(1) NOT NULL,
surname VARCHAR(20) NOT NULL,
forename VARCHAR(20) NOT NULL,
password VARCHAR(20) NOT NULL,
house VARCHAR(20) NOT NULL,
year INT(2) NOT NULL,
role TINYINT(1))"
);
$stmt->execute();
$stmt->closeCursor();
echo("tblsubjects created");


$stmt = $conn->prepare("DROP TABLE IF EXISTS tblpupilstudies;
CREATE TABLE tblpupilstudies
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
gender VARCHAR(1) NOT NULL,
surname VARCHAR(20) NOT NULL,
forename VARCHAR(20) NOT NULL,
password VARCHAR(20) NOT NULL,
house VARCHAR(20) NOT NULL,
year INT(2) NOT NULL,
role TINYINT(1))"
);
$stmt->execute();
$stmt->closeCursor();
echo("tblpupilstudies created");
?>
