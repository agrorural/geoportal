<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/9047f2f')) {
            // _assetic_9047f2f
            if ($pathinfo === '/css/9047f2f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9047f2f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9047f2f',);
            }

            if (0 === strpos($pathinfo, '/css/9047f2f_')) {
                // _assetic_9047f2f_0
                if ($pathinfo === '/css/9047f2f_bootstrap.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9047f2f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9047f2f_0',);
                }

                // _assetic_9047f2f_1
                if ($pathinfo === '/css/9047f2f_font-awesome.min_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9047f2f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_9047f2f_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

        }

        // mapbender_start
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mapbender_start');
            }

            return array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\WelcomeController::listAction',  '_route' => 'mapbender_start',);
        }

        if (0 === strpos($pathinfo, '/application')) {
            // mapbender_core_application_assets
            if (preg_match('#^/application/(?P<slug>[^/]++)/assets/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_assets')), array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::assetsAction',));
            }

            // mapbender_core_application_element
            if (preg_match('#^/application/(?P<slug>[^/]++)/element(?:/(?P<id>[^/]++)(?:/(?P<action>.+))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_element')), array (  'id' => NULL,  'action' => NULL,  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::elementAction',));
            }

            // mapbender_core_application_application
            if (preg_match('#^/application/(?P<slug>[^/\\.]++)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_application')), array (  '_format' => 'html',  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::applicationAction',));
            }

            // mapbender_core_application_configuration
            if (preg_match('#^/application/(?P<slug>[^/]++)/config$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_configuration')), array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::configurationAction',));
            }

            // mapbender_core_application_metadata
            if (preg_match('#^/application/(?P<slug>[^/]++)/metadata$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_metadata')), array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::metadataAction',));
            }

            // mapbender_core_application_instancetunnel
            if (preg_match('#^/application/(?P<slug>[^/]++)/instance/(?P<instanceId>[^/]++)/tunnel$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_core_application_instancetunnel')), array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\ApplicationController::instanceTunnelAction',));
            }

        }

        // mapbender_core_translation_trans
        if ($pathinfo === '/trans') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mapbender_core_translation_trans;
            }

            return array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\TranslationController::transAction',  '_route' => 'mapbender_core_translation_trans',);
        }
        not_mapbender_core_translation_trans:

        // mapbender_core_welcome_list
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mapbender_core_welcome_list');
            }

            return array (  '_controller' => 'Mapbender\\CoreBundle\\Controller\\WelcomeController::listAction',  '_route' => 'mapbender_core_welcome_list',);
        }

        if (0 === strpos($pathinfo, '/manager/application')) {
            // mapbender_manager_application_index
            if ($pathinfo === '/manager/applications') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_index;
                }

                return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::indexAction',  '_route' => 'mapbender_manager_application_index',);
            }
            not_mapbender_manager_application_index:

            // mapbender_manager_application_new
            if ($pathinfo === '/manager/application/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_new;
                }

                return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::newAction',  '_route' => 'mapbender_manager_application_new',);
            }
            not_mapbender_manager_application_new:

            if (0 === strpos($pathinfo, '/manager/application/export')) {
                // mapbender_manager_application_exportform
                if ($pathinfo === '/manager/application/export') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_application_exportform;
                    }

                    return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::exportFormAction',  '_route' => 'mapbender_manager_application_exportform',);
                }
                not_mapbender_manager_application_exportform:

                // mapbender_manager_application_export
                if ($pathinfo === '/manager/application/export') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_application_export;
                    }

                    return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::exportAction',  '_route' => 'mapbender_manager_application_export',);
                }
                not_mapbender_manager_application_export:

            }

            if (0 === strpos($pathinfo, '/manager/application/import')) {
                // mapbender_manager_application_importform
                if ($pathinfo === '/manager/application/import') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_application_importform;
                    }

                    return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::importFormAction',  '_route' => 'mapbender_manager_application_importform',);
                }
                not_mapbender_manager_application_importform:

                // mapbender_manager_application_import
                if ($pathinfo === '/manager/application/import') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_application_import;
                    }

                    return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::importAction',  '_route' => 'mapbender_manager_application_import',);
                }
                not_mapbender_manager_application_import:

            }

            // mapbender_manager_application_copydirectly
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/copydirectly$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_copydirectly;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_copydirectly')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::copyDirectlyAction',));
            }
            not_mapbender_manager_application_copydirectly:

            // mapbender_manager_application_create
            if ($pathinfo === '/manager/application') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_create;
                }

                return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::createAction',  '_route' => 'mapbender_manager_application_create',);
            }
            not_mapbender_manager_application_create:

            // mapbender_manager_application_edit
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_edit')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::editAction',));
            }
            not_mapbender_manager_application_edit:

            // mapbender_manager_application_update
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_update')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::updateAction',));
            }
            not_mapbender_manager_application_update:

            // mapbender_manager_application_copyform
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/copyform$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_copyform;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_copyform')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::copyformAction',));
            }
            not_mapbender_manager_application_copyform:

            // mapbender_manager_application_togglestate
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/state$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_togglestate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_togglestate')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::toggleStateAction',));
            }
            not_mapbender_manager_application_togglestate:

            // mapbender_manager_application_confirmdelete
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_confirmdelete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_confirmdelete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::confirmDeleteAction',));
            }
            not_mapbender_manager_application_confirmdelete:

            // mapbender_manager_application_delete
            if (preg_match('#^/manager/application/(?P<slug>[\\w-]+)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_delete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::deleteAction',));
            }
            not_mapbender_manager_application_delete:

            // mapbender_manager_application_newlayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_newlayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_newlayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::newLayersetAction',));
            }
            not_mapbender_manager_application_newlayerset:

            // mapbender_manager_application_editlayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_editlayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_editlayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::editLayersetAction',));
            }
            not_mapbender_manager_application_editlayerset:

            // mapbender_manager_application_savelayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/create$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_savelayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_savelayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::saveLayersetAction',));
            }
            not_mapbender_manager_application_savelayerset:

            // mapbender_manager_application_savelayerset_1
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/save$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_savelayerset_1;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_savelayerset_1')), array (  'layersetId' => NULL,  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::saveLayersetAction',));
            }
            not_mapbender_manager_application_savelayerset_1:

            // mapbender_manager_application_confirmdeletelayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/confirmdelete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_confirmdeletelayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_confirmdeletelayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::confirmDeleteLayersetAction',));
            }
            not_mapbender_manager_application_confirmdeletelayerset:

            // mapbender_manager_application_deletelayerset
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_deletelayerset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_deletelayerset')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::deleteLayersetAction',));
            }
            not_mapbender_manager_application_deletelayerset:

            // mapbender_manager_application_listsources
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/list$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_listsources;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_listsources')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::listSourcesAction',));
            }
            not_mapbender_manager_application_listsources:

            // mapbender_manager_application_addinstance
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/source/(?P<sourceId>[^/]++)/add$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_mapbender_manager_application_addinstance;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_addinstance')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::addInstanceAction',));
            }
            not_mapbender_manager_application_addinstance:

            // mapbender_manager_application_deleteinstance
            if (preg_match('#^/manager/application/(?P<slug>[^/]++)/layerset/(?P<layersetId>[^/]++)/instance/(?P<instanceId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mapbender_manager_application_deleteinstance;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_application_deleteinstance')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::deleteInstanceAction',));
            }
            not_mapbender_manager_application_deleteinstance:

        }

        // mapbender_manager_application_list
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mapbender_manager_application_list');
            }

            return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ApplicationController::listAction',  '_route' => 'mapbender_manager_application_list',);
        }

        if (0 === strpos($pathinfo, '/manager')) {
            if (0 === strpos($pathinfo, '/manager/application')) {
                // mapbender_manager_element_select
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/select$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_mapbender_manager_element_select;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_select')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::selectAction',));
                }
                not_mapbender_manager_element_select:

                // mapbender_manager_element_new
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/new$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_element_new;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_new')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::newAction',));
                }
                not_mapbender_manager_element_new:

                // mapbender_manager_element_create
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/new$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_element_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_create')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::createAction',));
                }
                not_mapbender_manager_element_create:

                // mapbender_manager_element_edit
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_element_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_edit')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::editAction',));
                }
                not_mapbender_manager_element_edit:

                // mapbender_manager_element_update
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_element_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_update')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::updateAction',));
                }
                not_mapbender_manager_element_update:

                // mapbender_manager_element_security
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/(?P<id>\\d+)/security$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_security')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::securityAction',));
                }

                // mapbender_manager_element_confirmdelete
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/(?P<id>\\d+)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_element_confirmdelete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_confirmdelete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::confirmDeleteAction',));
                }
                not_mapbender_manager_element_confirmdelete:

                // mapbender_manager_element_delete
                if (preg_match('#^/manager/application/(?P<slug>[^/]++)/element/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_element_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_delete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::deleteAction',));
                }
                not_mapbender_manager_element_delete:

                if (0 === strpos($pathinfo, '/manager/application/element')) {
                    // mapbender_manager_element_weight
                    if (preg_match('#^/manager/application/element/(?P<id>[^/]++)/weight$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_element_weight;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_weight')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::weightAction',));
                    }
                    not_mapbender_manager_element_weight:

                    // mapbender_manager_element_enable
                    if (preg_match('#^/manager/application/element/(?P<id>[^/]++)/enable$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_element_enable;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_element_enable')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\ElementController::enableAction',));
                    }
                    not_mapbender_manager_element_enable:

                }

            }

            if (0 === strpos($pathinfo, '/manager/repository')) {
                // mapbender_manager_repository_index
                if (preg_match('#^/manager/repository(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_repository_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_index')), array (  'page' => 1,  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::indexAction',));
                }
                not_mapbender_manager_repository_index:

                // mapbender_manager_repository_new
                if ($pathinfo === '/manager/repository/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_mapbender_manager_repository_new;
                    }

                    return array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::newAction',  '_route' => 'mapbender_manager_repository_new',);
                }
                not_mapbender_manager_repository_new:

                // mapbender_manager_repository_create
                if (0 === strpos($pathinfo, '/manager/repository/create') && preg_match('#^/manager/repository/create/(?P<managertype>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_mapbender_manager_repository_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_create')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::createAction',));
                }
                not_mapbender_manager_repository_create:

                if (0 === strpos($pathinfo, '/manager/repository/source')) {
                    // mapbender_manager_repository_view
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_manager_repository_view;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_view')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::viewAction',));
                    }
                    not_mapbender_manager_repository_view:

                    // mapbender_manager_repository_confirmdelete
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)/confirmdelete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_manager_repository_confirmdelete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_confirmdelete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::confirmdeleteAction',));
                    }
                    not_mapbender_manager_repository_confirmdelete:

                    // mapbender_manager_repository_delete
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_repository_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_delete')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::deleteAction',));
                    }
                    not_mapbender_manager_repository_delete:

                    // mapbender_manager_repository_updateform
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)/updateform$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_manager_repository_updateform;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_updateform')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::updateformAction',));
                    }
                    not_mapbender_manager_repository_updateform:

                    // mapbender_manager_repository_update
                    if (preg_match('#^/manager/repository/source/(?P<sourceId>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_repository_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_update')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::updateAction',));
                    }
                    not_mapbender_manager_repository_update:

                }

                if (0 === strpos($pathinfo, '/manager/repository/application')) {
                    // mapbender_manager_repository_instance
                    if (preg_match('#^/manager/repository/application/(?P<slug>[^/]++)/instance/(?P<instanceId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_instance')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::instanceAction',));
                    }

                    // mapbender_manager_repository_instanceweight
                    if (preg_match('#^/manager/repository/application/(?P<slug>[^/]++)/instance/(?P<layersetId>[^/]++)/weight/(?P<instanceId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_instanceweight')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::instanceWeightAction',));
                    }

                    // mapbender_manager_repository_instanceenabled
                    if (preg_match('#^/manager/repository/application/(?P<slug>[^/]++)/instance/(?P<layersetId>[^/]++)/enabled/(?P<instanceId>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_manager_repository_instanceenabled;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_instanceenabled')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::instanceEnabledAction',));
                    }
                    not_mapbender_manager_repository_instanceenabled:

                    // mapbender_manager_repository_instancelayerweight
                    if (preg_match('#^/manager/repository/application/(?P<slug>[^/]++)/instanceLayer/(?P<instanceId>[^/]++)/weight/(?P<instLayerId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_manager_repository_instancelayerweight')), array (  '_controller' => 'Mapbender\\ManagerBundle\\Controller\\RepositoryController::instanceLayerWeightAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/manager/repository/wms')) {
                    // mapbender_wms_repository_new
                    if ($pathinfo === '/manager/repository/wms/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_new;
                        }

                        return array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::newAction',  '_route' => 'mapbender_wms_repository_new',);
                    }
                    not_mapbender_wms_repository_new:

                    // mapbender_wms_repository_start
                    if ($pathinfo === '/manager/repository/wms/start') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_start;
                        }

                        return array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::startAction',  '_route' => 'mapbender_wms_repository_start',);
                    }
                    not_mapbender_wms_repository_start:

                    // mapbender_wms_repository_view
                    if (preg_match('#^/manager/repository/wms(?P<wms>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_view;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_view')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::viewAction',));
                    }
                    not_mapbender_wms_repository_view:

                    // mapbender_wms_repository_create
                    if ($pathinfo === '/manager/repository/wms/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_mapbender_wms_repository_create;
                        }

                        return array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::createAction',  '_route' => 'mapbender_wms_repository_create',);
                    }
                    not_mapbender_wms_repository_create:

                    // mapbender_wms_repository_updateform
                    if (preg_match('#^/manager/repository/wms/(?P<sourceId>[^/]++)/updateform$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_updateform')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::updateformAction',));
                    }

                    // mapbender_wms_repository_update
                    if (preg_match('#^/manager/repository/wms/(?P<sourceId>[^/]++)/update$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_update')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::updateAction',));
                    }

                    // mapbender_wms_repository_delete
                    if (preg_match('#^/manager/repository/wms/(?P<sourceId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_delete')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::deleteAction',));
                    }
                    not_mapbender_wms_repository_delete:

                    // mapbender_wms_repository_deleteinstance
                    if (preg_match('#^/manager/repository/wms/(?P<slug>[^/]++)/instance/(?P<instanceId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_mapbender_wms_repository_deleteinstance;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_deleteinstance')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::deleteInstanceAction',));
                    }
                    not_mapbender_wms_repository_deleteinstance:

                    // mapbender_wms_repository_instance
                    if (0 === strpos($pathinfo, '/manager/repository/wms/instance') && preg_match('#^/manager/repository/wms/instance/(?P<slug>[^/]++)/(?P<instanceId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_instance')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::instanceAction',));
                    }

                    // mapbender_wms_repository_instancelayerpriority
                    if (preg_match('#^/manager/repository/wms/(?P<slug>[^/]++)/instance/(?P<instanceId>[^/]++)/priority/(?P<instLayerId>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_instancelayerpriority')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::instanceLayerPriorityAction',));
                    }

                    if (0 === strpos($pathinfo, '/manager/repository/wms/instance')) {
                        // mapbender_wms_repository_instanceenabled
                        if (preg_match('#^/manager/repository/wms/instance/(?P<slug>[^/]++)/enabled/(?P<instanceId>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mapbender_wms_repository_instanceenabled;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mapbender_wms_repository_instanceenabled')), array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::instanceEnabledAction',));
                        }
                        not_mapbender_wms_repository_instanceenabled:

                        // mapbender_wms_repository_metadata
                        if ($pathinfo === '/manager/repository/wms/instance/metadata') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_mapbender_wms_repository_metadata;
                            }

                            return array (  '_controller' => 'Mapbender\\WmsBundle\\Controller\\RepositoryController::metadataAction',  '_route' => 'mapbender_wms_repository_metadata',);
                        }
                        not_mapbender_wms_repository_metadata:

                    }

                }

            }

            // fom_manager_manager_index
            if (rtrim($pathinfo, '/') === '/manager') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fom_manager_manager_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fom_manager_manager_index');
                }

                return array (  '_controller' => 'FOM\\ManagerBundle\\Controller\\ManagerController::indexAction',  '_route' => 'fom_manager_manager_index',);
            }
            not_fom_manager_manager_index:

            if (0 === strpos($pathinfo, '/manager/acl')) {
                // fom_user_acl_index
                if ($pathinfo === '/manager/acl') {
                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::indexAction',  '_route' => 'fom_user_acl_index',);
                }

                if (0 === strpos($pathinfo, '/manager/acl/edit')) {
                    // fom_user_acl_edit
                    if ($pathinfo === '/manager/acl/edit') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_acl_edit;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::editAction',  '_route' => 'fom_user_acl_edit',);
                    }
                    not_fom_user_acl_edit:

                    // fom_user_acl_update
                    if ($pathinfo === '/manager/acl/edit') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fom_user_acl_update;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::updateAction',  '_route' => 'fom_user_acl_update',);
                    }
                    not_fom_user_acl_update:

                }

                // fom_user_acl_overview
                if ($pathinfo === '/manager/acl/overview') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_acl_overview;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::overviewAction',  '_route' => 'fom_user_acl_overview',);
                }
                not_fom_user_acl_overview:

                // fom_user_acl_aclsid
                if ($pathinfo === '/manager/acl/sid') {
                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\ACLController::aclsidAction',  '_route' => 'fom_user_acl_aclsid',);
                }

            }

            if (0 === strpos($pathinfo, '/manager/group')) {
                // fom_user_group_index
                if ($pathinfo === '/manager/group') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_group_index;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::indexAction',  '_route' => 'fom_user_group_index',);
                }
                not_fom_user_group_index:

                // fom_user_group_new
                if ($pathinfo === '/manager/group/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_group_new;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'fom_user_group_new',);
                }
                not_fom_user_group_new:

                // fom_user_group_create
                if ($pathinfo === '/manager/group') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_group_create;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'fom_user_group_create',);
                }
                not_fom_user_group_create:

                // fom_user_group_edit
                if (preg_match('#^/manager/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_group_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_group_edit')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::editAction',));
                }
                not_fom_user_group_edit:

                // fom_user_group_update
                if (preg_match('#^/manager/group/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_group_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_group_update')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::updateAction',));
                }
                not_fom_user_group_update:

                // fom_user_group_delete
                if (preg_match('#^/manager/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_group_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_group_delete')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\GroupController::deleteAction',));
                }
                not_fom_user_group_delete:

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            if (0 === strpos($pathinfo, '/user/log')) {
                if (0 === strpos($pathinfo, '/user/login')) {
                    // fom_user_login_login
                    if ($pathinfo === '/user/login') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_login_login;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\LoginController::loginAction',  '_route' => 'fom_user_login_login',);
                    }
                    not_fom_user_login_login:

                    // fom_user_login_logincheck
                    if ($pathinfo === '/user/login/check') {
                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\LoginController::loginCheckAction',  '_route' => 'fom_user_login_logincheck',);
                    }

                }

                // fom_user_login_logout
                if ($pathinfo === '/user/logout') {
                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\LoginController::logoutAction',  '_route' => 'fom_user_login_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/user/password')) {
                // fom_user_password_send
                if ($pathinfo === '/user/password/send') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_password_send;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::sendAction',  '_route' => 'fom_user_password_send',);
                }
                not_fom_user_password_send:

                // fom_user_password_form
                if ($pathinfo === '/user/password') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_password_form;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::formAction',  '_route' => 'fom_user_password_form',);
                }
                not_fom_user_password_form:

                // fom_user_password_request
                if ($pathinfo === '/user/password') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_password_request;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::requestAction',  '_route' => 'fom_user_password_request',);
                }
                not_fom_user_password_request:

            }

            if (0 === strpos($pathinfo, '/user/re')) {
                if (0 === strpos($pathinfo, '/user/reset')) {
                    // fom_user_password_tokenreset
                    if ($pathinfo === '/user/reset/reset') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fom_user_password_tokenreset;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::tokenResetAction',  '_route' => 'fom_user_password_tokenreset',);
                    }
                    not_fom_user_password_tokenreset:

                    // fom_user_password_reset
                    if ($pathinfo === '/user/reset') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_password_reset;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::resetAction',  '_route' => 'fom_user_password_reset',);
                    }
                    not_fom_user_password_reset:

                    // fom_user_password_password
                    if ($pathinfo === '/user/reset') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fom_user_password_password;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::passwordAction',  '_route' => 'fom_user_password_password',);
                    }
                    not_fom_user_password_password:

                    // fom_user_password_done
                    if ($pathinfo === '/user/reset/done') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_password_done;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\PasswordController::doneAction',  '_route' => 'fom_user_password_done',);
                    }
                    not_fom_user_password_done:

                }

                if (0 === strpos($pathinfo, '/user/registration')) {
                    // fom_user_registration_send
                    if ($pathinfo === '/user/registration/send') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_registration_send;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::sendAction',  '_route' => 'fom_user_registration_send',);
                    }
                    not_fom_user_registration_send:

                    // fom_user_registration_form
                    if ($pathinfo === '/user/registration') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fom_user_registration_form;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::formAction',  '_route' => 'fom_user_registration_form',);
                    }
                    not_fom_user_registration_form:

                    // fom_user_registration_register
                    if ($pathinfo === '/user/registration') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_fom_user_registration_register;
                        }

                        return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::register',  '_route' => 'fom_user_registration_register',);
                    }
                    not_fom_user_registration_register:

                }

            }

            // fom_user_registration_confirm
            if ($pathinfo === '/user/activate') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fom_user_registration_confirm;
                }

                return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::confirmAction',  '_route' => 'fom_user_registration_confirm',);
            }
            not_fom_user_registration_confirm:

            if (0 === strpos($pathinfo, '/user/registration')) {
                // fom_user_registration_reset
                if ($pathinfo === '/user/registration/reset') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fom_user_registration_reset;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::reset',  '_route' => 'fom_user_registration_reset',);
                }
                not_fom_user_registration_reset:

                // fom_user_registration_done
                if ($pathinfo === '/user/registration/done') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fom_user_registration_done;
                    }

                    return array (  '_controller' => 'FOM\\UserBundle\\Controller\\RegistrationController::doneAction',  '_route' => 'fom_user_registration_done',);
                }
                not_fom_user_registration_done:

            }

        }

        if (0 === strpos($pathinfo, '/manager/user')) {
            // fom_user_user_index
            if ($pathinfo === '/manager/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fom_user_user_index;
                }

                return array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'fom_user_user_index',);
            }
            not_fom_user_user_index:

            // fom_user_user_new
            if ($pathinfo === '/manager/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fom_user_user_new;
                }

                return array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'fom_user_user_new',);
            }
            not_fom_user_user_new:

            // fom_user_user_create
            if ($pathinfo === '/manager/user') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fom_user_user_create;
                }

                return array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'fom_user_user_create',);
            }
            not_fom_user_user_create:

            // fom_user_user_edit
            if (preg_match('#^/manager/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fom_user_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_user_edit')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::editAction',));
            }
            not_fom_user_user_edit:

            // fom_user_user_update
            if (preg_match('#^/manager/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fom_user_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_user_update')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_fom_user_user_update:

            // fom_user_user_delete
            if (preg_match('#^/manager/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fom_user_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fom_user_user_delete')), array (  '_controller' => 'FOM\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_fom_user_user_delete:

        }

        // owsproxy3_core_owsproxy_entrypoint
        if (rtrim($pathinfo, '/') === '/owsproxy') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'owsproxy3_core_owsproxy_entrypoint');
            }

            return array (  '_controller' => 'OwsProxy3\\CoreBundle\\Controller\\OwsProxyController::entryPointAction',  '_route' => 'owsproxy3_core_owsproxy_entrypoint',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
