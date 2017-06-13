SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.040000915527344

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
 Execution Time:0.010999917984009

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4200959205627

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
 Execution Time:0.010001182556152

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
 Execution Time:0.0080010890960693

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3221318721771

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.035001993179321

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039002180099487

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
 Execution Time:0.0079998970031738

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
 Execution Time:2.2731080055237

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.028002023696899

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.022001028060913

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.035001993179321

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.7601008415222

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.6851539611816

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
 Execution Time:1.6860961914062

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.028002023696899

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.02000093460083

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.035001993179321

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.7570998668671

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.6861538887024

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.023000955581665

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.005000114440918

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0079998970031738

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0029997825622559

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013001203536987

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.1881251335144

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.044003009796143

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.049999952316284

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
 Execution Time:0.0099999904632568

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
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3901371955872

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
 Execution Time:0.030001878738403

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
 Execution Time:0.011001110076904

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3221328258514

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.044002056121826

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039003133773804

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
 Execution Time:0.010000944137573

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2981312274933

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.045003175735474

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.030002117156982

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

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
 Execution Time:2.1961250305176

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.045002937316895

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.019999980926514

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.1051199436188

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.034002065658569

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.049999952316284

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0090010166168213

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.0781190395355

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.045002937316895

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.019999980926514

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
 Execution Time:0.02000093460083

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
 Execution Time:2.2831311225891

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.045002222061157

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.026001214981079

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0099999904632568

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
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4061379432678

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.033002138137817

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0099999904632568

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
 Execution Time:2.3111319541931

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.045003175735474

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039999961853027

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
 Execution Time:0.019999980926514

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.5820050239563

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.029999971389771

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039999961853027

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
 Execution Time:0.013999938964844

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3770060539246

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.049999952316284

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.020001173019409

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
 Execution Time:0.010000944137573

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2701008319855

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.06000018119812

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.029999971389771

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
 Execution Time:0.019999980926514

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
 Execution Time:2.2320039272308

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.030000925064087

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.032999992370605

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0099999904632568

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
 Execution Time:2.360004901886

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.039999961853027

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.029999971389771

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
 Execution Time:0.0099999904632568

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
 Execution Time:2.4260060787201

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.039999961853027

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.049999952316284

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.019999980926514

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.019999980926514

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2270050048828

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.039999961853027

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.037001848220825

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
 Execution Time:2.1140990257263

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.039999961853027

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0090000629425049

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0010011196136475

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.010999917984009

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.1651239395142

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.045002937316895

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.069999933242798

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0099999904632568

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
 Execution Time:2.3831360340118

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.044002056121826

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039999961853027

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
 Execution Time:0.0099999904632568

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
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2691299915314

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.034002065658569

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
 Execution Time:2.4251389503479

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.085005044937134

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.019001007080078

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.01200008392334

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.011000156402588

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:2.6331498622894

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:3.2751870155334

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
 Execution Time:2.2361280918121

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.037003040313721

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.034002065658569

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.043001890182495

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.04000186920166

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:2.6161499023438

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:3.4801988601685

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
 Execution Time:2.397136926651

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.029000997543335

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.034002065658569

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.01400089263916

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.011000871658325

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0099999904632568

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.8675439357758

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.037501096725464

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.03249979019165

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.012500047683716

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.012500047683716

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.037501096725464

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.3250360488892

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.017500162124634

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.03249979019165

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.047501087188721

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.035001039505005

update lk9v6_alumni_data set cert_file='155363.jpg' where alumni_id=155363 
 Execution Time:0.087501049041748

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.010000228881836

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.019999980926514

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:3.4900059700012

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.069999933242798

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.019999980926514

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
 Execution Time:0.019999980926514

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155363' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363' 
 Execution Time:0.010000228881836

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363'") 
 Execution Time:0.029999971389771

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3171329498291

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.049002885818481

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.024002075195312

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
 Execution Time:0.011001110076904

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155363' 
 Execution Time:0.0260009765625

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363' 
 Execution Time:0.014001131057739

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363'") 
 Execution Time:0.038002014160156

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
WHERE `u`.`id` =  '155363' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363' 
 Execution Time:0

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363'") 
 Execution Time:0.029999971389771

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
WHERE `u`.`id` =  '155363' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363' 
 Execution Time:0

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363'") 
 Execution Time:0.029001951217651

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
WHERE `u`.`id` =  '155363' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363' 
 Execution Time:0

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363'") 
 Execution Time:0.017001152038574

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
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155363' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363' 
 Execution Time:0.0010008811950684

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363'") 
 Execution Time:0.031001091003418

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
WHERE `u`.`id` =  '155363' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363' 
 Execution Time:0

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363'") 
 Execution Time:0.023001194000244

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
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155363' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363' 
 Execution Time:0.00099992752075195

insert into lk9v6_debug(query) values ("SELECT *
FROM (`lk9v6_alumni_data_other`)
WHERE `alumni_id` =  '155363'") 
 Execution Time:0.010999917984009

