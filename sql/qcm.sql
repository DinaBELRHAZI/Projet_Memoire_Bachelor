/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     27/02/2020 14:48:04                          */
/*==============================================================*/


drop table if exists CHAPITRE_COURS_MATIERE;

drop table if exists CLASSE;

drop table if exists COURS_MATIERE;

drop table if exists EST_COMPOSE;

drop table if exists ETUDIANT;

drop table if exists HISTORIQUE_DETAILLE;

drop table if exists MATIERE;

drop table if exists PASSE_TEST;

drop table if exists PROFESSEUR;

drop table if exists QUESTION;

drop table if exists REPONSE;

drop table if exists TEST;

/*==============================================================*/
/* Table: CHAPITRE_COURS_MATIERE                                */
/*==============================================================*/
create table CHAPITRE_COURS_MATIERE
(
   ID_COURS             int not null,
   ID_CHAP              int not null,
   ID_PROF              int,
   CHAPITRE             text,
   DESCRIPTION          text,
   FICHIER              text,
   primary key (ID_COURS, ID_CHAP)
);

/*==============================================================*/
/* Table: CLASSE                                                */
/*==============================================================*/
create table CLASSE
(
   ID_CLASSE            int not null,
   ID_ETUDIANT          int,
   NOM_CLASSE           text,
   primary key (ID_CLASSE)
);

/*==============================================================*/
/* Table: COURS_MATIERE                                         */
/*==============================================================*/
create table COURS_MATIERE
(
   ID_COURS             int not null,
   ID_CLASSE            int,
   ID_PROF              int,
   COURS                text,
   DESCRIPTION_COURS    text,
   primary key (ID_COURS)
);

/*==============================================================*/
/* Table: EST_COMPOSE                                           */
/*==============================================================*/
create table EST_COMPOSE
(
   ID_TEST              int not null,
   ID_QUESTION          int not null,
   primary key (ID_TEST, ID_QUESTION)
);

/*==============================================================*/
/* Table: ETUDIANT                                              */
/*==============================================================*/
create table ETUDIANT
(
   ID_ETUDIANT          int not null,
   NOM_ETUDIANT         text,
   PRENOM_ETUDIANT      text,
   MAIL                 text,
   MDP_E                text,
   primary key (ID_ETUDIANT)
);

/*==============================================================*/
/* Table: HISTORIQUE_DETAILLE                                   */
/*==============================================================*/
create table HISTORIQUE_DETAILLE
(
   ID_ETUDIANT          int not null,
   ID_QUESTION          int not null,
   ID_REPONSE           int not null,
   ID_TEST              int not null,
   NB_POINT_OBTENU      int,
   OBSERVATION_PAR_REPONSE text,
   DATE                 date,
   primary key (ID_QUESTION, ID_ETUDIANT, ID_REPONSE, ID_TEST)
);

/*==============================================================*/
/* Table: MATIERE                                               */
/*==============================================================*/
create table MATIERE
(
   ID_COURS             int not null,
   ID_MATIERE           int not null,
   NOM_MATIERE          text,
   DESCRIPTION_MATIERE  text,
   primary key (ID_COURS, ID_MATIERE)
);

/*==============================================================*/
/* Table: PASSE_TEST                                            */
/*==============================================================*/
create table PASSE_TEST
(
   ID_ETUDIANT          int not null,
   ID_TEST              int not null,
   NOTE_OBTENU          int,
   OBSERVATIONS         text,
   TEST_ADMISSION       text,
   NB_POINT_OBTENU      int,
   DATE                 date,
   primary key (ID_ETUDIANT, ID_TEST)
);

/*==============================================================*/
/* Table: PROFESSEUR                                            */
/*==============================================================*/
create table PROFESSEUR
(
   ID_PROF              int not null,
   NOM_PROF             text,
   PRENOM_PROF          text,
   MAIL                 text,
   MDP                  text,
   primary key (ID_PROF)
);

/*==============================================================*/
/* Table: QUESTION                                              */
/*==============================================================*/
create table QUESTION
(
   ID_QUESTION          int not null,
   ID_PROF              int,
   ID_CLASSE            int,
   ID_COURS             int,
   ID_CHAP              int,
   DESCRIPTION_QUESTION text,
   FICHIER_QUESTION     text,
   TEXTE_QUESTION       text,
   NB_POINT_QUESTION    int,
   NB_REPONSES          int,
   DATE_CREATION        date,
   TEMPS_QUESTION       time,
   primary key (ID_QUESTION)
);

/*==============================================================*/
/* Table: REPONSE                                               */
/*==============================================================*/
create table REPONSE
(
   ID_QUESTION          int not null,
   ID_REPONSE           int not null,
   DESCRIPTION_REPONSE  text,
   FICHIER_REPONSE      text,
   TEXTE_REPONSE        text,
   NB_POINT_REPONSE     int,
   FLAG_BONNE_REPONSE   text,
   FLAG_MAUVAISE_REPONSE text,
   primary key (ID_QUESTION, ID_REPONSE)
);

