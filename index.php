<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.google.com/",  // kamu ubah urlnya sesuai keingina kamu
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);  // variabel ini akan menjadi variabel yang memiliki data dari hasil pengambilan data situs lain
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;  // fungsi ini akan menampilkan pesan error jika misalnya data dari situs lain tidak dapat diambil
} else {
  echo $response;  // fungsi ini akan menampilkan hasil data yang telah kita ambil dari fungsi utama pada kode diatas
}
