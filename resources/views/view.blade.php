<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodrigo Piltcher</title>
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div style="display: inline; width: 100%">
    <div>   
        <nav class="nav-content">
            <a href="/#" id="logo"><img style="height: 55px; width: 55px;" src="{{ Vite::asset('resources/images/favicon.png') }}"></a>
            <div class="div1nav">
                <a class="title" href="/#">Rodrigo Piltcher</a>
                <p class="subtitle" >Aparelho Digestivo e Cirurgia Robótica</p>
            </div>
            <div class="nav-links">
                <div class="nav-link-element" >
                    <a href="#first-cont"><p>Sobre mim</p></a>
                </div>
                <div class="nav-link-element" >
                    <a href="#second-cont"><p>Especialidades</p></a>
                </div>
                <div class="nav-link-element" >
                    <a href="#third-cont"><p>Conteúdo</p></a>
                </div>
                <div class="nav-link-element" >
                    <a href="#forth-cont"><p>Contatos</p></a>
                </div>
            </div>
        </nav>
    </div>
</div>

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

    <div id="first-cont">
        <div class="shadow">
            <div class="general-content container">
                <div class="content">
                  <img src="{{ Vite::asset('resources/images/fotospassando/flatimg3.jpg') }}" alt="foto-dr.rodrigo" style="border: 2px solid black;">
                  <div class="text">
                    <p class="title-1-content">Dr. Rodrigo Piltcher</p>
                    <p>Graduado em Medicina pela Universidade Federal de Pelotas (UFPEL), Residência Médica em Cirurgia no Hospital de Clínicas de Porto Alegre (Porto Alegre-RS) e em Cirurgia do Aparelho do Aparelho Digestivo no Hospital Nossa Senhora das Graças (Curitiba-PR). Mestrando na área de Cirurgia Geral na Universidade Federal do Rio Grande do Sul, com pesquisa na área de Hérnias Abdominais. Membro Titular do Colégio Brasileiro de Cirurgia Digestiva. Certificado em Cirurgia Robótica e Cirurgia Oncológica Digestiva.</p>
                    </br>
                    <p>Realiza pesquisas na área de Cirurgia Geral e Digestiva, além de atuar como revisor de periódicos internacionais, como World Journal of Gastroenterology, World Journal of Gastrointestinal Oncology, British Medical Journal e Journal of International Medical Research.</p>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="general-content content-2">
      <img src="{{ Vite::asset('resources/images/fotospassando/img6.jpg') }}" alt="assinatura-dr.rodrigo">
    </div>

    <div id="second-cont">
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
                    <p>Hérnias são "defeitos" na parede abdominal, mais especificamente na camada músculo-aponeurótica por onde pode passar o intestino e causar complicações. Podem ter origem congênita ou adquirida. Os fatores de risco variam de acordo com o tipo de hérnia, contudo patologias que afetam o colágeno e tabagismo aumentam o risco de hérnias no geral.</p>
                    </br>
                    <p id="txt1-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <button class="btn btn-primary"></button>
                  </div>
                  <div id="cirurOncoDigest" class="text-2">
                    <p class="title-2-content">Cirurgia oncológica digestiva</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </br>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  </div>
                  <div id="herniaAbd" class="text-2">
                    <p class="title-2-content">Hérnias abdominais</p>
                    <p>Hérnias são "defeitos" na parede abdominal, mais especificamente na camada músculo-aponeurótica por onde pode passar o intestino e causar complicações. Podem ter origem congênita ou adquirida. Os fatores de risco variam de acordo com o tipo de hérnia, contudo patologias que afetam o colágeno e tabagismo aumentam o risco de hérnias no geral.</p>
                    </br>
                    <div id="txt3-1">
                      <p class="subtitle-2-content">Hérnia Inguinal</p>
                      <p>Cerca de 75% de todas as hérnias ocorrem na região inguinal, sendo aproximadamente 25 vezes mais comum no sexo masculino. São identificadas como desconforto local e aumento de volume na região inguinal. Pode ser de dois tipos: Direta, Indireta e Femoral. </p>
                      <!--<ul>
                        <li><p>Direta: acomete mais homens acima dos 50 anos, relacionada com a fraqueza na musculatura devido aos esforços e tabagismo, entre outras causas.</p></li>
                        <li><p>Indireta: é a mais comum (50% de todas). Consequência da descida do testículo para a bolsa escrotal, que ocorre normalmente durante o desenvolvimento fetal, e atraso no fechamento do conduto peritoneal (liga o abdome à bolsa escrotal) e alargamento durante os anos seguintes pelo esforço. Por isso o intestino pode descer até o testículo, com risco de complicar!</p></li>
                        <li><p>Femoral: mais comum em mulheres, ocorre em uma região de fraqueza ao lado dos vasos para os membros inferiores (vasos ilíacos). Possui risco aumentado de complicar com encarceramento e estrangulamento.</p></li>
                      </ul> --> 
                    </div>

                    <div id="txt3-2">
                      <p class="subtitle-2-content">Hérnia Umbilical</p>
                      <p>Este tipo comum de hérnia (até 30% das hérnias) é muitas vezes notado ao nascimento, como uma saliência no umbigo. É causado quando a abertura no local da passagem do cordão umbilical na parede abdominal, que normalmente fecha antes do nascimento, não fecha completamente. Mesmo quando ocorre o fechamento correto desta área, a hérnia umbilical pode aparecer na idade adulta, já que é uma área de fraqueza da parede abdominal. Gravidez, obesidade e tabagismo são fatores de risco para este tipo de hérnia.</p>
                    </div>

                    <div id="txt3-3">
                      <p class="subtitle-2-content">Hérnia Epigástrica</p>
                      <p>São hérnias que ocorrem na linha média e na parte acima do umbigo, em pontos de fraqueza na linha alba, local onde há apenas aponeurose, sem músculo. A região de fraqueza costuma ser onde passam pequenos vasos.</p>
                    </div>

                    <div id="txt3-4">
                      <p class="subtitle-2-content">Hérnia Incisional</p>
                      <p>Aparece no local de uma incisão cirúrgica prévia. As hérnias incisionais decorrem da má cicatrização da fáscia muscular no pós-operatório, variando o risco de acordo com o procedimento cirúrgico e comorbidades do paciente. Podem surgir muitos anos depois, já que o local de incisão é um ponto de fraqueza no abdome. Alguns fatores de risco: desnutrição, uso de corticosteróides, anemia, diabetes, tosse crônica, infecção da ferida, obesidade e tabagismo.</p>
                    </div>
                    <div id="btn-txt3">




                      <button for="txt3-1" class="btn btn-primary btn-h">Hérnia Inguinal</button>
                      <button for="txt3-2" class="btn btn-primary btn-h">Hérnia Umbilical</button>
                      <button for="txt3-3" class="btn btn-primary btn-h">Hérnia Epigástrica</button>
                      <button for="txt3-4" class="btn btn-primary btn-h">Hérnia Incisional</button>
                    </div>
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

    <div class=" content-2">
      <img src="{{ Vite::asset('resources/images/fotospassando/dna.jpg') }}" alt="dna">
    </div>

    <div id="third-cont">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
              <a class="navbar-brand" id="title" href="#">Conteúdo</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-item nav-link active" href="#">Artigos</a>
                  <a class="nav-item nav-link" href="#">Cirurgias</a>
                  <a class="nav-item nav-link" href="#">Vídeos</a>
                </div>
              </div>
            </div>
        </nav>
        <div class="general-content container">
          <div id="app">

          </div>
        </div>
    </div>

    <div class=" content-2">
      <img src="{{ Vite::asset('resources/images/fotospassando/img7.jpg') }}" alt="foto-dr.rodrigo">
    </div>

    <div id="forth-cont">
        <div class="general-content container">
            <div class="content" style="border: 5px groove">
                <div class="content-inside">
                  <div class="item-contact">
                      <img src="{{ Vite::asset('resources/images/icons/telefone.png') }}" alt="telefone-dr.rodrigo">
                      <p>(53) 3227 9065</p>
                  </div>
                  <div class="item-contact">
                  <a href="https://api.whatsapp.com/send?phone=5553999689900" target="_blank"><img src="{{ Vite::asset('resources/images/icons/whats.png') }}" alt="whatsapp-dr.rodrigo"></a>
                      <p>(53) 9 9968 9900</p>
                  </div>
                  <div class="item-contact">
                      <a href="https://www.instagram.com/rodrigopiltcher/" target="_blank"><img src="{{ Vite::asset('resources/images/icons/insta.png') }}" alt="instagram-dr.rodrigo"></a>
                      <p>@rodrigopiltcher</p>
                  </div>
                  <div class="item-contact">
                      <a href="https://www.google.com.br/maps/place/R.+Andrade+Neves,+3006+-+Centro,+Pelotas+-+RS,+96020-080/@-31.7579854,-52.3400494,17z/data=!3m1!4b1!4m6!3m5!1s0x9511b5a1ab101e81:0x8e226fd26d0fa376!8m2!3d-31.75799!4d-52.3374745!16s%2Fg%2F11c1pbjqzt?entry=ttu" target="_blank"><img src="{{ Vite::asset('resources/images/icons/local.png') }}" alt="local-dr.rodrigo"></a>
                      <p>Rua Andrade Neves, 3006</p>
                  </div>
                </div>
                <div class="content-inside">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.4582423854667!2d-52.34004942466707!3d-31.757985412847656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9511b5a1ab101e81%3A0x8e226fd26d0fa376!2sR.%20Andrade%20Neves%2C%203006%20-%20Centro%2C%20Pelotas%20-%20RS%2C%2096020-080!5e0!3m2!1spt-BR!2sbr!4v1703765121756!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

