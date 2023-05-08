<?php

    $nome = "Lucas";

    $nomeCompleto = $nome;
    $nomeCompleto .= $sobreNome ?? ""; // Variavel $sobreNome não existe então ele a ignorará

    echo $nomeCompleto;