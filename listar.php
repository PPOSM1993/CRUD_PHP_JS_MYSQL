<?php

require "conexion.php";
$consulta = $pdo->prepare("SELECT  * FROM productos ORDER BY id ASC");
$consulta->execute();
$resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $data) {
    echo "<tr>
                <td>" . $data['codigo'] . "</td>
                <td>" . $data['producto'] . "</td>
                <td>" . $data['precio'] . "</td>
                <td>" . $data['cantidad'] . "</td>

                <td class='text-center'>
                    <button type='button' class='btn btn-warning btn-sm'>
                        <i class='fa-solid fa-pen-nib'></i>
                        Editar
                    </button>

                    <button type='button' class='btn btn-danger btn-sm'  onclick=Eliminar('" . $data['id'] . "')>
                        <i class='fa-solid fa-trash'></i>
                        Eliminar
                    </button>
                </td>

        </tr>";
}