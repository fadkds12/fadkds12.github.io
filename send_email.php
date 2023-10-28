<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Anda perlu menginstal PHPMailer terlebih dahulu

// Konfigurasi email
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'riskyfad12@gmail.com'; // Gantilah dengan alamat email Gmail Anda
$mail->Password = 'kudus1234'; // Gantilah dengan kata sandi Gmail Anda
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->setFrom('riskyfad12@gmail.com', 'Fadlan');
$mail->addAddress('fadlansetiawan223@gmail.com', 'Fadlansetiawan');

// Mengambil data jadwal kegiatan dari formulir
$activities = $_POST['activities'];

// Menyusun email
$mail->isHTML(true);
$mail->Subject = 'Jadwal Kegiatan Harian';
$mail->Body = '<ul>';
foreach ($activities as $activity) {
    $mail->Body .= "<li>$activity</li>";
}
$mail->Body .= '</ul>';

// Mengirim email
if (!$mail->send()) {
    echo 'Pesan gagal terkirim.';
} else {
    echo 'Pesan berhasil terkirim.';
}
?>