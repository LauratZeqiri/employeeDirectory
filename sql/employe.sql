
CREATE TABLE puntoret (
  puntoretid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  emri varchar(20) NOT NULL,
  mbiemri varchar(20) NOT NULL,
  telefoni varchar(20),
  nrpersonal varchar(30),
  datalindjes date,
  datafillimit date,
  shteti varchar(20),
  komuna varchar(20),
  departamentiid int(11) NOT NULL,
  FOREIGN KEY (departamentiid) REFERENCES departamenti(departamentiid)
);


CREATE TABLE departamenti(
departamentiid int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
emri varchar(20) NOT NULL,
pershkrimi text
);

CREATE TABLE administrator(
  id int(11) NOT NULL, AUTO_INCREMENT PRIMARY KEY,
  emri varchar (20) NOT NULL,
  mbiemri varchar (20) NOT NULL,
  email varchar (20) NOT NULL,
  fjalekalimi varchar (30) NOT NULL
);