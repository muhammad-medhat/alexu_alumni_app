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
 Execution Time:1.5650899410248

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.057003021240234

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.054003000259399

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.023001909255981

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.02000093460083

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.7520999908447

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.1781249046326

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
 Execution Time:1.1810669898987

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.056003093719482

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.029001951217651

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.023001194000244

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8521' 
 Execution Time:0.035001993179321

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 15 
 Execution Time:1.0730609893799

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 15") 
 Execution Time:0.041002035140991

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
 Execution Time:1.1600661277771

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.016000032424927

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.03200101852417

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.019001007080078

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '152680'
AND `u`.`approved` =  1 
 Execution Time:0.62403583526611

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '152680' 
 Execution Time:0.051002979278564

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
 Execution Time:1.7701010704041

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.048002958297729

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.035001993179321

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.025002002716064

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028002023696899

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:3.9122240543365

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.0431158542633

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
 Execution Time:1.0110578536987

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.034002065658569

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.025001049041748

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.021000862121582

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '35180'
AND `u`.`approved` =  1 
 Execution Time:0.070003986358643

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '35180' 
 Execution Time:0.028002023696899

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.075003862380981

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.3830790519714

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.047002077102661

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.038002967834473

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0090000629425049

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.1240639686584

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:1.7851030826569

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.030002117156982

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.3810789585114

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.039001941680908

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.025002002716064

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.052002906799316

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.035001993179321

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '16319'
AND `u`.`approved` =  1 
 Execution Time:0.05500316619873

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '16319' 
 Execution Time:0.024001121520996

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
 Execution Time:1.1250641345978

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.051002979278564

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.035001993179321

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.022001028060913

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.020001888275146

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '16319'
AND `u`.`approved` =  1 
 Execution Time:0.077004194259644

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '16319' 
 Execution Time:0.23001313209534

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
 Execution Time:1.3970799446106

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.078005075454712

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.019001007080078

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.017000913619995

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
WHERE `u`.`id` =  '16319'
AND `u`.`approved` =  1 
 Execution Time:0.050003051757812

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '16319' 
 Execution Time:0.30601811408997

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.070003986358643

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.8731639385223

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.50902915000916

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.050003051757812

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.051002979278564

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.032001972198486

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '16319'
AND `u`.`approved` =  1 
 Execution Time:0.056004047393799

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '16319' 
 Execution Time:1.05806016922

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.024002075195312

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.4820849895477

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.050003051757812

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.029000997543335

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028002023696899

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '16319'
AND `u`.`approved` =  1 
 Execution Time:0.1100058555603

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '16319' 
 Execution Time:0.23901391029358

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
 Execution Time:1.0540599822998

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.037002086639404

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.019001007080078

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.066004037857056

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.034002065658569

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.6470937728882

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:1.6300938129425

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.041002035140991

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.5060861110687

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.047001838684082

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.031000852584839

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.026001930236816

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8521' 
 Execution Time:0.0090010166168213

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155380'
AND `u`.`approved` =  1 
 Execution Time:0.00099992752075195

