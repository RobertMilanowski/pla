<?php
// Czech translation by Jan Turoň
// version 1.9.8
// Read our wiki on how to translate: https://bitbucket.org/phpliteadmin/public/wiki/Localization
$lang = array(
	"direction" => "LTR",
	"date_format" => 'G:i \d\n\e j. n. Y (T)',  // see http://php.net/manual/en/function.date.php for what the letters stand for
	"ver" => "verze",
	"for" => "pro",
	"to" => "do",
	"go" => "Proveď",
	"yes" => "Ano",
	"no" => "Ne",
	"sql" => "SQL",
	"csv" => "CSV",
	"csv_tbl" => "Tabulka příslušející CSV souboru",
	"srch" => "Hledat",
	"srch_again" => "Hledat znovu",
	"login" => "Přihlásit se",
	"logout" => "Odhlásit se",
	"view" => "Pohled",
	"confirm" => "Potvrdit",
	"cancel" => "Zrušit",
	"save_as" => "Uložit jako",
	"options" => "Možnosti",
	"no_opt" => "Bez možností",
	"help" => "Nápověda",
	"installed" => "nainstalováno",
	"not_installed" => "nenainstalováno",
	"done" => "hotovo",
	"insert" => "Vložit",
	"export" => "Export",
	"import" => "Import",
	"rename" => "Přejmenovat",
	"empty" => "Vyprázdnit",
	"drop" => "Odstranit",
	"tbl" => "Tabulka",
	"chart" => "Graf",
	"err" => "CHYBA",
	"act" => "Akce",
	"rec" => "Záznamů",
	"col" => "Sloupec",
	"cols" => "sloupcích",
	"rows" => "Řádky",
	"edit" => "Upravit",
	"del" => "Smazat",
	"add" => "Přidat",
	"backup" => "Zálohovat databázový soubor",
	"before" => "Před",
	"after" => "Po",
	"passwd" => "Heslo",
	"passwd_incorrect" => "Nesprávné heslo.",
	"chk_ext" => "Kontroluji podporu SQLite PHP rozšíření",
	"autoincrement" => "Autoincrement",
	"not_null" => "Ne NULLový",
	"attention" => "Pozor",
	"none" => "None",
	"as_defined" => "Je zadána",
	"expression" => "Výraz",
	"download" => "Stažení",
	"open_in_browser" => "Otevřít v prohlížeči",

	"sqlite_ext" => "SQLite rozšíření",
	"sqlite_ext_support" => "Zdá se, že žádné z podporovaných rozšíření SQLite knihovny není k dispozici ve vaší instalaci PHP. Nemůžete používat %s, dokud alespoň jednu nenainstalujete.",
	"sqlite_v" => "SQLite verze",
	"sqlite_v_error" => "Zdá se, že, vaše databáze je SQLite verze %s, ale vaše instalace PHP neobsahuje potřebná rozšíření pro práci s touto verzí. Problém odstraníte buď tím, že databázi smažete a umožnění %s její automatické vytvoření, nebo ji znovu vytvořte ručně jako SQLite verze %s.",
	"report_issue" => "Problém se nepodařilo přesněji určit. Zašlete prosím hlášení o chybě na",
	"sqlite_limit" => "Díky omezení SQLite může být změněn pouze název pole a datový typ.",
	
	"php_v" => "PHP verze",
	"new_version" => "Existuje nová verze!",

	"db_dump" => "Databázový výpis",
	"db_f" => "Databázový soubor",
	"db_ch" => "Změnit databázi",
	"db_event" => "Databázová událost",
	"db_name" => "Název databáze",
	"db_rename" => "Přejmenovat databázi",
	"db_renamed" => "Databáze '%s' byla přejmenována na",
	"db_del" => "Smazat databázi",
	"db_path" => "Cesta k databázi",
	"db_size" => "Velikost databáze",
	"db_mod" => "Databáze naposledy změněna",
	"db_create" => "Vytvořit novou databázi",
	"db_vac" => "Databáze, '%s', byla vysáta.",
	"db_not_writeable" => "Databáze '%s' neexistuje a nemůže být vytvořena, protože nadřazený adresář '%s' nemá právo zápisu. Aplikace je nepoužitelná, dokud toto oprávnění nepovolíte.",
	"db_not_writable" => "Databázový soubor nemá právo zápisu, jeho obsah tedy nemůže být žádným způsobem změněn."
	"db_setup" => "Vyskytl se problém při nastavování vaší databáze %s. Pokusíme se zjistit, o co jde, abyste problém mohl snáze opravit.",
	"db_exists" => "Databáze, jiný soubor nebo adresář jménem '%s' už existuje.",
	"db_blank" => "Název databáze nemůže být prázdný.",

	"exported" => "Exportováno",
	"struct" => "Struktura",
	"struct_for" => "structura pro",
	"on_tbl" => "na tabulce",
	"data_dump" => "Datový výpis pro",
	"backup_hint" => "Tip: nejsnažší způsob zálohování databáze je %s.",
	"backup_hint_linktext" => "stáhnout databázový soubor",
	"total_rows" => "celkem %s řádků",
	"total" => "Celkem",
	"not_dir" => "Zadaný adresář pro hledání databází neexistuje nebo není adresářem.",
	"bad_php_directive" => "Zdá se, že PHP direktiva, 'register_globals' je zapnuta. To je špatně. Před pokračováním ji musíte zakázat.",
	"page_gen" => "Stránka vytvořena během %s sekund.",
	"powered" => "Běží na",
	"free_software" => "Toto je svobodný software.",
	"please_donate" => "Prosím přispějte.",
	"remember" => "Zapamatuj si mě",
	"no_db" => "Vítente v %s. Zdá se, že jste nastavili prohledávání adresáře na databáze ke správě. Nicméně %s nemohl nalézt žádné platné SQLite databáze. Pro vytvoření první databáze použijte nížeuvedený formulář.",
	"no_db2" => "Adresář, který jste zadali, neobsahuje žádné existující databáze ke správě a nemá oprávnění zápisu. To znamená, že pomocí %s nelze vytvořit žádné databáze. Buď povolte právo zápisu, nebo ručně nahrajte databáze do adresáře.",
	"dir_not_executable" => "V zadaném adresáři nelze vyhledat žádné databáze, protože %s nemá nastaveno právo přístupu. Na Linuxu lze toto právo nastavit příkazem 'chmod +x %s'.",

	"create" => "Vytvořit",
	"created" => "vyla vytvořena",
	"create_tbl" => "Vytvořit novou tabulku",
	"create_tbl_db" => "Vytvořit novou tabulku v databázi",
	"create_trigger" => "Vytvořit novou spoušť na tabulce",
	"create_index" => "Vytvářím index na tabulce",
	"create_index1" => "Vytvořit index",
	"create_view" => "Vytvořit nový pohled na databázi",
	
	"trigger" => "Spoušť",
	"triggers" => "Spouště",
	"trigger_name" => "Název spouště",
	"trigger_act" => "Akce spouště",
	"trigger_step" => "Kroky spouště (oddělené středníkem)",
	"when_exp" => "WHEN výraz (výraz zapište bez 'WHEN')",
	"index" => "Index",
	"indexes" => "Indexy",
	"index_name" => "Název indexu",
	"name" => "Název",
	"unique" => "Jedinečný",
	"seq_no" => "Seq. No.",
	"emptied" => "bylo vyprázdněno",
	"dropped" => "bylo odstraněno",
	"renamed" => "bylo přejmenováno na",
	"altered" => "bylo úspěšně změněno",
	"inserted" => "vloženo",
	"deleted" => "smazáno",
	"affected" => "změněno",
	"blank_index" => "Název indexu nesmí být prázdný.",
	"one_index" => "Musíte určit alespoň jeden indexový sloupec.",
	"docu" => "Dokumentace",
	"license" => "Licence",
	"proj_site" => "Projekt",
	"bug_report" => "To může být chyba, je třeba ji nahlásit na",
	"return" => "Návrat",
	"browse" => "Projít",
	"fld" => "Pole",
	"fld_num" => "Počet polí",
	"fields" => "Pole",
	"type" => "Typ",
	"operator" => "Operátor",
	"val" => "Hodnota",
	"update" => "Upravit",
	"comments" => "Komentáře",
	
	"specify_fields" => "Musíte zadat počet polí v tabulce.",
	"specify_tbl" => "Musíte zadat název tabulky.",
	"specify_col" => "Musíte zadat sloupec.",
	
	"tbl_exists" => "Tabulka toho jména už existuje.",
	"show" => "Zobrazit",
	"show_rows" => "Zobrazuji %s řádků. ",
	"showing" => "Zobrazuji",
	"showing_rows" => "Zobrazuji řádky",
	"query_time" => "(Dotaz zabral %s s)",
	"syntax_err" => "Váš dotaz obsahuje syntaktickou chybu (nebyl proveden)",
	"run_sql" => "Spustit SQL dotaz/dotazy na databázi '%s'",
	"recent_queries" => "Poslední dotazy",
	"full_texts" => "Ukaž celé texty",
	"no_full_texts" => "Zkrať dlouhé texty",

	// requires adjustment: multiple tables may get emptied
	"ques_table_empty" => "Opravdu chcete vyprázdnit tabulku '%s'?",
	// requires adjustment: multiple tables may get emptied and it may also be views
	"ques_table_drop" => "Opravdu chcete odstranit tabulku '%s'?",
	"ques_drop_view" => "Opravdu chcete odstranit pohled '%s'?",
	"ques_row_delete" => "Opravdu chcete smazad řádky %s z tabulky '%s'?",
	"ques_database_delete" => "Opravdu chcete to smazat databázi '%s'?",
	"ques_column_delete" => "Opravdu chcete to odstranit sloupce %s z tabulky '%s'?",
	"ques_index_delete" => "Opravdu chcete smazat index '%s'?",
	"ques_trigger_delete" => "Opravdu chcete smazat spoušť '%s'?",
	"ques_primarykey_add" => "Opravdu chcete přidat primární klíč na sloupec/sloupce %s v tabulce '%s'?",
	
	"export_struct" => "Exportovat se strukturou",
	"export_data" => "Exportovat s daty",
	"add_drop" => "Přidat DROP TABLE",
	"add_transact" => "Přidat TRANSACTION",
	"fld_terminated" => "Pole ukončena",
	"fld_enclosed" => "Pole uzavřena do",
	"fld_escaped" => "Pole escapována pomocí",
	"fld_names" => "Názvy polí na první řádce",
	"rep_null" => "Místo NULL použít",
	"rem_crlf" => "Odstranit CRLF znaky v polích",
	"put_fld" => "Dát jména polí na první řádku",
	"null_represent" => "NULL vyjádřeno jako",
	"import_suc" => "Import byl úspěšný.",
	"import_into" => "Importovat do",
	"import_f" => "Importovat soubor",
	"max_file_size" => "Maximální velikost souboru",
	"rename_tbl" => "Přejmenovat tabulku '%s' na",
	
	"rows_records" => "řádků počínaje záznamem # ",
	"rows_aff" => "řádků změněno. ",
	
	"as_a" => "jako",
	"readonly_tbl" => "'%s' je pohled, což znamená, že je výrazem SELECT považovaný za tabulku pouze pro čtení. Nelze vkládat nebo upravovat záznamy.",
	"chk_all" => "Zaškrtnout vše",
	"unchk_all" => "Odškrtnout vše",
	"with_sel" => "Vybrané",
	
	"no_tbl" => "V databázi není žádná tabulka.",
	"no_chart" => "Pokud toto čtete, znamená to, že graf nemohl být vytvořen. Data, která se snažíte zobrazit, nejsou vhodná pro graf.",
	"no_rows" => "V tabulce nejsou řádky ve zvoleném rozsahu.",
	"no_sel" => "Nic jste nevybral.",
	
	"chart_type" => "Typ grafu",
	"chart_bar" => "Sloupcový graf",
	"chart_pie" => "Koláčový graf",
	"chart_line" => "Čárový graf",
	"lbl" => "Názvy",
	"empty_tbl" => "Tabulka je prázdná.",
	"click" => "Klikněte zde",
	"insert_rows" => "pro vložení řádků.",
	"restart_insert" => "Opakovat vkládání s",
	"ignore" => "Ignorovat",
	"func" => "Funkce",
	"new_insert" => "Vložit jako nový řádek",
	"save_ch" => "Uložit změny",
	"def_val" => "Výchozí hodnota",
	"prim_key" => "Primární klíč",
	"tbl_end" => "pole na konci tabulky",
	"query_used_table" => "Dotaz pro vytvoření této tabulky",
	"query_used_view" => "Dotaz pro vytvoření tohoto pohledu",
	"create_index2" => "Vytvořit index na",
	"create_trigger2" => "Vytvořit novou spoušť",
	"new_fld" => "Přidávám nová pole do tabulky '%s'",
	"add_flds" => "Přidat pole",
	"edit_col" => "Editace sloupce '%s'",
	"vac" => "Vysavač",
	"vac_desc" => "Velké databáze občas potřebují vysát, aby se zmenšilo místo, které zabírají na serveru. Klikněte na následující tlačítko pro vysátí databáze '%s'.",
	"vac_on_empty" => "Znovu sestavit databázový soubor pro zmenšení nepoužívaného místa (Vacuum)",
	"event" => "Událost",
	"each_row" => "Pro každou řádku",
	"define_index" => "Definovat vlastnosti indexu",
	"dup_val" => "Duplicitní hodnoty",
	"allow" => "Povoleno",
	"not_allow" => "Nepovoleno",
	"asc" => "Vzestupně",
	"desc" => "Sestupně",
	"warn0" => "Byl jsi varován.",
	"warn_passwd" => "Používáte výchozí heslo, což je nebezpečné. Můžete ho snadno změnit na začátku %s.",
	"sel_state" => "Výraz SELECT",
	"delimit" => "Oddělovač",
	"back_top" => "Zpět nahoru",
	"choose_f" => "Zvolte soubor",
	"instead" => "Místo",
	"define_in_col" => "Určit sloupce indexu",
	
	"delete_only_managed" => "Lze smazat pouze databáze spravované tímto nástrojem!",
	"rename_only_managed" => "Lze přejmenovávat pouze databáze spravované tímto nástrojem!",
	"db_moved_outside" => "Buď jste se pokusili přesunout databázi do adresáře odkud nemůže být spravována, nebo kontrola, jestli jste tak opravdu učinil, selhala kvůli chybějícím oprávněním.",
	"extension_not_allowed" => "Rozšíření, které jste poskytl, není v seznamu povolených rozšíření. Prosím použijte jedno z následujících rozšíření",
	"add_allowed_extension" => "Do tohoto seznamu lze přidat rozšíření přidáním rozšíření do \$allowed_extensions v konfiguraci.",
	"directory_not_writable" => "Databázový soubor je zapisovatelný, ale pro zápis musí být povoleno oprávnění zápisu i na nadřazený adresář, protože SQLite sem umísťuje dočasné soubory kvůli zamykání.",
	"tbl_inexistent" => "Tabulka %s neexistuje",
	"col_inexistent" => "Sloupec %s neexistuje",

	// errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
	"alter_failed" => "Změna tabulky %s selhala",
	"alter_tbl_name_not_replacable" => "Nemohu změnit název tabulky na název dočasné tabulky",
	"alter_no_def" => "chybí ALTER definice",
	"alter_parse_failed" =>"selhal rozbor ALTER definice",
	"alter_action_not_recognized" => "ALTER akce nerozpoznána",
	"alter_no_add_col" => "v ALTER výrazu nebyl rozpoznán název sloupce pro přidání",
	"alter_pattern_mismatch"=>"Vzorec neodpovídá původnímu CREATE TABLE výrazu",
	"alter_col_not_recognized" => "nelze rozpoznat nový nebo původní název sloupce",
	"alter_unknown_operation" => "Neznámá ALTER operace!",
	
	/* Help documentation */
	"help_doc" => "Documentace - nápověda",
	"help1" => "Rozšiřující knihovny SQLite",
	"help1_x" => "%s používá PHP rozšiřující knihovny umožňující komunikaci se SQLite databázemi. Momentálně %s podporuje PDO, SQLite3, and SQLiteDatabase. Jak PDO tak SQLite3 umí verzi SQLite3, zatímco SQLiteDatabase umí jen verzi 2. Pokud tedy PHP instalace obsahuje více než jednu SQLite rozšiřující knihovnu, PDO and SQLite3 mají přednost kvůli použití lepší technologie. Pokud však máte existující databáze verze SQLite2, %s je vynuceno použití SQLiteDatabase pouze pro tyto databáze. Všechny databáze nemusí být jedné verze. Při vytváření databází se ale použije nejpokročilejší rozšíření.",
	"help2" => "Vytváření nové databáze",
	"help2_x" => "Pokud vytváříte novou databázi, k zadanému jménu se přidá odpovídající přípona (.db, .db3, .sqlite, atd.), pokud ji sami nezadáte. Databáze bude vytvořena v adresáři zadaném proměnnou \$directory variable.",
	"help3" => "Tabulky a Pohledy",
	"help3_x" => "Na hlavní stránce databáze je seznam tabulek a pohledů. Jelikož jsou pohledy pouze pro čtení, některé operace jsou potlačeny. Tyto potlačené operace jsou zjevné svým vynecháním na místě, kde se obvykle nacházejí. Pokud chcete změnit data pohledu, je nutné odstranit pohled a znovu jej vytvořit odpovídajícím SELECT výrazem na ostatních tabulkách. Více informací na <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://en.wikipedia.org/wiki/View_(database)</a>",
	"help4" => "Zapisování SELECT výrazu pro nový pohled",
	"help4_x" => "Při vytváření nového pohledu je nutné zapsat SQL SELECT výraz, který bude používat pro svá data. Pohled je jednoduše tabulka pouze pro čtení, na kterou je možné vznášet dotazy jako na běžnou tabulku, nemůže však být změněna vkládáním či editací sloupců a řádků. Používá se pouze pro pohodlný přístup k datům.",
	"help5" => "Export Structure to SQL File",
	"help5_x" => "During the process for exporting to an SQL file, you may choose to include the queries that create the table and columns.",
	"help6" => "Export dat do SQL souboru",
	"help6_x" => "V dialogu exportu do SQL souboru lze zvolit vložení dotazů, které naplní tabulky současnými hodnotami v tabulkách.",
	"help7" => "Přidání Drop Table do exportovaného SQL souboru",
	"help7_x" => "V dialogu exportu do SQL souboru lze zvolit vložení dotazů DROP k odstranění existujících tabulek před jejich přidáním, takže odpadnou problémy při pokusech o tvorbu tabulek, které již existují.",
	"help8" => "Přidání Transaction do exportovaného SQL souboru",
	"help8_x" => "V dialogu exportu do SQL souboru lze zvolit obalení dotazů příkazem TRANSACTION, tedy pokud dojde při importu z exportovaného souboru kdykoliv k chybě, databáze bude vrácena do původního stavu, částečně aktualizovaná data se do databáze nezapíší.",
	"help9" => "Přidání komentářů do exportovaného SQL souboru",
	"help9_x" => "V dialogu exportu do SQL souboru lze zvolit vložení komentářů vysvětlujících každý krok procesu, aby člověk lépe porozuměl, co provádí."
	"help10" => "Částečné indexy",
	"help10_x" => "Částečné indexy jsou indexy nad podmnožinou řádků tabulky používané v části WHERE. K tomu je zapotřebí verze SQLite 3.8.0 a novější, databázové soubory s částečnými indexy nebudou čitelné ani zapisovatelné ve starších verzích. Viz též <a href='https://www.sqlite.org/partialindex.html' target='_blank'>SQLite dokumentaci.</a>",
	"help11" => "Maximální velikost nahrávaných souborů",
	"help11_x" => "Maximální velikost nahrávaných souborů je určena třemi nastaveními PHP: <em>upload_max_filesize</em>, <em>post_max_size</em> a <em>memory_limit</em>. Nejmenší z těchto tří limitů je maximální velikostí nahrávaných souborů. Pro nahrávání větších souborů upravte tyto hodnoty ve vašem <em>php.ini</em> souboru."
	);
?>
