<?php

/**************************************************************************/
/* Hungarian language translation by                                        */
/* Zsolt R�hberg (rohberg@vnet.hu)                               */
/**************************************************************************/

/************************************************************************/
/* Leonardo: Gliding XC Server					                        */
/* ============================================                         */
/*                                                                      */
/* Copyright (c) 2004-5 by Andreadakis Manolis                          */
/* http://leonardo.thenet.gr                                            */
/*                                                                      */
/* This program is free software. You can redistribute it and/or modify */
/* it under the terms of the GNU General Public License as published by */
/* the Free Software Foundation; either version 2 of the License.       */
/*                                                                      */
/* If you need to use double quotes (") remember to add a backslash (\),*/
/* so your entry will look like: This is \"double quoted\" text.        */
/* And, if you use HTML code, please double check it.                   */
/************************************************************************/

function setMonths() {
	global  $monthList;
	$monthList=array('Janu�r','Febru�r','M�rcius','�prilis','M�jus','J�nius',
					'J�lius','Augusztus','Szeptember','Okt�ber','November','December');
}
setMonths();

//--------------------------------------------
// output.php
//--------------------------------------------
define("_FREE_FLIGHT","Szabadt�v");
define("_FREE_TRIANGLE","H�romsz�g");
define("_FAI_TRIANGLE","FAI h�romsz�g");

define("_SUBMIT_FLIGHT_ERROR","Probl�ma ad�dott a rep�l�s bek�ld�s�n�l");

// list_pilots()
define("_NUM","#");
define("_PILOT","Pil�ta");
define("_NUMBER_OF_FLIGHTS","Rep�l�sek sz�ma");
define("_BEST_DISTANCE","Legjobb t�v");
define("_MEAN_KM","�tlag # km per rep�l�s");
define("_TOTAL_KM","�sszes rep�lt km");
define("_TOTAL_DURATION_OF_FLIGHTS","�sszes rep�lt id�tartam");
define("_MEAN_DURATION","�tlagos rep�lt id�tartam");
define("_TOTAL_OLC_KM","�sszes OLC t�v");
define("_TOTAL_OLC_SCORE","�sszes OLC pont");
define("_BEST_OLC_SCORE","Legjobb OLC pont");
define("_From","t�l");

// list_flights()
define("_DURATION_HOURS_MIN","Id� (�:p)");
define("_SHOW","Megjelen�t�s");

// show flight
define("_FLIGHT_WILL_BE_ACTIVATED_SOON","A rep�l�s 1-2 percen bel�l aktiv�l�dik. ");
define("_TRY_AGAIN","K�rem, pr�b�lja meg k�s�bb!");

define("_TAKEOFF_LOCATION","Starthely");
define("_TAKEOFF_TIME","Startid�pont");
define("_LANDING_LOCATION","Lesz�ll�s");
define("_LANDING_TIME","Lesz�ll�s id�pontja");
define("_OPEN_DISTANCE","Egyenes t�vols�g");
define("_MAX_DISTANCE","Max t�vols�g");
define("_OLC_SCORE_TYPE","OLC pont t�pus");
define("_OLC_DISTANCE","OLC t�vols�g");
define("_OLC_SCORING","OLC pont");
define("_MAX_SPEED","Max sebess�g");
define("_MAX_VARIO","Max vario");
define("_MEAN_SPEED","�tlagsebess�g");
define("_MIN_VARIO","Min vario");
define("_MAX_ALTITUDE","Max mag (ASL)");
define("_TAKEOFF_ALTITUDE","Start mag (ASL)");
define("_MIN_ALTITUDE","Min mag (ASL)");
define("_ALTITUDE_GAIN","Magass�gnyer�s");
define("_FLIGHT_FILE","Rep�l�s f�jl");
define("_COMMENTS","Megjegyz�sek");
define("_RELEVANT_PAGE","Kapcsol�d� web-oldal (URL)");
define("_GLIDER","Sikl�erny�");
define("_PHOTOS","Fot�k");
define("_MORE_INFO","Egyebek");
define("_UPDATE_DATA","Adatok friss�t�se");
define("_UPDATE_MAP","T�rk�p friss�t�se");
define("_UPDATE_3D_MAP","3D t�rk�p friss�t�se");
define("_UPDATE_GRAPHS","Diagrammok friss�t�se");
define("_UPDATE_SCORE","Pontoz�s friss�t�se");

