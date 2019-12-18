@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/preguntas.css">
@endsection
@section('title')
FAQ
@endsection
@section('main')

    <div class="container">
      <div class="preguntas" action="index.php" method="post">
          <h2 class="tittle">Preguntas frecuentes</h2>
              <hr size="1px" color="#ddd">
              <div class="list">
                <ul>
                  <button class="accordion">¿Cual es el plazo para poder realizar una devolucion o cambio?</button>
                    <div class="panel">
                      <p>Los cambios se pueden realizar hasta 30 dias despues de realizada la compra.</p>
                    </div>
                    <button class="accordion">¿Que debo hacer si llega algun producto equivocado o en mal estado?</button>
                      <div class="panel">
                        <p>Los cambios se pueden realizar hasta 30 dias despues de realizada la compra.</p>
                      </div>
                      <button class="accordion">¿Como puedo consultar el estado de mi pedido?</button>
                        <div class="panel">
                          <p>Los cambios se pueden realizar hasta 30 dias despues de realizada la compra.</p>
                        </div>
                    </ul>
                <hr size="1px" color="#ddd">
                <a href="contact.php">¿No encontró lo que buscaba? Contacte con nosotros <b>aquí!</b></a>
              </div>
            </div>

              <script type="text/javascript" src="/js/preguntas.js"></script>






@endsection
