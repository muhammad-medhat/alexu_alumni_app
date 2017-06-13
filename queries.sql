select  u.id, u.name, u.email, deg.arabic, ac.arabic from lk9v6_users u
left join lk9v6_alumni_main m on m.user_id=u.id
left join lk9v6_alumni_data d on d.alumni_id=m.id
left join lk9v6_alexu_alumni_degrees deg on deg.id=d.gid
left join lk9v6_academic_degrees ac on d.certificate_type_id=ac.id
where u.id>152040
-- -----------------------------------

select f.arabic faculty, u.name, u.id, u.email from lk9v6_users u
left join lk9v6_alumni_data d on u.id=d.alumni_id
left join lk9v6_aau_helpers_faculties f on d.fid = f.id
order by d.fid
      
