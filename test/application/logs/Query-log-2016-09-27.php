SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0090000629425049

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0070009231567383

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.01400089263916

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.011999845504761

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.5291440486908

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
 Execution Time:0.043003082275391

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
 Execution Time:0.018001079559326

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0010011196136475

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.333132982254

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.047003030776978

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.5500040054321

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.03000020980835

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.6690058708191

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
 Execution Time:0.034002065658569

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.6021320819855

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
 Execution Time:0.040000200271606

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
 Execution Time:2.6550049781799

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3290040493011

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

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
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
 Execution Time:2.457004070282

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
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

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
 Execution Time:0.046002864837646

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
 Execution Time:2.7420041561127

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4511411190033

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
 Execution Time:0.0099999904632568

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
 Execution Time:0

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
 Execution Time:2.3811359405518

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
 Execution Time:0.015001058578491

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
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:2.4041368961334

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.038002014160156

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
 Execution Time:0.0099999904632568

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2891309261322

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.479140996933

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
 Execution Time:2.5241439342499

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.036002159118652

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4401390552521

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
 Execution Time:2.5800039768219

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.5700030326843

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
 Execution Time:0.040000200271606

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
 Execution Time:2.3301331996918

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.044001817703247

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4651410579681

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
 Execution Time:2.3570039272308

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.03000020980835

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
 Execution Time:2.3461349010468

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.046002149581909

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.14300894737244

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
 Execution Time:2.4511399269104

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.037002086639404

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.010999917984009

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.033001184463501

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363')  
 Execution Time:0.039003133773804

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
 Execution Time:2.2991309165955

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.088005065917969

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.019001007080078

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363')  
 Execution Time:0.087004899978638

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.035001993179321

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363')  
 Execution Time:0.047003030776978

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
 Execution Time:2.6951539516449

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.030002117156982

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0060000419616699

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0060009956359863

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
 Execution Time:2.3001310825348

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
 Execution Time:0.031199932098389

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
 Execution Time:0.016599893569946

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.062400102615356

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.031199932098389

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155362')  
 Execution Time:0.039999961853027

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
 Execution Time:2.2891311645508

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3640081882477

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
 Execution Time:0.039999961853027

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363')  
 Execution Time:0.039999961853027

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
 Execution Time:0.0010011196136475

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0010001659393311

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.045001983642578

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
 Execution Time:2.2931318283081

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
 Execution Time:0.0090010166168213

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0069999694824219

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0040009021759033

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.0121150016785

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.05500316619873

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.010001182556152

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
 Execution Time:0.00099992752075195

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.048002004623413

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
 Execution Time:2.4781408309937

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.037002801895142

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0060000419616699

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
 Execution Time:2.3081321716309

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
 Execution Time:0.029000997543335

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
 Execution Time:0.010999917984009

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.028002023696899

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.04000186920166

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.010000228881836

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.7271559238434

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.03400182723999

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
 Execution Time:0.013000965118408

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.025001049041748

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
 Execution Time:2.4611411094666

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
 Execution Time:0.031002044677734

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0069999694824219

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0030012130737305

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013000011444092

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3881361484528

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.035001993179321

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
 Execution Time:0.0090010166168213

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3751358985901

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
 Execution Time:0.0099999904632568

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
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
 Execution Time:2.3731360435486

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.515007019043

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
 Execution Time:0.010000944137573

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
 Execution Time:0.012000799179077

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.041002035140991

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
 Execution Time:2.471009016037

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
 Execution Time:0.039999961853027

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155361')  
 Execution Time:0.070000171661377

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
 Execution Time:2.7100119590759

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.1399998664856

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
 Execution Time:3.3400120735168

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.14999985694885

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
 Execution Time:3.0000121593475

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.14999985694885

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.040000200271606

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155361')  
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.049999952316284

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.050000190734863

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
 Execution Time:2.1580028533936

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
 Execution Time:0.040002107620239

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361')  
 Execution Time:0.043001890182495

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
 Execution Time:2.2620038986206

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.7780039310455

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.040000915527344

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

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.019999980926514

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:3.1580069065094

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
 Execution Time:0.059999942779541

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4760041236877

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.050000190734863

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
 Execution Time:0.049999952316284

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
 Execution Time:2.3780040740967

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4870100021362

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.050000190734863

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2910029888153

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
 Execution Time:0.0069999694824219

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
 Execution Time:0.011000156402588

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
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

