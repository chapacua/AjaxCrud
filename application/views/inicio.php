<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet">
  <link href="<?php echo base_url('application/views/assets/vendor/bulma/css/bulma.css') ?>" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
  <link rel="icon" type="image/png" href="https://bulma.io/favicons/favicon-32x32.png?v=201701041855" sizes="32x32">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <title>AjaxCrud</title>
</head>
<body>
  <!-- Cuerpo -->
  <section class="hero is-primary">
    <div class="hero-body">
      <div class="container">
        <h1 class="title">
          Formulario con Ajax, Codeigniter y Bulma CSS
        </h1>
      </div>
    </div>
  </section>
  <br>
  <div class="container is-fluid">
    <div class="columns">
      <div class="column is-one-third"></div>
      <div class="column">
        <article class="message is-primary">
          <div class="message-header">
            Info
          </div>
          <div class="message-body">
            <?php $attributes = array('class' => 'email', 'id' => 'saveForm'); ?>
            <?php echo form_open("Controller/save", $attributes); ?>
              <div class="field">
                <p class="control has-icons-left has-icons-right">
                  <input class="input" type="email" name="email" placeholder="Email" required="">
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
                  <span class="icon is-small is-right">
                    <i class="fa fa-check"></i>
                  </span>
                </p>
              </div>
              <div class="field">
                <div class="columns">
                  <div class="column is-half">
                    <p class="control has-icons-left">
                      <input class="input" type="text" name="name" placeholder="Nombre" required="">
                      <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                      </span>
                    </p>
                  </div>
                  <div class="column is-half">
                    <p class="control has-icons-left">
                      <input class="input" type="text" name="lastname" placeholder="Apellido" required="">
                      <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="field">
                <p class="control">
                  <!-- is-loading -->
                  <button class="button is-primary" id="sendButton" type="submit">
                    Registrar
                  </button>
                </p>
              </div>              
            <?php echo form_close(); ?>
          </div>
        </article> 
      </div>
      <div class="column"></div>
    </div> 
    <!-- Fin Form -->
    <div class="notification is-primary" style="display: none;">
    <button class="delete"></button>
    Primar lorem ipsum dolor sit amet, consectetur
    adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
    consectetur adipiscing elit
  </div>
    <hr>    
    <section>
      <div class="box">
        <table class="table">
          <thead>
            <tr>
              <th>Nombre</abbr></th>
              <th>Apellido</th>
              <th>email</abbr></th>
              <th>estado</abbr></th>
              <th>Fecha Registro</abbr></th>
              <th></th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nombre</abbr></th>
              <th>Apellido</th>
              <th>email</abbr></th>
              <th>estado</abbr></th>
              <th>Fecha Registro</abbr></th>
              <th></th>      
            </tr>
          </tfoot>
          <tbody id="table">

          </tbody>
        </table>
      </section>
    </div>
  </div>
  <!-- ./ Cuerpo -->
  <!-- Javascript -->
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <!-- Main Js -->
  <script src="<?php echo base_url('application/views/assets/js/main.js') ?>"></script>
  <script>var base_url = "<?php echo base_url(); ?>";</script>
</body>
</html>