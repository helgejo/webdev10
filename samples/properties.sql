--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `name`, `location`, `description`, `details`, `photo`) VALUES
(1, 'Holiday home Røros', 'Røros, Sør-Trøndelag', 'The property features views of the sea and is 23 km from Røros.', 'The property features views of the sea and is 23 km from Røros.', 'property_1.png'),
(2, 'Oppdal Turisthotell', 'Oppdal, Sør-Trøndelag', 'It offers free parking and rooms with free WiFi and a private bathroom. Oppdal Ski Centre is a 10-minute walk away.', 'It offers free parking and rooms with free WiFi and a private bathroom. Oppdal Ski Centre is a 10-minute walk away.', 'property_2.png'),
(3, 'Granmo Camping', 'Oppdal, Sør-Trøndelag', 'Granmo Camping is scenically situated in Oppdal, right by Dovrefjell National Park. Facilities include a mini-market and, a snack bar and a shared kitchen.', 'Granmo Camping is scenically situated in Oppdal, right by Dovrefjell National Park. Facilities include a mini-market and, a snack bar and a shared kitchen.', 'property_3.png'),
(4, 'Sjøberg Ferie', 'Østhusvik, Rogaland', 'These modern apartments are set on Rennesøy island. Boats can be rented on site.', 'These modern apartments are set on Rennesøy island. Boats can be rented on site.', 'property_4.png'),
(5, 'Holiday home Jørpeland Høllesli', 'Forsand, Rogaland', 'Holiday home Jørpeland Høllesli offers accommodation in Forsand, 21 km from Stavanger and 23 km from Sandnes.', 'Holiday home Jørpeland Høllesli offers accommodation in Forsand, 21 km from Stavanger and 23 km from Sandnes.', 'property_5.png'),
(6, 'Høiland Gard', 'Årdal, Rogaland', 'This self catering accommodation, Høiland Gard, is located 5 minutes’ drive from Årdal village. Eventyrskogen Hiking Trail is 1 km away.', 'This self catering accommodation, Høiland Gard, is located 5 minutes’ drive from Årdal village. Eventyrskogen Hiking Trail is 1 km away.', 'property_6.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;