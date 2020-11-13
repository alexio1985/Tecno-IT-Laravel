@extends('layouts/app')

@section('container')

<head>
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/img-contacto.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" 
    integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>

<section class="form_wrap" >
  <section class="cantact_info">
      <section class="info_title">
          <span class="fa fa-user-circle"></span>
          <h2>TecnoIT</h2>
      </section>
      <section class="info_items">
          <p><span class="fa fa-envelope"></span> info.contacto@tecnoit.com</p>
          <p><span class="fa fa-phone"></span> (+54) 4902-8665</p>
      </section>
  </section>

  <form action="" class="form_contact">
      <div class="user_info">
          <label for="names">Nombres *</label>
          <input type="text" id="names">

          <label for="names">Apellido *</label>
          <input type="text" id="lastnamename">

          <label for="phone">Telefono / Celular</label>
          <input type="text" id="phone">

          <label for="email">Correo electronico *</label>
          <input type="text" id="email">

          <div>
            <select>
                 <option value="0">Selecciona tu nivel:</option>
                 <option value="1">Secundaria en curso</option>
                 <option value="2">Secundaria completa</option>
                 <option value="3">Secundaria abandonada</option>
            </select>
          </div>


          <label for="mensaje">Mensaje *</label>
          <textarea id="mensaje"></textarea>

          <input type="button" value="Enviar Mensaje" id="btnSend">
      </div>
  </form>

</section>

    
@endsection