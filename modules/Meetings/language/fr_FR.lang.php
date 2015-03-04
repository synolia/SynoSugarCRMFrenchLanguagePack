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
  'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
  'LBL_ACCEPT_LINK' => 'Lien acceptation',
  'LBL_ACCEPT_STATUS' => 'Statut acceptation',
  'LBL_ACCEPT_THIS' => 'Accepter ?',
  'LBL_ACCOUNT_NAME' => 'Compte',
  'LBL_ACTIVITIES_REPORTS' => 'Rapport d&#39;activités',
  'LBL_ADD_BUTTON' => 'Ajouter',
  'LBL_ADD_INVITEE' => 'Ajouter des participants',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
  'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
  'LBL_COLON' => ':',
  'LBL_CONFIRM_REMOVE_ALL_RECURRENCES' => 'Etes vous sûr de vouloir supprimer tous les enregistrements récurrents ?',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_CONTACT_NAME' => 'Contact:',
  'LBL_CREATED_BY' => 'Créé par',
  'LBL_CREATED_USER' => 'Créé par',
  'LBL_CREATE_AND_ADD' => 'Créer et Ajouter',
  'LBL_CREATE_CONTACT' => 'Comme un Contact',
  'LBL_CREATE_INVITEE' => 'Créer un invité',
  'LBL_CREATE_LEAD' => 'Comme un Lead',
  'LBL_CREATE_MODULE' => 'Planifier Réunion',
  'LBL_CREATOR' => 'Créé par',
  'LBL_DATE' => 'Date de début:',
  'LBL_DATE_END' => 'Date de fin',
  'LBL_DATE_END_ERROR' => 'La date de fin est avant la date de début',
  'LBL_DATE_TIME' => 'Date et Heure début:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Réunions',
  'LBL_DEL' => 'Sup',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_DESCRIPTION_INFORMATION' => 'Description',
  'LBL_DIRECTION' => 'Direction:',
  'LBL_DISPLAYED_URL' => 'URL affichée',
  'LBL_DURATION' => 'Durée:',
  'LBL_DURATION_HOURS' => 'Durée en Heures:',
  'LBL_DURATION_MINUTES' => 'Durée en Minutes:',
  'LBL_EDIT_ALL_RECURRENCES' => 'Editer toutes les occurrences',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAIL_REMINDER' => 'Notification par email',
  'LBL_EMAIL_REMINDER_SENT' => 'Notification par email envoyée',
  'LBL_EMAIL_REMINDER_TIME' => 'Horaire notification par email',
  'LBL_EMPTY_SEARCH_RESULT' => 'Désolé, aucun résultat trouvé. Veuillez créer un invité ci-dessous.',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Utilisateur assigné (ID)',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Utilisateur assigné nom',
  'LBL_EXPORT_CREATED_BY' => 'Créé par (ID)',
  'LBL_EXPORT_DATE_END' => 'Date et heure de fin',
  'LBL_EXPORT_DATE_START' => 'Date et heure de début',
  'LBL_EXPORT_DISPLAYED_URL' => 'URL affichée',
  'LBL_EXPORT_EXTERNAL_ID' => 'ID Externe',
  'LBL_EXPORT_HOST_URL' => 'URL hôte',
  'LBL_EXPORT_JOIN_URL' => 'URL à rejoindre',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modifié par (ID)',
  'LBL_EXPORT_PARENT_ID' => 'ID du parent',
  'LBL_EXPORT_PARENT_TYPE' => 'Type de relation',
  'LBL_EXPORT_REMINDER_TIME' => 'Rappel (en minutes)',
  'LBL_EXTERNALID' => 'ID application externe',
  'LBL_EXTNOSTART_HEADER' => 'Erreur : Impossible de démarrer la réunion',
  'LBL_EXTNOSTART_MAIN' => 'Vous ne pouvez pas démarrer cette réunion car vous êtes ni un administrateur ni le responsable de cette réunion.',
  'LBL_EXTNOT_GO_BACK' => 'Retour à l&#39;enregistrement précédent',
  'LBL_EXTNOT_HEADER' => 'Erreur : vous n&#39;êtes pas un participant de cette réunion',
  'LBL_EXTNOT_MAIN' => 'Vous n&#39;êtes pas autorisé à joindre cette réunion car vous n&#39;êtes pas un des participants de celle-ci.',
  'LBL_EXTNOT_RECORD_LINK' => 'Voir la réunion',
  'LBL_FIRST_NAME' => 'Prénom',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
  'LBL_HOST_EXT_MEETING' => 'Démarrer la réunion',
  'LBL_HOST_URL' => 'URL hôte',
  'LBL_HOURS_ABBREV' => 'h',
  'LBL_HOURS_MINS' => '(heures/minutes)',
  'LBL_INVITEE' => 'Participants',
  'LBL_JOIN_EXT_MEETING' => 'Joindre la réunion',
  'LBL_LAST_NAME' => 'Nom',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_LIST_CLOSE' => 'Clôturer',
  'LBL_LIST_CONTACT' => 'Contact',
  'LBL_LIST_DATE' => 'Date de début',
  'LBL_LIST_DATE_MODIFIED' => 'Date de modification',
  'LBL_LIST_DIRECTION' => 'Direction',
  'LBL_LIST_DUE_DATE' => 'Date prévue',
  'LBL_LIST_FORM_TITLE' => 'Liste des Réunions',
  'LBL_LIST_JOIN_MEETING' => 'Joindre la réunion',
  'LBL_LIST_MY_MEETINGS' => 'Mes Rendez-vous',
  'LBL_LIST_RELATED_TO' => 'Relatif à',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_SUBJECT' => 'Sujet',
  'LBL_LIST_TIME' => 'Heure début',
  'LBL_LOCATION' => 'Localisation:',
  'LBL_MEETING' => 'Réunion:',
  'LBL_MEETING_INFORMATION' => 'Informations Réunion',
  'LBL_MINSS_ABBREV' => 'm',
  'LBL_MODIFIED_BY' => 'Modifié par',
  'LBL_MODIFIED_USER' => 'Modifié par',
  'LBL_MODULE_NAME' => 'Réunions',
  'LBL_MODULE_NAME_SINGULAR' => 'Réunion',
  'LBL_MODULE_TITLE' => 'Réunions',
  'LBL_NAME' => 'Nom',
  'LBL_NEW_FORM_TITLE' => 'Planifier Réunion',
  'LBL_NO_ACCESS' => 'Vous n&#39;avez aucun accès pour créer $module',
  'LBL_OUTLOOK_ID' => 'Outlook ID',
  'LBL_PARENT_ID' => 'Parent (ID):',
  'LBL_PARENT_TYPE' => 'Type de Parent :',
  'LBL_PASSWORD' => 'Mot de passe',
  'LBL_PHONE' => 'Téléphone:',
  'LBL_RECURRENCE' => 'Récurrence',
  'LBL_RECURRING_LIMIT_ERROR' => 'Cette réunion ne peut être planifiée car elle dépasse le nombre maximum de récurrence autorisé qui est de $limit.',
  'LBL_RECURRING_SOURCE' => 'Source récurrence',
  'LBL_RELATED_RECORD_DEFAULT_NAME' => 'Réunion avec {{{this}}}',
  'LBL_RELATED_TO' => 'Relatif à :',
  'LBL_REMINDER' => 'Notification:',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Rapp. email tous',
  'LBL_REMINDER_POPUP' => 'Rappel utilisateurs',
  'LBL_REMINDER_TIME' => 'Heure de la notification',
  'LBL_REMOVE' => 'Sup',
  'LBL_REMOVE_ALL_RECURRENCES' => 'Supprimer toutes les occurrences',
  'LBL_REPEAT_COUNT' => 'Répétition occurences',
  'LBL_REPEAT_DOW' => 'Répétition depuis',
  'LBL_REPEAT_END' => 'Fin',
  'LBL_REPEAT_END_AFTER' => 'Après',
  'LBL_REPEAT_END_BY' => 'Le',
  'LBL_REPEAT_INTERVAL' => 'Répétition intervalle',
  'LBL_REPEAT_OCCURRENCES' => 'occurrences',
  'LBL_REPEAT_PARENT_ID' => 'Répétition ID parent',
  'LBL_REPEAT_TYPE' => 'Répétition type',
  'LBL_REPEAT_UNTIL' => 'Répétition jusque',
  'LBL_SCHEDULING_FORM_TITLE' => 'Planification',
  'LBL_SEARCH_BUTTON' => 'Rechercher',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Réunion',
  'LBL_SEND_BUTTON_KEY' => 'I',
  'LBL_SEND_BUTTON_LABEL' => 'Envoyer Invitations',
  'LBL_SEND_BUTTON_TITLE' => 'Envoyer les invitations [Alt+I]',
  'LBL_SEND_INVITES' => 'Envoyer Invitations',
  'LBL_SEQUENCE' => 'Fréquence de mise à jour de la réunion',
  'LBL_STATUS' => 'Statut:',
  'LBL_SUBJECT' => 'Sujet:',
  'LBL_SYNCED_RECURRING_MSG' => 'Cette réunion provient d&#39;une application externe et a été synchronisé avec Sugar. Une fois éditer dans Sugar, cette réunion ne sera plus synchronisée avec cette application externe.',
  'LBL_TIME' => 'Heure de début:',
  'LBL_TYPE' => 'Type',
  'LBL_URL' => 'Démarrer/rejoindre la réunion',
  'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
  'LNK_IMPORT_MEETINGS' => 'Import Réunions',
  'LNK_MEETING_LIST' => 'Réunions',
  'LNK_NEW_APPOINTMENT' => 'Planifier Rendez-vous',
  'LNK_NEW_MEETING' => 'Planifier Réunion',
  'NOTICE_DURATION_TIME' => 'La durée doit être supérieur à 0',
  'NTC_REMOVE_INVITEE' => 'Etes-vous sûr(e) de vouloir supprimer ce participant de la réunion ?',
);

