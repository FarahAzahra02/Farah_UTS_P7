<?php
if(isset($_GET['image'])) {
    $imagePath = $_GET['image'];

    // Validasi input (hanya karakter huruf, angka, titik, garis bawah, dan strip)
    if(preg_match('/^[a-zA-Z0-9_.-]+$/', $imagePath)) {
        // Check if the file exists
        if(file_exists($imagePath)) {
            // Set the appropriate headers for download
            header('Content-Description: File Transfer');
            header('Content-Type: image/jpeg');  // Sesuaikan dengan jenis file yang sesuai
            header('Content-Disposition: attachment; filename="'.basename($imagePath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($imagePath));
            readfile($imagePath);
            exit;
        } else {
            echo 'File not found.';
        }
    } else {
        echo 'Invalid characters in the input.';
    }
} else {
    echo 'Invalid request.';
}
?>
