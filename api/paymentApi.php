<?php
require "../config/connection.php";
require "../mail/mail.php";
$PDO = getConnection();

$customer;
$response = array(
    'data' => $customer,
    'status' => 0,
    'message' => ''
);
extract($_POST);
if (isset($_POST["customerDate"]) && isset($_POST['customerName']) && isset($_POST['customerEmail']) && isset($_POST['customerGender'])) {
    // $response['data'] =$_POST;
    $isSend  = sendmail("Appointment", $customerName, $customerEmail);
    if ($isSend) {
        try {
            $SQL_INSERT_CUSTOMER_APPOINTMENT = "INSERT INTO appoitement (appointmentDate,customerName,customerEmail,customerGender) 
            VALUES (:appointmentDate,:customerName,:customerEmail,:customerGender)";
            $REQUEST_INSERT_CUSTOMER_APPOINTMENT = $PDO->prepare($SQL_INSERT_CUSTOMER_APPOINTMENT);
            $PARAM = [
                ":customerName" => $customerName,
                ":customerEmail" => $customerEmail,
                ":customerGender" => $customerGender,
                ":appointmentDate" => $customerDate
            ];
            $REQUEST_INSERT_CUSTOMER_APPOINTMENT->execute($PARAM);
        } catch (PDOException $e) {
            
        }
        $response['status'] = 200;
        $response['message'] = "OK";
        $response['data'] = $_POST;
        echo json_encode($response);
    } else {
        $response['status'] = 404;
        $response['message'] = "BAD REQUEST";
        $response['data'] = $_POST;
        echo json_encode($response);
    }
}
