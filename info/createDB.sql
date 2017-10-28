Create database labDB;

Create Table Users(
  uName VARCHAR(30) NOT NULL PRIMARY KEY,
  uPass varchar(300) NOT NULL,
  fName varchar(30) not null,
  lName varchar(30) not null,
  uEmail varchar(40) not nulL,
  uGender char(1) not null,
  uCountry varchar(30) not null);

  INSERT INTO Users
  VALUES ('uname', 'upass', 'fname', 'lname','email','M','Mexico'),
         ('CrisTJ', 'babyt', 'cristy', 'jimenez','cristy.ji@hotmail.com','F','Mexico'),
         ('yoolea', 'ula', 'juulia', 'suominen','juls@gmail.com','F','Mexico'),
         ('venie', 'venie', 'venla', 'räsänen','venie@gmail.com','F','Mexico'),
         ('lis', 'rain', 'lisanne', 'bedaux','lisanne@gmail.com','F','Mexico'),
         ('matteo', 'rain', 'Mathew', 'russo','matteo@gmail.com','M','Mexico');

Create table comments(
  id int NOT NULL AUTO_INCREMENT PRIMARY Key,
  uName varchar(30) not null,
  comment TINYTEXT  not null,
   FOREIGN KEY (uName) REFERENCES Users(uName)
);

Insert into comments (uName, comment)
values ('CrisTJ','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua [...]'),
       ('yoolea','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua [...]'),
       ('venie','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua [...]'),
       ('lis','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua [...]'),
       ('matteo','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua [...]');

Create table friendList(
  PRIMARY KEY (idFriend, uName),
  idFriend varchar(30) not null,
  uName varchar(30) not null,
  status varchar(10) not null,
  FOREIGN KEY (uName) REFERENCES Users(uName)
)

Insert into friendList (idFriend, uName, status)
values ('yoolea', 'matteo' , 'Pending');
