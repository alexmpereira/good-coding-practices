<?php 

//Usar uma função e colocar o loop dentro para dar significado ao if
foreach ($itens as $item) {
    if ($item->id === $id) {
        // Item encontrado
        break;
    }
}

?>