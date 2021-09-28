CREATE TABLE Locker(
Locker_Number INTEGER PRIMARY KEY CHECK (Locker_Number > 0 AND Locker_Number < 1000)
);

CREATE TABLE Visitor(
Visitor_Name CHAR(20),
Visitor_PhoneNumber CHAR(10),
Visitor_Age INTEGER CHECK (Visitor_Age > 2),
PRIMARY KEY(Visitor_Name, Visitor_PhoneNumber)
);

CREATE TABLE StoresBelongings(
Locker_Number INTEGER UNIQUE,
Visitor_Name CHAR(20) UNIQUE,
Visitor_PhoneNumber CHAR(10) UNIQUE,
PRIMARY KEY(Locker_Number, Visitor_Name, Visitor_PhoneNumber),
FOREIGN KEY(Locker_Number) REFERENCES Locker(Locker_Number)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY(Visitor_Name, Visitor_PhoneNumber) REFERENCES Visitor(Visitor_Name, Visitor_PhoneNumber)
ON DELETE CASCADE
ON UPDATE CASCADE
);

CREATE TABLE Brings_Infant(
Infant_Name CHAR(20),
Infant_Age INTEGER CHECK (Infant_Age >= 0 AND Infant_Age <= 2),
Visitor_Name CHAR(20),
Visitor_PhoneNumber CHAR(10),
PRIMARY KEY(Infant_Name, Visitor_Name, Visitor_PhoneNumber),
FOREIGN KEY(Visitor_Name, Visitor_PhoneNumber) REFERENCES Visitor(Visitor_Name, Visitor_PhoneNumber)
ON DELETE CASCADE
ON UPDATE CASCADE
);

CREATE TABLE Room(
Room_Name CHAR(20) PRIMARY KEY,
Room_Capacity INTEGER CHECK (Room_Capacity >= 1),
Room_Theme CHAR(20)
);

CREATE TABLE Staff(
Staff_ID INTEGER PRIMARY KEY CHECK (Staff_ID >= 1),
Staff_Name CHAR(20)
);

CREATE TABLE TourGuide(
Staff_ID INTEGER PRIMARY KEY,
TourGuide_Specialty CHAR(20),
FOREIGN KEY (Staff_ID) references Staff(Staff_ID)
ON DELETE CASCADE
ON UPDATE CASCADE
);

CREATE TABLE Security1(
Security_Ranking INTEGER PRIMARY KEY CHECK (Security_Ranking >= 1 AND Security_Ranking <= 10),
Security_CanAccessVault BOOLEAN
);

CREATE TABLE Security2(
Staff_ID INTEGER PRIMARY KEY,
Security_Ranking INTEGER,
FOREIGN KEY (Staff_ID) REFERENCES Staff(Staff_ID)
ON DELETE CASCADE,
FOREIGN KEY (Security_Ranking) REFERENCES Security1(Security_Ranking)
);

CREATE TABLE Group_StartsIn_Guides(
Group_Number INTEGER PRIMARY KEY CHECK (Group_Number >= 1),
Group_Size INTEGER CHECK (Group_Size >= 0),
Group_MaximumSize INTEGER CHECK (Group_MaximumSize >= 1),
StartsIn_Time TIME,
Room_Name CHAR(20) NOT NULL,
TourGuide_ID INTEGER NOT NULL,
FOREIGN KEY (Room_Name) References Room(Room_Name)
	ON DELETE NO ACTION
	ON UPDATE CASCADE,
FOREIGN KEY (TourGuide_ID) References TourGuide(Staff_ID)
ON DELETE NO ACTION
	ON UPDATE CASCADE
);

CREATE TABLE Ticket_Purchases_AssignedTo1(
Visitor_Name CHAR(20) NOT NULL,
Visitor_PhoneNumber CHAR(10) NOT NULL,
Ticket_Number INTEGER PRIMARY KEY CHECK (Ticket_Number >= 1),
Purchases_Date DATE,
FOREIGN KEY(Visitor_Name, Visitor_PhoneNumber) REFERENCES Visitor(Visitor_Name, Visitor_PhoneNumber)
ON DELETE CASCADE
ON UPDATE NO ACTION
);

