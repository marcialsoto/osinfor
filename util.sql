use marcials_osfr;

UPDATE osfr_options SET option_value = 
replace(option_value, 'http://www2.osinfor.gob.pe/osinfor', 'http://localhost/osinfor') 
WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE osfr_posts SET guid = replace(guid, 'http://www2.osinfor.gob.pe/osinfor', 'http://localhost/osinfor');


UPDATE osfr_posts SET post_content = 
replace(post_content, 'http://www2.osinfor.gob.pe/osinfor', 'http://localhost/osinfor');

UPDATE osfr_postmeta SET meta_value = 
replace(meta_value, 'http://www2.osinfor.gob.pe/osinfor', 'http://localhost/osinfor');