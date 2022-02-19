SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `studentdata` (
  `fullname` varchar(100) NOT NULL,
  `Student_id` int(2) UNSIGNED NOT NULL PRIMARY KEY,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

COMMIT;
