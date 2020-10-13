DROP DATABASE hcl;
CREATE DATABASE hcl;
use hcl;

DROP TABLE stamp;
CREATE TABLE stamp (
    stamp_id int(11) AUTO_INCREMENT PRIMARY KEY,
    stamp_url varchar(255),
    stamp_desc varchar(255),
    category varchar(255),
    stamp_sale_price double,
    stamp_named_price double,
    rating float,
    created_at datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO stamp (
    stamp_url,
    stamp_desc,
    category,
    stamp_sale_price,
    stamp_named_price,
    rating
) VALUES
('stamp1.jpg', 'Bicentenary of American Revolution', 'Mint' , 1.0 , 0.7 , 0),
('stamp1.jpg', 'Diversion of the Mahaweli River','', 1.0 , 0.7 , 0);

    