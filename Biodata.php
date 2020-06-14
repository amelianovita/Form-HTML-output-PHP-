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
   echo '<td>'. $_POST['gender'] . '</td>';
 echo'</tr>';

 echo '<tr>';
  echo '<td> Program Studi </td>';
   echo '<td>' . $_POST['prodi'] . '</td>';
 echo'</tr>';
 
 echo '</table>'; 
?>