CREATE TABLE Ticket_Purchases_AssignedTo2(
Ticket_Number INTEGER PRIMARY KEY,
Ticket_Type CHAR(20),
Ticket_Date DATE,
Ticket_Time TIME,
Group_Number INTEGER,
FOREIGN KEY(Ticket_Number) REFERENCES Ticket_Purchases_AssignedTo1(Ticket_Number)
	ON DELETE CASCADE
	ON UPDATE NO ACTION,
FOREIGN KEY(Group_Number) REFERENCES Group_StartsIn_Guides(Group_Number)
	ON DELETE NO ACTION
	ON UPDATE CASCADE
);

CREATE TABLE Monitors(
Security_ID INTEGER,
Room_Name CHAR(20),
PRIMARY KEY(Security_ID, Room_Name),
FOREIGN KEY (Security_ID) References Security2(Staff_ID)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (Room_Name) References Room(Room_Name)
ON DELETE NO ACTION
ON UPDATE CASCADE
);

CREATE TABLE Artifact_Presents1(
Artifact_Name CHAR(100) PRIMARY KEY,
Artifact_Era CHAR(20),
Artifact_Origin CHAR(20)
);

CREATE TABLE Artifact_Presents2(
Artifact_ID INTEGER PRIMARY KEY CHECK (Artifact_ID >= 1),
Artifact_Name CHAR(100),
Room_Name CHAR(20) NOT NULL,
FOREIGN KEY (Artifact_Name) References Artifact_Presents1(Artifact_Name)
ON DELETE CASCADE
ON UPDATE CASCADE,
FOREIGN KEY (Room_Name) References Room(Room_Name)
ON DELETE NO ACTION
ON UPDATE CASCADE
);

CREATE TABLE Exhibit_Has(
Exhibit_Name CHAR(50) PRIMARY KEY,
Exhibit_LastServiceDate DATE,
Exhibit_Topic CHAR(50),
Room_Name CHAR(20) NOT NULL,
FOREIGN KEY (Room_Name) References Room(Room_Name)
ON DELETE NO ACTION
ON UPDATE CASCADE
);

INSERT INTO Locker(Locker_Number)
VALUES
	(1),
	(2),
	(3),
	(4),
	(5);

INSERT INTO Visitor(Visitor_Name, Visitor_PhoneNumber, Visitor_Age)
VALUES
	('Olivia', '6041112222', 30),
	('Emma', '7782223333', 29),
	('Ava', '2363334444', 40),
	('Liam', '6045556666', 18),
	('Noah', '2367778888', 28);

INSERT INTO StoresBelongings(Locker_Number, Visitor_Name, Visitor_PhoneNumber)
VALUES
	(1, 'Olivia', '6041112222'),
	(2, 'Emma', '7782223333'),
	(3, 'Ava', '2363334444'),
	(4, 'Liam', '6045556666'),
	(5, 'Noah', '2367778888');

INSERT INTO Brings_Infant(Infant_Name, Infant_Age, Visitor_Name, Visitor_PhoneNumber)
VALUES
	('Elijah', 2, 'Olivia', '6041112222'),
	('William', 1, 'Olivia', '6041112222'),
	('Mary', 1, 'Noah', '2367778888'),
	('Robert', 2, 'Emma', '7782223333'),
	('John', 2, 'Noah', '2367778888');

INSERT INTO Room(Room_Name, Room_Capacity, Room_Theme)
VALUES
	('A', 30, 'Egyptian'),
('B', 20, 'Southeast Asian'),
('C', 20, 'European'),
('D', 15, 'African'),
('E', 20, 'East Asian');

INSERT INTO Staff(Staff_ID, Staff_Name)
VALUES
	(1, 'Alex'),
	(2, 'Boris'),
	(3, 'Chris'),
	(4, 'Daisy'),
	(5, 'Elaine'),
	(6, 'Frank'),
	(7, 'Gus'),
	(8, 'Helen'),
	(9, 'Ivan'),
	(10, 'James'),
	(11, 'Kevin');

INSERT INTO TourGuide(Staff_ID, TourGuide_Specialty)
VALUES
	(1, 'Egyptian'),
	(2, 'South East Asian'),
(3, 'European'),
	(4, 'African'),
	(5, 'East Asian');

INSERT INTO Security1(Security_Ranking, Security_CanAccessVault)
VALUES
	(1, FALSE),
