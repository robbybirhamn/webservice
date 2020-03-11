<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['name_cospace'])) {
$url = 'http://localhost/kuliah/web_service/proses_coworkingspace.php';

$data = array(
    'id_cospace' => rand(),
    'name_cospace' => $_POST['name_cospace'],
    'description' => $_POST['description'],
    'address' => $_POST['address'],
    'publish' => 1,
    'created_at' => $_POST['name_cospace']
);

echo "datanya ".json_encode($data);
echo "<br/>";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="">
<table>
<tr>
<td>Nama Coworking Space</td>
<td><input type="text" name="name_cospace" id="nim"></td>
</tr>
<tr>
<td>Deskripsi</td>
<td><textarea name="description" id="description" cols="30" rows="10"></textarea></td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="address" id="address"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>