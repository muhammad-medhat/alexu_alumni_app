SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.049002885818481

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.049002885818481

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155372, '5', '1', '', '', '', '') 
 Execution Time:0.029000997543335

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155372, '', '', '', '', '', '') 
 Execution Time:0.022001981735229

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.035001993179321

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155373, '5', '1', '', '', '', '') 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155373, '', '', '', '', '', '') 
 Execution Time:0.00099992752075195

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.075005054473877

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155374, '5', '1', '', '', '', '') 
 Execution Time:0.016001224517822

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155374, '', '', '', '', '', '') 
 Execution Time:0.020001173019409

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.02000093460083

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155375, '5', '1', '', '', '', '') 
 Execution Time:0.040002822875977

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155375, '', '', '', '', '', '') 
 Execution Time:0.019001007080078

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.024001121520996

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155376, '5', '1', '', '', '', '') 
 Execution Time:0.024001836776733

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155376, '', '', '', '', '', '') 
 Execution Time:0.00099992752075195

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.0010001659393311

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155377, '5', '1', '', '', '', '') 
 Execution Time:0.01400089263916

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155377, '', '', '', '', '', '') 
 Execution Time:0.015001058578491

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.015000820159912

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155378, '5', '1', '', '', '', '') 
 Execution Time:0.035001993179321

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155378, '', '', '', '', '', '') 
 Execution Time:0.028001070022583

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.026002168655396

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155379, '5', '1', '', '', '', '') 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155379, '', '', '', '', '', '') 
 Execution Time:0.025002002716064

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155380, '5', '1', '', '', '', '') 
 Execution Time:0.043003082275391

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155380, '', '', '', '', '', '') 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0069999694824219

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.1941261291504

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.048002004623413

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.033000946044922

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000986099243

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:2.4881420135498

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:3.1061780452728

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.017001152038574

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.7271559238434

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.040003061294556

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013999938964844

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000032424927

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '95' 
 Execution Time:0.010999917984009

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155380'
AND `u`.`approved` =  1 
 Execution Time:0.027000904083252

insert into lk9v6_debug(query) values ("SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155380'
AND `u`.`approved` =  1") 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.013000011444092

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.008113861084

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.045001983642578

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.035001993179321

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013001203536987

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000986099243

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155380'
AND `u`.`approved` =  1 
 Execution Time:0.059004068374634

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155380' 
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0090000629425049

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.018001079559326

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.048002958297729

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155381, '5', '1', '', '', '', '') 
 Execution Time:0.061002969741821

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155381, '', '', '', '', '', '') 
 Execution Time:0.028001070022583

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155382, '5', '1', '', '', '', '') 
 Execution Time:0.01400089263916

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155382, '', '', '', '', '', '') 
 Execution Time:0.023002147674561

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155383, '5', '1', '', '', '', '') 
 Execution Time:0.020001173019409

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155383, '', '', '', '', '', '') 
 Execution Time:0.026002168655396

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.054003000259399

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155384, '5', '1', '', '', '', '') 
 Execution Time:0.061002969741821

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155384, '', '', '', '', '', '') 
 Execution Time:0.029001951217651

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155385, '5', '1', '', '', '', '') 
 Execution Time:0.032002210617065

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155385, '', '', '', '', '', '') 
 Execution Time:0.0019998550415039

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.027001857757568

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155386, '5', '1', '', '', '', '') 
 Execution Time:0.0039999485015869

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155386, '', '', '', '', '', '') 
 Execution Time:0.011001110076904

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.058003187179565

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155387, 1978, '1', '', '', '', '') 
 Execution Time:0.035001993179321

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155387, '', '', '', '', '', '') 
 Execution Time:0.042001962661743

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.022001028060913

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155388, 1978, '1', '', '', '', '') 
 Execution Time:0.0010001659393311

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155388, '', '', '', '', '', '') 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.0010001659393311

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155389, 1980, '1', '', '', '', '') 
 Execution Time:0.00099992752075195

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155389, '', '', '', '', '', '') 
 Execution Time:0.027002096176147

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.063004016876221

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155390, 1978, '1', '', '', '', '') 
 Execution Time:0.045002937316895

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155390, '', '', '', '', '', '') 
 Execution Time:0.023000955581665

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.037002086639404

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155391, 1978, '1', '', '', '', '') 
 Execution Time:0.016000986099243

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155391, '', '', '', '', '', '') 
 Execution Time:0.0010001659393311

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.032001972198486

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155392, 1980, '1', '', '', '', '') 
 Execution Time:0.034002065658569

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155392, '', '', '', '', '', '') 
 Execution Time:0.02000093460083

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.055004119873047

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155393, 1978, '1', '', '', '', '') 
 Execution Time:0.060003042221069

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155393, '', '', '', '', '', '') 
 Execution Time:0.063004016876221

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155394, 1978, '1', '', '', '', '') 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155394, '', '', '', '', '', '') 
 Execution Time:0.0010001659393311

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.003000020980835

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155395, 1980, '1', '', '', '', '') 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155395, '', '', '', '', '', '') 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.037002086639404

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.3171319961548

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.040002107620239

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.012000799179077

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000986099243

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:3.0251729488373

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:3.4531970024109

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.016000986099243

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.5841479301453

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.0260009765625

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.01400089263916

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '96' 
 Execution Time:0.010000944137573

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.063004016876221