SELECT `g`.*, `u`.`name`, `u`.`email`, `u`.`username`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `lk9v6_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '42' 
 Execution Time:0.049999952316284

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
 Execution Time:2.3480041027069

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.059999942779541

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
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363')  
 Execution Time:0.030001163482666

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
 Execution Time:2.3130040168762

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
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
 Execution Time:2.1211221218109

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.06000018119812

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.039999961853027

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
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
 Execution Time:0.0099999904632568

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.029999971389771

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.036000967025757

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
 Execution Time:2.4390041828156

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
 Execution Time:0.010999917984009

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.039002895355225

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.027002096176147

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.011000871658325

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.02000093460083

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.017000913619995

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
 Execution Time:2.2551288604736

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.043003082275391

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.03000020980835

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
 Execution Time:2.4140050411224

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.050000190734863

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.029001951217651

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0080010890960693

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.003000020980835

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.011000156402588

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.0091149806976

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
 Execution Time:0.0099999904632568

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.049999952316284

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
 Execution Time:0.0260009765625

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3271329402924

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
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
 Execution Time:2.4960038661957

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
 Execution Time:0.019999980926514

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363')  
 Execution Time:0.029999971389771

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
 Execution Time:2.3231329917908

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
 Execution Time:0.045002937316895

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
 Execution Time:0.0079998970031738

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2321269512177

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.039001941680908

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.037002086639404

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2201271057129

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.047003030776978

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039002895355225

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.005000114440918

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.1421229839325

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
 Execution Time:0.021000862121582

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.5121440887451

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.044001817703247

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3370041847229

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.050000190734863

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155359 
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.019999980926514

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155338 
 Execution Time:0.039999961853027

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155337 
 Execution Time:0.039999961853027

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155362', '155360', '155359')  
 Execution Time:0.039999961853027

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
 Execution Time:2.4870049953461

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
 Execution Time:0.023000001907349

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4600038528442

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.040000200271606

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.025001049041748

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
 Execution Time:0.011000156402588

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155359 
 Execution Time:0.02900218963623

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.016000986099243

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
 Execution Time:2.1250030994415

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155362', '155360', '155359')  
 Execution Time:0.050000190734863

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
 Execution Time:2.5590059757233

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
 Execution Time:0.029999971389771

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.5300040245056

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.039999961853027

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.050000190734863

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
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
 Execution Time:2.2850050926208

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.019999980926514

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
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
 Execution Time:2.5340030193329

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
 Execution Time:0.03200101852417

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
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
 Execution Time:2.3260028362274

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.040000200271606

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
 Execution Time:0.010000228881836

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
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
 Execution Time:2.5040049552917

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
 Execution Time:0.021001100540161

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.041002988815308

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.039999961853027

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.039999961853027

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155359 
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
 Execution Time:0.019999980926514

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.8630130290985

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.21000003814697

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
 Execution Time:2.9430129528046

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.21000003814697

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.8530130386353

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.21000003814697

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
 Execution Time:3.4600148200989

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.21000003814697

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
 Execution Time:0.040000200271606

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2950029373169

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.050000190734863

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.015001058578491

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.030001878738403

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.040000200271606

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.11000084877014

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
 Execution Time:2.4580051898956

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
 Execution Time:0.050000190734863

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
 Execution Time:0.029999971389771

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
 Execution Time:0.049999952316284

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
 Execution Time:0.039999961853027

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
 Execution Time:2.6430048942566

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.050000905990601

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.058001041412354

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
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
 Execution Time:2.6000039577484

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.059999942779541

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.03000020980835

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
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
 Execution Time:2.5340039730072

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
 Execution Time:0.010000228881836

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
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
 Execution Time:2.4230029582977

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
 Execution Time:0.03000020980835

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
 Execution Time:0.049999952316284

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.040001153945923

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.039999961853027

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
 Execution Time:0.059999942779541

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
 Execution Time:2.6260061264038

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
 Execution Time:0.03000020980835

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.5550048351288

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.040000200271606

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.035001993179321

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
 Execution Time:0.014001131057739

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
 Execution Time:0.028002023696899

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.049999952316284

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.020000219345093

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.019999980926514

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.6380038261414

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.03000020980835

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.029001951217651

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
 Execution Time:0.0060009956359863

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
 Execution Time:0.075004100799561

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
 Execution Time:2.4810030460358

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
 Execution Time:0.052003145217896

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
 Execution Time:0.0039999485015869

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.5840051174164

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
 Execution Time:0.035001993179321

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
 Execution Time:0.025001049041748

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4250040054321

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
 Execution Time:0.025000810623169

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
 Execution Time:0.011000156402588

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
 Execution Time:2.4830040931702

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
 Execution Time:0.029999971389771

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0099999904632568

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360')  
 Execution Time:0.06000018119812

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4280037879944

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.03000020980835

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
 Execution Time:2.6010050773621

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.059999942779541

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('[\"155338\",\"155337\"]')  
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
 Execution Time:2.4310038089752

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.040000200271606

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3400030136108

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.03000020980835

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
 Execution Time:0.014999866485596

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.039999961853027

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.039999961853027

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.049999952316284

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.059999942779541

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('[]')  
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
 Execution Time:2.5250039100647

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
 Execution Time:0.020000219345093

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3350028991699

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
 Execution Time:0.03000020980835

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
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
 Execution Time:2.3820040225983

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
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
 Execution Time:2.1700029373169

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
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
 Execution Time:2.6300041675568

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0099999904632568

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
 Execution Time:0

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.029999971389771

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4560039043427

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2100031375885

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.04200005531311

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.050000190734863

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.039999961853027

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.039999961853027

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
 Execution Time:2.8050038814545

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
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155361')  
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
 Execution Time:2.2640039920807

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.039999961853027

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.039999961853027

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155362', '155361')  
 Execution Time:0.050000190734863

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3800029754639

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.080000877380371

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0060009956359863

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0069999694824219

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3001320362091

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
 Execution Time:0.019999980926514

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.029999971389771

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
 Execution Time:2.127121925354

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.060003042221069

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.055001020431519

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
 Execution Time:2.294004201889

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
 Execution Time:0.036000967025757

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
 Execution Time:0.005000114440918

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0099999904632568

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.050000190734863

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
 Execution Time:2.5730040073395

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
 Execution Time:0.020000219345093

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.029999971389771

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4090049266815

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.050000190734863

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.030000925064087

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
 Execution Time:0.010000228881836

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
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
 Execution Time:0

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.040000200271606

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
 Execution Time:2.429004907608

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
 Execution Time:0.039999961853027

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
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
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
 Execution Time:2.3530051708221

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.1600029468536

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
 Execution Time:0.0090010166168213

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
 Execution Time:0.012001037597656

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.035001993179321

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0080001354217529

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0070011615753174

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0039999485015869

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.7001540660858

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.036002159118652

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.064002990722656

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
 Execution Time:0.0039999485015869

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.042002201080322

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
 Execution Time:0.0010001659393311

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.019001007080078

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362')  
 Execution Time:0.050003051757812

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.011000156402588

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0080008506774902

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013000011444092

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.493143081665

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.044001817703247

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.02000093460083

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
 Execution Time:0.022001981735229

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.062003135681152

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.012001037597656

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.01400089263916

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
 Execution Time:2.5171439647675

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0099999904632568

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
 Execution Time:0.012000799179077

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.039002180099487

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2131259441376

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
 Execution Time:2.4401400089264

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
 Execution Time:0.050003051757812

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

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.072005033493042

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155359 
 Execution Time:0.026001930236816

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.035001993179321

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
 Execution Time:0.00099992752075195

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.069004058837891

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.017000913619995

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
 Execution Time:0.0010011196136475

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.0681180953979

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
 Execution Time:0.011001110076904

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.043001890182495

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
 Execution Time:0.00099992752075195

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.036002159118652

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
 Execution Time:2.2331280708313

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.041002035140991

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.036001920700073

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
 Execution Time:0.0090010166168213

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3991370201111

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
 Execution Time:0.039001941680908

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.016000986099243

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.016000986099243

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.019001007080078

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.035001993179321

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.027000904083252

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0069999694824219

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.011000871658325

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.023000955581665

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3521349430084

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.031001806259155

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.048002004623413

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
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4721410274506

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.011000156402588

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0060000419616699

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0029997825622559

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.011001110076904

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.35613489151

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.05700421333313

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.039001941680908

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
 Execution Time:0.011000156402588

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.034000873565674

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010011196136475

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3521349430084

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.017000913619995

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
 Execution Time:2.3281331062317

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.039001941680908

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
 Execution Time:0.012001037597656

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.034002065658569

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
 Execution Time:2.4001369476318

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
 Execution Time:0.01400089263916

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
 Execution Time:0.010000944137573

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155363 
 Execution Time:0.023000955581665

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.044003009796143

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.0020008087158203

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
 Execution Time:2.2401280403137

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.043003082275391

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.007000207901001

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.1551229953766

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
 Execution Time:0.062003135681152

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
 Execution Time:0.010999917984009

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3071320056915

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.043002843856812

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.017001152038574

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
 Execution Time:0.010999917984009

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4751410484314

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
 Execution Time:0.025002002716064

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
 Execution Time:0.0099999904632568

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010008811950684

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.5351450443268

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.032001972198486

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.040002107620239

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
 Execution Time:2.5061428546906

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.10500597953796

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0060000419616699

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
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0010011196136475

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.6981542110443

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
 Execution Time:0.014001131057739

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
 Execution Time:0.012001037597656

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
 Execution Time:2.3641359806061

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
 Execution Time:0.016000986099243

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
 Execution Time:0.011000156402588

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4831418991089

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.040002107620239

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.038002014160156

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2771298885345

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
 Execution Time:0.038002014160156

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
 Execution Time:0.01200008392334

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.1611239910126

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.047003030776978

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.022001028060913

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
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010008811950684

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
 Execution Time:2.3031320571899

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
 Execution Time:0.033001899719238

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
 Execution Time:0.01400089263916

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
 Execution Time:2.1541240215302

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.047001838684082

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.037002086639404

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
 Execution Time:0.012000799179077

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
 Execution Time:2.2541289329529

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
 Execution Time:0.037002086639404

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
 Execution Time:0.003000020980835

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
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2121269702911

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
 Execution Time:0.018000841140747

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4481401443481

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
 Execution Time:0.037002086639404

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.018001079559326

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.015001058578491

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3121330738068

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
 Execution Time:0.025001049041748

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
 Execution Time:2.4221379756927

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
 Execution Time:0.030002117156982

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
 Execution Time:0.0090000629425049

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2771308422089

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.040002107620239

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.013001203536987

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
 Execution Time:0.0060000419616699

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.1541240215302

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
 Execution Time:0.042002201080322

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.014001131057739

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.010999917984009

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.076004028320312

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010001659393311

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
 Execution Time:0

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.6541519165039

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
 Execution Time:0.033001899719238

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
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4301390647888

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
 Execution Time:0.038002014160156

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
 Execution Time:0.043001890182495

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0049998760223389

SELECT *
FROM (`lk9v6_aau_Helpers_faculties`) 
 Execution Time:0.0060009956359863

SELECT *
FROM (`lk9v6_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.01200008392334

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.4021370410919

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.061003923416138

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.04000186920166

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
 Execution Time:0.010000228881836

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.0251150131226

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
 Execution Time:0.058003187179565

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
 Execution Time:0.01400089263916

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2311279773712

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.042001962661743

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.038002014160156

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
 Execution Time:2.3991379737854

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
 Execution Time:0.034002065658569

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

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.2901310920715

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
 Execution Time:0.030001878738403

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
 Execution Time:0.011000871658325

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
 Execution Time:0.050003051757812

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0080008506774902

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
 Execution Time:0.021001100540161

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.0731191635132

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.13700795173645

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.014001131057739

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
 Execution Time:0.018001079559326

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.8191609382629

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.13700795173645

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.035001993179321

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

