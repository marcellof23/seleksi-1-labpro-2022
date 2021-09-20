<?php

namespace ContainerBK7GKUY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final
 */
class srcApp_KernelDevDebugContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $targetDir;
    private $parameters = [];
    private $getService;

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $this->getService = \Closure::fromCallable([$this, 'getService']);
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->targetDir = \dirname($containerDir);
        $this->parameters = $this->getDefaultParameters();

        $this->services = $this->privates = [];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'App\\Service\\ConfigurationService' => 'getConfigurationServiceService',
            'cache.app' => 'getCache_AppService',
            'cache.doctrine.orm.default.metadata' => 'getCache_Doctrine_Orm_Default_MetadataService',
            'cache.doctrine.orm.default.query' => 'getCache_Doctrine_Orm_Default_QueryService',
            'cache.doctrine.orm.default.result' => 'getCache_Doctrine_Orm_Default_ResultService',
            'cache.system' => 'getCache_SystemService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.default_connection' => 'getDoctrine_Dbal_DefaultConnectionService',
            'doctrine.orm.default_entity_manager' => 'getDoctrine_Orm_DefaultEntityManagerService',
            'event_dispatcher' => 'getEventDispatcherService',
            'http_kernel' => 'getHttpKernelService',
            'profiler' => 'getProfilerService',
            'request_stack' => 'getRequestStackService',
            'router' => 'getRouterService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'twig' => 'getTwigService',
            'validator' => 'getValidatorService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
        ];
        $this->fileMap = [
            'App\\Controller\\API\\AwardsController' => 'getAwardsControllerService.php',
            'App\\Controller\\API\\BalloonController' => 'getBalloonControllerService.php',
            'App\\Controller\\API\\ClarificationController' => 'getClarificationControllerService.php',
            'App\\Controller\\API\\ContestController' => 'getContestControllerService.php',
            'App\\Controller\\API\\ExecutableController' => 'getExecutableControllerService.php',
            'App\\Controller\\API\\GeneralInfoController' => 'getGeneralInfoControllerService.php',
            'App\\Controller\\API\\GroupController' => 'getGroupControllerService.php',
            'App\\Controller\\API\\JudgehostController' => 'getJudgehostControllerService.php',
            'App\\Controller\\API\\JudgementController' => 'getJudgementControllerService.php',
            'App\\Controller\\API\\JudgementTypeController' => 'getJudgementTypeControllerService.php',
            'App\\Controller\\API\\LanguageController' => 'getLanguageControllerService.php',
            'App\\Controller\\API\\OrganizationController' => 'getOrganizationControllerService.php',
            'App\\Controller\\API\\ProblemController' => 'getProblemControllerService.php',
            'App\\Controller\\API\\RunController' => 'getRunControllerService.php',
            'App\\Controller\\API\\ScoreboardController' => 'getScoreboardControllerService.php',
            'App\\Controller\\API\\SubmissionController' => 'getSubmissionControllerService.php',
            'App\\Controller\\API\\TeamController' => 'getTeamControllerService.php',
            'App\\Controller\\API\\TestcaseController' => 'getTestcaseControllerService.php',
            'App\\Controller\\API\\UserController' => 'getUserControllerService.php',
            'App\\Controller\\Jury\\AnalysisController' => 'getAnalysisControllerService.php',
            'App\\Controller\\Jury\\AuditLogController' => 'getAuditLogControllerService.php',
            'App\\Controller\\Jury\\BalloonController' => 'getBalloonController2Service.php',
            'App\\Controller\\Jury\\ClarificationController' => 'getClarificationController2Service.php',
            'App\\Controller\\Jury\\ConfigController' => 'getConfigControllerService.php',
            'App\\Controller\\Jury\\ContestController' => 'getContestController2Service.php',
            'App\\Controller\\Jury\\ExecutableController' => 'getExecutableController2Service.php',
            'App\\Controller\\Jury\\ImportExportController' => 'getImportExportControllerService.php',
            'App\\Controller\\Jury\\InternalErrorController' => 'getInternalErrorControllerService.php',
            'App\\Controller\\Jury\\JudgehostController' => 'getJudgehostController2Service.php',
            'App\\Controller\\Jury\\JudgehostRestrictionController' => 'getJudgehostRestrictionControllerService.php',
            'App\\Controller\\Jury\\JuryMiscController' => 'getJuryMiscControllerService.php',
            'App\\Controller\\Jury\\LanguageController' => 'getLanguageController2Service.php',
            'App\\Controller\\Jury\\PrintController' => 'getPrintControllerService.php',
            'App\\Controller\\Jury\\ProblemController' => 'getProblemController2Service.php',
            'App\\Controller\\Jury\\RejudgingController' => 'getRejudgingControllerService.php',
            'App\\Controller\\Jury\\ScoreboardController' => 'getScoreboardController2Service.php',
            'App\\Controller\\Jury\\ShadowDifferencesController' => 'getShadowDifferencesControllerService.php',
            'App\\Controller\\Jury\\SubmissionController' => 'getSubmissionController2Service.php',
            'App\\Controller\\Jury\\TeamAffiliationController' => 'getTeamAffiliationControllerService.php',
            'App\\Controller\\Jury\\TeamCategoryController' => 'getTeamCategoryControllerService.php',
            'App\\Controller\\Jury\\TeamController' => 'getTeamController2Service.php',
            'App\\Controller\\Jury\\UserController' => 'getUserController2Service.php',
            'App\\Controller\\PublicController' => 'getPublicControllerService.php',
            'App\\Controller\\RootController' => 'getRootControllerService.php',
            'App\\Controller\\SecurityController' => 'getSecurityControllerService.php',
            'App\\Controller\\Team\\ClarificationController' => 'getClarificationController3Service.php',
            'App\\Controller\\Team\\MiscController' => 'getMiscControllerService.php',
            'App\\Controller\\Team\\ProblemController' => 'getProblemController3Service.php',
            'App\\Controller\\Team\\ScoreboardController' => 'getScoreboardController3Service.php',
            'App\\Controller\\Team\\SubmissionController' => 'getSubmissionController3Service.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'cache.app_clearer' => 'getCache_AppClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'console.command.public_alias.App\\Command\\CheckDatabaseConfigurationDefaultValuesCommand' => 'getCheckDatabaseConfigurationDefaultValuesCommandService.php',
            'console.command.public_alias.App\\Command\\ImportEventFeedCommand' => 'getImportEventFeedCommandService.php',
            'console.command.public_alias.App\\Command\\LoadExampleDataCommand' => 'getLoadExampleDataCommandService.php',
            'console.command.public_alias.App\\Command\\ResetUserPasswordCommand' => 'getResetUserPasswordCommandService.php',
            'console.command.public_alias.App\\Command\\ScoreboardMergeCommand' => 'getScoreboardMergeCommandService.php',
            'console.command.public_alias.doctrine_cache.contains_command' => 'getConsole_Command_PublicAlias_DoctrineCache_ContainsCommandService.php',
            'console.command.public_alias.doctrine_cache.delete_command' => 'getConsole_Command_PublicAlias_DoctrineCache_DeleteCommandService.php',
            'console.command.public_alias.doctrine_cache.flush_command' => 'getConsole_Command_PublicAlias_DoctrineCache_FlushCommandService.php',
            'console.command.public_alias.doctrine_cache.stats_command' => 'getConsole_Command_PublicAlias_DoctrineCache_StatsCommandService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService.php',
            'error_controller' => 'getErrorControllerService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'fos_rest.exception.controller' => 'getFosRest_Exception_ControllerService.php',
            'fos_rest.exception.twig_controller' => 'getFosRest_Exception_TwigControllerService.php',
            'fos_rest.serializer.jms_handler_registry' => 'getFosRest_Serializer_JmsHandlerRegistryService.php',
            'fos_rest.view_handler' => 'getFosRest_ViewHandlerService.php',
            'jms_serializer' => 'getJmsSerializerService.php',
            'jms_serializer.deserialization_context_factory' => 'getJmsSerializer_DeserializationContextFactoryService.php',
            'jms_serializer.handler_registry' => 'getJmsSerializer_HandlerRegistryService.php',
            'jms_serializer.metadata_driver' => 'getJmsSerializer_MetadataDriverService.php',
            'jms_serializer.object_constructor' => 'getJmsSerializer_ObjectConstructorService.php',
            'jms_serializer.serialization_context_factory' => 'getJmsSerializer_SerializationContextFactoryService.php',
            'jms_serializer.twig_extension.serializer_runtime_helper' => 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php',
            'nelmio_api_doc.controller.swagger' => 'getNelmioApiDoc_Controller_SwaggerService.php',
            'nelmio_api_doc.controller.swagger_ui' => 'getNelmioApiDoc_Controller_SwaggerUiService.php',
            'nelmio_api_doc.generator.default' => 'getNelmioApiDoc_Generator_DefaultService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.exception_panel' => 'getWebProfiler_Controller_ExceptionPanelService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
        ];
        $this->aliases = [
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'nelmio_api_doc.generator' => 'nelmio_api_doc.generator.default',
        ];

        $this->privates['service_container'] = function () {
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/HttpKernelInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/KernelInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/RebootableInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/TerminableInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Kernel.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Kernel.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Extension/ExtensionInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Extension/AbstractExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/extensions/lib/Twig/Extensions/Extension/Text.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/event-dispatcher/EventSubscriberInterface.php';
            include_once \dirname(__DIR__, 4).'/src/EventListener/ApiHeadersListener.php';
            include_once \dirname(__DIR__, 4).'/src/EventListener/BodyTooBigListener.php';
            include_once \dirname(__DIR__, 4).'/src/EventListener/ProfilerDisableListener.php';
            include_once \dirname(__DIR__, 4).'/src/EventListener/UpdateUserRolesListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/monolog/monolog/src/Monolog/Processor/ProcessorInterface.php';
            include_once \dirname(__DIR__, 4).'/src/Logger/VarargsLogMessageProcessor.php';
            include_once \dirname(__DIR__, 4).'/src/Service/ConfigurationService.php';
            include_once \dirname(__DIR__, 4).'/src/Service/DOMJudgeService.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
            include_once \dirname(__DIR__, 4).'/src/Service/EventLogService.php';
            include_once \dirname(__DIR__, 4).'/src/Service/ScoreboardService.php';
            include_once \dirname(__DIR__, 4).'/src/Service/SubmissionService.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Extension/GlobalsInterface.php';
            include_once \dirname(__DIR__, 4).'/src/Twig/TwigExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/persistence/lib/Doctrine/Persistence/ConnectionRegistry.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/persistence/lib/Doctrine/Persistence/ManagerRegistry.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/persistence/lib/Doctrine/Persistence/AbstractManagerRegistry.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/doctrine-bridge/ManagerRegistry.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/service-contracts/ResetInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/Registry.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/Connection.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/dbal/lib/Doctrine/DBAL/Connection.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/ConnectionFactory.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/dbal/lib/Doctrine/DBAL/Configuration.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/psr/log/Psr/Log/LoggerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/monolog/monolog/src/Monolog/ResettableInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/monolog/monolog/src/Monolog/Logger.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Log/DebugLoggerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/monolog-bridge/Logger.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/event-manager/lib/Doctrine/Common/EventManager.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/doctrine-bridge/ContainerAwareEventManager.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/psr/container/src/ContainerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/service-contracts/ServiceProviderInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/service-contracts/ServiceLocatorTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/ServiceLocator.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
            include_once \dirname(__DIR__, 4).'/src/Doctrine/HashPasswordSubscriber.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/psr/cache/src/CacheItemPoolInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Adapter/AdapterInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache-contracts/CacheInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/PruneableInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/ResettableInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Adapter/TraceableAdapter.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Traits/ArrayTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Adapter/ArrayAdapter.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiDeleteCache.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiOperationCache.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/DoctrineProvider.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriverChain.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/jms/serializer/src/Twig/SerializerRuntimeExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/EventListener/ControllerListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/EventListener/ParamConverterListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/expression-language/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/EventListener/TemplateListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/Templating/TemplateGuesser.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/EventListener/HttpCacheListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/EventListener/SecurityListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authorization/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/Security/ExpressionLanguage.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/EventListener/IsGrantedListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/monolog-bridge/Handler/ConsoleHandler.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerNameParser.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/ControllerMetadata/ArgumentMetadataFactory.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/ResponseListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/StreamedResponseListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/LocaleListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/ValidateRequestListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/EventListener/ResolveControllerNameSubscriber.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/DisallowRobotsIndexingListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/ErrorListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/ParameterBag/ParameterBagInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/ParameterBag/ParameterBag.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/ParameterBag/FrozenParameterBag.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/ParameterBag/ContainerBagInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/ParameterBag/ContainerBag.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/HttpKernel.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Controller/ControllerResolverInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Controller/TraceableControllerResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Controller/ContainerControllerResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Controller/ControllerResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Controller/ArgumentResolverInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Controller/TraceableArgumentResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Controller/ArgumentResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-foundation/RequestStack.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/UriSigner.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/config/ConfigCacheFactoryInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/config/ResourceCheckerConfigCacheFactory.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Traits/AbstractTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Traits/AbstractAdapterTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache-contracts/CacheTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Traits/ContractsTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Adapter/AbstractAdapter.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Traits/FilesystemTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/AbstractSessionListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/SessionListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/CsrfExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/asset/Packages.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/asset/PackageInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/asset/Package.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/asset/PathPackage.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/asset/VersionStrategy/StaticVersionStrategy.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/asset/Context/ContextInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/asset/Context/RequestStackContext.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ValidatorBuilderInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ValidatorBuilder.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Validation.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ConstraintValidatorFactoryInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ContainerConstraintValidatorFactory.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/ObjectInitializerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/doctrine-bridge/Validator/DoctrineInitializer.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Mapping/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Mapping/Loader/AutoMappingTrait.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/doctrine-bridge/Validator/DoctrineLoader.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Mapping/Loader/PropertyInfoLoader.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/FragmentListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Profiler/Profiler.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Profiler/ProfilerStorageInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Profiler/FileProfilerStorage.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/DataCollectorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/DataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/LateDataCollectorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/TimeDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/MemoryDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/DataCollector/ValidatorDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/AjaxDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/ExceptionDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/LoggerDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/EventDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/cache/DataCollector/CacheDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle/DataCollector/SecurityDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/DataCollector/TwigDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/doctrine-bridge/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-client/DataCollector/HttpClientDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/ConfigDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/ProfilerListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/RequestDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/DataCollector/RouterDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/Extension/DataCollector/FormDataCollectorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/Extension/DataCollector/FormDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/DebugHandlersListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Debug/FileLinkFormatter.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/stopwatch/Stopwatch.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/monolog-bridge/Processor/DebugProcessor.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/routing/RequestContext.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/EventListener/RouterListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyDescriptionExtractorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyListExtractorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyInfoExtractorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/property-info/PropertyInfoExtractor.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Environment.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/AppVariable.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Loader/LoaderInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Loader/ExistsLoaderInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Loader/SourceContextLoaderInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Loader/FilesystemLoader.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bundle/Loader/NativeFilesystemLoader.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/ProfilerExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/Profiler/Profile.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/TranslationExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/AssetExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/CodeExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/RoutingExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/YamlExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/StopwatchExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/ExpressionExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/HttpKernelExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/HttpFoundationExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-foundation/UrlHelper.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/RuntimeLoader/RuntimeLoaderInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/twig/twig/src/RuntimeLoader/ContainerRuntimeLoader.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/FormExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authorization/AuthorizationChecker.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorageInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/service-contracts/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authentication/Token/Storage/UsageTrackingTokenStorage.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authentication/Token/Storage/TokenStorage.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authentication/AuthenticationManagerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authentication/AuthenticationProviderManager.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authentication/AuthenticationTrustResolverInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Encoder/EncoderFactoryInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Encoder/EncoderFactory.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Role/RoleHierarchyInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Role/RoleHierarchy.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-http/FirewallMapInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle/Security/FirewallMap.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-http/Logout/LogoutUrlGenerator.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-http/RememberMe/ResponseListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/LogoutUrlExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/SecurityExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authorization/AccessDecisionManagerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authorization/TraceableAccessDecisionManager.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Authorization/AccessDecisionManager.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-http/Firewall.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle/EventListener/FirewallListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle/Debug/TraceableFirewallListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/EventListener/BodyListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Decoder/DecoderProviderInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/Decoder/ContainerDecoderProvider.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle/EventListener/ZoneMatcherListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-foundation/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-foundation/RequestMatcher.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/web-profiler-bundle/Csp/ContentSecurityPolicyHandler.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/web-profiler-bundle/Csp/NonceGenerator.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/web-profiler-bundle/Twig/WebProfilerExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/var-dumper/Dumper/DataDumperInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/var-dumper/Cloner/DumperInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/var-dumper/Dumper/AbstractDumper.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/var-dumper/Dumper/CliDumper.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/var-dumper/Dumper/HtmlDumper.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/web-profiler-bundle/EventListener/WebDebugToolbarListener.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Extension/DumpExtension.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/DataCollector/DumpDataCollector.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/var-dumper/Cloner/ClonerInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/var-dumper/Cloner/AbstractCloner.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/var-dumper/Cloner/VarCloner.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-client-contracts/HttpClientInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-client/TraceableHttpClient.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-client/HttpClient.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/routing/RequestContextAwareInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/routing/Matcher/UrlMatcherInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/routing/Generator/UrlGeneratorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/routing/RouterInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/routing/Matcher/RequestMatcherInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/routing/Router.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/CacheWarmer/WarmableInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/dependency-injection/ServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/DependencyInjection/CompatibilityServiceSubscriberInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Routing/Router.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Encoder/UserPasswordEncoderInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/security-core/Encoder/UserPasswordEncoder.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Validator/ValidatorInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/validator/Validator/TraceableValidator.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/event-dispatcher-contracts/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/event-dispatcher/EventDispatcherInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcherInterface.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/event-dispatcher/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/http-kernel/Debug/TraceableEventDispatcher.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/event-dispatcher/EventDispatcher.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/monolog/monolog/src/Monolog/Handler/NullHandler.php';
            include_once \dirname(__DIR__, 5).'/lib/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        };
    }

    public function compile(): void
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function getRemovedIds(): array
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'App\Service\ConfigurationService' shared autowired service.
     *
     * @return \App\Service\ConfigurationService
     */
    protected function getConfigurationServiceService()
    {
        return $this->services['App\\Service\\ConfigurationService'] = new \App\Service\ConfigurationService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()), true, $this->targetDir.'', (\dirname(__DIR__, 5).'/etc'));
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('jfZ4WaCYLW', 0, ($this->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));
        $a->setLogger(($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService()));

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.metadata' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_MetadataService()
    {
        return $this->services['cache.doctrine.orm.default.metadata'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.query' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_QueryService()
    {
        return $this->services['cache.doctrine.orm.default.query'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.doctrine.orm.default.result' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_Doctrine_Orm_Default_ResultService()
    {
        return $this->services['cache.doctrine.orm.default.result'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('cvojvSVRAB', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), 'UTF-8', ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'doctrine.dbal.default_connection' shared service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        $a = new \Doctrine\DBAL\Configuration();

        $b = new \Doctrine\DBAL\Logging\LoggerChain();

        $c = new \Symfony\Bridge\Monolog\Logger('doctrine');
        $c->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $c->pushProcessor(($this->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($this->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $c->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($c);

        $b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($c, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $b->addLogger(($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));

        $a->setSQLLogger($b);
        $d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'doctrine.orm.default_listeners.attach_entity_listeners' => ['privates', 'doctrine.orm.default_listeners.attach_entity_listeners', 'getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php', true],
        ], [
            'doctrine.orm.default_listeners.attach_entity_listeners' => '?',
        ]));
        $d->addEventSubscriber(new \App\Doctrine\HashPasswordSubscriber(($this->services['security.password_encoder'] ?? $this->getSecurity_PasswordEncoderService())));
        $d->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

        return $this->services['doctrine.dbal.default_connection'] = (new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory($this->parameters['doctrine.dbal.connection_factory.types']))->createConnection(['driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'url' => $this->getEnv('resolve:DATABASE_URL'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci']], $a, $d, ['enum' => 'string']);
    }

    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService($lazyLoad = true)
    {
        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity')]), 'App\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService())));
        $a->setQueryCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService())));
        $a->setResultCacheImpl(new \Symfony\Component\Cache\DoctrineProvider(($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService())));
        $a->setMetadataDriverImpl($b);
        $a->setProxyDir(($this->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setClassMetadataFactoryName('Doctrine\\ORM\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($this));
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [], [])));
        $a->addCustomStringFunction('truncate', 'App\\Doctrine\\ORM\\Query\\AST\\Functions\\TruncateFunction');

        $this->services['doctrine.orm.default_entity_manager'] = $instance = \Doctrine\ORM\EntityManager::create(($this->services['doctrine.dbal.default_connection'] ?? $this->getDoctrine_Dbal_DefaultConnectionService()), $a);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getEventDispatcherService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('event');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushProcessor(($this->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($this->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $a->pushHandler(new \Monolog\Handler\NullHandler());
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\EventDispatcher(), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), $a, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fos_rest.body_listener'] ?? $this->getFosRest_BodyListenerService());
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fos_rest.zone_matcher_listener'] ?? $this->getFosRest_ZoneMatcherListenerService());
        }, 1 => 'onKernelRequest'], 248);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['App\\EventListener\\ApiHeadersListener'] ?? ($this->privates['App\\EventListener\\ApiHeadersListener'] = new \App\EventListener\ApiHeadersListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['App\\EventListener\\BodyTooBigListener'] ?? ($this->privates['App\\EventListener\\BodyTooBigListener'] = new \App\EventListener\BodyTooBigListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['App\\EventListener\\ProfilerDisableListener'] ?? $this->getProfilerDisableListenerService());
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['App\\EventListener\\UpdateUserRolesListener'] ?? $this->getUpdateUserRolesListenerService());
        }, 1 => 'onRequest'], 0);
        $instance->addListener('security.authentication.success', [0 => function () {
            return ($this->privates['App\\Security\\UserStateUpdater'] ?? $this->load('getUserStateUpdaterService.php'));
        }, 1 => 'updateUserState'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.controller.listener'] ?? $this->getSensioFrameworkExtra_Controller_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.converter.listener'] ?? $this->getSensioFrameworkExtra_Converter_ListenerService());
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['sensio_framework_extra.view.listener'] ?? $this->getSensioFrameworkExtra_View_ListenerService());
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['sensio_framework_extra.cache.listener'] ?? ($this->privates['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['sensio_framework_extra.security.listener'] ?? $this->getSensioFrameworkExtra_Security_ListenerService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['framework_extra_bundle.event.is_granted'] ?? $this->getFrameworkExtraBundle_Event_IsGrantedService());
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onCommand'], 255);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService());
        }, 1 => 'onTerminate'], -255);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['response_listener'] ?? ($this->privates['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['streamed_response_listener'] ?? ($this->privates['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()));
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'setDefaultLocale'], 100);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['locale_listener'] ?? $this->getLocaleListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['validate_request_listener'] ?? ($this->privates['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()));
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['.legacy_resolve_controller_name_subscriber'] ?? $this->get_LegacyResolveControllerNameSubscriberService());
        }, 1 => 'resolveControllerName'], 24);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['disallow_search_engine_index_response_listener'] ?? ($this->privates['disallow_search_engine_index_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener()));
        }, 1 => 'onResponse'], -255);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onControllerArguments'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'logKernelException'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['exception_listener'] ?? $this->getExceptionListenerService());
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['console.error_listener'] ?? $this->load('getConsole_ErrorListenerService.php'));
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['console.suggest_missing_package_subscriber'] ?? ($this->privates['console.suggest_missing_package_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\SuggestMissingPackageSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['session_listener'] ?? $this->getSessionListenerService());
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['fragment.listener'] ?? $this->getFragment_ListenerService());
        }, 1 => 'onKernelRequest'], 48);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ($this->privates['profiler_listener'] ?? $this->getProfilerListenerService());
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.debug_handlers_listener'] ?? $this->getDebug_DebugHandlersListenerService());
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['router_listener'] ?? $this->getRouterListenerService());
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['security.rememberme.response_listener'] ?? ($this->privates['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()));
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('debug.security.authorization.vote', [0 => function () {
            return ($this->privates['debug.security.voter.vote_listener'] ?? $this->load('getDebug_Security_Voter_VoteListenerService.php'));
        }, 1 => 'onVoterVote'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'configureLogoutUrlGenerator'], 8);
        $instance->addListener('kernel.request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService());
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ($this->privates['fos_rest.exception_listener'] ?? $this->load('getFosRest_ExceptionListenerService.php'));
        }, 1 => 'onKernelException'], -100);
        $instance->addListener('kernel.view', [0 => function () {
            return ($this->privates['fos_rest.view_response_listener'] ?? $this->load('getFosRest_ViewResponseListenerService.php'));
        }, 1 => 'onKernelView'], 30);
        $instance->addListener('kernel.response', [0 => function () {
            return ($this->privates['web_profiler.debug_toolbar'] ?? $this->getWebProfiler_DebugToolbarService());
        }, 1 => 'onKernelResponse'], -128);
        $instance->addListener('console.command', [0 => function () {
            return ($this->privates['debug.dump_listener'] ?? $this->load('getDebug_DumpListenerService.php'));
        }, 1 => 'configure'], 1024);
        $instance->addListener('console.error', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleError'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ($this->privates['maker.console_error_listener'] ?? ($this->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber()));
        }, 1 => 'onConsoleTerminate'], 0);

        return $instance;
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        $a = ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));

        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false)))), $a), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())), new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.argument_resolver.request_attribute'] ?? $this->load('getDebug_ArgumentResolver_RequestAttributeService.php'));
            yield 1 => ($this->privates['debug.argument_resolver.request'] ?? $this->load('getDebug_ArgumentResolver_RequestService.php'));
            yield 2 => ($this->privates['debug.argument_resolver.session'] ?? $this->load('getDebug_ArgumentResolver_SessionService.php'));
            yield 3 => ($this->privates['debug.security.user_value_resolver'] ?? $this->load('getDebug_Security_UserValueResolverService.php'));
            yield 4 => ($this->privates['debug.argument_resolver.service'] ?? $this->load('getDebug_ArgumentResolver_ServiceService.php'));
            yield 5 => ($this->privates['debug.argument_resolver.default'] ?? $this->load('getDebug_ArgumentResolver_DefaultService.php'));
            yield 6 => ($this->privates['debug.argument_resolver.variadic'] ?? $this->load('getDebug_ArgumentResolver_VariadicService.php'));
            yield 7 => ($this->privates['debug.argument_resolver.not_tagged_controller'] ?? $this->load('getDebug_ArgumentResolver_NotTaggedControllerService.php'));
        }, 8)), $a));
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('profiler');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushProcessor(($this->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($this->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDir.''.'/profiler')), $a, true);

        $b = ($this->services['kernel'] ?? $this->get('kernel'));
        $c = ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));
        $d = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $d->addInstance('cache.doctrine.orm.default.metadata', ($this->services['cache.doctrine.orm.default.metadata'] ?? $this->getCache_Doctrine_Orm_Default_MetadataService()));
        $d->addInstance('cache.doctrine.orm.default.result', ($this->services['cache.doctrine.orm.default.result'] ?? $this->getCache_Doctrine_Orm_Default_ResultService()));
        $d->addInstance('cache.doctrine.orm.default.query', ($this->services['cache.doctrine.orm.default.query'] ?? $this->getCache_Doctrine_Orm_Default_QueryService()));
        $d->addInstance('cache.app', ($this->services['cache.app'] ?? $this->getCache_AppService()));
        $d->addInstance('cache.system', ($this->services['cache.system'] ?? $this->getCache_SystemService()));
        $d->addInstance('cache.validator', ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService()));
        $d->addInstance('cache.serializer', ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService()));
        $d->addInstance('cache.annotations', ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService()));
        $d->addInstance('cache.property_info', ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService()));
        $d->addInstance('cache.security_expression_language', ($this->privates['cache.security_expression_language'] ?? $this->getCache_SecurityExpressionLanguageService()));
        $e = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(($this->services['doctrine'] ?? $this->getDoctrineService()));
        $e->addLogger('default', ($this->privates['doctrine.dbal.logger.profiling.default'] ?? ($this->privates['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack())));
        $f = new \Symfony\Component\HttpClient\DataCollector\HttpClientDataCollector();
        $f->registerClient('http_client', ($this->privates['.debug.http_client'] ?? $this->get_Debug_HttpClientService()));
        $g = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $g->setKernel($b);
        }

        $instance->add(($this->privates['data_collector.request'] ?? ($this->privates['data_collector.request'] = new \Symfony\Component\HttpKernel\DataCollector\RequestDataCollector())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(($this->services['validator'] ?? $this->getValidatorService())));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(($this->privates['data_collector.form'] ?? $this->getDataCollector_FormService()));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDir.''.'/srcApp_KernelDevDebugContainer'), $c));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), $c));
        $instance->add(($this->privates['data_collector.router'] ?? ($this->privates['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), ($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->privates['debug.security.firewall'] ?? $this->getDebug_Security_FirewallService())));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->services['twig'] ?? $this->getTwigService())));
        $instance->add($e);
        $instance->add($f);
        $instance->add(($this->services['data_collector.dump'] ?? $this->getDataCollector_DumpService()));
        $instance->add($g);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('router');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushProcessor(($this->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($this->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'routing.loader' => ['services', 'routing.loader', 'getRouting_LoaderService.php', true],
        ], [
            'routing.loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]))->withContext('router.default', $this), 'kernel::loadRoutes', ['cache_dir' => $this->targetDir.'', 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\CompiledUrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\CompiledUrlGeneratorDumper', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableCompiledUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherDumper', 'strict_requirements' => true, 'resource_type' => 'service'], ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), $a, 'en');

        $instance->setConfigCacheFactory(($this->privates['config_cache_factory'] ?? $this->getConfigCacheFactoryService()));

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->privates['security.authentication.manager'] ?? $this->getSecurity_Authentication_ManagerService()), ($this->privates['debug.security.access.decision_manager'] ?? $this->getDebug_Security_Access_DecisionManagerService()), false);
    }

    /**
     * Gets the public 'security.password_encoder' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder
     */
    protected function getSecurity_PasswordEncoderService()
    {
        return $this->services['security.password_encoder'] = new \Symfony\Component\Security\Core\Encoder\UserPasswordEncoder(($this->privates['security.encoder_factory.generic'] ?? $this->getSecurity_EncoderFactory_GenericService()));
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage(($this->privates['security.untracked_token_storage'] ?? ($this->privates['security.untracked_token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())), new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'session' => ['services', 'session', 'getSessionService.php', true],
        ], [
            'session' => '?',
        ]));
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(($this->privates['twig.loader.native_filesystem'] ?? $this->getTwig_Loader_NativeFilesystemService()), ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDir.''.'/twig'), 'charset' => 'UTF-8']);

        $instance->addExtension(($this->privates['twig.extension.security_csrf'] ?? ($this->privates['twig.extension.security_csrf'] = new \Symfony\Bridge\Twig\Extension\CsrfExtension())));
        $instance->addExtension(($this->privates['twig.extension.profiler'] ?? $this->getTwig_Extension_ProfilerService()));
        $instance->addExtension(($this->privates['twig.extension.trans'] ?? ($this->privates['twig.extension.trans'] = new \Symfony\Bridge\Twig\Extension\TranslationExtension(NULL))));
        $instance->addExtension(($this->privates['twig.extension.assets'] ?? $this->getTwig_Extension_AssetsService()));
        $instance->addExtension(($this->privates['twig.extension.code'] ?? $this->getTwig_Extension_CodeService()));
        $instance->addExtension(($this->privates['twig.extension.routing'] ?? $this->getTwig_Extension_RoutingService()));
        $instance->addExtension(($this->privates['twig.extension.yaml'] ?? ($this->privates['twig.extension.yaml'] = new \Symfony\Bridge\Twig\Extension\YamlExtension())));
        $instance->addExtension(($this->privates['twig.extension.debug.stopwatch'] ?? $this->getTwig_Extension_Debug_StopwatchService()));
        $instance->addExtension(($this->privates['twig.extension.expression'] ?? ($this->privates['twig.extension.expression'] = new \Symfony\Bridge\Twig\Extension\ExpressionExtension())));
        $instance->addExtension(($this->privates['twig.extension.httpkernel'] ?? ($this->privates['twig.extension.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelExtension())));
        $instance->addExtension(($this->privates['twig.extension.httpfoundation'] ?? $this->getTwig_Extension_HttpfoundationService()));
        $instance->addExtension(($this->privates['twig.extension.form'] ?? ($this->privates['twig.extension.form'] = new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']))));
        $instance->addExtension(($this->privates['twig.extension.logout_url'] ?? $this->getTwig_Extension_LogoutUrlService()));
        $instance->addExtension(($this->privates['twig.extension.security'] ?? $this->getTwig_Extension_SecurityService()));
        $instance->addExtension(($this->privates['twig.extension.dump'] ?? $this->getTwig_Extension_DumpService()));
        $instance->addExtension(($this->privates['Twig\\Extensions\\TextExtension'] ?? ($this->privates['Twig\\Extensions\\TextExtension'] = new \Twig\Extensions\TextExtension())));
        $instance->addExtension(($this->privates['App\\Twig\\TwigExtension'] ?? $this->getTwigExtensionService()));
        $instance->addExtension(($this->privates['doctrine.twig.doctrine_extension'] ?? ($this->privates['doctrine.twig.doctrine_extension'] = new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension())));
        $instance->addExtension(($this->privates['jms_serializer.twig_extension.serializer'] ?? ($this->privates['jms_serializer.twig_extension.serializer'] = new \JMS\Serializer\Twig\SerializerRuntimeExtension())));
        $instance->addExtension(($this->privates['twig.extension.webprofiler'] ?? $this->getTwig_Extension_WebprofilerService()));
        $instance->addGlobal('app', ($this->privates['twig.app_variable'] ?? $this->getTwig_AppVariableService()));
        $instance->addRuntimeLoader(($this->privates['twig.runtime_loader'] ?? $this->getTwig_RuntimeLoaderService()));
        $instance->addGlobal('DOMJUDGE_VERSION', '7.3.3');
        $instance->addGlobal('DJ_CHARACTER_SET', 'utf-8');
        ($this->privates['twig.configurator.environment'] ?? $this->getTwig_Configurator_EnvironmentService())->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(($this->privates['validator.builder'] ?? $this->getValidator_BuilderService())->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);
        $instance->addCasters(['Closure' => 'Symfony\\Component\\VarDumper\\Caster\\ReflectionCaster::unsetClosureFileInfo']);

        return $instance;
    }

    /**
     * Gets the private '.debug.http_client' shared service.
     *
     * @return \Symfony\Component\HttpClient\TraceableHttpClient
     */
    protected function get_Debug_HttpClientService()
    {
        $a = \Symfony\Component\HttpClient\HttpClient::create([], 6);

        $b = new \Symfony\Bridge\Monolog\Logger('http_client');
        $b->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $b->pushProcessor(($this->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($this->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $b->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $b->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($b);

        $a->setLogger($b);

        return $this->privates['.debug.http_client'] = new \Symfony\Component\HttpClient\TraceableHttpClient($a);
    }

    /**
     * Gets the private '.legacy_resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function get_LegacyResolveControllerNameSubscriberService()
    {
        return $this->privates['.legacy_resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), false);
    }

    /**
     * Gets the private 'App\EventListener\ProfilerDisableListener' shared autowired service.
     *
     * @return \App\EventListener\ProfilerDisableListener
     */
    protected function getProfilerDisableListenerService()
    {
        return $this->privates['App\\EventListener\\ProfilerDisableListener'] = new \App\EventListener\ProfilerDisableListener(($this->services['kernel'] ?? $this->get('kernel', 1)), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['profiler'] ?? $this->getProfilerService()));
    }

    /**
     * Gets the private 'App\EventListener\UpdateUserRolesListener' shared autowired service.
     *
     * @return \App\EventListener\UpdateUserRolesListener
     */
    protected function getUpdateUserRolesListenerService()
    {
        return $this->privates['App\\EventListener\\UpdateUserRolesListener'] = new \App\EventListener\UpdateUserRolesListener(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
    }

    /**
     * Gets the private 'App\Service\DOMJudgeService' shared autowired service.
     *
     * @return \App\Service\DOMJudgeService
     */
    protected function getDOMJudgeServiceService()
    {
        return $this->privates['App\\Service\\DOMJudgeService'] = new \App\Service\DOMJudgeService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['parameter_bag'] ?? ($this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this))), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['http_kernel'] ?? $this->getHttpKernelService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()));
    }

    /**
     * Gets the private 'App\Service\EventLogService' shared autowired service.
     *
     * @return \App\Service\EventLogService
     */
    protected function getEventLogServiceService()
    {
        return $this->privates['App\\Service\\EventLogService'] = new \App\Service\EventLogService(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'App\Service\ScoreboardService' shared autowired service.
     *
     * @return \App\Service\ScoreboardService
     */
    protected function getScoreboardServiceService()
    {
        return $this->privates['App\\Service\\ScoreboardService'] = new \App\Service\ScoreboardService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()));
    }

    /**
     * Gets the private 'App\Service\SubmissionService' shared autowired service.
     *
     * @return \App\Service\SubmissionService
     */
    protected function getSubmissionServiceService()
    {
        return $this->privates['App\\Service\\SubmissionService'] = new \App\Service\SubmissionService(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()), ($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()), ($this->privates['App\\Service\\ScoreboardService'] ?? $this->getScoreboardServiceService()));
    }

    /**
     * Gets the private 'App\Twig\TwigExtension' shared autowired service.
     *
     * @return \App\Twig\TwigExtension
     */
    protected function getTwigExtensionService()
    {
        return $this->privates['App\\Twig\\TwigExtension'] = new \App\Twig\TwigExtension(($this->privates['App\\Service\\DOMJudgeService'] ?? $this->getDOMJudgeServiceService()), ($this->services['App\\Service\\ConfigurationService'] ?? $this->getConfigurationServiceService()), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->privates['App\\Service\\SubmissionService'] ?? $this->getSubmissionServiceService()), ($this->privates['App\\Service\\EventLogService'] ?? $this->getEventLogServiceService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), \dirname(__DIR__, 4));
    }

    /**
     * Gets the private 'annotations.cached_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotations_CachedReaderService()
    {
        return $this->privates['annotations.cached_reader'] = new \Doctrine\Common\Annotations\CachedReader(($this->privates['annotations.reader'] ?? $this->getAnnotations_ReaderService()), $this->load('getAnnotations_CacheService.php'), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->privates['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerUniqueLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\StaticVersionStrategy('v=7.3.3', '%s?%s'), new \Symfony\Component\Asset\Context\RequestStackContext(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), '', false)), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->privates['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('Tau728p5xw', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.property_info' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_PropertyInfoService()
    {
        return $this->privates['cache.property_info'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('FcdFtjC8+n', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.security_expression_language' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SecurityExpressionLanguageService()
    {
        return $this->privates['cache.security_expression_language'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('cAG3s+Rk5Q', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->privates['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('E0MjpYxgc6', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->privates['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('ANpitLhX-k', 0, $this->getParameter('container.build_id'), ($this->targetDir.''.'/pools'), ($this->privates['monolog.logger.cache'] ?? $this->getMonolog_Logger_CacheService())));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->privates['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ($this->privates['dependency_injection.config.container_parameters_resource_checker'] ?? ($this->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)));
            yield 1 => ($this->privates['config.resource.self_checking_resource_checker'] ?? ($this->privates['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()));
        }, 2));
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->privates['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor());
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        $a = new \Symfony\Bridge\Monolog\Logger('php');
        $a->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $a->pushProcessor(($this->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($this->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($a);

        return $this->privates['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, $a, NULL, -1, true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), true);
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->privates['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), \dirname(__DIR__, 4), function () {
            return ($this->privates['debug.file_link_formatter.url_format'] ?? $this->load('getDebug_FileLinkFormatter_UrlFormatService.php'));
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->privates['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->privates['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['debug.security.voter.security.access.authenticated_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php'));
            yield 1 => ($this->privates['debug.security.voter.security.access.role_hierarchy_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService.php'));
            yield 2 => ($this->privates['debug.security.voter.security.access.expression_voter'] ?? $this->load('getDebug_Security_Voter_Security_Access_ExpressionVoterService.php'));
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getDebug_Security_FirewallService()
    {
        return $this->privates['debug.security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(($this->privates['security.firewall.map'] ?? $this->getSecurity_Firewall_MapService()), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'exception_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ErrorListener
     */
    protected function getExceptionListenerService()
    {
        return $this->privates['exception_listener'] = new \Symfony\Component\HttpKernel\EventListener\ErrorListener('error_controller', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), true);
    }

    /**
     * Gets the private 'fos_rest.body_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\BodyListener
     */
    protected function getFosRest_BodyListenerService()
    {
        $this->privates['fos_rest.body_listener'] = $instance = new \FOS\RestBundle\EventListener\BodyListener(new \FOS\RestBundle\Decoder\ContainerDecoderProvider(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'fos_rest.decoder.json' => ['privates', 'fos_rest.decoder.json', 'getFosRest_Decoder_JsonService.php', true],
        ], [
            'fos_rest.decoder.json' => '?',
        ]), ['json' => 'fos_rest.decoder.json']), false);

        $instance->setDefaultFormat(NULL);

        return $instance;
    }

    /**
     * Gets the private 'fos_rest.zone_matcher_listener' shared service.
     *
     * @return \FOS\RestBundle\EventListener\ZoneMatcherListener
     */
    protected function getFosRest_ZoneMatcherListenerService()
    {
        $this->privates['fos_rest.zone_matcher_listener'] = $instance = new \FOS\RestBundle\EventListener\ZoneMatcherListener();

        $instance->addRequestMatcher(new \Symfony\Component\HttpFoundation\RequestMatcher('^/api/*'));

        return $instance;
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->privates['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(($this->privates['uri_signer'] ?? ($this->privates['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner($this->getEnv('APP_SECRET')))), '/_fragment');
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->privates['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(($this->privates['argument_metadata_factory'] ?? ($this->privates['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())));
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->privates['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->privates['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), 'en', ($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->privates['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, [], []);
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->privates['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler((\dirname(__DIR__, 3).'/log/dev.log'), 100, true, NULL, false);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_LoggerService()
    {
        $this->privates['monolog.logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushProcessor(($this->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($this->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->privates['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushProcessor(($this->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($this->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $instance->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->privates['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
        $instance->pushProcessor(($this->privates['App\\Logger\\VarargsLogMessageProcessor'] ?? ($this->privates['App\\Logger\\VarargsLogMessageProcessor'] = new \App\Logger\VarargsLogMessageProcessor())));
        $instance->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
        \Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($instance);

        return $instance;
    }

    /**
     * Gets the private 'parameter_bag' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag
     */
    protected function getParameterBagService()
    {
        return $this->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($this);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->privates['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(($this->services['profiler'] ?? $this->getProfilerService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), NULL, false, false);
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->privates['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
            yield 1 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
            yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
            yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 3), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
        }, 1), new RewindableGenerator(function () {
            yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
            yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 2), new RewindableGenerator(function () {
            yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
        }, 1));
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->privates['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->privates['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(($this->services['router'] ?? $this->getRouterService()), ($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService()), ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()), \dirname(__DIR__, 4), true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->privates['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ($this->privates['security.authentication.provider.guard.api'] ?? $this->load('getSecurity_Authentication_Provider_Guard_ApiService.php'));
            yield 1 => ($this->privates['security.authentication.provider.anonymous.api'] ?? ($this->privates['security.authentication.provider.anonymous.api'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
            yield 2 => ($this->privates['security.authentication.provider.guard.main'] ?? $this->load('getSecurity_Authentication_Provider_Guard_MainService.php'));
            yield 3 => ($this->privates['security.authentication.provider.dao.main'] ?? $this->load('getSecurity_Authentication_Provider_Dao_MainService.php'));
            yield 4 => ($this->privates['security.authentication.provider.anonymous.main'] ?? ($this->privates['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))));
        }, 5), true);

        $instance->setEventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));

        return $instance;
    }

    /**
     * Gets the private 'security.encoder_factory.generic' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\EncoderFactory
     */
    protected function getSecurity_EncoderFactory_GenericService()
    {
        return $this->privates['security.encoder_factory.generic'] = new \Symfony\Component\Security\Core\Encoder\EncoderFactory(['App\\Entity\\User' => ['class' => 'Symfony\\Component\\Security\\Core\\Encoder\\NativePasswordEncoder', 'arguments' => [0 => NULL, 1 => NULL, 2 => 7, 3 => '2y']]]);
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->privates['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'security.firewall.map.context.api' => ['privates', 'security.firewall.map.context.api', 'getSecurity_Firewall_Map_Context_ApiService.php', true],
            'security.firewall.map.context.dev' => ['privates', 'security.firewall.map.context.dev', 'getSecurity_Firewall_Map_Context_DevService.php', true],
            'security.firewall.map.context.main' => ['privates', 'security.firewall.map.context.main', 'getSecurity_Firewall_Map_Context_MainService.php', true],
        ], [
            'security.firewall.map.context.api' => '?',
            'security.firewall.map.context.dev' => '?',
            'security.firewall.map.context.main' => '?',
        ]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ($this->privates['.security.request_matcher.Iy.T22O'] ?? ($this->privates['.security.request_matcher.Iy.T22O'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')));
            yield 'security.firewall.map.context.api' => ($this->privates['.security.request_matcher.p4VlLPC'] ?? ($this->privates['.security.request_matcher.p4VlLPC'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/api')));
            yield 'security.firewall.map.context.main' => ($this->privates['.security.request_matcher.3UEFixr'] ?? ($this->privates['.security.request_matcher.3UEFixr'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/')));
        }, 3));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->privates['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['router'] ?? $this->getRouterService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));

        $instance->registerListener('main', 'logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->privates['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->privates['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        $a = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(($this->services['doctrine'] ?? $this->getDoctrineService()), new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $a->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $this->privates['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener($a, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->privates['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(($this->privates['framework_extra_bundle.argument_name_convertor'] ?? $this->getFrameworkExtraBundle_ArgumentNameConvertorService()), new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), ($this->privates['security.role_hierarchy'] ?? $this->getSecurity_RoleHierarchyService()), ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->privates['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(($this->services['kernel'] ?? $this->get('kernel', 1))), ($this->services['twig'] ?? $this->getTwigService()));
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->privates['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'initialized_session' => ['services', 'session', NULL, true],
            'request_stack' => ['services', 'request_stack', 'getRequestStackService', false],
            'session' => ['services', 'session', 'getSessionService.php', true],
            'session_storage' => ['privates', 'session.storage.native', 'getSession_Storage_NativeService.php', true],
        ], [
            'initialized_session' => '?',
            'request_stack' => '?',
            'session' => '?',
            'session_storage' => '?',
        ]));
    }

    /**
     * Gets the private 'twig.app_variable' shared service.
     *
     * @return \Symfony\Bridge\Twig\AppVariable
     */
    protected function getTwig_AppVariableService()
    {
        $this->privates['twig.app_variable'] = $instance = new \Symfony\Bridge\Twig\AppVariable();

        $instance->setEnvironment('dev');
        $instance->setDebug(true);
        if ($this->has('security.token_storage')) {
            $instance->setTokenStorage(($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService()));
        }
        if ($this->has('request_stack')) {
            $instance->setRequestStack(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
        }

        return $instance;
    }

    /**
     * Gets the private 'twig.configurator.environment' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator
     */
    protected function getTwig_Configurator_EnvironmentService()
    {
        return $this->privates['twig.configurator.environment'] = new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ',');
    }

    /**
     * Gets the private 'twig.extension.assets' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\AssetExtension
     */
    protected function getTwig_Extension_AssetsService()
    {
        return $this->privates['twig.extension.assets'] = new \Symfony\Bridge\Twig\Extension\AssetExtension(($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()));
    }

    /**
     * Gets the private 'twig.extension.code' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\CodeExtension
     */
    protected function getTwig_Extension_CodeService()
    {
        return $this->privates['twig.extension.code'] = new \Symfony\Bridge\Twig\Extension\CodeExtension(($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()), \dirname(__DIR__, 4), 'UTF-8');
    }

    /**
     * Gets the private 'twig.extension.debug.stopwatch' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\StopwatchExtension
     */
    protected function getTwig_Extension_Debug_StopwatchService()
    {
        return $this->privates['twig.extension.debug.stopwatch'] = new \Symfony\Bridge\Twig\Extension\StopwatchExtension(($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))), true);
    }

    /**
     * Gets the private 'twig.extension.dump' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\DumpExtension
     */
    protected function getTwig_Extension_DumpService()
    {
        return $this->privates['twig.extension.dump'] = new \Symfony\Bridge\Twig\Extension\DumpExtension(($this->services['var_dumper.cloner'] ?? $this->getVarDumper_ClonerService()), ($this->privates['var_dumper.html_dumper'] ?? $this->getVarDumper_HtmlDumperService()));
    }

    /**
     * Gets the private 'twig.extension.httpfoundation' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpFoundationExtension
     */
    protected function getTwig_Extension_HttpfoundationService()
    {
        return $this->privates['twig.extension.httpfoundation'] = new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension(new \Symfony\Component\HttpFoundation\UrlHelper(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->privates['router.request_context'] ?? $this->getRouter_RequestContextService())));
    }

    /**
     * Gets the private 'twig.extension.logout_url' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\LogoutUrlExtension
     */
    protected function getTwig_Extension_LogoutUrlService()
    {
        return $this->privates['twig.extension.logout_url'] = new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(($this->privates['security.logout_url_generator'] ?? $this->getSecurity_LogoutUrlGeneratorService()));
    }

    /**
     * Gets the private 'twig.extension.profiler' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\ProfilerExtension
     */
    protected function getTwig_Extension_ProfilerService()
    {
        return $this->privates['twig.extension.profiler'] = new \Symfony\Bridge\Twig\Extension\ProfilerExtension(($this->privates['twig.profile'] ?? ($this->privates['twig.profile'] = new \Twig\Profiler\Profile())), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
    }

    /**
     * Gets the private 'twig.extension.routing' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\RoutingExtension
     */
    protected function getTwig_Extension_RoutingService()
    {
        return $this->privates['twig.extension.routing'] = new \Symfony\Bridge\Twig\Extension\RoutingExtension(($this->services['router'] ?? $this->getRouterService()));
    }

    /**
     * Gets the private 'twig.extension.security' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\SecurityExtension
     */
    protected function getTwig_Extension_SecurityService()
    {
        return $this->privates['twig.extension.security'] = new \Symfony\Bridge\Twig\Extension\SecurityExtension(($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()));
    }

    /**
     * Gets the private 'twig.extension.webprofiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension
     */
    protected function getTwig_Extension_WebprofilerService()
    {
        $a = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $a->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $this->privates['twig.extension.webprofiler'] = new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($a);
    }

    /**
     * Gets the private 'twig.loader.native_filesystem' shared service.
     *
     * @return \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader
     */
    protected function getTwig_Loader_NativeFilesystemService()
    {
        $this->privates['twig.loader.native_filesystem'] = $instance = new \Symfony\Bundle\TwigBundle\Loader\NativeFilesystemLoader([], \dirname(__DIR__, 4));

        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath((\dirname(__DIR__, 4).'/templates/bundles/NelmioApiDocBundle'), 'NelmioApiDoc');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle/Resources/views'), 'NelmioApiDoc');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle/Resources/views'), '!NelmioApiDoc');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Resources/views'), 'Framework');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle/Resources/views'), '!Framework');
        $instance->addPath((\dirname(__DIR__, 4).'/templates/bundles/TwigBundle'), 'Twig');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bundle/Resources/views'), 'Twig');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bundle/Resources/views'), '!Twig');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle/Resources/views'), 'Security');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle/Resources/views'), '!Security');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/web-profiler-bundle/Resources/views'), 'WebProfiler');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/web-profiler-bundle/Resources/views'), '!WebProfiler');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/debug-bundle/Resources/views'), 'Debug');
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/debug-bundle/Resources/views'), '!Debug');
        $instance->addPath((\dirname(__DIR__, 4).'/templates'));
        $instance->addPath((\dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bridge/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'twig.runtime_loader' shared service.
     *
     * @return \Twig\RuntimeLoader\ContainerRuntimeLoader
     */
    protected function getTwig_RuntimeLoaderService()
    {
        return $this->privates['twig.runtime_loader'] = new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => ['services', 'jms_serializer.twig_extension.serializer_runtime_helper', 'getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => ['privates', 'twig.runtime.security_csrf', 'getTwig_Runtime_SecurityCsrfService.php', true],
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => ['privates', 'twig.runtime.httpkernel', 'getTwig_Runtime_HttpkernelService.php', true],
            'Symfony\\Component\\Form\\FormRenderer' => ['privates', 'twig.form.renderer', 'getTwig_Form_RendererService.php', true],
        ], [
            'JMS\\Serializer\\Twig\\SerializerRuntimeHelper' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\CsrfRuntime' => '?',
            'Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => '?',
            'Symfony\\Component\\Form\\FormRenderer' => '?',
        ]));
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilder
     */
    protected function getValidator_BuilderService()
    {
        $this->privates['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $a = ($this->privates['property_info'] ?? $this->getPropertyInfoService());

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
            'App\\Validator\\Constraints\\CountryValidator' => ['privates', 'App\\Validator\\Constraints\\CountryValidator', 'getCountryValidatorService.php', true],
            'App\\Validator\\Constraints\\IdentifierValidator' => ['privates', 'App\\Validator\\Constraints\\IdentifierValidator', 'getIdentifierValidatorService.php', true],
            'App\\Validator\\Constraints\\TimeStringValidator' => ['privates', 'App\\Validator\\Constraints\\TimeStringValidator', 'getTimeStringValidatorService.php', true],
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => ['privates', 'validator.email', 'getValidator_EmailService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => ['privates', 'validator.not_compromised_password', 'getValidator_NotCompromisedPasswordService.php', true],
            'doctrine.orm.validator.unique' => ['privates', 'doctrine.orm.validator.unique', 'getDoctrine_Orm_Validator_UniqueService.php', true],
            'security.validator.user_password' => ['privates', 'security.validator.user_password', 'getSecurity_Validator_UserPasswordService.php', true],
            'validator.expression' => ['privates', 'validator.expression', 'getValidator_ExpressionService.php', true],
        ], [
            'App\\Validator\\Constraints\\CountryValidator' => '?',
            'App\\Validator\\Constraints\\IdentifierValidator' => '?',
            'App\\Validator\\Constraints\\TimeStringValidator' => '?',
            'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => '?',
            'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => '?',
            'Symfony\\Component\\Validator\\Constraints\\NotCompromisedPasswordValidator' => '?',
            'doctrine.orm.validator.unique' => '?',
            'security.validator.user_password' => '?',
            'validator.expression' => '?',
        ])));
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => (\dirname(__DIR__, 5).'/lib/vendor/symfony/form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()));
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([0 => new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(($this->services['doctrine'] ?? $this->getDoctrineService()))]);
        $instance->addLoader(new \Symfony\Bridge\Doctrine\Validator\DoctrineLoader(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), NULL));
        $instance->addLoader(new \Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader($a, $a, $a, NULL));

        return $instance;
    }

    /**
     * Gets the private 'var_dumper.html_dumper' shared service.
     *
     * @return \Symfony\Component\VarDumper\Dumper\HtmlDumper
     */
    protected function getVarDumper_HtmlDumperService()
    {
        $this->privates['var_dumper.html_dumper'] = $instance = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);

        $instance->setDisplayOptions(['fileLinkFormat' => ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())]);

        return $instance;
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->privates['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->privates['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(($this->services['twig'] ?? $this->getTwigService()), false, 2, ($this->services['router'] ?? $this->getRouterService()), '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ($this->privates['web_profiler.csp.handler'] ?? $this->getWebProfiler_Csp_HandlerService()));
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }

        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name): bool
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value): void
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag(): ParameterBagInterface
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.cache_dir' => false,
        'doctrine.orm.proxy_dir' => false,
        'kernel.secret' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
    ];
    private $dynamicParameters = [];

    private function getDynamicParameter(string $name)
    {
        switch ($name) {
            case 'kernel.cache_dir': $value = $this->targetDir.''; break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDir.''.'/doctrine/orm/Proxies'); break;
            case 'kernel.secret': $value = $this->getEnv('APP_SECRET'); break;
            case 'session.save_path': $value = ($this->targetDir.''.'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDir.''.'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDir.''.'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDir.''.'/srcApp_KernelDevDebugContainer.xml'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    protected function getDefaultParameters(): array
    {
        return [
            'kernel.root_dir' => (\dirname(__DIR__, 4).'/src'),
            'kernel.project_dir' => \dirname(__DIR__, 4),
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'src',
            'kernel.logs_dir' => (\dirname(__DIR__, 3).'/log'),
            'kernel.bundles' => [
                'DoctrineCacheBundle' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'JMSSerializerBundle' => 'JMS\\SerializerBundle\\JMSSerializerBundle',
                'NelmioApiDocBundle' => 'Nelmio\\ApiDocBundle\\NelmioApiDocBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'FOSRestBundle' => 'FOS\\RestBundle\\FOSRestBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'DoctrineMigrationsBundle' => 'Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle',
                'DoctrineFixturesBundle' => 'Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'MakerBundle' => 'Symfony\\Bundle\\MakerBundle\\MakerBundle',
            ],
            'kernel.bundles_metadata' => [
                'DoctrineCacheBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-cache-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineCacheBundle',
                ],
                'DoctrineBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ],
                'JMSSerializerBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/jms/serializer-bundle'),
                    'namespace' => 'JMS\\SerializerBundle',
                ],
                'NelmioApiDocBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/nelmio/api-doc-bundle'),
                    'namespace' => 'Nelmio\\ApiDocBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/sensio/framework-extra-bundle/src'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'MonologBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'FrameworkBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/symfony/framework-bundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'TwigBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/symfony/twig-bundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'SecurityBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/symfony/security-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'FOSRestBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/friendsofsymfony/rest-bundle'),
                    'namespace' => 'FOS\\RestBundle',
                ],
                'WebProfilerBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/symfony/web-profiler-bundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'DoctrineMigrationsBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-migrations-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\MigrationsBundle',
                ],
                'DoctrineFixturesBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/doctrine/doctrine-fixtures-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\FixturesBundle',
                ],
                'DebugBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/symfony/debug-bundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ],
                'MakerBundle' => [
                    'path' => (\dirname(__DIR__, 5).'/lib/vendor/symfony/maker-bundle/src'),
                    'namespace' => 'Symfony\\Bundle\\MakerBundle',
                ],
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'srcApp_KernelDevDebugContainer',
            'container.dumper.inline_class_loader' => true,
            'locale' => 'en',
            'domjudge.version' => '7.3.3',
            'domjudge.bindir' => (\dirname(__DIR__, 5).'/bin'),
            'domjudge.etcdir' => (\dirname(__DIR__, 5).'/etc'),
            'domjudge.webappdir' => \dirname(__DIR__, 4),
            'domjudge.libdir' => (\dirname(__DIR__, 5).'/lib'),
            'domjudge.sqldir' => (\dirname(__DIR__, 5).'/sql'),
            'domjudge.libvendordir' => (\dirname(__DIR__, 5).'/lib/vendor'),
            'domjudge.logdir' => (\dirname(__DIR__, 5).'/output/log'),
            'domjudge.rundir' => (\dirname(__DIR__, 5).'/output/run'),
            'domjudge.tmpdir' => (\dirname(__DIR__, 5).'/output/tmp'),
            'domjudge.baseurl' => 'http://localhost/',
            'domjudge.submitclient_enabled' => 'yes',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => [
                'default' => 'doctrine.orm.default_entity_manager',
            ],
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => [
                'tinyint' => [
                    'class' => 'App\\Doctrine\\DBAL\\Types\\TinyIntType',
                ],
                'blobtext' => [
                    'class' => 'App\\Doctrine\\DBAL\\Types\\BlobTextType',
                ],
                'json' => [
                    'class' => 'App\\Doctrine\\DBAL\\Types\\JsonType',
                ],
                'binaryjson' => [
                    'class' => 'App\\Doctrine\\DBAL\\Types\\BinaryJsonType',
                ],
                'internal_error_status' => [
                    'class' => 'App\\Doctrine\\DBAL\\Types\\InternalErrorStatusType',
                ],
            ],
            'doctrine.connections' => [
                'default' => 'doctrine.dbal.default_connection',
            ],
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'nelmio_api_doc.areas' => [
                0 => 'default',
            ],
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.console' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                        3 => 'request',
                    ],
                ],
                'monolog.handler.main' => [
                    'type' => 'exclusive',
                    'elements' => [
                        0 => 'event',
                    ],
                ],
            ],
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'en',
            'kernel.error_controller' => 'error_controller',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_secure' => 'auto',
                'cookie_httponly' => true,
                'cookie_samesite' => 'lax',
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => 0,
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.resource' => 'kernel::loadRoutes',
            'router.cache_class_prefix' => 'srcApp_KernelDevDebugContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'twig.exception_listener.controller' => NULL,
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
                1 => 'form_theme.html.twig',
            ],
            'twig.default_path' => (\dirname(__DIR__, 4).'/templates'),
            'security.authentication.trust_resolver.anonymous_class' => NULL,
            'security.authentication.trust_resolver.rememberme_class' => NULL,
            'security.role_hierarchy.roles' => [
                'ROLE_JURY' => [
                    0 => 'ROLE_API',
                    1 => 'ROLE_API_READER',
                    2 => 'ROLE_API_SOURCE_READER',
                ],
                'ROLE_ADMIN' => [
                    0 => 'ROLE_JURY',
                    1 => 'ROLE_JUDGEHOST',
                    2 => 'ROLE_API_WRITER',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'doctrine_migrations.dir_name' => (\dirname(__DIR__, 4).'/src/Migrations'),
            'doctrine_migrations.namespace' => 'DoctrineMigrations',
            'doctrine_migrations.table_name' => 'migration_versions',
            'doctrine_migrations.column_name' => 'version',
            'doctrine_migrations.column_length' => 14,
            'doctrine_migrations.executed_at_column_name' => 'executed_at',
            'doctrine_migrations.all_or_nothing' => false,
            'doctrine_migrations.name' => 'Application Migrations',
            'doctrine_migrations.custom_template' => NULL,
            'doctrine_migrations.organize_migrations' => false,
            'env(VAR_DUMPER_SERVER)' => '127.0.0.1:9912',
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'data_collector.doctrine' => [
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ],
                'data_collector.http_client' => [
                    0 => 'http_client',
                    1 => '@WebProfiler/Collector/http_client.html.twig',
                ],
                'data_collector.dump' => [
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [
                0 => 'console.command.public_alias.App\\Command\\CheckDatabaseConfigurationDefaultValuesCommand',
                1 => 'console.command.public_alias.App\\Command\\ImportEventFeedCommand',
                2 => 'console.command.public_alias.App\\Command\\LoadExampleDataCommand',
                3 => 'console.command.public_alias.App\\Command\\ResetUserPasswordCommand',
                4 => 'console.command.public_alias.App\\Command\\ScoreboardMergeCommand',
                5 => 'console.command.public_alias.doctrine_cache.contains_command',
                6 => 'console.command.public_alias.doctrine_cache.delete_command',
                7 => 'console.command.public_alias.doctrine_cache.flush_command',
                8 => 'console.command.public_alias.doctrine_cache.stats_command',
            ],
        ];
    }

    protected function throw($message)
    {
        throw new RuntimeException($message);
    }
}
