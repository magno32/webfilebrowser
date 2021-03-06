// Ukranian (Dmytro KOVALOV)

$dateformat = "m-d-Y H:i:s";

$messages = array(
   "rlm1"=>"Потр╕бна автентикац╕я",
   "trc0"=>"Пусто",
   "trc1"=>"Можна спорожнити см╕тник",
   "trc2"=>"См╕тник спорожнений не повн╕стю",
   "trc3"=>"Не можу прочитати файли в см╕тнику",
   "trc9"=>"Спорожнити см╕тник",
   "rst0"=>"В╕дновити",
   "rst1"=>"Погана назва файлу для в╕дновлення",
   "rst2"=>"В╕дновити можна т╕льки з╕ см╕тника",
   "rst3"=>"Вс╕ вибран╕ файли в╕дновлено",
   "rst4"=>"Неможливо в╕дновити файл %VAR1%",
   "rst5"=>"Нема╓ назви файлу щоб в╕дновити",
   "rst9"=>"В╕дновити <b>вибраний</b> файл",
   "mov0"=>"Перенести",
   "mov1"=>"Погана назва для переносу файла(╕в) чи каталогу(╕в)",
   "mov2"=>"Некоректна назва п╕дкаталогу для переносу файла(╕в) чи каталогу(╕в)",
   "mov3"=>"Вс╕ вибран╕ файли чи каталоги перенесено в %VAR1%",
   "mov4"=>"Неможливо перенести файл чи каталог %VAR1% в %VAR2%",
   "mov5"=>"Каталог 'куди'  %VAR1% некоректний п╕дкаталог",
   "mov6"=>"Нема╓ назви чи не вказано п╕дкаталог, куди переносити файл чи каталог",
   "mov9"=>"Перенести <b>вибран╕</b> файл(и) чи каталог(и) в <b>вибраний</b> каталог",
   "ren0"=>"Зм╕нити назву",
   "ren1"=>"Нев╕рно вибраний файл для перейменування",
   "ren2"=>"Нев╕рно вибрана нова назва для файла",
   "ren3"=>"Назву файла %VAR1% зм╕нено на %VAR2%",
   "ren4"=>"Неможливо зм╕нити назву файла %VAR1% в %VAR2%",
   "ren5"=>"Нев╕рно вибраний файл чи не вказана нова назва файла для перейменування",
   "ren9"=>"Зм╕нити назву <b>вибраного</b> файла чи каталогу на",
   "cpy0"=>"Коп╕ювати",
   "cpy1"=>"Нев╕рна вибраний файл для коп╕ювання",
   "cpy2"=>"Нев╕рно вибрана нова назва файла для створення коп╕╖",
   "cpy3"=>"Створено коп╕ю файла %VAR1% в %VAR2%",
   "cpy4"=>"Неможливо створити коп╕ю файла %VAR1% в %VAR2%",
   "cpy5"=>"Каталоги не можна коп╕ювати",
   "cpy6"=>"В╕дсутн╕ або назва файла, який треба коп╕ювати, або нова назва файла",
   "cpy9"=>"Коп╕ювати <b>вибраний</b> файл в",
   "als0"=>"Псевдо",
   "als1"=>"Нев╕рна назва файла для створення псевда",
   "als2"=>"Створене псевдо для файла  %VAR1%",
   "als3"=>"Неможливо створити псевдо для файла  %VAR1%",
   "als4"=>"Псевдо для файла %VAR1% стерто",
   "als5"=>"Для файла  %VAR1% не було псевда",
   "als6"=>"Псевда для каталог╕в не дозволен╕",
   "als7"=>"Нема╓ назви файла для створення псевда",
   "als9"=>"Створити псевдо для  <b>вибраного</b> файла ",
   "cre0"=>"Створити файл",
   "cre1"=>"Нев╕рна назва файла для створення",
   "cre2"=>"Створено файл %VAR1%",
   "cre3"=>"Неможливо створити файл %VAR1%",
   "cre4"=>"Не вказана назва файла для створення",
   "cre9"=>"Створити новий файл",
   "sav1"=>"Нев╕рно вказана назва файла для запису",
   "sav2"=>"Неможливо записати файл %VAR1%",
   "sav3"=>"Нема╓ назви файла для запису",
   "sav4"=>"Записати",
   "sav5"=>"Скасувати",
   "sav6"=>"Формат DOS / WINDOWS ",
   "sav7"=>"Формат UNIX ",
   "del0"=>"Стерти",
   "del1"=>"Нев╕рно вказана назва файла для стирання",
   "del4"=>"Вс╕ вибран╕ файлs перенесено в см╕тник",
   "del5"=>"Неможливо перенести файл %VAR1% в см╕тник ",
   "del6"=>"Не вказана назва для стирання файла",
   "del7"=>"Каталог %VAR1% -- не файл",
   "del9"=>"Стерти  <b>вибран╕</b> файли",
   "rmd0"=>"Стерти",
   "rmd1"=>"Погано вказана назва каталогу для стирання",
   "rmd2"=>"Каталог %VAR1% стерто",
   "rmd3"=>"Неможливо стерти каталог %VAR1%. Не порожн╕й?",
   "rmd4"=>"Не вказана назва каталога для стирання",
   "rmd5"=>"Файл %VAR1% -- не каталог",
   "rmd9"->"Стерти <b>вибраний</b> каталог",
   "fup0"=>"В╕двантажити",
   "fup1"=>"Нев╕рно назва файла для в╕двантаження",
   "fup2"=>"В╕двантаження файла %VAR1% усп╕шне",
   "fup3"=>"В╕двантаження файла %VAR1% перервано",
   "fup4"=>"Не вказана назва файла для в╕двантаження",
   "fup9"=>"В╕двантажити файл",
   "uup0"=>"В╕двантажити URL",
   "uup1"=>"Нев╕рно вказаний  URL для в╕двантаження",
   "uup2"=>"URL %VAR1% завантажено в %VAR2%",
   "uup3"=>"Неможливо в╕двантажити %VAR1%",
   "uup4"=>"Не вказаний URL для в╕двантаження",
   "uup9"=>"В╕двантажити файл з  URL",
   "mkd0"=>"Створити каталог",
   "mkd1"=>"Нев╕рно вибрана назва каталога для створення",
   "mkd2"=>"Каталог %VAR1% створено",
   "mkd3"=>"Неможливо створити каталог %VAR1%",
   "mkd4"=>"Не вказана назва для створення каталога",
   "mkd9"=>"Створити новий каталог",
   "edt1"=>"Нев╕рно вибрана назва файла для редагування",
   "edt2"=>"Нев╕рно вибрана назва файла для перегляду",
   "edt3"=>"Нев╕рно вибране розширення файла для редагування",
   "edt4"=>"Нев╕рно вибране розширення файла для перегляду",
   "edt5"=>"Неможливо прочитати файл %VAR1%",
   "edt6"=>"Не вказана назва файла для редагування",
   "edt7"=>"Не вказана назва файла для перегляду",
   "edt8"=>"Редагувати файл",
   "edt9"=>"Подивитись файл",
   "edt10"=>"E", // Edit action
   "edt11"=>"V", // View action
   "edt12"=>"Повернутись до списку файл╕в",
   "dir1"=>"Неможливо прочитати каталог",
   "dir2"=>"Головний каталог",
   "dir3"=>"Каталог верхнього р╕вня",
   "dir4"=>"См╕тник",
   "dir5"=>"П╕дкаталог",
   "tab1"=>"Вибр",
   "tab2"=>"В",
   "tab3"=>"Назва",
   "tab4"=>"Розм╕р",
   "tab5"=>"Дата",
   "tab6"=>"Дозволи",
   "tab7"=>"Власн",
   "tab8"=>"Group",
   "tab9"=>"Т╕льки<br>чит.",
   "tab10"=>"Д╕я",
   "tab11"=>"каталоги",
   "tab12"=>"файли",
   "tab13"=>"Кб",
   "tab14"=>"Так",
   "act1"=>"Нев╕дома д╕я чи не п╕дходяща для ц╕╓╖ ситуац╕╖",
   "act2"=>"Ви впевнен╕" ,
   "act3"=>"Не вказано або назви файла, або каталогу, куди його перенести",
   "act4"=>"Не вибрано файла",
   "act5"=>"Не вказано ново╖ назви файла для перейменування",
   "act6"=>"Не вказано ново╖ назви файла для коп╕ювання",
   "act7"=>"Забагато вибрано файл╕в чи каталог╕в",
   "act8"=>"Вибрати т╕льки файли",
   "act9"=>"Вибрати т╕льки каталоги",
   "sch1"=>"Пошук файл╕в(а) з поточному каталоз╕",
   "sch2"=>"Пошук",
   "sch3"=>"Не знайдено файл╕в, за шаблоном  %VAR1%",
   "sch4"=>"Пошук за шаблоном %VAR1%",
   "sch5"=>"Пошук провадився в каталоз╕",
   "sch6"=>"Не вказано шаблон для пошуку",
   "sch7"=>"Вживати регулярн╕ вирази",
   "sch8"=>"Перейти у <b>вибраний</b>  каталог",
   "sch9"=>"Перейти в каталог",
   "dwn1"=>"D", // Download action
   "dwn2"=>"Нев╕рна назва файла для звантаження",
   "dwn3"=>"Неможливо звантажити файл",
   "dwn4"=>"Не вказано назву файла для звантаження",
   "dwn5"=>"Звантажити файл",
   "inf1"=>"В╕дсортувати файли за назвою",
   "inf2"=>"В╕дсортувати файли за розм╕ром",
   "inf3"=>"В╕дсортувати файли за датою",
   "inf4"=>"Перейти в каталог",
   "inf5"=>"Показати файл",
   "inf6"=>"Перейти в головний каталог",
   "inf7"=>"Перейти в каталог р╕внем вище",
   "inf8"=>"Подивитись в см╕тнику"
);
