-- BELAJAR MEMBUAT QUERY insert, update, delete, select 
-- 1. INSERT DATA
-- insert into NAMA_TABLE (kolom1, kolom2, dst) values ('nilai1', 'nilai2', 'dst');
insert into users (username, password, nama, email) values ('admin', SHA2('admin', 256), 'Admin Eazy', 'admin@eazycamper.com');
insert into users (username, password, nama, email) values ('user1', SHA2('user', 256), 'User 1 Eazy', 'user1@eazycamper.com');
insert into users (username, password, nama, email) values ('user2', SHA2('user', 256), 'User 2 Eazy', 'user2@eazycamper.com');
insert into users (username, password, nama, email) values ('user3', SHA2('user', 256), 'User 3 Eazy', 'user3@eazycamper.com');
insert into users (username, password, nama, email) values ('user4', SHA2('user', 256), 'User 4 Eazy', 'user4@eazycamper.com');
-- 2. UPDATE DATA
-- update NAMA_TABLE set kolom1='nilai', kolom2='nilai' where id=1
update users set nama='User 4 Eazy Updated' where id = 5;
-- 3. DELETE DATA
-- delete from NAMA_TABLE where id=1
delete from users where id = 5;
-- 4. SELECT DATA
-- SELECT * from NAMA_TABLE
select * from users u; -- select all data
select * from users u limit 3; -- select dan limit hanya 3 data
select * from users u order by u.id asc; -- pengurutan data dari kecil ke besar berdasarkan id nya 
select * from users u order by u.id desc limit 2; -- select limit 2 data terakhir
select * from users u where u.id IN('1', '3'); -- select beberapa data berdasarkan id menggunakan in
select * from users u where u.id = 3; -- select satu data dengan id = 3
select u.nama, u.email from users u; -- select data berdasarkan kolom nya
