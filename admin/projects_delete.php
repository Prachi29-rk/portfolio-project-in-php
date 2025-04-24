<?php
include("conn.php");
// projects_delete.php
if (isset($_GET['project_id'])) {
    $id = $_GET['project_id'];
    $sql = "DELETE FROM projects WHERE project_id = $id";
    mysqli_query($conn, $sql);
    header("Location: projects.php");
}
?>