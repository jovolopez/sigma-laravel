use laravel;
select * from users;
UPDATE users
SET is_admin = 1
WHERE id = 1;
select * from productos;
insert into categorias(id, nombre) values (default, "Calzados");
insert into categorias(id, nombre) values (default, "Camisas");
insert into categorias(id, nombre) values (default, "Pantalones");
insert into categorias(id, nombre) values (default, "Accesorios");
INSERT into productos(id, titulo, precio, descripcion, categoria_id, stock) values(default, "HP Pavillion i5 7500u", 1700, "Productazo", 1, 34);
INSERT into productos(id, titulo, precio, descripcion, categoria_id, stock) values(default, "HP Pavillion i3 7200u OFERTA", 1230, "Excelente producto", 2, 22);
INSERT into productos(id, titulo, precio, descripcion, categoria_id, stock) values(default, "Macbook pro i7 9960k", 4100, "El mejor producto del mundo", 3, 12);
INSERT into productos(id, titulo, precio, descripcion, categoria_id) values(default, "Mac mini i7 9990k NVIDIA RTX", 10450, "Bestoproducto ever", 4);