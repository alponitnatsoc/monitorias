<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'solicitud_monitoria_seguridad_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\SeguridadBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_seguridad_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\SeguridadBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_seguridad_login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_seguridad_logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_seguridad_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\SeguridadBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/redirect',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_seguridad_dirDepartamento' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\SeguridadBundle\\Controller\\DefaultController::dirDepartamentoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dirDepartamento',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_jefe_seccion_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jefeSeccion/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_jefe_seccion_monitorias' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::monitoriasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jefeSeccion/monitorias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_jefe_seccion_actualizar_monitorias' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::actualizarmoniAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jefeSeccion/actualizar_monitorias',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_jefe_seccion_asignaciones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::asignacionesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jefeSeccion/asignaciones',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_jefe_seccion_asignaciones_actualizar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::actualizarasignaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jefeSeccion/asignaciones_actualizar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_jefe_seccion_estudiante' => array (  0 =>   array (    0 => 'idEstudiante',  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\JefeSeccionBundle\\Controller\\DefaultController::estudianteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idEstudiante',    ),    1 =>     array (      0 => 'text',      1 => '/jefeSeccion/estudiante',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_cursos_cursos' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\CursosBundle\\Controller\\DefaultController::cursosAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/cursos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_estudiante_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudiante/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_estudiante_informacion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::informacionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudiante/informacion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_estudiante_actualizar_informacion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::actualizarestuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudiante/actualizar_estudiantes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_estudiante_solicitar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::solicitarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudiante/solicitar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'solicitud_monitoria_estudiante_actualizar_solicitudes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'solicitudMonitoria\\EstudianteBundle\\Controller\\DefaultController::actualizarsoliAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/estudiante/actualizar_solicitudes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
