/*To Create Table*/
CREATE TABLE IF NOT EXISTS customers (
  cut_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cust_name VARCHAR(255) NOT NULL,
  cust_address VARCHAR(255) NOT NULL,
  city VARCHAR(100) NOT NULL,
  postalcode VARCHAR(100) NOT NULL,
  country VARCHAR(100) NOT NULL  
) ENGINE = InnoDB;


---INSERTING MULTIPLe VALIEUS into a TABLE
INSERT INTO customers (
    cut_id,
    cust_name,
    cust_address,
    city,
    postalcode,
    country)
VALUES (500,
        'Alfreds Futterkiste',
        'Maria Anders Obere Str. 57',
        'Berlin',
        '12209',
        'germany'
  ),
  (  501,
    'Ana Trujillo',
    'Ana Trujillo Avda de la Constitución 2222',
    'Mexico D.F.',
    '05021',
    'Mexico'
);
  --TO CHANGE a VARIABLE Length
ALTER TABLE 
   customers CHANGE cust_name cust_name VARCHAR(100) CHARACTER SET utf8mb4 
   COLLATE utf8mb4_general_ci NOT NULL;

/*A symbol name was expected! near id
At least one column definition was near id
Unexpected beginning of statement. 
Unrecognized statement type.*/
CREATE TABLE IF NOT EXISTS categories (
  cat_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cat_name VARCHAR(150) NOT NULL,
  description VARCHAR(200) NOT NULL
)
CREATE TABLE IF NOT EXISTS employees (
  emp_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  birth_date DATE NOT NULL, 
  notes VARCHAR(255) 
 )

INSERT INTO employees(
    emp_id,
    first_name,
    last_name,
    birth_date,
    notes
)
VALUES(
    100,
    'Nancy',
    'Fuller',
    1968-12-08,
    'Education includes a BA in psychology from Colorado State University. 
     She also completed (The Art of the Cold Call). Nancy is a member of "Toastmasters International".'
);


INSERT INTO employees(
    emp_id,
    first_name,
    last_name,
    birth_date,
    notes
)
VALUES(
    101,
    'Andrew',
    'Fuller',
    '1982-09-27 15:00:53.000000',
    'Andrew is a member of the Sales Management Roundtable, the Seattle Chamber of Commerce, and the Pacific Rim Importers Association.'
);
UPDATE
    employees
SET
    emp_id = 100,
    first_name = 'Franchi',
    last_name = 'Buchanan',
    birth_date = '1989-11-24 07:05:10',
    notes = 'Mr. Buchanan has completed the courses \'Successful Telemarketing\' and \'International Sales Management\'. He is fluent in French.'
WHERE
    employees.emp_id = 101;



-- TO change the DATATYPE
ALTER TABLE
    employees CHANGE birth_date birth_date DATETIME NOT NULL;

---
ALTER TABLE
    employees CHANGE birth_date birth_date DATE NOT NULL;


 CREATE TABLE IF NOT EXISTS orderdetails (
   INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
   photo TEXT 
 )





/*
SELECT * 
FROM products
ORDER BY Price DESC;


SELECT 
 customerName,
 COUNT(*) AS 'number of orders'
FROM customers
INNER JOIN orders
 ON orders.customerID = customers.customerID
GROUP BY customers.customerID;

SELECT
    customerName,
    COUNT(*) AS 'number of orders'
FROM customers
INNER JOIN orders
ON orders.customerID = customers.customerID
GROUP BY customerName;

*/

/** DROP|| DELETE DATABASE/TABLE
    DROP DATABASE <DBNAME>;
    DROP TABLE custoomers;
    ex:- DROP DATABASE db_test;
 
DROP TABLES
    products,
    brands,
    categories;
 
 * to use a database
     USE <DBNAME>;
     ex:- USE db_test;

 * to check working database
     SELECT DATABASE();

* to view all tables in database
     SHOW TABLES;
* to view all table's columns in table (TO view STRUCTURE of TABLE)
    SHOW COLUMNS FROM <tableName>;     ||     DESC <tableName>;
    ex:- SHOW COLUMNS FROM customers;
         DESC customers;

*/ 


---************************************************--------------------
-- ALIASES
SELECT
    cust_id AS id,
    cust_name AS 'Coustomer Name',
    cust_address AS 'Address'
