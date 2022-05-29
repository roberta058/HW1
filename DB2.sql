create database around;
use around;

create table account(
  id integer primary key auto_increment,
    nome varchar(255) not null,
    cognome varchar(255) not null,
    username varchar(255) not null UNIQUE,
    email varchar(255) not null UNIQUE,
    password varchar(255) not null
);

insert into account(nome, cognome, username, email, password) values ('Roberta','Russo', 'roberta05', 'rr@gm.com', 'Robert39!');


create table recensioni(
  username varchar(255),
  recensione varchar(255)
);

