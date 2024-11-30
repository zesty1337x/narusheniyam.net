<?php
include "../../function/connect.php";

if (isset($_GET['action']) && isset($_GET['id'])) {
    $status = ($_GET['action'] == 'success') ? 'Подтвержден' : 'Отменен';
    $sql = sprintf("UPDATE application SET status='%s' WHERE application_id='%s'", $status, $_GET['id']);
    $connect->query($sql);
    header("Location: /admin/");
    exit;
}
?>
