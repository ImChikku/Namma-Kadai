

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('chikku', 'Mathan kumar', 'chikku@gmail.com', '9876543210', 'Pondicherry University', '123456');


CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `shop_name` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `food` (`F_ID`, `name`, `price`, `shop_name`, `R_ID`, `images_path`, `options`) VALUES
(1, 'Small Fries', 50, 'mcdonald', 1, 'images/smallfries.jpg', 'ENABLE'),
(2, 'Aloo Naan', 60, 'mcdonald', 1, 'images/naan.jpg', 'ENABLE'),
(3, 'Combo-Pack', 145, 'mcdonald', 1, 'images/mccombo.jpg', 'ENABLE'),
(4, 'Mc-Puff', 60, 'mcdonald', 1, 'images/mcpuff.jpg', 'ENABLE'),
(5, 'Combo-Pack1', 160, 'mcdonald', 1, 'images/mccombo1.jpg', 'ENABLE'),
(6, 'Paneer Tikka', 80, 'grill', 1, 'images/paneertikka.jpg', 'ENABLE'),
(7, 'Egg Masala', 70, 'grill', 1, 'images/eggmasala.jpg', 'ENABLE'),
(8, 'Tandoori Chicken', 120, 'grill', 1, 'images/tandoorichicken.jpg', 'ENABLE'),
(9, 'Fish Tikka', 90, 'grill', 1, 'images/fishtikka.jpg', 'ENABLE'),
(10, 'Aloo jeera', 60, 'grill', 1, 'images/aloojeera.jpg', 'ENABLE'),
(11, 'Crispy', 100, 'kfc', 1, 'images/crispy.jpg', 'ENABLE'),
(12, 'Fried Chicken', 150, 'kfc', 1, 'images/friedchicken.jpg', 'ENABLE'),
(13, 'Chicken Nuggets', 90, 'kfc', 1, 'images/chickennuggets.jpg', 'ENABLE'),
(14, 'Popcorn Chicken', 120, 'kfc', 1, 'images/popcornchicken.jpg', 'ENABLE'),
(15, 'Chicken Wings', 110, 'kfc', 1, 'images/chickenwings.jpg', 'ENABLE'),
(16, 'Periperi Burgur', 150, 'burgur', 1, 'images/periperiburgur.jpg', 'ENABLE'),
(17, 'Classic Burgur', 100, 'burgur', 1, 'images/classicburgur.jpg', 'ENABLE'),
(18, 'Cheese Burgur', 160, 'burgur', 1, 'images/cheeseburgur.jpg', 'ENABLE'),
(19, 'Double Beef Burgur', 170, 'burgur', 1, 'images/doublebeefburgur.jpg', 'ENABLE'),
(20, 'Double Cheese Burgur', 180, 'burgur', 1, 'images/doublecheeseburgur.jpg', 'ENABLE'),
(21, 'Peri peri', 90, 'zwarma', 1, 'images/periperizwarma.jpg', 'ENABLE'),
(22, 'Maxican', 110, 'zwarma', 1, 'images/maxicanzwarma.jpg', 'ENABLE'),
(23, 'BBQ', 120, 'zwarma', 1, 'images/bbqzwarma.jpg', 'ENABLE'),
(24, 'Zinger', 150, 'zwarma', 1, 'images/zingerzwarma.jpg', 'ENABLE'),
(25, 'Plate', 80, 'zwarma', 1, 'images/platezwarma.jpg', 'ENABLE'),
(26, 'Periperi Pizza', 50, 'domino', 1, 'images/periperipizza.jpg', 'ENABLE'),
(27, 'Chicken Pizza', 50, 'domino', 1, 'images/chickenpizza.jpg', 'ENABLE'),
(28, 'Cheese Pizza', 50, 'domino', 1, 'images/cheesepizza.jpg', 'ENABLE'),
(29, 'Maxican Pizza', 50, 'domino', 1, 'images/maxicanpizza.jpg', 'ENABLE'),
(30, 'Veg Pizza', 50, 'domino', 1, 'images/vegpizza.jpg', 'ENABLE');



CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('chikku', 'Mathan kumar', 'chikku@gmail.com', '8654751259', 'Goa', '123456');


CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `shop_name` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`,`shop_name`) VALUES
(1,1,'Small Fries', 50, 1, '2019-03-03', 'chikku', 1,'mcdonald');



CREATE TABLE `canteens` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `canteens` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'chikku\'s canteens', 'chikku@gmail.com', '7778564231', 'Goa', 'chikku');


ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);


ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);


ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);


ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);


ALTER TABLE `canteens`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);


ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;


ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;


ALTER TABLE `canteens`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;


ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `canteens` (`R_ID`);


ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `canteens` (`R_ID`);


ALTER TABLE `canteens`
  ADD CONSTRAINT `canteens_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);
COMMIT;
