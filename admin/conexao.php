<?php

class Funcoes {

    protected $mysqli;
    private $db_host = "127.0.0.1";
    private $db_name = "akipom";
    private $db_username = "root";
    private $db_password = "";

    public function __construct() {
        $this->mysqli = new mysqli($this->db_host, $this->db_username, $this->db_password, $this->db_name)
                or die($this->mysqli->error);

        return $this->mysqli;
    }

    //*************************************************************	 
    // INICIO CATEGORIA
    //*************************************************************
    function inserirCategoria($nomeCategoria, $descricao) {

        $query = "INSERT INTO categorias (nome, descricao) VALUES (?,?)";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ss", $val2, $val3);
        $val2 = $nomeCategoria;
        $val3 = $descricao;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function alterarCategoria($codigo, $nomeCategoria, $descricao) {

        $query = "UPDATE categorias SET nome=? , descricao=? where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ssi", $val2, $val3, $val1);
        $val1 = $codigo;
        $val2 = $nomeCategoria;
        $val3 = $descricao;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function excluirCategoria($codigo) {

        $query = "DELETE from categorias where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("i", $val1);
        $val1 = $codigo;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function listarCategoria() {

        $query = "select * from categorias";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    function listarCategoriaQTD() {

        $query = " select *,(select count(ofertas.id) from ofertas where ofertas.id_categoria=categorias.id)qtd from categorias ";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    function consultarCategoria($codigo) {

        $query = "select *.categoria,count(*) from categorias where id=$codigo";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    //*************************************************************	 
    // FIM CATEGORIA
    //*************************************************************
    //*************************************************************	 
    // INICIO LOGIN
    //*************************************************************

    function efetuarLogin($login, $senha) {

        $query = "select * from usuario where usuario='" . $login . "' and senha='" . md5($senha) . "'";
        $result = mysqli_query($this->mysqli, $query);
        $num = mysqli_num_rows($result);

        mysqli_close($this->mysqli);

        if ($num > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    //*************************************************************	 
    // FIM LOGIN
    //*************************************************************
    //*************************************************************	 
    // INICIO CIDADE
    //*************************************************************
    function inserirCidade($nomeCidade, $uf) {

        $query = "INSERT INTO cidades (nome, uf) VALUES (?,?)";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ss", $val2, $val3);
        $val2 = $nomeCidade;
        $val3 = $uf;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function alterarCidade($codigo, $nomeCidade, $uf) {

        $query = "UPDATE cidades SET nome=? , uf=? where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ssi", $val2, $val3, $val1);
        $val1 = $codigo;
        $val2 = $nomeCidade;
        $val3 = $uf;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function excluirCidade($codigo) {

        $query = "DELETE from cidades where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("i", $val1);
        $val1 = $codigo;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function listarCidade() {

        $query = "select * from cidades";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    function consultarCidade($codigo) {

        $query = "select * from cidades where id=$codigo";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    //*************************************************************	 
    // FIM CIDADE
    //*************************************************************
    //*************************************************************	 
    // INICIO CLIENTES
    //*************************************************************
    function inserirClientes($nome, $sobrenome, $email, $senha) {

        $query = "INSERT INTO clientes (nome, sobrenome,email,senha,id_facebook) VALUES (?,?,?,?,?)";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ssss", $val1, $val2, $val3, $val4,$val5);
        $val1 = $nome;
        $val2 = $sobrenome;
        $val3 = $email;
        $val4 = $senha;
        $val5 = $_SESSION['UID'];
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function alterarClientes($id, $nome, $sobrenome, $email, $senha) {

        $query = "UPDATE clientes SET nome=? , sobrenome=?, email=?, senha=? where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ssssi", $val1, $val2, $val3, $val4, $val5);
        $val1 = $nome;
        $val2 = $sobrenome;
        $val3 = $email;
        $val4 = $senha;
        $val5 = $id;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function excluirClientes($codigo) {

        $query = "DELETE from clientes where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("i", $val1);
        $val1 = $codigo;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function listarClientes() {

        $query = "select * from clientes";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    function consultarClientes($id) {

        $query = "select * from clientes where id=$codigo";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    //*************************************************************	 
    // FIM CLIENTE
    //*************************************************************
    //*************************************************************	 
    // INICIO EMPRESAS
    //*************************************************************
    function inserirEmpresa($nome, $sobrenome, $email, $senha) {

        $query = "INSERT INTO clientes (nome, sobrenome,email,senha) VALUES (?,?,?,?)";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ssss", $val1, $val2, $val3, $val4);
        $val1 = $nome;
        $val2 = $sobrenome;
        $val3 = $email;
        $val4 = $senha;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function alterarEmpresa($id, $nome, $sobrenome, $email, $senha) {

        $query = "UPDATE clientes SET nome=? , sobrenome=?, email=?, senha=? where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ssssi", $val1, $val2, $val3, $val4, $val5);
        $val1 = $nome;
        $val2 = $sobrenome;
        $val3 = $email;
        $val4 = $senha;
        $val5 = $id;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function excluirEmpresas($codigo) {

        $query = "DELETE from clientes where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("i", $val1);
        $val1 = $codigo;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function listarEmpresas() {

        $query = "select * from empresas";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    function consultarEmpresa($id) {

        $query = "select * from clientes where id=$codigo";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    //*************************************************************	 
    // FIM CLIENTE
    //*************************************************************
    //*************************************************************	 
    // INICIO OFERTAS
    //*************************************************************
    function inserirOfertas($id_cliente, $promocao, $valorantigo, $valor, $desconto, $qtd, $descricao, $foto1, $foto2, $foto3, $mapa, $datainicial, $datafinal, $principal, $ativo, $categoria) {

        try {
            $query = "INSERT INTO ofertas(id_cliente,valorantigo,valor,desconto,qtd,descricao,foto1,foto2,foto3,mapa,datainicial,datafinal,principal,ativo,promocao,id_categoria)" . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $this->mysqli->prepare($query);
            $stmt->bind_param("iiiiisssssssiisi", $val1, $val14, $val2, $val3, $val4, $val5, $val6, $val7, $val8, $val9, $val10, $val11, $val12, $val13, $val15, $val16);
            $val1 = $id_cliente;
            $val2 = $valor;
            $val3 = $desconto;
            $val4 = $qtd;
            $val5 = $descricao;
            $val6 = $foto1;
            $val7 = $foto2;
            $val8 = $foto3;
            $val9 = $mapa;
            $val10 = $datainicial;
            $val11 = $datafinal;
            $val12 = $principal;
            $val13 = $ativo;
            $val14 = $valorantigo;
            $val15 = $promocao;
            $val16 = $categoria;
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }


       mysqli_close($this->mysqli);
    }

    function alterarOferta($id, $nome, $sobrenome, $email, $senha) {

        $query = "UPDATE clientes SET nome=? , sobrenome=?, email=?, senha=? where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("ssssi", $val1, $val2, $val3, $val4, $val5);
        $val1 = $nome;
        $val2 = $sobrenome;
        $val3 = $email;
        $val4 = $senha;
        $val5 = $id;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function excluirOferta($codigo) {

        $query = "DELETE from clientes where id=?";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("i", $val1);
        $val1 = $codigo;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    function listarOferta() {

        $query = "select * from ofertas where principal=1 and ativo=1 limit 6";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    function listarOfertaComum($limit) {

        $query = "select * from ofertas where principal=0 and ativo=1 limit ".$limit."";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    function listarOfertaEmpresa() {

        $query = "select ofertas.*,empresas.empresa from ofertas,empresas where ofertas.id_cliente=empresas.id";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }

    function consultarOferta($id) {

        $query = "select * from ofertas where id=$id";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }
    
    function listarOfertaporCategoria($id) {

        $query = "select * from ofertas where id_categoria=".$id." and ativo=1";
        $result = mysqli_query($this->mysqli, $query);
        mysqli_close($this->mysqli);
        return $result;
    }
    
     function gerarCupomdaOferta($id_oferta,$cupom,$id_usuario) {

        $query = "INSERT INTO cupons (id_oferta, id_cliente, data, numero) VALUES (?,?,NOW(),?)";
        $stmt = $this->mysqli->prepare($query);
        $stmt->bind_param("iisi", $val1, $val2, $val3, $val4);
        $val1 = $id_oferta;
        $val2 = $id_usuario;
        $val3 = $cupom;
        $stmt->execute();
        mysqli_close($this->mysqli);
    }

    //*************************************************************	 
    // FIM OFERTA
    //*************************************************************
}

?>