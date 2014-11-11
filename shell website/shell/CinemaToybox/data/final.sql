DROP DATABASE IF EXISTS home_theater;
CREATE DATABASE IF NOT EXISTS home_theater;
USE home_theater;

CREATE TABLE products(
	id INT PRIMARY KEY auto_increment,
	product_type ENUM ("Television","Audio","Accessories","Theater Kit"),
	prod_head CHAR(75),
	brand CHAR(30),
	price DEC (8,2),
	bg_img CHAR(75),
	tm_img CHAR(75),
	prod_desc TEXT,
	mini_desc TEXT
)ENGINE=InnoDB;


/*Table Data*/

INSERT INTO products
	VALUES 
	(null, "Theater Kit","Innotech Home Theater Kit","Innotech",2899.99,"kit.jpg","th_kit.jpg","Watch your movie collection come to new life with all the richness this Innotech 60inch HDTV provides.  This LED TV has a brilliant 1080p 240hz picture that will stand out in any game room.  This kit also includes Innotech's 7.1 surround sound system to capture the whole home cinema experience.  Also a smart TV, you can enjoy internet applications from the comfort of your couch. Apps include Netflix, Hulu, and iTunes.  Comes with a one year manufacturer warranty that covers parts and labor.  Extended warranty also available.","Watch your movie collection come to new life with all the richness this Innotech....."),
	
	(null, "Television","Kiawi 52 inch LED HDTV","Kiawi",1499.99,"kiawi52.jpg","th_kiawi52.jpg","This big screen LED television works at its best in well lit rooms. Watch Blu-ray movies and 1080p HD content at their highest level of detail.  Advanced TV sound with two internal 10W speakers to make dialogue easier to understand. With four HDMI inputs, you will have no problem connecting multiple components to this system. Watch fast-moving movies, sports and video games with a minimum of motion blur with it's 120 hz refresh rate. ","This big screen LED television works at its best in well lit rooms....."),
	
	(null, "Accessories","Innotech Universal Remote","Innotech",299.99,"remote.jpg","th_remote.jpg","Now you can control every component in your home with one remote! This universal remote features a touch LCD screen that can operate up to ten different devices in your home, including your television, receiver, Blu-ray player, fireplace, ceiling fans, and much more. It also features favorite channel icons, AM/FM radio tuner, channel preview, and one touch functions.  Easy set up. Rechargeable lithium ion battery.  Includes a one year manufacturer warranty.","Now you can control every component in your home with one remote! This universal remote....."),
	
	(null, "Audio","Patson Electronics 5.1 Dolby Digital Receiver","Patson Electronics",599.99,"receiver.jpg","th_receiver.jpg","5.1 dolby digital surround sound receiver. 600 watt total system power.  HDMI inputs and outputs that carry stunning high definition sound. AM/FM tuner with built in antenna.  Seven different sound modes that can be customized to your listening preference.   Calibration kit included so sound can be optimized in any room.  One year manufacturer warranty included.","5.1 dolby digital surround sound receiver. 600 watt total system power....."),
	
	(null,"Accessories","Patson Electronics 6' HDMI Cable","Patson Electronics",19.99,"hdmicable.jpg","th_hdmicable.jpg","Display all video imagery at its highest level using HDMI.  This HDMI cable features up to 10.2 Gbps bandwidth and is compatible with most HDMI sources, including Blu-ray Disc players for stunning high-definition images. The 6' cable also supports HDMI Ethernet Channel (HEC) and Audio Return Channel (ARC) for wide-ranging use. One year warranty included.","Display all video imagery at its highest level using HDMI.  This HDMI cable....."),
	(null,"Accessories","Innotech Blu-Ray Player","Innotech",299.99,"bluray.jpg","th_bluray.jpg","Enjoy stunning video imagery with this Innotech BD-F5100 Blu-ray player, which features DVD upconversion, so you can watch your favorite DVDs and Blu-ray Discs in crisp high-definition. A coaxial digital audio output simplifies connection of external speakers. HDMI cable not included. High-speed HDMI cable is the only connection that can deliver a Blu-ray experience with a full 1080p picture and digital surround sound.","Enjoy stunning video imagery with this Innotech BD-F5100 Blu-ray player, which features DVD upconversion, so you can watch....."),
	
	(null,"Television","Miatchi 42 inch Plasma TV","Miatchi",999.99,"miatchi42.jpg","th_miatchi42.jpg","Enjoy your favorite movies, TV shows and sports with this Miatchi plasma HDTV that features 600Hz Max Sub Field Driving for a bright, clear picture during fast-action scenes. Smart capability provides access to Netflix, YouTube and other instant content. 2-channel sound system. Features speakers that deliver up to 20W, plus 7 sound modes and 3 sound optimizer modes, for powerful audio. Inputs include 3 HDMI (1 side, 2 rear), 1 shared component video/composite (rear) and 1 RF antenna/cable (rear).  One year manufacturer warranty included.","Enjoy your favorite movies, TV shows and sports with this Miatchi plasma HDTV....."),
	
	(null,"Audio","Innotech iNstyle Speakers","Innotech",399.99,"inospeakers.jpg","th_inospeakers.jpg","The power of a 5.1 surround sound system is packed into these two four inch speakers. Wireless technology makes these easy to install.  Speaker cable provided if hard wired is preferred.  Compatible with most receivers. Custom audio calibration kit included. One year manufacturer warranty.","The power of a 5.1 surround sound system is packed into these two four inch speakers......"),
	
	(null,"Television","Patson Electronics 55-inch LED Blade","Patson Electronics",1599.99,"patson55.jpg","th_patson55.jpg","This 55-inch TV is large enough to provide an immersive experience for everyone in the room. 1080p resolution for stunning HD images. Watch Blu-ray movies and 1080p HD content at their highest level of detail. 240Hz refresh rate for smooth action scenes. Watch fast-moving movies, sports and video games with virtually no motion blur. Uses the same passive 3D technology found in movie theaters. 8 pairs of 3D glasses are included. Additional pairs sold separately. One year manufacturer warranty included.","This 55-inch TV is large enough to provide an immersive experience for everyone in the room....."),
	
	(null,"Television","Miatchi 70 inch Projection TV","Miatchi",899.99,"miatchi70.jpg","th_miatchi70.jpg","This large projection screen will give any game room the look and feel of a movie theater. HDMI inputs for optimal viewing quality.  Miatchi surround sound is built into the base. 3D ready.  Several different picture filters for an optimal viewing experience.  One year manufacturer warranty included.","This large projection screen will give any game room the look and feel of a movie theater.....");



CREATE TABLE user(
	id INT PRIMARY KEY auto_increment,
	username CHAR(10),
	password CHAR(6),
	privilege ENUM('normal','admin')
);

INSERT INTO user
	
	VALUES
	(null,'boss','boss','admin');



SELECT * FROM products;
SELECT * FROM user;