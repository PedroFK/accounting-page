<div class="top">

  <div class="logo">
      <img src={{ asset('img/logo.png') }}>
  </div>

  <div class="menu">
      <ul>
          <li><a href="{{ route('app.home') }}" style="color: white;">Principal</a></li>
          <li><a href="{{ route('app.client') }}" style="color: white;">Cliente</a></li>
          <li><a href="{{ route('app.supplier') }}" style="color: white;">Fornecedor</a></li>
          <li><a href="{{ route('app.product.index') }}" style="color: white;">Produto</a></li>
          <li><a href="{{ route('app.exit') }}" style="color: white;">Sair</a></li>
      </ul>
  </div>
</div>