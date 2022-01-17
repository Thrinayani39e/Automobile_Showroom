-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 01:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automobile_showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

CREATE TABLE `booknow` (
  `book_id` int(4) NOT NULL,
  `model_name` varchar(30) NOT NULL,
  `model_year` year(4) NOT NULL,
  `adv_amt` int(6) NOT NULL,
  `fuel_type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`book_id`, `model_name`, `model_year`, `adv_amt`, `fuel_type`) VALUES
(3, 'i20', 2002, 1000000, 'P'),
(4, 'i20', 2002, 1000000, 'P'),
(5, 'i20', 2002, 1000000, 'P'),
(6, 'i20', 2002, 1000000, 'P'),
(7, 'i20', 2002, 1000000, 'P'),
(8, 'i20', 2022, 1000000, 'D'),
(9, 'Hyundai Verna', 2020, 10000, 'D'),
(10, 'Hyundai Verna', 2020, 2, 'D'),
(11, 'Hyundai Verna', 2022, 100000, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `Dno` int(3) NOT NULL,
  `street` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `phonenum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `fname`, `lname`, `email_id`, `DOB`, `gender`, `Dno`, `street`, `city`, `phonenum`) VALUES
(16, 'Y. C.', 'Reddy', 'ghnanaprasoona292002@gmail.com', '0000-00-00', 'm', 12, 'C-26, UTCL Township, APCW', 'Anantapur District', '9171586163'),
(17, 'Y. C.', 'Reddy', 'ghnanaprasoona292002@gmail.com', '0000-00-00', 'm', 12, 'C-26, UTCL Township, APCW', 'Anantapur District', '9171586163'),
(18, 'Y Chinna', 'Reddy', 'prasad.bheema@gmail.com', '1977-06-15', 'M', 106, 'A-006 Mythri Mithila , Gunjur', 'Bengaluru', '8555957137'),
(19, 'Y Prasoona', 'Ghhnana', 'ghnanaprasoona292002@gmail.com', '0000-00-00', 'M', 12, 'C-26, UTCL Township, APCW', 'Anantapur District', '9171586163'),
(20, 'John', 'Abraham', 'john@gmail.com', '0000-00-00', 'M', 12, 'C-26, UTCL Township, APCW', 'Anantapur District', '9171586163'),
(21, 'Y. C.', 'Reddy', 'ghnanaprasoona292002@gmail.com', '0000-00-00', 'M', 12, 'C-26, UTCL Township, APCW', 'Anantapur District', '9171586163'),
(22, 'Siri', 'Sidda', 'siri@gmail.com', '2002-09-20', 'M', 2003, 'C-26, UTCL Township, APCW', 'Anantapur District', '8555957137');

-- --------------------------------------------------------

--
-- Table structure for table `employeee`
--

CREATE TABLE `employeee` (
  `Emp_id` int(4) NOT NULL,
  `Emp_name` varchar(30) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Salary` varchar(30) NOT NULL,
  `Ph_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeee`
--

INSERT INTO `employeee` (`Emp_id`, `Emp_name`, `email_id`, `Designation`, `Salary`, `Ph_no`) VALUES
(103, 'Bharath Reddy', 'bharathreddy123@gmail.com', 'salesman', '25000', '8555957137'),
(104, 'Bhavana Sen', 'bhavs@gmail.com', 'Superviser', '40,000', '8773559876'),
(105, 'Deepak Chauhan', 'deepak@gmail.com', 'Assistant Manager', '60,000', '9876543210'),
(106, 'Smitha Shetty', 'smitha@gmail.com', 'Senior Manager', '80,000', '9123467805'),
(107, 'Sandeep Kumar', 'kumarsandeep@gmail.com', 'Salesperson', '15000', '9853237654'),
(108, 'Tanisha Chowdary', 'tanisha@gmail.com', 'AGM', '100000', '8775432345'),
(109, 'Ujjwal Roy', 'ujjwalroy@gmail.com', 'Salesperson', '15000', '9876346728'),
(110, 'Shamitha Reddy', 'shamitha123@gmail.com', 'Head of The Showroom', '150000', '9234516543'),
(111, 'Udash Kishore', 'udash@gmail.com', 'Sales Executive', '75,000', '9887766554'),
(112, 'Mohammad Akbar', 'akbar@gmail.com', 'Digital Sales Manager', '60,000', '8997766587'),
(113, 'Subhashish Singh', 'subhashish@gmail.com', 'Receptionist', '15,000', '7666555432');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `ins_id` int(4) NOT NULL,
  `ins_num` int(4) DEFAULT 2342,
  `ins_amt` int(6) DEFAULT NULL,
  `ins_type` varchar(30) DEFAULT NULL,
  `ins_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`ins_id`, `ins_num`, `ins_amt`, `ins_type`, `ins_date`) VALUES
