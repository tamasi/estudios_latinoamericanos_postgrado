 <script>
function funcionjs(){
        alert("Muchas Gracias por su mensaje");
        window.location="http://www.estudioslatinoamericanosdepostgrado.org/";
}
</script>

<?php

$to ="cielap2015@gmail.com";
//$headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
//$headers .= "From:".$_POST['name']."\r\n";
$headers = "From:".$_POST['name'];
$mensaje = "nombre:".$_POST['name'] . "\n";
$mensaje .= "email:".$_POST['email'] . "\n";
$mensaje .= "mensaje".$_POST['message'];            
// $mensaje="
// <table border='0' cellspacing='2' cellpadding='2'>
//   <tr>
//     <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
//     <td width='80%' align='left'>$_GET[name]</td>
//   </tr>
//   <tr>
//     <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
//     <td align='left'>$_GET[email]</td>
//   </tr>
//   <tr>
//     <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
//     <td align='left'>$_GET[message]</td>
//   </tr>
// </table>
// ";
mail($to,$tema,$mensaje,$headers); 
     #echo "Su mensaje ha sido enviado.<br /><a href='index.html'>Volver</a>";
    echo "<script>funcionjs();</script>\n";
?>

