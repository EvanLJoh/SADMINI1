INSERT INTO Customer (customer_id, first_name, last_name, address, email, phone_number)
VALUES (8, 'Jennifer', 'Wilson', '234 Oak Street', 'jenniferwilson@example.com', '6789012345'),
(9, 'William', 'Martinez', '567 Oak Street', 'williammartinez@example.com', '1234567890'),
(10, 'Melissa', 'Garcia', '890 Oak Street', 'melissagarcia@example.com', '0987654321'),
(11, 'Robert', 'Brown', '123 Maple Street', 'robertbrown@example.com', '1231231234'),
(12, 'Laura', 'Davis', '456 Maple Street', 'lauradavis@example.com', '5678901234'),
(13, 'Daniel', 'Wilson', '789 Maple Street', 'danielwilson@example.com', '2345678901'),
(14, 'Jessica', 'Johnson', '012 Pine Street', 'jessicajohnson@example.com', '9012345678'),
(15, 'Christopher', 'Garcia', '345 Pine Street', 'christophergarcia@example.com', '3456789012'),
(16, 'Sarah', 'Martinez', '678 Pine Street', 'sarahmartinez@example.com', '6789012345'),
(17, 'Mark', 'Anderson', '901 Pine Street', 'markanderson@example.com', '1234567890'),
(18, 'Karen', 'Brown', '234 Cedar Street', 'karenbrown@example.com', '0987654321'),
(19, 'Andrew', 'Wilson', '567 Cedar Street', 'andrewwilson@example.com', '1231231234'),
(20, 'Amanda', 'Johnson', '890 Cedar Street', 'amandajohnson@example.com', '5678901234'),
(21, 'Jacob', 'Garcia', '123 Walnut Street', 'jacobgarcia@example.com', '2345678901'),
(22, 'Stephanie', 'Davis', '456 Walnut Street', 'stephaniedavis@example.com', '9012345678'),
(23, 'Joshua', 'Taylor', '789 Walnut Street', 'joshuataylor@example.com', '3456789012'),
(24, 'Megan', 'Martinez', '012 Walnut Street', 'meganmartinez@example.com', '6789012345'),
(25, 'Nicholas', 'Wilson', '345 Cedar Lane', 'nicholaswilson@example.com', '1234567890'),
(26, 'Lauren', 'Johnson', '678 Cedar Lane', 'laurenjohnson@example.com', '0987654321'),
(27, 'Ryan', 'Garcia', '901 Cedar Lane', 'ryangarcia@example.com', '1231231234'),
(28, 'Taylor', 'Anderson', '234 Pine Lane', 'tayloranderson@example.com', '5678901234'),
(29, 'Brandon', 'Brown', '567 Pine Lane', 'brandonbrown@example.com', '2345678901'),
(30, 'Haley', 'Wilson', '890 Pine Lane', 'haleywilson@example.com', '9012345678'),
(31, 'Matthew', 'Johnson', '123 Oak Lane', 'matthewjohnson@example.com', '3456789012'),
(32, 'Samantha', 'Martinez', '456 Oak Lane', 'samanthamartinez@example.com', '6789012345'),
(33, 'Tyler', 'Davis', '789 Oak Lane', 'tylerdavis@example.com', '1234567890'),
(34, 'Olivia', 'Taylor', '012 Oak Lane', 'oliviataylor@example.com', '0987654321'),
(35, 'Kevin', 'Garcia', '345 Maple Lane', 'kevingarcia@example.com', '1231231234'),
(36, 'Ashley', 'Anderson', '678 Maple Lane', 'ashleyanderson@example.com', '5678901234'),
(37, 'Justin', 'Brown', '901 Maple Lane', 'justinbrown@example.com', '2345678901'),
(38, 'Grace', 'Wilson', '234 Elm Lane', 'gracewilson@example.com', '9012345678'),
(39, 'Jacob', 'Johnson', '567 Elm Lane', 'jacobjohnson@example.com', '3456789012'),
(40, 'Emma', 'Martinez', '890 Elm Lane', 'emmamartinez@example.com', '6789012345');



