<?php

return [
    'app' => [
        'name' => 'October CMS',
        'tagline' => 'Getting back to basics',
    ],
    'locale' => [
        'en' => 'English',
        'nl' => 'Dutch',
        'ja' => 'Japanese',
        'se' => 'Swedish',
        'tr' => 'Turkish',
        'de' => 'German',
        'ru' => 'Russian',
        'fr' => 'French',
        'it' => 'Italian',
        'ro' => 'Romana',
        'pt-br' => 'Brazilian Portuguese',
        'fa' => 'Persian',
        'nb-no' => 'Norska (Bokmål)'
    ],
    'directory' => [
        'create_fail' => "Kunde inte skapa mapp: :name",
    ],
    'file' => [
        'create_fail' => "Kunde inte skapa fil: :name",
    ],
    'combiner' => [
        'not_found' => "Kombinationsfilen ':name' kunde ej hittas",
    ],
    'system' => [
        'name' => 'System',
        'menu_label' => 'System',
    ],
    'plugin' => [
        'unnamed' => 'Namnlöst plugin',
        'name' => [
            'label' => 'Plugin-namn',
            'help' => 'Namnge pluginet efter dess unika kod. Exempelvis RainLab.Blog',
        ],
    ],
    'project' => [
        'name' => 'Projekt',
        'owner_label' => 'Ägare',
        'attach' => 'Länka projekt',
        'detach' => 'Avlänka projekt',
        'none' => 'Inget',
        'id' => [
            'label' => 'Projekt-ID',
            'help' => 'Hur du hittar ditt Projekt-ID',
            'missing' => 'Var god välj ett Projekt-ID',
        ],
        'detach_confirm' => 'Vill du verkligen avlänka detta projekt?',
        'unbind_success' => 'Projektet har blivit avlänkat',
    ],
    'settings' => [
        'menu_label' => 'Inställningar',
        'missing_model' => 'Inställningssidan saknar en modell-definition',
        'update_success' => 'Inställningar för :name har uppdaterats',
        'return' => 'Återgå till systeminställningar',
    ],
    'email' => [
        'menu_label' => 'Epost-konfiguration',
        'menu_description' => 'Hantera epost-inställningar',
        'general' => 'Generellt',
        'method' => 'Email-metod',
        'sender_name' => 'Avsändarnamn',
        'sender_email' => 'Avsändarens epost-adress',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP-adress',
        'smtp_authorization' => 'SMTP-autentisering krävs',
        'smtp_authorization_comment' => 'Om din server kräver autentisering, markerar du denna checkbox',
        'smtp_username' => 'Användarnamn',
        'smtp_password' => 'Lösenord',
        'smtp_port' => 'SMTP-port',
        'smtp_ssl' => 'SSL-anslutning krävs',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail-sökväg',
        'sendmail_path_comment' => 'Var god ange sökvägen till sendmail',
    ],
    'install' => [
        'project_label' => 'Länka till Projekt',
        'plugin_label' => 'Installera Plugin',
        'missing_plugin_name' => 'Välj ett plugin-namn att installera',
        'install_completing' => 'Installationen är klar',
        'install_success' => 'Pluginet har installerats',
    ],
    'updates' => [
        'title' => 'Hantera uppdateringar',
        'name' => 'Uppdatera mjukvara',
        'menu_label' => 'Uppdateringar',
        'check_label' => 'Kontrollera uppdateringar',
        'retry_label' => 'Försök igen',
        'plugin_name' => 'Namn',
        'plugin_description' => 'Beskrivning',
        'plugin_version' => 'Version',
        'plugin_author' => 'Skapare',
        'core_build' => 'Nuvarande build',
        'core_build_old' => 'Nuvarande build :build',
        'core_build_new' => 'Build :build',
        'core_build_new_help' => 'Senaste build är tillgänglig.',
        'core_downloading' => 'Laddar ner applikationsfiler',
        'core_extracting' => 'Packar upp applikationsfiler',
        'plugin_downloading' => 'Laddar ner plugin: :name',
        'plugin_extracting' => 'Packar upp plugin: :name',
        'plugin_version_none' => 'Nytt plugin',
        'plugin_version_old' => 'Nuvarande v:version',
        'plugin_version_new' => 'v:version',
        'update_label' => 'Updatera mjukvara',
        'update_completing' => 'Slutför uppdatering',
        'update_loading' => 'Laddar tillgängliga uppdateringar...',
        'update_success' => 'Uppdateringen är slutförd.',
        'update_failed_label' => 'Updateringen misslyckades',
        'force_label' => 'Tvinga uppdatering',
        'found' => [
            'label' => 'Hittade nya uppdateringar!',
            'help' => 'Klicka på Uppdatera mjukvara för att påbörja uppdateringen.',
        ],
        'none' => [
            'label' => 'Inga uppdateringar',
            'help' => 'Inga nya uppdateringar hittades.',
        ],
    ],
    'server' => [
        'connect_error' => 'Ett fel uppstod vid anslutning till servern.',
        'response_not_found' => 'Uppdateringsserver kunde ej hittas.',
        'response_invalid' => 'Felaktigt svar från servern.',
        'response_empty' => 'Tomt svar från servern.',
        'file_error' => 'Servern kunde inte leverera paketet.',
        'file_corrupt' => 'Filen från servern är korrupt.',
    ],
    'behavior' => [
        'missing_property' => 'Klassen :class måste definera egenskapen $:property som används av :behavior -egenskapen',
    ],
    'config' => [
        'not_found' => 'Kunde inte hitta konfigurationsfilen :file definerad för :location',
        'required' => 'Konfigurationen som används i :location måste sända med ett värde :property',
    ],
    'zip' => [
        'extract_failed' => "Kunde inte packa upp core-fil ':file'.",
    ],
];