(2, FALSE),
(3, FALSE),
(4, TRUE),
(5, TRUE);

INSERT INTO Security2(Staff_ID, Security_Ranking)
VALUES
	(6, 1),
	(7, 2),
	(8, 3),
(9, 4),
	(10, 5);

INSERT INTO Group_StartsIn_Guides(Group_Number, Group_Size, Group_MaximumSize, StartsIn_Time, Room_Name, TourGuide_ID)
VALUES
(1, 12, 20, '09:00:00', 'A', 1),
(2, 11, 20, '10:00:00', 'B', 2),
(3, 15, 20, '11:00:00', 'C', 3),
(4, 13, 15, '12:00:00', 'D', 4),
(5, 8, 20, '13:00:00', 'A', 5);

INSERT INTO Ticket_Purchases_AssignedTo1(Visitor_Name, Visitor_PhoneNumber, Ticket_Number, Purchases_Date)
VALUES
	('Olivia', '6041112222', 330, '2021-4-30'),
	('Emma', '7782223333', 331, '2021-5-1'),
	('Ava', '2363334444', 332, '2021-5-1'),
	('Liam', '6045556666', 333, '2021-5-2'),
	('Noah', '2367778888', 334, '2021-5-2'),
	('Olivia', '6041112222', 335, '2021-4-30'),
	('Olivia', '6041112222', 336, '2021-4-30'),
	('Olivia', '6041112222', 337, '2021-4-30'),
	('Olivia', '6041112222', 338, '2021-4-30');

INSERT INTO Ticket_Purchases_AssignedTo2(Ticket_Number, Ticket_Type, Ticket_Date, Ticket_Time, Group_Number)
VALUES
	(330, 'Ancient', '2021-6-1', '09:00:00', 1),
	(331, 'Post-Classical', '2021-6-1', '10:00:00', 2),
	(332, 'Middle Ages', '2021-6-1', '11:00:00', 3),
	(333, 'Renaissance', '2021-6-1', '12:00:00', 4),
	(334, 'Contemporary', '2021-6-1', '13:00:00', 5),
	(335, 'Post-Classical', '2021-6-1', '10:00:00', 2),
	(336, 'Middle Ages', '2021-6-2', '11:00:00', 3),
	(337, 'Renaissance', '2021-6-3', '12:00:00', 4),
	(338, 'Contemporary', '2021-6-4', '13:00:00', 5);

INSERT INTO Monitors(Security_ID, Room_Name)
VALUES
	(6, 'A'),
	(7, 'B'),
(8, 'C'),
	(9, 'D'),
	(10, 'E');

INSERT INTO Artifact_Presents1(Artifact_Name, Artifact_Era, Artifact_Origin)
VALUES
	('15th Century Egyptian Pharaoh’s Scepter', '15th Century', 'Egypt'),
	('14th Century Southeast Asian Throne', '14th Century', 'South East Asia'),
('10th Century European Faberge Egg', '10th Century', 'Russia'),
	('12th Century African Tribal Spear', '12th Century', 'Congo'),
	('9th Century East Asian Ritual Katana', '9th Century', 'Japan');

INSERT INTO Artifact_Presents2(Artifact_ID, Artifact_Name, Room_Name)
VALUES
	(1, '15th Century Egyptian Pharaoh’s Scepter', 'A'),
	(2, '14th Century Southeast Asian Throne', 'B'),
	(3, '10th Century European Faberge Egg', 'C'),
(4, '12th Century African Tribal Spear', 'D'),
	(5, '9th Century East Asian Ritual Katana', 'E');

INSERT INTO Exhibit_Has(Exhibit_Name, Exhibit_LastServiceDate, Exhibit_Topic, Room_Name)
VALUES
	('Sarcophagus Exhibit', '2021-6-1', 'Egyptian Coffins', 'A'),
	('Colonialism in Southeast Asia', '2020-6-1', 'Colonialism', 'B'),
	('The Bolshevik Revolution', '2019-6-1', 'Bolsheviks rise to power', 'C'),
	('Africa’s Tribal Wars', '2021-6-1', 'Tribal Systems in Africa', 'D'),
	('Japan’s Feudal Lords and Samurai', '2021-6-1', 'Samurai history', 'E');
