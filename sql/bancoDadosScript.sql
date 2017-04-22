reate table administrador
(idAdmin int unsigned  not null auto_increment,
nmAdmin varchar(100) not null,
celularAdmin int not null,
dataNascAdmin date notnull,
emailAdm varchar(200)not null,
generoAdmin char(2)not null,
cpfAdmin int not null,
rgAdm int not null,
(idAdministrador int not null primary key))

create table visitante
(idVisitante int unsigned  not null auto_increment,
nmVisitante varchar(100)not null,
celularVisitante int not null,
dataNascVisitante date not null,
emailVisitante varchar(200)not null,
tipoDeficiencia char(2) not null,
(idVisitante int not null primary key))

create table produtor
(idProdutor int unsigned   not null auto_increment,
nmProdutor varchar(200) not null,
cnpjProdutor int not null,
Logradouro varchar(100)not null,
numero int not null,
complemento varchar(20) not null,
bairro varchar(50)not null,
cep int not null,
cidade varchar(50) not null,
estado char(2),
emailProdutor varchar(100) not null,
idProdutor not null primary key))

create table pastaArquivo
(idArquivo int unsigned  not null auto_increment
nmArquivo varchar (80)not null,
url varchar(200)not null,
tamanho int not null,
formato char(5) not null,
idDescricaoConteudo int not null,
idProdutor int not null,
idAdmin int not null,
(idPastaArquivo not null primary key),
CONSTRAINT fk_admin FOREIGN KEY(idAdmin) references administrador(idAdmin),
CONSTRAINT fk_produtor FOREIGN KEY (idProdutor) references produtor(idProdutor))
engine = MYISAM;

create table conteudo
(idConteudo int unsigned not null auto_increment,
nmConteudo varchar(100) not null,
tipoConteudo char(4) not null,
idPastaArquivo int not null,
(idConteudo int not null primary key),
CONSTRAINT  fk_PastaArquivo FOREIGN KEY (idPastaArquivo) references pastaArquivo(idPastaArquivo))
engine = MYISAM;

create table areaVisitante
(idConteudo int not null,
idVisitante int not null,
(idConteudo, idVisitante  int not null primary key)
CONSTRAINT fk_conteudo FOREIGN KEY (idConteudo) references conteudo(idConteudo),
CONSTRAINT fk_Visitante FOREIGN KEY (idVisitante) references visitante(idVisitante))
engine= MYISAM;

create descricaoConteudo
(idDescricaoConteudo int unsigned  not null  auto_increment,
conteudoProgramatico varchar(1000)not null,
objetivo varchar(250)) not null,
cargaHorario char(4) not null,
quantidadeArquivo int not null,
tipoArquivo char(5)not null,
idConteudo not null,
(idDescricaoConteudo not null primary key),
CONSTRAINT  fk_Conteudo FOREIGN KEY (idConteudo) references Conteudo(idConteudo))
engine = MYISAM;
