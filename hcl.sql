DROP DATABASE hcl;
CREATE DATABASE hcl;
use hcl;

CREATE TABLE stamp (
    id int(11) AUTO_INCREMENT PRIMARY KEY,
    stamp_name varchar(255),
    stamp_url varchar(255),
    stamp_desc varchar(255),
    stamp_sale_price double,
    stamp_named_price double,
    rating float,
    created_at datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO stamp (stamp_name, stamp_url, stamp_desc, password, created_at) VALUES
(),
();