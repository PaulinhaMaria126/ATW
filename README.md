# Modelo de Documentação para Aplicação PHP com MySQL 
 
## 1 Introdução   
-	*Nome do Projeto:* [Around The World]   
-	*Descrição:* [Around The World é agência de viagens que atua como intermediária na comercialização de serviços turísticos, oferecendo pacotes de transporte. Seu propósito é facilitar a experiência do viajante, proporcionando consultoria especializada e acesso a uma variedade de opções que atendem às necessidades e preferências dos clientes.]   
-	*Tecnologias Utilizadas:* PHP, MySQL, HTML, CSS, JavaScript   
-	*Autor(es):* [Júlia Carla do Carmo Julio; Lucas Ryan da Silva Elias; Paula Maria da Rocha Celidorio; Priscila Alana Floriano ]   
-	*Data de início:* [17/03/2025]   
 
## 2 Estrutura do Projeto   (Pastas)
/ATW2   
│── /site2         # Arquivos acessíveis publicamente (index.php, CSS, JS)   
│── /BD    # Scripts SQL para criação e população do banco  
│── /site2             # Código principal da aplicação   
│──Documentação         # Documentação inicial   
 
 
## 3 Configuração do Ambiente   
### *Requisitos*   
-	Servidor XAMPP
-	PHP Versão 8.2.0
-	MySQL Versão 8.0 a 8.0.41
-	Sistema operacional windows 10
### *Instalação*   1. Clone o repositório:   
   bash    git clone https://github.com/PaulinhaMaria126/ATW.git
2.	Instale as dependências:   
   bash    composer install 
      
3.	Configure o banco de dados:   
-	Crie o banco no MySQL      - Execute o script SQL:   
     sql 
     source database/schema.sql;
