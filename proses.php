<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $angka1 = $_POST['angka1'];
<<<<<<< HEAD
  $angka2 = $_POST['angka2'];
  $operator = $_POST['operator'];


  if ($operator == '+') {
    $hasil = $angka1 + $angka2;
  } else if ($operator == '-') {
    $hasil = $angka1 - $angka2;
  } else if ($operator == '*') {
    $hasil = $angka1 * $angka2;
  } else if ($operator == '/') {
    $hasil = $angka1 / $angka2;
  }

  echo "Hasil operasi " . $angka1 . " " . $operator . " " . $angka2 . " adalah " . $hasil;
=======
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
>>>>>>> 6701213004
}
?>
