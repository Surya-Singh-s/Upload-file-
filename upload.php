<?php
// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Create a folder to store uploaded files
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Handle JEE File Upload
    if (isset($_FILES['jeeFile']) && $_FILES['jeeFile']['error'] == 0) {
        $jeeTargetFile = $target_dir . basename($_FILES['jeeFile']['name']);
        move_uploaded_file($_FILES['jeeFile']['tmp_name'], $jeeTargetFile);
        echo "JEE document uploaded successfully.<br>";
    }

    // Handle NEET File Upload
    if (isset($_FILES['neetFile']) && $_FILES['neetFile']['error'] == 0) {
        $neetTargetFile = $target_dir . basename($_FILES['neetFile']['name']);
        move_uploaded_file($_FILES['neetFile']['tmp_name'], $neetTargetFile);
        echo "NEET document uploaded successfully.<br>";
    }

    // Handle BTech CSE File Upload
    if (isset($_FILES['btechCseFile']) && $_FILES['btechCseFile']['error'] == 0) {
        $btechCseTargetFile = $target_dir . basename($_FILES['btechCseFile']['name']);
        move_uploaded_file($_FILES['btechCseFile']['tmp_name'], $btechCseTargetFile);
        echo "BTech CSE document uploaded successfully.<br>";
    }

    // Handle BA File Upload
    if (isset($_FILES['baFile']) && $_FILES['baFile']['error'] == 0) {
        $baTargetFile = $target_dir . basename($_FILES['baFile']['name']);
        move_uploaded_file($_FILES['baFile']['tmp_name'], $baTargetFile);
        echo "BA document uploaded successfully.<br>";
    }

    // Handle BSc File Upload
    if (isset($_FILES['bscFile']) && $_FILES['bscFile']['error'] == 0) {
        $bscTargetFile = $target_dir . basename($_FILES['bscFile']['name']);
        move_uploaded_file($_FILES['bscFile']['tmp_name'], $bscTargetFile);
        echo "BSc document uploaded successfully.<br>";
    }

    // Handle CA File Upload
    if (isset($_FILES['caFile']) && $_FILES['caFile']['error'] == 0) {
        $caTargetFile = $target_dir . basename($_FILES['caFile']['name']);
        move_uploaded_file($_FILES['caFile']['tmp_name'], $caTargetFile);
        echo "CA document uploaded successfully.<br>";
    }

    // Handle CS File Upload
    if (isset($_FILES['csFile']) && $_FILES['csFile']['error'] == 0) {
        $csTargetFile = $target_dir . basename($_FILES['csFile']['name']);
        move_uploaded_file($_FILES['csFile']['tmp_name'], $csTargetFile);
        echo "CS document uploaded successfully.<br>";
    }

    // Handle CMA File Upload
    if (isset($_FILES['cmaFile']) && $_FILES['cmaFile']['error'] == 0) {
        $cmaTargetFile = $target_dir . basename($_FILES['cmaFile']['name']);
        move_uploaded_file($_FILES['cmaFile']['tmp_name'], $cmaTargetFile);
        echo "CMA document uploaded successfully.<br>";
    }
}
?>
