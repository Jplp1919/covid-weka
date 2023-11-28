
<?php

$hostName = "localhost";
$userName = "root";
$password = "root";
$databaseName = "newmodeldb";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE>  
<html>  
<link rel="stylesheet" type="text/css" href="style.css">
<br>
    <body>

<form method="post">
    <div>
        <label for="numres">Qual o número de moradores na sua residência?</label>
        <br>
        <select name="numres" id="numres">
            <option value="" selected>---número de moradores---</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
            <option value=6>6</option>
            <option value=7>7</option>
            <option value=8>8</option>
            <option value=9>9+</option>
        </select>
        <br><br>
    </div>
    <div>
        <label for="rendaMedia">Qual a renda média da sua casa?</label>
        <br>
        <select name="rendaMedia" id="rendaMedia">
            <option value="" selected>---renda média---</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
        </select>
        <br><br>
    </div>

</div>
    <div>
        <label for="sex">Qual o seu sexo atribuído no nascimento?</label>
        <br>
        <select name="sex" id="sex">
            <option value="" selected>---Sexo---</option>
            <option value=0>Mulher</option>
            <option value=1>Homem</option>
        </select>
        <br><br>
    </div>

    <div>
        <label for="idade">Qual a sua idade?</label>
        <br>
        <select name="idade" id="idade">
            <option value="" selected>---Idade---</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
            <option value=6>6</option>
            <option value=7>7</option>
        </select>
        <br><br>
    </div>

    <div>
        <label for="frequentouEscola">Frequentou Escola?</label>
        <br>
        <select name="frequentouEscola" id="frequentouEscola">
            <option value="" selected>--Frequentou Escola?--</option>
            <option value=0>Não</option>
            <option value=1>Sim</option>
        </select>
        <br><br>
    </div>

    <div>
        <label for="graudeEnsino">Grau de Ensino</label>
        <br>
        <select name="graudeEnsino" id="graudeEnsino">
            <option value="" selected>--Grau de Ensino--</option>
            <option value=0>Fundamental</option>
            <option value=1>Médio</option>
            <option value=2>Superior</option>
        </select>
        <br><br>
    </div>
    
    <div>
        <label for="cloncuiuSuperior">Concluiu superior?</label>
        <br>
        <select name="cloncuiuSuperior" id="cloncuiuSuperior">
            <option value="" selected>--Concluiu superior--</option>
            <option value=0>Não</option>
            <option value=1>Sim</option>
        </select>
        <br><br>
    </div>

    <div>
        <label for="ensinoMaiordaCasa">Grau de ensino do morador que mais estudou na casa</label>
        <br>
        <select name="ensinoMaiordaCasa" id="ensinoMaiordaCasa">
            <option value="" selected>Grau de ensino do morador que mais estudou</option>
            <option value=0>Fundamental</option>
            <option value=1>Médio</option>
            <option value=2>Superior</option>
        </select>
        <br><br>
    </div>

    <div>
        <label for="raca">Qual a sua raça?</label>
        <br>
        <select name="raca" id="raca">
            <option value="" selected>--Qual a sua raça--</option>
            <option value=0>Branca</option>
            <option value=1>Parda</option>
            <option value=2>Preta</option>
            <option value=3>Amarela</option>
            <option value=4>Indígena</option>
        </select>
        <br><br>
    </div>

    <div>
        <label for="procurouSaude">Procurou serviço de saúde nos últimos 15 dias?</label>
        <br>
        <select name="procurouSaude" id="procurouSaude">
            <option value="" selected>Procurou serviço de saúde nos últimos 15 dias</option>
            <option value=0>Sim</option>
            <option value=1>Não</option>
        </select>
        <br><br>
    </div>

    <div>
        <label for="tipoSaude">Que tipo de serviço de saúde?</label>
        <br>
        <select name="tipoSaude" id="tipoSaude">
            <option value="" selected>Que tipo de serviço de saúde</option>
            <option value=0>Posto de Saúde</option>
            <option value=1>Pronto Atendimento</option>
            <option value=2>Médico Particular</option>
            <option value=3>Hospital</option>
            <option value=4>Outro Serviço</option>
            
        </select>
        <br><br>
    </div>

    <div>
        <label for="distanciamentoSocial">Que tipo de serviço de saúde?</label>
        <br>
        <select name="distanciamentoSocial" id="distanciamentoSocial">
            <option value="" selected>Que tipo de serviço de saúde</option>
            <option value=0>Muito Pouco</option>
            <option value=1>Pouco</option>
            <option value=2>Mais ou Menos</option>
            <option value=3>Bastante</option>
            <option value=4>Praticamente Isolado de Todo Mundo</option>
        </select>
        <br><br>
    </div>
    

    <div>
        <label for="motivoSaude">Por qual motivo procurou o serviço de saúde?</label>
        <br>
        <select name="motivoSaude" id="motivoSaude">
            <option value="" selected>Motivo</option>
            <option value=0>Vacinação</option>
            <option value=1>Problema de saúde já existente</option>
            <option value=2>Retorno agendado</option>
            <option value=3>Sintomas de gripe ou dor de garganta</option>
            <option value=4>Buscar remédio</option>
            <option value=5>Outro motivo</option>
            <option value=6>Não procurou serviço de saúde</option>
        </select>
        <br><br>
    </div>
    
    <div>
        <label for="rotinaAtividades">Rotina de atividades em casa</label>
        <br>
        <select name="rotinaAtividades" id="rotinaAtividades">
            <option value="" selected>--Rotina--</option>
            <option value=0>Fica em casa o tempo todo</option>
            <option value=1>Sai de vez em quando para esticar as pernas</option>
            <option value=2>Sai de vez em quando para compras e esticar as pernas</option>
            <option value=3>Sai todos os dias para alguma atividade</option>
            <option value=4>Sai todos os dias, o dia todo, para trabalhar ou outra atividade regular</option>
        </select>
        <br><br>
    </div>
    

    <div>
        <label for="rotinaCasaQuem">Rotina da casa, quem tem entrado em casa?</label>
        <br>
        <select name="rotinaCasaQuem" id="rotinaCasaQuem">
            <option value="" selected>--Rotina--</option>
            <option value=0>Só familiares que moram junto</option>
            <option value=1>Alguns parentes próximos visitam 1 ou 2x na semana</option>
            <option value=2>Alguns parentes próximos visitam quase todo dia</option>
            <option value=3>Amigos, parentes ou outros visitam 1 a 2 vezes na semana</option>
            <option value=4>Amigos, parentes ou outros que visitam quase todos os dias</option>
        </select>
        <br><br>
    </div>



    <?php 
