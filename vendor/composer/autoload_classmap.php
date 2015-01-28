<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AddAsnameToCategoryTable' => $baseDir . '/app/database/migrations/2015_01_13_091851_add_asname_to_category_table.php',
    'AddTimeToArticleTable' => $baseDir . '/app/database/migrations/2015_01_26_054348_add_time_to_article_table.php',
    'AddUniqueToCategoryTable' => $baseDir . '/app/database/migrations/2015_01_13_091258_add_unique_to_category_table.php',
    'App\\Controllers\\Backend\\ArticleController' => $baseDir . '/app/controllers/backend/ArticleController.php',
    'App\\Controllers\\Backend\\CategoryController' => $baseDir . '/app/controllers/backend/CategoryController.php',
    'App\\Controllers\\Backend\\MainController' => $baseDir . '/app/controllers/backend/MainController.php',
    'App\\Controllers\\Backend\\OptionsController' => $baseDir . '/app/controllers/backend/OptionsController.php',
    'App\\Controllers\\Backend\\PublicController' => $baseDir . '/app/controllers/backend/PublicController.php',
    'App\\Controllers\\Backend\\TagController' => $baseDir . '/app/controllers/backend/TagController.php',
    'App\\Controllers\\Backend\\UserController' => $baseDir . '/app/controllers/backend/UserController.php',
    'App\\Controllers\\Backend\\UserGroupController' => $baseDir . '/app/controllers/backend/UserGroupController.php',
    'Article' => $baseDir . '/app/models/Article.php',
    'ArticleStatus' => $baseDir . '/app/models/ArticleStatus.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'Cartalyst\\Sentry\\Groups\\GroupExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\GroupNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Groups\\NameRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Groups/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserBannedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Throttling\\UserSuspendedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Throttling/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\LoginRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\PasswordRequiredException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserAlreadyActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserExistsException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotActivatedException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\UserNotFoundException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cartalyst\\Sentry\\Users\\WrongPasswordException' => $vendorDir . '/cartalyst/sentry/src/Cartalyst/Sentry/Users/Exceptions.php',
    'Cate' => $baseDir . '/app/models/Cate.php',
    'CreateArticleStatusTable' => $baseDir . '/app/database/migrations/2015_01_20_064330_create_article_status_table.php',
    'CreateArticleTable' => $baseDir . '/app/database/migrations/2015_01_20_064227_create_article_table.php',
    'CreateCategoryTable' => $baseDir . '/app/database/migrations/2015_01_13_090854_create_category_table.php',
    'CreateOptionsTable' => $baseDir . '/app/database/migrations/2015_01_28_063106_create_options_table.php',
    'CreateTagsTable' => $baseDir . '/app/database/migrations/2015_01_20_064353_create_tags_table.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'GroupBind' => $baseDir . '/app/models/GroupBind.php',
    'HomeController' => $baseDir . '/app/controllers/HomeController.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'MigrationCartalystSentryInstallGroups' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225929_migration_cartalyst_sentry_install_groups.php',
    'MigrationCartalystSentryInstallThrottle' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225988_migration_cartalyst_sentry_install_throttle.php',
    'MigrationCartalystSentryInstallUsers' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225921_migration_cartalyst_sentry_install_users.php',
    'MigrationCartalystSentryInstallUsersGroupsPivot' => $vendorDir . '/cartalyst/sentry/src/migrations/2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot.php',
    'OptionsSeeder' => $baseDir . '/app/database/seeds/OptionsSeeder.php',
    'Otions' => $baseDir . '/app/models/Otions.php',
    'SentrySeeder' => $baseDir . '/app/database/seeds/SentrySeeder.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'Tags' => $baseDir . '/app/models/Tags.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'User' => $baseDir . '/app/models/User.php',
    'UserGroup' => $baseDir . '/app/models/UserGroup.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);
