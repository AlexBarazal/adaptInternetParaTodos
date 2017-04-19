create table administrador
(idAdm int unsigned  not null auto_increment PRIMARY KEY,
nmAdm varchar(100) not null,
emailAdm varchar(200)not null,
senhaAdm varchar(50)not null,
celularAdm int not null,
dtNascimentoAdm date,
sexoAdm char(2),
cpfAdm int,
rgAdm int)

create table visitante
(idVisitante int unsigned  not null auto_increment PRIMARY KEY,
nmVisitante varchar(100)not null,
emailVisitante varchar(200)not null,
senhaVisitante varchar(50)not null,
celularVisitante int,
dtNascimentoVisitante date,
tipoDeficienciaVisitante varchar(15))

create table Cliente
(idCliente int unsigned   not null auto_increment PRIMARY KEY,
nmCliente varchar(200) not null,
emailCliente varchar(100) not null,
senhaCliente varchar(50)not null,
celularCliente int,
cnpj_cpfCliente int not null,
logradouroCliente varchar(100),
numeroCliente int,
complementoCliente varchar(20),
bairroCliente varchar(50),
cepCliente int,
cidadeCliente varchar(50),
estadoCliente char(2))

create table pastaArquivo (idPastaArquivo int unsigned not null auto_increment PRIMARY KEY,
 nmPastaArquivo varchar (80)not null, 
 urlPastaAqruivo varchar(200)not null,
 tamanhoPastaArquivo int , 
 formatoPastaArquivo char(5) , 
 idCliente int not null , 
 CONSTRAINT fk_paCliente FOREIGN KEY(idCliente) references cliente(idCliente))
 engine = MYISAM

create table conteudo
(idConteudo int unsigned not null auto_increment PRIMARY KEY,
nmConteudo varchar(100) not null,
tipoConteudo char(4) not null,
idPastaArquivo int not null,
CONSTRAINT  fk_PastaArquivo FOREIGN KEY (idPastaArquivo) references pastaArquivo(idPastaArquivo))
engine = MYISAM;

create table descricaoConteudo
(idDescricaoConteudo int unsigned not null auto_increment PRIMARY KEY, 
conteudoProgramatico varchar(500), 
objetivo varchar(250),
cargaHorario char(4),
tipoArquivo char(5), 
idConteudo int not null, 
CONSTRAINT fk_Conteudo FOREIGN KEY (idConteudo) references Conteudo(idConteudo)) engine = MYISAM