SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1025, 'Amit', 'amit123@gmail.com', 46600),
(925, 'Priya', 'priya123@gmail.com', 20620),
(4503, 'Aman', 'aman123@gmail.com', 60540),
(6097, 'Siya', 'siya123@gmail.com', 48800),
(3902, 'Sunny', 'sunny123@gmail.com', 35532),
(5803, 'Ishika', 'ishika123@gmail.com', 86284),
(8397, 'Sneha', 'sneha123@gmail.com', 55255),
(4821, 'Akshay', 'akshay123@gmail.com', 77354),
(3296, 'Sakshi', 'sakshi123@gmail.com', 50254),
(9012, 'Akash', 'akash123@gmail.com', 93062);



CREATE TABLE `transaction` (
  `s.no` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `amount` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