define("_TAKEOFF_COORDS","Felsz�ll�s koordin�t�i:");
define("_NO_KNOWN_LOCATIONS","Nincsenek ismert helyek!");
define("_FLYING_AREA_INFO","Rep�l�si ter�let inf�k");

//--------------------------------------------
// index.php
//--------------------------------------------
define("_PAGE_TITLE","Leonardo XC server");
define("_RETURN_TO_TOP","Vissza a lap tetej�re");
// list flight
define("_PILOT_FLIGHTS","Pil�ta rep�l�sei");

define("_DATE_SORT","D�tum");
define("_PILOT_NAME","Pil�ta neve");
define("_TAKEOFF","Starthely");
define("_DURATION","Id�tartam");
define("_LINEAR_DISTANCE","Szabadt�v");
define("_OLC_KM","OLC km");
define("_OLC_SCORE","OLC pont");
define("_DATE_ADDED","Legut�bb bek�ld�tt rep�l�sek");

define("_SORTED_BY","Rendez�s:");
define("_ALL_YEARS","Minden �v");
define("_SELECT_YEAR_MONTH","�v (�s h�nap) kiv�laszt�sa");
define("_ALL","�sszes");
define("_ALL_PILOTS","�sszes pil�ta megjelen�t�se");
define("_ALL_TAKEOFFS","�sszes starthely megjelen�t�se");
define("_ALL_THE_YEAR","Eg�sz �v");

// add flight
define("_YOU_HAVENT_SUPPLIED_A_FLIGHT_FILE","Nem k�ldt�l m�g be rep�l�sf�jlt");
define("_NO_SUCH_FILE","A megadott rep�l�sf�jlt nem tal�lom a szerveren");
define("_FILE_DOESNT_END_IN_IGC","A f�jl neve nem .igc -re v�gz�dik");
define("_THIS_ISNT_A_VALID_IGC_FILE","Ez nem egy �rv�nyes .igc f�jl");
define("_THERE_IS_SAME_DATE_FLIGHT","Van m�r egy rep�l�s ugyanezzel a d�tummal �s id�ponttal");
define("_IF_YOU_WANT_TO_SUBSTITUTE_IT","Ha ki akarod cser�lni, akkor el�sz�r");
define("_DELETE_THE_OLD_ONE","le kell t�r�ln�d a r�git");
define("_THERE_IS_SAME_FILENAME_FLIGHT","Van m�r egy rep�l�s ugyanezzel a ugyanezzel a f�jln�vvel");
define("_CHANGE_THE_FILENAME","Ha ez egy m�sik rep�l�s, v�ltoztasd meg a f�jl nev�t �s pr�b�ld meg �jra");
define("_YOUR_FLIGHT_HAS_BEEN_SUBMITTED","A rep�l�sed sikeresen bek�ldve");
define("_PRESS_HERE_TO_VIEW_IT","Kattints ide, ha meg akarod n�zni");
define("_WILL_BE_ACTIVATED_SOON","(1-2 percen bel�l aktiv�l�dik)");

// add_from_zip
define("_SUBMIT_MULTIPLE_FLIGHTS","T�bb rep�l�s egy�ttes bek�ld�se");
define("_ONLY_THE_IGC_FILES_WILL_BE_PROCESSED","Csak az IGC f�jlok lesznek feldolgozva");
define("_SUBMIT_THE_ZIP_FILE_CONTAINING_THE_FLIGHTS","Add meg a rep�l�seket<br>tartalmaz� ZIP f�jlt");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHTS","A rep�l�sek bek�ld�s�hez kattints ide");