Products table 
INSERT INTO Products (P_NAME, P_Brand, P_Type, P_DATE, P_PRICE, F_ID) 
VALUES('Adidas Superstar Sneakers', 'Adidas', 'Casual', '2021-02-14', 80.00, 5),
        ('Converse Chuck Taylor All Star High Top Sneakers', 'Converse', 'Casual', '2021-02-14', 65.00, 16),
        ('Roxy Sandy Flip Flops', 'Roxy', 'Sandals', '2021-02-14', 20.00, 7),
        ('Nike Air Max 90 Sneakers', 'Nike', 'Casual', '2021-02-14', 120.00, 8),
        ('Clarks Wallabee Shoes', 'Clarks', 'Loafers & Slip-ons', '2021-02-14', 140.00, 9),
        ('Puma Cali Sneakers', 'Puma', 'Casual', '2021-02-14', 75.00, 10),
        ('New Balance 990v5 Sneakers', 'New Balance', 'Casual', '2021-02-14', 175.00, 11),
        ('Steve Madden Girl Mules', 'Madden Girl', 'Pumps & Heels', '2021-02-14', 60.00, 12),
        ('Steve Madden Troopa Boots', 'Steve Madden', 'Boots', '2021-02-14', 100.00, 12),
        ('Steve Madden Odessa Wide Calf Boots', 'Steve Madden', 'Wide Width', '2021-02-14', 150.00, 12),
        ('Steve Madden Travel Backpack', 'Steve Madden', 'Backpacks', '2021-02-14', 50.00, 12),
        ('Herschel Supply Co. Novel Duffle Bag', 'Herschel Supply Co.', 'Duffel Bags', '2021-02-14', 90.00, 2),
        ('Keds Champion Canvas Sneakers', 'Keds', 'Casual', '2021-02-14', 50.00, 1),
        ('UGG Scuffette II Slipper', 'UGG', 'Slippers', '2021-02-14', 90.00, 16),
        ('Vans Authentic Sneakers', 'Vans', 'Casual', '2021-02-14', 60.00, 16);

INSERT INTO Products (P_NAME, P_Brand, P_Type, P_DATE, P_PRICE, F_ID) VALUES
('Nike Tech Fleece Joggers', 'Nike', 'Joggers', '2021-02-14', 120.00, 8),
('Nike Tech Fleece Hoodie', 'Nike', 'Sweatshirts & Hoodies', '2021-02-14', 130.00, 8),
('Adidas Ultraboost 21 Running Shoes', 'Adidas', 'Athletic', '2021-02-14', 180.00, 5),
('Vans Old Skool Sneakers', 'Vans', 'Casual', '2021-02-14', 65.00, 16),
('Levi’s 501 Original Fit Jeans', 'Levi’s', 'Jeans', '2021-02-14', 70.00, 2),
('The North Face Resolve 2 Jacket', 'The North Face', 'Jackets & Coats', '2021-02-14', 90.00, 3),
('Ralph Lauren Classic Fit Polo Shirt', 'Ralph Lauren', 'Polos', '2021-02-14', 80.00, 16),
('Calvin Klein Underwear Boxer Briefs', 'Calvin Klein', 'Underwear', '2021-02-14', 30.00, 16),
('Gucci GG Marmont Leather Wallet', 'Gucci', 'Wallets', '2021-02-14', 450.00, 4),
('Ray-Ban Classic Aviator Sunglasses', 'Ray-Ban', 'Sunglasses', '2021-02-14', 150.00, 4),
('Champion Reverse Weave Hoodie', 'Champion', 'Sweatshirts & Hoodies', '2021-02-14', 80.00, 16),
('Jordan Retro 4 Sneakers', 'Jordan', 'Athletic', '2021-02-14', 190.00, 8),
('FILA Disruptor 2 Sneakers', 'FILA', 'Casual', '2021-02-14', 65.00, 16),
('Tommy Hilfiger Logo T-Shirt', 'Tommy Hilfiger', 'T-Shirts', '2021-02-14', 30.00, 16),
('Polo Ralph Lauren Classic Baseball Cap', 'Polo Ralph Lauren', 'Hats', '2021-02-14', 50.00, 16);






       

