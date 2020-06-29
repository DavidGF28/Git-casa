-- create Database proyecto;

--Create table respuestas
--(Id_respuesta integer not null primary key,
-- enunciado_respuesta varchar (999),
-- respuesta_correcta integer,
-- Id_pregunta integer);

--create table preguntas
--(Id_pregunta integer not null primary key,
-- enunciado_pregunta varchar (999),
-- Id_test integer,
-- Id_categoria_p integer);

--Create Table Test
--(Id_Test integer not null primary key,
--Descripcion varchar (999),
--fecha date,
--Id_categoria_T integer);

Create Table Categorias
(Id_Categoria integer not null,
Id_categoria_T integer,
Id_categoria_p integer,
Descripcion varchar (999),
Nombre Varchar (999),
primary key(Id_Categoria,Id_categoria_T,Id_categoria_p)
)

--alter table Respuestas
--add constraint Preguntas Foreign key (id_pregunta)
--references Preguntas (Id_pregunta)

--alter table Preguntas
--add constraint Test Foreign key (id_Test)
--references Test (Id_Test)

