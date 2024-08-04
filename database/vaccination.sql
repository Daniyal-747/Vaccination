-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 11:17 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `Parent_Name` varchar(255) NOT NULL,
  `Child_Name` varchar(255) NOT NULL,
  `HOSPITAL_ID_FK` int(255) NOT NULL,
  `VACCINE_ID_FK` int(255) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `Remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `Parent_Name`, `Child_Name`, `HOSPITAL_ID_FK`, `VACCINE_ID_FK`, `Date`, `Status`, `Time`, `Remarks`) VALUES
(1, 'Mirza', 'Ghulam', 1, 1, '2024-06-03', '', '12:22', ''),
(2, 'Danial', 'Uzair', 1, 1, '2024-06-19', '', '14:24', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `CAT_Name` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `CAT_Name`, `Details`) VALUES
(1, 'Covid-19', 'Coronaviruses are a family of viruses that can cause illnesses such as the common cold, severe acute respiratory syndrome (SARS) and Middle East respiratory syndrome (MERS). In 2019, a new coronavirus was identified as the cause of a disease outbreak that'),
(2, 'Dengue', 'Dengue (DENG-gey) fever is a mosquito-borne illness that occurs in tropical and subtropical areas of the world. Mild dengue fever causes a high fever and flu-like symptoms. The severe form of dengue fever, also called dengue hemorrhagic fever, can cause s'),
(3, 'Influenza', 'Influenza, commonly known as \"the flu\" or just \"flu\", is an infectious disease caused by influenza viruses. Symptoms range from mild to severe and often include fever, runny nose, sore throat, muscle pain, headache, coughing, and fatigue. These symptoms b'),
(4, 'Polio', 'Poliomyelitis , commonly shortened to polio, is an infectious disease caused by the poliovirus.Approximately 75% of cases are asymptomatic; mild symptoms which can occur include sore throat and fever; in a proportion of cases more severe symptoms develop '),
(5, 'Chickenpox', 'Chickenpox, also known as varicella, is a highly contagious, vaccine-preventable disease caused by the initial infection with varicella zoster virus (VZV), a member of the herpesvirus family. The disease results in a characteristic skin rash that forms sm'),
(6, 'Tetanus', 'Tetanus, also known as lockjaw, is a bacterial infection caused by Clostridium tetani and characterized by muscle spasms. In the most common type, the spasms begin in the jaw, and then progress to the rest of the body. Each spasm usually lasts for a few m'),
(7, 'Rotavirus', 'The rotavirus vaccine is a vaccine used to protect against rotavirus infections, which are the leading cause of severe diarrhea among young children. The vaccines prevent 15–34% of severe diarrhea in the developing world and 37–96% of the risk of death am');

-- --------------------------------------------------------

--
-- Table structure for table `child_details`
--

CREATE TABLE `child_details` (
  `id` int(11) NOT NULL,
  `Child_Name` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Blood_Group` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `B_Certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`id`, `Child_Name`, `Gender`, `Blood_Group`, `DOB`, `B_Certificate`) VALUES
(8, 'Hira', 'Female', 'A+', '2020-07-26', 'certificate 1.webp'),
(10, 'Danial', 'Male', 'A+', '2003-05-07', 'certificate 3.jpg'),
(11, 'Hamza', 'Male', 'O-', '2022-06-03', 'certificate 3.jpg'),
(12, 'Behroz', 'Khan', 'B+', '2023-02-14', 'certificate 3.jpg'),
(13, 'Ahmed Raza', 'Male', 'A+', '2024-06-12', 'certificate 1.webp'),
(14, 'Hina', 'Female', 'O-', '2024-05-30', 'certificate 1.webp'),
(23, 'Sameen', 'Female', 'A+', '2024-06-07', 'certificate 2.webp');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `USER_ID_FK` int(11) NOT NULL,
  `Hospital_Name` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Hospital_Image` varchar(255) NOT NULL,
  `Details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `USER_ID_FK`, `Hospital_Name`, `Location`, `Contact`, `Hospital_Image`, `Details`) VALUES
(1, 4, 'Agha Khan', 'National Stadium Rd, Karachi.', '+92 21 111-911-911', 'agha khan.jpeg', 'Agha Khan'),
(2, 6, 'Dow University Hospital', 'Gulistan-e-Johar, Karachi.', '+92 21 111 113 847', 'dow.jpeg', 'Dow Hospital'),
(3, 7, 'Ziauddin Hospital', 'Allama Rasheed Turabi Rd, Wahid Colony, Karachi.', '+92 111 942 942', 'ziauddin.jpg', 'Ziauddin Hospital'),
(4, 5, 'Liaqat National', ' National Stadium Road, Karachi.', '+92 111 456 456', 'liaqat.png', 'Liaqat National');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `Role_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `Role_Name`) VALUES
(1, 'Admin'),
(2, 'Parent'),
(3, 'Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ROLE_ID_FK` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `User_Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ROLE_ID_FK`, `Username`, `Password`, `Contact`, `User_Image`) VALUES
(1, 1, 'Danial', 'Dania123', '0331-1234567', 'user 5.jpg'),
(2, 2, 'Hania', 'Hania123', '0331-2345678', 'user4.png'),
(3, 1, 'Ahmed', 'Ahmed123', '0345-2711234', 'user 6.jpg'),
(4, 3, 'Agha Khan', 'KhanAgha123', '+92 21 111-911-911', 'agha khan.jpeg'),
(5, 3, 'Liaqat National', 'Liaqat123', '+92 111 456 456', 'liaqat.png'),
(6, 3, 'Dow ', 'Dow123', '+92 21 111 113 847', 'dow.jpeg'),
(7, 3, 'Ziauddin', 'Ziauddin123', '+92 111 942 942', 'ziauddin.jpg'),
(8, 2, 'Jahanzaib', 'Jahanzaib123', '0321-1122334', 'user7.avif');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `First_Name`, `Last_Name`, `Email`, `Password`) VALUES
(1, 'Danial', 'Mirza', 'dani@gmail.com', 'Dani123'),
(2, 'Ahmed', 'Khan', 'ahmed@gmail.com', 'ahmed123'),
(3, 'Uzair', 'Khan', 'uzair@gmail.com', 'uzair123'),
(4, 'Babar', 'Azam', 'babar@gmail.com', 'babar123');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_availability`
--

CREATE TABLE `vaccine_availability` (
  `id` int(11) NOT NULL,
  `USER_ID_FK` int(11) NOT NULL,
  `VACCINE_ID_FK` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Hospital` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_availability`
--

INSERT INTO `vaccine_availability` (`id`, `USER_ID_FK`, `VACCINE_ID_FK`, `Status`, `Hospital`) VALUES
(1, 5, 2, 'Not Available', 'Liaqat National Hospital'),
(2, 4, 3, 'Available', 'Agha Khan Hospital'),
(3, 6, 1, 'Available', 'Dow University Hospital'),
(4, 7, 5, 'Available', 'Ziauddin Hospital'),
(5, 5, 1, 'Not Available', 'Liaqat National Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_detail`
--

