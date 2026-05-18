create DATABASE light_cavalry;
USE light_cavalry;



CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    slug VARCHAR(100) UNIQUE,
    description TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    category_id INT,
    name VARCHAR(150) NOT NULL,
    price DECIMAL(15, 2) NOT NULL,
    description TEXT,
    image VARCHAR(255),
    stock INT DEFAULT 0,
    brand VARCHAR(100),
    weight DECIMAL(10,2),
    color VARCHAR(50),
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);


CREATE TABLE customers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);


CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    customer_id INT,
    total_amount DECIMAL(15,2),
    status VARCHAR(50) DEFAULT 'pending',
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (customer_id) REFERENCES customers(id)
);

CREATE TABLE order_detail (
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT,
    product_id INT,
    quantity INT NOT NULL,
    price DECIMAL(15,2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

INSERT INTO categories (name, slug, description) VALUES
('Road Bikes', 'road-bike', 'Xe đạp đường trường tốc độ cao'),
('Mountain Bikes', 'mountain-bike', 'Xe đạp địa hình leo núi'),
('City Bikes', 'city-bike', 'Xe đạp thành phố tiện lợi');

INSERT INTO products (name, category_id, price, description, image, stock, brand, weight, color) VALUES
('Specialized Rockhopper Sport', 2, 12000000, 'Xe MTB Rockhopper Sport bền bỉ, hiệu suất cao.', 'rockhopper.jpg', 10, 'Specialized', 13.5, 'Xám/Đen'),
('Cannondale Trail 5', 2, 15000000, 'Xe MTB Cannondale Trail 5 mạnh mẽ, phù hợp địa hình.', 'trail5.jpg', 8, 'Cannondale', 14.0, 'Xanh lá'),
('Scott Aspect 960', 2, 18000000, 'Xe MTB Scott Aspect 960 thiết kế hiện đại.', 'aspect960.jpg', 6, 'Scott', 13.8, 'Đen/Đỏ');
