ALTER TABLE
    products ADD product_img1 TEXT  AFTER product_status,
    ADD product_img2 TEXT AFTER product_img1,
    ADD product_img3 TEXT AFTER product_img2;

    ALTER TABLE
    products ADD product_price DECIMAL NOT NULL AFTER product_description;
    
    ALTER TABLE
    products ADD thread_type TEXT AFTER product_img3,
    ADD product_feature TEXT  AFTER thread_type,
    ADD made_in TEXT  AFTER product_feature;


   CREATE TABLE loomshop.main_categories(
    main_category_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    main_category_id TEXT NOT NULL    
   )ENGINE = INNODB;

ALTER TABLE
    products ADD CONSTRAINT products_ibfk_3 FOREIGN KEY(main_category_id)
    REFERENCES main_categories(main_category_id) ON DELETE RESTRICT ON UPDATE RESTRICT;




/*$sql
    = "INSERT INTO 'products` (`product_id`, `category_id`, `product_title`, `product_description`, 
    `product_price`, `product_status`, `product_img1`, `product_img2`, `product_img3`, 
    `prodct_thread_type`, `product_feature`, `product_keywords`, `made_in`, `create_at`) 
    VALUES (NULL, \'1\', \'demo product one \', \'demo product one demo product onedemo product 
    onedemo product onedemo product onedemo product one\', \'125.22\', \'1\', \'\', \'\', \'\',
    \'Silk\', \'demo product one demo product onedemo product onedemo product onedemo product onedemo 
    product one\', \'ghhg hjkh hjkh\', \'india\', current_timestamp());";*/

CREATE TABLE clothtypes(
    cloth_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    cloth_type VARCHAR(70) NOT NULL
);

CREATE TABLE season(
    season_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    season_name VARCHAR(70) NOT NULL
);



    CREATE TABLE products(
    products_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    products_title VARCHAR(50) NOT NULL,
    product_description VARCHAR(120) NOT NULL,
    product_price DECIMAL(10,2),
    product_status BOOLEAN NOT NULL,
    product_uses VARCHAR(80) NOT NULL,
    product_keywords VARCHAR(60) NOT NULL,
    cloth_id INT(11) NOT NULL,
    season_id INT(11) NOT NULL,
    FOREIGN KEY(cloth_id) REFERENCES clothtypes(cloth_id),
    FOREIGN KEY(season_id) REFERENCES season(season_id)
    
    
);

    ALTER TABLE
    products ADD product-img1 TEXT NOT NULL AFTER season_id,
    ADD product-img2 TEXT NOT NULL AFTER product-img1,
    ADD product-img3 TEXT NOT NULL AFTER product-img2;


