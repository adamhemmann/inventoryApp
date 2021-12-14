-- in case of an oops
CREATE TABLE inventory (
    id INT PRIMARY KEY AUTO_INCREMENT,
    productName VARCHAR(50) NOT NULL UNIQUE,
    productID VARCHAR(50) NOT NULL UNIQUE,
    productDescription VARCHAR(100) NOT NULL,
    productSize VARCHAR(25) NOT NULL,
    vendor VARCHAR(50) NOT NULL,
    qtyReceived INT,
    qtyWarehouse INT,
    qtyProduction INT,
    qtyOrder INT
);

INSERT INTO inventory (productName, productID, productDescription, productSize, vendor, qtyReceived, qtyWarehouse, qtyProduction, qtyOrder) VALUES
    ('SmoothSmall','10001900','130# White Gloss Finish Blazer Digital Cover','12x18','Midland Paper',0,2800,850,0),
    ('SmoothLarge','10047817','130# White Gloss Finish ProDigital Star Cover','13x19','Midland Paper',0,8000,1000,0),
    ('MpixMatteSmall','10724356','100# Accent Smooth Opaque Digital Text','12x18','Veritiv',0,151250,22313,0),
    ('MpixCover12x18','10724389','100# Accent Smooth Opaque Digital Cover','12x18','Veritiv',0,0,0,0),
    ('MpixMatteLarge','20003964-4001','100# Accent Smooth Opaque Digital Text','13x19','Veritiv',0,268800,13010,0),
    ('MpixMatteMega','20003968-4001','100# Accent Smooth Opaque Digital Text','26x13','Veritiv',100800,189000,12128,0),
    ('CoverMatteSuper','10728510','80# Accent Smooth Opaque Digital Cover','28x40','Veritiv',7600,10000,1290,0),
    ('CoverMatteMegaLarge','10728512','100# Accent Smooth Opaque Digital Cover','20x26','Veritiv',0,66200,3700,0),
    ('MpixMatteParentSheet','10738504','100# Accent Smooth Opaque Digital Text','28x40','Veritiv',0,10800,0,0),
    ('MpixPearlLarge ','A8140SW-F','81# Aspire Petallics Snow Willow Text','28x40','GPA',0,2250,543,0),
    ('MpixLinenLarge','NE01782','80# Neenah Digital Linen Finish Solar White','13x19','Midland Paper',0,8000,1750,0),
    ('MpixPearlSmall','HPP80TCST','80# Crystal White Pearl Text','12x18','GPA',0,40000,2200,0),
    ('MpixLinenSmall','01779','80# Classic Linen Digital Text','12x18','Neenah',0,14000,4000,0),
    ('SigMatteLarge','PDUP80UCE','80# White Uncoated Cover','13x19','GPA',152500,182500,9000,0),
    ('SigMatteMega','PDU801326UCE','80# White Uncoated Cover','13x26','GPA',149625,142500,7209,0),
    ('Linen26x40','5231963','100# Neenah Digital Linen Finish Solar White','26x40','Veritiv',0,900,500,0),
    ('Pearl28x40','PDF1302840CST','130# Crystal White Pearl Cover','28x40','GPA',0,0,350,0),
    ('ThinPearl28x40','HPP2302840CST','90# Crystal White Pearl Cover','28x40','GPA',16750,21000,1790,0),
    ('Matte18x12','HPU100UTES','100# White Uncoated Text','12x18','GPA',0,13000,9000,0),
    ('Semiglosss18x12','283611','100# Sterling Premium Digital 94 BRT','12x18','Midland Paper',0,44000,10000,0),
    ('ClassicFelt14x26','HPD601426SSVC','60# Sandshell Cover','14x26','GPA',27000,27000,7900,0),
    ('ClassicFelt14x32','HPD601432SSVC','60# Sandshell Cover','14x32','GPA',0,6000,518,0),
    ('FlexbindMatte','94137','120# Matte Flexbind Cover','13x13.375','Mazina',0,43065,1320,0),
    ('FlexbindPearl','94087','107# Pearl Flexbind Cover','13x13.375','Mazina',0,34080,480,0),
    ('CleanerSheets','PDCP100MTP','100# White Satin Text','13x19','GPA',0,54500,13500,0),
    ('Linen18x12','HPF130UCLS','130# Linen Cover','12x18','GPA',0,13125,625,0),
    ('Linen19x13','PDF1302840UCLT','130# Linen Cover','13x19','GPA',2900,3350,1100,0),
    ('ThinLinen18x12','HPF90UCWLF','90# Linen Cover','12x18','GPA',0,11500,1750,0),
    ('Pearl18x12','HPP130MPIS','130# Crystal White Pearl Cover','12x18','GPA',59625,20000,3125,0),
    ('Pearl19x13','HPPP130MPIS','130# Crystal White Pearl Cover','13x19','GPA',0,10000,5375,0),
    ('CottonLarge','10040520','118# Strathmore Pure Cotton Ultimate White','13x19','Midland Paper',0,22750,500,0),
    ('CalibrationSheets','117953','100# ProDigital Star Gloss Text','13x19','Midland Paper',0,140000,12000,0),
    ('ClassicFelt18x12','HPU130SSVC','130# Treated Sandshell Cover','12x18','GPA',236500,129500,450,0),
    ('ClassicFelt19x13','HPUP130SSVC','130# Sandshell Vellum Cover','13x19','GPA',176400,136000,4800,0),
    ('Recycled19x13','HPGG130UC','130# Uncoated 100% Recycled','13x19','GPA',0,19600,800,0);

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    changeDate DATETIME,
    firstName VARCHAR(50),
    lastName VARCHAR(50),
    email VARCHAR(50),
    jobTitle VARCHAR(50),
    admin VARCHAR(1)
);

INSERT INTO users (username, password, changeDate, firstName, lastName, email, jobTitle, admin) 
	VALUES ('test', sha1('pass'), NOW(), NULL, NULL, NULL, NULL, 1),
           ('adamh', sha1('password'), NOW(), 'Adam', 'Hemmann', 'ashgx6@mail.missouri.edu', 'Warehouse Manager', 1),
           ('samg', sha1('password'), NOW(), 'Samwise', 'Gamgee', 'samg@theshire.com', 'Gardener', 0);

