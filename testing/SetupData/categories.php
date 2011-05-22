<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @author Geoffray Warnants
 * @version 0.2b
 */

//
// Database "partdb"
//

// partdb.categories
$categories = array(
  array('id'=>8,'name'=>'SPG Regler verschieben','parentnode'=>7),
  array('id'=>199,'name'=>'1 Zubehör','parentnode'=>150),
  array('id'=>200,'name'=>'3 Spindeltrimmer','parentnode'=>149),
  array('id'=>10,'name'=>'Kondensatoren','parentnode'=>9),
  array('id'=>15,'name'=>'Folienkondensatoren','parentnode'=>10),
  array('id'=>14,'name'=>'Elektrolytkondensatoren','parentnode'=>10),
  array('id'=>16,'name'=>'Polystyrol MKS MKY','parentnode'=>15),
  array('id'=>41,'name'=>'3 Elektromechanische Bauelemente','parentnode'=>0),
  array('id'=>40,'name'=>'2 Passive Bauelemente ','parentnode'=>0),
  array('id'=>39,'name'=>'1 Aktive Bauelemente','parentnode'=>0),
  array('id'=>22,'name'=>'Aluminium-Elko','parentnode'=>14),
  array('id'=>43,'name'=>'5 Leitung und Leiter','parentnode'=>0),
  array('id'=>42,'name'=>'4 Schwingungserzeugende Bauelemente','parentnode'=>0),
  array('id'=>25,'name'=>'Kabel','parentnode'=>6),
  array('id'=>26,'name'=>'Koaxialkabel','parentnode'=>6),
  array('id'=>27,'name'=>'Leiterplatten','parentnode'=>6),
  array('id'=>45,'name'=>'7 Sensoren','parentnode'=>0),
  array('id'=>44,'name'=>'6 Aktoren','parentnode'=>0),
  array('id'=>46,'name'=>'8 Module & Systeme','parentnode'=>0),
  array('id'=>33,'name'=>'Energiequellen','parentnode'=>32),
  array('id'=>34,'name'=>'Röhren','parentnode'=>32),
  array('id'=>35,'name'=>'Halbleiter','parentnode'=>32),
  array('id'=>36,'name'=>'Optoelektronische Bauelemente','parentnode'=>32),
  array('id'=>47,'name'=>'9 Mechanische Elemente','parentnode'=>0),
  array('id'=>48,'name'=>'A Verbrauchsmaterial','parentnode'=>0),
  array('id'=>49,'name'=>'1 Schrumpfschlauch','parentnode'=>48),
  array('id'=>50,'name'=>'2 Klebetechnik','parentnode'=>48),
  array('id'=>51,'name'=>'1 Schrauben','parentnode'=>47),
  array('id'=>52,'name'=>'2 Mutter','parentnode'=>47),
  array('id'=>54,'name'=>'3 Unterlagscheiben','parentnode'=>47),
  array('id'=>59,'name'=>'5 Gehäuse','parentnode'=>47),
  array('id'=>58,'name'=>'6 Kühltechnik','parentnode'=>47),
  array('id'=>60,'name'=>'4 Abstandshalter','parentnode'=>47),
  array('id'=>61,'name'=>'1 Schaltnetzteile','parentnode'=>46),
  array('id'=>62,'name'=>'1 Mikrofon','parentnode'=>45),
  array('id'=>63,'name'=>'1 Elektromotoren','parentnode'=>44),
  array('id'=>64,'name'=>'2 Schrittmotoren','parentnode'=>44),
  array('id'=>65,'name'=>'3 Elektromagnet','parentnode'=>44),
  array('id'=>66,'name'=>'4 Lautsprecher','parentnode'=>44),
  array('id'=>67,'name'=>'1 Schwingquarze','parentnode'=>42),
  array('id'=>68,'name'=>'2 Quarzoszillatoren','parentnode'=>42),
  array('id'=>69,'name'=>'1 Leitung','parentnode'=>43),
  array('id'=>70,'name'=>'2 Koaxialkabel','parentnode'=>43),
  array('id'=>71,'name'=>'3 Flachbandleitung','parentnode'=>43),
  array('id'=>72,'name'=>'4 Litze','parentnode'=>43),
  array('id'=>73,'name'=>'5 Drähte','parentnode'=>43),
  array('id'=>74,'name'=>'6 Leiterplatinen','parentnode'=>43),
  array('id'=>75,'name'=>'1 Halbleiter','parentnode'=>39),
  array('id'=>76,'name'=>'5 Röhren','parentnode'=>39),
  array('id'=>77,'name'=>'1 Nixie-Röhre','parentnode'=>76),
  array('id'=>78,'name'=>'4 Energiequellen','parentnode'=>39),
  array('id'=>79,'name'=>'1 Batterie','parentnode'=>78),
  array('id'=>80,'name'=>'2 Akku','parentnode'=>78),
  array('id'=>81,'name'=>'3 Solarzelle','parentnode'=>78),
  array('id'=>82,'name'=>'4 # Peltier-Element ','parentnode'=>78),
  array('id'=>83,'name'=>'5 Generator','parentnode'=>78),
  array('id'=>84,'name'=>'3 Optoelektronische Bauelemente','parentnode'=>39),
  array('id'=>85,'name'=>'1 Laserdiode','parentnode'=>84),
  array('id'=>86,'name'=>'2 Leuchtdioden','parentnode'=>84),
  array('id'=>87,'name'=>'3 LCD','parentnode'=>84),
  array('id'=>88,'name'=>'4 Lichtschranke','parentnode'=>84),
  array('id'=>89,'name'=>'5 Fotohalbleiter','parentnode'=>84),
  array('id'=>90,'name'=>'1 Fotodiode','parentnode'=>89),
  array('id'=>91,'name'=>'2 Fototransistor','parentnode'=>89),
  array('id'=>92,'name'=>'3 Solid-state-Relais ','parentnode'=>89),
  array('id'=>93,'name'=>'4 CCD & CMOS-Sensoren ','parentnode'=>89),
  array('id'=>94,'name'=>'1 Universal','parentnode'=>86),
  array('id'=>95,'name'=>'2 RGB','parentnode'=>86),
  array('id'=>96,'name'=>'3 HighPower','parentnode'=>86),
  array('id'=>97,'name'=>'4 LED Array ','parentnode'=>86),
  array('id'=>98,'name'=>'5 7-Segment ','parentnode'=>86),
  array('id'=>99,'name'=>'6 Zubehör','parentnode'=>86),
  array('id'=>100,'name'=>'1 Dioden','parentnode'=>75),
  array('id'=>101,'name'=>'2 Transistoren','parentnode'=>75),
  array('id'=>102,'name'=>'3 Thyristor','parentnode'=>75),
  array('id'=>103,'name'=>'4 Diac','parentnode'=>75),
  array('id'=>104,'name'=>'5 Triac','parentnode'=>75),
  array('id'=>105,'name'=>'6 Piezoelemente','parentnode'=>75),
  array('id'=>106,'name'=>'1 NPN','parentnode'=>101),
  array('id'=>107,'name'=>'2 PNP','parentnode'=>101),
  array('id'=>108,'name'=>'3 Darlington-Transistor ','parentnode'=>101),
  array('id'=>109,'name'=>'4 Sperrschicht-Feldeffekttransistor (JFET) ','parentnode'=>101),
  array('id'=>110,'name'=>'5 Metalloxid-Feldeffekttransistor (MOSFET) ','parentnode'=>101),
  array('id'=>111,'name'=>'6 Leistungs-Metalloxid-Feldeffekttransistor (Power MOSFET) ','parentnode'=>101),
  array('id'=>112,'name'=>'1 Universaldioden','parentnode'=>100),
  array('id'=>113,'name'=>'2 Gleichrichter','parentnode'=>100),
  array('id'=>114,'name'=>'3 Zener-Diode','parentnode'=>100),
  array('id'=>115,'name'=>'4 Schottky-Diode ','parentnode'=>100),
  array('id'=>116,'name'=>'5 Kapazitätsdiode','parentnode'=>100),
  array('id'=>117,'name'=>'1 Widerstand','parentnode'=>40),
  array('id'=>118,'name'=>'2 Kondensatoren','parentnode'=>40),
  array('id'=>119,'name'=>'3 Induktive Bauelemente','parentnode'=>40),
  array('id'=>120,'name'=>'4 Sonstige passive Bauelemente','parentnode'=>40),
  array('id'=>121,'name'=>'1 elektrische Leuchtmittel ','parentnode'=>120),
  array('id'=>122,'name'=>'2 Memristor','parentnode'=>120),
  array('id'=>123,'name'=>'3 Fluxkompensatoren','parentnode'=>120),
  array('id'=>124,'name'=>'1 unter 88 Meilen / Stunde','parentnode'=>123),
  array('id'=>125,'name'=>'2 über 88 Meilen / Stunde','parentnode'=>123),
  array('id'=>126,'name'=>'1 Induktivität','parentnode'=>119),
  array('id'=>127,'name'=>'2 Spule','parentnode'=>119),
  array('id'=>128,'name'=>'3 Drossel','parentnode'=>119),
  array('id'=>129,'name'=>'4 Transformatoren','parentnode'=>119),
  array('id'=>130,'name'=>'5 Übertrager','parentnode'=>119),
  array('id'=>131,'name'=>'1 Keramikkondensator','parentnode'=>118),
  array('id'=>132,'name'=>'2 Kunststoff-Folienkondensator ','parentnode'=>118),
  array('id'=>133,'name'=>'3 Gold-Cap ','parentnode'=>118),
  array('id'=>134,'name'=>'4 Styroflexkondensator','parentnode'=>118),
  array('id'=>135,'name'=>'5 Elektrolytkondensatoren','parentnode'=>118),
  array('id'=>136,'name'=>'6 Glimmerkondensatoren','parentnode'=>118),
  array('id'=>137,'name'=>'7 Variable Kondensatoren','parentnode'=>118),
  array('id'=>138,'name'=>'1 Aluminium-Elektrolytkondensatoren','parentnode'=>135),
  array('id'=>139,'name'=>'2 Tantal-Elektrolytkondensator ','parentnode'=>135),
  array('id'=>140,'name'=>'3 Bipolar-Elektrolytkondensator ','parentnode'=>135),
  array('id'=>141,'name'=>'1 Polyester MKT MKH','parentnode'=>132),
  array('id'=>142,'name'=>'2 Polycarbonat MKM MKC ','parentnode'=>132),
  array('id'=>143,'name'=>'3 Zelluloseazetat MKU MKL ','parentnode'=>132),
  array('id'=>144,'name'=>'4 Polystyrol MKS MKY ','parentnode'=>132),
  array('id'=>145,'name'=>'5 Polypropylen MKP ','parentnode'=>132),
  array('id'=>146,'name'=>'1 Festwiderstände','parentnode'=>117),
  array('id'=>147,'name'=>'2 Nichtlineare Widerstände','parentnode'=>117),
  array('id'=>148,'name'=>'3 Varistoren','parentnode'=>117),
  array('id'=>149,'name'=>'4 Variable Widerstände ','parentnode'=>117),
  array('id'=>150,'name'=>'1 Potentiometer','parentnode'=>149),
  array('id'=>151,'name'=>'2 Trimwiederstand','parentnode'=>149),
  array('id'=>152,'name'=>'1 Kaltleiter (PTC) ','parentnode'=>147),
  array('id'=>153,'name'=>'2 PT100','parentnode'=>147),
  array('id'=>154,'name'=>'3 Heißleiter (NTC) ','parentnode'=>147),
  array('id'=>155,'name'=>'1 Kohleschickt','parentnode'=>146),
  array('id'=>156,'name'=>'2 Metallschicht','parentnode'=>146),
  array('id'=>157,'name'=>'3 Shunt','parentnode'=>146),
  array('id'=>158,'name'=>'4 Heizwiderstand','parentnode'=>146),
  array('id'=>159,'name'=>'5 Fotowiderstand','parentnode'=>146),
  array('id'=>160,'name'=>'1 Schalter','parentnode'=>41),
  array('id'=>161,'name'=>'2 Taster','parentnode'=>41),
  array('id'=>162,'name'=>'3 Verbinder','parentnode'=>41),
  array('id'=>163,'name'=>'4 Relais','parentnode'=>41),
  array('id'=>164,'name'=>'5 Schütze','parentnode'=>41),
  array('id'=>165,'name'=>'6 Leitungs-, Motorschutzschalter ','parentnode'=>41),
  array('id'=>166,'name'=>'1 Schraubklemmen','parentnode'=>162),
  array('id'=>167,'name'=>'2 Löttechnik','parentnode'=>162),
  array('id'=>168,'name'=>'3 Steckverbinder','parentnode'=>162),
  array('id'=>169,'name'=>'1 Koaxial','parentnode'=>168),
  array('id'=>170,'name'=>'2 Rund','parentnode'=>168),
  array('id'=>171,'name'=>'3 Rechteckig ','parentnode'=>168),
  array('id'=>172,'name'=>'4 Reihenklemmen','parentnode'=>168),
  array('id'=>173,'name'=>'5 Leiterplattenverbinder','parentnode'=>168),
  array('id'=>174,'name'=>'6 Steckverbinderzubehör','parentnode'=>168),
  array('id'=>175,'name'=>'7 Fassungen & Sockel','parentnode'=>168),
  array('id'=>176,'name'=>'1 IC Sockel','parentnode'=>175),
  array('id'=>177,'name'=>'2 Integrierte Schaltkreise (ICs) ','parentnode'=>39),
  array('id'=>178,'name'=>'1 ROM','parentnode'=>177),
  array('id'=>179,'name'=>'2 RAM','parentnode'=>177),
  array('id'=>180,'name'=>'3 Mikroprozessoren','parentnode'=>177),
  array('id'=>181,'name'=>'4 Analog ICs ','parentnode'=>177),
  array('id'=>182,'name'=>'5 Logikgatter','parentnode'=>177),
  array('id'=>183,'name'=>'1 TTL','parentnode'=>182),
  array('id'=>184,'name'=>'2 CMOS','parentnode'=>182),
  array('id'=>185,'name'=>'6 Operationsverstärker','parentnode'=>177),
  array('id'=>186,'name'=>'7 Spannungsregler','parentnode'=>177),
  array('id'=>187,'name'=>'8 Optokoppler','parentnode'=>177),
  array('id'=>188,'name'=>'9 Digital-Analog-Umsetzer, Analog-Digital-Umsetzer ','parentnode'=>177),
  array('id'=>189,'name'=>'A GAL, PAL, FPGA','parentnode'=>177),
  array('id'=>190,'name'=>'8 Laborstecker','parentnode'=>168),
  array('id'=>191,'name'=>'7 Brückengleichrichter','parentnode'=>75),
  array('id'=>192,'name'=>'7 Sicherungen & Zubehör','parentnode'=>41),
  array('id'=>193,'name'=>'5 Lüfter','parentnode'=>44),
  array('id'=>194,'name'=>'6 Lampen','parentnode'=>84),
  array('id'=>195,'name'=>'7 Glasfasertechnik','parentnode'=>84),
  array('id'=>196,'name'=>'5 Widerstandsnetzwerke','parentnode'=>117),
  array('id'=>197,'name'=>'1 SMD','parentnode'=>196),
  array('id'=>198,'name'=>'6 Drahtwiderstand','parentnode'=>146),
  array('id'=>201,'name'=>'7 Drahtstifte','parentnode'=>47),
  array('id'=>202,'name'=>'8 Federn','parentnode'=>47),
  array('id'=>203,'name'=>'9 Dübel','parentnode'=>47),
  array('id'=>204,'name'=>'A Sonstiges','parentnode'=>47)
);
