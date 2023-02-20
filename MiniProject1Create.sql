Create database SADMINI1;

use SADMINI1;


CREATE TABLE Factory (
    f_id INTEGER PRIMARY KEY,
    f_name VARCHAR(50) NOT NULL,
    f_country VARCHAR(120) NOT NULL,
    f_city VARCHAR (50) NOT NULL,
    f_state_providence VARCHAR (50) NOT NULL,
    f_zipcode VARCHAR (10) NOT NULL,
    f_phone_number VARCHAR (15) NOT NULL
);


CREATE TABLE Products (
    P_ID INTEGER AUTO_INCREMENT PRIMARY KEY,
    P_NAME varchar(50) not null,
    P_Brand varchar(50) not null,
    P_Type varchar(50) not null,
    P_DATE DATE,
    P_PRICE DECIMAL,
    F_ID INT,
    Foreign Key (F_ID) REFERENCES Factory(F_ID)
);



CREATE TABLE FactoryOrders (
    f_order_id INTEGER AUTO_INCREMENT PRIMARY KEY,
    product_id INTEGER NOT NULL,
    quantity INTEGER NOT NULL,
    PaymentDueDate DATETIME DEFAULT NOW(),
    FOREIGN KEY (product_id) REFERENCES Products(P_ID)
);

/*factory orders failed as the product id  took from a deleted table */

CREATE TABLE Inventory (
    inventory_id INTEGER AUTO_INCREMENT PRIMARY KEY,
    product_id INTEGER NOT NULL,
    P_INSTOCK INT,
    P_QOH INT,
    FOREIGN KEY (product_id) REFERENCES FactoryOrders(f_order_id)
);

CREATE TABLE Customer (
    customer_id INTEGER AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(50) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    address VARCHAR(50) NOT NULL,
    phone_number VARCHAR(12) NOT NULL,
    date_of_birth DATE
);




CREATE TABLE CustomerOrders (
    Cust_order_id INTEGER AUTO_INCREMENT PRIMARY KEY,
    OrderDetails INTEGER NOT NULL,
    quantity INTEGER NOT NULL,
    card_number VARCHAR(16) NULL,
    customer_email VARCHAR(50) NOT NULL,
    PaymentDueDate DATETIME DEFAULT NOW(),
    FOREIGN KEY (OrderDetails) REFERENCES Inventory(inventory_id),
    FOREIGN KEY (customer_email) REFERENCES Customer(email)
);







/*Customer orders had to go over customer bc customer refernced the customer table
also added order date after deleting the accounts rec table.
The goal is to make this table identical to the factory side.
*/





/*
Deleing the due date bc its not needed 

Deleting the payment amount bc it can be 
achived using a statment like this:
"Products.P_Price * CustomerOrder.Quantity AS Price"

Deleting the invoice number bc its not needed.

*/









/* I forced auto inc primary keys with all but 
the factory table

here is the fix
ALTER TABLE Customer MODIFY COLUMN customer_id INTEGER;
ALTER TABLE Products MODIFY COLUMN P_ID INTEGER;
ALTER TABLE Inventory MODIFY COLUMN inventory_id INTEGER;
ALTER TABLE Accounts_Payable MODIFY COLUMN ap_id INTEGER;
ALTER TABLE FactoryOrders MODIFY COLUMN f_order_id INTEGER;
ALTER TABLE Accounts_Receivable MODIFY COLUMN ar_id INTEGER;
ALTER TABLE CustomerOrders MODIFY COLUMN Cust_order_id INTEGER;




deleted the accounts payable bc we found the update on CASCADE
CREATE TABLE Accounts_Payable (
    ap_id INTEGER AUTO_INCREMENT PRIMARY KEY,
    PaymentAmount DECIMAL (10,2) NOT NULL,
    OrderDetails INT NOT NULL,
    FOREIGN KEY (OrderDetails)REFERENCES FactoryOrders(f_order_id)
 );


*/