<footer>
    <div class="footerdiv">
        <p>© 2023 Doutor Rodrigo Piltcher. Todos os direitos reservados.
        <br/>CRM-RS: 46401</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

<script>
    
</script>

<style>
    * {
        margin: 0;
        padding: 0;

        scroll-behavior: smooth;
    }

/* CSS DA PRIMEIRA NAV BAR (AZUL ESCURO) */
    body{
        overflow-y: visible;

    }

    .nav-content{
        padding-left: 200px;
    }

    .footerdiv p{
        font-size: 11px;
        line-height: normal;
        color: #fff;
    }

    .nav-link-element{
        width: 20%;
        text-align: center;

        margin: 0px 20px 0px 20px;
    }

    .nav-links{
        right: 0;

        width: 50%;
        margin-top: 20px;
        margin-right: 10px;
        margin: 25px 10px 0px 30px;

        display: flex;

    }

    .nav-link-element p{

        font-size: 14px;
        font-style: italic;
        
        line-height: normal;
        letter-spacing: 4px;
        color: #fff;
    }

    .div1nav{
        padding-left: 40px;       
    }

    #logo{
        padding-top:5px;
    }

    .title{
        font-size: 32px;
        font-style: italic;
        font-weight: 600;
        line-height: normal;
        letter-spacing: 4px;
        color: #fff;
    }

    .subtitle{
        font-size: 17px;
        font-style: italic;
        font-weight: 400;
        letter-spacing: 3px;
        line-height: normal;
        color: #fff;
        
    }

    a {
        color: #fff;
        text-decoration: none;
        transition: 0.3s;
    }

    a:hover {
        opacity: 0.7;
    }

    nav {
        display: flex;
        padding-left: 20px;
        align-items:  center;
        height: 70px;
        align-items: flex-start;
        background: #001a66;
        /*background: #002080;*/
    }

    footer{
        background: #001a66;
        /*background: #002080;*/
        position: absolute;
        bottom:1;
        width:100%;
        height: 50px;
        padding: 10px 5px;
        margin-bottom: 0; /* reduzi a margem inferior para 0 */

        text-align: center;
    }

    #btn-txt3{
      padding-top: 20px;
    }            

    .btn-primary{
      background-color: #002080 !important;
    }

    #title{
      padding-bottom: 10px;

      font-size: 32px;
      font-style: italic;
      font-weight: 600;
      line-height: normal;
      letter-spacing: 4px;
    }
    .navbar a{

      font-size: 14px;
      font-style: italic;

      line-height: normal;
      color: black;
    }

    .item-contact{

      width: 60%;

      display: flex;
      

      margin: 20px 0px 20px 0px;

    }

    .item-contact p{
        padding-left: 10px;
        margin-top: 12px;

        font-size: 16px;
        font-style: italic;
        font-weight: bold;
        line-height: normal;
        letter-spacing: 4px;
    }

    .content-inside{
      height: 450px;
      width: 100%;

      position: relative;

      align-items: center;
      justify-content: center;

      display: flex;
      flex-direction: column;
    }

    .content-inside img{
      width: 55px !important;
      height: 55px !important;
    }

    .content-inside iframe{
      margin-right: 10px;
    }

    .title-2-content{
      font-size: 24px;
      font-style: italic;
      font-weight: 400;
      line-height: normal;
      letter-spacing: 4px;
    }

    .subtitle-2-content{
      font-size: 16px;
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

      border: 1px dotted rgb(0, 0, 0, 1.0);
      
      border-radius: 85px;

    }

    .grid-item:hover{
        background-color: #d9d4f4;
        cursor: pointer;
        transition: 0.4s ease-in-out;

        border: 1px dotted rgb(0, 0, 0, 0.5);
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

    .testimg{
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .text{
      margin-left: 35px;

      text-align: center;

      width: 70%;
      height: 400px;

    }

    .text .title-1-content{
      padding-bottom: 40px !important;
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
</style>

</body>
</html>