<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
