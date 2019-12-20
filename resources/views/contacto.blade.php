@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/contacto.css">
@endsection
@section('title')
Contacto
@endsection
@section('main')
  <main class="container">
    <form class="contact-form" action="https://submit-form.com/5xdSTu1RXQY1UYbiTm69O" target="_self">

      <h2>Contacto</h2>

        <hr size="1px" color="#ddd">

          <div class="Nombre">
            <input type="text" name="Nombre" placeholder="Nombre">
          </div>
          <div class="Telefono">
              <input type="tel" name="Telefono" placeholder="Telefono">
          </div>
          <div class="E-mail">
              <input type="text" name="email" placeholder="Email">
          </div>
          <div class="honeypot">
            <input type="checkbox" name="_honeypot" style="display:none" tabindex="-1" autocomplete="off"/>
            <input type="hidden" name="_redirect" value="http://localhost:8000/"/>
          </div>

      <textarea name="mensaje" placeholder="Mensaje"></textarea>

          <div class="Boton">
              <input type="submit" id="boton" value="Enviar">
          </div>
    </form>
  </main>
@endsection