UPDATE `lk9v6_users` SET `approved` = 0 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
 Execution Time:0.019001007080078

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
 Execution Time:2.2601289749146

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
 Execution Time:0.036001920700073

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
 Execution Time:0.012001037597656

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3211331367493

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
 Execution Time:0.041002988815308

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155360 
 Execution Time:0.035001993179321

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.035001993179321

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.029000997543335

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
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155362', '155361', '155360')  
 Execution Time:0.032001972198486

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
 Execution Time:2.6801528930664

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
 Execution Time:0.019001007080078

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

UPDATE `lk9v6_users` SET `approved` = 0 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
 Execution Time:0.013999938964844

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
 Execution Time:0.0010001659393311

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.1551239490509

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
 Execution Time:0.037002086639404

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
 Execution Time:0.02000093460083

SELECT *
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id` 
 Execution Time:2.3741359710693

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.038002014160156

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.038002014160156

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

UPDATE `lk9v6_users` SET `approved` = 0 WHERE `id` IN ('[\"155363\",\"155362\",\"155361\",\"155360\",\"155359\",\"155340\",\"155339\",\"155338\",\"155337\",\"155336\"]')  
 Execution Time:0.019000768661499

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
 Execution Time:2.4841420650482

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.040002822875977

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0060000419616699

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
 Execution Time:0.0090010166168213

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155362 
 Execution Time:0.04000186920166

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

update lk9v6_users set approved=IF(approved=1, 0, 1) where id=155361 
 Execution Time:0.035001993179321

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
 Execution Time:0.00099992752075195

SELECT *
FROM (`lk9v6_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.046003103256226

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
 Execution Time:2.3911361694336

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.053003072738647

SELECT *
FROM (`lk9v6_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.035001993179321

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
 Execution Time:0.011001110076904

UPDATE `lk9v6_users` SET `approved` = 0 WHERE `id` IN ('155363', '155362', '155361', '155360', '155359', '155340', '155339', '155338', '155337', '155336')  
 Execution Time:0.017000913619995

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
 Execution Time:2.4991428852081

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
 Execution Time:0.033001899719238

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
 Execution Time:0.0059998035430908

UPDATE `lk9v6_users` SET `approved` = 1 WHERE `id` IN ('155363')  
 Execution Time:0.037002086639404

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
 Execution Time:2.3861358165741

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.041002035140991

