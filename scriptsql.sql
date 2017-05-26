CREATE TABLE categorie (
    id_categorie serial,
    lib_categorie varchar(50) not null,
    CONSTRAINT pk_categorie PRIMARY KEY("id_categorie")
);

CREATE TABLE role (
    id_role serial,
    lib_role varchar(50) not null,
    CONSTRAINT pk_role PRIMARY KEY("id_role")
);

CREATE TABLE utilisateur (
    id_utilisateur serial,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    sexe varchar(10)not null,
    date_naiss date not null,
    mail varchar(50) not null,
    mdp varchar(50) not null,
    id_categorie integer,
    id_role integer not null,
    CONSTRAINT pk_utilisateur PRIMARY KEY("id_utilisateur"),
    CONSTRAINT "fk_categorie" FOREIGN KEY("id_categorie") REFERENCES categorie("id_categorie") on update cascade on delete cascade,
    CONSTRAINT "fk_role" FOREIGN KEY("id_role") REFERENCES role("id_role") on update cascade on delete cascade
);

CREATE TABLE type (
    id_type serial,
    lib_type varchar(50) not null,
    CONSTRAINT pk_type PRIMARY KEY("id_type")
);

CREATE TABLE activite (
    id_activite serial,
    nom_activite varchar(100) not null,
    description varchar(500) not null,
    prix integer, 
    date_activite date not null,
    id_type integer not null,
    id_categorie integer,
    place integer,
    CONSTRAINT pk_activite PRIMARY KEY("id_activite"),
    CONSTRAINT "fk_categorie_act" FOREIGN KEY("id_categorie") REFERENCES categorie("id_categorie") on update cascade on delete cascade,
    CONSTRAINT "fk_type_act" FOREIGN KEY("id_type") REFERENCES type("id_type") on update cascade on delete cascade
);

CREATE TABLE message (
    id_message serial,
    lib_message varchar(100) not null,
    texte_message varchar(500) not null,
    date_message date not null,
    id_utilisateur integer not null,
    CONSTRAINT pk_message PRIMARY KEY("id_message"),
    CONSTRAINT "fk_utilisateur_mes" FOREIGN KEY("id_utilisateur") REFERENCES utilisateur("id_utilisateur") on update cascade on delete cascade
);

CREATE TABLE encadrer (
    id_utilisateur integer not null,
    id_activite integer not null,
    CONSTRAINT pk_encadrer PRIMARY KEY("id_utilisateur","id_activite"),
    CONSTRAINT "fk_utilisateur_enc" FOREIGN KEY("id_utilisateur") REFERENCES utilisateur("id_utilisateur") on update cascade on delete cascade,
    CONSTRAINT "fk_activite_enc" FOREIGN KEY("id_activite") REFERENCES activite("id_activite") on update cascade on delete cascade
);

CREATE TABLE inscrire (
    id_utilisateur integer not null,
    id_activite integer not null,
    CONSTRAINT pk_inscrire PRIMARY KEY("id_utilisateur","id_activite"),
    CONSTRAINT "fk_utilisateur_ins" FOREIGN KEY("id_utilisateur") REFERENCES utilisateur("id_utilisateur") on update cascade on delete cascade,
    CONSTRAINT "fk_activite_ins" FOREIGN KEY("id_activite") REFERENCES activite("id_activite") on update cascade on delete cascade
);

INSERT INTO categorie(lib_categorie) VALUES ('-10');
INSERT INTO categorie(lib_categorie) VALUES ('-15');
INSERT INTO categorie(lib_categorie) VALUES ('-20');
INSERT INTO categorie(lib_categorie) VALUES ('+21');
INSERT INTO categorie(lib_categorie) VALUES ('sans categorie');

INSERT INTO role(lib_role) VALUES ('adherent');
INSERT INTO role(lib_role) VALUES ('animateur');
INSERT INTO role(lib_role) VALUES ('administrateur');

INSERT INTO type(lib_type) VALUES ('sport');
INSERT INTO type(lib_type) VALUES ('culturel');
INSERT INTO type(lib_type) VALUES ('scolaire');
INSERT INTO type(lib_type) VALUES ('voyage');
INSERT INTO type(lib_type) VALUES ('jeu');