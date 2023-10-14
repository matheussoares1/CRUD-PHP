<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Lista de Usuários</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
        </tr>
        <?php
        include("config.php");
        $usuarios = lerUsuarios();
        foreach ($usuarios as $usuario) {
            echo "<tr>";
            echo "<td>" . $usuario['id_usuario'] . "</td>";
            echo "<td>" . $usuario['nome_usuario'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
