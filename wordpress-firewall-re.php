<?php
/*
Plugin Name: Wordpress Firewall Re
Plugin URI: https://blog.mons.ws
Contributors: mons, seoegghead
Tags: firewall, secure, security, malware, web application firewall
Description: Blocking suspicious requests to WordPress. | Блокировка подозрительных запросов к WordPress.  (in modification <b>Mons</b> https://blog.mons.ws)
Author: SEO Egghead, Inc.
Version: 0.1 beta @ 2.11.2022 WP 6.0.x
Author URI: http://www.seoegghead.com/software/wordpress-firewall.seo
*/ 

if (determine_locale()=='ru_RU')
{
	define('LANG_PN_FILTERS', 'Фильтры безопасности плагина WordPress Firewall Re');
	define('LANG_PN_FILTERS_DESC', 'Вариантов атак, которые отлавливает этот плагин, много, но обычно они делятся на следующие категории:');
	define('LANG_OPTIONS', 'Настройки');
	define('LANG_APPLY_SEC_FILTERS', 'Применить фильтры безопасности');
	define('LANG_NOTE', 'Примечание');
	define('LANG_DIR_TRAVERSALS', 'Сканирование каталогов');
	define('LANG_SQL_INJ', 'SQL-инъекция');
	define('LANG_WP_SP_SQL_INJ', 'SQL-инъекция для WordPress');
	define('LANG_FIELD_TRUNCATION', 'Атака усечением');
	define('LANG_EX_FILE_UPLOAD', 'Загрузка исполняемого файла');
	define('LANG_REMOTE_FILE_EX', 'Удаленное выполнение файлов');
	define('LANG_DIR_TRAVERSALS_DESC', 'Эти атаки обычно направлены на получение информации или файлов за пределами того, что приложение намеревается или обычно позволяет. Иногда это допустимо, но обычно "../../" и, конечно же, "/etc/passwd" - это попытки хакера раскрыть конфиденциальную информацию. По умолчанию все ссылки на вышеуказанные значения (и некоторые подобные) блокируются, если иное не занесено в белый список (разблокировано).');
	define('LANG_SQL_INJ_DESC', 'Эти атаки обычно направлены на получение или изменение информации из базы данных способом, которого приложение не ожидает. Как правило, ссылки в параметрах приложения на общие функции MySQL и синтаксис SQL (SELECT *, UNION SELECT и т. д.) и, конечно, очень необычные ключевые слова, такие как «group_concat», являются попытками раскрыть или изменить конфиденциальную информацию. По умолчанию все ссылки на вышеуказанные значения (и аналогичные) блокируются, если иное не указано в белом списке. Определенные белые списки по умолчанию для WordPress созданы для того, чтобы сообщение о SQL-инъекциях не вызывало ложную тревогу, поэтому вышеуказанный контент, как правило, разрешен только в таких полях.');
	define('LANG_WP_SP_SQL_INJ_DESC', 'Вышеупомянутое имеет большое значение, но если мы узнаем больше о приложении, мы можем настроить и заблокировать атаки, которые ссылаются на определенные столбцы и имена таблиц, характерные для него — в данном случае WordPress. Как и неспецифические, атаки направлены на получение или изменение информации из базы данных способом, которого WordPress не ожидает. И обычно не принято ссылаться на «wp_SOME_COLUMN_NAME» в чем-либо, кроме тела сообщения. По умолчанию все ссылки на вышеуказанные значения (и некоторые подобные) блокируются, если иное не указано в белом списке. Определенные белые списки по умолчанию для WordPress созданы для того, чтобы сообщение о SQL-инъекциях не вызывало ложную тревогу, поэтому вышеуказанный контент, как правило, разрешен только в таких полях.');
	define('LANG_FIELD_TRUNCATION_DESC', 'Эта атака обычно отправляет серию пробельных символов или символ NULL для изменения или дублирования значения параметра. NULL обычно используются для удаления остатка строки, поэтому SOME + NULL + THING становится «SOME», а «THING» теряется или игнорируется. Пробелы обычно используются для дублирования значения в базе данных или проверки правильности, где пробелы игнорируются и поэтому вставляется дубликат.');
	define('LANG_REMOTE_FILE_EX_DESC', 'Хотя загрузка графических файлов в ваш блог — это нормально — .jpg, .gif, .png и т. д., обычно не принято загружать исполняемые файлы — .php, .exe и т. д. Иногда злоумышленники используют уязвимость в приложение, которое позволяет загружать файлы в какую-либо галерею для выполнения. Это может иметь место без соответствующих разрешений UNIX (или Windows). Поскольку это не так распространено, такие файлы полностью отклоняются, если иное не занесено в белый список.');
	define('LANG_EX_FILE_UPLOAD_DESC', 'Эта атака обычно отправляет параметр приложения во внешний файл, который затем выполняется. Как правило, это признак плохого программирования, встречается не так часто, и большинство провайдеров виртуального хостинга отключают «файловые оболочки» PHP для include() и require(), что делает их менее необходимыми. К сожалению, этот фильтр безопасности может вызывать ложные срабатывания без надлежащего обслуживания, поэтому по умолчанию он отключен.');
	define('LANG_REPEAT_EMAIL', 'Повторые уведомления о похожих атаках, сейчас отправляются на почту');
	define('LANG_REPEAT_EMAIL_SEC', ' чтобы отключить их');
	define('LANG_ALERT_ON', 'Оповещение брандмауэра WordPress включены');
	define('LANG_SEC_FILTERS_UPD', '«Фильтры безопасности и перенаправления» заданы.');
	define('LANG_EMAIL_OFF', 'Электронная почта отключена');
	define('LANG_WHT_LISTED', 'Добавлено в белый список');
	define('LANG_WHT_VBL_LISTED', 'Параметры добавлены в белый список');
	define('LANG_EMAIL_UPDATED', 'Email обновлен');
	define('LANG_WHT_IP_SET', 'IP адрес добавлен в белый список');
	define('LANG_WHT_PAGE_SET', 'Страница добавлена в белый список');
	define('LANG_EMAIL_LIM_SET', 'Лимит электронной почты задан');
	define('LANG_BLOCK_DIR_TRAVERSALS', 'Блокировать сканирование каталогов (../, ../../etc/passwd и т. д.)');
	define('LANG_BLOCK_SQL_INJ', 'Блокировка SQL-запросов (union select, concat(, /**/ и т. д.)');
	define('LANG_BLOCK_WP_SP_SQL_INJ', 'Блокировать специальные термины WordPress (wp_, user_login и т.д.)');
	define('LANG_BLOCK_FIELD_TRUNCATION', 'Блокировать атаки усечения полей');
	define('LANG_BLOCK_DIR_EX_FILE_UPLOAD', 'Блокировать загрузку исполняемых файлов (.php, .exe и т. д.)');
	define('LANG_BLOCK_LEADING', 'Блокировать начальные http:// и https:// при обращении к сайту <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<i>выкл</i> по умолчанию; может вызвать проблемы с плагинами)');
	define('LANG_UPON_ATTACK', 'При обнаружении атаки');
	define('LANG_SHOW_ERROR', 'Показать страницу ошибки 404');
	define('LANG_REDIRECT', 'Перенаправить на домашнюю страницу');
	define('LANG_WHT_FILTERS', 'Фильтры подчиняются «IP» и «Страницам» из белых списков ниже');
	define('LANG_SET_FILTERS', 'Задать фильтры безопасности');
	define('LANG_EMAIL', 'Email');
	define('LANG_ENTER_EMAIL', 'Введите адрес электронной почты для отчетов об атаках');
	define('LANG_DISABLE_EMAIL', 'Оставьте поле пустым, чтобы отключить электронную почту.');
	define('LANG_SUPPRESS_EMAIL', 'Не отправлять однотипные письма с предупреждениями');
	define('LANG_ON', 'Вкл');
	define('LANG_OFF', 'Выкл');
	define('LANG_SET_EMAIL', 'Задать Email');
	define('LANG_WHT_IP', 'Белый список IP адресов');
	define('LANG_CUR_IP', 'Ваш текущий адрес IP');
	define('LANG_ENTER_IP', 'Введите IP-адреса  &mdash; которые не будут попадать под действие правил безопасности (xxx.xxx.xxx.xx)');
	define('LANG_DISABLE_IP', 'Оставьте поле пустым, чтобы отключить белый список IP адресов');
	define('LANG_SET_WHT_IP', 'Задать список IP адресов');
	define('LANG_WHT_PAGE', 'Белый список страниц');
	define('LANG_ENTER_PAGE', 'Введите переменные страницы и/или формы для добавления в белый список &mdash; страницы из белого списка, не будут попадать под действие текущих правил безопасности плагина');
	define('LANG_PAGE', 'Страница');
	define('LANG_FORM_VARIABLE', 'Переменная формы');
	define('LANG_DISABLE_PAGE', 'Оставьте поле пустым, чтобы отключить белый список');
	define('LANG_USE_WILDCARD_CHR', 'Используйте *\ для подстановочных знаков');
	define('LANG_SET_WHT_PAGE', 'Задать белый список страниц');
	define('LANG_FEEDBACK', 'Есть вопросы или предложения');
	define('LANG_CLICK_HERE', 'кликните сюда');
	define('LANG_AUTHOR', 'Автор оригинального плагина');
	define('LANG_OWN_RISK', 'Внимание! Используйте этот плагин только на свой страх и риск');
	define('LANG_DONATE', 'Если хотите отблагодарить, можно купить мне чашечку кофе');
	define('LANG_EM_ALERT_M', 'Оповещение от брандмауэра WordPress с ');
	define('LANG_EM_FINDABLOCK', '<font color="red">обнаружил</font>  и заблокировал потенциальную атаку');
	define('LANG_EM_ADDRESS', 'Адрес');
	define('LANG_EM_WARNING', 'Внимание:&nbsp;URL может содержать опасный контент');
	define('LANG_EM_AIP', 'Атакующий IP');
	define('LANG_EM_IPINFO', 'Информация об IP адресе');
	define('LANG_EM_PARAMATTACK', 'Параметры атаки');
	define('LANG_EM_PATTACK', 'Возможная Атака');
	define('LANG_EM_MORE', 'Подробнее об этой атаке можно почитать <a href="https://blog.mons.ws/?p=4354">тут</a><br /><br />
			Если вы подозреваете, что это может быть ложной тревогой из-за того, что вы недавно сделали, попытайтесь это проверить, повторив эти действия. Если срабатывание действительно ложное, внесите его в белый список через ссылку «Добавить эту переменную в белый список». Это предотвратит в будущем ложные уведомления.');
	define('LANG_EM_ADDWHTL', 'чтобы добавить в белый список');
	define('LANG_EM_DISABLE', 'чтобы отключить получение этих писем');
} else {
	define('LANG_PN_FILTERS_DESC', 'The hacking attempts that this plugin catches are many, but generally fall into the following categories ');
	define('LANG_PN_FILTERS', 'WordPress Firewall Re Plugin Security Filters');
	define('LANG_OPTIONS', 'Options');
	define('LANG_APPLY_SEC_FILTERS', 'Apply Security Filters');
	define('LANG_NOTE', 'Note');
	define('LANG_DIR_TRAVERSALS', 'Directory traversals');
	define('LANG_SQL_INJ', 'SQL Injection');
	define('LANG_WP_SP_SQL_INJ', 'WordPress-Specific SQL Injection');
	define('LANG_FIELD_TRUNCATION', 'Field Truncation');
	define('LANG_EX_FILE_UPLOAD', 'Executable File Upload');
	define('LANG_REMOTE_FILE_EX', 'Remote File Execution');
	define('LANG_DIR_TRAVERSALS_DESC', 'These attacks usually look to obtain information or files outside of where an application intends or normally allows. Sometimes it is valid, but generally "../../," and certainly "/etc/passwd" are a hacker\'s attempts to expose proprietary information. By default, all references to the above values (and some similar ones) are blocked unless otherwise whitelisted (unblocked).');
	define('LANG_SQL_INJ_DESC', 'These attacks usually look to obtain or modify information from a database in a way an application does not expect. Generally, references in application parameters to common MySQL functions and SQL syntax (SELECT *, UNION SELECT, etc.), and certainly very uncommon keywords like "group_concat" are attempts to expose or modify proprietary information. By default, all references to the above values (and similar ones) are blocked unless otherwise whitelisted. Certain WordPress-specific default whitelists are made so that a post about SQL injection would not trip a false alarm, so the above content would generally be allowed only in to such fields.');
	define('LANG_WP_SP_SQL_INJ_DESC', 'The above goes a long way — but if we know more about the application, we can tune and block attacks that reference specific columns and table names specific to it — in this case WordPress. Like non-specific ones, the attacks look to obtain or modify information from a database in a way WordPress does not expect. And it is not generally common to refer to "wp_SOME_COLUMN_NAME" in anything other than a post body. By default, all references to the above values (and some similar ones) are blocked unless otherwise whitelisted. Certain WordPress-specific default whitelists are made so that a post about SQL injection would not trip a false alarm, so the above content would generally be allowed only in to such fields.');
	define('LANG_FIELD_TRUNCATION_DESC', 'This attack generally sends a series of whitespace characters or a NULL character to alter or duplicate the value of a parameter. NULLs are generally used to delete the remainder of a string — so SOME + NULL + THING becomes "SOME," and "THING" is lost or ignored. Whitespace is generally used to duplicate a value in a database or validation check where whitespace is ignored and the duplicate is therefore inserted.');
	define('LANG_REMOTE_FILE_EX_DESC', 'While it is normal to upload graphic files to your blog — .jpg, .gif, .png, etc., it is generally not common to upload executable files — .php, .exe, etc. Sometimes attackers will exploit a weakness in an application that allows uploaded files to a gallery of some sort to be executed. Without the proper UNIX (or Windows) permissions, this can be the case. Since it\'s not so common, such files are entirely rejected unless otherwise whitelisted.');
	define('LANG_EX_FILE_UPLOAD_DESC', 'This attack generally sends an application parameter a foreign file that it will then execute. It is generally a sign of poor programming, not-so-common, and most shared hosting providers turn off PHP\'s "file wrappers" for include()s and require()s — making it less-necessary. Unfortunately, this security-filter may set off false alarms without proper maintenance, so it is defaulted to off.');
	define('LANG_REPEAT_EMAIL', 'Repeated warnings for similar attacks are currently sent via email');
	define('LANG_REPEAT_EMAIL_SEC', 'to suppress them');
	define('LANG_ALERT_ON', 'Alert from WordPress Firewall on');
	define('LANG_SEC_FILTERS_UPD', 'Security Filters and Redirect page updated');
	define('LANG_EMAIL_OFF', 'Emails are now turned off');
	define('LANG_WHT_LISTED', 'Whitelisted');
	define('LANG_WHT_VBL_LISTED', 'Whitelisted Variable set');
	define('LANG_EMAIL_UPDATED', 'Email updated');
	define('LANG_WHT_IP_SET', 'Whitelisted IP set');
	define('LANG_WHT_PAGE_SET', 'Whitelisted Page set');
	define('LANG_EMAIL_LIM_SET', 'Email limit set');
	define('LANG_BLOCK_DIR_TRAVERSALS', 'Block directory traversals (../, ../../etc/passwd, etc.) in application parameters');
	define('LANG_BLOCK_SQL_INJ', 'Block SQL queries (union select, concat(, /**/, etc.) in application  parameters');
	define('LANG_BLOCK_WP_SP_SQL_INJ', 'Block WordPress specific terms (wp_, user_login, etc.)  in application parameters');
	define('LANG_BLOCK_FIELD_TRUNCATION', 'Block field truncation attacks in application parameters');
	define('LANG_BLOCK_DIR_EX_FILE_UPLOAD', 'Block executable file uploads (.php, .exe, etc.)');
	define('LANG_BLOCK_LEADING', 'Block leading http:// and https:// in application parameters <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<i>off</i> by default; may cause problems with many plugins)');
	define('LANG_UPON_ATTACK', 'Upon Detecting Attack');
	define('LANG_SHOW_ERROR', 'Show 404 Error Page');
	define('LANG_REDIRECT', 'Redirect To Homepage');
	define('LANG_WHT_FILTERS', 'All filters are subject to "Whitelisted IPs" and "Whitelisted Pages" below.');
	define('LANG_SET_FILTERS', 'Set Security Filters');
	define('LANG_EMAIL', 'Email');
	define('LANG_ENTER_EMAIL', 'Enter an email address for attack reports');
	define('LANG_DISABLE_EMAIL', 'Leave this setting blank to disable emails');
	define('LANG_SUPPRESS_EMAIL', 'Suppress similar attack warning emails');
	define('LANG_ON', 'On');
	define('LANG_OFF', 'Off');
	define('LANG_SET_EMAIL', 'Set Email');
	define('LANG_WHT_IP', 'Whitelisted IPs');
	define('LANG_CUR_IP', 'Your current IP');
	define('LANG_ENTER_IP', 'Enter IP(s) that are whitelisted &mdash; and not subject to security rules (xxx.xxx.xxx.xx)');
	define('LANG_DISABLE_IP', 'Set field(s) to blank to disable IP whitelist');
	define('LANG_SET_WHT_IP', 'Set Whitelisted IPs');
	define('LANG_WHT_PAGE', 'Whitelisted Pages');
	define('LANG_ENTER_PAGE', 'Enter page and/or form variables that are whitelisted &mdash; and not  subject to security rules');
	define('LANG_PAGE', 'Page');
	define('LANG_FORM_VARIABLE', 'Form Variable');
	define('LANG_DISABLE_PAGE', 'Set field(s) to blank to disable page whitelist');
	define('LANG_USE_WILDCARD_CHR', 'Use *\'s for wildcard characters');
	define('LANG_SET_WHT_PAGE', 'Set Whitelisted Pages');
	define('LANG_FEEDBACK', 'Got Questions or Feedback');
	define('LANG_CLICK_HERE', 'click here');
	define('LANG_AUTHOR', 'Author of the original plugin');
	define('LANG_OWN_RISK', 'Use this plugin at your own risk');
	define('LANG_DONATE', 'If You want to Donate me, you can buy me a cup of coffee');
	define('LANG_EM_ALERT_M', 'Alert from WordPress Firewall on ');
	define('LANG_EM_FINDABLOCK', '<font color="red">detected</font> and blocked a potential attack');
	define('LANG_EM_ADDRESS', 'Address');
	define('LANG_EM_WARNING', 'Warning:&nbsp;URL may contain dangerous content');
	define('LANG_EM_AIP', 'Attack IP');
	define('LANG_EM_IPINFO', 'Information about the IP address');
	define('LANG_EM_PARAMATTACK', 'Attack Params');
	define('LANG_EM_PATTACK', 'Possible Attack');
	define('LANG_EM_MORE', 'You can read more about this attack <a href="https://blog.mons.ws/?p=4354">here</a><br /><br />
	If you suspect that this may be a false alarm due to something you\'ve done recently, try checking by repeating these steps. If the positive is indeed a false positive, whitelist it via the "Whitelist this variable" link. This will prevent false notifications in the future.');
	define('LANG_EM_ADDWHTL', 'to whitelist');
	define('LANG_EM_DISABLE', 'to stop receiving these emails');
}

if(!function_exists('array_diff_key')){
    if ((@include_once 'PHP/Compat/Function/array_diff_key.php')) {}
	else{
	// Borrowed from PEAR_PHP_Compat.
	function php_compat_array_diff_key()
	{
	    $args = func_get_args();
	    if (count($args) < 2) {
	        user_error('Wrong parameter count for array_diff_key()', E_USER_WARNING);
	        return;
	    }
	    // Check arrays
	    $array_count = count($args);
	    for ($i = 0; $i !== $array_count; $i++) {
	        if (!is_array($args[$i])) {
	            user_error('array_diff_key() Argument #' .
	                ($i + 1) . ' is not an array', E_USER_WARNING);
	            return;
	        }
	    }
	    $result = $args[0];
	    if (function_exists('array_key_exists')) {
	        foreach ($args[0] as $key => $value) {
	            for ($i = 1; $i !== $array_count; $i++) {
	                if (array_key_exists($key,$args[$i])) {
	                    unset($result[$key]);
	                    break;
	                }
	            }
	        }
	    } else {
	        foreach ($args[0] as $key1 => $value1) {
	            for ($i = 1; $i !== $array_count; $i++) {
	                foreach ($args[$i] as $key2 => $value2) {
	                    if ((string) $key1 === (string) $key2) {
	                        unset($result[$key2]);
	                        break 2;
	                    }
	                }
	            }
	        }
	    }
	    return $result; 
	}		
	    function array_diff_key()
	    {
	        $args = func_get_args();
	        return call_user_func_array('php_compat_array_diff_key', $args);
	    }
	}
}

if(preg_match("#^wordpress-firewall.php#", basename($_SERVER['PHP_SELF']))) exit();

add_option('WP_firewall_redirect_page', 'homepage');
add_option('WP_firewall_exclude_directory', 'allow');
add_option('WP_firewall_exclude_queries', 'allow');
add_option('WP_firewall_exclude_terms', 'allow');
add_option('WP_firewall_exclude_spaces', 'allow');
add_option('WP_firewall_exclude_file', 'allow');
add_option('WP_firewall_exclude_http', 'disallow');
add_option('WP_firewall_email_enable','enable');
add_option('WP_firewall_email_address', get_option('admin_email'));
add_option('WP_firewall_whitelisted_ip', '');
add_option('WP_firewall_whitelisted_page', '');
add_option('WP_firewall_whitelisted_variable', '');
add_option('WP_firewall_plugin_url', get_option('siteurl') 
.'/wp-admin/options-general.php?page=' . basename(__FILE__));
add_option('default_WP_firewall_whitelisted_page', 
serialize(array( array('.*/wp-comments-post\.php',array('url', 'comment')),
array('.*/wp-admin/.*',array( '_wp_original_http_referer','_wp_http_referer' 
)),
array('.*wp-login.php', array('redirect_to')),
array('.*', array('comment_author_url_.*', '__utmz', )),
'.*/wp-admin/options-general\.php', '.*/wp-admin/post-new\.php', 
'.*/wp-admin/page-new\.php','.*/wp-admin/link-add\.php', '.*/wp-admin/post\.php',
'.*/wp-admin/page\.php',
'.*/wp-admin/admin-ajax.php')));
add_option('WP_firewall_previous_attack_var', '');
add_option('WP_firewall_previous_attack_ip', '');
add_option('WP_firewall_email_limit', 'off');

//WP_firewall_check_exclusions ();

function WP_firewall_check_exclusions () {

	$request_string = WP_firewall_check_whitelisted_variable();
	if($request_string == false){
	} else{
		if(get_option('WP_firewall_exclude_directory') == 'allow'){
			
			$exclude_terms = array('#etc/passwd#', '#proc/self/environ#', '#\.\./#');
			foreach($exclude_terms as $preg){
				foreach($request_string as $key=>$value){
					if(preg_match($preg, $value)){
						if(!WP_firewall_check_ip_whitelist()){	
							WP_firewall_send_log_message($key, $value, 
							'directory-traversal-attack', 'Directory traversals');			
							WP_firewall_send_redirect();
						}	
					}		
				}	
			}
		}
		if(get_option('WP_firewall_exclude_queries') == 'allow'){	
			$exclude_terms = array('#concat\s*\(#i', '#group_concat#i',
			'#union.*select#i');
			foreach($exclude_terms as $preg){
				foreach($request_string as $key=>$value){	
					if(preg_match($preg, $value) ){
						if(!WP_firewall_check_ip_whitelist()){	
							WP_firewall_send_log_message($key, $value, 
							'sql-injection-attack', 'SQL Injection');			
							WP_firewall_send_redirect();
						}
					}
				}
			}	
		}
		if(get_option('WP_firewall_exclude_terms') == 'allow'){
			$exclude_terms = array('#wp_#i', '#user_login#i', 
			'#user_pass#i', '#0x[0-9a-f][0-9a-f]#i', '#/\*\*/#');
		
			foreach($exclude_terms as $preg){
				foreach($request_string as $key=>$value){					
					if(preg_match($preg, $value)){
						if(!WP_firewall_check_ip_whitelist()){					
							WP_firewall_send_log_message($key, $value, 
							'wp-specific-sql-injection-attack', 'WordPress-Specific SQL Injection');
							WP_firewall_send_redirect();
						}
					}
				}
			}
		}	
		if(get_option('WP_firewall_exclude_spaces') == 'allow'){	
			$exclude_terms = array('#\s{49,}#i','#\x00#');
			foreach($exclude_terms as $preg){
				foreach($request_string as $key=>$value){					
					if(preg_match('#\s{49,}#i', $value) ){
						if(!WP_firewall_check_ip_whitelist()){				
							WP_firewall_send_log_message($key, $value, 
							'field-truncation-attack', 'Field Truncation');
							WP_firewall_send_redirect();
						}		
					}
				}
			}
		}
		if(get_option('WP_firewall_exclude_file') == 'allow'){	
			foreach ($_FILES as $file) {
				$file_extensions = 
				array('#\.dll$#i', '#\.rb$#i', '#\.py$#i',
				'#\.exe$#i', '#\.php[3-6]?$#i','#\.pl$#i', 
				'#\.perl$#i', '#\.ph[34]$#i', '#\.phl$#i' ,
				'#\.phtml$#i', '#\.phtm$#i');
				 foreach($file_extensions as $regex){
					if(preg_match($regex, $file['name'])){
				 		WP_firewall_send_log_message('$_FILE', $file['name'], 
				 		'executable-file-upload-attack', 'Executable File Upload');
						WP_firewall_send_redirect();	
					}	
				 }
			}			
		}			
		if(get_option('WP_firewall_exclude_http') == 'allow'){	
			
			$exclude_terms = array('#^http#i', '#\.shtml#i');
			foreach($exclude_terms as $preg){			
			
				foreach($request_string as $key=>$value){				
					if(preg_match($preg, $value)){
						if(!WP_firewall_check_ip_whitelist()){				
							WP_firewall_send_log_message($key, $value, 
							'remote-file-execution-attack', 'Remote File Execution');
							WP_firewall_send_redirect();
						}		
					}
				}
			}
		}		
	}
}

function WP_firewall_send_redirect(){
	$home_url = get_option('siteurl');	
	if(get_option('WP_firewall_redirect_page') == '404page'){
		// Not clear if just including the 404 template is safe.
		header ("Location: $home_url/404/");
		exit();
	}
	else {
		header ("Location: $home_url");
		exit();		
	}
}

function WP_firewall_check_whitelisted_variable(){
	
	preg_match('#([^?]+)?.*$#',$_SERVER['REQUEST_URI'], $url);	
	$page_name = $url[1];	

	$_a = array();
	$new_arr = WP_firewall_array_flatten($_REQUEST, $_a);

	foreach(
	unserialize(get_option('default_WP_firewall_whitelisted_page'))
	as $whitelisted_page){											

		if(!is_array($whitelisted_page)){
			if(preg_match('#^' . $whitelisted_page . '$#',$page_name)){
				return false;
			}
		}else{
			if(preg_match('#^' . $whitelisted_page[0] . '$#',$page_name)){
				foreach($whitelisted_page[1] as $whitelisted_variable){
					foreach(array_keys($new_arr) as $var){	
						if(preg_match('#^' . $whitelisted_variable 
						.'$#',$var)){	
							$new_arr = array_diff_key($new_arr,array($var=>''));	
						}
					}
				}
			}			
		}
	}
	
	$pages = unserialize(get_option('WP_firewall_whitelisted_page'));
	$variables = unserialize(
	get_option('WP_firewall_whitelisted_variable'));
	$count = ('0');
	
	while($count < sizeof($pages)){
		$page_regex =  preg_quote($pages[$count], '#') ;
		$page_regex = str_replace('\*', '.*', $page_regex);		
		
		$var_regex =  preg_quote($variables[$count], '#') ;
		$var_regex = str_replace('\*', '.*', $var_regex);	
		
		if( $variables[$count] != ''){
			if($pages[$count] == '' || preg_match('#^' . $page_regex . '$#',
			$page_name)){
				$temp_arr = $new_arr;
				foreach(array_keys($new_arr) as $var){
					if(preg_match('#^' . $var_regex . '$#',$var)){
						$new_arr = array_diff_key($new_arr,array($var=>''));	
					}
				}
			}				
		} elseif($pages[$count] != ''){
			if(	preg_match('#^' . $page_regex . '$#',$page_name)){
				return false;
			}
		}		
		$count++;
	}					
	return $new_arr;
}

function WP_firewall_send_log_message($bad_variable = '',
$bad_value = '', $attack_type = '', $attack_category = ''){
	
	$bad_variable = htmlentities($bad_variable);
	$bad_value = htmlentities($bad_value);
	
	$offender_ip = $_SERVER['REMOTE_ADDR'] ;

	$limit_check = (
	get_option('WP_firewall_email_limit') == 'on' 
	&&  $offender_ip == get_option('WP_firewall_previous_attack_ip')
	&&  $bad_variable == get_option('WP_firewall_previous_attack_var')
	);
			
	if( $address = get_option('WP_firewall_email_address')&& !$limit_check
	){
		$suppress_message = (get_option('WP_firewall_email_limit')=='on')
		?
		'<?=LANG_REPEAT_EMAIL?>, 
		<a href="' . get_option('WP_firewall_plugin_url')  . 
		'&suppress=0"><?=LANG_CLICK_HERE?></a> <?=LANG_REPEAT_EMAIL_SEC?>.'
		: '';
		
		
		$offending_url = $_SERVER['HTTP_HOST'] .$_SERVER['REQUEST_URI'] ;
		
		
		$variable_explain_url   = 
		'https://blog.mons.ws/?p=4354#'
		. $attack_type;

		$turn_off_email_url 	= get_option('WP_firewall_plugin_url') 
		.'&turn_off_email=1';
		$whitelist_varibale_url = get_option('WP_firewall_plugin_url') 
		. '&set_whitelist_variable=' . $bad_variable ;
			
		$message ='
		<h3>WordPress Firewall Re '.LANG_EM_FINDABLOCK.'
		<table border="0" cellpadding="5">
		<tr>
		<td align="right"><b>'.LANG_EM_ADDRESS.':&nbsp;&nbsp;</b></td>
		<td>'.$offending_url.' <br />
		<small>'.LANG_EM_WARNING.'!</small>
		</td>
		</tr>
		<tr>
		<td align="right"><b>'.LANG_EM_AIP.':&nbsp;&nbsp;</b></td>
		<td>'.$offender_ip.'
		<a href="https://whois.ru/?domain='.$offender_ip.'">[ '.LANG_EM_IPINFO.' ]</a>
		</td>
		</tr>
		<tr>
		<td align="right">
		<b>'.LANG_EM_PARAMATTACK.':&nbsp;&nbsp;</b>
		</td>
		<td><font color="red"><b> '.$bad_variable.' = '.$bad_value.' </b></font></td>
		</tr>
		</table>
		<br />
		<table>
		<tr>
		<td align="left"> 
		'.LANG_EM_PATTACK.': "'.$attack_category.'"<br /><br />
		'.LANG_EM_MORE.'
		<br /><br />
		<a href="'.$whitelist_varibale_url.'"> '.LANG_CLICK_HERE.'</a> '.LANG_EM_ADDWHTL.'.
		<br /> 
		<a href="'.$turn_off_email_url.'">'.LANG_CLICK_HERE.'</a> '.LANG_EM_DISABLE.'.
		</td>
		<tr>
		<td>'.$suppress_message.'</td>
		</tr>
		</table>
		<br />
			 
		<div style="float:right; position:relative; top:-80px;">
		<a 
	href="https://blog.mons.ws/?p=4354" 
		style="text-decoration:none;" target="_blank">
		<img src=
	"https://blog.mons.ws/wp-content/uploads/info.png"
		border="0" />
		</a>
		<br />
		<br />
		</div>';
	
		$address = get_option('WP_firewall_email_address');
		$subject = LANG_EM_ALERT_M 
		. get_option('siteurl');
		$header = "Content-Type: text/html\r\n";		
		$header .= "From: " . $address . "\r\n";		
		mail($address,$subject,$message, $header);
	}
	
	update_option('WP_firewall_previous_attack_var', $bad_variable);
	update_option('WP_firewall_previous_attack_ip', $offender_ip);
}

function WP_firewall_check_ip_whitelist(){
	$current_ip = $_SERVER['REMOTE_ADDR'];
	$ips = unserialize(get_option('WP_firewall_whitelisted_ip'));
	if(is_array($ips)){
		foreach($ips as $ip){
			if( $current_ip == $ip || $current_ip == gethostbyname($ip)){
				return true;
			}
		}
	}
	return false;
}

function WP_firewall_array_flatten($array, &$newArray, 
	$prefix='',$delimiter='][',  $level = 0) {
	foreach ($array as $key => $child) {
		if (is_array($child)) {
			$newPrefix = $prefix.$key.$delimiter;
			if($level==0){$newPrefix=$key.'[';}
			$newArray =& WP_firewall_array_flatten($child, $newArray, 
			$newPrefix, $delimiter, $level+1);
		} else {
			(!$level) ?$post='' : $post=']';
			$newArray[$prefix.$key. $post] = $child;
		}
	}
	return $newArray;
} 

function WP_firewall_assert_first(){
	$active_plugs = (get_option('active_plugins'));
	$active_plugs = array_diff($active_plugs, array("wordpress-firewall-re.php"));
	array_unshift($active_plugs, "wordpress-firewall-re.php");	
}
add_action('admin_menu', 'WP_firewall_admin_menu');

function WP_firewall_admin_menu() {
	add_submenu_page('options-general.php','Firewall',
	'Firewall Re', 10, __FILE__, 'WP_firewall_submenu');
}

function WP_firewall_submenu(){
	
	WP_firewall_assert_first();
	
	$action_url = $_SERVER['REQUEST_URI'];
	if ($_REQUEST['set_exclusions']){
		update_option('WP_firewall_redirect_page',
		$_REQUEST['redirect_type']);					
		update_option('WP_firewall_exclude_directory', 
		$_REQUEST['block_directory']);
		update_option('WP_firewall_exclude_queries', 
		$_REQUEST['block_queries']);
		update_option('WP_firewall_exclude_terms', 
		$_REQUEST['block_terms']);
		update_option('WP_firewall_exclude_spaces', 
		$_REQUEST['block_spaces']);
		update_option('WP_firewall_exclude_file', 
		$_REQUEST['block_file']);		
		update_option('WP_firewall_exclude_http', 
		$_REQUEST['block_http']);
		
		echo '<div class="updated fade">
		<p>'.LANG_SEC_FILTERS_UPD.'.</p>
		</div>';		
	} elseif($_REQUEST['turn_off_email']){
		
		update_option('WP_firewall_email_address', '');
		
		$action_url = str_replace('&turn_off_email=1','',
		$_SERVER['REQUEST_URI']);
		echo '<div class="updated fade">
		<p>'.LANG_EMAIL_OFF.'.</p>
		</div>';		
	
	} elseif($_REQUEST['set_whitelist_variable']){
		echo '<div class="updated fade"><p>'.LANG_WHT_LISTED.' '
		. $_REQUEST['set_whitelist_variable'] .'</p></div>';

		$pages       = unserialize(
		get_option('WP_firewall_whitelisted_page'));
		$variables 	 = unserialize(
		get_option('WP_firewall_whitelisted_variable'));	
		$pages[]   	 = '';
		$variables[] =	$_REQUEST['set_whitelist_variable'];

		update_option('WP_firewall_whitelisted_page', serialize($pages));
		update_option('WP_firewall_whitelisted_variable', 
		serialize($variables));		
		
		$action_url = str_replace(('&set_whitelist_variable=' . 
		$_REQUEST['set_whitelist_variable']),'',$_SERVER['REQUEST_URI']);
		echo '<div class="updated fade">
		<p>'.LANG_WHT_VBL_LISTED.'.</p>
		</div>';
		
	} elseif($_REQUEST['set_email']){
		update_option('WP_firewall_email_address', 
		$_REQUEST['email_address']);
		update_option('WP_firewall_email_limit', 
		$_REQUEST['email_limit']);	
		echo '<div class="updated fade">
		<p>'.LANG_EMAIL_UPDATED.'.</p>
		</div>';		
	} elseif($_REQUEST['set_whitelist_ip']){
		update_option('WP_firewall_whitelisted_ip', 
		serialize($_REQUEST['whitelisted_ip']));
		echo '<div class="updated fade">
		<p>'.LANG_WHT_IP_SET.'.</p>
		</div>';		
	} elseif($_REQUEST['set_whitelist_page']){
		update_option('WP_firewall_whitelisted_page', 
		serialize($_REQUEST['whitelist_page']));
		update_option('WP_firewall_whitelisted_variable',
		serialize($_REQUEST['whitelist_variable']));
		echo '<div class="updated fade">
		<p>'.LANG_WHT_PAGE_SET.'.</p>
		</div>';		
	} elseif($_REQUEST['suppress'] === '0'){
		
		update_option('WP_firewall_email_limit', 'off');
		echo '<div class="updated fade">
		<p>'.LANG_EMAIL_LIM_SET.'.</p>
		</div>';		
		$action_url = str_replace('&suppress=0','',
		$_SERVER['REQUEST_URI']);		
	}

	?> 
	<style>
	.opt-line {
			background-color: #FEFEFF;
			color: #000;
			border-radius:8px;
		}
	.opt-line td{
			padding: 14px 2px 14px 25px!important;
		}
	.opt-line:hover {
			background-color: #35ADBE;
			color: #FFF;
			padding: 6px 6px 6px 6px!important;
		}
		
		.opt-list {
			background-color: #F0F0F1;
			color: #000;
			border-radius:8px;
			padding: 16px 5px 16px 15px!important;
			margin: 2px 0px;
		}
		.p_warn {
			background-color: #E30C58;
			padding: 5px 20px!important;
			text-align: center;
			font-size: 12px;
			border-radius: 4px;
			margin:3px 0;
			color: #FFF;
			cursor: pointer;
		}
		.p_note {
			background-color: #FFCA38;
			padding: 16px 5px 16px 16px!important;
			font-size: 14px;
			border-radius: 2px;
			margin:3px 0;
		}
		.p_button {
			background-color: #35ADBE;
			border: none;
			border-radius:2px;
			padding: 8px 25px 8px 25px!important;
			color: #FFF;
			margin: 5px 0;
			cursor: pointer;
		}
		.p_button:hover{
			color: #FFF!important;
			background-color: #0F9D58;
		}
		.p_info {
			background-color: #35ADBE;
			color: #FFF;
			border-radius:8px;
			padding: 2px 8px 2px 8px!important;
			float: right;
			text-align: center;
			text-decoration: none;
			margin-right:10px;
		}
		.p_info:hover{
			color: #FFF!important;
			background-color: #0F9D58;
		}
		.p_hr {
			margin-top: 1.35em !important;
			margin-bottom: 0.35em !important;
			border-width: 1px;
		}
		
		.p_input_i{
			color: #FFF!important;
			background-color: #60C385!important;
			margin: 10px 0;
			outline: none!important;
			border-top-style: hidden!important;
			border-right-style: hidden!important;
			border-left-style: hidden!important;
			border-bottom-style: groove;
			border-radius:2px!important;
			min-width:100%;
			padding: 6px 15px 6px 15px!important;
		}
		.donate {
			background-color: #4BBB76;
			padding: 7px 10px!important;
			text-align: center;
			font-size: 13px;
			border-radius: 4px;
			margin:3px 0;
			color: #FFF;
			cursor: pointer;
		}
		.donate a{
			color: #E5F20D;
			border-bottom: 1px dashed #E5F20D;
		}
		.p_input_i:focus,
		.p_input_i:active {
			border-color: transparent;
			border-bottom: 2px solid #FFCA38;
      }
		.p_input_e{
			color: #000!important;
			background-color: #F5E6D4!important;
			margin: 10px 0;
			outline: none!important;
			border-top-style: hidden!important;
			border-right-style: hidden!important;
			border-left-style: hidden!important;
			border-bottom-style: groove;
			border-radius:2px!important;
			min-width:100%;
			padding: 6px 15px 6px 15px!important;
		}
		.a_note {
			float: right;
			margin-top: 10px;
		}
		.p_input_e:focus,
		.p_input_e:active {
			border-color: transparent;
			border-bottom: 2px solid #FFCA38;
      }
			
		.content-box {
			display: flex;
			width: 100%;
			flex-wrap: wrap;
		}
		.settings-box {
			margin: 5px;
			padding: 5px;
			flex: 0 1 auto;
		}
		.settings-box:nth-child(1) {
			padding: 10px;
			flex: 0 1 35%;
			background-color: #FFF!important;
			border-radius:8px;
		}
		.settings-box:nth-child(2) {
			padding: 10px;
			flex: 0 1 50%;
		}

	</style>
	<div class="content-box">
	<div class="settings-box">
	<h2 style="font-size: 23px;">Firewall <span style="color:#E30C58;">Re</span> <?=LANG_OPTIONS?>:</h2>
	<form name="set-exclusion-options" action="<?php echo $action_url; ?>" 
	method="post" >
	<h3><?=LANG_APPLY_SEC_FILTERS?>:</h3>
	<div class="opt-list">
	<input type="checkbox" value="allow" name="block_directory" 
	<?php echo (get_option('WP_firewall_exclude_directory') == 'allow')
	?'checked="checked"':''?>
	> <?=LANG_BLOCK_DIR_TRAVERSALS?> <a href="#directory-traversal-attack" class="p_info">?</a>
	</div>
	<div class="opt-list">
	<input type="checkbox" value="allow" name="block_queries" 
	<?php echo (get_option('WP_firewall_exclude_queries') == 'allow') 
	? 'checked="checked"' :''?>
	> <?=LANG_BLOCK_SQL_INJ?>  <a href="#sql-injection-attack" class="p_info">?</a>
	</div>
	<div class="opt-list">
	<input type="checkbox" value="allow" name="block_terms" 
	<?php echo (get_option('WP_firewall_exclude_terms') == 'allow') 
	? 'checked="checked"' :''?>
	> <?=LANG_BLOCK_WP_SP_SQL_INJ?> <a href="#wp-specific-sql-injection-attack" class="p_info">?</a>
	</div>
	<div class="opt-list">
	<input type="checkbox" value="allow" name="block_spaces" 
	<?php echo (get_option('WP_firewall_exclude_spaces') == 'allow') 
	? 'checked="checked"' :''?>
	> <?=LANG_BLOCK_FIELD_TRUNCATION?> <a href="#field-truncation-attack" class="p_info">?</a></div>
	<div class="opt-list">
	<input type="checkbox" value="allow" name="block_file" 
	<?php echo (get_option('WP_firewall_exclude_file') == 'allow') 
	? 'checked="checked"' :''?>
	> <?=LANG_BLOCK_DIR_EX_FILE_UPLOAD?> <a href="#executable-file-upload-attack" class="p_info">?</a>
	</div>
	<div class="opt-list">
	<input type="checkbox" value="allow" name="block_http" 
	<?php echo (get_option('WP_firewall_exclude_http') == 'allow') 
	? 'checked="checked"' :''?>
	> <?=LANG_BLOCK_LEADING?>.
	</div>
	<!--Block leading https:// andhttps:// in application parameters (offbydefault; may cause problems with many plugins). — блокировка входа через https:// и https:/ (нежелательно, т.к. выявлена проблема в работе с множеством плагинов);-->
	<hr class="p_hr">
	<h3><?=LANG_UPON_ATTACK?>:</h3>	
	<table class="form-table" border="0" 
	style="max-width:570px; margin-top:0; margin-bottom:2px; border-collapse: separate; border-spacing: 0px 4px; border-radius: 5px;" >
	<tr class="opt-line">
	<td><?=LANG_SHOW_ERROR?>: </td>
	<td><input type="radio" name="redirect_type" value="404page"  
	<?php echo (get_option('WP_firewall_redirect_page') == '404page') 
	? 'checked="checked"' :''?> > 
	</td></tr>
	<tr class="opt-line">
	<td style=""><?=LANG_REDIRECT?>: </td>
	<td><input type="radio" name="redirect_type" value="homepage"  
	<?php echo (get_option('WP_firewall_redirect_page') == 'homepage') 
	? 'checked="checked"' :''?> >
	</td></tr>
	</table>	
	<div class="p_note">
	<b><?=LANG_NOTE?>:</b> <?=LANG_WHT_FILTERS?>.</div>
	<div style="text-align: right;">
	<input type="submit" name="set_exclusions" class="p_button" value="<?=LANG_SET_FILTERS?>">
	</form>
	</div>
	<hr class="p_hr">
	<h3><?=LANG_EMAIL?>:</h3>
	<?=LANG_ENTER_EMAIL?>:<br /><br />
	<form name="email_address" action="<?php echo $action_url; ?>" 
	method="post" >
	<input type="email" class="p_input_e"  value="<?php echo get_option('WP_firewall_email_address')?>"
	name="email_address" ><br />
	<div class="p_note"><b><?=LANG_NOTE?>:</b> <?=LANG_DISABLE_EMAIL?>.</div>
	<br />
	<?=LANG_SUPPRESS_EMAIL?>
	<input type="radio" name="email_limit" value="on"
	<?php echo (get_option('WP_firewall_email_limit') == 'on') ? 
	'checked="checked"' :''?>>
	<?=LANG_ON?>
	<input type="radio" name="email_limit" value="off"
	<?php echo (get_option('WP_firewall_email_limit') == 'off') ? 
	'checked="checked"' :''?>>
	<?=LANG_OFF?>
	<br />
	<div style="text-align: right;">
	<input type="submit" name="set_email" class="p_button" value="<?=LANG_SET_EMAIL?>">
	</div>
	</form>
	<hr class="p_hr">
	<h3><?=LANG_WHT_IP?>:</h3>
	<h3><?=LANG_CUR_IP?>: <b style="color:#F51012;"><?php echo $_SERVER['REMOTE_ADDR']?></b></h3>
	<?=LANG_ENTER_IP?>.
	
	<br /> 
	<form name="whitelist_ip" action="<?php echo $action_url;?>" method="post">
	<?php
	if( !get_option('WP_firewall_whitelisted_ip')){
		echo '<input type="text" value="" class="p_input_e" placeholder="xxx.xxx.xxx.xx" pattern="\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}" autocomplete="off" name="whitelisted_ip[]" >
		<br /><br />';	
	} else{
		$ips = array_unique(unserialize(get_option('WP_firewall_whitelisted_ip')));
		foreach($ips as $ip){
			if($ip != ''){
				echo  '<input type="text" value="' .$ip 
				. '" name="whitelisted_ip[]" placeholder="xxx.xxx.xxx.xx" pattern="\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}" autocomplete="off" class="p_input_i"><br />';	
			}		
		}
		echo  '<input type="text" value="" placeholder="xxx.xxx.xxx.xx" pattern="\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}" autocomplete="off" class="p_input_e" name="whitelisted_ip[]" ><br />';	
	}
	?>
	<div class="p_note"><b><?=LANG_NOTE?>:</b> <?=LANG_DISABLE_IP?>.</div>
	
	<div style="text-align: right;">
	<input type="submit" name="set_whitelist_ip" class="p_button" value="<?=LANG_SET_WHT_IP?>">
	</div>
	</form>
	<hr class="p_hr">
	<h3><?=LANG_WHT_PAGE?>:</h3>	
	<?=LANG_ENTER_PAGE?>:
	<form name="whitelist_page_or_variable" action="<?php echo $action_url; ?>" 
	method="post">	
	
	<table  cellspacing="0">
	<tr><td><?=LANG_PAGE?>:</td><td><?=LANG_FORM_VARIABLE?>:</td></tr>
	<?php
	if( !unserialize(get_option('WP_firewall_whitelisted_page')) 
	&& !unserialize(get_option('WP_firewall_whitelisted_variable'))  ){
		echo '<tr><td><input type="text" name="whitelist_page[]"></td>
		<td><input type="text" name="whitelist_variable[]"></td></tr><br />';	
	} else{
		$pages     = unserialize(
		get_option('WP_firewall_whitelisted_page'));
		$variables = unserialize(
		get_option('WP_firewall_whitelisted_variable'));
		$count = 0;
		while($count < sizeof($pages)){
			if($pages[$count] != '' || $variables[$count] != ''){
				echo '<tr><td><input type="text" value="'. $pages[$count] 
				. '" name="whitelist_page[]"  ></td>
				<td><input type="text" value="'. $variables[$count] 
				. '"name="whitelist_variable[]"></td></tr>';	
			}		
			$count++;
		}
		echo '<tr><td><input type="text" name="whitelist_page[]"></td>
		<td><input type="text" name="whitelist_variable[]"></td></tr><br />';	
	}
	?>	
	</table>
	<div class="p_note"><b><?=LANG_NOTE?>:</b> <?=LANG_DISABLE_PAGE?>.</div>
	<div class="p_note"><b><?=LANG_NOTE?>:</b> <?=LANG_USE_WILDCARD_CHR?>.</div>
	<div style="text-align: right;">
	<input type="submit" name="set_whitelist_page" class="p_button" value="<?=LANG_SET_WHT_PAGE?>">
	</div>
	</form>
	</div>
	<?php
	WP_firewall_show_plugin_link();
	echo '</div>';
}

function WP_firewall_show_plugin_link(){
	?>
	
	<div class="settings-box">
	<br>
	<h3><?=LANG_PN_FILTERS?></h3>
	<br />
	<?=LANG_PN_FILTERS_DESC?>
	<br />
	<a name="directory-traversal-attack"></a>
	<h4>1. <?=LANG_DIR_TRAVERSALS?></h4>
	<?=LANG_DIR_TRAVERSALS_DESC?>
	<a name="sql-injection-attack"></a>
	<h4>2. <?=LANG_SQL_INJ?></h4>
	<?=LANG_SQL_INJ_DESC?>
	<a name="wp-specific-sql-injection-attack"></a>
	<h4>3. <?=LANG_WP_SP_SQL_INJ?></h4>
	<?=LANG_WP_SP_SQL_INJ_DESC?>
	<a name="executable-file-upload-attack"></a>
	<h4>4. <?=LANG_EX_FILE_UPLOAD?></h4>
	<?=LANG_EX_FILE_UPLOAD_DESC?>
	<a name="field-truncation-attack"></a>
	<h4>5. <?=LANG_FIELD_TRUNCATION?></h4>
	<?=LANG_FIELD_TRUNCATION_DESC?>

	<h4>6. <?=LANG_REMOTE_FILE_EX?></h4>
	<?=LANG_EX_FILE_UPLOAD_DESC?>
	<br><br>
	
	<div class="a_note">
	<a href="https://blog.mons.ws/?p=4354" style="text-decoration:none;" target="_blank">
	<?php
	if(preg_match('#MSIE#', $_SERVER['HTTP_USER_AGENT']) == 0) {
	?>
	<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPsAAAAdCAYAAABsbxo5AAAEtWlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjI1MSIKICAgZXhpZjpQaXhlbFlEaW1lbnNpb249IjI5IgogICBleGlmOkNvbG9yU3BhY2U9IjEiCiAgIHRpZmY6SW1hZ2VXaWR0aD0iMjUxIgogICB0aWZmOkltYWdlTGVuZ3RoPSIyOSIKICAgdGlmZjpSZXNvbHV0aW9uVW5pdD0iMiIKICAgdGlmZjpYUmVzb2x1dGlvbj0iOTYvMSIKICAgdGlmZjpZUmVzb2x1dGlvbj0iOTYvMSIKICAgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIKICAgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9InNSR0IgSUVDNjE5NjYtMi4xIgogICB4bXA6TW9kaWZ5RGF0ZT0iMjAyMi0x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" />
	<?php } ?>
	</a>
	<br />
	<div class="donate">
	<?=LANG_DONATE?>:  [ <a style="text-decoration:none;" 
	href="https://yoomoney.ru/to/41001158104834" alt="Donate" target="_blank">yoomoney</a> or <a style="text-decoration:none;" 
	href="https://ko-fi.com/W7W460SQ3" alt="Donate" target="_blank">ko-fi</a> ]
	</div>
	<br />
	<br />
	<?=LANG_FEEDBACK?>? 
	<a style="text-decoration:none;" 
	href="https://blog.mons.ws/" target="_blank"><?=LANG_CLICK_HERE?>.</a>
	
	<br />
	<?=LANG_AUTHOR?>:
	<a style="text-decoration:none;" 
	href="http://www.seoegghead.com/software/wordpress-firewall-security-filters.seo" target="_blank">www.seoegghead.com</a>
	
	<br />
	<div class="p_warn"><?=LANG_OWN_RISK?></div>
	
		</div>
	</div>
	<?php
}
?>
