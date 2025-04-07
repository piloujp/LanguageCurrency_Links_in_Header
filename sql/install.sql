# Language/Currency Links in Header
# Version 4.04 for Zen Cart v2.0.0

INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('Show Languages in Header?', 'HEADER_LANGUAGES_DISPLAY', 'true', 'Display the Languages flags/links in Header?', 19, 170, NULL, now(), NULL, 'zen_cfg_select_option(array(''true'', ''false''), ');
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES ('Show Currencies in Header?', 'HEADER_CURRENCIES_DISPLAY', 'true', 'Display the Currencies symbols/links in Header?', 19, 171, NULL, now(), NULL, 'zen_cfg_select_option(array(''true'', ''false''), ');
