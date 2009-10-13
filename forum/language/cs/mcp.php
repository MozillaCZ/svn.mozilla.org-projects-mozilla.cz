<?php
/** 
*
* mcp [Čeština]
*
* @package language
* @version $Id: mcp.php 459 2009-02-08 13:07:55Z ameeck $
* @copyright (c)  2007 phpBB.cz
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
* Original copyright: (c) 2005 phpBB Group
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTION'				=> 'Akce',
	'ACTION_NOTE'			=> 'Akce/Poznámka',
	'ADD_FEEDBACK'			=> 'Přidat záznam',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Jestliže chcete přidat záznam k&nbsp;uživateli, prosím vyplňte tento formulář. Používejte pouze prostý text; HTML, BBCode atd. nejsou povoleny.',
	'ADD_WARNING'			=> 'Udělit varování',
	'ADD_WARNING_EXPLAIN'	=> 'Jestliže chcete odeslat varování tomuto uživateli, prosím vyplňte tento formulář. Používejte pouze prostý text; HTML, Značky atd. nejsou povoleny.',
	'ALL_ENTRIES'			=> 'Všechny příspěvky',
	'ALL_NOTES_DELETED'		=> 'Všechny záznamy uživatele byly odebrány.',
	'ALL_REPORTS'			=> 'Všechna nahlášení',
	'ALREADY_REPORTED'		=> 'Tento příspěvek již byl nahlášen',
	'ALREADY_WARNED'		=> 'Tomuto příspěvku již bylo vydáno upozornění',
	'APPROVE'				=> 'Schválit',
	'APPROVE_POST'			=> 'Schválit příspěvek',
	'APPROVE_POST_CONFIRM'	=> 'Jste si jistý, že chcete schválit tento příspěvek?',
	'APPROVE_POSTS'			=> 'Schválit příspěvky',
	'APPROVE_POSTS_CONFIRM'	=> 'Jste si jistý, že chcete schválit vybrané příspěvky?',
	
	'CANNOT_MOVE_SAME_FORUM'=> 'Nemůžete přesunout téma do stejného fóra',
	'CANNOT_WARN_ANONYMOUS'	=> 'Nemůžete varovat anonymního uživatele',
	'CANNOT_WARN_SELF'		=> 'Nemůžete varovat sám sebe',
	'CAN_LEAVE_BLANK'		=> 'Toto může být ponecháno nevyplněné',
	'CHANGE_POSTER'			=> 'Změnit přispěvatele',
	'CLOSE_REPORT'			=> 'Zavřít nahlášení',
	'CLOSE_REPORT_CONFIRM'	=> 'Jste si jistý, že chcete zavřít vybrané nahlášení?',
	'CLOSE_REPORTS'			=> 'Zavřít nahlášení',
	'CLOSE_REPORTS_CONFIRM'	=> 'Jste si jistý, že chcete uzavřít vybraná nahlášení?',

	'DELETE_POSTS'				=> 'Smazat příspěvky',
	'DELETE_POSTS_CONFIRM'		=> 'Jste si jistý, že chcete smazat tyto příspěvky?',
	'DELETE_POST_CONFIRM'		=> 'Jste si jistý, že chcete smazat tento příspěvek?',
	'DELETE_REPORT'				=> 'Smazat nahlášení',
	'DELETE_REPORT_CONFIRM'		=> 'Jste si jistý, že chcete smazat vybrané nahlášení?',
	'DELETE_REPORTS'			=> 'Smazat nahlášení',
	'DELETE_REPORTS_CONFIRM'	=> 'Jste si jistý, že chcete smazat vybraná nahlášení?',
	'DELETE_SHADOW_TOPIC'		=> 'Smazat stínová témata',
	'DELETE_TOPICS'				=> 'Smazat vybraná témata',
	'DELETE_TOPICS_CONFIRM'		=> 'Jste si jistý, že chcete smazat tato témata?',
	'DELETE_TOPIC_CONFIRM'		=> 'Jste si jistý, že chcete smazat toto téma?',
	'DISAPPROVE'				=> 'Zamítnout',
	'DISAPPROVE_REASON'			=> 'Důvod pro zamítnutí',
	'DISAPPROVE_POST'			=> 'Zamítnout příspěvek',
	'DISAPPROVE_POST_CONFIRM'	=> 'Jste si jistý, že chcete zamítnout vybraný příspěvek?',
	'DISAPPROVE_POSTS'			=> 'Zamítnout příspěvky',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Jste si jistý, že chcete zamítnout vybrané příspěvky?',
	'DISPLAY_LOG'				=> 'Zobrazit příspěvky od předchozího',
	'DISPLAY_OPTIONS'			=> 'Zobrazit možnosti',

	'EMPTY_REPORT'					=> 'Musíte vložit popis, když jste vybral tento důvod',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Jedno nebo více témat bylo odebráno z databáze, protože bylo prázdné nebo vyprázdněno.',

	'FEEDBACK'				=> 'Odezva',
	'FORK'					=> 'Zkopírovat',
	'FORK_TOPIC'			=> 'Zkopírovat téma',
	'FORK_TOPIC_CONFIRM'	=> 'Jste si jistý, že chcete zkopírovat toto téma?',
	'FORK_TOPICS'			=> 'Zkopírovat vybraná témata',
	'FORK_TOPICS_CONFIRM'	=> 'Jste si jistý, že chcete zkopírovat vybraná témata?',
	'FORUM_DESC'			=> 'Popis',
	'FORUM_NAME'			=> 'Název fóra',
	'FORUM_NOT_EXIST'		=> 'Vybrané fórum neexistuje',
	'FORUM_NOT_POSTABLE'	=> 'Do vybraného fóra nelze přispívat',
	'FORUM_STATUS'			=> 'Stav fóra',
	'FORUM_STYLE'			=> 'Styl fóra',

	'GLOBAL_ANNOUNCEMENT'	=> 'Globální oznámení',

	'IP_INFO'				=> 'Informace o&nbsp;IP',
	'IPS_POSTED_FROM'		=> 'IP adresy, ze kterých tento uživatel přispíval',
	
	'LATEST_LOGS'				=> 'Posledních 5 záznamů',
	'LATEST_REPORTED'			=> 'Posledních 5 nahlášení',
	'LATEST_UNAPPROVED'			=> 'Posledních 5 čekajících na schválení',
	'LATEST_WARNING_TIME'		=> 'Poslední udělené varování',
	'LATEST_WARNINGS'			=> 'Posledních 5 varování',
	'LEAVE_SHADOW'				=> 'Ponechat stínové téma ve starém fóru',
	'LIST_REPORT'				=> '1 nahlášení',
	'LIST_REPORTS'				=> '%d nahlášení',
	'LOCK'						=> 'Zamknout',
	'LOCK_POST_POST'			=> 'Zamknout příspěvek',
	'LOCK_POST_POST_CONFIRM'	=> 'Jste si jistý, že chcete předejít editování tohoto příspěvku?',
	'LOCK_POST_POSTS'			=> 'Zamknout vybrané příspěvky',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Jste si jistý, že chcete předejít editování vybraných příspěvků?',
	'LOCK_TOPIC_CONFIRM'		=> 'Jste si jistý, že chcete zamknout toto téma?',
	'LOCK_TOPICS'				=> 'Zamknout vybraná témata',
	'LOCK_TOPICS_CONFIRM'		=> 'Jste si jistý, že chcete zamknout tato témata?',
	'LOGS_CURRENT_TOPIC'		=> 'Zobrazena přihlášení:',
	'LOGIN_EXPLAIN_MCP'			=> 'Pro moderování tohoto fóra se musíte přihlásit.',
	'LOGVIEW_VIEWTOPIC'			=> 'Zobrazit téma',
	'LOGVIEW_VIEWLOGS'			=> 'Zobrazit záznamy z tématu',
	'LOGVIEW_VIEWFORUM'			=> 'Zobrazit fórum',
	'LOOKUP_ALL'				=> 'Hledat všechny IP',
	'LOOKUP_IP'					=> 'Hledat IP',

	'MARKED_NOTES_DELETED'		=> 'Označené záznamy uživatele byly odebrány.',

	'MCP_ADD'						=> 'Přidat varování',

	'MCP_BAN'					=> 'Udělit ban',
	'MCP_BAN_EMAILS'			=> 'Ban e-mailu',
	'MCP_BAN_IPS'				=> 'Ban IP adres',
	'MCP_BAN_USERNAMES'			=> ' Ban přihlašovacího jména',

	'MCP_LOGS'						=> 'Činnosti moderátorů',
	'MCP_LOGS_FRONT'				=> 'Hlavní strana',
	'MCP_LOGS_FORUM_VIEW'			=> 'Činnosti ve fórech',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Činnosti v&nbsp;tématech',

	'MCP_MAIN'						=> 'Hlavní',
	'MCP_MAIN_FORUM_VIEW'			=> 'Zobrazit fórum',
	'MCP_MAIN_FRONT'				=> 'Hlavní strana',
	'MCP_MAIN_POST_DETAILS'			=> 'Detaily příspěvku',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Zobrazit téma',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Změnit na Oznámení',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Jste si jistý, že chcete toto téma změnit na Oznámení?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Změnit na Oznámení',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Jste si jistý, že chcete změnit vybraná témata na Oznámení?',
	'MCP_MAKE_GLOBAL'				=> 'Změnit na Globální oznámení',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Jste si jistý, že chcete toto téma změnit na Globální oznámení?',
	'MCP_MAKE_GLOBALS'				=> 'Změnit na Globální oznámení',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Jste si jistý, že chcete vybraná témata změnit na Globální oznámení?',
	'MCP_MAKE_STICKY'				=> 'Změnit na Důležité',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Jste si jistý, že chcete změnit toto téma na Důležité?',
	'MCP_MAKE_STICKIES'				=> 'Změnit na Důležitá',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Jste si jistý, že chcete změnit vybraná témata na Důležitá?',
	'MCP_MAKE_NORMAL'				=> 'Změnit na běžné téma',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Jste si jistý, že chcete změnit toto téma na běžné téma?',
	'MCP_MAKE_NORMALS'				=> 'Změnit na běžná témata',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Jste si jistý, že chcete změnit vybraná témata na béžná témata?',

	'MCP_NOTES'						=> 'Záznamy uživatele',
	'MCP_NOTES_FRONT'				=> 'Hlavní strana',
	'MCP_NOTES_USER'				=> 'Detaily uživatele',

	'MCP_POST_REPORTS'				=> 'Varování udělena tomuto příspěvku',

	'MCP_REPORTS'					=> 'Nahlášené příspěvky',
	'MCP_REPORT_DETAILS'			=> 'Detaily nahlášení',
	'MCP_REPORTS_CLOSED'			=> 'Uzavřená nahlášení',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Toto je seznam všech nahlášených příspěvků, které byly již vyřešeny dříve.',
	'MCP_REPORTS_OPEN'				=> 'Otevřená nahlášení',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Toto je seznam všech nahlášených příspěvků, které jsou stále k&nbsp;vyřízení.',

	'MCP_QUEUE'								=> 'Příspěvky ke schválení',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Schválit podrobnosti',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Příspěvky čekající na schválení',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Toto je seznam všech příspěvků, které vyžadují schválení předtím, než budou viditelné pro uživatele.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Témata čekající na schválení',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Toto je seznam všech témat, která vyžadují schválení předtím, než budou viditelná pro uživatele.',

	'MCP_VIEW_USER'			=> 'Zobrazit varování určitého uživatele',

	'MCP_WARN'				=> 'Varování',
	'MCP_WARN_FRONT'		=> 'Hlavní strana',
	'MCP_WARN_LIST'			=> 'Seznam varování',
	'MCP_WARN_POST'			=> 'Varovat za určitý příspěvek',
	'MCP_WARN_USER'			=> 'Varovat uživatele',

	'MERGE_POSTS'			=> 'Sloučit příspěvky',
	'MERGE_POSTS_CONFIRM'	=> 'Jste si jistý, že chcete sloučit vybrané příspěvky?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Použitím tohoto formuláře dole můžete sloučit vybrané příspěvky do jiného tématu. Tyto příspěvky nebudou přerovnány a budou zobrazeny jako když je uživatelé odeslali do nového tématu.<br />Prosím, vložte ID cílového tématu nebo klikněte na odkaz „Vybrat téma“ a vyhledejte ho.',
	'MERGE_TOPIC_ID'		=> 'ID cílového tématu',
	'MERGE_TOPICS'			=> 'Sloučit témata',
	'MERGE_TOPICS_CONFIRM'	=> 'Opravdu chcete sloučit vybraná témata?',
	'MODERATE_FORUM'		=> 'Moderovat forum',
	'MODERATE_TOPIC'		=> 'Moderovat téma',
	'MODERATE_POST'			=> 'Moderovat příspěvek',
	'MOD_OPTIONS'			=> 'Možnosti moderátora',
	'MORE_INFO'				=> 'Další informace',
	'MOST_WARNINGS'			=> 'Uživatelé s&nbsp;největším počtem varování',
	'MOVE_TOPIC_CONFIRM'	=> 'Jste si jistý, že chcete přesunout téma do nového fóra?',
	'MOVE_TOPICS'			=> 'Přesunout vybraná témata',
	'MOVE_TOPICS_CONFIRM'	=> 'Jste si jistý, že chcete přesunout vybraná témata do nového fóra?',

	'NOTIFY_POSTER_APPROVAL'=> 'Upozornit autora o&nbsp;schválení příspěvku?',
	'NOTIFY_POSTER_DISAPPROVAL' => 'Upozornit autora o&nbsp;zamítnutí příspěvku?',
	'NOTIFY_USER_WARN'		=> 'Upozornit uživatele o&nbsp;varování?',
	'NOT_MODERATOR'			=> 'Nejste moderátor tohoto fóra',
	'NO_DESTINATION_FORUM'	=> 'Prosím vyberte nějaké fórum jako místo určení',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Tento cíl cesty není dostupný.',
	'NO_ENTRIES'			=> 'Neexistují žádné záznamy',
	'NO_FEEDBACK'			=> 'Neexistuje žádná odezva na tohoto uživatele',
	'NO_FINAL_TOPIC_SELECTED'	=> 'Musíte vybrat cílové téma pro sloučení příspěvků',
	'NO_MATCHES_FOUND'		=> 'Nic nenalezeno',
	'NO_POST'				=> 'Musíte vybrat příspěvek, aby mohl být uživatel varován za příspěvek',
	'NO_POST_REPORT'		=> 'Toto téma nebylo nahlášeno',
	'NO_POST_SELECTED'		=> 'Musíte vybrat nejméně jeden příspěvek k&nbsp;vykonání této činnosti',
	'NO_REASON_DISAPPROVAL'	=> 'Prosím udejte důvod pro neschválení',
	'NO_REPORT'						=> 'Nebylo nalezeno žádné hlášení',
	'NO_REPORTS'					=> 'Nebyla nalezena žádná hlášení',
	'NO_REPORT_SELECTED'			=> 'Musíte vybrat alespoň jedno hlášení pro provedení této akce',
	'NO_TOPIC_ICON'			=> 'Žádné',
	'NO_TOPIC_SELECTED'		=> 'Musíte vybrat nejméně jedno téma k&nbsp;vykonání této činnosti',
	'NO_TOPICS_QUEUE'				=> 'Nejsou žádná témata ke schválení',
	
	'ONLY_TOPIC'			=> 'Jen témata „%s“',
	'OTHER_USERS'			=> 'Uživatelé přispívající z této IP',

	'POSTER'				=> 'Autor',
	'POSTS_APPROVED_SUCCESS'=> 'Vybrané příspěvky byly schváleny.',
	'POSTS_DELETED_SUCCESS'	=> 'Vybrané příspěvky byly odstraněny z databáze.',
	'POSTS_DISAPPROVED_SUCCESS'=> 'Vybrané příspěvky nebyly schváleny.',
	'POSTS_LOCKED_SUCCESS'	=> 'Vybrané příspěvky byly zamknuty.',
	'POSTS_MERGED_SUCCESS'	=> 'Vybrané příspěvky byly sloučeny.',
	'POSTS_UNLOCKED_SUCCESS'=> 'Vybrané příspěvky byly odemknuty.',
	'POSTS_PER_PAGE'		=> 'Příspěvků na stranu',
	'POSTS_PER_PAGE_EXPLAIN'=> '(Pro zobrazení všech příspěvků nastavte 0)',
	'POST_APPROVED_SUCCESS'	=> 'Vybrané příspěvky byly schváleny.',
	'POST_DELETED_SUCCESS'	=> 'Vybraný příspěvek byl odstraněn z databáze.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Vybrané téma nebylo schváleno.',
	'POST_LOCKED_SUCCESS'	=> 'Příspěvek byl zamknut.',
	'POST_NOT_EXIST'		=> 'Příspěvek, který požadujete, neexistuje.',
	'POST_REPORTED_SUCCESS'	=> 'Tento příspěvek byl nahlášen.',
	'POST_UNLOCKED_SUCCESS'	=> 'Příspěvek byl odemknut.',

	'READ_USERNOTES'			=> 'Záznamy uživatele',
	'READ_WARNINGS'				=> 'Varování uživatele',
	'REPORTER'					=> 'Oznamovatel',
	'REPORTED'					=> 'Nahlášeno',
	'REPORTED_BY'				=> 'Nahlásil',
	'REPORTED_ON_DATE'			=> '-',
	'REPORTS_CLOSED_SUCCESS'	=> 'Vybraná nahlášení byla uzavřena.',
	'REPORTS_DELETED_SUCCESS'	=> 'Vybraná nahlášení byla smazána.',
	'REPORTS_TOTAL'				=> 'Celkem je zde <strong>%d</strong> nahlášení ke zhlédnutí',
	'REPORTS_ZERO_TOTAL'		=> 'Nejsou zde žádná nahlášení ke zhlédnutí',
	'REPORT_CLOSED'				=> 'Toto nahlášení bylo již dříve uzavřeno.',
	'REPORT_CLOSED_SUCCESS'		=> 'Vybrané nahlášení bylo uzavřeno.',
	'REPORT_DELETED_SUCCESS'	=> 'Vybrané nahlášení bylo smazáno.',
	'REPORT_DETAILS'			=> 'Detaily nahlášení',
	'REPORT_MESSAGE'			=> 'Nahlásit tuto zprávu',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Použijte tento formulář pro nahlášení vybrané zprávy administrátorovi fóra. Nahlášení by mělo být použito hlavně, když zpráva porušuje pravidla fóra.',
	'REPORT_NOTIFY'			=> 'Upozorni mě',
	'REPORT_NOTIFY_EXPLAIN'	=> 'Informovat mě, jestliže nahlášení je v&nbsp;jednání',
	'REPORT_POST_EXPLAIN'	=> 'Použijte tento formulář pro nahlášení vybraného příspěvku administrátorovi fóra. Nahlášení by mělo být použito hlavně, když příspěvek porušuje pravidla fóra.',
	'REPORT_REASON'			=> 'Důvod nahlášení',
	'REPORT_TIME'			=> 'Čas nahlášení',
	'REPORT_TOTAL'			=> 'Celkem je zde <strong>1</strong> nahlášení ke shlédnutí',
	'RESYNC'				=> 'Resynchronizace',
	'RETURN_MESSAGE'		=> '%sZpět na zprávu%s',
	'RETURN_NEW_FORUM'		=> '%sPřejít na nové fórum%s',
	'RETURN_NEW_TOPIC'		=> '%sPřejít na nové téma%s',
	'RETURN_POST'			=> '%sZpět na příspěvek%s',
	'RETURN_QUEUE'			=> '%sZpět do fronty%s',
	'RETURN_REPORTS'		=> '%sZpět na nahlášení%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sZpět na téma%s',
	
	'SEARCH_POSTS_BY_USER'				=> 'Hledání podle autora',
	'SELECT_ACTION'						=> 'Vybrat požadovanou činnost',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Vyberte fórum, ve kterém chcete, aby bylo zobrazeno toto Globální oznámení.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Jedno nebo více z vybraných témat jsou globální oznámení. Vyberte fórum, ve kterém chcete, aby byly zobrazeny.',
	'SELECT_MERGE'						=> 'Vybrat pro sloučení',
	'SELECT_TOPICS_FROM'				=> 'Vybrat téma z',
	'SELECT_TOPIC'			=> 'Vybrat téma',
	'SELECT_USER'			=> 'Vybrat uživatele',
	'SORT_ACTION'			=> 'Akce',
	'SORT_DATE'				=> 'Datum',
	'SORT_IP'				=> 'IP adresa',
	'SORT_WARNINGS'			=> 'Varování',
	'SPLIT_AFTER'			=> 'Rozdělit téma od vybraného příspěvku',
	'SPLIT_FORUM'			=> 'Fórum pro nové téma',
	'SPLIT_POSTS'			=> 'Rozdělit vybrané příspěvky',
	'SPLIT_SUBJECT'			=> 'Nový předmět tématu',
	'SPLIT_TOPIC_ALL'		=> 'Rozdělit téma podle vybraných příspěvků',
	'SPLIT_TOPIC_ALL_CONFIRM'	=> 'Jste si jistý, že chcete rozdělit toto téma?',
	'SPLIT_TOPIC_BEYOND'	=> 'Rozdělit téma od vybraného příspěvku',
	'SPLIT_TOPIC_BEYOND_CONFIRM'	=> 'Jste si jistý, že chcete rozdělit toto téma od vybraného příspěvku?',
	'SPLIT_TOPIC_EXPLAIN'	=> 'Použitím toho formuláře dole můžete rozdělit témata na dvě buď vybráním příspěvků vlastnoručně, nebo rozdělením od vybraného příspěvku.',

	'THIS_POST_IP'			=> 'IP adresa tohoto příspěvku',
	'TOPICS_APPROVED_SUCCESS'	=> 'Vybraná témata byla schválena.',
	'TOPICS_DELETED_SUCCESS'=> 'Vybraná témata byla odstraněna z databáze.',
	'TOPICS_DISAPPROVED_SUCCESS'	=> 'Vybraná témata nebyla schválena',
	'TOPICS_FORKED_SUCCESS'	=> 'Vybraná témata byla zkopírována.',
	'TOPICS_LOCKED_SUCCESS'	=> 'Vybraná témata byla zamknuta.',
	'TOPICS_MOVED_SUCCESS'	=> 'Vybraná témata byla přesunuta.',
	'TOPICS_RESYNC_SUCCESS'	=> 'Vybraná témata byla resynchronizována.',
	'TOPICS_TYPE_CHANGED'		=> 'Druh témat byl změněn.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Vybraná témata byla odemknuta.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Vybrané téma bylo schváleno.',
	'TOPIC_DELETED_SUCCESS'	=> 'Vybrané téma bylo odstraněno z databáze.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Vybrané téma nebylo schváleno.',
	'TOPIC_FORKED_SUCCESS'	=> 'Vybrané téma bylo zkopírováno.',
	'TOPIC_LOCKED_SUCCESS'	=> 'Vybrané téma bylo zamknuto.',
	'TOPIC_MOVED_SUCCESS'	=> 'Vybrané téma bylo přesunuto.',
	'TOPIC_NOT_EXIST'		=> 'Vybrané téma neexistuje.',
	'TOPIC_RESYNC_SUCCESS'	=> 'Vybrané téma bylo resynchronizováno.',
	'TOPIC_SPLIT_SUCCESS'	=> 'Vybrané téma bylo rozděleno.',
	'TOPIC_TIME'			=> 'Čas tématu',
	'TOPIC_TYPE_CHANGED'	=> 'Typ tématu byl změněn.',
	'TOPIC_UNLOCKED_SUCCESS'=> 'Vybrané téma bylo odemknuto.',
	'TOTAL_WARNINGS'		=> 'Celkový počet varování',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Celkem je zde <strong>%d</strong> příspěvků čekajících na schválení',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Nejsou zde žádné příspěvky čekající na schválení',
	'UNAPPROVED_POST_TOTAL'			=> 'Celkem je zde <strong>1</strong> příspěvek čekající na schválení',
	'UNLOCK'						=> 'Odemknout',
	'UNLOCK_POST'					=> 'Odemknout příspěvek',
	'UNLOCK_POST_EXPLAIN'			=> 'Povolit editování',
	'UNLOCK_POST_POST'				=> 'Odemknout příspěvek',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Jste si jistý, že chcete povolit editování příspěvku?',
	'UNLOCK_POST_POSTS'				=> 'Odemknout vybrané příspěvky',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Jste si jistý, že chcete povolit editování vybraných příspěvků?',
	'UNLOCK_TOPIC'					=> 'Odemknout téma',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Jste si jistý, že chcete odemknout toto téma?',
	'UNLOCK_TOPICS'					=> 'Odemknout vybraná témata',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Jste si jistý, že chcete odemknout všechna vybraná témata?',
	'USER_CANNOT_POST'				=> 'Nemůžete přispívat do toho fóra',
	'USER_CANNOT_REPORT'			=> 'Nemůžete nahlásit příspěvek v&nbsp;tomto fóru',
	'USER_FEEDBACK_ADDED'			=> 'Poznámka k uživateli byla přidána.',
	'USER_WARNING_ADDED'			=> 'Uživatel byl varován.',

	'VIEW_DETAILS'			=> 'Zobrazit detaily',
	'VIEW_POST'					=> 'Zobrazit příspěvek',

	'WARNED_USERS'			=> 'Varovaní uživatelé',
	'WARNED_USERS_EXPLAIN'	=> 'Toto je seznam uživatelů s&nbsp;varováním, jejichž doba platnosti ještě nevypršela.',
	'WARNING_PM_BODY'		=> 'Z důvodu porušení pravidel vám bylo uděleno varování od administrátora nebo moderátora tohoto fóra.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Udělení varování na fóru',
	'WARNING_POST_DEFAULT'	=> 'Toto varování se týká příspěvků, který jste odeslali: %s.',
	'WARNINGS_ZERO_TOTAL'	=> 'Neexistují žádná varování',

	'YOU_SELECTED_TOPIC'	=> 'Vybrané téma číslo %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Ostatní'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Příspěvek obsahuje odkaz na nelegální nebo pirátský software.',
			'SPAM'		=> 'Nahlášené téma mělo za účel propagovat webovou stránku nebo jiný produkt.',
			'OFF_TOPIC'	=> 'Nahlášený příspěvek je off-topic.',
			'OTHER'		=> 'Nahlášený příspěvek nezapadá do žádné z kategorií, prosím, vyplňte pole pro další informace.'
		)
	),
));

?>