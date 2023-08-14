drop table if exists `users`;
create table `users` (
    id int not null auto_increment,
    username text not null,
    password text not null,
    primary key (id)
);
insert into `users` (username, password) values
    ("admin","impossible12373y482734812"),
    ("Alice","()fbdshisadfbhd/AUs"),
    ("Job","?¿·)$U·Jndfkasf");