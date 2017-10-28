<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Clinica dental y de Especialidades</title>
<meta name="description" content="">
<meta name="author" content="">

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['index/bootstrap','index/style','index/font-awesome','index/prettyPhoto']) ?>
        
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<div id="preloader">
  <div id="status"> <?=$this->Html->image('index/preloader.gif'); ?> </div>
</div>
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      <a class="navbar-brand page-scroll" href="#page-top"> <i class="fa fa-heartbeat"></i> Clinica Dental</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
        <li class="hidden"> <a href="#page-top"></a> </li>
        <li> <a class="page-scroll" href="#about">Nosotros</a> </li>
        <li> <a class="page-scroll" href="#services">Tratamientos</a> </li>
        <li> <a class="page-scroll" href="#works">Cirugias</a> </li>
        <li> <a class="page-scroll" href="#team">Equipo</a> </li>
        <li> <a class="page-scroll" href="#testimonials">Paciente</a> </li>
        <li> <a class="page-scroll" href="#contact">Contactenos</a> </li>
        <li> <a class="page-scroll" href="#">Sugerencias</a> </li>
        <li> <a class="page-scroll" href="#">Login</a> </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container --> 
</nav>

<!-- Header -->
<div id="intro">
  <div class="intro-body">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <h1>Clinica Dental<br><span class="brand-heading">DFVD</span></h1>
          <a href="#about" class="btn btn-default page-scroll">Ver mas</a> </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Nosotros</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-4"><?=$this->Html->image('index/clinica-dental-getafe.jpg',['class'=>'img-responsive']); ?></div>
      <div class="col-md-4">
        <div class="about-text">
          <h4>Quienes Somos</h4>
          <p>Somos una clínica dental con especialistas en todas la áreas de la Odontología, contamos con unas instalaciones de última generación y la mas avanzada tecnología para ofrecerles a nuestros pacientes un servicio de máxima calidad y eficacia. Entre los tratamientos más destacados tenemos: prótesis dentales, cirugia bucal, implantes dentales y cirugia bucal El objetivo principal de nuestra clínica es ofrecerte los tratamientos más innovadores una alta calidad y garantía de trabajo.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="about-text">
          <h4>Mision y vision</h4>
          <h3>Nuestra mision.</h3>
          <ul>
            <li>Satisfacer las expectativas y necesidades de todos nuestros pacientes brindando la mejor atencion y calidad en todos nuestros tratamientos.</li>
          </ul>
          <h3>Nuestra vision.</h3>
          <ul>
            <li>Ser la Clinica Dental que desarrollara los mejores y mas altos niveles de odontologia, contando con el reconocimiento nacional e internacional en la atencion que brindamos a nuestros pacientes, teniendo el personal mas idoneo academica y tecnologicamente.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container" id="tratamientos">
    <div class="section-title center">
      <h2>Tratamientos</h2>
      <hr>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
       <div class="service"> <i class="fa fa-user-md"></i>
          <h3>Ortodoncia</h3>
          <a class="btn btn-info" role="button" data-toggle="modal" data-target="#myModal">Detalle</a>         
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"> <i class="fa fa-medkit"></i>
          <h3>Endodoncia</h3>
          <a class="btn btn-info" data-toggle="modal" data-target="#myModal2">Detalle</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"> <i class="fa fa-h-square"></i>
          <h3>Periodoncia</h3>
          <a class="btn btn-info" data-toggle="modal" data-target="#myModal3">Detalle</a>
         </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-ambulance"></i>
          <h3>Protesis Dental</h3>
          <a class="btn btn-info" data-toggle="modal" data-target="#myModal4">Detalle</a>
        </div>
      </div>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-hospital-o"></i>
          <h3>Implantologia</h3>
          <a class="btn btn-info" data-toggle="modal" data-target="#myModal5">Detalle</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-heart"></i>
          <h3>Estetica Dental</h3>
          <a class="btn btn-info" data-toggle="modal" data-target="#myModal6">Detalle</a>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-stethoscope"></i>
          <h3>Blanqueamiento Dental</h3>
          <a class="btn btn-info" data-toggle="modal" data-target="#myModal7">Detalle</a>
          </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service"><i class="fa fa-heartbeat"></i>
          <h3>Rehabilitacion Oral</h3>
          <a class="btn btn-info" data-toggle="modal" data-target="#myModal8">Detalle</a>
        </div>
      </div>
    </div>
  </div>
