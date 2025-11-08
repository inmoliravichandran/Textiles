SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Table structure for table `admins`
CREATE TABLE `admins` (
  `id` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserting admin data
INSERT INTO `admins` (`id`, `email`, `password`) VALUES
('1', 'admin@gmail.com', '12345678');

-- Table structure for table `photography_bookings`
CREATE TABLE `textile_Payment` (
  `customer_name` VARCHAR(50) NOT NULL,
  `customer_email` VARCHAR(50) NOT NULL,
  `customer_phone` VARCHAR(20) NOT NULL,
  `booking_date` DATE NOT NULL,
  `session_type` VARCHAR(50) NOT NULL,
  `session_date` DATE NOT NULL,
  `session_time` TIME NOT NULL
);

COMMIT;
