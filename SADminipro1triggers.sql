/*Triggers*/


/*(WORKS!!!)
This trigger is executed after a new factory order is inserted into the FactoryOrders table. 
It first checks if the product of the order exists in the Inventory table. If it does, the 
trigger updates the P_INSTOCK and P_QOH columns with the new quantity. If the product does 
not exist in the inventory, the trigger inserts a new record into the Inventory table with 
the product and the quantity of the factory order.
*/
DELIMITER $$
CREATE TRIGGER update_inventory
AFTER INSERT ON FactoryOrders
FOR EACH ROW
BEGIN
    DECLARE product_exists INT;
    SET product_exists = (SELECT COUNT(*) FROM Inventory WHERE product_id = NEW.product_id);

    IF product_exists > 0 THEN
        UPDATE Inventory
        SET P_INSTOCK = P_INSTOCK + NEW.quantity,
            P_QOH = P_QOH + NEW.quantity
        WHERE product_id = NEW.product_id;
    ELSE
        INSERT INTO Inventory (product_id, P_INSTOCK, P_QOH)
        VALUES (NEW.product_id, NEW.quantity, NEW.quantity);
    END IF;
END$$
DELIMITER ;

/*Tigger works*/



/*(WORRRKS!!!)
This trigger will decrement the quantity of the product in the Inventory table 
whenever a customer places an order. If the quantity of the product in the Inventory 
table is less than the ordered quantity, the trigger will prevent the order from 
being placed and raise an error message.*/


DELIMITER $$
CREATE TRIGGER UpdateInventoryAfterCustomerOrder
AFTER INSERT ON CustomerOrders
FOR EACH ROW
BEGIN
DECLARE remaining INT;
SET remaining = (SELECT P_INSTOCK - NEW.quantity FROM Inventory WHERE product_id = (SELECT product_id FROM Inventory WHERE inventory_id = NEW.OrderDetails));
IF remaining < 0 THEN
    SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Error: Not enough products in stock';
ELSE
    UPDATE Inventory SET P_INSTOCK = remaining, P_QOH = P_QOH - NEW.quantity WHERE inventory_id = NEW.OrderDetails;
END IF;
END$$
DELIMITER ;



/*This trigger will run after an update is 
made to the FactoryOrders table. It will update
the Inventory table to adjust the P_INSTOCK and P_QOH
columns based on the difference between the old and new 
quantity values in the updated row. 
The product_id is used to match the appropriate
inventory record to update.*/

DELIMITER $$
CREATE TRIGGER update_inventory_after_factory_order_update
AFTER UPDATE ON FactoryOrders
FOR EACH ROW
BEGIN
    UPDATE Inventory
    SET P_INSTOCK = P_INSTOCK - OLD.quantity + NEW.quantity,
        P_QOH = P_QOH - OLD.quantity + NEW.quantity
    WHERE product_id = NEW.product_id;
END$$
DELIMITER ;


/*This trigger fires after an update to the CustomerOrders table
, and calculates the difference between the old and new quantity values.
 It then updates the P_INSTOCK and P_QOH columns in the Inventory table 
 by subtracting this difference from their current values. 
 The update is performed on the row in Inventory that matches the 
 OrderDetails value in the updated CustomerOrders row (which is accessed 
 via OLD.OrderDetails).
*/

DELIMITER $$
CREATE TRIGGER update_Inventory_After_CustomerOrder_update
AFTER UPDATE ON CustomerOrders
FOR EACH ROW
BEGIN
    DECLARE diff INT;
    DECLARE old_quantity INT;
    DECLARE new_quantity INT;
    
    SET old_quantity = OLD.quantity;
    SET new_quantity = NEW.quantity;
    
    SET diff = new_quantity - old_quantity;
    
    UPDATE Inventory SET P_INSTOCK = P_INSTOCK - diff, P_QOH = P_QOH - diff WHERE inventory_id = OLD.OrderDetails;
END$$
DELIMITER ;




