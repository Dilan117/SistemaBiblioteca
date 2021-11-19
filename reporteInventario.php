<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body></body>
</html>

<?php
include_once("conexion.php");
include_once("modelos/bibliotecalibro.php");
$cantidad = $_GET['limit'];
$i=BibliotecaLibro::cu($cantidad);
?>

<div class="container">
<h4 class="display-3">Reporte de Registro</h4>
</div>
<div class="container" style="text-align:justify">
    <table style="text-align:center; width="500px" cellpadding="5px" cellspacing="5px" border="3">
    <tr bgcolor="#2980B9">
        <td>Id Biblioteca-Libro</td>
        <td>ID Libro</td>
        <td>ID Editorial</td>
        <td>Codigo</td>
    </tr>
    
    <?php foreach ($i as $bibliotecalibro ){ ?>
        <tr>
            <td class="lead"> <?php echo  $bibliotecalibro->id_biblioteca_libro;?> </td>
            <td class="lead"> <?php echo  $bibliotecalibro->libro_id;?> </td>
            <td class="lead"> <?php echo  $bibliotecalibro->biblioteca_id;?> </td>
          <td> <?php echo "<img  src='/SISTEMA/vistas/img/code.jpg'> "; ?> </td>
            
        </td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<?php
echo "Fecha: ";
echo date('l jS \of F Y h:i:s A');
?>

</div>
<?php
$html=ob_get_clean();
echo $html;
// require_once 'dompdf/autoload.inc.php';
// use Dompdf\Dompdf;
// $dompdf= new Dompdf();
// $options = $dompdf->getOptions();
//  $options->set(array('isRemoteEnabled'=> true));
//  $dompdf->setOptions($options);
//  $dompdf->loadHtml(utf8_decode($html));
//  $dompdf->render();
//  $dompdf->stream("ReporteInventario.pdf", array("attachment"=> false));
?>