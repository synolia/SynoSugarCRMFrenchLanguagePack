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
	'ADVANCED'												=> 'Avancé',
  'CURRENT_LOGO' => 'Logo actuel',
  'CURRENT_LOGO_HELP' => 'Ce logo est affiché dans le coin en haut à gauche de votre application SugarCRM.',
  'DEFAULT_CURRENCY' => 'Devise par défaut',
	'DEFAULT_CURRENCY_ISO4217'								=> 'Code devise ISO 4217',
	'DEFAULT_CURRENCY_NAME'									=> 'Nom de la devise',
	'DEFAULT_CURRENCY_SYMBOL'								=> 'Symbole de la devise',
	'DEFAULT_DATE_FORMAT'									=> 'Format de date par défaut',
	'DEFAULT_DECIMAL_SEP'									=> 'Symbole décimal',
	'DEFAULT_LANGUAGE'										=> 'Langue par défault language',
	'DEFAULT_NUMBER_GROUPING_SEP'							=> 'Séparateur de millier',
  'DEFAULT_OC_STATUS' => 'Activer le Client Offline par défaut',
	'DEFAULT_SYSTEM_SETTINGS'								=> 'Interface Utilisateur',
	'DEFAULT_THEME'											=> 'Thème par défaut',
	'DEFAULT_TIME_FORMAT'									=> 'Format de l&#39;heure par défaut',
  'DEVELOPER_MODE' => 'Mode Développeur',
	'DISPLAY_RESPONSE_TIME'									=> 'Afficher les temps de réponse serveur',
  'ERR_ALERT_FILE_UPLOAD' => 'Erreur durant l&#39;upload de l&#39;image.',
  'ERR_DELETE_CORE_FILE' => 'ERREUR: Il n&#39;est pas possible de supprimer une police système.',
  'ERR_EZPDF_DISABLE' => 'Attention : La classe EZPDF est désactivée dans la table de configuration mais elle est définie comme la classe par défaut pour générer des PDFs. Veuillez "Sauvegarder" ce formulaire pour positionner TCPDF comme la classe de génération des PDFs et ainsi retourner à un état stable.',
  'ERR_FONT_ALREADY_EXIST' => 'ERREUR : Cette Police existe déjà.',
  'ERR_FONT_EMPTYFILE' => 'ERREUR: Nom de fichier vide !',
  'ERR_FONT_FILE_DO_NOT_EXIST' => 'n&#39;existe pas ou n&#39;est pas un répertoire.',
  'ERR_FONT_MAKEFONT' => 'ERREUR: erreur MakeFont',
  'ERR_FONT_NOT_WRITABLE' => 'n&#39;est pas modifiable.',
  'ERR_FONT_UNKNOW_TYPE' => 'ERREUR: Type de Police inconnu :',
  'ERR_LOADFONTFILE' => 'ERREUR: erreur LoadFontFile!',
  'ERR_MISSING_CIDINFO' => 'Le champ Information CID Information ne peut être vide.',
  'ERR_NO_CUSTOM_FONT_PATH' => 'ERREUR: Le chemin personnalisé vers la Police n&#39;est pas disponible !',
  'ERR_NO_FONT_PATH' => 'ERREUR: Le chemin vers la Police n&#39;est pas disponible !',
  'ERR_PDF_NO_UPLOAD' => 'Une erreur est survenue durant le téléchargement du fichier de la Police ou de son unité de mesure.',
  'HEAD_MAGNIFICATION' => 'Grossissement des en-têtes',
  'HEAD_MAGNIFICATION_INFO' => 'Facteur de grossissement pour les titres.',
  'IMAGES' => 'Logos',
  'JS_ALERT_PDF_WRONG_EXTENSION' => 'Ce fichier n&#39;a pas une extension autorisées.',
  'K_CELL_HEIGHT_RATIO' => 'Ratio pour la hauteur des cellules',
  'K_CELL_HEIGHT_RATIO_INFO' => 'Si la hauteur d&#39;une cellule est plus petite que (Hauteur Police x Ration Hauteur Cellule), alors (Hauteur Police x Ratio Hauteur Cellule) est utilisé pour la hauteur de la cellule.<br>(Hauteur Police x Ration Hauteur Cellule) est aussi utilisé comme hautre de la cellule quand aucune hauteur de cellule n&#39;est définit.',
  'K_SMALL_RATIO' => 'Facteur pour les polices de petites tailles',
  'K_SMALL_RATIO_INFO' => 'Facteur de réduction pour les polices de petites tailles.',
  'K_TITLE_MAGNIFICATION' => 'Grossissement des Titres',
  'K_TITLE_MAGNIFICATION_INFO' => 'Le grossissement des titres respecte la taille de la police principale.',
  'LBL_ADDFONTRESULT_TITLE' => 'Résultat du processus d&#39;ajout de Police',
  'LBL_ADDFONT_TITLE' => 'Ajouter une Police pour les PDFs',
  'LBL_ADD_FONT' => 'Ajouter une Police',
  'LBL_ADD_FONT_BUTTON' => 'Ajouter',
	'LBL_ADMIN_WIZARD'										=> 'Assistant Administration',
  'LBL_ALERT_JPG_IMAGE' => 'Le format de fichier image doit être JPEG. Uploader un nouveau fichier avec une extention .jpg.',
  'LBL_ALERT_SIZE_RATIO' => 'Le ration d&#39;aspect de l&#39;image doit être compris entre 1:1 et 10:1. L&#39;image doit être retaillée.',
  'LBL_ALERT_SIZE_RATIO_QUOTES' => 'Le ration d&#39;aspect de l&#39;image doit être compris entre 3:1 et 20:1. Uploader une nouvelle image avec ce ratio.',
  'LBL_ALERT_TYPE_IMAGE' => 'Le format de fichier image doit être JPEG ou PNG. Uploader un nouveau fichier avec l&#39;extention .jpg ou .png.',
  'LBL_ALL' => 'Tous',
  'LBL_ALLOW_DEFAULT_SELECTION' => 'Autoriser les utilisateurs à utiliser ces paramétres pour l&#39;envoi d&#39;emails:',
  'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Lorsque cette option est sélectionnée, tous les utilisateurs seront en mesure d&#39;envoyer des emails en utilisant le même serveur d&#39;envoi d&#39;emails, ces paramétres sont aussi utilisé pour envoyer les notifications et les alertes du système. Si cette option n&#39;est pas sélectionnée, les utilisateurs pourront toujours utiliser le serveur d&#39;envoi d&#39;emails de leurs choix après avoir fourni leurs informations dans leur compte utilisateur.',
	'LBL_ALLOW_USER_TABS'									=> 'Autoriser les utilisateurs à masquer les onglets',
  'LBL_BACK' => 'Revenir en arrière',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie:',
	'LBL_CONFIGURE_SETTINGS_TITLE'							=> 'Configuration',
  'LBL_CONFIG_AJAX' => 'Configurer l&#39;interface utilisateur en AJAX',
  'LBL_CONFIG_AJAX_DESC' => 'Activer ou désactiver l&#39;utilisation de l&#39;interface utilisateur en AJAX pour certains modules',
  'LBL_DELETE' => 'Supprimer',
  'LBL_DISALBE_CONVERT_LEAD' => 'Désactiver l&#39;action de conversion de Lead pour les Leads convertis',
  'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Si un Lead a déjà été converti, activer cette option supprimera l&#39;action de conversion de Lead',
  'LBL_DISPLAYING_LOG' => 'Afficher les logs',
  'LBL_ENABLE_ACTION_MENU' => 'Afficher les actions dans les menus',
  'LBL_ENABLE_ACTION_MENU_DESC' => 'Sélectionnez pour afficher les actions dans une liste de menu. Si dé-sélectionné, les actions seront affichées dans des boutons indépendants.',
  'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Voir les emails des Contacts liés dans le sous panel historique des modules',
	'LBL_ENABLE_MAILMERGE'									=> 'Autoriser le publipostage',
  'LBL_EXCHANGE_LOGO' => 'Exchange',
  'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe:',
  'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP:',
  'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur SMTP:',
  'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom Utilisateur:',
  'LBL_FONTMANAGER_BUTTON' => 'Gestionnaire de police pour les PDFs',
  'LBL_FONTMANAGER_TITLE' => 'Gestionnaire de police pour les PDFs',
  'LBL_FONT_BOLD' => 'Gras',
  'LBL_FONT_BOLDITALIC' => 'Gras/Italisque',
  'LBL_FONT_ITALIC' => 'Italique',
  'LBL_FONT_LIST_CIDINFO' => 'Informations CID',
  'LBL_FONT_LIST_CIDINFO_INFO' => 'Exemples :<ul><li>Chinois Traditionnel :<br><pre>$enc=\\&#39;UniCNS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;CNS1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ac15.php\\&#39;);</pre></li><li>Chinois Simplifié :<br><pre>$enc=\\&#39;UniGB-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;GB1\\&#39;,\\&#39;Supplement\\&#39;=>2);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ag15.php\\&#39;);</pre></li><li>Coréen :<br><pre>$enc=\\&#39;UniKS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Korea1\\&#39;,\\&#39;Supplement\\&#39;=>0);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_ak12.php\\&#39;);</pre></li><li>Japonais :<br><pre>$enc=\\&#39;UniJIS-UTF16-H\\&#39;;<br>$cidinfo=array(\\&#39;Registry\\&#39;=>\\&#39;Adobe\\&#39;, \\&#39;Ordering\\&#39;=>\\&#39;Japan1\\&#39;,\\&#39;Supplement\\&#39;=>5);<br>include(\\&#39;include/tcpdf/fonts/uni2cid_aj16.php\\&#39;);</pre></li></ul>Obtenir plus d&#39;aide : www.tcpdf.org',
  'LBL_FONT_LIST_EMBEDDED' => 'Inclure la police',
  'LBL_FONT_LIST_EMBEDDED_INFO' => 'Cocher cette case pour inclure la police dans le fichier PDF',
  'LBL_FONT_LIST_ENC' => 'Encodage',
  'LBL_FONT_LIST_FILENAME' => 'Nom du fichier',
  'LBL_FONT_LIST_FILESIZE' => 'Taille de la police (KB)',
  'LBL_FONT_LIST_NAME' => 'Nom',
  'LBL_FONT_LIST_STYLE' => 'Style',
  'LBL_FONT_LIST_STYLE_INFO' => 'Style de la police',
  'LBL_FONT_LIST_TYPE' => 'Type',
  'LBL_FONT_MOVE_DEFFILE' => 'Le fichier de définition de la Police a été déplacé vers :',
  'LBL_FONT_MOVE_FILE' => 'Le fichier de la Police a été déplacé vers :',
  'LBL_FONT_REGULAR' => 'Normal',
  'LBL_FONT_TYPE_CID0' => 'CID-0',
  'LBL_FONT_TYPE_CORE' => 'Core',
  'LBL_FONT_TYPE_TRUETYPE' => 'TrueType',
  'LBL_FONT_TYPE_TRUETYPEU' => 'TrueTypeUnicode',
  'LBL_FONT_TYPE_TYPE1' => 'Type1',
  'LBL_GMAIL_LOGO' => 'Gmail',
  'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe:',
  'LBL_GMAIL_SMTPUSER' => 'Gmail - Email:',
  'LBL_IGNORE_SELF' => 'Ignorer :',
  'LBL_IMG_RESIZED' => '(redimensionné à l&#39;affichage)',
  'LBL_IMPORT_MAX_RECORDS' => 'Import - Nombre maximum de lignes:',
  'LBL_IMPORT_MAX_RECORDS_HELP' => 'Précise le nombre de lignes qui est autorisé pour les imports de fichiers. Si le nombre de lignes <br>dans un fichier à importer dépasse ce nombre, l&#39;utilisateur est alerté. Si aucun nombre <br>n&#39;est précisé il n&#39;y a pas de limite pour l&#39;import.',
  'LBL_IT_WILL_BE_IGNORED' => 'elle sera ignorée',
  'LBL_JS_CONFIRM_DELETE_FONT' => 'Etes-vous sûr(e) de vouloir supprimer cette Police ?',
  'LBL_LDAP_ADMIN_PASSWORD' => 'Mot de passe:',
  'LBL_LDAP_ADMIN_USER' => 'Nom d&#39;utilisateur :',
  'LBL_LDAP_ADMIN_USER_DESC' => 'Utilisé pour rechercher un utilisateur SugarCRM. [Doit être entièrement qualifié]. Une connexion anonyme sera réalisée si non fourni.',
  'LBL_LDAP_AUTHENTICATION' => 'Authentification:',
  'LBL_LDAP_AUTHENTICATION_DESC' => 'Se connecter au serveur LDAP en utilisant les identifiants spécifiés',
  'LBL_LDAP_AUTO_CREATE_USERS' => 'Création automatique des Utilisateurs:',
  'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Si un utilisateur authentifié n&#39;existe pas il sera créé dans SugarCRM.',
  'LBL_LDAP_BIND_ATTRIBUTE' => 'Attribut de connexion :',
  'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Exemples d&#39;attribut utilisateur LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;userPrincipalName] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid]',
  'LBL_LDAP_ENABLE' => 'Activer le support de LDAP',
  'LBL_LDAP_ENC_KEY' => 'Clé de cryptage:',
  'LBL_LDAP_ENC_KEY_DESC' => 'Pour l&#39;authentification SOAP utilisant LDAP et les Plugins.',
  'LBL_LDAP_GROUP_ATTR' => 'Attribut de Groupe :',
  'LBL_LDAP_GROUP_ATTR_DESC' => 'L&#39;attribut de Groupe qui sera utilisé pour filtrer en plus de l&#39;attribut Utilisateur. Exemple : <em>memberUid</em>',
  'LBL_LDAP_GROUP_DN' => 'Groupe DN:',
  'LBL_LDAP_GROUP_DN_DESC' => 'Exemple: <em>ou=groups,dc=example,dc=com</em>',
  'LBL_LDAP_GROUP_MEMBERSHIP' => 'Membre du Groupe :',
  'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Les utilisateurs doivent être membre d&#39;un groupe spécifique',
  'LBL_LDAP_GROUP_NAME' => 'Nom du Groupe :',
  'LBL_LDAP_GROUP_NAME_DESC' => 'Exemple <em>cn=sugarcrm</em>',
  'LBL_LDAP_GROUP_USER_ATTR' => 'Attribut Utilisateur :',
  'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'L&#39;identifiant unique de personne qui sera utilisé pour vérifier si l&#39;utilisateur est membmre du groupe. Exemple: <em>uid</em>',
  'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Attribut du Login :',
  'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Exemples de recherche d&#39;un utilisateur LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn]',
  'LBL_LDAP_SERVER_HOSTNAME' => 'Serveur:',
  'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Exemple: ldap.example.com ou ldaps://ldap.example.com pour une connexion SSL',
  'LBL_LDAP_SERVER_PORT' => 'Numéro du port:',
  'LBL_LDAP_SERVER_PORT_DESC' => 'Exemple: <em>389 ou 636 pour du SSL</em>',
  'LBL_LDAP_TITLE' => 'Authentification LDAP',
  'LBL_LDAP_USER_DN' => 'User DN:',
  'LBL_LDAP_USER_DN_DESC' => 'Exemple: <em>ou=people,dc=example,dc=com</eM>',
  'LBL_LDAP_USER_FILTER' => 'Filtre Utilisateur :',
  'LBL_LDAP_USER_FILTER_DESC' => 'Tous paramètres additionnels à appliquer lors de l&#39;authentification des utilisateurs exemple <em>is_sugar_user=1 ou (is_sugar_user=1)(is_sales=1)</em>',
  'LBL_LEAD_CONV_OPTION' => 'Options pour la conversion de Lead',
  'LBL_LOADING' => 'Chargement...',
  'LBL_LOGGER' => 'Fichier de logs',
  'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Format de la date stockée dans le fichier de logs',
  'LBL_LOGGER_FILENAME' => 'Nom du fichier de logs',
  'LBL_LOGGER_FILENAME_SUFFIX' => 'Suffixe ajouté à la fin du nom de fichier de logs (B)',
  'LBL_LOGGER_FILE_EXTENSION' => 'Extension du fichier de logs',
  'LBL_LOGGER_LOG_LEVEL' => 'Niveau des Logs',
  'LBL_LOGGER_MAX_LOGS' => 'Nombre de fichiers de logs avant rotation',
  'LBL_LOGGER_MAX_LOG_SIZE' => 'Taille Maximum du fichier de logs',
  'LBL_LOGO' => 'Logo',
	'LBL_LOGVIEW'											=> 'Accéder aux Logs',
  'LBL_LOG_NOT_CHANGED' => 'les logs n&#39;ont pas changé',
  'LBL_MAILMERGE' => 'Publipostage',
  'LBL_MAILMERGE_DESC' => 'Vous devez disposer du Plug-in SugarCRM pour Microsoft&reg; Word&reg; pour pouvoir activer cette fonctionnalité.',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l&#39;authentification SMTP?',
  'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
	'LBL_MAIL_SMTPPORT'										=> 'Port SMTP:',
	'LBL_MAIL_SMTPSERVER'									=> 'Serveur SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Type SMTP:',
	'LBL_MAIL_SMTPUSER'										=> 'SMTP login:',
	'LBL_MAIL_SMTP_SETTINGS'								=> 'Configuration SMTP',
  'LBL_MARKING_WHERE_START_LOGGING' => 'Marquer l&#39;endroit où commancer les logs',
  'LBL_MARK_POINT' => 'Marqueur',
  'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Intervalle minimal de rafraîchissement des Dashlet',
  'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Il s&#39;agit de la valeur minimale possible pour le rafraîchissement automatique des Dashlets. Configurer cette valeur à "Jamais" désactive entièrement le rafraîchissement automatique des Dashlets.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION' => '* Le module Rapports n&#39;est disponible que pour l&#39;application spécifique aux téléphones portables type iPhone.',
  'LBL_MOBILE_MOD_REPORTS_RESTRICTION2' => '* Le module de Rapports est indisponible pour la vue navigateur mobile.',
	'LBL_MODULE_FAVICON'									=> 'Afficher l&#39;îcone du module comme favicon',
	'LBL_MODULE_FAVICON_HELP'								=> 'Si vous êtes dans un module ayant une îcone, cela affiche l&#39;îcone du module comme favicon, à la place du favicon du thème, dans la barre d&#39;adresse du navigateur.',
  'LBL_MODULE_ID' => 'Configurateur',
	'LBL_MODULE_NAME'										=> 'Paramètres de configuration',
  'LBL_MODULE_NAME_SINGULAR' => 'Paramètre système',
	'LBL_MODULE_TITLE'										=> 'Interface Utilisateur',
  'LBL_NEXT_' => 'Suivant >>',
	'LBL_NOTIFY_FROMADDRESS'								=> '"From" Email:',
	'LBL_NOTIFY_SUBJECT'									=> 'Sujet Email:',
  'LBL_OC_STATUS' => 'Statut par défaut du Client Offline',
  'LBL_OC_STATUS_DESC' => 'Cochez cette case si vous souhaitez que tous les utilisateurs actifs aient accès au Client Offline.<br />Vous pouvez aussi configurer les accès au niveau de l&#39;utilisateur.<br />Note: vous devez acquérir le Client Offline pour pouvoir utiliser cette option.',
  'LBL_PDFMODULE_NAME' => 'Paramètres PDF',
  'LBL_PDF_ENCODING_TABLE' => 'Table d&#39;encodage',
  'LBL_PDF_ENCODING_TABLE_INFO' => 'Nom de la table d&#39;encodage.<br>Cette option est ignoré pour les polices TrueType Unicode, OpenType Unicode et symbolic.<br>L&#39;encodage définit l&#39;association entre un code (de 0 à 255) et le caractère contenu dans la police.<br>Les 128 premiers caractèressont fixe et correspdonde aux caractères ASCII.',
  'LBL_PDF_FONT_FILE' => 'Fichier pour la Police',
  'LBL_PDF_FONT_FILE_INFO' => 'fichier .ttf ou .otf ou .pfb',
  'LBL_PDF_INSTRUCTIONS' => 'Instructions',
  'LBL_PDF_METRIC_FILE' => 'Fichier pour l&#39;unité de mesure',
  'LBL_PDF_METRIC_FILE_INFO' => 'fichier .afm ou .ufm',
  'LBL_PDF_PATCH' => 'Patch',
  'LBL_PDF_PATCH_INFO' => 'Personnalisation de la#39;encodage. Ecrire un tableau PHP.<br>Exemple :<br>ISO-8859-1 ne contient pas le symbole euro. Pour ajouter celui-ci à la position 164, écrire"array(164=>\\&#39;Euro\\&#39;)".',
  'LBL_PORTAL_ON' => 'Activer la gestion des Utilisateurs API Portail',
	'LBL_PORTAL_ON_DESC'									=> 'Permettre les connexions des Contacts au travers des utilisateurs Portail. Les utilisateurs Portails donnent accès aux Tickets, Bugs, Base de Connaissance et autres données au travers de l&#39;application portail SugarCRM<br>Note: fonctionnalité accessible en édition ENTREPRISE uniquement.',
	'LBL_PORTAL_TITLE'										=> 'Portail Client Libre-Service',
  'LBL_PROXY_AUTH' => 'Le proxy nécessite-t-il une authentification ?',
  'LBL_PROXY_HOST' => 'Adresse du proxy',
  'LBL_PROXY_ON' => 'Utiliser un serveur proxy ?',
	'LBL_PROXY_ON_DESC'										=> 'Définissez les paramètres du proxy.',
	'LBL_PROXY_PASSWORD'									=> 'Mot de Passe',
  'LBL_PROXY_PORT' => 'Port',
  'LBL_PROXY_TITLE' => 'Réglages proxy',
	'LBL_PROXY_USERNAME'									=> 'Nom Utilisateur',
  'LBL_REFRESH_FROM_MARK' => 'Rafraichir depuis le Marqueur',
  'LBL_REG_EXP' => 'Reg Exp :',
  'LBL_REMOVE' => 'Suppr',
	'LBL_RESTORE_BUTTON_LABEL'								=> 'Réinitialiser',
  'LBL_SEARCH' => 'Rechercher :',
  'LBL_SESSION_TIMEOUT_TOOLTIP' => 'La durée de session pour le Portail est valable uniquement pour les anciennes version du Portail SugarCRM 6.5 et précédentes',
  'LBL_SKYPEOUT_ON' => 'Activer l&#39;intégration de SkypeOut&reg; ?',
  'LBL_SKYPEOUT_ON_DESC' => 'Autorise les utilisateurs à cliquer sur les numéros de téléphone pour appeler les contacts par SkypeOut&reg;. Le numéro doit être formaté correctement pour utiliser cette fonctionnalité. Le format est "+" "Code Pays" "numéro de téléphone" (exemple pour la France : +33427705370). Pour plus d&#39;informations sur le format visitez <a href="http://www.skype.com/intl/fr/help/" target="skype">le site skype&reg;</a>',
  'LBL_SKYPEOUT_TITLE' => 'SkypeOut&reg;',
  'LBL_STATUS_FONT_ERROR' => 'ERREUR : La police n&#39;a pas pu être ajoutée. Vous trouverez plus d&#39;informations dans les logs ci-dessous.',
  'LBL_STATUS_FONT_SUCCESS' => 'SUCCES : La police a été ajoutée à SugarCRM.',
	'LBL_SYSTEM_SETTINGS'									=> 'Paramètres Système',
	'LBL_USE_REAL_NAMES'									=> 'Par défaut voir le "Nom Complet" des utilisateurs et non pas leur login',
	'LBL_USE_REAL_NAMES_DESC'								=> 'Par défaut voir le "Nom Complet" des utilisateurs dans les champs Assigné à',
  'LBL_VCAL_PERIOD' => 'Période de mise à jour vCal:',
  'LBL_WELCOME' => 'Bienvenue',
	'LBL_WIRELESS_LIST_ENTRIES'								=> 'Nombre maximum d&#39;élements affichés par page dans les vues "Liste" (Client Mobile)',
  'LBL_WIRELESS_SERVER_URL' => 'Serveur Sugar Mobile Edge',
	'LBL_WIRELESS_SUBPANEL_LIST_ENTRIES'					=> 'Nombre maximum d&#39;élements affichés dans les "Sous-Panels" (Client Mobile)',
  'LBL_WIZARD_BACK_BUTTON' => '< Précédent',
  'LBL_WIZARD_CONTINUE_BUTTON' => 'Continuer',
  'LBL_WIZARD_FINISH' => 'Cliquez <b>Continuer</b> pour configurer vos paramétres personnels.<br/><br />Pour configurer les paramètres système supplémentaires, cliquez <a href="index.php?module=Administration&action=index" target="_blank">ici</a>.',
  'LBL_WIZARD_FINISH_BUTTON' => 'Terminer',
  'LBL_WIZARD_FINISH_TAB' => 'Terminer',
  'LBL_WIZARD_FINISH_TITLE' => 'La configuration de base de votre application est terminée',
  'LBL_WIZARD_LOCALE_DESC' => 'Précisez comment vous souhaitez afficher vos données dans SugarCRM, basé sur votre situation géographique. Les paramètres que vous fournissez ici seront les paramètres par défaut. Les utilisateurs pourront définir leurs propres préférences dans Mon compte.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Suivant >',
  'LBL_WIZARD_SKIP_BUTTON' => 'Passer',
  'LBL_WIZARD_SMTP_DESC' => 'Fournissez le compte de messagerie qui sera utilisé pour envoyer des emails, tels que les notifications d&#39;assignations et les mots de passe des nouveaux utilisateurs. Les utilisateurs recevront les emails de SugarCRM envoyés à partir du compte email spécifié.',
  'LBL_WIZARD_SYSTEM_DESC' => 'Fournissez le nom et le logo de votre organisation afin de personnaliser votre SugarCRM.',
  'LBL_WIZARD_SYSTEM_TITLE' => 'Identité visuelle',
  'LBL_WIZARD_TITLE' => 'Admin Wizard',
  'LBL_WIZARD_WELCOME' => 'Cliquez sur <b>Suivant</b> pour personnaliser et configurer SugarCRM maintenant. Si vous souhaitez configurer SugarCRM plus tard, cliquez <b>Passer</b>.',
  'LBL_WIZARD_WELCOME_TAB' => 'Bienvenue',
  'LBL_WIZARD_WELCOME_TITLE' => 'Bienvenue dans SugarCRM!',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe:',
  'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail - Email:',
  'LBL_YAHOO_MAIL' => 'Yahoo Mail',
  'LBL_YOUR_IP_ADDRESS' => 'Votre adresse IP est',
  'LBL_YOUR_PROCESS_ID' => 'Votre identifiant de process',
  'LDAP_ENC_KEY_NO_FUNC_DESC' => 'L&#39;extension php_mcrypt doit être activée dans votre fichier php.ini.',
  'LEAD_CONV_OPT_HELP' => '<b>Copier</b> - Crée et lie les copies de toutes les activités du Lead aux nouveaux enregistrements sélectionnés par l&#39;utilisateur durant la conversion du Lead. Les copies sont créées pour chacun des enregistrement sélectionnés.<br><br><b>Déplacer</b> - Déplace toutes les activités du Lead vers le nouvel enregistrement qui est sélectionné par l&#39;utilisateur durant la conversion..<br><br><b>Ne rien faire</b> - Ne fais rien avec les activités du Lead durant la conversion. Les activités restent attachées seulement au Lead.',
  'LIST_ENTRIES_PER_LISTVIEW' => 'Nombre maximum d&#39;élements affichés par page dans les vues "Liste"',
  'LIST_ENTRIES_PER_SUBPANEL' => 'Nombre maximum d&#39;élements affichés dans les "Sous-Panels"',
  'LOCK_HOMEPAGE' => 'Brider la personnalisation de la page d&#39;accueil',
  'LOCK_HOMEPAGE_HELP' => 'Cochez cette case afin d&#39;empêcher les utilisateurs:<br /> 1) d&#39;ajouter de nouveaux onglets et dashlets sur la page d&#39;accueil (Pro et Entreprise).<br />2) de modifier la disposition des Dashlets par glisser-déposer.<br />',
  'LOCK_SUBPANELS' => 'Empêcher la modification de la position des sous-panels',
	'LOG_MEMORY_USAGE'										=> 'Tracer l&#39;utilisation de la mémoire',
	'LOG_SLOW_QUERIES'										=> 'Tracer les requêtes considérées comme lentes',
  'MAX_DASHLETS' => 'Nombre maximal de dashlets affichés sur la page d&#39;accueil',
  'NEW_LOGO' => 'Choisissez logo (450x17)',
  'NEW_LOGO_HELP' => 'Le format des images doit être .png ou .jpg.<br />La taille maximum est 450x17 px. Les images plus large ou haute seront redimensionnées à ces dimensions maximum.',
  'NEW_LOGO_HELP_NO_SPACE' => 'Le format de l&#39;image doit être .png ou .jpg. La hauteur maximale est de 17px, et la largeur maximale est de 450px. Toutes images ayant une résolution supérieure à ces valeurs sera redimensionnée. Le nom du fiche ne peut pas contenir de caractère espace.',
	'NEW_QUOTE_LOGO'										=> 'Utiliser un autre logo pour les Devis (867x74)',
  'NEW_QUOTE_LOGO_HELP' => 'Le format image requis est .jpg.<br />La taille recommandé est 867x74 px.',
  'PDF_ACL_ACCESS' => 'Contrôle d&#39;accès',
  'PDF_ACL_ACCESS_INFO' => 'Contrôle d&#39;accès par défaut pour la génération de PDF.',
  'PDF_AUTHOR' => 'Auteur',
  'PDF_AUTHOR_INFO' => 'L&#39;auteur apparait dans les propriétés du document PDF.',
  'PDF_COMPRESSION' => 'Compression',
  'PDF_COMPRESSION_INFO' => 'Activer ou désactiver la compression des pages. <br>Lorsque la compression est activée, la taille du document final est généralement divisée par 2.',
  'PDF_CREATOR' => 'Créateur du PDF',
	'PDF_CREATOR_INFO'										=> 'Créateur du document. <br>Il s&#39;agit classiquement du nom de l&#39;application qui génère le PDF.',
  'PDF_FILENAME' => 'Nom du fichier',
  'PDF_FILENAME_INFO' => 'Nom par défaut des fichiers PDF générés',
  'PDF_GD_WARNING' => 'Vous n&#39;avez pas la librairie PHP GD installée. Sans la librairie GD, seuls les logos au format JPEG pourront être affichés dans les documents PDF.',
	'PDF_HEADER_LOGO'										=> 'Logo pour les Devis PDF',
	'PDF_HEADER_LOGO_INFO'									=> 'Cette image apparait dans l&#39;en-tête des Devis en PDF.',
	'PDF_HEADER_LOGO_WIDTH'									=> 'Largeur du logo pour les Devis',
	'PDF_HEADER_LOGO_WIDTH_INFO'							=> 'Changez l&#39;échelle du logo qui apparaît dans les Devis. (TCPDF seulement)',
	'PDF_HEADER_STRING'										=> 'En-tête',
	'PDF_HEADER_STRING_INFO'								=> 'Champ Description dans les en-têtes du document',

	'PDF_HEADER_TITLE'										=> 'Titre',
	'PDF_HEADER_TITLE_INFO'									=> 'Champ Titre dans les en-têtes du document',
  'PDF_IMAGE_SCALE_RATIO' => 'Ration d&#39;échelle pour les images',
  'PDF_IMAGE_SCALE_RATIO_INFO' => 'Ration utilisé pour les images',
  'PDF_INSTRUCTIONS_ADD_FONT' => 'Police supportées par SugarPDF :<br /><ul><br /><li>TrueTypeUnicode (UTF-8 Unicode)</li><br /><li>OpenTypeUnicode</li><br /><li>TrueType</li><br /><li>OpenType</li><br /><li>Type1</li><br /><li>CID-0</li><br /></ul><br /><br><br />Si vous choisissez de ne pas inclure votre police dans le PDF, le fichier PDF généré sera plus léger mais une substitution sera effectuée si la police utilisée n&#39;est pas supportée par le lecteur PDF qui ouvrira celui-ci.<br /><br><br><br />Ajouter une police PDF à SugarCRM nécessite de suivre les étapes 1 et 2 de la documentation de TCPDF sur les police, documentation disponible dans la section "DOCS" du site de <a href="http://www.tcpdf.org" target="_blank">TCPDF</a>.<br /><br><br>Les utilitaires pfm2afm et ttf2ufm sont disponible dans la partie fonts/utils du package TCPDF que vous pouvez télécharger dans la section "DOWNLOAD" du site de <a href="http://www.tcpdf.org" target="_blank">TCPDF</a>.<br /><br><br>Chargez le fichier d&#39;unité de mesure généré dans l&#39;étape 2 ainsi que le fichier contenant votre police dans le formulaire ci-dessous.',
  'PDF_JPEG_QUALITY' => 'Qualité JPEG (1-100)',
  'PDF_JPEG_QUALITY_INFO' => 'Positionner la valeur par défaut de la compression JPEG (1-100)',
	'PDF_KEYWORDS'											=> 'Mot(s) Clé(s)',
	'PDF_KEYWORDS_INFO'										=> 'Associer des mots clés au document (généralement de la forme "mot clé 1 mot clé 2...")',
  'PDF_NEW_HEADER_LOGO' => 'Sélectionner une nouvelle image pour les Devis en PDF',
  'PDF_NEW_HEADER_LOGO_INFO' => 'Le format du fichier doit être .jpg ou .png. (Seulement .jpg pour EZPDF)<BR>La taille recommandée est de 867x74 pixels.',
  'PDF_NEW_SMALL_HEADER_LOGO' => 'Sélectionner une nouvelle image pour les rapports en PDF',
  'PDF_NEW_SMALL_HEADER_LOGO_INFO' => 'Le format du fichier doit être .jpg ou .png. (Seulement .jpg pour EZPDF)<br>La taille recommandée est de 450x17 px.',
  'PDF_OWNER_PASSWORD' => 'Mot de passe Propriétaire',
  'PDF_OWNER_PASSWORD_INFO' => 'Si vous positionnez aucun mot de passe, le document pourra être ouvert par n&#39;importe quel utilisateur. <br>Si vous positionnez un mot de passe, le lecteur PDF demandera la saisi de celui-ci avant d&#39;afficher le document.. <br>Le mot de passe Maître, est différent du mot de passe standard car il donne les pleins droits sur le document.',
	'PDF_PDF_VERSION'										=> 'Version de PDF',
	'PDF_PDF_VERSION_INFO'									=> 'Positionner la version de PDF (utiliser une des valeur possibles parmis les références de versions de PDF).',

	'PDF_PROTECTION'										=> 'Protection de Document',
	'PDF_PROTECTION_INFO'									=> 'Positionner la protection des documents générés<br>- copie: autorise la copie du texte et des images dans le presse papier<br>- impression : autorise l&#39;impression<br>- modification: autorise la modification (excepter les annotations et les formulaires)<br>- annotations/formulaires : autorise l&#39;ajout d&~39;annotation ou de formulaire<br>Note : la protection contre la modification est disponible uniquement pour les personnes ayant la version complète da#39;Acrobat.',
  'PDF_SMALL_HEADER_LOGO' => 'Logo pour les Rapports en PDF',
  'PDF_SMALL_HEADER_LOGO_INFO' => 'Cette image apparait dans l&#39;en-tête des Rapports en PDF.<br> Cette image apparait aussi dans le coin en haut à gauche de votre application SugarCRM.',
  'PDF_SMALL_HEADER_LOGO_WIDTH' => 'Largeur du logo pour les Rapports',
  'PDF_SMALL_HEADER_LOGO_WIDTH_INFO' => 'Changez l&#39;échelle du logo qui apparaît dans les Rapports. (TCPDF seulement)',
  'PDF_SUBJECT' => 'Sujet',
  'PDF_SUBJECT_INFO' => 'Champ Sujet dans les propriétés du document.',
  'PDF_TITLE' => 'Titre',
  'PDF_TITLE_INFO' => 'Champ Titre dans les propriétés du document.',
  'PDF_UNIT' => 'Unité de mesure',
  'PDF_UNIT_INFO' => 'Unité de mesure du document',
	'PDF_USER_PASSWORD'										=> 'Mot de passe Utilisateur',
	'PDF_USER_PASSWORD_INFO'								=> 'Si vous positionnez aucun mot de passe, le document pourra être ouvert par n&#39;importe quel utilisateur. <br>Si vous positionnez un mot de passe, le lecteur PDF demandera la saisi de celui-ci avant d&#39;afficher le document.. <br>Le mot de passe Maître, est différent du mot de passe standard car il donne les pleins droits sur le document.',
  'QUOTES_CURRENT_LOGO' => 'Logo utilisé pour les Devis',
  'SESSION_TIMEOUT' => 'Timeout de session sur le Portail',
  'SESSION_TIMEOUT_UNITS' => 'secondes',
  'SHOW_DOWNLOADS_TAB' => 'Afficher l&#39;onglet "Téléchargement"',
  'SHOW_DOWNLOADS_TAB_HELP' => 'Lorsque cette case est cochée, l&#39;onglet "Téléchargement" présent dans sur la fiche utilisateur sera affiché et permettra ainsi aux utilisateurs d&#39;accéder directement aux plug-ins SugarCRM ainsi qu&#39;aux autres fichiers disponibles.',
  'SLOW_QUERY_TIME_MSEC' => 'Seuil des requêtes considérées comme lentes (en msec)',
  'STACK_TRACE_ERRORS' => 'Afficher les erreurs de trace de la pile',
  'SUGARPDF_ADVANCED_SETTINGS' => 'Paramètres avancés',
  'SUGARPDF_BASIC_SETTINGS' => 'Propriétés du document',
  'SUGARPDF_LOGO_SETTINGS' => 'Images',
  'SYSTEM_NAME' => 'Nom du système',
  'SYSTEM_NAME_HELP' => 'C&#39;est le nom qui s&#39;affiche dans la barre de titre de votre navigateur.',
  'SYSTEM_NAME_WIZARD' => 'Nom:',
  'UPLOAD_MAX_SIZE' => 'Taille maximale des "uploads" (vérifier aussi dans votre fichier php.ini)',
  'VERIFY_CLIENT_IP' => 'Valider l&#39;adresse IP utilisateur',
  'vCAL_HELP' => 'Nombre de mois inclus dans la détermination de la disponiblité des utilisateurs<br />Pour ne pas utiliser cette fonctionnalité entrez 0. Le minimum étant 1 mois, le maximum 12 mois.',
);