FROM
    customers;

---************************************************--------------------


--Franchi  C/ Moralzarzal, 86   Madrid  28034   Spain



CREATE TABLE db_test.items(
    item_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    price DECIMAL (6,2) NOT NULL
 ) ENGINE = INNODB;

/*price DECIMAL (6,2)
  6 is the max length and 2 is the how many digites are be there after decimal(.)
  ex:-     4512.12 || 142.21 || 12.00
*/



















 Margaret
 Peacock     
 1958-09-19
 She was temporarily assigned to the London office before returning to her permanent post in Seattle.

 "Margaret",
    "Peacock",
    1958-09-19 10:24:10,
    "She was temporarily assigned to the London office before returning to her permanent post in Seattle."   




INSERT INTO employees(
    first_name,
    last_name,
    birth_date,
    notes
)
VALUES(
    'Laura',
    'Callahan',
    '1951-10-19 10:24:10',
    'She was temporarily assigned to the London office before returning to her permanent post in Seattle.'
);



 Janet Leverling   1963-08-30
 Janet was hired as a sales associate and was promoted to sales representative.

--ADDing columnes in a table after the last column;
ALTER TABLE
    people ADD comments VARCHAR(255) NOT NULL AFTER birthdt,
    ADD timing TIMESTAMP NOT NULL AFTER comments;

    CREATE TABLE db_test.Products(
    pro_id INT AUTO_INCREMENT PRIMARY KEY,
    pro_name VARCHAR(50),
    price DECIMAL(4, 2),
   at_date TIMESTAMP DEFAULT NOW()
);

INSERT INTO products(
    pro_name,
    price
    )
VALUSE ('blackberries Fruit', 55.00),
('watermelon Fruit', 70.00),
('Apricot Fruit', 70.00),
('melon Fruit', 70.00);


CREATE TABLE db_test.customers(
    cus_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    mail_id VARCHAR(50)
   );
CREATE TABLE db_test.oders(
    or_id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(50),
    amount DECIMAL(5, 2),
    created_at TIMESTAMP DEFAULT NOW(),
    customer_id INT,
    FOREIGN KEY(customer_id) REFERENCES customers(cus_id)    
);

