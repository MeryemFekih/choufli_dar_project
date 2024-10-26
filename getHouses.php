<?php
include './connectDB.php';

$filterRegion = isset($_GET['filterRegion']) ? $_GET['filterRegion'] : '';

$whereClause = "";
if (!empty($filterRegion)) {
    $whereClause = "region='$filterRegion'";
}

$req = "SELECT * FROM houses ";
if (!empty($whereClause)) {
    $req .= " WHERE " . $whereClause;
}
$req .= ";";

$res = mysqli_query($conn, $req);

$rows = [];
if ($res) {
    while ($row = mysqli_fetch_assoc($res)) {
        $rows[] = $row;
    }
    mysqli_free_result($res);
}

header('Content-type: application/json');
if (!empty($rows)) {
    echo json_encode($rows);
} else {
    echo json_encode(['message' => 'empty']);
}

mysqli_close($conn);
?>