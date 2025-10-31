--Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu--
-- Categories Table

CREATE TABLE CandleTypes (
CandleTypeID       INT(11)        NOT NULL,
CandleTypeCode     VARCHAR(255)   NOT NULL   UNIQUE,
CandleTypeName     VARCHAR(255)   NOT NULL,
ShelfNumber        VARCHAR(60)     NOT NULL,
DateTimeCreated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
DateTimeUpdated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (CandleTypeID)
);

INSERT INTO CandleTypes
(CandleTypeID, CandleTypeCode, CandleTypeName, ShelfNumber)
VALUES 
(100, 'SCNT', 'Scented', 'S1' );

INSERT INTO CandleTypes
(CandleTypeID, CandleTypeCode, CandleTypeName, ShelfNumber)
VALUES
(200, 'LED', 'LED', 'S2');

INSERT INTO CandleTypes
(CandleTypeID, CandleTypeCode, CandleTypeName, ShelfNumber)
VALUES
(300, 'DECO', 'Decorative', 'S3');

SELECT * FROM CandleTypes;



