SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.021001100540161

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155399, '5', '1', '', '', '', '') 
 Execution Time:0.043002128601074

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155399, '', '', '', '', '', '') 
 Execution Time:0.043003082275391

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.031002044677734

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155400, '5', '1', '', '', '', '') 
 Execution Time:0.0019998550415039

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155400, '', '', '', '', '', '') 
 Execution Time:0.023000955581665

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.0019998550415039

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155401, '5', '1', '', '', '', '') 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155401, '', '', '', '', '', '') 
 Execution Time:0.0010001659393311

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم العجمى محمود', '', 'الخريجين', 1) 
 Execution Time:0.043002128601074

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155402, 1978, '1', '', '', '', '') 
 Execution Time:0.031002044677734

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155402, '', '', '', '', '', '') 
 Execution Time:0.011000871658325

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم عبد المعطى شلبى', '', 'الخريجين', 1) 
 Execution Time:0.003000020980835

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155403, 1978, '1', '', '', '', '') 
 Execution Time:0.002000093460083

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155403, '', '', '', '', '', '') 
 Execution Time:0.0019998550415039

INSERT INTO `lk9v6_users` (`name`, `email`, `usertype`, `approved`) VALUES ('ابتسام ابراهيم محمود زعرب', '', 'الخريجين', 1) 
 Execution Time:0.018001079559326

INSERT INTO `lk9v6_alumni_data` (`alumni_id`, `graduation_year`, `fid`, `gid`, `nationalnumber`, `department`, `division`) VALUES (155404, 1980, '1', '', '', '', '') 
 Execution Time:0.016000986099243

INSERT INTO `lk9v6_alumni_data_other` (`alumni_id`, `address`, `city`, `country`, `phone`, `job`, `mobile`) VALUES (155404, '', '', '', '', '', '') 
 Execution Time:0.052003145217896

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.033002138137817

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:6.7843890190125

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.55203104019165

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.056003093719482

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.033002138137817

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022001981735229

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155398'
AND `u`.`approved` =  1 
 Execution Time:0.056003093719482

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155398' 
 Execution Time:1.0770621299744

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
 Execution Time:0.91805291175842

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.069004058837891

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.019001007080078

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.019001007080078

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022001981735229

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.8951079845428

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.1751239299774

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.040002822875977

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.5670890808105

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.054003000259399

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.018000841140747

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.065004110336304

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.048002004623413

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '15282'
AND `u`.`approved` =  1 
 Execution Time:0.038002967834473

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '15282' 
 Execution Time:0.53402996063232

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
 Execution Time:1.6880970001221

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.044001817703247

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.02900218963623

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.031002044677734

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.9961140155792

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.080118894577

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.01400089263916

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.7300989627838

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.075003862380981

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.022001028060913

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8521' 
 Execution Time:0.048002004623413

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`graduation_year` =  '1969'
ORDER BY  RAND()
LIMIT 15 
 Execution Time:1.6460938453674

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`graduation_year` =  '1969'
ORDER BY  RAND()
LIMIT 15") 
 Execution Time:0.023001194000244

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
 Execution Time:1.8191041946411

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.045001983642578

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.018001079559326

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.054003000259399

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.044002056121826

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.071004152297974

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`graduation_year` =  '1997'
ORDER BY  RAND()
LIMIT 15 
 Execution Time:1.7290990352631

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`graduation_year` =  '1997'
ORDER BY  RAND()
LIMIT 15") 
 Execution Time:0.043002128601074

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.042001962661743

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.141065120697

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.045002937316895

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.040002107620239

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.019001007080078

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`graduation_year` =  '1997'
ORDER BY  RAND()
LIMIT 15, 15 
 Execution Time:2.5181438922882

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`graduation_year` =  '1997'
ORDER BY  RAND()
LIMIT 15, 15") 
 Execution Time:0.035001993179321

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.031001806259155

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.9771130084991

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.043002843856812

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.030001878738403

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.025000810623169

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.026001930236816

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.059004068374634

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`graduation_year` =  '1997'
ORDER BY  RAND()
LIMIT 30, 15 
 Execution Time:1.8331050872803

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`graduation_year` =  '1997'
ORDER BY  RAND()
LIMIT 30, 15") 
 Execution Time:0.039001941680908

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
 Execution Time:1.898108959198

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.05500316619873

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.04600191116333

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.013000965118408

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.475084066391

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.0350022315979

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.044002056121826

