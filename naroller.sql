CREATE TABLE Page
(
	pId				INT				NOT NULL,
	pName			VARCHAR(255)	NOT NULL,
	pText			TEXT			NOT NULL,

	PRIMARY KEY (pId)
);

CREATE TABLE Article
(
	aDateTime		DATETIME		NOT NULL,
	aTitle			VARCHAR(255)	NOT NULL,
	aSecondTitle	VARCHAR(255),
	aText			TEXT			NOT NULL,
	aSummary		TEXT,
	
	PRIMARY KEY (aDateTime, aTitle)
);