(14, 5353, 245678, '3year', '0000-00-00'),
(15, 5353, 245678, '3year', '0000-00-00'),
(16, 5353, 245678, '3year', '2022-10-09'),
(17, 5353, 245678, '3year', '2022-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`) VALUES
(1, 'tyedhoti@gmail.com', 'uidproje'),
(9, 'Prasoona@employee', '292002pr'),
(10, 'Prasoona', '292002'),
(11, 'Prasoona', '292002'),
(12, 'Thrinayni', '1000038'),
(13, 'Vikas', 'scam1992');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `name_oc` varchar(30) NOT NULL,
  `credit_no` varchar(16) NOT NULL,
  `amt` int(11) NOT NULL,
  `exp_month` int(2) NOT NULL,
  `exp_year` year(4) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `model_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `availability` varchar(15) NOT NULL DEFAULT 'Available',
  `model_year` year(4) NOT NULL,
  `vehicle_cost` int(10) NOT NULL,
  `vehicle_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`model_id`, `name`, `availability`, `model_year`, `vehicle_cost`, `vehicle_desc`) VALUES
(10001, 'Hyundai Ionic 5', 'Available', 2021, 4000000, 'With a 350 kW charger, IONIQ 5 can charge from 10 percent to 80 percent in just 18 minutes. IONIQ 5 users only need to charge the vehicle for five minutes to to get 100 km of range, according to WLTP.'),
(10002, 'Hyundai Tucson', 'Available', 2021, 2300000, 'Hands Free Smart Power Tail Gate With Height Adjustment. Drive Mode Select. Book TUCSON. Stylish Design, Sleek Lines & Bold Stance Stand Out No Matter What Environment It Is In. Athletic Performance. Premium Interiors. Advanced Safety.'),
(10003, 'Hyundai Kona Electri', 'Available', 2021, 2350000, 'Highest Electric Driving Range, Convenience to charge anywhere, Super Silent, Packed with Hi-Tech & Premium features, Design optimized for superior aerodynamics. High Electric Range. AC Wall Box Charger. All 4 Disc Brakes. Sport Driving Mode.'),
(10004, 'Hyundai Aura', 'Available', 2020, 600000, 'Complement your lifestyle with a touch of modern technology with The All New AURA. Relish its convenience in absolute comfort. Fall in love with its fresh, breathtaking design and captivating good looks that will set you apart and Make You Shine.'),
(10005, 'Hyundai Santro', 'Available', 2015, 600000, 'Tall Boy Design. High Front & Rear Headroom. High Seating Position with stylish interiors. Premium 2 Tone Beige and Black Interiors With Champagne Gold Inserts. Rear AC Vents. Rear Seat Bench Folding. New Age Technology. '),
(10006, 'Hyundai Verna', 'Available', 2018, 932000, 'The Verna has achieved zero stars in Latin NCAP crash tests.\r\n\r\nHyundai Verna Price: Hyundai retails the sedan from Rs 9.28 lakh to Rs 15.32 lakh (ex-showroom Delhi).\r\n\r\nHyundai Verna Variants: It is offered in four trims: E, S+, SX, and SX(O).'),
(10007, 'Hyundai i20', 'Available', 2022, 700000, 'The all-new i20 has been inspired from Hyundai\'s design DNA of “sensuous sportiness” with a dynamic look on the outside & luxurious feeling on the inside. Hyundai i20 is a 5 seater Hatchback available in a price range of Rs. 6.98 - 11.47 Lakh*.'),
(10008, 'Hyundai i10 Grand', 'Available', 2019, 503000, 'Hyundai Grand i10 is a 5 seater Hatchback with the last recorded price of ₹ 5.00 - 7.65 Lakh. The Hyundai Grand i10 powered by the 1.2-litre petrol motor is offered in a total of 6 variants, while the Grand i10 powered by the 1.2-litre diesel .'),
(10009, 'Hyundai Creta', 'Available', 2020, 102200, 'With a breathtakingly beautiful and edgy design, the All-new CRETA has been crafted to command respect. The bold exterior and the new masculine stance will set you apart from every other SUV on the road.'),
(10010, 'Hyundai Venue', 'Available', 2021, 699000, 'The price of Hyundai Venue starts at Rs. 6.99 Lakh and goes upto Rs. 11.87 Lakh. Hyundai Venue is offered in 18 variants - the base model of Venue is E and the top variant Hyundai Venue SX Plus Sport DCT which comes at a price tag of Rs. 11.87 Lakh.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booknow`
--
ALTER TABLE `booknow`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`ins_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`credit_no`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`model_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booknow`
--
ALTER TABLE `booknow`
  MODIFY `book_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `ins_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
