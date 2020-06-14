<?php
 echo '<h2>Hasil Output </h2>';
 echo '<table border="1" style="width:100%">';
 
 echo '<tr>';
  echo '<td> NIM </td>';
   echo '<td>'. $_POST["NIM"] . '</td>';
 echo'</tr>';

 echo '<tr>';
  echo '<td> Nama </td>';
   echo '<td>'. $_POST["Nama"] . '</td>';
 echo'</tr>';

 echo '<tr>';
  echo '<td> Jenis Kelamin </td>';
   echo '<td>';
   if ( $_POST['gender'] == "L") {
    echo'Laki-Laki';
    }
   else{
    echo'Perempuan';
    }
   echo '</td>';
 echo'</tr>';

 echo '<tr>';
  echo '<td> Alamat </td>';
   echo '<td>'. $_POST['alamat'] . '</td>';
 echo'</tr>';

 echo '<tr>';
  echo '<td> Program Studi </td>';
   echo '<td>';
    if ($_POST['prodi'] == "SI"){
       echo'Sistem Informasi';
    }
    elseif ($_POST['prodi'] == "Bio"){
        echo'Biologi';
    } 
    elseif ($_POST['prodi'] == "Mat"){
        echo'Matematika';
    }
    else {
        echo'Fisika';
    }
   echo '</td>';
 echo'</tr>';

 echo '<tr>';
 echo '<td> Bahasa Pemograman yang dikuasai </td>';
 echo '<td>';
 
 if (isset($_POST['PASCAL/DELPHI']) == "NO")
 echo'PASCAL/DELPHI <br>';
 else{ 
    echo' ';
 }
 if (isset($_POST['C/C++']) == "NO")
 echo'C/C++ <br>';
 else{ 
    echo' ';
 }
 if (isset($_POST['VISUAL_BASIC']) == "NO")
 echo'VISUAL BASIC <br>';
 else{ 
    echo' ';
 }
echo '</td>';
echo'</tr>';
 
 echo '</table>'; 
?>
