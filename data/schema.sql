create table posts (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	title varchar(255) not null,
	content text not null
);

insert into posts(title, content) values('Post 1', 'Content 1');
insert into posts(title, content) values('Post 2', 'Content 1');
insert into posts(title, content) values('Post 3', 'Content 1');
insert into posts(title, content) values('Post 4', 'Content 1');
insert into posts(title, content) values('Post 5', 'Content 1');
