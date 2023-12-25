@extends('layout.main')

@section('title', 'Rodrigo Piltcher')

@section('fotos-passando')

<div id="carouselExampleControls" id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
  <div class="carousel-inner">

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ Vite::asset('resources/images/fotospassando/cirRob1.png') }}" alt="First slide">
    </div>

    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ Vite::asset('resources/images/fotospassando/img3edit.jpg') }}" alt="Second slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ Vite::asset('resources/images/fotospassando/geralRob.jpg') }}" alt="Third slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ Vite::asset('resources/images/fotospassando/labar2.jpg') }}" alt="Forth slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ Vite::asset('resources/images/fotospassando/img8edit.jpg') }}" alt="Fifth slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ Vite::asset('resources/images/fotospassando/labaro.jpg') }}" alt="Sixth slide">
    </div>

  </div>

  <button class="carousel-control-prev" data-bs-target="#carouselExampleControls" type="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>

  <button class="carousel-control-next" data-bs-target="#carouselExampleControls" type="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

@endsection

@section('primeiro-conteudo')
  <div class="shadow">
    <div class="general-content container">
        <div class="content">
          <img src="{{ Vite::asset('resources/images/fotospassando/flatimg2.jpg') }}" alt="foto-dr.rodrigo">
          <div class="text">
            <p class="title-1-content">Dr. Rodrigo Piltcher</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </br>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
    </div>
  </div>
@endsection

@section('primeira-foto')
  <div class="general-content content-2">
      <img src="{{ Vite::asset('resources/images/fotospassando/img6.jpg') }}" alt="foto-dr.rodrigo">
  </div>
@endsection

@section('segundo-conteudo')
  <div>
    <div class="general-content container">
        <p class="title-1-content espec">Especialidades</p>
        <div class="grid-center">
          <div class="content-second grid">
            <img for="cirurApaDigest" class="grid-item" src="{{ Vite::asset('resources/images/icons/aparelhodigest02R.png') }}" alt="aparelho-digestivo">
            <img for="cirurOncoDigest" class="grid-item" src="{{ Vite::asset('resources/images/icons/oncolog02R.png') }}" alt="aparelho-oncologico-digestivo">
            <img for="herniaAbd" class="grid-item" src="{{ Vite::asset('resources/images/icons/hernia02R.png') }}" alt="hernia">
            <img for="robotico" class="grid-item" src="{{ Vite::asset('resources/images/icons/robotica02R.png') }}" alt="CirurgiaRobo">
          </div>
          <div id="textos">
              <div id="cirurApaDigest" class="text-2">
                <p class="title-2-content">Cirurgia do aparelho digestivo</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div id="cirurOncoDigest" class="text-2">
                <p class="title-2-content">Cirurgia oncológica digestiva</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div id="herniaAbd" class="text-2">
                <p class="title-2-content">Hérnias abdominais</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
              <div id="robotico" class="text-2">
                <p class="title-2-content">Videolabaroscopia e Cirurgia Robótica</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </br>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
          </div>
        </div>
    </div>
  </div>
@endsection

@section('style')

    .title-2-content{
      font-size: 24px;
      font-style: italic;
      font-weight: 400;
      line-height: normal;
      letter-spacing: 4px;
    }

    .text-2{
      margin-left: 35px;

      text-align: center;

      width: 100%;
      height: 430px;

    }

    .espec{
      margin-top:20px;
    }

    .content-second {
    
      height: 450px;
      width: 40%;
      
      position: relative;
      
      align-items: center;
      display: flex;
      justify-content: center;

      margin-left: 100px;
      padding-bottom: 20px;
      

    }

    .grid-item{
      width: 100%;
      height: 200px;
      box-sizing: border-box;

      border: 1px dotted black;
      border-radius: 85px;

    }

    .grid-item:hover{
        background-color: #d9d4f4;
        cursor: pointer;
    }

    .grid{
      display: grid;
      grid-template-columns: 200px 200px;
      grid-row: auto auto;
      gap: 30px; /* Espaçamento entre os elementos */
    }

    .grid-center {
      align-items: center;
      display: flex;
    }


    .content-2 img{
      width: 100%;
      height: 600px;
    }

    .text{
      margin-left: 35px;

      text-align: center;

      width: 70%;
      height: 400px;

    }

    .title-1-content{
      font-size: 32px;
      font-style: italic;
      font-weight: 600;
      line-height: normal;
      letter-spacing: 4px;
    }

    .general-content{
      height: 600px;
      width: 100%;

      position: relative;
      
    }

    .content {

      height: 500px;
      width: 85%;

      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);

      align-items: center;
      display: flex;
    }

    .content img{
      width: 25%;
      height: 390px;

      border: 2px solid black   ;
    }

    .carousel-item{
      width: 100%;
      height: 450px;
      overflow: hidden;
      position: relative;
    }

    .carousel-item img {
      width: 100%;
      height: auto;
      position: absolute;

      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);

    }
@endsection
