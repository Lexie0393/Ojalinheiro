INSERT INTO raza(nombre, descripcion) VALUES ('Gallina de Mos', 'La gallina de Mos fue la primera autóctona que se empezó a recuperar en Galicia. Estando en peligro de extinción, en el año 1936 se llevó a cabo un programa de selección de la raza en la parroquia de San Julián de Mos del municipio de Castro de Rei (Lugo). De ahí el nombre de esta raza de gallina, "galiña de Mos", en honor a la parroquia donde comenzó su recuperación. Se caracteriza por su tamaño mediano y su color leonado con un matiz rojo-caoba claro.'),
('Gallina de Villalba', 'Proviene de la comarca de A  Mariña en la provincia de Lugo. Se distingue por su tamaño mediano, su plumaje marrón con tonalidades doradas y su cresta en forma de rosa.'),
('Gallina Piñeira', 'Esta raza de gallinas han sido bautizadas como "Piñeiras" por el color y forma de su plumaje, que se asemeja a las piñas de los pinares. Son la raza con un tamaño más pequeño.');

INSERT INTO gallina(id, nombre, fecha_nacimiento, fecha_alta, nombre_raza) VALUES 
(1, 'Pepa', '2022-02-01', '2022-07-01', 'Gallina de Mos'),
(2, 'Pistacho', '2022-02-01', '2022-07-01', 'Gallina de Mos'),
(3, 'Macarrón', '2020-06-01', '2020-11-01', 'Gallina de Mos'),
(4, 'Zipi', '2023-08-11', '2024-01-11', 'Gallina de Mos'),
(5, 'Papanatas', '2024-02-01', '2024-07-01', 'Gallina de Mos'),
(6, 'Cacao', '2024-09-22', '2025-02-22', 'Gallina de Villalba'),
(7, 'M. Rajoy', '2023-02-01', '2023-07-01', 'Gallina de Villalba'),
(8, 'Commodo', '2022-10-10', '2023-03-10', 'Gallina de Villalba'),
(9, 'Máximo Décimo Meridio', '2022-11-22', '2023-04-22', 'Gallina de Villalba'),
(10, 'Turuleca', '2023-02-01', '2023-07-01', 'Gallina de Villalba'),
(11, 'Magricela', '2024-02-01', '2024-07-01', 'Gallina de Villalba'),
(12, 'Chiquito', '2024-05-28', '2024-10-28', 'Gallina Piñeira'),
(13, 'Piña', '2024-02-01', '2024-07-01', 'Gallina Piñeira'),
(14, 'Leo Messi', '2023-06-24', '2023-11-24', 'Gallina Piñeira'),
(15, 'Zape', '2023-08-11', '2024-01-11', 'Gallina Piñeira');

INSERT INTO baja (id_gallina, fecha, causa) VALUES
(8, '2025-08-01', 'Sacrificada'),
(9, '2025-08-01', 'Muerte natural');

INSERT INTO produccion (id_gallina, fecha_recogida, cantidad) VALUES
(1, '2025-08-13', 0),
(2, '2025-08-13', 1),
(3, '2025-08-13', 1),
(4, '2025-08-13', 2),
(5, '2025-08-13', 1),
(6, '2025-08-13', 0),
(7, '2025-08-13', 0),
(8, '2025-08-13', 1),
(9, '2025-08-13', 1),
(10, '2025-08-13', 2),
(11, '2025-08-13', 2),
(12, '2025-08-13', 1),
(13, '2025-08-13', 0),
(14, '2025-08-13', 0),
(15, '2025-08-13', 0);

INSERT INTO produccion (id_gallina, fecha_recogida, cantidad) VALUES
(1, '2025-08-14', 0),
(2, '2025-08-14', 1),
(3, '2025-08-14', 1),
(4, '2025-08-14', 0),
(5, '2025-08-14', 0),
(6, '2025-08-14', 0),
(7, '2025-08-14', 0),
(8, '2025-08-14', 1),
(9, '2025-08-14', 1),
(10, '2025-08-14', 1),
(11, '2025-08-14', 1),
(12, '2025-08-14', 1),
(13, '2025-08-14', 0),
(14, '2025-08-14', 0),
(15, '2025-08-14', 0);