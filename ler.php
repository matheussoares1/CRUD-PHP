<?php
// Função para ler os registros da tabela 'usuarios'
function lerUsuarios() {
    global $mysqli; // Tornando a conexão disponível dentro da função

    $sql = "SELECT * FROM usuarios";
    $result = $mysqli->query($sql);
    
    if ($result->num_rows > 0) {
        $usuarios = array();
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
        return $usuarios;
    } else {
        return array(); // Retorna um array vazio se não houver registros
    }
}
