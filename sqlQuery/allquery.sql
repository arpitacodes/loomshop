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
) ENGINE = INNODB;

   