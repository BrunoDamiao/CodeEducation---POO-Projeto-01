<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><span>Bruno Damião</span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="#">Home</a>
            </li>
            <li class="">
              <a href="#">Contatos</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="section" style="display:none;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="well">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus
                ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed
                odio dui.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <?php
              require_once ("cliente.php");
                $clientes = array(
                            1 => new Cliente("Nilton Morais", "123.321.456-01", "Rua A, nº 354 - Centro, Ilhéus-BA"),
                            2 => new Cliente("Jéssica Abreu", "789.541.369-01", "Rua B, nº 147 - Coceição, Itabuna-BA"),
                            3 => new Cliente("Maria do Carmo", "987.741.364-05", "Rua C, nº 451 - Mangabinha, Itabuna-BA"),
                            4 => new Cliente("João Pedro", "854.001.140-01", "Rua D, nº 09 - Centro, Contagem-MG"),
                            5 => new Cliente("Manoel Cruz", "059.905.154-01", "Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA"),
                            6 => new Cliente("Eva Alves", "212.413.001-01", "Rua Pará de Minas, nº 354 - Centro, Contagem-MG"),
                            7 => new Cliente("Joaquim Costa", "301.102.301-01", "Rua E, nº 256 - Centro, Camacan-BA"),
                            8 => new Cliente("Eliomar Morais", "103.054.193-01", "Rod. Ilhéus-Itabuna, SN - Salobrinho, Ilhéus-BA"),
                            9 => new Cliente("Carla Amaral", "123.789.257-79", "Rua F, nº 123 - Centro, Ilhéus-BA"),
                            10 => new Cliente("Jeniffer Araújo", "231.321.412-01", "Rua G, nº 314 - Centro, Salvador-BA"),
                            );
                $ordenar = isset($_GET['sort'])? $_GET['sort'] : null;
                ($ordenar == 'asc')? krsort($clientes) : ksort($clientes);
                switch ($ordenar) {
                  case 'desc':
                  $tbnIco = '
                    <a href="?sort=asc" style="float:right; color:#ffffff;">Odernar por:
                      <i class="fa fa-fw fa-lg fa-sort-numeric-desc"></i>
                    </a>';
                  break;
                  default:
                  $tbnIco = '
                    <a href="?sort=desc" style="float:right; color:#ffffff;">Odernar por:
                      <i class="fa fa-fw fa-lg fa-sort-numeric-asc"></i>
                    </a>';
                  break;
                }
            ?>
            <div class="list-group">
              <p class="list-group-item active"> Listar Clientes 
                <!-- <a href="?sort=asc" style="float:right; color:#ffffff;">Odernar por: -->
                  <!-- <i class="fa fa-fw fa-lg fa-sort-numeric-desc"></i> -->
                  <?php echo $tbnIco; ?>
                <!-- </a> -->
              </p>
              <?php
                foreach ($clientes as $key => $value):
                  echo '<a href="#" class="list-group-item" data-toggle="modal" data-target="#myModal"> <strong># '.$key.'</strong> - Nome: '.$value->nome.'</a>';
                  echo '
                  <div class="fade modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">'.$value->nome.'</h4>
                      </div>
                      <div class="modal-body">
                        <p><strong>NOME:</strong> '.$value->nome.'</p>
                        <p><strong>CPF:</strong> '.$value->cpf.'</p>
                        <p><strong>ENDEREÇO:</strong> '.$value->endereco.'</p>
                      </div>
                    </div>
                  </div>
                </div>';
                endforeach;
              ?>
              <!-- <div class="panel-footer">
                Listar Clientes
                <a href="?sort=desc" style="float:right; color:#000;">Odernar por:
                  <i class="fa fa-fw fa-lg fa-sort-numeric-asc"></i>
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="section" style="display:none;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading"> <h4> Lista de Clientes</h4></div>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <!-- <th>Idade</th> -->
                    <th>CPF</th>
                    <th>Endereço</th>
                    <!-- <th>Telefone</th> -->
                  </tr>
                </thead>
                <tbody>
                <?php
                  require_once ("cliente.php");
                  $clientes = array(
                              1 => new Cliente("Nilton Morais", "123.321.456-01", "Rua A, nº 354 - Centro, Ilhéus-BA"),
                              2 => new Cliente("Jéssica Abreu", "789.541.369-01", "Rua B, nº 147 - Coceição, Itabuna-BA"),
                              3 => new Cliente("Maria do Carmo", "987.741.364-05", "Rua C, nº 451 - Mangabinha, Itabuna-BA"),
                              4 => new Cliente("João Pedro", "854.001.140-01", "Rua D, nº 09 - Centro, Contagem-MG"),
                              5 => new Cliente("Manoel Cruz", "059.905.154-01", "Rua Primeiro de Maio, nº 25 - Fátima, Itabuna-BA"),
                              6 => new Cliente("Eva Alves", "212.413.001-01", "Rua Pará de Minas, nº 354 - Centro, Contagem-MG"),
                              7 => new Cliente("Joaquim Costa", "301.102.301-01", "Rua E, nº 256 - Centro, Camacan-BA"),
                              8 => new Cliente("Eliomar Morais", "103.054.193-01", "Rod. Ilhéus-Itabuna, SN - Salobrinho, Ilhéus-BA"),
                              9 => new Cliente("Carla Amaral", "123.789.257-79", "Rua F, nº 123 - Centro, Ilhéus-BA"),
                              10 => new Cliente("Jeniffer Araújo", "231.321.412-01", "Rua G, nº 314 - Centro, Salvador-BA"),
                              );

                  // $clientes->Debug($clientes);
                  /*echo "<pre>";
                    // print_r($clientes);
                  echo "</pre>";*/

                  foreach ($clientes as $key => $value):
                    /*echo "$key";
                    echo "<br /> ".$value->nome;
                    echo "<br /> ".$value->cpf;
                    echo "<br /> ".$value->endereco;*/
                
                      echo "<tr>";
                        echo "<td>$key</td>";
                        echo "<td>$value->nome</td>";
                        echo "<td>$value->cpf</td>";
                        echo "<td>$value->endereco</td>";
                      echo "</tr>";
                  endforeach;
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h4>BRUNO DAMIÃO</h4>
            <p>© COPYRIGHT 2016 - WWW.BRUNODAMIAO.COM.BR</p>
          </div>
          <div class="col-sm-6">
            <p class="text-info text-right">
              <br>
              <br>
            </p>
            <div class="row">
              <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                <a href="#"><i class="fa fa-2x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-2x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-2x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="#"><i class="fa fa-2x fa-fw fa-instagram text-inverse"></i></a>
                <a href="#"><i class="fa fa-2x fa-fw fa-twitter text-inverse"></i></a>
                <a href="#"><i class="fa fa-2x fa-fw fa-facebook text-inverse"></i></a>
                <a href="#"><i class="fa fa-2x fa-fw fa-github text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

</body></html>