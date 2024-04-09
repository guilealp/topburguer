drop database if exists lanchonete;

create database lanchonete;

use lanchonete;

create table produtos(
	id int auto_increment,
	nome varchar(80) not null,
	preco decimal(10,2) not null,
	ingredientes varchar(255) not null,
	imagem varchar(255) not null,
	primary key(id)
);

create table clientes(
	id int auto_increment,
	nome varchar(80) not null,
	telefone varchar(11) not null,
	endereco varchar(255) not null,
	email varchar(255) not null unique,
	cpf varchar(11) not null unique,
	password varchar(255) not null,
	foto varchar(255) not null,
	primary key(id)
);

create table status(
	id int auto_increment,
	status varchar(45),
	primary key(id)
);

insert into status (status) values
('em aberto'),
('em produção'),
('em rota de entrega'),
('pronto para retirada'),
('finalizado');

create table pedido(
	id int auto_increment,
	clientes_id int not null,
	status_id int not null,
	primary key(id),
	constraint fk_clientes_pedido
		foreign key(clientes_id)
		references clientes(id),
	constraint fk_status_pedido
		foreign key(status_id)
		references status(id)
);

create table produtos_has_pedido(
	produtos_id int not null,
	pedido_id int not null,
	quantidade varchar(45) not null,
	valor_total decimal(10,2) not null,
	primary key(produtos_id,pedido_id),
	constraint fk_produtos_produtos_has_pedido
		foreign key(produtos_id)
		references produtos(id),
	constraint fk_pedido_produtos_has_pedido
		foreign key(pedido_id)
		references pedido(id)
);