SELECT *
FROM (`lk9v6_users`)
WHERE `username` =  'admin'
LIMIT 1 
 Execution Time:0.0080010890960693

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.011000871658325

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.5030860900879

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.075003862380981

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021000862121582

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_users`)
WHERE `username` =  'm.medhat'
LIMIT 1 
 Execution Time:0.56203198432922

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.011000156402588

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.5820908546448

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.029001951217651

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.025000810623169

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.1000628471375

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.088005065917969

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.037002086639404

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.031002044677734

update lk9v6_alumni_data set cert_file='155359.jpg' where alumni_id=155359 
 Execution Time:0.015000820159912

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.012001037597656

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.3850789070129

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.036002159118652

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.020001173019409

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.043002128601074

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.7380990982056

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.2871310710907

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
 Execution Time:1.962112903595

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.060003042221069

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.030002117156982

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.019001007080078

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.021000862121582

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.004000186920166

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.010000944137573

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.023000955581665

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.9301099777222

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.047002077102661

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.015000820159912

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.027001857757568

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010008811950684

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.2301270961761

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.043001890182495

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.010000944137573

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

select * from lk9v6_users where 
       username='admin' and
       (password='202cb962ac59075b964b07152d234b70') 
 Execution Time:0.30001711845398

insert into lk9v6_debug(query) values ("select * from lk9v6_users where 
       username='admin' and
       (password='202cb962ac59075b964b07152d234b70')") 
 Execution Time:0.036001920700073

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0260009765625

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.015000820159912

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.011000871658325

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022000789642334

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.9871141910553

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.050002813339233

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022000789642334

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.053003072738647

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.6650948524475

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.030001163482666

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.040002107620239

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.011001110076904

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022001028060913

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.046003103256226

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.475084066391

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.031001091003418

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.013001203536987

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.015000820159912

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.011000871658325

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022001028060913

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.3180751800537

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.030001878738403

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.041002988815308

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.02000093460083

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.03200101852417

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039002895355225

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.015000820159912

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028001070022583

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_control_values`)
WHERE `control_id` =  2 
 Execution Time:0

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.6780960559845

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 2 
 Execution Time:0.048002958297729

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.036001920700073

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.011001110076904

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.017001152038574

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.218013048172

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.020001173019409

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.010000944137573

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.9171099662781

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 2 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0260009765625

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.23101282119751

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.049003124237061

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.015000104904175

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.02000093460083

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022000789642334

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.074003934860229

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.19401097297668

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.025002002716064

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.018001079559326

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.010001182556152

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022001028060913

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.086004972457886

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.15200901031494

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.024001121520996

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
 Execution Time:0.98305583000183

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.060003995895386

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.027002096176147

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.02000093460083

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.032001972198486

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.4380819797516

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:1.5060858726501

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0060009956359863

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.3660781383514

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.044002056121826

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.059003114700317

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.026002168655396

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8523' 
 Execution Time:0.082005023956299

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1 
 Execution Time:0.00099992752075195

insert into lk9v6_debug(query) values ("SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1") 
 Execution Time:0.036001920700073

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155359 
 Execution Time:0.017000913619995

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
 Execution Time:1.1450650691986

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.03400182723999

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.02800178527832

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8523' 
 Execution Time:0.025002002716064

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1 
 Execution Time:0.048002958297729

insert into lk9v6_debug(query) values ("SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1") 
 Execution Time:0.01400089263916

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.4700839519501

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 2 
 Execution Time:0.030001878738403

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.028002023696899

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.2130689620972

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.070003986358643

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.028002023696899

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.033002138137817

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8523' 
 Execution Time:0.025002002716064

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1 
 Execution Time:0.0010001659393311

insert into lk9v6_debug(query) values ("SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1") 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.013999938964844

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.020001173019409

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.19301104545593

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.056002855300903

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.9131090641022

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 2 
 Execution Time:0.031001806259155

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.035001993179321

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:0.9590539932251

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.040003061294556

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.028001070022583

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021000862121582

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8523' 
 Execution Time:0.027002096176147

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1 
 Execution Time:0.00099992752075195

insert into lk9v6_debug(query) values ("SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1") 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.014001131057739

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.4170808792114

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.049003124237061

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.029000997543335

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.023001909255981

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028000831604004

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1 
 Execution Time:0.081003904342651

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.2420129776001

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.037001848220825

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.015000820159912

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.011000871658325

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.033000946044922

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.068004131317139

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.17500996589661

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.041002988815308

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.02000093460083

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.014999866485596

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.022001981735229

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.021001100540161

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.043002128601074

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.11100697517395

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0010008811950684

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.035001993179321

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.13300800323486

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.021000862121582

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.1360080242157

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.024000883102417

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.14900898933411

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.019001007080078

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010011196136475

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.091005086898804

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.012000799179077

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.11800694465637

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.021000862121582

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.022001028060913

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.024002075195312

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.022001028060913

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022001981735229

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.064003944396973

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.15000796318054

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.011000871658325

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.11300611495972

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.021000862121582

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.083004951477051

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.034002065658569

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.15600776672363

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.019002199172974

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.12700700759888

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.002000093460083

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.090004920959473

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.013000011444092

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.13300800323486

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.025001049041748

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.011001110076904

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.021000862121582

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.087004899978638

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.16100907325745

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.018001079559326

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0010001659393311

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.10200595855713

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.092005014419556

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.0060000419616699

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0010008811950684

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.10000610351562

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.045001983642578

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.16700911521912

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.040002822875977

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.11500692367554

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359'") 
 Execution Time:0.017000913619995

