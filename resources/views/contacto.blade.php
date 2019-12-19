@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/contacto.css">
@endsection
@section('title')
Contacto
@endsection
@section('main')
  <main class="container">
        <form class="contact-form" action="index.php" method="post">
          <h2>Contacto</h2>
          <hr size="1px" color="#ddd">
          <div class="Nombre">
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
            </div>
            <div class="E-mail">
              <label for="E-mail">E-mail</label>
              <input type="email" name="E-mail" id="E-mail" placeholder="E-mail">
            </div>
            <div class="Telefono">
              <label for="Telefono">Telefono</label>
              <input type="tel" name="Telefono" id="Telefono" placeholder="Telefono">
            </div>
            <div class="Mensaje">
              <label for="Mensaje">Mensaje</label>
              <textarea name="Mensaje" id="Mensaje" rows="8" cols="80" placeholder="Escriba aqui su mensaje..."></textarea>
            </div>
            <div class="Boton">
              <input type="submit" id="boton" value="Enviar">
            </div>
        </form>
      </main>
@endsection
