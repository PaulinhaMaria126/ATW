# Modelo de Documentação para Aplicação PHP com MySQL 
 
## 1 Introdução   
-	**Nome do Projeto:** [Around The World]   
-	**Descrição:** [Around The World é agência de viagens que atua como intermediária na comercialização de serviços turísticos, oferecendo pacotes de transporte. Seu propósito é facilitar a experiência do viajante, proporcionando consultoria especializada e acesso a uma variedade de opções que atendem às necessidades e preferências dos clientes.]   
-	**Tecnologias Utilizadas:** PHP, MySQL, HTML, CSS, JavaScript   
-	**Autor(es):** [Júlia Carla do Carmo Julio; Lucas Ryan da Silva Elias; Paula Maria da Rocha Celidorio; Priscila Alana Floriano ]   
-	**Data de início:** [17/03/2025]   
 
## 2 Estrutura do Projeto   (Pastas)
/ATW2   
│── /site2         # Arquivos acessíveis publicamente (index.php, CSS, JS)   
│── /BD    # Scripts SQL para criação e população do banco  
│── /site2             # Código principal da aplicação   
│──Documentação         # Documentação inicial   
 
 
## 3 Configuração do Ambiente   
### **Requisitos**   
-	Servidor XAMPP
-	PHP Versão 8.2.0
-	MySQL Versão 8.0 a 8.0.41
-	Sistema operacional windows 10
### **Instalação**   1. Clone o repositório:   
   bash    git clone https://github.com/PaulinhaMaria126/ATW.git
2.	Instale as dependências:   
   bash    composer install 
      
3.	Configure o banco de dados:   
-	Crie o banco no MySQL      - Execute o script SQL:   
     sql 
     source database/schema.sql;

*Estrutura do banco de dados*
*bdviagem_cidades* 
DROP TABLE IF EXISTS cidade;

1
CREATE TABLE `cidade (

"Idcidade' int unsigned NOT NULL AUTO INCREMENT,

"nome varchar(45) NOT NULL,

"pais idpais" int NOT NULL, PRIMARY KEY ("Idcidade").
KEY fk cidade_pals_idx" (pais_idpais")
ENGINE-InnoDB AUTO INCREMENT 4 DEFAULT CHARSET utf8mb3;

 *bdviagem_voos*

CREATE TABLE voos (

"idvoos int unsigned NOT NULL AUTO INCREMENT,

"Lida date NOT NULL,

"data volta date NOT NULL,

destino varchar(60) NOT NULL, "idcidade" int NOT NULL,

"hora salda time NOT NULL,

"horar cheg" time NOT NULL, 'hora media time NOT NULL,

PRIMARY KEY (`idvoos"), KEY fk_voos cidadel_idx" ("idcidade')

)ENGINE InnoDB AUTO INCREMENT 2 DEFAULT CHARSET=utf8mb3;

 *bdviagem_país*

CREATE TABLE "pais" (

"idpais" int unsigned NOT NULL AUTO INCREMENT,

"name" varchar(45) NOT NULL,

PRIMARY KEY (`idpais")

)ENGINE-InnoDB AUTO INCREMENT 3 DEFAULT CHARSET=utf8mb3;
