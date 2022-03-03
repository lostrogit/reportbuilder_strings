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
 * Strings for component 'reportbuilder', language 'fr', version '4.0'.
 *
 * @package     reportbuilder
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesstab'] = 'Accès';
$string['addacondition'] = 'Ajouter une condition…';
$string['addafilter'] = 'Ajouter un filtre…';
$string['addaudiences'] = 'Ajouter une audience à ce rapport';
$string['adddefault'] = 'Ajouter une configuration par défaut';
$string['adddefault_help'] = 'Chaque source de rapport définit également des colonnes, des conditions et des filtres par défaut. Cochez cette case si vous souhaitez partir avec un rapport contenant déjà des colonnes.';
$string['addemails'] = 'Ajouter des courriels manuellement';
$string['addfieldbyname'] = 'Ajouter un champ « {$a} » au rapport';
$string['addreport'] = 'Nouveau rapport';
$string['addschedule'] = 'Nouvelle planification';
$string['addusers_help'] = 'Tous les utilisateurs ajoutés manuellement recevront ce rapport malgré leur position ou leur service';
$string['aggregation_avg'] = 'Moyenne';
$string['aggregation_count'] = 'Compte';
$string['aggregation_countdistinct'] = 'Compte unique';
$string['aggregation_groupconcat'] = 'Valeurs séparées par des virgules';
$string['aggregation_groupconcatdistinct'] = 'Valeurs distinctes séparées par des virgules';
$string['aggregation_max'] = 'Maximum';
$string['aggregation_min'] = 'Minimum';
$string['aggregation_percent'] = 'Pourcentage';
$string['aggregation_sum'] = 'Somme';
$string['aggregation_unique'] = 'Valeurs uniques';
$string['allusersdesc'] = 'Ajouter tous les utilisateurs à ce rapport';
$string['and'] = 'Et';
$string['asc'] = 'La colonne « {$a} » a un sens de tri croissant';
$string['audiencejobadd'] = 'Ajouter un poste';
$string['audiencejobremove'] = 'Supprimer le poste';
$string['audiencejobs'] = 'Postes';
$string['audiencejobs_help'] = 'Les utilisateurs peuvent consulter ce rapport s\'ils appartiennent à l\'un des postes sélectionnés ci-dessous';
$string['audiencejobsempty'] = 'Aucun postes ajoutés';
$string['audiencemultiselectpostix'] = 'plus {$a} autre';
$string['audiences'] = 'Audiences';
$string['authmethod'] = 'Méthode d\'authentification';
$string['availableinalltenants'] = 'Disponible dans toutes les entités';
$string['availableinalltenants_help'] = 'Lorsqu\'il sera activé, les utilisateurs (avec les autorisations appropriées) de toutes les entités pourront consulter ce rapport. La plupart des sources de rapport limiteront automatiquement les utilisateurs et autres entités (programmes, certifications, cours) affichés à ceux visibles à l\'intérieur de l\'entité.';
$string['basicinformation'] = 'Renseignements de base';
$string['cachedef_userreports'] = 'Rapports personnalisés auxquels l\'utilisateur peut accéder';
$string['canviewallreports'] = 'Peut visualiser tous les rapports';
$string['certificatesissues'] = 'Délivrance de certificats';
$string['certificatetemplates'] = 'Modèles de certificats';
$string['checkboxanyvalue'] = 'N\'importe quelle valeur';
$string['checkboxischecked'] = 'Oui';
$string['checkboxisnotchecked'] = 'non';
$string['choose'] = 'Choisir…';
$string['conditionshelp'] = 'Conditions';
$string['conditionshelp_help'] = 'Liste des conditions prédéfinies qui s\'appliquent toujours lors de la visualisation de ce rapport.';
$string['conditionstab'] = 'Conditions';
$string['confirm'] = 'Confirmer';
$string['confirmdeletecondition'] = 'Voulez-vous vraiment supprimer la condition « {$a} » ?';
$string['confirmdeleteschedule'] = 'Êtes-vous sûr de vouloir supprimer la planification \'{$a}\' et toutes les données associées? Cette action ne peut pas être annulée.';
$string['confirmresetallconditions'] = 'Voulez-vous vraiment réinitialiser toutes les conditions ?';
$string['confirmresetconditions'] = 'Voulez-vous vraiment réinitialiser la condition « {$a} » ?';
$string['confirmsendschedule'] = 'Êtes-vous sûr de vouloir mettre dans la queue \'{$a}\' pour l\'envoi?';
$string['contentvisibility'] = 'Nombre de colonne toujours visible';
$string['course_completion_days_course'] = 'Nombre de jours de cours';
$string['course_completion_days_enrolled'] = 'Nombre de jours d\'inscription';
$string['course_completion_progress'] = 'Progression';
$string['course_completion_progress_percent'] = 'Progression (%)';
$string['course_completion_reaggregate'] = 'Réagrégation du temps';
$string['course_completion_timecompleted'] = 'Date de complétion';
$string['course_completion_timeenrolled'] = 'Date d\'inscription';
$string['course_completion_timestarted'] = 'Date de début';
$string['course_enrolment_status'] = 'Statut d\'inscription';
$string['course_enrolment_timeended'] = 'Fin de l\'inscription';
$string['course_enrolment_timestarted'] = 'Début de l\'inscription';
$string['customessage'] = 'Message personnalisé';
$string['customizecondition'] = 'Éditer le nom de la condition';
$string['customizefilter'] = 'Éditer le nom du filtre';
$string['customizeheader'] = 'Éditer l\'en-tête de la colonne';
$string['customreportsdesc'] = 'Rapports personnalisés, comprenant des données sur l\'audience et les horaires';
$string['dateanyvalue'] = 'N\'importe quelle valeur';
$string['datecreated'] = 'Créé';
$string['datecurrent'] = 'Courant';
$string['dateinthefuture'] = 'À l\'avenir';
$string['dateinthepast'] = 'Dans le passé';
$string['dateisempty'] = 'est vide';
$string['dateisnotempty'] = 'n\'est pas vide';
$string['datelast'] = 'Derniers...jours';
$string['datenext'] = 'Prochains...jours';
$string['dateprevious'] = 'Précédent';
$string['daterange'] = 'Plage de dates';
$string['daterangefrom'] = 'Du';
$string['daterangeto'] = 'Jusqu\'au';
$string['datetostart'] = 'Date';
$string['dateupcoming'] = 'Prochain';
$string['debugsqlparams'] = 'Paramètres';
$string['debugsqlquery'] = 'Requête en cours';
$string['deletereportmsg'] = 'Êtes-vous sûr de vouloir supprimer le rapport \'{$a}\' et toutes les données associées? Cette action ne peut pas être annulée.';
$string['deletereportsuccess'] = 'Le rapport a été supprimé';
$string['desc'] = 'La colonne \'{$a}\' a un ordre de tri décroissant';
$string['description'] = 'Description';
$string['description_help'] = 'Fournissez une description de l\'objectif du rapport.';
$string['duplicate'] = 'Dupliquer';
$string['duplicatereport'] = 'Dupliquer le rapport';
$string['editmode'] = 'Basculer pour éditer la vue';
$string['editreport'] = 'Modifier le contenu';
$string['editschedule'] = 'Modifier le calendrier';
$string['edittitle'] = 'Modifier le rapport \'{$a}\'';
$string['enablesortingon'] = 'Activer le tri sur la colonne \'{$a}\'';
$string['enteremail'] = 'Merci d\'entrer un email valide.';
$string['entitycertificate'] = 'Certificat';
$string['entitycertificateissue'] = 'Délivrance de certificats';
$string['entitycoursecompletion'] = 'Achèvement du cours';
$string['entitycourseenrolment'] = 'Inscription aux cours';
$string['entitydatastorecoursecompletion'] = 'Achèvement du cours dans le datastore';
$string['entityreportbuilder'] = 'Rapports personnalisés';
$string['entityschedule'] = 'Calendrier';
$string['error:mustselectformat'] = 'Vous devez sélectionner un format.';
$string['error:mustselectsource'] = 'Vous devez sélectionner une source de rapport.';
$string['errormanageschedules'] = 'Vous n\'avez pas la permission de gérer la planification d\'envoi.';
$string['errormissingreportsource'] = 'Impossible de trouver la source du rapport';
$string['errornorecipients'] = 'Vous devez sélectionner certains destinataires pour cette planification';
$string['errorunavailablereportsource'] = 'La source de rapport configurée n\'est pas disponible';
$string['eventreportcreated'] = 'Rapport créé';
$string['eventreportdeleted'] = 'Rapport supprimé';
$string['eventreportschedulecreated'] = 'Calendrier de rapport créé';
$string['eventreportscheduledeleted'] = 'Calendrier de rapport supprimé';
$string['eventreportscheduleupdated'] = 'Calendrier du rapport mis à jour';
$string['eventreportupdated'] = 'Rapport mis à jour';
$string['eventreportviewed'] = 'Rapport visualisé';
$string['expandcardview'] = 'Développer la vue "card"';
$string['expandconditions'] = 'Développer les conditions';
$string['expandfilters'] = 'Développer les filtres';
$string['expandsorting'] = 'Développer les tris';
$string['exportselectall'] = 'Exporter tous les rapports personnalisés';
$string['exportselectlimit'] = 'Exporter des rapports personnalisés spécifiques...';
$string['filternotvalid'] = 'Le filtre doit être une sous-classe de filter_base.';
$string['filtersbutton'] = 'Afficher / masquer la barre des filtres';
$string['filtershelp'] = 'Filtres';
$string['filtershelp_help'] = 'Liste des filtres qui ne s\'appliquent pas automatiquement mais qui sont disponibles pour les utilisateurs.';
$string['filterstab'] = 'Filtres';
$string['format'] = 'Format';
$string['fullnamewithlink'] = 'Nom complet avec lien de profil';
$string['fullnamewithpicture'] = 'Nom complet avec photo';
$string['fullnamewithpicturelink'] = 'Nom complet avec photo et lien';
$string['hascurrentjobs'] = 'A des postes actuels';
$string['importaudiencelogerror'] = 'Impossible d\'importer les données de cette audience';
$string['importaudiencelogsuccess'] = 'Données d\'audience importées';
$string['importexportreportdefinition'] = 'Définitions des rapports';
$string['importexportreportdefinition_help'] = 'Inclure les colonnes, les conditions et les filtres';
$string['importlogerror'] = 'Impossible d\'importer le rapport \'{$a}\'';
$string['importlogerrorinvalidaudience'] = 'Audience manquante ou invalide';
$string['importlogerrorinvalidformat'] = 'Format de planification manquant ou non valide';
$string['importlogerrorinvalidsource'] = 'Source du rapport manquante ou non valide';
$string['importlogerrorinvalidtype'] = 'Type de rapport non valide';
$string['importlogerrorlegacyemails'] = 'Les adresses e-mail extérieures ne sont plus prises en charge dans la planification d\'envoi des rapports';
$string['importlogerrorlegacyemailsimport'] = 'Importer sans adresses e-mail';
$string['importlogerrorlegacyemailslog'] = 'Les adresses électroniques externes ne sont plus prises en charge dans la planification d\'envoi des rapports, veuillez vous référer à <a href="{$a->docslink}">notes de mise à jour</a>.';
$string['importlogerrornorecipients'] = 'Destinataires manquants ou non valides';
$string['importlogsuccess'] = 'Création d\'un nouveau rapport \'<a href="{$a->url}">{$a->name}</a>\' avec les colonnes {$a->columncount}, les conditions {$a->conditioncount} et les filtres {$a->filtercount}';
$string['importschedulelogerror'] = 'Impossible d\'importer les données de planification';
$string['importschedulelogsuccess'] = 'Donnée de la planification importée';
$string['importselectall'] = 'Importer tous les rapports personnalisés';
$string['importselectlimit'] = 'Importer des rapports personnalisés spécifiques...';
$string['invalidcolumn'] = 'Colonne non valide';
$string['invalidcondition'] = 'Condition invalide';
$string['invalidemail'] = 'Cette adresse email \'{$a}\' n\'est pas valide';
$string['invalidfilter'] = 'Filtre non valide';
$string['ismemberofcohort'] = 'Membre de la cohorte';
$string['isnotempty'] = 'N\'est pas vide';
$string['lastcourseaccess'] = 'Dernier accès au cours';
$string['lastmodified'] = 'Dernière modification';
$string['lastsenton'] = 'Dernier envoyé le';
$string['lessthanaday'] = 'Moins d\'un jour';
$string['managereports'] = 'Gérer des rapports personnalisés';
$string['message'] = 'Message';
$string['modifiedby'] = 'Modifié par';
$string['never'] = 'Jamais';
$string['newaggregationfor'] = 'Nouvelle agrégation pour la colonne \'{$a}\'';
$string['newvaluefor'] = 'Nouvelle valeur pour \'{$a}\'';
$string['noaggregation'] = 'Pas d\'agrégation';
$string['noaudiencesalert'] = 'La programmation de ce rapport ne sera possible que si une ou plusieurs audiences y sont ajoutées. Veuillez vous rendre dans l\'onglet "Audiences" et créer au moins une audience pour continuer.';
$string['noavailablecohorts'] = 'Aucune cohorte disponible';
$string['nocolumnsselected'] = 'Ajouter une colonne au rapport';
$string['numberanyvalue'] = 'Toute valeur';
$string['numberbetween'] = 'Dans une fourchette allant de';
$string['numberequalorgreaterthan'] = 'Supérieur ou égal à';
$string['numberequalorlessthan'] = 'Inférieur ou égal à';
$string['numberequalto'] = 'égal';
$string['numbergreaterthan'] = 'Supérieur à';
$string['numberisempty'] = 'Est vide';
$string['numberisnotempty'] = 'N\'est pas vide';
$string['numberlessthan'] = 'Moins de';
$string['pluginname'] = 'Générateur de rapport';
$string['preview'] = 'Aperçu';
$string['previewmode'] = 'Basculer en mode aperçu';
$string['privacy:metadata:preference:filters_report'] = 'Stocke les propriétés de filtrage des utilisateurs pour un rapport';
$string['privacy:metadata:reportbuilder'] = 'Informations sur les rapports personnalisés';
$string['privacy:metadata:reportbuilder:name'] = 'Le nom du rapport';
$string['privacy:metadata:reportbuilder:source'] = 'La source de données du rapport';
$string['privacy:metadata:reportbuilder:tenantid'] = 'L\'identité de l\'entité à qui appartient le rapport';
$string['privacy:metadata:reportbuilder:timecreated'] = 'La date à laquelle le rapport a été créé';
$string['privacy:metadata:reportbuilder:timemodified'] = 'La date de la dernière modification du rapport';
$string['privacy:metadata:reportbuilder:usercreated'] = 'L\'identifiant de l\'utilisateur qui a créé le rapport';
$string['privacy:metadata:reportbuilder:usermodified'] = 'L\'identifiant de l\'utilisateur qui a modifié le rapport en dernier';
$string['privacy:metadata:reportbuilder_audience'] = 'Informations sur les audiences des rapports personnalisés';
$string['privacy:metadata:reportbuilder_audience:classname'] = 'Style utilisé pour cette audience';
$string['privacy:metadata:reportbuilder_audience:configdata'] = 'La configuration de l\'audience';
$string['privacy:metadata:reportbuilder_audience:reportid'] = 'L\'ID du rapport auquel l\'audience appartient';
$string['privacy:metadata:reportbuilder_audience:timecreated'] = 'L\'heure à laquelle l\'audience a été créée';
$string['privacy:metadata:reportbuilder_audience:timemodified'] = 'L\'heure à laquelle l\'audience a été modifiée';
$string['privacy:metadata:reportbuilder_audience:usercreated'] = 'L\'ID de l\'utilisateur qui a créé l\'audience';
$string['privacy:metadata:reportbuilder_audience:usermodified'] = 'L\'ID de l\'utilisateur qui a modifié l\'audience';
$string['privacy:metadata:reportbuilder_schedule'] = 'Informations sur les rapports personnalisés envoyés';
$string['privacy:metadata:reportbuilder_schedule:format'] = 'Le format des données du rapport envoyé';
$string['privacy:metadata:reportbuilder_schedule:lastsenton'] = 'Date du dernier envoi programmé effectué';
$string['privacy:metadata:reportbuilder_schedule:message'] = 'Message de l\'envoi programmé';
$string['privacy:metadata:reportbuilder_schedule:name'] = 'Nom du rapport programmé';
$string['privacy:metadata:reportbuilder_schedule:recurrence'] = 'Fréquence de répétition';
$string['privacy:metadata:reportbuilder_schedule:reportid'] = 'L\'identifiant du rapport auquel l\'annexe appartient';
$string['privacy:metadata:reportbuilder_schedule:scheduled'] = 'L\'heure à laquelle l\'envoi doit commencer';
$string['privacy:metadata:reportbuilder_schedule:subject'] = 'Le sujet du message';
$string['privacy:metadata:reportbuilder_schedule:timecreated'] = 'L\'heure de création du rapport';
$string['privacy:metadata:reportbuilder_schedule:timemodified'] = 'L\'heure de la dernière mise à jour';
$string['privacy:metadata:reportbuilder_schedule:usercreated'] = 'L\'identifiant de l\'utilisateur qui a créé la programmation';
$string['privacy:metadata:reportbuilder_schedule:usermodified'] = 'L\'identifiant de l\'utilisateur qui a modifié la programmation en dernier';
$string['privacywarning'] = 'ATTENTION : avant d\'ajouter un courriel, assurez-vous d\'avoir la base légale pour le faire et que celle-ci est conforme à la Loi sur la protection des renseignements personnels applicable à votre organisation.';
$string['profiledepartment'] = 'Organisation Profil';
$string['quarter'] = 'Trimestre';
$string['recipients'] = 'Destinataires';
$string['recurrenceannualy'] = 'Annuellement';
$string['recurrencedailyweekday'] = 'Quotidien - Jours de semaine';
$string['recurrencedonorepeat'] = 'Ne répète pas';
$string['reg_wpreports'] = 'Nombre de rapports personnalisés ({$a})';
$string['removechedulesuccess'] = 'L\'horaire a été supprimé.';
$string['removeconditionsuccess'] = 'La condition \'{$a}\' a été supprimée.';
$string['report'] = 'Rapport';
$string['report_access_list'] = 'Rapport système pour lister les utilisateurs ayant accès à un rapport donné';
$string['reportbuilder:edit'] = 'Modifier une configuration de rapport';
$string['reportbuilder:read'] = 'Voir les rapports';
$string['reportcoursecompletion'] = 'Fin du cours depuis le magasin de données';
$string['reportcourseenrolmentcompletion'] = 'Inscription aux cours et achèvement des cours';
$string['reportcourseenrolments'] = 'Inscriptions aux cours';
$string['reportcourseparticipants'] = 'Participants au cours';
$string['reportlimitreachedsite'] = 'Le nombre maximum de rapports personnalisés pour ce site a été atteint. Veuillez supprimer certains rapports ou contacter un administrateur';
$string['reportlimitreachedtenant'] = 'Vous ne pouvez créer que {$a} rapports personnalisés sur ce site. Veuillez supprimer certains rapports ou contacter un administrateur';
$string['reportlimitreachedtitle'] = 'Limite du nombre de rapport atteinte';
$string['reportlists'] = 'Rapport de système pour les listes de rapports';
$string['reportliveeditingdisabled'] = 'La prévisualisation des données est désactivée par l\'administrateur du site<br />Cliquez sur le bouton "Aperçu" pour voir le contenu du rapport.';
$string['reportname'] = 'Nom du rapport';
$string['reportname_help'] = 'Nom du rapport';
$string['reportschedules'] = 'Rapport de système pour la liste des horaires';
$string['reportstab'] = 'Rapports';
$string['reportuserslist'] = 'Liste des utilisateurs';
$string['resetallconditions'] = 'Réinitialiser toutes les conditions';
$string['resetcondition'] = 'Condition de réinitialisation';
$string['resetfield'] = 'Réinitialiser le champ \'{$a}\'';
$string['resettable'] = 'Réinitialiser le tableau';
$string['rolemanager'] = 'Gestionnaire de générateur de rapport';
$string['rolemanagerdescription'] = 'Permet de créer et de gérer des rapports personnalisés au sein de l\'entité actuelle';
$string['saveandcontinue'] = 'Sauvegarder et continuer';
$string['schedule'] = 'Programme';
$string['scheduleaddedastask'] = 'Le rapport planifié sera envoyé dès que possible';
$string['scheduled'] = 'Programmé';
$string['schedulename'] = 'Nom de la planification';
$string['schedulenotifyupgrade'] = 'Planification d\'envoi des rapports mis à jour';
$string['schedulenotifyupgrademessage'] = 'Dans le cadre de la mise à jour de votre Moodle Workplace, la planification d\'envoi de rapport personnalisé \'{$a->schedulename}\' que vous avez créé pour le rapport \'<a href="{$a->reportlink}">{$a->reportname}</a>\' a été modifiée.
<br /><br />
Pour des raisons de sécurité, Moodle Workplace ne prend plus en charge les adresses électroniques des utilisateurs non enregistrés utilisées comme destinataires dans ces planifications. Pour référence, les emails supprimés sont les suivants :
<br /><br />
{$a->emails}
<br /><br />
Pour plus de détails, veuillez vous référer aux <a href="{$a->docslink}">notes de mise à niveau de l\'audience et de la planification</a>.';
$string['selectaggregation'] = 'Sélectionner une agrégation pour la colonne \'{$a}\'';
$string['selectcohorts'] = 'Sélectionner les cohortes';
$string['selectcourses'] = 'Sélectionner les cours';
$string['selectsource'] = 'Sélectionner une source de rapport';
$string['send'] = 'Envoyer';
$string['send_schedulestask'] = 'Envoyer les programmes';
$string['settings'] = 'Paramètres';
$string['shared'] = 'Modifier l\'en-tête de la colonne "{$a}"';
$string['showfirstcolumntitle'] = 'Afficher le titre de la première colonne';
$string['sidebarbutton'] = 'Afficher/masquer la barre latérale';
$string['sortingshelp'] = 'Tri';
$string['sortingshelp_help'] = 'Tri par défaut pour le rapport';
$string['sortingtab'] = 'Tri';
$string['subject'] = 'Sujet';
$string['tabletab'] = 'Table';
$string['teststring2'] = 'Chaîne de test 2';
$string['userconfirmed'] = 'Inscription confirmée';
$string['usersuspended'] = 'Inscription suspendue';
$string['userviewreportas'] = 'Afficher les données du rapport sous la forme';
$string['userviewreportas_help'] = 'Les données du rapport seront incluses comme si elles étaient vues par l\'utilisateur sélectionné. Si laissé vide, l\'utilisateur courant sera utilisé comme utilisateur par défaut.';
$string['userviewreportasnotice'] = 'Le rapport peut contenir les données de toutes les entités';
$string['viewreports'] = 'Générateur de rapport';

