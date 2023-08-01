<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
class Welcome extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    //$this->load->library('email');
    $this->load->helper('url');
  }

  public function index()
  {
    $this->load->view('index');
  }

  public function aviso()
  {
    $this->load->view('aviso-de-privacidad');
  }
  public function NotFound()
  {
    $data['page'] = "notfound";
    $this->load->view('notfound');
  }

  public function gracias()
  {
    $datos = $_POST;
    $this->validarDatos($datos);
    $this->load->view('/gracias');
  }
  private function enviarEmail($datos)
  {

    $mensaje = "<p>Este contacto viene de https://ej.com.mx/ </p>";
    $mensaje .= "<ul>";
    $campos = array("nombre", "ciudad", "telefono", "email");
    foreach ($campos as $value) {
      $mensaje .= "<li>$value: $datos[$value]</li>";
    }
    $mensaje .= "</ul>";


    $mail = new PHPMailer(true);

    try {
      $mail->isSMTP();
      $mail->Host = 'localhost';
      $mail->SMTPAuth = false;
      $mail->SMTPAutoTLS = false;
      $mail->Port = 25;
      $mail->setFrom('ejemplo@ejemplo.com', 'Nuevo contacto');

      //production
      $mail->addAddress('envia@ejemplo.com.mx');
      $mail->addCC('envia@ejemplo.com.mx');

      $mail->Subject  = "Solicitud de contacto";
      $mail->Body = $mensaje;
      $mail->IsHTML(true);
      // Activo condificacción utf-8
      $mail->CharSet = 'UTF-8';

      /**/
      $mail->send();
      return true;
    } catch (Exception $exception) {
      return false;
    }
  }

  public function debugMail()
  {

    $mail = new PHPMailer(true);

    try {
      $mail->isSMTP();
      $mail->Host = 'localhost';
      $mail->SMTPAuth = false;
      $mail->SMTPAutoTLS = false;
      $mail->Port = 25;

      //**//
      $mail->setFrom('ejemplo@ejemplo.com', 'Nuevo contacto');
      //develop;
      $mail->addAddress('envia@ejemplo.com');
      $mail->addCC('envia@ejemplo.com');
      //production

      $mail->Subject  = "Solicitud de contacto";
      $mail->Body = "Esto es una prueba";
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      $mail->send();
      return true;
    } catch (Exception $exception) {
      echo ('no enviado');
      return false;
    }
  }

  private function validarDatos($datos)
  {
    $this->load->library('session');
    $datos = $this->limpiarDatos($datos);
    $old = array();
    $error = array();
    if ($datos['nombre'] == '') {
      array_push($error, '• el nombre es requerido');
      $old['nombre'] = $datos['nombre'];
    } elseif (strlen($datos['nombre']) < 3) {
      array_push($error, '• el nombre debe ser de al menos 3 caracteres');
      $old['nombre'] = $datos['nombre'];
    } else {
      $old['nombre'] = $datos['nombre'];
    }



    if ($datos['telefono'] == '') {
      array_push($error, '• el teléfono es requerido');
      $old['telefono'] = $datos['telefono'];
    } elseif (strlen($datos['telefono']) < 10) {
      array_push($error, '• el telefono debe tener al menos 10 caracteres');
      $old['telefono'] = $datos['telefono'];
    } else {
      $old['telefono'] = $datos['telefono'];
    }

    if ($datos['email'] == '') {
      array_push($error, '• el correo electrónico es requerido');
      $old['email'] = $datos['email'];
    } elseif (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
      array_push($error, '• el correo no es valido');
      $old['email'] = $datos['email'];
    } else {
      $old['email'] = $datos['email'];
    }

    if (!empty($error)) {
      //$this->session->set_flashdata('error', $error);
      //$this->session->set_flashdata('old', $old);
      redirect('index');
    }
  }
  private function limpiarDatos($datos)
  {
    foreach ($datos as $campo => $valor) {
      $datos[$campo] = htmlspecialchars($valor, ENT_QUOTES);
      $datos[$campo] = trim($valor);
    }
    return $datos;
  }
}
