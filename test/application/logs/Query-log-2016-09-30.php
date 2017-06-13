SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.029000997543335

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.035001993179321

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.10500597953796

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.024001121520996

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.03200101852417

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.4861421585083

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.024001121520996

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
 Execution Time:0.010999917984009

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.4391400814056

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 90290, 10 
 Execution Time:2.0421171188354

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.022001028060913

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
 Execution Time:0.011000871658325

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.00099992752075195

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
WHERE `u`.`id` =  '42' 
 Execution Time:0.00099992752075195

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
WHERE `u`.`id` =  '42' 
 Execution Time:0

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

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
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

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
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
WHERE `u`.`id` =  '42' 
 Execution Time:0.00099992752075195

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
 Execution Time:0.0010001659393311

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0

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
 Execution Time:0.0010001659393311

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
WHERE `u`.`id` =  '42' 
 Execution Time:0

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
WHERE `u`.`id` =  '42' 
 Execution Time:0.00099992752075195

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
WHERE `u`.`id` =  '42' 
 Execution Time:0

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
WHERE `u`.`id` =  '42' 
 Execution Time:0.00099992752075195

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
WHERE `u`.`id` =  '42' 
 Execution Time:0

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
WHERE `u`.`id` =  '42' 
 Execution Time:0.0019998550415039

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
 Execution Time:2.5891480445862

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.080003976821899

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0069999694824219

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.003000020980835

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.033002138137817

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
 Execution Time:0.0010011196136475

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
WHERE `u`.`id` =  '42' 
 Execution Time:0

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
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0070011615753174

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.003000020980835

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.01200008392334

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.4321389198303

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.033001899719238

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0079998970031738

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
 Execution Time:0.010999917984009

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.036001920700073

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
WHERE `u`.`id` =  '42' 
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

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0

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
WHERE `u`.`id` =  '42' 
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
WHERE `u`.`id` =  '42' 
 Execution Time:0.00099992752075195

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
WHERE `u`.`id` =  '42' 
 Execution Time:0.0010001659393311

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
WHERE `u`.`id` =  '42' 
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
WHERE `u`.`id` =  '42' 
 Execution Time:0

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
 Execution Time:0.0010001659393311

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
WHERE `u`.`id` =  '42' 
 Execution Time:0

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
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.0010001659393311

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
WHERE `u`.`id` =  '42' 
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
 Execution Time:0

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:2.2821309566498

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.043002843856812

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.013999938964844

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.011000871658325

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:2.705155134201

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:3.1571810245514

