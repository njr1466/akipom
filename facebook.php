<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['code'])){
 
  // Informe o seu App ID abaixo
  $appId = '248775021897049';
 
  // Digite o App Secret do seu aplicativo abaixo:
  $appSecret = '9899eeb39e70aa571efeedee18b57857';
 
  // Url informada no campo "Site URL"
  $redirectUri = urlencode('http://localhost:83/akipom/facebook.php');
 
  // Obtém o código da query string
  $code = $_GET['code'];
 
  // Monta a url para obter o token de acesso e assim obter os dados do usuário
  $token_url = "https://graph.facebook.com/oauth/access_token?"
  . "client_id=" . $appId . "&redirect_uri=" . $redirectUri
  . "&client_secret=" . $appSecret . "&code=" . $code;
 
  //pega os dados
  $response = @file_get_contents($token_url);
  if($response){
    $params = null;
    parse_str($response, $params);
    if(isset($params['access_token']) && $params['access_token']){
      $graph_url = "https://graph.facebook.com/me?access_token="
      . $params['access_token'];
      $user = json_decode(file_get_contents($graph_url));
 

    // nesse IF verificamos se veio os dados corretamente
      if(isset($user->email) && $user->email){
 echo "<br><br><pre>";
echo($user);
echo "</pre>";
    /*
    *Apartir daqui, você já tem acesso aos dados usuario, podendo armazená-los
    *em sessão, cookie ou já pode inserir em seu banco de dados para efetuar
    *autenticação.
    *No meu caso, solicitei todos os dados abaixo e guardei em sessões.
    */
 
        $_SESSION['email'] = $user->email;
        $_SESSION['nome'] = $user->name;
        $_SESSION['localizacao'] = $user->location->name;
        $_SESSION['uid_facebook'] = $user->id;
        $_SESSION['user_facebook'] = $user->username;
        $_SESSION['link_facebook'] = $user->link;
        echo"1";
      }
    }else{
      echo "Erro de conexão com Facebook";
      exit(0);
    }
 
  }else{
    echo "Erro de conexão com Facebook";
    exit(0);
  }
}else if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['error'])){
  echo 'Permissão não concedida';
}

?>

<a href="https://www.facebook.com/dialog/oauth?client_id=248775021897049&redirect_uri=http://localhost:83/akipom/facebook.php&scope=public_profile,user_friends,email">Entrar com Facebook</a>