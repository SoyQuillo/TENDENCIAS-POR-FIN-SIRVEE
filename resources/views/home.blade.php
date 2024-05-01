@extends('layouts.app')

@section('content')
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <!-- Imagen del preloader -->
    <img class="animation__shake" src="https://portalcolombia.terpel.com/static/images/terpel_logo_og.png" alt="Terpel Logo" height="120" width="120">
  </div>

  <!-- Contenido principal -->
  <div class="content-wrapper">
    <!-- Encabezado del contenido -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Panel de control v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Contenido principal -->
    <section class="content">
      <div class="container-fluid">
        <!-- Cajas pequeñas (estadísticas) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- Caja pequeña -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>Nuevos Pedidos</p>
              </div>
              <div class="icon">
                <!-- Cambié el ícono de la bolsa por uno de compras -->
                <i class="ion ion-android-cart"></i>
              </div>
              <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- Otras cajas pequeñas aquí... -->

          <!-- Nuevas estadísticas relacionadas con ventas -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>360</h3>
                <p>Galones Vendidos</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>$12,500</h3>
                <p>Ingresos Totales</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
              <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>25</h3>
                <p>Clientes Frecuentes</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">Más información <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <!-- Contenedor de imágenes -->
        <div class="row mt-4">
          <div class="col-md-4">
            <div class="image-container">
              <img src="https://pbs.twimg.com/media/EqL7qENXMAsuyQQ.jpg:large" class="img-fluid rounded shadow" alt="Terpel Image 1">
              <div class="image-overlay">
                <p class="image-text">Imagen 1</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="image-container">
              <img src="https://www.tropicanafm.com/wp-content/uploads/2023/05/segunda_Terpel_Aniversario_Nota_Editorial_1080x675-copia.jpg" class="img-fluid rounded shadow" alt="Terpel Image 2">
              <div class="image-overlay">
                <p class="image-text">Imagen 2</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="image-container">
              <img src="https://pbs.twimg.com/media/EUdERZqWsAE2Q-K?format=jpg&name=4096x4096" class="img-fluid rounded shadow" alt="Imagen 3">
              <div class="image-overlay">
                <p class="image-text">Imagen 3</p>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->

<style>
  /* Estilos para las imágenes */
  .img-fluid {
    max-width: 100%;
    height: 200px; /* Ajustar la altura según sea necesario */
    transition: transform 0.3s ease-in-out;
  }
  
  .rounded {
    border-radius: 10px;
  }
  
  .shadow {
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }

  .image-container {
    overflow: hidden;
    position: relative;
  }

  .image-container:hover img {
    transform: scale(1.05);
  }

  .image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
  }

  .image-container:hover .image-overlay {
    opacity: 1;
  }

  .image-text {
    color: white;
    font-size: 24px;
    font-weight: bold;
  }
</style>

@endsection
