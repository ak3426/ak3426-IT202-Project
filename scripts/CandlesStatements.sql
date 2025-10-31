--Arghavan  Katebi-10/31/2025-IT202:Internet Applications-Section003-Phase 3 Assignment/ak3426@njit.edu--
-- Candle Items Table
CREATE TABLE Candles (
CandleID               INT(11)        NOT NULL,
CandleCode             VARCHAR(10)    NOT NULL   UNIQUE,
CandleName             VARCHAR(255)   NOT NULL,
CandleDescription      TEXT           NOT NULL,
CandleSize             VARCHAR(60)     NOT NULL,
CandleBurnTime         VARCHAR(60)      NOT NULL,
CandleColor            VARCHAR(60)    NOT NULL,
CandleTypeID           INT(11)        NOT NULL,
CandleWholesalePrice   DECIMAL(10,2)  NOT NULL,
CandleListPrice        DECIMAL(10,2)  NOT NULL,
DateTimeCreated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
DateTimeUpdated     TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (CandleID)
);

INSERT INTO Candles
(CandleID, CandleCode, CandleName, CandleDescription, CandleSize, CandleBurnTime, CandleColor, CandleTypeID, CandleWholesalePrice, CandleListPrice)
VALUES
(1000, 'SAND', 'Vanilla Sandalwood', 'Top Notes - orange, lemon and bergamot
Middle Notes - amber, resin, vanilla bean and orchid', 'Medium', '48 hours', 'Black', 100, 19.20, 24.00 );

INSERT INTO Candles
(CandleID, CandleCode, CandleName, CandleDescription, CandleSize, CandleBurnTime, CandleColor, CandleTypeID, CandleWholesalePrice, CandleListPrice)
VALUES
(200, 'LEDSF', 'LED Soft Flame Pillar Candle', 'Give any space a rich, warm ambiance with this Ivory LED Soft Flame Pillar Candle', 'Large', 'N/A', 'white', 200, 10.50, 15.50);

INSERT INTO Candles
(CandleID, CandleCode, CandleName, CandleDescription, CandleSize, CandleBurnTime, CandleColor, CandleTypeID, CandleWholesalePrice, CandleListPrice)
VALUES
(3000, 'DECOR', 'Ice Cream Candle', 'A dreamy line of dessert-inspired candles that look just like your favorite scoops', 'Large', '30hours', 'MultiColors', 300, 15.00, 21.00);

UPDATE Candles SET CandleID= 2000 WHERE CandleID=200;
UPDATE Candles SET CandleColor= 'White' WHERE CandleID=2000;
UPDATE Candles SET CandleBurnTime='30 hours' WHERE CandleID=3000;

SELECT * FROM Candles;

