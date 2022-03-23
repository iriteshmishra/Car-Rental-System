
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `car_rental_system`
--

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(1) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `password`) VALUES
(1, 'admin', 'admin');
(2, 'ritesh', 'ritesh');
-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactusID` int(100) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pnum` int(10) NOT NULL,
  `Msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactusID`, `Fname`, `Lname`, `Email`, `Pnum`, `Msg`) VALUES
(1, 'Prashant', 'Sail', 'Prashant@gmail.com', 28282920, 'I want some vehicle details'),
(2, 'Mukesh', 'Mandal', 'Mandal@gmail.com', 23456780, 'I need information about your service'),
(3, 'Akshay ', 'Patel', 'Akshay@gmail.com', 27777888, 'I want details about your brand new vehicles'),


-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(1) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `gender` char(6) NOT NULL,
  `mobileNumber` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `pass` varchar(20) NOT NULL,
  `rpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `fName`, `lName`, `gender`, `mobileNumber`, `Email`, `Address`, `DOB`, `pass`, `rpass`) VALUES
(1, 'Rahul', 'Sharma', 'male', 27654345, 'rahul@gmail.com', 'NO 5, Jogeshwari, Mumbai', '1999-10-26', 'rahul@1999', 'rahul@1999'),
(2, 'ritesh', 'mishra', 'male', 1234567890, 'riteshmishra@gmail.com', 'Room no. 23 dsouza chawl
Ambewadi', '2022-03-18', 'password', 'password'),

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `feedback_id` int(11) NOT NULL,
  `experience` char(10) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`feedback_id`, `experience`, `comments`, `name`, `email`) VALUES
(2, 'Bad', 'Bad Condition', 'Prashant', 'prashantsail@gmail.com'),
(3, 'Average', 'Vehicles are in good condition', 'Mukesh', 'Mukesh@gmail.com'),
(4, 'Good', 'Good Customer Service', 'Rakesh', 'Rakesh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driverID` int(1) NOT NULL,
  `fName` varchar(20) NOT NULL,
  `lName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `pNumber` int(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `drivingLicenseNo` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `rpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driverID`, `fName`, `lName`, `DOB`, `Email`, `pNumber`, `gender`, `drivingLicenseNo`, `pass`, `rpass`) VALUES
(1, 'ritesh', 'mishra', '2000-01-02', 'riteshmishra@gmail.com', 87243830, 'male', 'M4999654', 'password', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `selfdrive`
--

CREATE TABLE `selfdrive` (
  `BookingID` int(100) NOT NULL,
  `VehID` int(100) NOT NULL,
  `CusID` int(100) NOT NULL,
  `PDate` date NOT NULL,
  `RDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selfdrive`
--

INSERT INTO `selfdrive` (`BookingID`, `VehID`, `CusID`, `PDate`, `RDate`) VALUES
(2, 1, 8, '2022-03-20', '2022-03-23');
(3, 1, 4, '2022-03-19', '2022-03-20');
-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `ID` int(100) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Per_Week` float NOT NULL,
  `Per_Month` float NOT NULL,
  `Excess_Mileage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`ID`, `Type`, `Name`, `Per_Week`, `Per_Month`, `Excess_Mileage`) VALUES
(1, 'cars', 'Suzuki Alto - Premium - Manual', 15000, 49000, 30),
(3, 'cars', 'Suzuki Celerio - Auto', 20000, 59500, 35),
(4, 'cars', 'Perodua (Daihatsu) Axia - Auto', 22500, 69500, 35),
(5, 'cars', 'Toyota Prius C/ Aqua - Auto', 27500, 85000, 49.5),
(6, 'cars', 'Toyota Corolla Axio/ NZE141', 27500, 85000, 49.5),
(7, 'cars', 'Perodua Bezza Prime Sedan - Auto (2017)', 27500, 85000, 49.5),
(8, 'cars', 'Toyota Allion NZT 260', 40000, 120000, 60),
(9, 'cars', 'Toyota Premio', 59500, 175000, 85);

-- --------------------------------------------------------

--
-- Table structure for table `withdriver`
--

CREATE TABLE `withdriver` (
  `BookingID` int(100) NOT NULL,
  `VehID` int(100) NOT NULL,
  `CusID` int(100) NOT NULL,
  `PDate` date NOT NULL,
  `RDate` date NOT NULL,
  `Ploc` varchar(100) NOT NULL,
  `Dloc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdriver`
--

INSERT INTO `withdriver` (`BookingID`, `VehID`, `CusID`, `PDate`, `RDate`, `Ploc`, `Dloc`) VALUES
(1, 1, 1, '2022-1-14', '2022-1-20', 'Jogeshwari', 'Mumbai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactusID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driverID`);

--
-- Indexes for table `selfdrive`
--
ALTER TABLE `selfdrive`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `withdriver`
--
ALTER TABLE `withdriver`
  ADD PRIMARY KEY (`BookingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactusID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driverID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `selfdrive`
--
ALTER TABLE `selfdrive`
  MODIFY `BookingID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `withdriver`
--
ALTER TABLE `withdriver`
  MODIFY `BookingID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
