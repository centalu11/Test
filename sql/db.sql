use mediclock_db;

CREATE TABLE IF NOT EXISTS feedbacks (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstName VARCHAR(225),
  lastName VARCHAR(225),
  contactNo VARCHAR(225),
  email VARCHAR(225),
  feedback VARCHAR(225)
);

CREATE TABLE IF NOT EXISTS users (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(225),
  email VARCHAR(225),
  password VARCHAR(225),
  firstName VARCHAR(225),
  middleInitial VARCHAR(225),
  lastName VARCHAR(225),
  role VARCHAR(225),
  sectionID VARCHAR(225),
  contactNo VARCHAR(225),
  address VARCHAR(225),
  age VARCHAR(225),
  gender VARCHAR(225),
  civilStatus VARCHAR(225)
);

CREATE TABLE IF NOT EXISTS sections (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  sectionName VARCHAR(225)
);

INSERT INTO sections (sectionName) VALUES ('COVID-19 Patient');
INSERT INTO sections (sectionName) VALUES ('Cancer Patient');
INSERT INTO sections (sectionName) VALUES ('Allergy Treatment');
INSERT INTO sections (sectionName) VALUES ('Rehabilitation');
INSERT INTO sections (sectionName) VALUES ('High Blood Pressure');
INSERT INTO sections (sectionName) VALUES ('Medication');
