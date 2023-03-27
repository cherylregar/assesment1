<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $angka1 = $_POST['angka1'];
  $operator = $_POST['operator'];
  $angka2 = $_POST['angka2'];


  switch ($operator) {
    case '+':
      $hasil = $angka1 + $angka2;
      break;
    case '-':
      $hasil = $angka1 - $angka2;
      break;
    case '*':
      $hasil = $angka1 * $angka2;
      break;
    case '/':
      $hasil = $angka1 / $angka2;
      break;
    default:
      echo "Operator tidak valid";
      exit;
  }


  echo "Hasil: " . $hasil;
}
?>