define("_FILE_DOESNT_END_IN_ZIP","A f�jl neve nem .zip -re v�gz�dik");
define("_ADDING_FILE","F�jl bek�ld�se");
define("_ADDED_SUCESSFULLY","A bek�ld�s sikeres");
define("_PROBLEM","Probl�ma");
define("_TOTAL","�sszesen ");
define("_IGC_FILES_PROCESSED","rep�l�s lett feldolgozva");
define("_IGC_FILES_SUBMITED","rep�l�s lett bek�ldve");

// info
define("_DEVELOPMENT","Fejleszt�");
define("_ANDREADAKIS_MANOLIS","Andreadakis Manolis");
define("_PROJECT_URL","A projekt honlapja");
define("_VERSION","Verzi�");
define("_MAP_CREATION","T�rk�pek l�trehoz�sa");
define("_PROJECT_INFO","Projekt inform�ci�");

// menu bar 
define("_MENU_MAIN_MENU","F�men�");
define("_MENU_DATE","D�tum");
define("_MENU_COUNTRY","Orsz�g");
define("_MENU_XCLEAGUE","Verseny �ll�sa");
define("_MENU_ADMIN","Adminisztr�ci�");

define("_MENU_COMPETITION_LEAGUE","�sszes�tett OLC pontt�bla");
define("_MENU_OLC","Legjobb OLC pontok");
define("_MENU_OPEN_DISTANCE","Legjobb t�vok");
define("_MENU_DURATION","�ssz id�tartam");
define("_MENU_ALL_FLIGHTS","�sszes rep�l�s");
define("_MENU_FLIGHTS","Rep�l�sek (sz�rve)");
define("_MENU_TAKEOFFS","Starthelyek");
define("_MENU_FILTER","Sz�r�k");
define("_MENU_MY_FLIGHTS","Saj�t rep�l�sek");
define("_MENU_MY_PROFILE","Saj�t profil");
define("_MENU_MY_STATS","Saj�t statisztik�k"); 
define("_MENU_MY_SETTINGS","Egy�b be�ll�t�sok"); 
define("_MENU_SUBMIT_FLIGHT","Rep�l�s bek�ld�se");
define("_MENU_SUBMIT_FROM_ZIP","T�bb rep�l�s bek�ld�se");
define("_MENU_SHOW_PILOTS","Pil�t�k");
define("_MENU_SHOW_LAST_ADDED","Legfrissebb rep�l�sek");
define("_FLIGHTS_STATS","Rep�l�si statisztik�k");

define("_SELECT_YEAR","�v kiv�laszt�sa");
define("_SELECT_MONTH","H�nap kiv�laszt�sa");
define("_ALL_COUNTRIES","�sszes orsz�g megjelen�t�se");
//--------------------------------------------
// list_pilots.php
//--------------------------------------------

define("_ALL_TIMES","B�RMIKOR");
define("_NUMBER_OF_FLIGHTS","Rep�l�sek sz�ma");
define("_TOTAL_DISTANCE","�sszes t�vols�g");
define("_TOTAL_DURATION","�sszes id�tartam");
define("_BEST_OPEN_DISTANCE","Legnagyobb t�vols�g");
define("_TOTAL_OLC_DISTANCE","�sszes OLC t�vols�g");
define("_TOTAL_OLC_SCORE","�sszes OLC pont");
define("_BEST_OLC_SCORE","Legjobb OLC pont");
define("_MEAN_DURATION","�tlagos id�tartam");
define("_MEAN_DISTANCE","�tlagos t�vols�g");
define("_PILOT_STATISTICS_SORT_BY","Pil�t�k - Rendez�s:");
define("_CATEGORY_FLIGHT_NUMBER","'Vill�mVili' kateg�ria (rep�l�sek sz�ma)");
define("_CATEGORY_TOTAL_DURATION","'DURACELL' kateg�ria - (rep�l�sek �ssz id�tartama)");
define("_CATEGORY_OPEN_DISTANCE","'Szabadt�v' kateg�ria");
define("_THERE_ARE_NO_PILOTS_TO_DISPLAY","Nincs ilyen pil�ta!");

	
//--------------------------------------------
// delete_flight.php
//--------------------------------------------

