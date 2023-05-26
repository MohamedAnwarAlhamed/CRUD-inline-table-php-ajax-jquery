CREATE TABLE Product (
  ProductID INT PRIMARY KEY,
  ProductName VARCHAR(255) NOT NULL,
  Description TEXT,
  Price DECIMAL(10,2) NOT NULL,
  QuantityInStock INT NOT NULL,
  Category VARCHAR(255),
  Manufacturer VARCHAR(255),
  SKU VARCHAR(50)
);


INSERT INTO Product (ProductID, ProductName, Description, Price, QuantityInStock, Category, Manufacturer, SKU)
VALUES 
  (1001, 'Apple iPhone 12', '5G smartphone with A14 Bionic chip, OLED display, and dual-camera system', 799.00, 50, 'Electronics', 'Apple Inc.', 'IPH12-64GB'),
  (1002, 'Samsung Galaxy S21', '5G smartphone with Snapdragon 888 chip, AMOLED display, and triple-camera system', 699.00, 75, 'Electronics', 'Samsung Electronics', 'SG21-128GB'),
  (1003, 'Sony WH-1000XM4', 'Noise-cancelling wireless headphones with 30-hour battery life and touch controls', 349.00, 25, 'Electronics', 'Sony Corporation', 'WH1000XM4'),
  (1004, 'Nike Air Zoom Pegasus 38', 'Running shoes with a responsive foam midsole and breathable mesh upper', 120.00, 100, 'Sports', 'Nike, Inc.', 'NZP38-10.5'),
  (1005, 'Canon EOS R5', 'Full-frame mirrorless camera with 45MP sensor, 8K video recording, and in-body imagestabilization', 3899.00, 10, 'Electronics', 'Canon Inc.', 'EOSR5-Body'),
  (1006, 'KitchenAid Artisan Stand Mixer', '5-quart tilt-head mixer with 10 speeds and various attachments', 379.00, 20, 'Home Appliances', 'Whirlpool Corporation', 'KSM150PSER'),
  (1007, 'Adidas Ultraboost 21', 'Running shoes with Boost cushioning and Primeknit upper', 180.00, 75, 'Sports', 'Adidas AG', 'UB21-9.5'),
  (1008, 'Amazon Echo Dot (4th Gen)', 'Smart speaker with Alexa voice control and improved sound quality', 49.00, 200, 'Electronics', 'Amazon.com, Inc.', 'ECHO-DOT-4'),
  (1009, 'Fitbit Charge 4', 'Fitness tracker with GPS, heart rate monitoring, and sleep tracking', 129.00, 50, 'Sports', 'Fitbit, Inc.', 'FB417BKBK'),
  (1010, 'Samsung QN90A Neo QLED TV', '4K smart TV with Quantum Matrix Technology and Object Tracking Sound', 1999.00, 5, 'Electronics', 'Samsung Electronics', 'QN90A-65in');