CREATE TABLE `vaccine_detail` (
  `id` int(11) NOT NULL,
  `CAT_ID_FK` int(11) NOT NULL,
  `Vaccine_Name` varchar(255) NOT NULL,
  `Dose` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccine_detail`
--

INSERT INTO `vaccine_detail` (`id`, `CAT_ID_FK`, `Vaccine_Name`, `Dose`) VALUES
(1, 1, 'Pfizer', 'First'),
(2, 1, 'Moderana', 'First'),
(3, 3, 'Flu Shot', 'First'),
(4, 5, 'Varivax', 'First'),
(5, 7, 'RotaTeq', 'First');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `VACCINE_ID_FK` (`VACCINE_ID_FK`),
  ADD KEY `HOSPITAL_ID_FK` (`HOSPITAL_ID_FK`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child_details`
--
ALTER TABLE `child_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USER_ID_FK` (`USER_ID_FK`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ROLE_ID_FK` (`ROLE_ID_FK`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccine_availability`
--
ALTER TABLE `vaccine_availability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USER_ID_FK` (`USER_ID_FK`),
  ADD KEY `VACCINE_ID_FK` (`VACCINE_ID_FK`);

--
-- Indexes for table `vaccine_detail`
--
ALTER TABLE `vaccine_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CAT_ID_FK` (`CAT_ID_FK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `child_details`
--
ALTER TABLE `child_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccine_availability`
--
ALTER TABLE `vaccine_availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vaccine_detail`
--
ALTER TABLE `vaccine_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`VACCINE_ID_FK`) REFERENCES `vaccine_detail` (`id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`HOSPITAL_ID_FK`) REFERENCES `hospital` (`id`);

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `hospital_ibfk_1` FOREIGN KEY (`USER_ID_FK`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`ROLE_ID_FK`) REFERENCES `role` (`id`);

--
-- Constraints for table `vaccine_availability`
--
ALTER TABLE `vaccine_availability`
  ADD CONSTRAINT `vaccine_availability_ibfk_1` FOREIGN KEY (`USER_ID_FK`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `vaccine_availability_ibfk_2` FOREIGN KEY (`VACCINE_ID_FK`) REFERENCES `vaccine_detail` (`id`);

--
-- Constraints for table `vaccine_detail`
--
ALTER TABLE `vaccine_detail`
  ADD CONSTRAINT `vaccine_detail_ibfk_1` FOREIGN KEY (`CAT_ID_FK`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