define("_THE_FLIGHT_HAS_BEEN_DELETED","A rep�l�s t�r�lve");
define("_RETURN","Vissza");
define("_CAUTION_THE_FLIGHT_WILL_BE_DELETED","FIGYELEM - T�r�lni akarod ezt a rep�l�st");
define("_THE_DATE","D�tum ");
define("_YES","IGEN");
define("_NO","NEM");

//--------------------------------------------
// competition.php
//--------------------------------------------

define("_LEAGUE_RESULTS","Liga eredm�nyek");
define("_N_BEST_FLIGHTS"," legjobb rep�l�s");
define("_OLC","OLC");
define("_OLC_TOTAL_SCORE","OLC �ssz pontsz�m");
define("_KILOMETERS","Kilom�ter");
define("_TOTAL_ALTITUDE_GAIN","�sszes magass�gnyer�s");
define("_TOTAL_KM","�sszes km");

//--------------------------------------------
// filter.php
//--------------------------------------------

define("_IS","=");
define("_IS_NOT","nem =");
define("_OR","vagy");
define("_AND","�s");
define("_FILTER_PAGE_TITLE","Rep�l�sek sz�r�se");
define("_RETURN_TO_FLIGHTS","Vissza a rep�l�sekhez");
define("_THE_FILTER_IS_ACTIVE","A sz�r� bekapcsolva");
define("_THE_FILTER_IS_INACTIVE","A sz�r� nincs bekapcsolva");
define("_SELECT_DATE","Id�szak kiv�laszt�sa");
define("_SHOW_FLIGHTS","Rep�l�sek megjelen�t�se eszerint");
define("_ALL2","�SSZES");
define("_WITH_YEAR","Az �v");
define("_MONTH","H�nap");
define("_YEAR","�v");
define("_FROM","T�l");
define("_from","t�l");
define("_TO","Ig");
define("_SELECT_PILOT","Pil�ta kiv�laszt�sa");
define("_THE_PILOT","A pil�ta");
define("_THE_TAKEOFF","A starthely");
define("_SELECT_TAKEOFF","A starthely kiv�laszt�sa");
define("_THE_COUNTRY","Az orsz�g");
define("_COUNTRY","Orsz�g");
define("_SELECT_COUNTRY","Orsz�g kiv�laszt�sa");
define("_OTHER_FILTERS","Tov�bbi sz�r�k");
define("_LINEAR_DISTANCE_SHOULD_BE","Az egyenes t�vols�g legyen");
define("_OLC_DISTANCE_SHOULD_BE","Az OLC t�vols�g legyen");
define("_OLC_SCORE_SHOULD_BE","Az OLC pontsz�m legyen");
define("_DURATION_SHOULD_BE","Az id�tartam legyen");
define("_ACTIVATE_CHANGE_FILTER","A SZ�R� bekapcsol�sa / m�dos�t�sa");
define("_DEACTIVATE_FILTER","A SZ�R� kikapcsol�sa");
define("_HOURS","�ra");
define("_MINUTES","perc");

//--------------------------------------------
// add_flight.php
//--------------------------------------------

define("_SUBMIT_FLIGHT","Rep�l�s bek�ld�se");
define("_ONLY_THE_IGC_FILE_IS_NEEDED","(csak az IGC f�jl sz�ks�ges hozz�)");
define("_SUBMIT_THE_IGC_FILE_FOR_THE_FLIGHT","Add meg a rep�l�s<br>IGC f�jlj�t");
define("_NOTE_TAKEOFF_NAME","�rd be legal�bb a starthely hely�nek nev�t �s az orsz�got");
define("_COMMENTS_FOR_THE_FLIGHT","Megjegyz�sek a rep�l�shez");
define("_PHOTO","Fot�");
define("_PHOTOS_GUIDELINES","A fot�k jpg form�tum�ak legyenek �s kisebbek, mint 100 KB");
define("_PRESS_HERE_TO_SUBMIT_THE_FLIGHT","A rep�l�s bek�ld�s�hez ezt nyomd meg");
define("_DO_YOU_HAVE_MANY_FLIGHTS_IN_A_ZIPFILE","T�bb rep�l�st szeretn�l egyszerre bek�ldeni ?");
define("_PRESS_HERE","Kattints ide!");

