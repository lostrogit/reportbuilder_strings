<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'reportbuilder', language 'no', version '4.0'.
 *
 * @package     reportbuilder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesstab'] = 'Tilgang';
$string['addacondition'] = 'Legg til betingelse...';
$string['addafilter'] = 'Legg til et filter';
$string['addaudiences'] = 'Legg til et publikum i denne rapporten';
$string['adddefault'] = 'Legg til standardkonfigurasjon';
$string['adddefault_help'] = 'Hver rapportkilde definerer også standardkolonner, betingelser og filtre. Hvis du vil opprette rapporten ved å bruke disse standardene, velger du dette feltet';
$string['addemails'] = 'Legg til epostadresser manuelt';
$string['addfieldbyname'] = 'Legg til feltet \'{$a}\' i rapporten';
$string['addreport'] = 'Ny rapport';
$string['addschedule'] = 'Ny tidsplan';
$string['addusers_help'] = 'Alle brukere som er lagt til manuelt, vil motta denne rapporten til tross for deres posisjon eller avdeling';
$string['aggregation_avg'] = 'Gjennomsnitt';
$string['aggregation_count'] = 'Antall';
$string['aggregation_countdistinct'] = 'Antall unike';
$string['aggregation_groupconcat'] = 'Kommaseparerte verdier';
$string['aggregation_groupconcatdistinct'] = 'Kommaseparerte distinkte verdier';
$string['aggregation_max'] = 'Maksimum';
$string['aggregation_min'] = 'Minimum';
$string['aggregation_percent'] = 'Prosent';
$string['aggregation_sum'] = 'Sum';
$string['aggregation_unique'] = 'Unike verdier';
$string['allusersdesc'] = 'Legg til alle brukere i denne rapporten';
$string['and'] = 'Og';
$string['asc'] = 'Kolonnen \'{$a}\' har stigende sortering';
$string['audiencejobadd'] = 'Legg til stilling';
$string['audiencejobremove'] = 'Fjern stilling';
$string['audiencejobs'] = 'Stillinger';
$string['audiencejobs_help'] = 'Brukere kan se denne rapporten hvis de tilhører en av de valgte stillingene nedenfor';
$string['audiencejobsempty'] = 'Ingen stillinger lagt til';
$string['audiencemultiselectpostix'] = 'pluss {$a} flere';
$string['audiences'] = 'Publikum';
$string['authmethod'] = 'Autentiseringsmetode';
$string['availableinalltenants'] = 'Tilgjengelig i alle tenanter';
$string['availableinalltenants_help'] = 'Når aktivert, vil brukere (med passende tillatelser) i alle tenanter kunne se denne rapporten. De fleste rapportkilder vil automatisk begrense de viste brukerne og andre enheter (programmer, sertifiseringer, kurs) til de som er tilgjengelige i tenanten.';
$string['basicinformation'] = 'Grunnleggende informasjon';
$string['cachedef_userreports'] = 'Tilpassede rapporter som brukeren har tilgang til';
$string['canviewallreports'] = 'Kan se alle rapporter';
$string['cardview_help'] = 'Rapporten vil automatisk bytte til kortvisning når den vises på små skjermer eller i smale blokker';
$string['certificatesissues'] = 'Kursbevis-utsteder';
$string['certificatetemplates'] = 'Kursbevismaler';
$string['checkboxanyvalue'] = 'Alle verdier';
$string['checkboxischecked'] = 'Ja';
$string['checkboxisnotchecked'] = 'Nei';
$string['choose'] = 'Velg';
$string['conditionshelp'] = 'Betingelser';
$string['conditionshelp_help'] = 'Liste med forhåndsdefinerte betingelser som alltid gjelder ved visning av denne rapporten.';
$string['conditionstab'] = 'Betingelser';
$string['confirm'] = 'Bekreft';
$string['confirmdeletecondition'] = 'Er du sikker på at du ønsker å slette betingelse \'{$a}\'?';
$string['confirmdeleteschedule'] = 'Er du sikker på at du ønsker å slette utsendingsplanen \'{$a}\' og alle tilknyttede data? Denne handlingen kan ikke angres.';
$string['confirmresetallconditions'] = 'Er du sikker på at du vil tilbakestille alle betingelser?';
$string['confirmresetconditions'] = 'Er du sikker på at du vil tilbakestille beetingelsen \'{$a}\'?';
$string['confirmsendschedule'] = 'Er du sikker på at du vil legge \'{$a}\' i kø for utsending?';
$string['contentvisibility'] = 'Antall kolonner alltid synlig';
$string['course_completion_days_course'] = 'Dager for å ta kurs';
$string['course_completion_days_enrolled'] = 'Påmeldte dager';
$string['course_completion_progress'] = 'Progresjon';
$string['course_completion_progress_percent'] = 'Progresjon (%)';
$string['course_completion_reaggregate'] = 'tid reaggregert';
$string['course_completion_timecompleted'] = 'Når fullført';
$string['course_completion_timeenrolled'] = 'Påmeldt';
$string['course_completion_timestarted'] = 'Startet';
$string['course_enrolment_status'] = 'Status';
$string['course_enrolment_timeended'] = 'Påmeldingen ble avsluttet';
$string['course_enrolment_timestarted'] = 'Påmelding startet';
$string['customessage'] = 'Egendefinert melding';
$string['customizecondition'] = 'Rediger betingelsesnavn';
$string['customizefilter'] = 'Rediger filternavn';
$string['customizeheader'] = 'Rediger kolonneoverskrift for kolonnen  \'{$a}\'';
$string['customreportsdesc'] = 'Egendefinerte rapporter, inkludert publikum og tidsplandata';
$string['dateanyvalue'] = 'Alle verdier';
$string['datecreated'] = 'Opprettet';
$string['datecurrent'] = 'Nåværende';
$string['dateinthefuture'] = 'I fremtiden';
$string['dateinthepast'] = 'I fortiden';
$string['dateisempty'] = 'Er tom';
$string['dateisnotempty'] = 'Er ikke tom';
$string['datelast'] = 'Siste ... dager';
$string['datenext'] = 'Neste ... dager';
$string['dateprevious'] = 'Forrige';
$string['daterange'] = 'Datointervall';
$string['daterangefrom'] = 'Fra';
$string['daterangeto'] = 'Til';
$string['datetostart'] = 'Dato';
$string['dateupcoming'] = 'Kommende';
$string['debugsqlparams'] = 'Parametre';
$string['debugsqlquery'] = 'Gjeldende spørring';
$string['deletereportmsg'] = 'Er du sikker på at du ønsker å slette rapporten \'{$a}\' og alle dens tilknyttede data? Denne handlingen kan ikke angres.';
$string['deletereportsuccess'] = 'Rapport ble slettet';
$string['deleteschedule'] = 'Slett utsendingsplan';
$string['desc'] = 'Kolonnen \'{$a}\' har synkende sortering';
$string['description'] = 'Beskrivelse';
$string['description_help'] = 'En beskrivelse av målet for rapporten';
$string['duplicate'] = 'Dupliser';
$string['duplicatereport'] = 'Dupliser rapport';
$string['editaudience'] = 'Endre målgruppe';
$string['editmode'] = 'Bytt til redigeringsvisning';
$string['editreport'] = 'Rediger innhold';
$string['editreportdetails'] = 'Rediger detaljer';
$string['editschedule'] = 'Rediger plan';
$string['edittitle'] = 'Rediger rapport \'{$a}\'';
$string['enablesortingon'] = 'Tillat kolonnesortering på kolonne \'{$a}\'';
$string['enteremail'] = 'Vennligst bruk en gyldig epostadresse og klikk  \\u0027Enter\\u0027';
$string['entitycertificate'] = 'Kursbevis';
$string['entitycertificateissue'] = 'Kursbevisutstedelse';
$string['entitycoursecompletion'] = 'Kursfullføring';
$string['entitycourseenrolment'] = 'kurspåmelding';
$string['entitydatastorecoursecompletion'] = 'Datalager kursfullføring';
$string['entityreportbuilder'] = 'Egendefinerte rapporter';
$string['entityschedule'] = 'Utsendingsplan';
$string['error:mustselectformat'] = 'Du må velge et format';
$string['error:mustselectsource'] = 'Du må velge en rapportkilde';
$string['errormanageschedules'] = 'Du har ikke tillatelse til å administrere tidsplaner';
$string['errormissingreportsource'] = 'Finner ikke konfigurert rapportkilde';
$string['errornorecipients'] = 'Du må velge noen mottakere for denne tidsplanen';
$string['errorunavailablereportsource'] = 'Konfigurert rapportkilde er ikke tilgjengelig';
$string['eventreportcreated'] = 'Rapport opprettet';
$string['eventreportdeleted'] = 'Rapport slettet';
$string['eventreportschedulecreated'] = 'Rapportplan opprettet';
$string['eventreportscheduledeleted'] = 'Rapportplan slettet';
$string['eventreportscheduleupdated'] = 'Rapportplan oppdatert';
$string['eventreportupdated'] = 'Rapport oppdatert';
$string['eventreportviewed'] = 'Rapport vist';
$string['expandcardview'] = 'Utvid kortvisning';
$string['expandconditions'] = 'Utvid betingelser';
$string['expandfilters'] = 'Utvid filtere';
$string['expandsorting'] = 'Utvid sortering';
$string['exportselectall'] = 'Eksporter alle egendefinerte rapporter';
$string['exportselectlimit'] = 'Eksporter utvalgte egendefinerte rapporter...';
$string['filternotvalid'] = 'Filteret må være en underklasse av filter_base';
$string['filtersbutton'] = 'Vis/skjul filtersidefeltet';
$string['filtershelp'] = 'Filtre';
$string['filtershelp_help'] = 'Liste med filtre som ikke anvendes automatisk, men som er tilgjengelige for brukere.';
$string['filterstab'] = 'Filtre';
$string['format'] = 'Format';
$string['fullnamewithlink'] = 'Fullt navn med profillenke';
$string['fullnamewithpicture'] = 'Fullt navn med bilde';
$string['fullnamewithpicturelink'] = 'Fullt navn med bilde og lenke';
$string['hascurrentjobs'] = 'Har aktive jobber';
$string['hassystemrole'] = 'Tildelt systemrolle';
$string['importaudiencelogerror'] = 'Kunne ikke importere publikumsinnstillinger';
$string['importaudiencelogsuccess'] = 'Publikumsinnstillinger importert';
$string['importexportreportdefinition'] = 'Rapportdefinisjoner';
$string['importexportreportdefinition_help'] = 'Inkluder rapportkolonner, betingelser og filtre';
$string['importlogerror'] = 'Kunne ikke importere rapporten  \'{$a}\'';
$string['importlogerrorinvalidaudience'] = 'Manglende eller ugyldig målgruppe';
$string['importlogerrorinvalidformat'] = 'Manglende eller ugyldig tidsplanformat';
$string['importlogerrorinvalidsource'] = 'Manglende eller ugyldig rapportkilde';
$string['importlogerrorinvalidtype'] = 'Ugyldig rapporttype';
$string['importlogerrorlegacyemails'] = 'E-postadresser støttes ikke lenger som tidsplanmottakere';
$string['importlogerrorlegacyemailsimport'] = 'Importér uten e-postadresser';
$string['importlogerrorlegacyemailslog'] = 'E-postadresser støttes ikke lenger som planlagte mottakere, vennligst se <a href="{$a->docslink}">oppgraderingsnotater</a>';
$string['importlogerrornorecipients'] = 'Manglende eller ugyldige utsendings-mottakere';
$string['importlogsuccess'] = 'Opprettet ny rapport \'<a href="{$a->url}">{$a->name}</a>\' med {$a->columncount} kolonner, {$a->conditioncount} betingelser og {$a->filtercount} filtre';
$string['importschedulelogerror'] = 'Kunne ikke importere tidsplan-innstillinger';
$string['importschedulelogsuccess'] = 'Tidsplaninnstillinger importert';
$string['importselectall'] = 'Importér alle egendefinerte rapporter';
$string['importselectlimit'] = 'Importér bestemte egendefinerte rapporter...';
$string['invalidcolumn'] = 'Ugyldig kolonne';
$string['invalidcondition'] = 'Ugyldig betingelse';
$string['invalidemail'] = 'Denne e-postadressen {$a} er ugyldig';
$string['invalidfilter'] = 'Ugyldig filter';
$string['ismemberofcohort'] = 'Medlem av kohort';
$string['isnotempty'] = 'Ikke tom';
$string['lastcourseaccess'] = 'Siste kurstilgang';
$string['lastmodified'] = 'Sist endret';
$string['lastsenton'] = 'Sist sendt';
$string['lessthanaday'] = 'Mindre enn en dag';
$string['managereports'] = 'Administrer egendefinerte rapport';
$string['message'] = 'Melding';
$string['modifiedby'] = 'Endret av';
$string['movecolumn'] = 'Flytt kolonne {$a}';
$string['movefilter'] = 'Flytt filter \'{$a}\'';
$string['movesorting'] = 'Flytt sorteringsrekkefølge for kolonne \'{$a}\'';
$string['never'] = 'Aldri';
$string['newaggregationfor'] = 'Ny aggregering for kolonnen \'{$a}\'';
$string['newschedule'] = 'Ny utsendingsplan';
$string['newvaluefor'] = 'Ny verdi for \'{$a}\'';
$string['noaggregation'] = 'Ingen aggregering';
$string['noaudiences'] = 'Det er ikke noe publikum';
$string['noaudiencesalert'] = 'Det er bare mulig å planlegge denne rapporten hvis ett eller flere målgrupper blir lagt til den. Gå til "Målgrupper" -fanen og opprett minst ett publikum for å fortsette.';
$string['noavailablecohorts'] = 'Ingen tilgjengelige kohorter';
$string['nocolumnsselected'] = 'Legg til kolonne i rapporten';
$string['noconditions'] = 'Ingen betingelser valgt.';
$string['nofilters'] = 'Ingen filtre valgt.';
$string['nosortablecolumns'] = 'Sorterbare kolonner ikke lagt til';
$string['numberanyvalue'] = 'Alle verdier';
$string['numberbetween'] = 'I et område mellom';
$string['numberequalorgreaterthan'] = 'Større enn eller lik';
$string['numberequalorlessthan'] = 'Mindre enn eller lik';
$string['numberequalto'] = 'Lik';
$string['numbergreaterthan'] = 'Større enn';
$string['numberisempty'] = 'Er tom';
$string['numberisnotempty'] = 'Er ikke tom';
$string['numberlessthan'] = 'Mindre enn';
$string['pluginname'] = 'Rapportgenerator';
$string['preview'] = 'Forhåndsvisning';
$string['previewmode'] = 'Bytt til forhåndsvisning';
$string['privacy:metadata:preference:filters_report'] = 'Lagrer brukerfilteregenskaper for en rapport';
$string['privacy:metadata:reportbuilder'] = 'Informasjon om tilpassede rapporter';
$string['privacy:metadata:reportbuilder:name'] = 'Rapportens navn';
$string['privacy:metadata:reportbuilder:source'] = 'Datakilden for rapporten';
$string['privacy:metadata:reportbuilder:tenantid'] = 'IDen til tenanten rapporten tilhører';
$string['privacy:metadata:reportbuilder:timecreated'] = 'Tidspunktet rapporten ble opprettet';
$string['privacy:metadata:reportbuilder:timemodified'] = 'Tidspunktet rapporten sist ble endret';
$string['privacy:metadata:reportbuilder:usercreated'] = 'IDen til brukeren som opprettet rapporten';
$string['privacy:metadata:reportbuilder:usermodified'] = 'IDen til brukeren som sist endret rapporten';
$string['privacy:metadata:reportbuilder_audience'] = 'Informasjon om tilpassede rapportmålgrupper';
$string['privacy:metadata:reportbuilder_audience:classname'] = 'Klassen brukt for denne målgruppen';
$string['privacy:metadata:reportbuilder_audience:configdata'] = 'Konfigurasjonen av målgruppen';
$string['privacy:metadata:reportbuilder_audience:reportid'] = 'ID-en som hører til rapporten for målgruppen';
$string['privacy:metadata:reportbuilder_audience:timecreated'] = 'Når målgruppen ble opprettet';
$string['privacy:metadata:reportbuilder_audience:timemodified'] = 'Når målgruppen ble endret';
$string['privacy:metadata:reportbuilder_audience:usercreated'] = 'ID-en til brukeren som opprettet målgruppen';
$string['privacy:metadata:reportbuilder_audience:usermodified'] = 'ID-en til brukeren som endret målgruppen';
$string['privacy:metadata:reportbuilder_schedule'] = 'Informasjon om tilpassede utsendingsplaner';
$string['privacy:metadata:reportbuilder_schedule:format'] = 'Formatet for de planlagte rapportdataene';
$string['privacy:metadata:reportbuilder_schedule:lastsenton'] = 'Sist sendt';
$string['privacy:metadata:reportbuilder_schedule:message'] = 'Innholdet i meldingen som sendes';
$string['privacy:metadata:reportbuilder_schedule:name'] = 'Navnet på utsendingsplanen';
$string['privacy:metadata:reportbuilder_schedule:recurrence'] = 'Hvor ofte utsendingen gjenbrukes';
$string['privacy:metadata:reportbuilder_schedule:reportid'] = 'IDen til rapporten utsendingsoppgaven tilhører';
$string['privacy:metadata:reportbuilder_schedule:scheduled'] = 'Tidspunktet for når utsendingsplanen skal starte';
$string['privacy:metadata:reportbuilder_schedule:subject'] = 'Emnetoverskrift  i utsendingsplanens e-post.';
$string['privacy:metadata:reportbuilder_schedule:timecreated'] = 'Tidspuntet utsendingsplanen ble opprettet';
$string['privacy:metadata:reportbuilder_schedule:timemodified'] = 'Tidspunktet utsendingsplanen sist ble oppdatert';
$string['privacy:metadata:reportbuilder_schedule:usercreated'] = 'IDen til brukeren som opprettet utsendingsplanen';
$string['privacy:metadata:reportbuilder_schedule:usermodified'] = 'IDen til brukeren som sist endret den planlagte utsendingsplanen';
$string['privacywarning'] = 'ADVARSEL: før du legger til noen e-post, må du forsikre deg om at du har det juridiske grunnlaget for det, og at dette er i samsvar med den relevante personvernloven som gjelder for din organisasjon.';
$string['profiledepartment'] = 'Profilér avdeling';
$string['quarter'] = 'Kvartal';
$string['recipients'] = 'Mottakere';
$string['recurrence'] = 'Gjentakelse';
$string['recurrenceannualy'] = 'Årlig';
$string['recurrencedailyweekday'] = 'Daglig - ukedager';
$string['recurrencedonorepeat'] = 'Ikke repeter';
$string['reg_wpreports'] = 'Antall egendefinerte rapporter ({$a})';
$string['removechedulesuccess'] = 'Utsendnigsplanen har blitt slettet.';
$string['removeconditionsuccess'] = 'Betingelsen \'{$a}\' har blitt slettet.';
$string['report'] = 'Rapport';
$string['report_access_list'] = 'Systemrapport for liste over brukere med tilgang til en gitt rapport';
$string['reportbuilder:edit'] = 'Rediger et rapportoppsett';
$string['reportbuilder:read'] = 'Vis rapporter';
$string['reportcoursecompletion'] = 'Kursfullføring fra kompetansebase';
$string['reportcourseenrolmentcompletion'] = 'Kursoppmelding og gjennomføring';
$string['reportcourseenrolments'] = 'Kurspåmeldinger';
$string['reportcourseparticipants'] = 'Kursdeltakere';
$string['reportlimitreachedsite'] = 'Det maksimale antallet tilpassede rapporter for denne portalen er nådd. Fjern noen rapporter eller kontakt en administrator';
$string['reportlimitreachedtenant'] = 'Du kan bare opprette {$a} tilpassede rapporter på denne portalen. Fjern noen rapporter eller kontakt en administrator';
$string['reportlimitreachedtitle'] = 'Rapportgrensen er nådd';
$string['reportlists'] = 'Systemrapport for rapportlister';
$string['reportliveeditingdisabled'] = 'Dataforevisualisering er deaktivert av portaladministratoren <br /> Klikk på "Forhåndsvisning" -knappen for å se rapportinnholdet';
$string['reportname'] = 'Rapportnavn';
$string['reportname_help'] = 'Angi et navn for rapporten';
$string['reportschedules'] = 'Systemrapport for utsendingsplaner';
$string['reportsource_help'] = 'Rapportkilden definerer hvor dataene til rapporten kommer fra';
$string['reportstab'] = 'Rapporter';
$string['reportuserslist'] = 'Brukerliste';
$string['resetallconditions'] = 'Tilbakestill alle betingelser';
$string['resetcondition'] = 'Tilbakestill betingelse';
$string['resetfield'] = 'Tilbakestill \'{$a}\' felt';
$string['resettable'] = 'Tilbakestill filteret';
$string['rolemanager'] = 'Rapportgenerator administrator';
$string['rolemanagerdescription'] = 'Tillater å opprette og administrere egendefinerte rapporter innen gjeldende organisasjon';
$string['saveandcontinue'] = 'Lagre og fortsett';
$string['schedule'] = 'Planlegg';
$string['scheduleaddedastask'] = 'Utsendingen vil sendes så fort som mulig';
$string['scheduled'] = 'Planlagt';
$string['schedulename'] = 'Navn på utsendingsplan';
$string['schedulenotifyupgrade'] = 'Oppgraderte rapportplaner';
$string['schedulenotifyupgrademessage'] = 'Som en del av den siste Moodle Workplace-oppgraderingen, er den tilpassede rapportplanen \'{$ a-> schedulename}\' som du opprettet for rapporten \'<a href="{$a-> reportlink}\'> {$ a-> reportname} </a> \' endret.
<br /> <br />
Av sikkerhetshensyn støtter Moodle Workplace ikke lenger e-postadresser til uregistrerte brukere som brukes som tidsplanmottakere. De refererte e-postmeldingene er som referanse:
<br /> <br />
{$ a-> emails}
<br /> <br />
For mer informasjon, se <a href="{$a-> docslink} "> målgruppe og planlegg oppgraderingsnotater </a>.';
$string['schedules'] = 'Tidsplaner';
$string['selectacondition'] = 'Velg en betingelse';
$string['selectafilter'] = 'Velg et filter';
$string['selectaggregation'] = 'Velg en aggregering for kolonne \'{$a}\'';
$string['selectcohorts'] = 'Valgte kohorter';
$string['selectcourses'] = 'Velg kurs';
$string['selectsource'] = 'Velg en rapportkilde';
$string['send'] = 'Send';
$string['send_schedulestask'] = 'Start usendingsplaner';
$string['settings'] = 'Innstillinger';
$string['shared'] = 'Delt';
$string['showfirstcolumntitle'] = 'Vis tittelen på den første kolonnen';
$string['sidebarbutton'] = 'Vis/skjul sidepanel';
$string['sortingshelp'] = 'Sortering';
$string['sortingshelp_help'] = 'Standard sortering for rapporten';
$string['sortingtab'] = 'Sortering';
$string['subject'] = 'Emne';
$string['tabletab'] = 'Tabell';
$string['teststring2'] = 'Teststreng 2';
$string['userconfirmed'] = 'Registrering bekreftet';
$string['usersuspended'] = 'Registrering suspendert';
$string['userviewreportas'] = 'Vis rapportdata som';
$string['userviewreportas_help'] = 'Rapportdataene blir inkludert som om de er valgt av den valgte brukeren. Hvis den er tom, vil gjeldende bruker bli brukt som standard';
$string['viewreports'] = 'Rapportgenerator';

