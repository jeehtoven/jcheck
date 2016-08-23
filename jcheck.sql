IF EXISTS (SELECT * FROM SYS.DATABASES where name = 'jCheck') 
BEGIN
	DROP DATABASE jCheck
END

CREATE DATABASE jCheck
GO
USE jCheck
GO
CREATE TABLE dbo.jCheck_central (
id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
handle VARCHAR(22) NOT NULL,
email VARCHAR(50) NOT NULL,
hashpassword VARCHAR(max) NOT NULL,
--salt VARCHAR(max) NOT NULL,
created VARCHAR(50) NOT NULL,
updated VARCHAR(50) NOT NULL,
handle_status VARCHAR(30) NOT NULL,
);