SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0059998035430908

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
 Execution Time:0.012000799179077

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.6731531620026

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
 Execution Time:0.00099992752075195

