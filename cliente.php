<?php	
//github.com/rafaelflorindo/InformaticaIntegrado/
	
class Cliente{
	public $id, $nome, $telefone, $celular, $email;
	public $endereco, $numero, $bairro, $cidade, $cep, $dataCadastro, $situacao ;
	/********************************************************/
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setCelular($celular){
		$this->celular = $celular;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	public function setNumero($numero){
		$this->numero = $numero;
	}
	public function setBairrp($bairro){
		$this->bairro = $bairro;	
	}
	public function setCidade($cidade){
		$this->cidade = $cidade;	
	}
	public function setCep($cep){
		$this->cep = $cep;	
	}
	public function setDatacadastro($dataCadastro){
		$this->dataCadastro = $dataCadastro;	
	}
	public function setId($id){
		$this->id = $id;	
	}
	public function setSituacao($situacao){
	}	
	/********************************************************/
	public function getNome(){
		return $this->nome;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getCelular(){
		return $this->celular;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function getNumero(){
		return $this->numero;
	}
	public function getBairro(){
		return $this->bairro;
	}
	public function getCidade(){
		return $this->cidade;
	}
	public function getCep(){
		return $this->cep;
	}
	public function getDataCadastro(){
		return $this->dataCadastro;
	}
	public function getId(){
		return $this->dataId;
	}
	public function getSituacao(){
		return $this->situacao;
	}
	/********************************************************/
	public function cadastrar($dados){
		//$dados=array($titulo, $descricao, $autor, $dataPublicacao, $curso)
		list($nome, $telefone, $celular, $email, $endereco, $numero, $bairro, $cidade, $cep, $dataCadastro, $situacao) = $dados;
		
		$this->setNome($nome);
		$this->setTelefone($telefone);
		$this->setCelular($celular);
		$this->setEmail($email);
		$this->setEndereco($endereco);
		$this->setNumero($numero);
		$this->setBairro($bairro);
		$this->setCidade($cidade);
		$this->setCep($cep);
		$this->setDatacadastro($dataCadastro);
		$this->setSituacao($situacao);
		
		$conectar = new mysqli("localhost","root","","baseLisboa");
		$sql = "insert into cliente 
					(nome, telefone, celular, email, endereço, numero, bairro, cidade, cep, dataCadastro, situação)
					values (
					'{$this->getNome()}', 
					'{$this->getTelefone()}',
					'{$this->getCelular()}', 
					'{$this->getEmail()}',
					'{$this->getEndereco()}'
					'{$this->getNumero()}'
					'{$this->getBairro()}'
					'{$this->getCidade()}'
					'{$this->getCep()}'
					'{$this->getDataCadastro()}'
					'{$this->getSituacao()}'
					)		
		";		
		$gravar = $conectar->query($sql);
		#verificar quantos registros foram afetados com o $sql
		$num = $conectar->affected_rows;
		if($num==1) {
			echo "<fieldset>";
			echo "<h2>Os dados abaixo foram armazenados na classe com sucesso!!!</h2>";
			echo "<br>Nome: ". $this->getNome();
			echo "<br>Telefone: ". $this->getTelefone();
			echo "<br>Celular: ". $this->getCelular();	
			echo "<br>Email: ". $this->getEmail();
			echo "<br>Endereço: ". $this->getEndereco();
			echo "<br>Numero: ". $this->geNumero();
			echo "<br>Bairro: ". $this->getBairro();
			echo "<br>Cidade: ". $this->getCidade();
			echo "<br>Cep: ". $this->getCep();
			echo "<br>DataCadastro: ". $this->getDataCadastro();
			echo "</fieldset>";
		}else {
			echo "<fieldset>";
			echo "Erro ao gravar os dados";	
			echo "</fieldset>";
		}
	}
	public function buscarTodos(){
	
	
		$sql = "select id, nome, telefone, celular, email from clientes ORDER by nome desc ";
	
		$conectar = new mysqli("localhost","root","","baseLisboa");
		$gravar = $conectar->query($sql);
	
		$clientes = array();
		while($linha = $gravar->fetch_array()) {
			$clientes[] = $linha;
		}
		return $clientes;
		}
	
}
?>





