# Seguro
modelo básico de seguradora 

ESCOPO BASE PARA ESSE PROJETO (ORIENTAÇÃO INICIAL)

1 - A pasta 'config' armazena a conexão com o banco de Dados 'dataBase' e futuramente os arquivos responsáveis pelo login do usuário

2 - A pasta 'controller' armazena as funções php que pretendo atribuir no projeto, como regras etc. Nela eu organizarei as funções de cada arquivo'tela' com o nome do respectivo arquivo

3 - A pasta 'servicesBack' será responsável por armazenar o BackEnd desse projeto, ela receberá os arquivos com o respectivo nome de suas tabelas SQL e armazenara os códigos 'MÉTODO' de conexão cadastro e edição de cada arquivo. Deles sairam o 'switch ($_REQUEST["acao"])' de cada tabela.

4 - A pasta 'view' seguira uma regra parecida da servicesBack, ela vai armazenar subPastas, com os mesmos nomes dos arquivos criados no servicesBack, com o intuito de padronizar e facilitar a identificação das telas. 
Os arquivos existentes dentro das subPastas serão primeiramente arquivos de cadastro, listagem e edição. 
Eles irão executar os métodos que foram estabelecidos nos arquivos da pasta servicesBack.
Exemplo de cadastro:

servicesBack :
switch ($_REQUEST["acao"]) {

    //MÉTODO DE CADASTRO:
    case 'cadastrar';
}

view -> cadastro :
    <input type="hidden" name="acao" value="cadastrar"> 

die();



Abaixo um exercício para a criação do Banco de dados inicial:
EXERCÍCIO

CRIE UM BANCO DE DADOS PARA UMA SEGURADORA DE CARROS SEGUINDO OS SEGUINTES  CRITÉRIOS:

1) SEGURADORA POSSUI DADOS DO CLENTE (Dados pessoais, documentos e endereço)

2) SEGURADORA POSSUI DADOS DO CARRO (Possui 1 responsável pelo seguro), NO CASO, O RESPONSÁVEL PELO CARRO É O CLIENTE JÁ CADASTRADO

3) QUANDO ACONTECE ALGUMA COISA COM O CARRO , É ABERTA UMA OCORRÊNCIA, DO CARRO, JÁ QUE O CLIENTE PODE TER MAIS DE UM CARRO SEGURADO, PORÉM É NECESÁRIO QUE NO MOMENTO QUE EU VÁ ABRIR A OCORRÊNCIA EU CONSIGA VISUALIZAR O DONO DAQUELA PLACA DE CARRO.
 - NA OCORRÊNCIA TERÁ INFORMAÇÕES COMO DATA, CARRO QUE SOFREU A OCORRÊNCIA, CIDADE E BAIRRO ONDE ACONTECEU A OCORRÊNCIA, TIPO DE OCORRÊNCIA E DESCRIÇÃO DO OCORRIDO E INCLUSIVE SE FOI NECESSÁRIO ABERTURA DE SINISTRO OU ATENDIMENTO COMUM.