<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // solicitud_monitoria_seguridad_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'solicitud_monitoria_seguridad_homepage');
            }

            return array (  '_controller' => 'solicitudMonitoria\\SeguridadBundle\\Controller\\DefaultController::loginAction',  '_route' => 'solicitud_monitoria_seguridad_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // solicitud_monitoria_seguridad_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'solicitudMonitoria\\SeguridadBundle\\Controller\\DefaultController::loginAction',  '_route' => 'solicitud_monitoria_seguridad_login',);
                }

                // solicitud_monitoria_seguridad_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'solicitud_monitoria_seguridad_login_check');
                }

            }

            // solicitud_monitoria_seguridad_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'solicitud_monitoria_seguridad_logout');
            }

        }

        // solicitud_monitoria_seguridad_index
        if ($pathinfo === '/redirect') {
            return array (  '_controller' => 'solicitudMonitoria\\SeguridadBundle\\Controller\\DefaultController::indexAction',  '_route' => 'solicitud_monitoria_seguridad_index',);
        }

        // solicitud_monitoria_seguridad_dirDepartamento
        if ($pathinfo === '/dirDepartamento') {
            return array (  '_controller' => 'solicitudMonitoria\\SeguridadBundle\\Controller\\DefaultController::dirDepartamentoAction',  '_route' => 'solicitud_monitoria_seguridad_dirDepartamento',);
        }

        if (0 === strpos($pathinfo, '/jefeSeccion')) {
            // solicitud_monitoria_jefe_seccion_homepage
            if (rtrim($pathinfo, '/') === '/jefeSeccion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'solicitud_monitoria_jefe_seccion_homepage');
                }

                return array (  '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::indexAction',  '_route' => 'solicitud_monitoria_jefe_seccion_homepage',);
            }

            // solicitud_monitoria_jefe_seccion_monitorias
            if ($pathinfo === '/jefeSeccion/monitorias') {
                return array (  '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::monitoriasAction',  '_route' => 'solicitud_monitoria_jefe_seccion_monitorias',);
            }

            if (0 === strpos($pathinfo, '/jefeSeccion/a')) {
                // solicitud_monitoria_jefe_seccion_actualizar_monitorias
                if ($pathinfo === '/jefeSeccion/actualizar_monitorias') {
                    return array (  '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::actualizarmoniAction',  '_route' => 'solicitud_monitoria_jefe_seccion_actualizar_monitorias',);
                }

                if (0 === strpos($pathinfo, '/jefeSeccion/asignaciones')) {
                    // solicitud_monitoria_jefe_seccion_asignaciones
                    if ($pathinfo === '/jefeSeccion/asignaciones') {
                        return array (  '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::asignacionesAction',  '_route' => 'solicitud_monitoria_jefe_seccion_asignaciones',);
                    }

                    // solicitud_monitoria_jefe_seccion_asignaciones_actualizar
                    if ($pathinfo === '/jefeSeccion/asignaciones_actualizar') {
                        return array (  '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::actualizarasignaAction',  '_route' => 'solicitud_monitoria_jefe_seccion_asignaciones_actualizar',);
                    }

                }

            }

            // solicitud_monitoria_jefe_seccion_estudiante
            if (0 === strpos($pathinfo, '/jefeSeccion/estudiante') && preg_match('#^/jefeSeccion/estudiante/(?P<idEstudiante>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'solicitud_monitoria_jefe_seccion_estudiante')), array (  '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::estudianteAction',));
            }

        }

        // solicitud_monitoria_cursos_cursos
        if (rtrim($pathinfo, '/') === '/cursos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'solicitud_monitoria_cursos_cursos');
            }

            return array (  '_controller' => 'solicitudMonitoria\\CursosBundle\\Controller\\DefaultController::cursosAction',  '_route' => 'solicitud_monitoria_cursos_cursos',);
        }

        if (0 === strpos($pathinfo, '/estudiante')) {
            // solicitud_monitoria_estudiante_homepage
            if (rtrim($pathinfo, '/') === '/estudiante') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'solicitud_monitoria_estudiante_homepage');
                }

                return array (  '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'solicitud_monitoria_estudiante_homepage',);
            }

            // solicitud_monitoria_estudiante_informacion
            if ($pathinfo === '/estudiante/informacion') {
                return array (  '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::informacionAction',  '_route' => 'solicitud_monitoria_estudiante_informacion',);
            }

            // solicitud_monitoria_estudiante_actualizar_informacion
            if ($pathinfo === '/estudiante/actualizar_estudiantes') {
                return array (  '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::actualizarestuAction',  '_route' => 'solicitud_monitoria_estudiante_actualizar_informacion',);
            }

            // solicitud_monitoria_estudiante_solicitar
            if ($pathinfo === '/estudiante/solicitar') {
                return array (  '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::solicitarAction',  '_route' => 'solicitud_monitoria_estudiante_solicitar',);
            }

            // solicitud_monitoria_estudiante_actualizar_solicitudes
            if ($pathinfo === '/estudiante/actualizar_solicitudes') {
                return array (  '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::actualizarsoliAction',  '_route' => 'solicitud_monitoria_estudiante_actualizar_solicitudes',);
            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
