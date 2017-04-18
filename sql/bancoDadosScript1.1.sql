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

