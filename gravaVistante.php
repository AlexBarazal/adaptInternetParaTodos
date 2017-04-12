      <?php
          require('conexao.php');
                    $nmVisitante = $_POST["nome"];
                    $emailVisitante = $_POST["emailVisitante"];
                    $senhaVisitante = $_POST["senhaVisitante"];
                    $celularVisitante = $_POST["celularVisitante"];
                    $dtNascimentoVisitante = $_POST["dtNascimentoVisitante"];
                    $tipoDeficienciaVisitante = $_POST["tipoDeficienciaVisitante"];
                    /* $nmVisitante = 'praia grande';
                    $emailVisitante = 'praia@grande.com.br';
                    $senhaVisitante = '123456';
                    $celularVisitante = '12385246';
                    $dtNascimentoVisitante = '12254562';
                    $tipoDeficienciaVisitante = 'nenhuma';*/

                    $sql = "INSERT INTO visitante (nmVisitante,emailVisitante, senhaVisitante, celularVisitante, dtNascimentoVisitante, tipoDeficienciaVisitante) VALUES ('$nmVisitante', '$emailVisitante', '$senhaVisitante', '$celularVisitante', '$dtNascimentoVisitante', '$tipoDeficienciaVisitante')";

                    if ($conn->query($sql) === TRUE) {
                          echo "Novo registro criado com sucesso";
                    } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                          }

                    $conn->close();
    ?>