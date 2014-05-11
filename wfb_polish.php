﻿<?php
// Polish parameters (Sławomir BROWKIM)

$dateformat = "d-m-Y H:i:s";

$messages = array(
   "rlm1"=>"Wymagane jest logowanie",
   "trc0"=>"Pusty",
   "trc1"=>"Pusty Kosz",
   "trc2"=>"Kosz nie został zupełnie opróżniony",
   "trc3"=>"Nie mogę czytać zawartości Kosza",
   "trc9"=>"Opróżnij Kosz",
   "rst0"=>"Przywróć",
   "rst1"=>"Zła nazwa przywracanego pliku",
   "rst2"=>"Mogę przywrócić plik tylko z Kosza",
   "rst3"=>"Wszystkie zaznaczone pliki zostały przywrócone",
   "rst4"=>"Nie mogę przywrócić pliku %VAR1%",
   "rst5"=>"Brak nazwy przywracanego pliku",
   "rst9"=>"Przywróć <b>zaznaczony</b> plik",
   "mov0"=>"Przenieś",
   "mov1"=>"Nieprawidłowa nazwa przenoszonych plik(ów) lub folder(ów)",
   "mov2"=>"Nieprawidłowy folder dla przonoszonych plik(ów) lub folder(ów)",
   "mov3"=>"Wszystkie zaznaczone plik(ów) lub folder(ów) zostały przeniesione do %VAR1%",
   "mov4"=>"Nie mogę przenieść pliku lub folderu %VAR1% do %VAR2%",
   "mov5"=>"Folder docelowy %VAR1% jest niewłaściwy",
   "mov6"=>"Brak nazwy pliku lub nazwy folderu docelowego dla przenoszonych plik(ów) lub folder(ów)",
   "mov9"=>"Przenieś <b>zaznaczone</b> pliki lub foldery do <b>zaznaczonego</b> folderu",
   "ren0"=>"Zmień nazwę",
   "ren1"=>"Nieprawidłowa nazwa zmienianego pliku",
   "ren2"=>"Nieprawidłowa nowa nazwa zmienianego pliku",
   "ren3"=>"Nazwa pliku %VAR1% zmieniona na %VAR2%",
   "ren4"=>"Nie mogę zmienić nazwy pliku %VAR1% na %VAR2%",
   "ren5"=>"Brak nazwy lub nowa nazwa zmienianego pliku",
   "ren9"=>"Zmień nazwę <b>zaznaczonego</b> pliku lub folderu na",
   "cpy0"=>"Kopiuj",
   "cpy1"=>"Nieprawidłowa nazwa kopiowanego pliku",
   "cpy2"=>"Nieprawidłowa nazwa docelowa kopiowanego pliku",
   "cpy3"=>"Plik %VAR1% skopiowany do %VAR2%",
   "cpy4"=>"Nie mogę skopiować pliku %VAR1% do %VAR2%",
   "cpy5"=>"Nie mogę kopiować folderów",
   "cpy6"=>"Brak nazwy pliku lub nazwy docelowej kopiowanego pliku",
   "cpy9"=>"Kopiuj <b>zaznaczony</b> plik do",
   "als0"=>"Alias",
   "als1"=>"Niewłaściwa nazwa pliku dla aliasu",
   "als2"=>"Został utworzony alias dla pliku %VAR1%",
   "als3"=>"Nie można utworzyć aliasu dla pliku %VAR1%",
   "als4"=>"Usunięto alias dla pliku %VAR1%",
   "als5"=>"Nie utworzono aliasu dla pliku %VAR1%",
   "als6"=>"Nie można tworzyć aliasów dla folderów",
   "als7"=>"Brak nazwy pliku dla aliasu",
   "als9"=>"Utwórz alias dla <b>zaznaczonego</b> pliku",
   "cre0"=>"Utwórz plik",
   "cre1"=>"Niewłaściwa nazwa tworzonego pliku",
   "cre2"=>"Utworzono plik %VAR1%",
   "cre3"=>"Nie mogę utworzyć pliku %VAR1%",
   "cre4"=>"Brak nazwy tworzonego pliku",
   "cre9"=>"Utwórz nowy plik",
   "sav1"=>"Niewłaściwa nazwa zapisywanego pliku",
   "sav2"=>"Nie można zapisać pliku %VAR1%",
   "sav3"=>"Brak nazwy zapisywanego pliku",
   "sav4"=>"Zapisz",
   "sav5"=>"Anuluj",
   "sav6"=>"DOS / WINDOWS format",
   "sav7"=>"UNIX format",
   "del0"=>"Kasuj",
   "del1"=>"Niewłaściwa nazwa usuwanego pliku",
   "del4"=>"Wszystkie zaznaczone pliki zostały przeniesione do Kosza",
   "del5"=>"Nie można przenieść pliku %VAR1% do Kosza",
   "del6"=>"Brak nazwy kasowanego pliku",
   "del7"=>"Folder %VAR1% nie jest plikiem",
   "del9"=>"Kasuj <b>zaznaczone</b> pliki",
   "rmd0"=>"Usuń",
   "rmd1"=>"Niewłaściwa nazwa usuwanego folderu",
   "rmd2"=>"Folder %VAR1% został usunięty",
   "rmd3"=>"Nie można usunąć folderu %VAR1% (nie jest pusty ?)",
   "rmd4"=>"Brak nazwy usuwanego folderu",
   "rmd5"=>"Plik %VAR1% nie jest folderem",
   "rmd9"=>"Usuń <b>zaznaczony</b> folder",
   "fup0"=>"Ładuj",
   "fup1"=>"Niewłaściwa nazwa ładowanego pliku",
   "fup2"=>"Ładowanie pliku %VAR1% powiodło się",
   "fup3"=>"Ładowanie pliku %VAR1% zostało przerwane",
   "fup4"=>"Brak nazwy ładowanego pliku",
   "fup9"=>"Ładuj plik",
   "uup0"=>"Ładowany URL",
   "uup1"=>"Niewłaściwy URL do załadowania",
   "uup2"=>"URL %VAR1% został załadowany do %VAR2%",
   "uup3"=>"Nie mogęzaładować %VAR1%",
   "uup4"=>"Brak URL do załadowania",
   "uup9"=>"Załaduj plik z URL",
   "mkd0"=>"Utwórz folder",
   "mkd1"=>"Nnieprawidłowa nazwa tworzonego folderu",
   "mkd2"=>"Folder %VAR1% został utworzony",
   "mkd3"=>"Nie można utworzyć folderu %VAR1%",
   "mkd4"=>"Brak nazwy tworzonego folderu",
   "mkd9"=>"Utwórz nowy folder",
   "edt1"=>"Nieprawidłowa nazwa edytowanego pliku",
   "edt2"=>"Nieprawidłowa nazwa oglądanego pliku",
   "edt3"=>"Nieprawidłowe rozszerzenie edytowanego pliku",
   "edt4"=>"Nieprawidłowe rozszerzenie oglądanego pliku",
   "edt5"=>"Nie mogę czytać pliku %VAR1%",
   "edt6"=>"Brak nazwy edytowanego pliku",
   "edt7"=>"Brak nazwy oglądanego pliku",
   "edt8"=>"Edytuj plik",
   "edt9"=>"Pokaż plik",
   "edt10"=>"E", // E(dit action)
   "edt11"=>"V", // V(iew action)
   "edt12"=>"Wróc do listy plików",
   "dir1"=>"Nie mogę czytać folderu",
   "dir2"=>"Folder główny",
   "dir3"=>"W górę",
   "dir4"=>"Kosz",
   "dir5"=>"Podkatalog",
   "tab1"=>"Sel", // Sel(ection)
   "tab2"=>"Do",
   "tab3"=>"Nazwa",
   "tab4"=>"Rozmiar",
   "tab5"=>"Data",
   "tab6"=>"Atrybuty",
   "tab7"=>"Właściciel",
   "tab8"=>"Grupa",
   "tab9"=>"tylko do<br>odczytu",
   "tab10"=>"komenda",
   "tab11"=>"folderów",
   "tab12"=>"plików",
   "tab13"=>"KB", // K(ilo)b(ytes)
   "tab14"=>"Tak",
   "act1"=>"Nieznana lub niewykonalna komenda",
   "act2"=>"Jesteś pewien" ,
   "act3"=>"Nie wybrano docelowej nazwy pliku lub folderu",
   "act4"=>"Nie zaznaczono żadnego pliku",
   "act5"=>"Nie podano nowej nazwy pliku do zmiany",
   "act6"=>"Nie podano nazwy kopiowanego pliku do skopiowania",
   "act7"=>"Zaznaczopno zbyt duzo plików lub folderów",
   "act8"=>"Zaznacz tylko pliki",
   "act9"=>"Zaznacz folder",
   "sch1"=>"Szukanie plików w bieżącym folderze",
   "sch2"=>"Szukaj",
   "sch3"=>"Nie znaleziono plików odpowiadających %VAR1%",
   "sch4"=>"Wyniki poszukiwań dla %VAR1%",
   "sch5"=>"Przeszukaj folder",
   "sch6"=>"Brak wzorca wyszukiwania",
   "sch7"=>"Używaj wyrażeń regularnych",
   "sch8"=>"Idź do folderu <b>zaznaczonego</b> pliku",
   "sch9"=>"Idź do folderu",
   "dwn1"=>"D", // D(ownload action)
   "dwn2"=>"Nieprawidłowa nazwa ściąganego pliku",
   "dwn3"=>"Nie mogę ściągnąć pliku",
   "dwn4"=>"Brak nazwy ściąganego pliku",
   "dwn5"=>"Ściągnij plik",
   "inf1"=>"Sortuj pliki według nazwy",
   "inf2"=>"Sortuj pliki według rozmiaru",
   "inf3"=>"Sortuj pliki według daty",
   "inf4"=>"Idź do folderu",
   "inf5"=>"Pokaż plik",
   "inf6"=>"Idż do głównego folderu",
   "inf7"=>"Idź w górę",
   "inf8"=>"Idź do Kosza"
);?>