USE db_test;
SHOW TABLES;
DESC employees;
DESC categories;
DESC customers;

 

 /*  **************LEFT JOINS ***************

****CODE: Left Joins
-- Getting Fancier (Inner Joins Still)

**-*-*-*-*Inner Joins *-*-*-*-*-*-*-*-*-*-*-*-*-*-
1st.*-*-
SELECT first_name, last_name, order_date, amount 
FROM customers
JOIN orders
    ON customers.id = orders.customer_id
ORDER BY order_date;
2nd.*-*-
SELECT 
    first_name, 
    last_name, 
    SUM(amount) AS total_spent
FROM customers
JOIN orders
    ON customers.id = orders.customer_id
GROUP BY orders.customer_id
ORDER BY total_spent DESC;


-- *****LEFT JOINS

SELECT * FROM customers
LEFT JOIN orders
    ON customers.id = orders.customer_id;
SELECT first_name, last_name, order_date, amount
FROM customers
LEFT JOIN orders
    ON customers.id = orders.customer_id; 
SELECT 
    first_name, 
    last_name,
    IFNULL(SUM(amount), 0) AS total_spent
FROM customers
LEFT JOIN orders
    ON customers.id = orders.customer_id
GROUP BY customers.id
ORDER BY total_spent;

 */

 /* **************MANY:MANY TABLE*********************
*-*-*-*-*-*-*-*-*-****-*-*-*-*-**-*-*-*-*--**-*-*-*-*-*-*-*-*-
CODE: Creating Our Tables
-- CREATING THE REVIEWERS TABLE



CREATE TABLE reviewers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100)
);
-- CREATING THE SERIES TABLE

CREATE TABLE series(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    released_year YEAR(4),
    genre VARCHAR(100)
);
-- CREATING THE REVIEWS TABLE

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rating DECIMAL(2,1),
    series_id INT,
    reviewer_id INT,
    FOREIGN KEY(series_id) REFERENCES series(id),
    FOREIGN KEY(reviewer_id) REFERENCES reviewers(id)
);
-- INSERTING A BUNCH OF DATA

INSERT INTO series (title, released_year, genre) VALUES
    ('Archer', 2009, 'Animation'),
    ('Arrested Development', 2003, 'Comedy'),
    ("Bob's Burgers", 2011, 'Animation'),
    ('Bojack Horseman', 2014, 'Animation'),
    ("Breaking Bad", 2008, 'Drama'),
    ('Curb Your Enthusiasm', 2000, 'Comedy'),
    ("Fargo", 2014, 'Drama'),
    ('Freaks and Geeks', 1999, 'Comedy'),
    ('General Hospital', 1963, 'Drama'),
    ('Halt and Catch Fire', 2014, 'Drama'),
    ('Malcolm In The Middle', 2000, 'Comedy'),
    ('Pushing Daisies', 2007, 'Comedy'),
    ('Seinfeld', 1989, 'Comedy'),
    ('Stranger Things', 2016, 'Drama');
 
 
INSERT INTO reviewers (first_name, last_name) VALUES
    ('Thomas', 'Stoneman'),
    ('Wyatt', 'Skaggs'),
    ('Kimbra', 'Masters'),
    ('Domingo', 'Cortes'),
    ('Colt', 'Steele'),
    ('Pinkie', 'Petit'),
    ('Marlon', 'Crafford');
    
 
INSERT INTO reviews(series_id, reviewer_id, rating) VALUES
    (1,1,8.0),(1,2,7.5),(1,3,8.5),(1,4,7.7),(1,5,8.9),
    (2,1,8.1),(2,4,6.0),(2,3,8.0),(2,6,8.4),(2,5,9.9),
    (3,1,7.0),(3,6,7.5),(3,4,8.0),(3,3,7.1),(3,5,8.0),
    (4,1,7.5),(4,3,7.8),(4,4,8.3),(4,2,7.6),(4,5,8.5),
    (5,1,9.5),(5,3,9.0),(5,4,9.1),(5,2,9.3),(5,5,9.9),
    (6,2,6.5),(6,3,7.8),(6,4,8.8),(6,2,8.4),(6,5,9.1),
    (7,2,9.1),(7,5,9.7),
    (8,4,8.5),(8,2,7.8),(8,6,8.8),(8,5,9.3),
    (9,2,5.5),(9,3,6.8),(9,4,5.8),(9,6,4.3),(9,5,4.5),
    (10,5,9.9),
    (13,3,8.0),(13,4,7.2),


 */

 /*#1064 - You have an error in your SQL syntax; check the 
 manual that corresponds to your MariaDB server version 
 for the right syntax to use near 'REFERENCES users(id)*/

 CREATE TABLE photos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    user_id INT NOT NULL,
    crated_at TIMESTAMP DEFAULT NOW(), 
    FOREIGN KEY(user_id) REFERENCES users(id)
);

 
 DROP TABLE photos;
 #1051 - Unknown table 'ig_clone.photos'

 CREATE TABLE comments(id INT AUTO_INCREMENT PRIMARY KEY,
                      comment_text VARCHAR(255) NOT NULL,
                      user_id INT NOT NULL,
                      photo_id INT NOT NULL,
                      crated_at TIMESTAMP DEFAULT NOW(),
                      FOREIGN KEY(user_id) REFERENCES users(id),
                      FOREIGN key(photo_id) REFERENCES photos(id)                      
             );

DESC users;
DESC photos;
DESC comments;
                  
#1068 - Multiple primary key defined
CREATE TABLE likes(user_id INT NOT NULL,
       photo_id INT NOT NULL,
       created_at TIMESTAMP DEFAULT NOW(),
       FOREIGN KEY(user_id) REFERENCES users(id),
       FOREIGN KEY(photo_id) REFERENCES photos(id),
       PRIMARY KEY(user_id, photo_id)                   
   );
  #1075 - Incorrect table definition; there can be only one auto column and it must be defined as a key



  /*Count the total rows
    SELECT COUNT(*) FROM <tablename>;
    ex:-  
        SELECT COUNT(*) FROM potos;
  */

  /*
        SELECT * 
        FROM photos 
        ORBER BY created_at
        LIMIT 5;


  */