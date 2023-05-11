 <?php
    //Campo minado
    $testes = intval(fgets(STDIN));
    $tabuleiro = array();
    for ($i = 0; $i < $testes; $i++) {
        $tabuleiro[] = intval(fgets(STDIN));
    }
    for ($i = 0; $i < $testes; $i++) {
        $minas = $tabuleiro[$i];
    }
    if ($i > 0) {
        $minas += $tabuleiro[$i - 1];
    }
    if ($i < $testes - 1) {
        $minas += $tabuleiro[$i + 1];
    }

    //Lendo livro
    while (true) {
        $testes = readline();
        if ($testes == 0) {
            break;
        }
        list($q, $d, $p) = explode(" ", $testes);
        $c1 = $q * $d * $p;
        if ($q > $p) {
            $c2 = $q - $p;
        }
        if ($p > $q) {
            $c2 = $p - $q;
        }
        $c3 = intdiv($c1, $c2);
        if ($c3 == 1) {
            echo ("{$c3} pagina\n");
        } else {
            echo ("{$c3} paginas\n");
        }
    }

    //Fibonacci rápido
    list($a, $b, $c) = explode(" ", readline());
    $a = floatval($a);
    $b = floatval($b);
    $c = floatval($c);
    $d = $b * $b - 4 * $a * $c;

    if ($d < 1 or $a == 0) {
        echo "Impossivel calcular\n";
    } else {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);

        printf("R1 = %.5f\n", $x1);
        printf("R2 = %.5f\n", $x2);
    }


    //Cara ou Coroa
    $principal = [];
    $index = 0;
    while (true) {
        $jogadas = (int) readline();
        if ($jogadas == 0) {
            break;
        }
        $md = explode(' ', readline());
        $dicionario = [['j'] => 0, 'm' => 0];
        for ($i = 0; $i < $jogadas; $i++) {
            if ($md[$i] == '0') {
                $dicio['m'] += 1;
            } elseif ($md[$i] == '1') {
                $dicionario['j'] += 1;
            }
        }
        $principal[] = $dicionario;
    }
    foreach ($principal as $i) {
        echo "Mary won {$i['md']} times and John won {$i['j']} times\n";
    }

    //Divisibilidade por 3
    $casos = [];
    while (($input = readline()) !== false) {
        list($n, $m) = explode(" ", $input);
        $casos[] = [$n, $m];
    }
    foreach ($casos as $caso) {
        list($n, $m) = $caso;
        $n = intval($n);
        $length = strlen($m);
        $soma = 0;
        for ($i = 0; $i < $length; $i++) {
            $soma += (int) $m[$i];
        }
        $m = intval($m);
        $divisivel = $m % 3 == 0;
        if ($divisivel) {
            echo "$soma sim\n";
        } else {
            echo "$soma nao\n";
        }
    }

    //Loteria
    $sorteados = explode(" ", readline());
    $apostados = explode(" ", readline());
    $acertados = 0;

    foreach ($sorteados as $i) {
        if (in_array($i, $apostados)) {
            $acertados++;
        }
    }

    if ($acertados == 3) {
        echo "terno\n";
    } elseif ($acertados == 4) {
        echo "quadra\n";
    } elseif ($acertados == 5) {
        echo "quina\n";
    } elseif ($acertados == 6) {
        echo "sena\n";
    } else {
        echo "azar\n";
    }

//Só consegui fazer essas