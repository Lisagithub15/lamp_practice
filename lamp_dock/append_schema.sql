CREATE TABLE `history` (
 `order_id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `purchase_date` datetime NOT NULL,
 PRIMARY KEY (`order_id`),
 KEY `users` (`user_id`),
 CONSTRAINT `users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8

CREATE TABLE `details` (
 `details_id` int(11) NOT NULL AUTO_INCREMENT,
 `item_id` int(11) NOT NULL,
 `buy_price` int(11) NOT NULL,
 `amount` int(11) NOT NULL,
 `order_id` int(11) NOT NULL,
 PRIMARY KEY (`details_id`),
 KEY `item` (`item_id`),
 KEY `history` (`order_id`),
 CONSTRAINT `history` FOREIGN KEY (`order_id`) REFERENCES `history` (`order_id`),
 CONSTRAINT `item` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8
