<?php

namespace solicitudMonitoria\SeguridadBundle\Controller;

use solicitudMonitoria\SeguridadBundle\Entity\Usuario;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\SecurityContext;


class DefaultController extends Controller
{
    public function indexAction()
    {
        if ($this->getUser()->getRoles()[0]=="ROLE_ESTUDIANTE"){
            return $this->redirect($this->generateUrl('solicitud_monitoria_estudiante_homepage'));
        }
        
        if ($this->getUser()->getRoles()[0]=="ROLE_JEFESECCION"){
            return $this->redirect($this->generateUrl('solicitud_monitoria_jefe_seccion_homepage'));
        }
    }
    
   
    /**
     * @Route ("/login")
     */
    public function loginAction()
    {
        
        
        $request = $this->getRequest();
        $session = $request->getSession();
        
        if ($this->getUser()){
            return $this->redirect($this->generateUrl('solicitud_monitoria_seguridad_index'));
        }

        // obtiene el error de inicio de sesión si lo hay
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'solicitudMonitoriaSeguridadBundle:Default:login.html.twig',
            array(
                // último nombre de usuario ingresado
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }
}
