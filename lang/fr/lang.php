<?php return [
    'plugin'          => [
        'name'        => 'GDPR et ePrivacy',
        'description' => 'Rendez votre site conforme au RGPD et ePrivacy',
    ],
    'common'          => [
        'enabled'       => 'Activé',
        'disabled'      => 'Désactive',
        'sorted'        => 'Ordre mis à jour avec succès',
        'save_settings' => 'Enregistrer',
    ],
    'cookie_banner'   => [
        'description'         => 'Affiche une bannière pour les cookies',
        'message'             => 'Nous utilisons les cookies pour personnaliser le contenu et analyser notre trafic. Veuillez décider quel type de cookies vous êtes prêt à accepter.',
        'advanced_settings'   => 'Paramètres avancés',
        'decline'             => 'Décliner',
        'accept'              => 'Accepter les cookies',
        'include_css'         => [
            'title'       => 'Inclure le CSS',
            'description' => 'Inclure les styles par défaut pour ce composant',
        ],
        'hard_reload'         => [
            'title'       => 'Rechargement forcé après acceptation',
            'description' => 'Effectuer un rechargement forcé après la décision de l\'utilisateur pour rafraîchir toutes les dépendances.',
        ],
        'update_partial'      => [
            'title'       => 'Modèle de partiel pour rechargement progressif.',
            'description' => 'Ce partiel sera rechargé lorsque l\'utilisateur acceptera.',
        ],
        'update_selector'     => [
            'title'       => 'Sélecteur CSS pour rechargement progressif.',
            'description' => 'Le partiel sera chargé dans cet élément.',
        ],
        'cookie_manager_page' => [
            'title'       => 'Page pour les paramètres avancés',
            'description' => 'Placez le composant cookieManager sur cette page.',
            'empty'       => 'Sans paramètres avancés',
        ],
        'ignore_behaviour'    => [
            'title'       => 'Ignorance de l\'avertissent',
            'description' => 'Utilisez cette action si l\'utilisateur ignore la bannière et ne prend aucune décision.',
            'nothing'     => 'Montrer à nouveau la bannière',
            'opt-in'      => 'Opt-in (activer les cookies par défaut)',
            'opt-out'     => 'Opt-out (ne pas activer les cookies)',
        ],
    ],
    'cookie_manager'  => [
        'description' => 'Affiche une vue d\'ensemble et la possibilité de modifier tous les cookies que vous avez définis dans les paramètres du backend.',
    ],
    'consent_manager' => [
        'description'    => 'Comprend le gestionnaire de consentement Klaro!',
        'include_assets' => [
            'title'       => 'Inclure les assets',
            'description' => 'Inclut automatiquement tous les fichiers JS nécessaires.',
        ],
        'style_prefix'   => [
            'title'       => 'Prefixe CSS',
            'description' => 'Utilisez cette classe css dans le balisage HTML Klaro! (supprime les styles par défaut).',
        ],
    ],
    'settings'        => [
        'cookies'        => [
            'label'       => 'Cookieset modules',
            'description' => 'Configurer les cookies et modules utilisés par le site et leur contrôle.',
        ],
        'cookie_consent' => [
            'label'                     => 'Composant Klaro!',
            'description'               => 'Réglages gestionnaire de consentement Klaro!',
            'cookie_expires_after_days' => [
                'label'   => 'Durée de vie des cookies en jours',
                'comment' => 'Les réglages de l\'utilisateur sont conservés pendant ce nombre de jours.',
            ],
            'privacy_policy'            => [
                'label'   => 'Politique de confidentialité',
                'comment' => 'Lien relatif ou absolu avec votre politique de confidentialité.',
            ],
            'default_application_state' => [
                'label'   => 'État par défaut de l\'application',
                'comment' => 'Activer par défaut le consentement pour toutes les applications.',
            ],
            'must_consent'              => [
                'label'   => 'Afficher le gestionnaire',
                'comment' => 'Afficher le gestionnaire de consentement directement à la première vue de la page pour forcer l\'utilisateur à prendre une décision.',
            ],
            'lang'                      => [
                'label'   => 'Code de langage',
                'comment' => 'Vous trouverez tous les codes disponibles dans la documentation de Klaro!.',
            ],
            'tabs'                      => [
                'translations' => 'Traductions',
                'apps'         => 'Applications',
                'general'      => 'Général',
            ],
            'translations'              => [
                'repeater' => [
                    'code' => [
                        'label' => 'Code de langage',
                    ],
                    'json' => [
                        'label' => 'JSON',
                    ],
                ],
            ],
            'apps'                      => [
                'repeater' => [
                    'name'              => [
                        'label'   => 'Nom',
                        'comment' => 'Un nom simple et court pour cette application (ex. google-analytics).',
                    ],
                    'application_state' => [
                        'label'   => 'Activé par défaut',
                        'comment' => 'Activez cette application par défaut. Ceci écrase le réglage global.',
                    ],
                    'required'          => [
                        'label'   => 'Consentement obligatoire',
                        'comment' => 'Cette application ne peut pas être désactivée.',
                    ],
                    'opt_out'           => [
                        'label'   => 'Opt-out',
                        'comment' => 'Les scripts de cette application sont chargés à la première vue de la page sans le consentement du visiteur (consentement implicite).',
                    ],
                    'only_once'         => [
                        'label'   => 'Charger le script une seule fois',
                        'comment' => 'Les scripts de cette application ne sont chargés qu\'une seule fois, même si le visiteur le réactive plusieurs fois.',
                    ],
                    'title'             => [
                        'label'   => 'Titre',
                        'comment' => 'Nom d\'affichage (ex. Google Analytics).',
                    ],
                    'purposes'          => [
                        'label'   => 'Objectifs',
                        'comment' => 'Ces objectifs doivent être traduits dans la section des traductions (ex. analytics, suivi de l\'utilisateur).',
                    ],
                    'cookies'           => [
                        'label'   => 'Cookies de cette application',
                        'comment' => 'Chaîne ou RegEx de noms de cookies. Ces cookies sont automatiquement supprimés si l\'utilisateur désactive cette application. (ex. /^_ga_.*$/ ou custom_tracker_cookie)',
                    ],
                    'callback'          => [
                        'label'   => 'Fonction de retour',
                        'comment' => 'Cette fonction JavaScript est appelée chaque fois qu\'un utilisateur active cette application.<br /><pre><small>function (consent, app) { // ... }</small></pre>',
                    ],
                ],
            ],
        ],
        'data_retention' => [
            'label'             => 'Conservation des données',
            'description'       => 'Configurez vos politiques de conservation des données.',
            'enabled'           => [
                'label'   => 'Nettoyage actif',
                'comment' => 'Supprimer automatiquement les anciennes données après leur expiration.',
            ],
            'default_keep_days' => [
                'label'   => 'Suppression des données après x jours',
                'comment' => 'Valable pour tous les plugins enregistrés si rien d\'autre n\'est spécifié ci-dessous.',
            ],
            'keep_days'         => [
                'label' => 'Effacer les données après x jours',
            ],
        ],
    ],
    'cookie_group'    => [
        'fields' => [
            'name'                   => 'Nom du groupe',
            'initial_status'         => 'État initial',
            'initial_status_comment' => 'Ce groupe de cookies est activé par défaut.',
            'required'               => 'Requis',
            'required_comment'       => 'Les cookies de ce groupe sont nécessaires au bon fonctionnement du site et ne peuvent donc pas être désactivés par l\'utilisateur.',
            'slug'                   => 'Slug',
            'default_level'          => 'Ce niveau est présélectionné pour l\'utilisateur.',
        ],
        'tabs'   => [
            'description' => 'Description',
            'cookies'     => 'Cookies',
        ],
    ],
    'cookie'          => [
        'fields' => [
            'name_owner'                  => 'Nom/Propriétaire',
            'name_owner_comment'          => 'Owner Name of the Service e.g. Google Analytics',
            'code'                        => 'Code',
            'code_comment'                => 'This is generated for the plugin to work (you dont need to touch this)',
            'intial_status'               => 'Ce cookie est activé par défaut',
            'levels'                      => 'Niveaux de cookie',
            'purpose'                     => 'Objectif',
            'purpose_comment'             => 'Décrire le but de l\'utilisation, du traitement et de toute notification, par exemple, Détermine si la navigation de l\'utilisateur doit être enregistrée dans un registre statistique.',
            'contact_details_dpo'         => 'Coordonnées du responsable du traitement des données',
            'contact_details_dpo_comment' => 'En vertu de la loi sur la protection de la vie privée, vous devez donner l\'adresse de contact du responsable de la protection des données du cookie, par exemple Cloudflare, Inc. 101 Townsend St. San Francisco, CA 94107. Attention : Délégué à la protection des données, privacyquestions@cloudflare.com',
            'contact_links_dpo'           => 'Liens de contact du responsable du traitement des données',
            'contact_links_dpo_comment'   => 'En vertu de la loi sur la protection de la vie privée, vous devez fournir l\'adresse de la page web du responsable de la protection des données du cookie, par exemple Lien vers leurs Conditions d\'utilisation, Politique de confidentialité, Politique de gestion des cookies, etc',
            'contact_links_dpo_prompt'    => 'Add new link',
            'contact_links'               => [
                'name' => 'Libellé',
                'href' => 'Cible du lien (URL absolue)',
            ],
            'cookie_levels'               => [
                'purpose_prompt'     => 'Add Granular Purpose Levels',
                'purpose_label'      => 'Granular Purpose Levels',
                'section1_label'     => 'Helpful Tip for Granular Purpose Levels',
                'section1_comment'   => 'Under ePrivacy Law (Recital 32 and Article 29 working party guidance nov 2017), Granular Opt-In for several Processes. This means having an off setting, the having a basic setting, then having a more advanced setting and so on up to a full setting. An example of this could be Google Analytics where we have an Off Setting, then a basic Tracking Setting, then a basic Tracking Setting plus Plugins, then finally a full setting with everything. The number of levels depends on what you are adding.',
                'section2_label'     => 'Helpful Tip for Item Details',
                'section2_comment'   => 'You can list as many item details as you want, if this is for a cookie make sure you list all the Cookie Identification Names, for example Google Analytics can have 8 or more different ones different ones. Also make sure you have equal number of Name (Cookie Identification), Duration/Expiry and Type fields. To find the list of Website Cookies in Google Chrome go to Dev Tools > Application > Cookies. You can also use the website: https://cookiepedia.co.uk/ to look-up Cookies.',
                'name'               => 'Name (Cookie Identification)',
                'name_comment'       => 'Nom commun de ce cookie',
                'identifier'         => 'Identifiant',
                'identifier_comment' => 'Le code de préfixe du cookie.',
                'provider'           => 'Fournisseur',
                'provider_comment'   => 'En vertu de la loi sur la protection de la vie privée, vous devez indiquer le nom de domaine du site Web.',
                'purpose'            => 'Purpose',
                'purpose_comment'    => 'Describe the Purpose of the Use at each granular level, Article 5 requires that consent is requested in a granular manner for \'specified, explicit\' purposes. (please write a SINGLE Paragraph)',
                'expiry'             => 'Durée/Expiration',
                'expiry_comment'     => 'En vertu de la loi sur la protection de la vie privée, vous devez indiquer combien de temps il sera utilisé dans le navigateur de l\'utilisateur.',
                'type'               => 'Type',
                'type_comment'       => 'En vertu de la loi sur la protection de la vie privée, vous devez indiquer de quel type de cookie ou de module il s\'agit.',
            ],
        ],
        'tabs'   => [
            'contact' => 'Coordonnées du contact',
            'levels'  => 'Gérer les niveaux',
            'provider' => 'Fournisseur',
            'item_details' => 'Gérer les détails des articles',
        ],
    ],
    'permissions'     => [
        'manage_cookie_consent' => 'Peut gérer les paramètres des cookies de consentement',
        'manage_data_retention' => 'Peut gérer les politiques de conservation des données',
        'manage_cookie_groups'  => 'Peut gérer des groupes de cookies',
    ],
];