if(isset($_POST['submit'])){
  $sexo = $_POST['sex'];
  $query="";
  $numeroMoradores = $_POST['numres'];
  $rendaMedia = $_POST['rendaMedia'];
  $idade= $_POST['idade'];
  $frequentouEscola = $_POST['frequentouEscola'];
  $graudeEnsino = $_POST['graudeEnsino'];
  $cloncuiuSuperior = $_POST['cloncuiuSuperior'];
  $ensinoMaiordaCasa = $_POST['ensinoMaiordaCasa'];
  $raca = $_POST['raca'];
  $procurouSaude = $_POST['procurouSaude'];
  $tipoSaude = $_POST['tipoSaude'];
  $distanciamentoSocial = $_POST['distanciamentoSocial'];
  $motivoSaude = $_POST['motivoSaude'];
  $rotinaAtividades = $_POST['rotinaAtividades'];
  $rotinaCasaQuem = $_POST['rotinaCasaQuem'];

 

  $query1 = "INSERT INTO pessoa (";
  //1 + fields + 2 + values + 3
  $query2 = ") VALUES(";
  $query3 = ")";
  $fields = "";
  $values = "";
  $needComma = false;
  if($numeroMoradores >=1){
    $fields .= "NumeroMorador ";
    $values .= "$numeroMoradores "; 
    $needComma = true;
  } 

  if($rendaMedia >=1){
    if($needComma){
        $fields .= ", ";
        $values .= ", ";
     }
    $fields .= "Rendamédia ";
    $values .= "$rendaMedia"; 
    $needComma = true;
  } 

  if($sexo >=0){

     if($needComma){
        $fields .= ", ";
        $values .= ", ";
     }
     $fields .= "Sexo ";
     $values .= "$sexo ";
     $needComma = true;
    } 
   
    if($idade >=1){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "Idade ";
        $values .= "$idade ";
        $needComma = true;
       } 
       
       
       if($frequentouEscola>=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "FrequentouEscola ";
        $values .= "$frequentouEscola ";
        $needComma = true;
       } 

       if($graudeEnsino >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "GrauEnsino ";
        $values .= "$graudeEnsino ";
        $needComma = true;
       } 
       
       if($cloncuiuSuperior >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "ConcluiuSuperior ";
        $values .= "$cloncuiuSuperior ";
        $needComma = true;
       } 

       if($ensinoMaiordaCasa >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "GrauEnsinoMoradorMaisEstudou ";
        $values .= "$ensinoMaiordaCasa ";
        $needComma = true;
       } 

       if($raca >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "CorRaca ";
        $values .= "$raca ";
        $needComma = true;
       } 

       if($procurouSaude >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "ProcurouServicoSaudeQuinzeDias ";
        $values .= "$procurouSaude ";
        $needComma = true;
       } 


       if($tipoSaude >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "TipoServicoSaude ";
        $values .= "$tipoSaude ";
        $needComma = true;
       } 

       if($distanciamentoSocial >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "CumprindoIsolamento ";
        $values .= "$distanciamentoSocial ";
        $needComma = true;
       } 

       if($motivoSaude >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "MotivoProcuraServico ";
        $values .= "$motivoSaude ";
        $needComma = true;
       } 
       if($rotinaAtividades >=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "RotinaAtividades ";
        $values .= "$rotinaAtividades ";
        $needComma = true;
       } 
       if($rotinaCasaQuem>=0){
        if($needComma){
           $fields .= ", ";
           $values .= ", ";
        }
        $fields .= "RotinaCasa ";
        $values .= "$rotinaCasaQuem ";
        $needComma = true;
       } 
       
       

    $query .= $query1 . $fields . $query2 . $values . $query3;
    $result = $conn->query($query);
      if($result){
        
      }  else{
        
  }


  sleep(5);

  $jsonFile = 'C:/Users/Usuário/Desktop/php codes/output.json';

  // Read the JSON data from the file
  $jsonData = file_get_contents($jsonFile);
  echo $jsonData;
  // Parse the JSON data into a PHP associative array
  $dataArray = json_decode($jsonData, true);


  if ($dataArray === null) {
    echo 'Error parsing JSON.';
} else { 
// Access the data
$resultado = $dataArray['Resultado'];
$certeza = $dataArray['Certeza'];

echo $resultado;
echo $certeza;

}
      }
?>
<br> <br>
<button type="submit" name ="submit">Enviar Formulario</button>



  
</form>    
    </body>  
</html>