INSERT INTO Inventory (inventory_id, product_id, P_INSTOCK, P_QOH)
VALUES (1, 1, 10, 10),
       (2, 2, 20, 20),
       (3, 3, 30, 30),
       (4, 4, 40, 40),
       (5, 5, 50, 50);

INSERT INTO FactoryOrders (f_order_id, product_id, quantity)
VALUES (1, 1, 10),
       (2, 2, 20),
       (3, 3, 30),
       (4, 4, 40),
       (5, 5, 50);


INSERT INTO CustomerOrders (Cust_order_id, OrderDetails, quantity)
VALUES (1, 1, 10),
       (2, 2, 20),
       (3, 3, 30),
       (4, 4, 40),
       (5, 5, 50);

INSERT INTO Factory (f_id, f_name, f_country, f_city, f_state_providence, f_zipcode, f_phone_number) 
VALUES (1, 'Factory 1', 'USA', 'New York', 'NY', '12345', '1234567890'),
       (2, 'Factory 2', 'USA', 'Los Angeles', 'CA', '54321', '0987654321'),
       (3, 'Factory 3', 'USA', 'Chicago', 'IL', '67890', '1231231234'),
       (4, 'Factory 4', 'USA', 'Houston', 'TX', '09876', '5678901234');
INSERT INTO Factory (f_id, f_name, f_country, f_city, f_state_providence, f_zipcode, f_phone_number) 
VALUES  (5, 'Adidas Factory', 'Germany', 'Herzogenaurach', 'Bavaria', '91074', '+49 9132 84-0'),
        (6, 'Converse Factory', 'Vietnam', 'Hanoi', '', '', '+84 24 3786 5888'),
        (7, 'Roxy Factory', 'China', 'Guangzhou', 'Guangdong', '510440', '+86 20 3832 2288'),
        (8, 'Nike Factory', 'IDSA', 'Bekasi', 'West Java', '17550', '6221899168'),
        (9, 'Clarks Factory', 'Vietnam', 'Hanoi', '', '', '+84 24 3831 8951'),
        (10, 'Puma Factory', 'China', 'Qingdao', 'Shandong', '266111', '+86 532 8516 3666'),
        (11, 'New Balance Factory', 'Indonesia', 'Sidoarjo', 'East Java', '61219', '+62 31 8941000'),
        (12, 'Madden Girl Factory', 'China', 'Wuhan', 'Hubei', '430056', '+86 27 5926 6000'),
        (13, 'Sandals Factory', 'Brazil', 'Fortaleza', 'Ceara', '60760-165', '+55 85 3476 2000'),
        (14, 'Boots Factory', 'Mexico', 'Celaya', 'Guanajuato', '38010', '+52 461 618 8000'),
        (15, 'Wide Width Factory', 'China', 'Shanghai', '', '', '+86 21 5290 5200'),
        (16, 'Causal Factory', 'Vietnam', 'Ho Chi Minh City', '', '', '+84 28 3848 1381'),
        (17, 'Slippers Factory', 'India', 'Chennai', 'Tamil Nadu', '600044', '+91 44 4744 0777'),
        (18, 'Pumps & Heels Factory', 'Brazil', 'Franca', 'Sao Paulo', '14405-100', '+55 16 3711 9400'),
        (19, 'Loafers & Slip-ons Factory', 'Indonesia', 'Cianjur', 'West Java', '43212', '+62 263 592600'),
        (20, 'Wedges Factory', 'Mexico', 'Leon', 'Guanajuato', '37530', '+52 477 771 8800'),
        (21, 'Flats Factory', 'China', 'Dongguan', 'Guangdong', '523000', '+86 769 8566 6888');