insert into lk9v6_debug(query) values ("SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155380'
AND `u`.`approved` =  1") 
 Execution Time:0.014000177383423

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
 Execution Time:1.1970682144165

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.031001091003418

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0260009765625

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.027002096176147

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.0090010166168213

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 15 
 Execution Time:0.83004784584045

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 15") 
 Execution Time:0.044002056121826

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.020001173019409

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.0360598564148

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.056002855300903

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.028001070022583

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0260009765625

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.0099999904632568

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 15, 15 
 Execution Time:0.47402715682983

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 15, 15") 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0090000629425049

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.5480890274048

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.042001962661743

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.026002168655396

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.017001152038574

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.010001182556152

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 30, 15 
 Execution Time:0.45802688598633

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 30, 15") 
 Execution Time:0.024000883102417

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
 Execution Time:1.6160929203033

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.039001941680908

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.02000093460083

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.065004110336304

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.044002056121826

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.016000986099243

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 2955, 15 
 Execution Time:0.54803085327148

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 2955, 15") 
 Execution Time:0.025002002716064

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.023001194000244

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.4630830287933

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.039002895355225

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.030000925064087

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.027000904083252

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028002023696899

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.0090010166168213

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 2940, 15 
 Execution Time:1.0720620155334

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 2940, 15") 
 Execution Time:0.044002056121826

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0260009765625

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.1190638542175

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.039002895355225

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.030001163482666

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.026002168655396

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.027002096176147

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.0090010166168213

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 15 
 Execution Time:0.50702905654907

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 15") 
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.015001058578491

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:0.92905306816101

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.041002988815308

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.031000852584839

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.026001930236816

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028002023696899

SELECT *
FROM (`lk9v6_alexu_alumni_ci_query`)
WHERE `id` =  '8522' 
 Execution Time:0.0090010166168213

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 2955, 15 
 Execution Time:0.41302394866943

insert into lk9v6_debug(query) values ("SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
AND `g`.`fid` =  '1'
ORDER BY  RAND()
LIMIT 2955, 15") 
 Execution Time:0.034002065658569

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
 Execution Time:1.4700839519501

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.04200291633606

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.031001091003418

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0260009765625

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.017001152038574

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.024002075195312

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.4550828933716

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.036001920700073

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028002023696899

SELECT *
FROM (`lk9v6_users`)
WHERE `username` =  'g'
LIMIT 1 
 Execution Time:0.76804399490356

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.022001028060913

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.6040921211243

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.042001962661743

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.026001930236816

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.027000904083252

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
 Execution Time:1.6200921535492

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.059004068374634

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0260009765625

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.027002096176147

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
 Execution Time:1.3050739765167

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.041002035140991

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.019001007080078

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.058002948760986

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.04000186920166

update lk9v6_alumni_data set cert_file='155359.' where alumni_id=155359 
 Execution Time:0.065002918243408

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
 Execution Time:1.6040918827057

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.02000093460083

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.027002096176147

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028001070022583

update lk9v6_alumni_data set cert_file='155359.jpg' where alumni_id=155359 
 Execution Time:0.055002927780151

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.024000883102417

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.014000177383423

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.1560661792755

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.039001941680908

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.025001049041748

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.027001142501831

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.50202894210815

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.031001091003418

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.01400089263916

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.019001960754395

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.017000913619995

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.6890969276428

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.043002128601074

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.567088842392

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.045001983642578

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.02000093460083

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.016001224517822

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:0.90505218505859

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.042001962661743

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.030002117156982

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.026001930236816

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.53903102874756

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1 
 Execution Time:0.045001983642578

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.22801303863525

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
 Execution Time:1.6120920181274

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.030002117156982

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.027001142501831

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028002023696899

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155359' 
 Execution Time:0.2250120639801

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.022001028060913

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:0.97805595397949

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.047003030776978

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.030002117156982

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0260009765625

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.028001070022583

UPDATE `lk9v6_alumni_data_other` SET `id` = '131071', `alumni_id` = '155359', `job` = 'asdf', `address` = 'fasdf', `city` = '', `country` = '', `phone` = '', `month` = '', `mobile` = '' WHERE `alumni_id` =  '155359' 
 Execution Time:0.59203410148621

update lk9v6_users set email ='' where id=155359 
 Execution Time:0.031002044677734

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155359'
AND `u`.`approved` =  1 
 Execution Time:0.086004972457886

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039003133773804

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.2640719413757

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.047003030776978

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.032001972198486

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.019001007080078

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.017000913619995

SELECT COUNT(*) AS `numrows`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.1140639781952

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.020115852356

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.029001951217651

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.3800790309906

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.041002035140991

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.0080010890960693

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.022001028060913

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.036001920700073

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `temp_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '127886'
AND `u`.`approved` =  1 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_alumni_data_other`)
WHERE `alumni_id` =  '127886' 
 Execution Time:0.50702905654907

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.040002107620239

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.015000820159912

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.0070009231567383

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.011000156402588

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.018000841140747

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.6490950584412

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.033002138137817

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039001941680908

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0010001659393311

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.015001058578491

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_control_values`)
WHERE `control_id` =  2 
 Execution Time:0.010000944137573

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.15300798416138

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.3310759067535

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.12900686264038

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.078005075454712

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.024000883102417

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.024001836776733

SELECT COUNT(*) AS `numrows`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.5160870552063

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:1.43408203125

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.032001972198486

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.6120920181274

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.048002958297729

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.022000789642334

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.041002988815308

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.029000997543335

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `temp_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '132778'
AND `u`.`approved` =  1 
 Execution Time:0.07700514793396

SELECT *
FROM (`temp_alumni_data_other`)
WHERE `alumni_id` =  '132778' 
 Execution Time:0.36602115631104

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.04000186920166

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.4700841903687

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.040003061294556

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.035001993179321

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.025000810623169

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.022001981735229

SELECT COUNT(*) AS `numrows`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.1730670928955

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:1.869106054306

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.020002126693726

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.1560659408569

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.058002948760986

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.057003974914551

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.036001920700073

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.032001972198486

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `temp_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '133922'
AND `u`.`approved` =  1 
 Execution Time:0.013000011444092

SELECT *
FROM (`temp_alumni_data_other`)
WHERE `alumni_id` =  '133922' 
 Execution Time:0.36302089691162

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.016000986099243

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.4120810031891

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.060003995895386

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.022001028060913

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.024001121520996

SELECT COUNT(*) AS `numrows`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.2370710372925

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:1.8481059074402

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.029001951217651

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.4230811595917

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.042001962661743

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.048002958297729

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.034002065658569

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.032001972198486

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `temp_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155223'
AND `u`.`approved` =  1 
 Execution Time:0.014001131057739

SELECT *
FROM (`temp_alumni_data_other`)
WHERE `alumni_id` =  '155223' 
 Execution Time:0.45202612876892

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.038002014160156

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.4870851039886

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.041002035140991

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.021000862121582

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.026002168655396

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.024000883102417

SELECT COUNT(*) AS `numrows`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.9791131019592

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.0681180953979

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.03600287437439

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.4640829563141

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.039001941680908

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.023000955581665

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.061004161834717

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.030002117156982

SELECT COUNT(*) AS `numrows`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.7150979042053

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.1301219463348

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.038002014160156

