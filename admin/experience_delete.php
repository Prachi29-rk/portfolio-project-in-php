<?php
include("conn.php");
// experience_delete.php
if (isset($_GET['e_id'])) {
    $id = $_GET['e_id'];
    $sql = "DELETE FROM experience WHERE e_id = $id";
    mysqli_query($conn, $sql);
    header("Location: experience.php");
}
?>