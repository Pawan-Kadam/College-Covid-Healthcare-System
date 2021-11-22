DROP DATABASE covid_healthcare;
CREATE DATABASE covid_healthcare;

USE covid_healthcare;

SELECT DATABASE();

CREATE TABLE student (
	Roll_NO CHAR(8) NOT NULL PRIMARY KEY,
	First_Name VARCHAR(30) NOT NULL,
	Last_Name VARCHAR(30) NOT NULL,
	Department VARCHAR(30) NOT NULL,
	Current_Year VARCHAR(10) NOT NULL,
	Aadhaar_No INT NOT NULL UNIQUE,
	Email VARCHAR(50) NOT NULL UNIQUE,
	Mobile_No INT NOT NULL,
	Will_to_Donate_Plasma CHAR(1) NOT NULL
);


CREATE TABLE staff (
	Staff_Id CHAR(8) NOT NULL PRIMARY KEY,
	First_Name VARCHAR(30) NOT NULL,
	Last_Name VARCHAR(30) NOT NULL,
	Department VARCHAR(30) NOT NULL,
	Aadhaar_No INT NOT NULL UNIQUE,
	Email VARCHAR(50) NOT NULL UNIQUE,
	Mobile_No INT NOT NULL,
	Will_to_Donate_Plasma CHAR(1) NOT NULL
);


CREATE TABLE vaccine (
	Certificate_Id CHAR(15) NOT NULL PRIMARY KEY, 
	Vaccine_Name VARCHAR(10) NOT NULL,
	Dose1_Date DATE NOT NULL,
	Dose2_Date DATE,
	FOREIGN KEY (Certificate_Id) REFERENCES student(Roll_NO),
	FOREIGN KEY (Certificate_Id) REFERENCES staff(Staff_Id)
);


CREATE TABLE plasma (
	id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
	Name VARCHAR(50) NOT NULL,
	Aadhaar_No INT NOT NULL UNIQUE,
	Email VARCHAR(50) NOT NULL UNIQUE,
	Mobile_No INT NOT NULL
);


CREATE TABLE ngo (
	Registration_Id VARCHAR(30) NOT NULL PRIMARY KEY,
	Name VARCHAR(200) NOT NULL,
	Email VARCHAR(50) NOT NULL UNIQUE,
	Contact_No INT NOT NULL UNIQUE,
	Address VARCHAR(300) NOT NULL,
	FOREIGN KEY (Registration_Id) REFERENCES plasma(id)
);