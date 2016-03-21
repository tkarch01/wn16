# sessions table for wn16 itc250 class

CREATE TABLE wn16_sessions ( 
PHPSessID CHAR(32) NOT NULL, 
SessionData TEXT, 
LastAccessed TIMESTAMP NOT NULL, 
PRIMARY KEY (PHPSessID),
KEY (LastAccessed)
);
