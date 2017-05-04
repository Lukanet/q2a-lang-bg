<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	Translation to Bulgarian (c) 2013, Nikolay Hamov, http://tonove.info/
	
	File: qa-lang/bg/qa-lang-admin.php
	Version: 1.6.2
	Date: 2013-10-05 10:12:00 GMT
	Description: Language phrases for admin center


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/


	return array(
		'active_widgets_explanation' => 'Активни джаджи в момента:',
                'approve_user_popup' => "Одобри потребител",
		'block_user_popup' => "Блокирай потребител",
		'reset_options_confirm' => "Сигурен ли сте, че искате да върнете всички опции на тази страница към първоначалните им стойности?",
		'save_view_button' => "Запиши и Виж", 
		'add_category_button' => 'Добави категория',
		'add_field_button' => 'Добави поле',
		'add_link_button' => 'Добави връзка',
		'add_link_link' => ' - ^1добави връзка^2',
		'add_new_field' => 'Добави ново поле',
		'add_new_title' => 'Добави ново заглавие',
		'add_page_button' => 'Добави страница',
		'add_title_button' => 'Добавяне на заглавие',
		'add_widget_button' => 'Добави джаджа',
		'add_widget_link' => ' - ^1добави джаджа^2',
		'admin_title' => 'Център за администрация',
		'after_footer' => 'След връзките във футъра',
		'after_main_menu' => 'След табовета на върха',
		'after_x_tab' => 'След таб "^"',
		'after_x' => 'След "^"',
		'moderate_title' => 'Модерирай',
		'basic_editor' => 'Прост редактор',
		'before_main_menu' => 'Преди табовете на върха',
		'blobs_directory_error' => 'В директорията ^ дефинирана като QA_BLOBS_DIRECTORY не може да се пише от уеб сървъра.',
		'blobs_move_complete' => 'Миграцията на качените картини и документи е завършена.',
		'blobs_move_moved' => 'Миграция на ^1 от ^2 качени картини и документи',
		'blobs_stop' => 'Спри мигрирането',
		'blobs_to_db' => 'Блобове към базата данни',
		'blobs_to_db_note' => '- мигрирай всички качени картини и документи от файлове към базата данни',
		'blobs_to_disk' => 'Блобове към диск',
		'blobs_to_disk_note' => '- мигрирай всички качени картини и документи от базата данни към файлове',
		'block_button' => 'блок',
		'block_ips_note' => 'Използвай тире за интервали или * за съвпадение с всяко число. Примери: 192.168.0.4 , 192.168.0.0-192.168.0.31 , 192.168.0.*',
		'block_words_note' => 'Използвай * за съвпадение с всички букви. Примери: doh (ще съвпадне само с думата doh) , doh* (ще съвпадне с doh и с dohno) , do*h (ще съвпадне с doh, dooh, dough).',
		'cancel_mailing_button' => 'Спри изпращането на мейлове',
		'categories_introduction' => 'За да започнете с категориите, кликнете бутона \'Добави категория\'.',
		'categories_not_shown' => 'Някои въпроси имат категории, които няма да бъдат показани.',
		'categories_title' => 'Категории',
		'categories' => 'Категории',
		'category_add_sub' => 'добави подкатегория',
		'category_added' => 'Категорията е добавена',
		'category_already_used' => 'Това вече се ползва от категория',
		'category_default_slug' => 'категория-^',
		'category_description' => 'Описание на категорията (незадължително):',
		'category_max_depth_x' => 'Някои опции може да са скрити, за да предотвратят категорията да стане по-дълбока от ^ нива.',
		'category_move_parent' => 'премести към друг родител',
		'category_name_first' => 'Име на първата категория:',
		'category_name' => 'Име на категорията:',
		'category_no_add_subs_x' => 'Тази категорияне може да има подкатегории, тъй като е вече ^ нива.',
		'category_no_delete_subs' => 'Тази категория не може да бъде изтрите, тъй като има подкатегории.',
		'category_no_sub_error' => '^q въпрос(и) в тази категория нямат подкатегория - ^1избери подкатегория^2',
		'category_no_sub_to' => 'Премести въпросите в ^ с подкатегориите към:',
		'category_no_subs' => 'Няма',
		'category_none_error' => '^q въпрос(и) па настоящем нямат категория - ^1избери категория^2',
		'category_none_to' => 'Премести въпросите без категория към:',
		'category_parent' => 'Родителска категория:',
		'category_saved' => 'Категорията е запазена',
		'category_slug' => 'Слуг на категорията (URL фрагмент):',
		'category_subs' => 'Подкатегории:',
		'category_top_level' => 'Няма родител (най-горно ниво)',
		'characters' => 'знака',
		'check_language_suffix' => ' - ^1провери езиковите файлове^2',
		'click_name_edit' => 'Произволни страници или линкове:',
		'database_cleanup' => 'Операции за почистване на базата данни',
		'delete_category_reassign' => 'Изтрий тази категория и пренасочи въпросите от нея към:',
		'delete_category' => 'Изтрий тази категория',
		'delete_field' => 'Изтрий това поле',
		'delete_hidden_complete' => 'Всички скрити постове без зависещи от тях са изтрити',
		'delete_hidden_note' => ' - всички скрити въпроси, отговори и коментари без зависими от тях',
		'delete_hidden' => 'Изтрий скрити постове',
		'delete_link' => 'Изтрий този линк',
		'delete_page' => 'Изтрий тази страница',
		'delete_stop' => 'Спри изтриването',
		'delete_title' => 'Изтрий това заглавие',
		'delete_widget_position' => 'Изтрий тази джаджа от тази позиция',
		'edit_custom_page' => 'Редактирай произволна страница',
		'edit_field' => ' - ^1редактирай поле^2',
		'edit_link' => ' - ^1редактирай връзка^2',
		'edit_page' => ' - ^1редактирай страница^2',
		'edit_title' => ' - ^1редактирай заглавие^2',
		'emails_per_minute' => 'e-мейла на минута',
		'emails_title' => 'Е-мейли',
		'feed_link_example' => 'Примерен фийд',
		'feed_link' => 'Фийд',
		'feeds_title' => 'RSS фийдове',
		'field_link_url' => 'Свързан URL',
		'field_multi_line' => 'Много линии текст',
		'field_name' => 'Име на полето:',
		'field_single_line' => 'Единична линия текст',
		'field_type' => 'Тип съдържание:',
		'first' => 'Първо',
		'flagged_title' => 'Отбелязано',
		'form_security_expired' => 'Кодът за сигурност е изтекъл - моля опитайте отново',
		'from_anon' => 'От анонимен:',
		'from_users' => 'От потребители:',
		'general_title' => 'Общи',
		'hidden_answers_deleted' => 'Изтрити ^1 от ^2 скрити въпроси без зависещи...',
		'hidden_comments_deleted' => 'Изтрити ^1 от ^2 скрити коментариs...',
		'hidden_questions_deleted' => 'Изтрити ^1 от ^2 скрити въпроси без зависими...',
		'hotness_factors' => 'Относителна важност на горещината на въпроса',
		'hidden_title' => 'Скрит(и)',
		'ip_address_pages' => 'Страници с IP адреси',
		'layout_title' => 'Разположение',
		'link_name' => 'Текст на връзката:',
		'link_new_window' => 'Отваряй връзката в нов прозорец',
		'link_url' => 'URL на връзката (абсолютен или относителен спрямо Q2A рута):',
		'lists_title' => 'Списъци',
		'mailing_complete' => 'Изпращането на е-мейли е завършило',
		'mailing_explanation' => 'Потребителите ще могат да се отпишат на страницата на профила си',
		'mailing_progress' => 'Изпращанато на мейли е завършено за ^1 от ^2 потребители',
		'mailing_title' => 'Изпращане на е-мейли',
		'mailing_unsubscribe' => 'Линк за отписване ще бъде добавен на края на всяко съобщение.',
		'maintenance_admin_only' => 'Вашият сайт е в ^1поддръжка^2 и в момента не е достъпен за потребители.',
		'maximum_x' => ' (макс. ^)',
		'approve_users_title' => 'Одобри потребители',
		'module_x_database_init' => 'Модулът ^1 ^2 изисква някаква ^3инициализация на базата данни^4.',
		'most_flagged_title' => 'Отбелязано съдържание',
		'mysql_version' => 'MySQL версия:',
		'nav_links_explanation' => 'Показвай следните навигационни връзки на всяка страница:',
		'nav_qa_is_home' => 'В и О (свързва към главната страница)',
		'neat_urls_note' => ' (изисква ^1htaccess^2 файл)',
		'no_approve_found' => 'Няма съдържание, чакащо за одобрение',
		'no_classification' => 'Няма класификация',
		'no_flagged_found' => 'Не е намерено отбелязано съдържание',
		'no_hidden_found' => 'Не са намерени скрити въпроси, отговори или коментари',
		'no_image_gd' => 'Инсталираната версия на PHP е без GD поддръжка, така че потребителите няма да могат да качват директно техните аватари.',
		'no_link' => 'Няма връзка',
		'no_multibyte' => 'Инсталираната PHP версия е компилирана без мултибайт поддръжка. Търсенето за нелатински букви ще е по-малко ефективно.',
		'no_privileges' => 'Само администраторите имат достъп до тази страница.',
		'no_unapproved_found' => 'Няма потребители чакащи за одобрение',
		'not_logged_in' => 'Моля ^1влез^2 като администратор за да имаш достъп до тази страница.',
		'opposite_main_menu' => 'Далечните табове на върха',
		'options_reset' => 'Ресет на опциите',
		'options_saved' => 'Опциите са запазени',
		'options' => 'опции',
		'page_already_used' => 'Това вече е ползвано от страница',
		'page_content_html' => 'Съдържание, което а се покаже на страницата (HTML е разрешен):',
		'page_default_slug' => 'страница-^',
		'page_heading' => 'Заглавие което да се показва на върха на страницата:',
		'page_name' => 'Име на страницата (също се ползва за таб или линк):',
		'page_slug' => 'Слъг за страница (URL фрагмент):',
		'pages_explanation' => 'Кликни на бутона \'Добави страница\' за да добавиш произволно съдържание кам сайта, или \'Добави връзка\' за да свържеш към друга уеб страница.',
		'pages_title' => 'Страници',
		'pause_mailing_button' => 'Пауза на изпращането',
		'per_ip_hour' => 'за IP/час',
		'per_user_hour' => 'за потребител/час',
		'permissions_title' => 'Права',
		'permit_to_view' => 'Видимо за:',
		'php_version' => 'PHP върсия:',
		'pixels' => 'пиксели',
		'plugin_module' => '(плъгин модул: ^)',
		'plugin_pages_explanation' => 'Следните страници са достъпни чрез плъгини:',
		'plugins_title' => 'Плъгини',
		'points_defaults_shown' => 'Нещата по подразбиране са показани по-долу, но НЕ СА ПРИЛОЖЕНИ:',
		'points_required' => 'Точки, необходими за получаване на титла:',
		'points_title' => 'Точки',
		'points' => 'точки',
		'position' => 'Позиция:',
		'posting_title' => 'Постване',
		'profile_fields' => 'Допълнителни полета в потребителския профил:',
		'q2a_build_date' => 'Дата на билдване:',
		'q2a_db_size' => 'Размер на базата данни:',
		'q2a_db_version' => 'Версия на Q2A базата данни:',
		'q2a_latest_version' => 'Последна версия на Q2A:',
		'q2a_version' => 'Question2Answer версия:',
		'question_lists' => 'Списъци с въпроси',
		'question_pages' => 'Страници с въпроси',
		'recalc_categories_backpaths' => 'Преизчисление на URL пътищата за ^1 от ^2 категории...',
		'recalc_categories_complete' => 'Всички категории бяха успешно преизчислени.',
		'recalc_categories_note' => ' - за категории на постови и бройки на категории',
		'recalc_categories_recounting' => 'Преброяване на въпросите за ^1 от ^2 категории...',
		'recalc_categories_updated' => 'Преизчисляване за ^1 от ^2 постове...',
		'recalc_categories' => 'Преизчисляване на категории',
		'recalc_points_complete' => 'Всички точки напотребители бяха успешно преизчислени.',
		'recalc_points_note' => ' - за подредба на потребителите и показване на точките',
		'recalc_points_recalced' => 'Преизчислени за ^1 от ^2 потребители...',
		'recalc_points_usercount' => 'Оценка на общея брой потребители...',
		'recalc_points' => 'Преизчисли точките на потребителите',
		'recalc_posts_count' => 'Получаване на общия брой въпроси, отговори и коментари...',
		'recalc_stop' => 'Спри преизчислението',
		'recent_approve_title' => 'Скорошно съдържание за одобрение',
		'recent_hidden_title' => 'Въпроси със скорошно скрито съдържание',
		'recount_posts_as_recounted' => 'Преизчислени отговори и горещина за ^1 от ^2 поста...',
		'recount_posts_complete' => 'Всички постове са успешно преизчислени.',
		'recount_posts_note' => ' - броят отговори, гласувания, флагове и горещост на всеки пост',
		'recount_posts_stop' => 'Спри преброяването',
		'recount_posts_votes_recounted' => 'Преизчислени вотове и флагове за  ^1 от ^2 поста...',
		'recount_posts' => 'Преизчисли постовете',
		'refill_events_complete' => 'Всички потоци събития бяха успешно презапълнени',
		'refill_events_note' => ' - за списъка обновления на всеки потребител',
		'refill_events_refilled' => 'Презапълнени за ^1 от ^2 въпроса',
		'refill_events' => 'Презапълни потоците събития',
		'registration_fields' => 'добави полета за регистрация',
		'reindex_content' => 'Реиндексирай съдържанието',
		'reindex_content_note' => ' - за търсене и предложения за свързани въпроси',
		'reindex_content_stop' => 'Спри реиндексирането',
		'reindex_pages_reindexed' => 'Реиндексирани ^1 от ^2 страници...',
		'reindex_posts_complete' => 'Всички постове бяха успешно преиндексирани.',
		'reindex_posts_reindexed' => 'Преиндексиране на ^1 от ^2 постове...',
		'reindex_posts_wordcounted' => 'препреброени ^1 от ^2 думи...',
		'requires_php_version' => 'Забранено - изисква PHP ^ или по-скорошно',
		'requires_q2a_version' => 'Спряно - изисква Question2Answer ^ или по-висока версия',
		'reset_options_button' => 'Ресетни към стойностите по подразбиране',
		'resume_mailing_button' => 'Продължи изпращането на мейлове',
		'save_options_button' => 'Запази опциите',
		'save_recalc_button' => 'Запази и преизчисли',
		'send_test_button' => 'Изпрати ми тест',
		'show_defaults_button' => 'Покажи стойностите по подразбиране',
		'show_on_register_form' => 'Покажи полето на формата за регистрация на потребители',
		'slug_bad_chars' => 'Слугът не може да съдържа следните знаци: ^',
		'slug_reserved' => 'Този слуг е резервиран за използване от друга страница',
		'spam_title' => 'Спам',
		'start_mailing_button' => 'Започни изпращането',
		'stats_title' => 'Статистики',
		'stop_recalc_warning' => 'Почистване на базата данни работи в момента. Ако затвориш страницата сега, операцията ще бъде прекъсната.',
		'tag_pages' => 'Страници с етикети',
		'tags_and_categories' => 'Етикети и Категории',
		'tags_not_shown' => 'Някои въпроси имат етикети, които няма да бъдат показвани.',
		'tags' => 'Етикети',
		'test_sent_to_x' => 'Тестовото съобщение беше изпратен на ^',
		'title_already_used' => 'Тази стойност вече са ползва от друго заглавие',
		'top_level_categories' => 'Категории от най-горно ниво',
		'total_as' => 'Общо отговори:',
		'total_cs' => 'Общо коментари:',
		'total_qs' => 'Общо въпроси:',
		'unnamed_plugin' => 'Плъгин без име',
		'upgrade_db' => 'Вашата Question2Answer база данни трябва да бъде ^1обновена^2 за тази версия.',
		'url_format_note' => 'Опциите с етикет ^ работят за конфигурацията на сайта. За най-добра оптимизация за търсачки (SEO) изолзвай първата ^ възможна опция.',
		'user_pages' => 'Страници с потребителите',
		'user_title' => 'Титла на потребителя (HTML е разрешен):',
		'user_titles' => 'Титли на потребители базирани на точки:',
		'users_active' => 'Активни потребители:',
		'users_must_have' => 'Потребителите трябва да имат',
		'users_posted' => 'Потребители които са поствали:',
		'users_registered' => 'Регистрирани потребители:',
		'users_title' => 'Потребители',
		'users_voted' => 'Потребители които са гласували:',
		'version_get_x' => 'вземи ^',
		'version_requires_php' => '^1 изисква PHP ^2',
		'version_requires_q2a' => '^1 изисква Q2A ^2',
		'version_latest_unknown' => 'последната е неизвестна',
		'version_latest' => 'последната',
		'viewing_title' => 'Разглеждане',
		'widget_all_pages' => 'Покажи джаджата на тази позиция на всички възможни страници',
		'widget_global_options' => ' - ^1редактирай глобалните опции^2',
		'widget_name' => 'Име на джаджата:',
		'widget_no_positions' => 'Тази джаджа вече е добавена на всяка възможна позиция.',
		'widget_not_available' => 'Тази джаджа не е достъпна. Това може да е защото пръгинът, който я осигурява, не е вече инсталиран.',
		'widget_pages_explanation' => 'Покажи джаджата на тази позиция на следните страници:',
		'widgets_explanation' => 'Налични джаджи:',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
