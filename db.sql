CREATE DATABASE gemstores;
USE gemstores;

DROP tbl_products IF EXISTS;

CREATE TABLE tbl_products (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    prod_name CHAR(128) NOT NULL,
    price_current DECIMAL(10,2) NULL,
    price_main DECIMAL(10,2) NULL,
    brief_desc TEXT NULL,
    sku CHAR(25) NULL,
    tags CHAR(255) NULL,
    color CHAR(255) NULL,
    size CHAR(255) NULL,
    qty INT(11) NULL DEFAULT 0,
    prod_desc TEXT NULL,
    add_info TEXT NULL,
    feat_image CHAR(255) NULL
);