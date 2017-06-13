SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` =  '2016';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` =  '2015';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` =  '2016';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` < '2016';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` =  '2015';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` > '2008'
AND `g`.`certificate_type_id` =  '1'
AND `u`.`name` like 'محمد السيد محمد السيد يونس%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` =  '2008'
AND `g`.`certificate_type_id` =  '1'
AND `u`.`name` like 'محمد السيد محمد السيد يونس%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` =  '2008'
AND `g`.`certificate_type_id` =  '1'
AND `u`.`name` like 'محمد السيد محمد السيد%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` =  '2015'
AND `g`.`certificate_type_id` =  '1'
AND `u`.`name` like 'ايمن محمد عبدالمجيد%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` =  '1996'
AND `u`.`name` like 'شعبان%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` > '1996'
AND `u`.`name` like 'شعبان%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` < '1996'
AND `u`.`name` like 'شعبان%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` =  '1995'
AND `u`.`name` like 'شعبان%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` =  '1995'
AND `g`.`certificate_type_id` =  '1'
AND `u`.`name` like 'shaaban%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` =  '1995'
AND `g`.`certificate_type_id` =  '1'
AND `u`.`name` like 'شعبان ابراهيم%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` > '1995'
AND `g`.`certificate_type_id` =  '1'
AND `u`.`name` like 'شعبان ابراهيم%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` < '1996'
AND `g`.`certificate_type_id` =  '1'
AND `u`.`name` like 'شعبان ابراهيم%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` =  '1996'
AND `g`.`certificate_type_id` =  '1'
AND `u`.`name` like 'شعبان%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`fid` =  '31'
AND `g`.`graduation_year` =  '1996'
AND `u`.`name` like 'شعبان%';
SELECT COUNT(*) AS `numrows`
FROM (`lk9v6_alumni_data` g)
LEFT JOIN `lk9v6_users` u ON `g`.`alumni_id`=`u`.`id`
LEFT JOIN `lk9v6_alumni_main` m ON `g`.`alumni_id`=`m`.`id`
LEFT JOIN `lk9v6_aau_helpers_faculties` f ON `f`.`id`=`g`.`fid`
LEFT JOIN `lk9v6_academic_degrees` d ON `d`.`id`=`g`.`certificate_type_id`
WHERE `g`.`graduation_year` =  '2016';
