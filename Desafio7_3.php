<?php
 $contasBanco = [
     ["numConta" => 2025101 , "cpfConta" => "123.123.123-12", "saldo" => 12312.12],
     ["numConta" => 2025102 , "cpfConta" => "123.312.321-32", "saldo" => 124.12],
     ["numConta" => 2025103 , "cpfConta" => "123.412.412-42", "saldo" => 900999.12],
     ["numConta" => 2025104 , "cpfConta" => "123.653.543-45", "saldo" => 2134.12],
 ];

 $contaCliente = (int) readline("Informe a conta do cliente");

 foreach ($contasBanco as $conta){
     if($conta["numConta"] == $contaCliente){
         echo "Número da conta: " . $conta["numConta"] . PHP_EOL;
         echo "Cpf da conta: " . $conta["cpfConta"] . PHP_EOL;
         echo "Saldo: " . $conta["saldo"] .PHP_EOL;
     }
 }