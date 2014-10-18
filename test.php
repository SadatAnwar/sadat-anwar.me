<!DOCTYPE html>
<html lang="en">
    <body>
        <pre>
    <?php
DEFINE ('DB_USER','syeanw_db');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','syeanw_db');
DEFINE ('DB_PASS','sadat5anwer5');

$dbcon = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (!dbcon){
    die('error connecting');
}
else {
echo "success";
}

$sql = "SELECT * FROM `test_table` WHERE 1 LIMIT 0, 30 ";
$sqldata = mysqli_query($dbcon, $sql) or die('ERROR');
print_r($sqldata);
    $dir = glob('gallery/Images/*.jpg');
    echo '<pre>';
        print_r($dir);

    ?>
</body>