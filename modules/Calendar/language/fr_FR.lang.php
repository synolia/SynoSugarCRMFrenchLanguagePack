<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 * 
 * Contributor(s): www.synolia.com - sugar@synolia.com
 * You can contact SYNOLIA at 51 avenue Jean Jaures 69007 - LYON FRANCE
 * or at email address contact@synolia.com.
 ********************************************************************************/














$mod_strings = array (
  'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: non définit pour cette vue',
  'ERR_YEAR_BETWEEN' => 'Désolé, le calendrier ne peut pas afficher l&#039;année que vous avez demandée<br>Année doit être compris entre 1970 et 2037',
  'LBL_AM' => 'AM',
  'LBL_APPLY_BUTTON' => 'Appliquer',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_BUSY' => 'Occupé',
  'LBL_CANCEL_BUTTON' => 'Annuler',
  'LBL_CLOSE_BUTTON' => 'Clôturer',
  'LBL_CONFIRM_REMOVE' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
  'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Etes vous sûr de vouloir supprimer tous les enregistrements récurrents ?',
  'LBL_CONFLICT' => 'Conflit',
  'LBL_CREATE_CALL' => 'Planifier Appel',
  'LBL_CREATE_MEETING' => 'Planifier Réunion',
  'LBL_CREATE_NEW_RECORD' => 'Créer une activité',
  'LBL_DATE' => 'Date et Heure de début',
  'LBL_DATE_END_ERROR' => 'La date de fin est avant la date de début',
  'LBL_DATE_TIME' => 'Date et Heure',
  'LBL_DAY' => 'Jour',
  'LBL_DELETE_BUTTON' => 'Supprimer',
  'LBL_DURATION' => 'Durée',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editer toutes les occurrences',
  'LBL_EDIT_RECORD' => 'Editer activité',
  'LBL_EDIT_USERLIST' => 'Liste des Utilisateurs',
  'LBL_ERROR_LOADING' => 'Erreur lors du chargement',
  'LBL_ERROR_SAVING' => 'Erreur lors de la sauvegarde',
  'LBL_FILTER_BY_TEAM' => 'Filtrer la liste des utilisateurs par Equipe:',
  'LBL_GENERAL_TAB' => 'Détails',
  'LBL_GOTO_DATE' => 'Aller à la date',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_INFO_DESC' => 'Description',
  'LBL_INFO_DUE_DT' => 'Date d&#39;échéance',
  'LBL_INFO_DURATION' => 'Durée',
  'LBL_INFO_NAME' => 'Sujet',
  'LBL_INFO_RELATED_TO' => 'Relatif à',
  'LBL_INFO_START_DT' => 'Date de début',
  'LBL_INFO_TITLE' => 'Informations complémentaires',
  'LBL_LOADING' => 'Chargement .....',
  'LBL_MINS_ABBREV' => 'm',
  'LBL_MODULE_NAME' => 'Calendrier',
  'LBL_MODULE_NAME_SINGULAR' => 'Calendrier',
  'LBL_MODULE_TITLE' => 'Calendrier',
  'LBL_MONTH' => 'Mois',
  'LBL_NEXT_DAY' => 'Jour Suivant',
  'LBL_NEXT_MONTH' => 'Mois Suivant',
  'LBL_NEXT_SHARED' => 'Suivant',
  'LBL_NEXT_WEEK' => 'Sem. suivante',
  'LBL_NEXT_YEAR' => 'Année Suivante',
  'LBL_NO' => 'Non',
  'LBL_NO_USER' => 'Aucune correspondance pour le champ : Assigné à',
  'LBL_PARTICIPANTS_TAB' => 'Participants',
  'LBL_PM' => 'PM',
  'LBL_PREVIOUS_DAY' => 'Jour Précédent',
  'LBL_PREVIOUS_MONTH' => 'Mois Précédent',
  'LBL_PREVIOUS_SHARED' => 'Précédent',
  'LBL_PREVIOUS_WEEK' => 'Sem. précédente',
  'LBL_PREVIOUS_YEAR' => 'Année Précédente',
  'LBL_RECURRING_LIMIT_ERROR' => 'La planification de cette acticité de type $moduleTitle ne peut être effectuée car elle dépasse le nombre maximum de récurrence autorisé qui est de $limit.',
  'LBL_REFRESH' => 'Rafraîchir',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Supprimer toutes les occurrences',
  'LBL_REPEAT_COUNT' => 'Nombre d’occurrences',
  'LBL_REPEAT_DOW' => 'Le',
  'LBL_REPEAT_END' => 'Fin',
  'LBL_REPEAT_END_AFTER' => 'Après',
  'LBL_REPEAT_END_BY' => 'Le',
  'LBL_REPEAT_INTERVAL' => 'Intervalle',
  'LBL_REPEAT_OCCURRENCES' => 'occurrences',
  'LBL_REPEAT_TAB' => 'Récurrence',
  'LBL_REPEAT_TYPE' => 'Répéter',
  'LBL_REPEAT_UNTIL' => 'Répéter jusqu&#39;à',
  'LBL_SAVE_BUTTON' => 'Sauvegarder',
  'LBL_SAVING' => 'Sauvegarde .....',
  'LBL_SCHEDULED' => 'Planifié',
  'LBL_SELECT_USERS' => 'Selectionner les utilisateurs à afficher sur le calendrier',
  'LBL_SENDING_INVITES' => 'Envoi des invitations ....',
  'LBL_SEND_INVITES' => 'Envoyer Invitations',
  'LBL_SETTINGS' => 'Paramètres',
  'LBL_SETTINGS_CALLS_SHOW' => 'Voir les appels :',
  'LBL_SETTINGS_COMPLETED_SHOW' => 'Voir les réunion, appels et tâches terminés :',
  'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Afficher les créneaux horaires dans les vues Jour et Semaine:',
  'LBL_SETTINGS_TASKS_SHOW' => 'Voir les tâches :',
  'LBL_SETTINGS_TIME_ENDS' => 'Heure fin :',
  'LBL_SETTINGS_TIME_STARTS' => 'Heure début :',
  'LBL_SETTINGS_TITLE' => 'Paramètres',
  'LBL_SHARED' => 'Partagé',
  'LBL_SHARED_CAL_TITLE' => 'Calendrier partagé',
  'LBL_STATUS' => 'Statut',
  'LBL_STYLE_ADVANCED' => 'Avancée',
  'LBL_STYLE_BASIC' => 'Basique',
  'LBL_SUBJECT' => 'Sujet',
  'LBL_USERS' => 'Assigné à',
  'LBL_USER_CALENDARS' => 'Calendriers des utilisateurs',
  'LBL_WEEK' => 'Semaine',
  'LBL_YEAR' => 'Année',
  'LBL_YES' => 'Oui',
  'LNK_CALL_LIST' => 'Appels',
  'LNK_IMPORT_CALLS' => 'Import des Appels',
  'LNK_IMPORT_MEETINGS' => 'Import des Réunions',
  'LNK_IMPORT_TASKS' => 'Import des Tâches',
  'LNK_MEETING_LIST' => 'Réunions',
  'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
  'LNK_NEW_CALL' => 'Planifier Appel',
  'LNK_NEW_MEETING' => 'Planifier Réunion',
  'LNK_NEW_TASK' => 'Créer Tâche',
  'LNK_TASK_LIST' => 'Tâches',
  'LNK_VIEW_CALENDAR' => 'Aujourd&#39;hui',
  'NOTICE_DURATION_TIME' => 'La durée doit être supérieure à 0',
);

$mod_list_strings = array(
  'dom_cal_month' => 
  array (
    0 => '',
    1 => 'Jan',
    2 => 'Fev',
    3 => 'Mar',
    4 => 'Avr',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juil',
    8 => 'Aou',
    9 => 'Sep',
    10 => 'Oct',
    11 => 'Nov',
    12 => 'Déc',
		),
  'dom_cal_month_long' => 
  array (
    0 => '',
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Août',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre',
		),
  'dom_cal_weekdays' => 
  array (
    0 => 'Dim',
    1 => 'Lun',
    2 => 'Mar',
    3 => 'Mer',
    4 => 'Jeu',
    5 => 'Ven',
    6 => 'Sam',
  ),
  'dom_cal_weekdays_long' => 
  array (
    0 => 'Dimanche',
    1 => 'Lundi',
    2 => 'Mardi',
    3 => 'Mercredi',
    4 => 'Jeudi',
    5 => 'Vendredi',
    6 => 'Samedi',
		),
);