define("_IS_PRIVATE","Ne mutasd meg m�soknak");
define("_MAKE_THIS_FLIGHT_PRIVATE","Ne mutasd meg m�soknak");
define("_INSERT_FLIGHT_AS_USER_ID","Rep�l�s besz�r�sa ehhez a felhaszn�l�i azonos�t�hoz (ID)");
define("_FLIGHT_IS_PRIVATE","Ez a rep�l�s nem publikus");

//--------------------------------------------
// edit_flight.php
//--------------------------------------------

define("_CHANGE_FLIGHT_DATA","Rep�l�si adatok m�dos�t�sa");
define("_IGC_FILE_OF_THE_FLIGHT","A rep�l�s IGC f�jlja");
define("_DELETE_PHOTO","T�rl�s");
define("_NEW_PHOTO","�j fot�");
define("_PRESS_HERE_TO_CHANGE_THE_FLIGHT","A rep�l�si adatok m�dos�t�s�hoz ezt nyomd meg");
define("_THE_CHANGES_HAVE_BEEN_APPLIED","A m�dos�t�sok magt�rt�ntek");
define("_RETURN_TO_FLIGHT","Vissza a rep�l�sekhez");

//--------------------------------------------
// olc
//--------------------------------------------
define("_RETURN_TO_FLIGHT","Vissza a rep�l�sekhez");
define("_READY_FOR_SUBMISSION","Bek�ld�sre k�sz");
define("_SUBMIT_TO_OLC","Bek�ld�s az OLC-be");
define("_YOUR_FLIGHT_HAS_BEEN_SUCCESSFULLY_SUBMITED_TO_THE_OLC","A rep�l�s sikeresen bek�ldve az OLC-be");
define("_THE_OLC_REFERENCE_NUMBER_IS","Az OLC hivatkoz�si sz�m:");
define("_THERE_WAS_A_PROBLEM_ON_OLC_SUBMISSION","Probl�ma ad�dott a rep�l�s OLC-be val� bek�ld�s�n�l");
define("_LOOK_BELOW_FOR_THE_CAUSE_OF_THE_PROBLEM","Al�bb olvashat� a probl�ma oka");
define("_FLIGHT_SUCCESFULLY_REMOVED_FROM_OLC","A rep�l�s sikeresen t�r�lve az OLC-b�l");
define("_FLIGHT_NOT_SCORED","A rep�l�snek m�g nincs OLC pontsz�ma, ez�rt nem k�ldhet� be");
define("_TOO_LATE","Ennek a rep�l�snek a bek�ld�si hat�rideje lej�rt, �gy sajnos nem k�ldhet� be");
define("_CANNOT_BE_SUBMITTED","Ennek a rep�l�snek a bek�ld�si hat�rideje lej�rt");
define("_NO_PILOT_OLC_DATA","<p><strong>Nincsenek kit�ltve a pil�t�ra vonatkoz� OLC adatok</strong><br>
  <br>
<b>Mi az az OLC / mit jelentenek ezek a rovatok ?</b><br><br>
	A rep�l�s OLC-be k�ld�s�nek felt�tele, hogy a pil�ta m�r regisztr�lva legyen az OLC rendszerben.</p>
<p> Ezt <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
  ezen a web-oldalon</a> teheted meg. Kiv�lasztod az orsz�got, azt�n a 'Contest Registration' men�ponton kereszt�l regisztr�lhatod magad.<br>
</p>
<p>Ha az OLC regisztr�ci� megt�rt�nt, itt a Leonardoban a 'Pil�ta adatai'->'OLC adatok szerkeszt�se' oldalon kell be�rnod PONTOSAN azokat az adatokat, amiket az OLC regisztr�ci�ban megadt�l.
</p>
<ul>
	<li><div align=left>Keresztn�v</div>
	<li><div align=left>Vezet�kn�v</div>
	<li><div align=left>Sz�let�si d�tum</div>
	<li> <div align=left>H�v�jeled</div>
	<li><div align=left>Ha k�ldt�l m�r be rep�l�seket az OLC-be, akkor az a 4 bet�, amit az IGC f�jlneveben haszn�lt�l.</div>
</ul>");
define("_OLC_MAP","T�rk�p");
define("_OLC_BARO","Barogr�f");

//--------------------------------------------
// pilot_profile.php
//--------------------------------------------
define("_Pilot_Profile","Pil�ta adatai");
define("_back_to_flights","vissza a rep�l�sekhez");
define("_pilot_stats","pil�ta statisztik�i");
define("_edit_profile","adatok szerkeszt�se");
define("_flights_stats","rep�l�s statisztik�i");
define("_View_Profile","Adatok megtekint�se");

define("_Personal_Stuff","Szem�lyes adatok");
define("_First_Name","Keresztn�v");
define("_Last_Name","Vezet�kn�v");
define("_Birthdate","Sz�let�si d�tum");
define("_dd_mm_yy","nn.hh.��");
define("_Sign","Jel");
define("_Marital_Status","Csal�di �llapot");
define("_Occupation","Foglalkoz�s");
define("_Web_Page","Honlap");
define("_N_A","<N/A>");
define("_Other_Interests","Egy�b �rdekl�d�si k�r");
define("_Photo","Fot�");

define("_Flying_Stuff","Rep�l�ssel kapcsolatos adatok");
define("_note_place_and_date","ahol lehet, add meg a helyet, orsz�got �s d�tumot");
define("_Flying_Since","Mi�ta rep�lsz");
define("_Pilot_Licence","Pil�ta licencesz�m");
define("_Paragliding_training","Sil�erny�s jogos�t�s");
define("_Favorite_Location","Kedvenc hely");
define("_Usual_Location","Szokott hely");
define("_Best_Flying_Memory","Legszebb rep�l�si eml�k");
define("_Worst_Flying_Memory","Legrosszabb rep�l�si eml�k");
define("_Personal_Distance_Record","Egy�ni t�vrekord");
define("_Personal_Height_Record","Egy�ni magass�grekord");
define("_Hours_Flown","Rep�lt �r�k sz�ma");
define("_Hours_Per_Year","�vente rep�lt �r�k sz�ma");

define("_Equipment_Stuff","Eszk�z�kkel kapcsolatos adatok");
define("_Glider","Sikl�erny�");
define("_Harness","Be�l�");
define("_Reserve_chute","Ment�erny�");
define("_Camera","F�nyk�pez�g�p");
define("_Vario","Vari�");
define("_GPS","GPS");
define("_Helmet","Sisak");
define("_Camcorder","Kamera");

define("_Manouveur_Stuff","Man�verek");
define("_note_max_descent_rate","ahol lehet, add meg a max. s�llyed�si sebess�gedet");
define("_Spiral","Spir�l");
define("_Bline","B-stall");
define("_Full_Stall","Full-stall");
define("_Other_Manouveurs_Acro","Acro man�verek");
define("_Sat","Sat");
define("_Asymmetric_Spiral","Asszimmetrikus spir�l");
define("_Spin","Negat�v");

define("_General_Stuff","Egy�b adatok");
define("_Favorite_Singer","Kedvenc �nekes");
define("_Favorite_Movie","Kedvenc film");
define("_Favorite_Internet_Site","Kedvenc<br>internet oldal");
define("_Favorite_Book","Kedvenc k�nyv");
define("_Favorite_Actor","Kedvenc sz�n�sz");

//--------------------------------------------
// pilot_profile_edit.php
//--------------------------------------------
define("_Upload_new_photo_or_change_old","�j fot� felt�lt�se");
define("_Delete_Photo","Fot� t�rl�se");
define("_Your_profile_has_been_updated","Az adataid friss�t�se megt�rt�nt");
define("_Submit_Change_Data","A megv�ltoztatott adatok bek�ld�se");

//--------------------------------------------
// pilot_�lc_profile_edit.php
//--------------------------------------------
define("_edit_OLC_info","OLC adatok szerkeszt�se");
define("_OLC_information","OLC adatok szerkeszt�se");
define("_callsign","H�v�jel");
define("_filename_suffix","F�jln�v v�gz�d�s");
define("_OLC_Pilot_Info","OLC pil�ta adatok");
define("_OLC_EXPLAINED","<b>Mi az az OLC / mit jelentenek ezek a rovatok ?</b><br><br>
	A rep�l�s OLC-be k�ld�s�nek felt�tele, hogy a pil�ta m�r regisztr�lva legyen az OLC rendszerben.</p>
<p> Ezt <a href='http://www2.onlinecontest.org/olcphp/2005/ausw_wertung.php?olc=holc-i&spr=en' target='_blank'>
  ezen a web-oldalon</a> teheted meg. Kiv�lasztod az orsz�got, azt�n a 'Contest Registration' men�ponton kereszt�l regisztr�lhatod magad.<br>
</p>
<p>Ha az OLC regisztr�ci� megt�rt�nt, itt a Leonardoban a 'Pil�ta adatai'->'OLC adatok szerkeszt�se' oldalon kell be�rnod PONTOSAN azokat az adatokat, amiket az OLC regisztr�ci�ban megadt�l.
</p>
<ul>
	<li><div align=left>Keresztn�v</div>
	<li><div align=left>Vezet�kn�v</div>
	<li><div align=left>Sz�let�si d�tum</div>
	<li> <div align=left>H�v�jeled</div>
	<li><div align=left>Ha k�ldt�l m�r be rep�l�seket az OLC-be, akkor az a 4 bet�, amit az IGC f�jlnevekben haszn�lt�l.</div>
</ul>
");

define("_OLC_SUFFIX_EXPLAINED","<b>Mit jelent ez a 'F�jln�v v�gz�d�s' ?</b><br>N�gy (�kezet n�lk�li) bet�/sz�mjegy kombin�ci�ja, ami a pil�ta vagy a sikl�erny� egyedi azonos�t�ja lesz. 
N�h�ny �tlet, ha nem tudod, mit �rj be:<p>
<ul>
<li>Felhaszn�lhatod a vezet�k �s/vagy keresztneved bet�it.
<li>Min�l furcs�bb hangz�s� kombin�ci�kra t�rekedj, �gy kisebb lesz a val�sz�n�s�ge, hogy m�s pil�t�k�val �tk�zik.
<li>Ha probl�m�id vannak a rep�l�sek OLC-be k�ld�s�vel a Leonardon kereszt�l,
 azt legt�bbsz�r a nem megfelel� f�jln�v v�gz�d�s okozza. Pr�b�lj v�ltoztatni �s k�ldd be �jra.
</ul>");
//--------------------------------------------
// pilot_profile_stats.php
//--------------------------------------------
define("_hh_mm","��:pp");

define("_Totals","�sszes�t�s");
define("_First_flight_logged","Az els� napl�zott rep�l�s");
define("_Last_flight_logged","A legutols� napl�zott rep�l�s");
define("_Flying_period_covered","A teljes rep�l�si id�szak");
define("_Total_Distance","�sszes t�vols�g");
define("_Total_OLC_Score","�sszes OLC pont");
define("_Total_Hours_Flown","�sszes id� �r�kban");
define("_Total_num_of_flights","Rep�l�sek sz�ma �sszesen");

define("_Personal_Bests","Egy�ni legjobbak");
define("_Best_Open_Distance","Legjobb szabadt�v");
define("_Best_FAI_Triangle","Legjobb FAI h�romsz�g");
define("_Best_Free_Triangle","Legjobb szabad h�romsz�g");
define("_Longest_Flight","Leghosszabb rep�l�s");
define("_Best_OLC_score","Legjobb OLC pontsz�m");

define("_Absolute_Height_Record","Abszol�t magass�gi rekord");
define("_Altitute_gain_Record","Magass�gnyer�si rekord");
define("_Mean_values","�tlag�rt�kek");
define("_Mean_distance_per_flight","Rep�l�sek �tlagos hossza");
define("_Mean_flights_per_Month","Rep�l�sek �tlagos sz�ma havonta");
define("_Mean_distance_per_Month","�tlagos rep�l�si t�vols�g havonta");
define("_Mean_duration_per_Month","�tlagos rep�l�si id�tartam havonta");
define("_Mean_duration_per_flight","�tlagos id�tartam rep�l�senk�nt");
define("_Mean_flights_per_Year","Rep�l�sek �tlagos sz�ma �vente");
define("_Mean_distance_per_Year","�tlagos rep�l�si t�vols�g �vente");
define("_Mean_duration_per_Year","�tlagos rep�l�si id�tartam �vente");

//--------------------------------------------
// show_waypoint.php
//--------------------------------------------
define("_See_flights_near_this_point","E pont k�zel�ben t�rt�nt rep�l�sek megjelen�t�se");
define("_Waypoint_Name","�tpont n�v");
define("_Navigate_with_Google_Earth","Navig�l�s a Google Earth seg�ts�g�vel");
define("_See_it_in_Google_Maps","Megjelen�t�s a Google Mapsben");
define("_See_it_in_MapQuest","Megjelen�t�s a MapQuestben");
define("_COORDINATES","Koordin�t�k");
define("_FLIGHTS","Rep�l�sek");
define("_SITE_RECORD","Helyi rekord");
define("_SITE_INFO","Helyi inform�ci�");
define("_SITE_REGION","Regi�");
define("_SITE_LINK","Tov�bbi inform�ci�kra mutat� link");
define("_SITE_DESCR","Hely/starthely bemutat�sa");

//--------------------------------------------
// KML file
//--------------------------------------------
define("_See_more_details","Mutasd meg r�szletesebben");
define("_KML_file_made_by","KML f�jl, k�sz�tette");

//--------------------------------------------
// add_waypoint.php
//--------------------------------------------
define("_ADD_WAYPOINT","Starthely regisztr�ci�ja");
define("_WAYPOINT_ADDED","A starthelyet m�r regisztr�lt�k.");

//--------------------------------------------
// list_takeoffs.php
//--------------------------------------------
define("_SITE_RECORD_OPEN_DISTANCE","Helyi rekord<br>(szabadt�v)");
	
//--------------------------------------------
// glider types
//--------------------------------------------
define("_GLIDER_TYPE","Sikl�rep�l� t�pus");
function setGliderCats() {
	global  $gliderCatList;
	$gliderCatList=array(1=>'Sikl�erny�',2=>'Rugalmas sz�rny FAI1',4=>'Merevsz�rny FAI5',8=>'Vitorl�z�rep�l�');
}
setGliderCats();

//--------------------------------------------
// user prefs  & units
//--------------------------------------------

define("_Your_settings_have_been_updated","A be�ll�t�said friss�ltek.");

define("_THEME","Kin�zet");
define("_LANGUAGE","Nyelv");
define("_VIEW_CATEGORY","Sikl�rep�l� kateg�ria");
define("_VIEW_COUNTRY","Orsz�g");
define("_UNITS_SYSTEM" ,"M�rt�kegys�g rendszer");
define("_METRIC_SYSTEM","Metrikus (km,m)");
define("_IMPERIAL_SYSTEM","Angolsz�sz (m�rf�ld,l�b)");
define("_ITEMS_PER_PAGE","Sorok sz�ma laponk�nt");

define("_MI","mi");
define("_KM","km");
define("_FT","ft");
define("_M","m");
define("_MPH","mph");
define("_KM_PER_HR","km/�");
define("_FPM","fpm");
define("_M_PER_SEC","m/mp");

//--------------------------------------------
// index page
//--------------------------------------------

define("_WORLD_WIDE","Minden orsz�g");
define("_National_XC_Leagues_for","Nemzeti XC lig�k: ");
define("_Flights_per_Country","Rep�l�sek orsz�gonk�nt");
define("_Takeoffs_per_Country","Starthelyek orsz�gonk�nt");
define("_INDEX_HEADER","�dv�zl�nk a Leonardo XC Lig�ban");
define("_INDEX_MESSAGE","A fenti men�rendszer vagy a lentebb kiemelt men�pontok seg�ts�g�vel navig�lhatsz a lehet�s�gek k�zt.");

?>