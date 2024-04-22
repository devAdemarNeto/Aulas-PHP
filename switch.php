<?php 
    $tarefa = 'codigos';

    switch ($tarefa) {
        case 'vendas':
            echo "A tarefa de hoje venda";
            break;

            case 'codigo':
                echo "A tarefa de hoje código";
                break;
        
        default:
                echo "Não foi informado uma tarefa válida";
            break;
    }
?>