</div>


        <!-- Modales -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">ORTODONCIA</h4>
                  </div>
                  <div class="modal-body">
                  <div class="thumbnail">
                      <?=$this->Html->image('index/1.jpg',['class'=>'img-responsive']); ?>
                      <div class="caption">
                        <h3>Ortodoncia</h3>
                        <p>La ortodoncia es una especialidad de la Odontología que se encarga de todo estudio, prevención, diagnóstico y tratamiento de las anomalías de forma, posición, relación y función de las estructuras dentomaxilofaciales; siendo su ejercicio el arte de prevenir, diagnosticar y corregir sus posibles alteraciones y mantenerlas dentro de un estado óptimo de salud y armonía, mediante el uso y control de diferentes tipos de fuerzas.</p>
                    </div>
                    </div>
                    </div>
                  <div class="modal-footer">
                    <a class="btn btn-default" data-dismiss="modal">Cerrar</a>
                  </div>
                </div>
              </div>
            </div>
        <!-- Modales -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Endodoncia</h4>
                  </div>
                  <div class="modal-body">
                  <div class="thumbnail">
                      <?=$this->Html->image('index/3.png',['class'=>'img-responsive']); ?>
                      <div class="caption">
                        <h3>Endodoncia</h3>
                    <p>Es el procedimiento que se utiliza para eliminar en parte o en su totalidad la pulpa del diente y sellar el conducto pulpar. La pulpa es la parte más interior del diente y está constituida por un tejido blando que contiene los nervios y los vasos sanguíneos. La parte del conducto que se encuentra en el interior de la corona se denomina cavidad pulpar, mientras la correspondiente a la raíz recibe el nombre de conducto reticular y es el que conecta con el hueso maxilar.</p>
                  </div>
                    </div>
                    </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>
                </div>
              </div>
            </div>
            <!-- Modales -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Periodoncia</h4>
                  </div>
                  <div class="modal-body">
                   <div class="thumbnail">
                      <?=$this->Html->image('index/p1.jpg',['class'=>'img-responsive']); ?>
                      <div class="caption">
                        <h3>Periodoncia</h3>
                    <p>Es la rama de la odontología que trata las enfermedades de las encías y del hueso que soporta al diente.</p>
        
                  </div>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>
                </div>
              </div>
            </div>
            <!-- Modales -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Protesis Dental</h4>
                  </div>
                  <div class="modal-body">
                    <div class="thumbnail">
                      <?=$this->Html->image('index/4.jpg',['class'=>'img-responsive']); ?>
                      <div class="caption">
                        <h3>Protesis dental</h3>
                    <p>Es un elemento artificial destinado a restaurar la anatomía de una o varias piezas dentarias, restaurando también la relación entre los maxilares, a la vez que devuelve la dimensión vertical, y repone los dientes. El encargado de fabricar estos aparatos o elementos artificiales, es el protésico dental, quien realiza su trabajo en un laboratorio dental recibiendo las indicaciones del odontólogo, que trabaja en clínica.</p>
        
                  </div>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
              </div>
            </div>
            <!-- Modales -->
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Implantologia</h4>
                  </div>
                  <div class="modal-body">
                  <div class="thumbnail">
                      <?=$this->Html->image('index/I1.jpg',['class'=>'img-responsive']); ?>
                      <div class="caption">
                        <h3>Implantologia</h3>
                  <p>Es la disciplina de la odontología que se ocupa del estudio de los materiales aloplásticos dentro o sobre los huesos de maxilares para dar apoyo a una rehabilitación dental. Tiene como objetivo sustituir dientes perdidos mediante la colocación quirúrgica de un implante dental en el hueso maxilar o mandibular.</p>
                 </div>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
              </div>
            </div>
            <!-- Modales -->
            <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Estetica Dental</h4>
                  </div>
                  <div class="modal-body">
                  <div class="thumbnail">
                      <?=$this->Html->image('index/e2.jpg',['class'=>'img-responsive']); ?>
                      <div class="caption">
                        <h3>Estetica Dental</h3>
                  <p>es una especialidad de la odontología que se ocupa de los problemas de salud dental relacionados con la armonía estética de la boca, lo que se traduce básicamente en lograr una sonrisa perfecta, afeada por diferentes tipos de problemas: Asimetría dental, Separación entre los dientes anteriores, Caries en la parte más cercana a la encía, Fracturas de los dientes.En este sentido, los tratamientos que ofrece la odontología son muy diversos como ser: Blanqueamiento dental, Carillas estéticas de porcelana, Tratamientos restauradores de higiene y profilaxis, periodontales y de ortodoncia</p>
                </div>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
                </div>
              </div>
            </div>
            <!-- Modales -->
            <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Blanqueamiento Dental</h4>
                  </div>
                  <div class="modal-body">
                  <div class="thumbnail">
                      <?=$this->Html->image('index/b1.jpg',['class'=>'img-responsive']); ?>
                      <div class="caption">
                        <h3>Blanqueamiento Dental</h3>
                  <p>Es un tratamiento dental estético que logra reducir varios tonos el color original de las piezas dentales, dejando los dientes más blancos y brillantes El blanqueamiento dental se puede realizar en consultorio o en el hogar, para uso personal y algunos odontólogos alertan sobre el posible daño a las piezas dentales si se utilizan éstos en alta concentración sin la prescripción ni el seguimiento de un odontólogo, El blanqueamiento de los dientes permite eliminar la mayoría de las manchas.
                  </p>
                  </div>
                  </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modales -->
            <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Rehabilitacion oral</h4>
                  </div>
                  <div class="modal-body">
                  <div class="thumbnail">
                      <?=$this->Html->image('index/r4.jpg',['class'=>'img-responsive']); ?>
                      <div class="caption">
                        <h3>Rehabilitacion Oral</h3>
                  <p>Es la parte de la Odontología encargada de la restauración es decir devuelve la función estética y armonía oral mediante prótesis dentales de perdidas de dientes, grandes destrucciones o de solucionar problemas estéticos, siempre buscando una oclusión y función correcta, combina en forma integral las áreas de prótesis fija, prótesis removible, operatoria, oclusión e Implante dental, que realiza el diagnóstico y plan de tratamiento adecuado al paciente de alta complejidad que requiere recuperar su salud bucal a través de las técnicas más modernas de rehabilitación. A su vez, establece estrecha relación con las demás disciplinas de la odontología, como periodoncia, endodoncia y ortodoncia.</p>
                   </div>
                  </div>
                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  </div>
                </div>
              </div>
              </div>
            