/*==============================================================*/
/* Table: TEST                                                  */
/*==============================================================*/
create table TEST
(
   ID_TEST              int not null,
   ID_CLASSE            int,
   ID_COURS             int not null,
   ID_MATIERE           int not null,
   ID_PROF              int,
   DESCRIPTION_TEST_MATIERE text,
   NOM_CREATEUR_TEST    text,
   DATE_CREATION        date,
   NB_QUESTION          int,
   NB_POINT             int,
   TEMPS_ESTIME         time,
   FLAG_GENERATION_ALEATOIR text,
   FLAG_CONTROLE        text,
   FLAG_TEST_ADMISSION  text,
   NIVEAU               text,
   TEST_ADMISSION_REGROUPE text,
   TEST_PREREQUIS       text,
   TEST_VALIDATION_ACQUIS text,
   primary key (ID_TEST)
);

alter table CHAPITRE_COURS_MATIERE add constraint FK_APPARTENIR foreign key (ID_COURS)
      references COURS_MATIERE (ID_COURS) on delete restrict on update restrict;

alter table CHAPITRE_COURS_MATIERE add constraint FK_A_FAIT_AUSSI foreign key (ID_PROF)
      references PROFESSEUR (ID_PROF) on delete restrict on update restrict;

alter table CLASSE add constraint FK_EST_EN foreign key (ID_ETUDIANT)
      references ETUDIANT (ID_ETUDIANT) on delete restrict on update restrict;

alter table COURS_MATIERE add constraint FK_A_FAIT foreign key (ID_PROF)
      references PROFESSEUR (ID_PROF) on delete restrict on update restrict;

alter table COURS_MATIERE add constraint FK_POUR_ foreign key (ID_CLASSE)
      references CLASSE (ID_CLASSE) on delete restrict on update restrict;

alter table EST_COMPOSE add constraint FK_EST_COMPOSE foreign key (ID_TEST)
      references TEST (ID_TEST) on delete restrict on update restrict;

alter table EST_COMPOSE add constraint FK_EST_COMPOSE2 foreign key (ID_QUESTION)
      references QUESTION (ID_QUESTION) on delete restrict on update restrict;

alter table HISTORIQUE_DETAILLE add constraint FK_HISTORIQUE_DETAILLE foreign key (ID_ETUDIANT)
      references ETUDIANT (ID_ETUDIANT) on delete restrict on update restrict;

alter table HISTORIQUE_DETAILLE add constraint FK_HISTORIQUE_DETAILLE2 foreign key (ID_QUESTION, ID_REPONSE)
      references REPONSE (ID_QUESTION, ID_REPONSE) on delete restrict on update restrict;

alter table HISTORIQUE_DETAILLE add constraint FK_HISTORIQUE_DETAILLE3 foreign key (ID_TEST)
      references TEST (ID_TEST) on delete restrict on update restrict;

alter table MATIERE add constraint FK_CONTENIR foreign key (ID_COURS)
      references COURS_MATIERE (ID_COURS) on delete restrict on update restrict;

alter table PASSE_TEST add constraint FK_PASSE_TEST foreign key (ID_ETUDIANT)
      references ETUDIANT (ID_ETUDIANT) on delete restrict on update restrict;

alter table PASSE_TEST add constraint FK_PASSE_TEST2 foreign key (ID_TEST)
      references TEST (ID_TEST) on delete restrict on update restrict;

alter table QUESTION add constraint FK_PORTE foreign key (ID_COURS, ID_CHAP)
      references CHAPITRE_COURS_MATIERE (ID_COURS, ID_CHAP) on delete restrict on update restrict;

alter table QUESTION add constraint FK_POUR foreign key (ID_CLASSE)
      references CLASSE (ID_CLASSE) on delete restrict on update restrict;

alter table QUESTION add constraint FK_SAISI_ foreign key (ID_PROF)
      references PROFESSEUR (ID_PROF) on delete restrict on update restrict;

alter table REPONSE add constraint FK_REPONDS foreign key (ID_QUESTION)
      references QUESTION (ID_QUESTION) on delete restrict on update restrict;

alter table TEST add constraint FK_AVOIR foreign key (ID_COURS, ID_MATIERE)
      references MATIERE (ID_COURS, ID_MATIERE) on delete restrict on update restrict;

alter table TEST add constraint FK_CORRESPONS_A foreign key (ID_CLASSE)
      references CLASSE (ID_CLASSE) on delete restrict on update restrict;

alter table TEST add constraint FK_SAISI foreign key (ID_PROF)
      references PROFESSEUR (ID_PROF) on delete restrict on update restrict;

