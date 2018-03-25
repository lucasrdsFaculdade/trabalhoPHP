<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php facul</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php 
        $ano_nascimento = 1989;
        $pi = 3.14159265;
        $texto = 'O PHP é uma linguagem.';
        $produto = 'pizza';
        $texto = "Ele \"comprou\" uma $produto hoje.";
        $sim = true;
        $nao = false;
        define("constant1", "constant");

        $x = 1;
        function Teste(){
            echo $x; 
        }
        Teste();


        $a = 1;
        $b = 2;
        function soma(){
            global $a, $b;
            $b = $a + $b;
        }

        soma();
        echo $b;


        $var1 = 10;
        $var2 = (boolean)$var1;

        $x = true;

        if($x){
            echo 'é verdade';
        }else{
            echo 'é mentira';
        }

        echo $x ? 'é verdade' : 'é mentira';
        switch ($x) {
            case true:
                echo 'é verdade';
                break;
            default:
                echo 'é mentira';
                break;
        }

        $i = 1;

        while ($i <= 10) {
            $i++;
        }

        foreach (array(1,2,3) as $value) {
            echo $value;
        }
        
        function quadrado($lado1, $lado2){
            return $lado1 * $lado2;
        }
        $area = quadrado(5,5);

        $whatIsArray = 'Um array no PHP é na verdade um mapa ordenado. Um mapa é um tipo que relaciona valores a chaves. Este tipo é otimizado para várias usos diferentes: ele pode ser tratado como um array, uma lista (vetor), hashtable (que é uma implementação de mapa), dicionário, coleção, pilha, fila e provavelmente mais. Assim como existe a possibilidade dos valores do array serem outros arrays, árvores e arrays multidimensionais.';
        $whatIsObject = 'Um objeto é uma estrutura de dados de tempo de execução com espaço alocado em memoria';
        $whatIsNull = 'O valor especial NULL representa uma variável sem valor. NULL é o único valor possível do tipo null.';


    ?>    

    <p>O valor de pi é <?php echo $pi; ?></p>
    <p>Constant definida: <?php echo FOO; ?></p>
    <p>Olá <?php echo htmlspecialchars($_POST['nome']) ?></p>

    <p><?php echo $whatIsArray; ?></p>
    <p><?php echo $whatIsObject; ?></p>
    <p><?php echo $whatIsNull; ?></p>
    <form action="index.php" method="post">
        <input type="text" name="nome"/>
        <input type="submit" value="enviar"/>
    </form>
</body>
</html>