<!-- Portfolio Section -->
<div id="works">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Cirugias</h2>
      <hr>
      <div class="clearfix"></div>
      <p>La clinica dental ofrece los siguientes tipos de cirugias.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">Todo</a></li>
            <li><a href="#" data-filter=".lorem">Cirugia 3er molar</a></li>
            <li><a href="#" data-filter=".consectetur">Quistes odontogenicos</a></li>
            <li><a href="#" data-filter=".dapibus">Apicectomia</a></li>
         </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/index/3ermolar1.jpg" title="Retencion Horizontal" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Retencion Horizontal</h4>
                <p>3er Molar</p>
              </div>
              <?=$this->Html->image('index/3ermolar1.jpg',['class'=>'img-responsive']); ?> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 consectetur">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/index/quiste.jpg" title="Quiste en la cavidad oral" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Quiste en la cavidad oral</h4>
                <p>Quistes odontogenicos</p>
              </div>
              <?=$this->Html->image('index/quiste.jpg',['class'=>'img-responsive']); ?> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/index/3ermolar2.jpg" title="Retencion Angular" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Retencion Angular</h4>
                <p>3er Molar</p>
              </div>
               <?=$this->Html->image('index/3ermolar2.jpg',['class'=>'img-responsive']); ?> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/index/3ermolar3.jpg" title="Retencion Angular" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Retencion Angular</h4>
                <p>3er Molar</p>
              </div>
              <?=$this->Html->image('index/3ermolar3.jpg',['class'=>'img-responsive']); ?> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 consectetur">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/index/quiste2.jpeg" title="Extraccion quiste" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Extraccion del quiste</h4>
                <p>Quistes odontogenicos</p>
              </div>
              <?=$this->Html->image('index/quiste2.jpeg',['class'=>'img-responsive']); ?> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 dapibus">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/index/apicectomia.jpg" title="Sutura extraccion quiste" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Sutura quiste</h4>
                <p>Apicectomia</p>
              </div>
              <?=$this->Html->image('index/apicectomia.jpg',['class'=>'img-responsive']); ?> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 dapibus consectetur">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/index/quiste3.jpg" title="Extraccion Quiste" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Extraccion Quiste</h4>
                <p>Quistes odontogenicos</p>
              </div>
              <?=$this->Html->image('index/quiste3.jpg',['class'=>'img-responsive']); ?> </a> </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 lorem">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/index/3ermolar4.jpg" title="Tipo de retenciones" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Tipos de Retenciones</h4>
                <p>3er Molar</p>
              </div>
              <?=$this->Html->image('index/3ermolar4.jpg',['class'=>'img-responsive']); ?> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Nuestro equipo</h2>
      <hr>
      <p>Nuestro equipo de trabajo esta formado por las siguientes personas.</p>
    </div>
    <div id="row">
        <div class="col-xs-6 col-md-6 col-sm-6">
            <div class="thumbnail"> <?=$this->Html->image('index/dentista.jpg',['class'=>'img-responsive']); ?> </a>
            </div>
                <div class="caption">
                    <h3>Mario Castañeda</h3>
                    <p>Dentista</p>
           </div>
          </div>
         </div>
        <div class="col-xs-6 col-md-6 col-sm-6">
        <div class="thumbnail"> <?=$this->Html->image('index/dentistas1.jpg',['class'=>'img-responsive']); ?> </a> </div>
          <div class="caption">
            <h3>Rene Garcia</h3>
            <p>Protesista</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Satisfaccion del paciente</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="row testimonials">
          <div class="col-sm-4">
            <blockquote><i class="fa fa-check-circle"></i>
              <p> Facilidad de consegluir citas para chequeos.</p>
            </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote><i class="fa fa-check-circle"></i>
              <p>La recepción y la sala de espera eran cómodas y limpias.</p>
              </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote><i class="fa fa-check-circle"></i>
              <p>Horario de funcionamiento conveniente.</p>
             </blockquote>
          </div>
        </div>
        <div class="row testimonials">
            <div class="col-sm-4">
            <blockquote><i class="fa fa-check-circle"></i>
              <p>Lo que tiene que pagar es razonable.</p>
             </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote><i class="fa fa-check-circle"></i>
              <p>Los proveedores le escuchan.</p>
             </blockquote>
          </div>
          <div class="col-sm-4">
            <blockquote><i class="fa fa-check-circle"></i>
              <p>Los proveedores responden a sus preguntas.</p>
             </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contactenos</h2>
      <hr>
      <p>Puede ponerse en contactos con nosotros en la siguiente direccion, escribirnos a nuestro correo electronico o llamando a los telefonos.</p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-map-marker fa-2x"></i>
          <p>Clinica dental,<br>
            av. Atahuallpa</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-envelope-o fa-2x"></i>
          <p>clinicadental@gmail.com</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-item"> <i class="fa fa-phone fa-2x"></i>
          <p> 4292658<br>
              72217540</p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
    <style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
      <div id="map">
                  <script>
      function initMap() {
        var uluru = {lat: -17.360205, lng: -66.160530};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhbrSSDPymVDIbnLLSpqiMybcN-bO6guQ&callback=initMap">
    </script>
    </div>
      <div class="social">
        <h3>Redes sociales</h3>
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a href="#"><i class="fa fa-github"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <p>Copyright &copy; Clinica dental <a href="http://www.templatewire.com" rel="nofollow">DNFD 2017</a></p>
  </div>
</div>


<!-- Javascripts
    ================================================== --> 

<?= $this->Html->script(['index/jquery.1.11.1','index/bootstrap','index/SmoothScroll','index/jquery.prettyPhoto','index/jquery.isotope','index/jquery.parallax','index/jqBootstrapValidation','index/contact_me','index/main'])?>
</body>
</html>
