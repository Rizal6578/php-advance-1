<?php
function formatTanggalWaktu($tanggalWaktu)
{
    $date = date_create($tanggalWaktu);
    return date_format($date, 'l, d F Y H:i:s');
}
?>