insert into lk9v6_debug(query) values ("SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1") 
 Execution Time:0.061002969741821

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.045003175735474

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.7171559333801

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.040002107620239

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.015001058578491

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.031001091003418

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.036001920700073

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.451140165329

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.050003051757812

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.011001110076904

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000986099243

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.018001079559326

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.031000852584839

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.0251150131226

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.043003082275391

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.030001878738403

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013000011444092

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.018001079559326

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.013000011444092

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.029001951217651

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.1101200580597

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.047003030776978

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.015001058578491

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.11000609397888

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.022001028060913

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.038002014160156

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.9511108398438

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.058003902435303

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.030001163482666

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.038003206253052

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.030000925064087

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.019001960754395

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.032001972198486

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.168123960495

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.043001890182495

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.015000820159912

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.043002128601074

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.8941090106964

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.039001941680908

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.02900218963623

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.023000955581665

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.025002002716064

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.049002885818481

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.0090010166168213

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.017000913619995

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.1641240119934

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.039001941680908

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.02900218963623

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.023000955581665

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.026002168655396

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.049002885818481

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.011001110076904

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.03400182723999

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.4291388988495

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.049002170562744

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.040003061294556

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.027000904083252

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.028001070022583

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.03200101852417

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.9761128425598

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.034002065658569

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.033000946044922

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.014999866485596

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.015000104904175

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.10900712013245

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.011000156402588

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.031002044677734

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.0681178569794

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.029001951217651

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.015001058578491

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.01400089263916

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.018001079559326

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.8631639480591

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.023000955581665

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.033001184463501

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.01400089263916

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000986099243

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.017001152038574

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.014001131057739

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.015001058578491

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155396, 1978, '1', '', '', '', '') 
 Execution Time:0.034002065658569

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155396, '', '', '', '', '', '') 
 Execution Time:0.0019998550415039

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.018001079559326

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155397, 1978, '1', '', '', '', '') 
 Execution Time:0.019001007080078

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155397, '', '', '', '', '', '') 
 Execution Time:0.02000093460083

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155398, 1980, '1', '', '', '', '') 
 Execution Time:0.037002801895142

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155398, '', '', '', '', '', '') 
 Execution Time:0.031001091003418

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0080010890960693

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.7541570663452

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.034002065658569

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '97' 
 Execution Time:0.011000871658325

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.040003061294556

insert into lk9v6_debug(query) values ("SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1") 
 Execution Time:0.010999917984009

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0080010890960693

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.6191499233246

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000986099243

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155395'
AND `u`.`approved` =  1 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155395' 
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.010000944137573

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.3071320056915

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.027001142501831

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.022001028060913

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.02000093460083

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155398'
AND `u`.`approved` =  1 
 Execution Time:0.039003133773804

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155398' 
 Execution Time:0.037002086639404

