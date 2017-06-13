SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.048002958297729

SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.9751129150391

insert into lk9v6_debug(query) values ("SELECT `graduation_year`
FROM (`lk9v6_alumni_data` g)
JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.25801515579224

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.059002876281738

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.025002002716064

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.023000955581665

SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.998114824295

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.4481399059296

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.011000871658325

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0060000419616699

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
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.6481511592865

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.03200101852417

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.036001920700073

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
 Execution Time:0.010000944137573

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
 Execution Time:0.0010008811950684

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2821309566498

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
 Execution Time:0.015600204467773

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
 Execution Time:0.015599966049194

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
 Execution Time:2.079118013382

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.03200101852417

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
 Execution Time:2.1791250705719

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.039003133773804

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.031200170516968

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
 Execution Time:0.015599966049194

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.037003040313721

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0060000419616699

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.003000020980835

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3411340713501

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.049001932144165

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.031199932098389

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.015600204467773

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.018001079559326

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.003000020980835

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.011000871658325

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:3.7992172241211

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
 Execution Time:0.017000198364258

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0069999694824219

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.003000020980835

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013001203536987

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2211270332336

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.03200101852417

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
 Execution Time:0.020000219345093

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4881420135498

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

