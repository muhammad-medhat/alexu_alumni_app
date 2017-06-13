SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.027002096176147

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.023000955581665

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.014001131057739

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.012001037597656

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.8561060428619

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.053003072738647

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010001659393311

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.9931139945984

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.036001920700073

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.7200980186462

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.032001972198486

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.014001131057739

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.013000011444092

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.013000965118408

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013000965118408

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.9111099243164

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.048002958297729

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.049002170562744

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.027001142501831

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.0901191234589

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.03200101852417

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.014001131057739

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.015001058578491

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.014001131057739

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013000011444092

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.1811239719391

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.074003934860229

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.024002075195312

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0090000629425049

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.5910911560059

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.049002885818481

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.015000820159912

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.015000820159912

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.015000820159912

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013000011444092

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.8921082019806

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.031002044677734

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.046003103256226

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0010001659393311

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0090010166168213

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.8231041431427

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.053003072738647

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.01200008392334

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.013999938964844

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.014000177383423

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013000965118408

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.051117181778

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.031001806259155

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.019001007080078

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.019001007080078

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:4.2642440795898

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.079005002975464

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.019001007080078

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0090010166168213

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.015001058578491

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.014001131057739

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.01400089263916

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.9511110782623

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10 
 Execution Time:0.031002044677734

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.051003217697144

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.017001152038574

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.6600949764252

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.046003103256226

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.079004049301147

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.0090000629425049

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013000965118408

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.0721189975739

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.031001806259155

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.035001993179321

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.018001079559326

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.4720838069916

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.032001972198486

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.038002014160156

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.016000986099243

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.0010011196136475

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.013000011444092

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:1.8211040496826

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.031002044677734

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.047002077102661

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.0019998550415039

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.0090010166168213

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.0071141719818

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.053003072738647

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.027000904083252

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.0010001659393311

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.00099992752075195

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.01400089263916

SELECT *
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين' 
 Execution Time:2.5111439228058

SELECT `alumni_id`, `u`.`name`, `g`.`graduation_year`, `g`.`cert_file`, `f`.`arabic` as faculty, `d`.`arabic` as certificate_type, `approved`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` !=  ''
AND `usertype` =  'الخريجين'
ORDER BY `u`.`id` desc
LIMIT 10, 10 
 Execution Time:0.051002025604248

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.011001110076904

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:5.2773020267487

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.11100602149963

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.036003112792969

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.078004121780396

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.024001121520996

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `temp_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155223'
AND `u`.`approved` =  1 
 Execution Time:0.032001972198486

SELECT *
FROM (`temp_alumni_data_other`)
WHERE `alumni_id` =  '155223' 
 Execution Time:1.2260699272156

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.0010001659393311

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:10.446597099304

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:1.2310709953308

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.025001049041748

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.042003154754639

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.071003913879395

SELECT `g`.`alumni_id`, `g`.`graduation_year`, `ac`.`arabic` as scientific_degree, `g`.`fid`, `g`.`gid`, `g`.`certificate_type_id`, `g`.`cert_file`, `u`.`name`, `f`.`arabic` as faculty, `g`.`department`, `g`.`division`, `d`.`arabic` as degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` ac ON `ac`.`id`=`g`.`certificate_type_id`
LEFT JOIN `temp_alexu_alumni_degrees` d ON `d`.`id`=`g`.`gid`
WHERE `u`.`id` =  '155223'
AND `u`.`approved` =  1 
 Execution Time:0.16800999641418

SELECT *
FROM (`temp_alumni_data_other`)
WHERE `alumni_id` =  '155223' 
 Execution Time:3.0891771316528

SELECT *
FROM (`temp_settings`)
ORDER BY `record_order` ASC 
 Execution Time:0.013000011444092

SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc 
 Execution Time:1.5320870876312

insert into temp_debug(query) values ("SELECT `graduation_year`
FROM (`temp_alumni_data` g)
JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
WHERE `u`.`approved` =  1
GROUP BY `graduation_year`
ORDER BY `graduation_year` desc") 
 Execution Time:0.051002979278564

SELECT *
FROM (`temp_aau_Helpers_faculties`) 
 Execution Time:0.034002065658569

SELECT *
FROM (`temp_academic_degrees`)
ORDER BY `order` asc 
 Execution Time:0.025002002716064

SELECT *
FROM (`temp_alexu_alumni_degrees`)
WHERE `order` >  '0' 
 Execution Time:0.021001100540161

SELECT COUNT(*) AS `numrows`
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`approved` =  1
AND `u`.`usertype` =  'الخريجين' 
 Execution Time:1.8211040496826

SELECT `alumni_id`, `u`.`name`, `graduation_year`, `f`.`arabic` as faculty, `d`.`arabic` as scientific_degree
FROM (`temp_alumni_data` g)
LEFT JOIN `temp_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `temp_aau_Helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `temp_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `u`.`usertype` =  'الخريجين'
ORDER BY  RAND()
LIMIT 10 
 Execution Time:2.1131210327148

