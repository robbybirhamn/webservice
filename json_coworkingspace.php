<?php


$konek = mysqli_connect('localhost', 'root', '', 'kuliah_webservice');
 
$query = "SELECT * from tb_coworkingspace";
$result = mysqli_query($konek,$query);
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(
    "id_cospace" => $row["id_cospace"],
    "name_cospace" => $row["name_cospace"], 
    "description" => $row["description"],
    "address" => $row["address"],
    "publish" => $row["publish"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA MAHASISWA\":" . $data . "}";
?>
