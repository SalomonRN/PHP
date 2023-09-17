<table>
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>CC</th>
        <th>Edad</th>
        <th>Usuario</th>
        <th>Password</th>
        <th>Correo</th>
        <th>Cancion Favorita</th>
        <th>Libro Favorito</th>
        <th>Lugar Favorito</th>
        <th>Carrera</th>
        <th>Semestre</th>
        <th>Colegio Egresado</th>
        <th>Color Favorito</th>
        <th>Marca del celular</th>
        <th>Cantidad de hermanos</th>
        <th>Jornada</th>
        <th>Codigo Estdiantil</th>
    </thead>
    <?php
    include_once '../controlador/conect.php';

    if (isset($_POST['texto'])) {
        $valor = $_POST['texto'];
    } else {
        echo "Ingrese un filtro";
        return;
    }

    $filter = $_POST['opcion'];


    switch ($filter) {
        case 'NAME':
            $request = "SELECT * FROM `datos` WHERE Nombre = '$valor'";
            break;
        case 'LASTNAME':
            $request = "SELECT * FROM `datos` WHERE Apellido = '$valor' ";
            break;
        case 'AGE':
            $request = "SELECT * FROM `datos` WHERE Edad = '$valor' ";
            break;
        case 'JOURNEY':
            $request = "SELECT * FROM `datos` WHERE Jornada = '$valor' ";
            break;
        case 'SEMESTER':
            $request = "SELECT * FROM `datos` WHERE Semestre = '$valor' ";
            break;

        default:
            echo "OPCION INVALIDA";
            break;
    }
    ;

    $res = $conectar->query($request) or die(mysqli_error($conectar));

    while ($list = $res->fetch_assoc()) {
        echo "<tr>";
        echo "<td>";
        echo $list['Nombre'];
        echo "</td>";
        echo "<td>";
        echo $list['Apellido'];
        echo "</td>";
        echo "<td>";
        echo $list['Telefono'];
        echo "</td>";
        echo "<td>";
        echo $list['Direccion'];
        echo "</td>";
        echo "<td>";
        echo $list['CC'];
        echo "</td>";
        echo "<td>";
        echo $list['Edad'];
        echo "</td>";
        echo "<td>";
        echo $list['Usuario'];
        echo "</td>";
        echo "<td>";
        echo $list['Correo'];
        echo "</td>";
        echo "<td>";
        echo $list['Password'];
        echo "</td>";
        echo "<td>";
        echo $list['Cancion Favorita'];
        echo "</td>";
        echo "<td>";
        echo $list['Libro Favorito'];
        echo "</td>";
        echo "<td>";
        echo $list['Lugar Favorito'];
        echo "</td>";
        echo "<td>";
        echo $list['Carrera'];
        echo "</td>";
        echo "<td>";
        echo $list['Semestre'];
        echo "</td>";
        echo "<td>";
        echo $list['Colegio Egresado'];
        echo "</td>";
        echo "<td>";
        echo $list['Color Favorito'];
        echo "</td>";
        echo "<td>";
        echo $list['Marca del celular'];
        echo "</td>";
        echo "<td>";
        echo $list['Cantidad de hermanos'];
        echo "</td>";
        echo "<td>";
        echo $list['Jornada'];
        echo "</td>";
        echo "<td>";
        echo $list['Codigo Estudiantil'];
        echo "</td>";
        echo "<td>";
        echo "</tr>";
    }
    ?>
</table>