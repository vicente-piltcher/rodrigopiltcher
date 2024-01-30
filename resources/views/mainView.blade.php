@extends('layout.main')

@section('title', 'Rodrigo Piltcher')

@section('fotos-passando')

<div id="carouselExampleControls" id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="7000">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('build/assets/img3edit-0dfcd770.jpg') }}" alt="Second slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('build/assets/cirurD-2e6a6000.png') }}" alt="Third slide">
    </div>

    <div class="carousel-item">
      <img class="cover" src="{{ asset('build/assets/digoult-e79e27c6.jpg') }}" alt="dr.rodrigo">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('build/assets/labaro-57d50479.jpg') }}" alt="Sixth slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('build/assets/img8edit-d6713100.jpg') }}" alt="Fifth slide">
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
          <img class="cover" src="{{ asset('build/assets/flatimg3-298923af.jpg') }}" alt="foto-dr.rodrigo" style="border: 2px solid black;">
          <div class="text">
            <p class="title-1-content">Dr. Rodrigo Piltcher</p>
            <p>Graduado em Medicina pela Universidade Federal de Pelotas (UFPEL), Residência Médica em Cirurgia no Hospital de Clínicas de Porto Alegre (Porto Alegre-RS) e em Cirurgia do Aparelho Digestivo no Hospital Nossa Senhora das Graças (Curitiba-PR). Mestrando na área de Cirurgia Geral na Universidade Federal do Rio Grande do Sul, com pesquisa na área de Hérnias Abdominais. Membro Titular do Colégio Brasileiro de Cirurgia Digestiva. Certificado em Cirurgia Robótica e Cirurgia Oncológica Digestiva.</p>
            </br>
            <p>Realiza pesquisas na área de Cirurgia Geral e Digestiva, além de atuar como revisor de periódicos internacionais, como World Journal of Gastroenterology, World Journal of Gastrointestinal Oncology, British Medical Journal e Journal of International Medical Research.</p>
          </div>
        </div>
    </div>
  </div>
@endsection

@section('primeira-foto')
  <div class=" content-2">
    <img class="d-block w-100" src="{{ asset('build/assets/labar2-b120b827.png') }}" alt="Forth slide">      
  </div>
@endsection

@section('segundo-conteudo')
  <div>
    <div class="general-content container" id="sc">
        <p class="title-1-content espec">Especialidades</p>
        <div class="grid-center">
          <div class="content-second grid">
            <img for="cirurApaDigest" class="grid-item" src="{{ asset('build/assets/aparelhodigest02R-6a191d95.png') }}" alt="aparelho-digestivo">
            <img for="cirurOncoDigest" class="grid-item" src="{{ asset('build/assets/oncolog02R-f6fb024c.png') }}" alt="aparelho-oncologico-digestivo">
            <img for="herniaAbd" class="grid-item" src="{{ asset('build/assets/hernia02R-8dc0598e.png') }}" alt="hernia">
            <img for="robotico" class="grid-item" src="{{ asset('build/assets/robotica02R-71c228e1.png') }}" alt="CirurgiaRobo">
          </div>
          <div id="textos">

              <div id="cirurApaDigest" class="text-2">
                <p class="title-2-content">Cirurgia do aparelho digestivo</p>
                <p>É a especialidade médica que estuda e trata as patologias cirúrgicas do aparelho digestivo. Tratando tanto as doenças benignas, como: Doença do Refluxo, Acalásia, Apendicite, Colelitíase, Coledocolitiase, Doença Diverticular, tumores benignos do fígado (hemangioma hepático, adenoma hepatocelular e hiperplasia nodular focal), cistos do pâncreas, tumores neuroendócrinos do pâncreas, dentre outras, quanto as malignas (neoplasias) dos diversos órgãos que compõem o nosso sistema digestivo (esôfago, estômago, fígado, pâncreas, intestinos), além das hérnias abdominais. De forma didática, as principais doenças malignas de cada órgão serão abordadas aqui na Cirurgia Oncológica Digestiva. Outra característica desta especialidade é o avanço nos últimos anos na abordagem minimamente invasiva das patologias, seja por videolaparoscopia quanto por cirurgia robótica. Vamos falar sobre algumas das doenças benignas nos tópicos abaixo.</p>
                </br>

                <div id="txt1-1">
                  <p class="subtitle-2-content">Colelitiase</p>
                  <p>Significa a presença de calculos (pedras) no interior da vesícula biliar, tendo como seus principais fatores de risco o sexo feminino, gestação, diabetes, dislipidemia, cirrose, rapida perda ponderal, histórico familiar, obesidade e idade superior a 40 anos de idade. O diagnóstico é  realizado por ultrassonografia de abdome, sendo muitas vezes um achado acidental de um exame de rotina. Mas, então porque fazer o procedimento cirúrgico se não sinto dor? O risco de complicações da colelitíase pode ser desde a inflamação da vesícula biliar, chamada de colecistite ou o cálculo da vesícula pode migrar até o colédoco causando uma coledocolitíase, colangite ou pancreatite aguda, que necessitam de procedimentos de urgência. O tratamento para a colelitíase é a colecistectomia videolaparoscópica, que remove a vesícula biliar de forma mínimamente invasiva.</p>
                </div>

                <div id="txt1-2">
                  <p class="subtitle-2-content">Coledocolitiase</p>
                  <p>É a presença de cálculos no interior do ducto colédoco, ducto que leva a bile da vesícula biliar e do fígado até o intestino.  Os fatores de risco são similares aos da colelitíase, sendo essa também um fator de risco, já que a grande maioria dos cálculos no colédoco são provenientes de migração dos cálculos da vesícula biliar. Cálculos formados no colédoco são raros e associados a condições específicas. O diagnóstico pode ser feito por ultrassonografia e tomografia computadorizada, mas o melhor exame é a Colangiorressonância Magnética. As complicações da coledocolitíase podem ser desde a inflamação do colédoco, chamada de colangite, icterícia (amarelão) e pancreatite aguda. O tratamento pode ser feito com a Colangiopancreatografia Endoscópica Retrógrada (CPRE) ou por intervenção cirúrgica.</p>
                </div>

                <div id="txt1-3">
                  <p class="subtitle-2-content">Doença do Refluxo Gastroesofágico (DRGE)</p>
                  <p>O refluxo é um processo normal de relaxamento do esfíncter esofágico inferior após as refeições. Porém, se aumenta em frequência e duração, surgem os sintomas e passamos a considerar uma condição patológica. Os sintomas são: pirose (queimação), dor no peito, regurgitação, tosse crônica, dentre outros. Os fatores de risco são: gravidez, obesidade, dieta rica em gordura, Hérnia de Hiato. A DRGE pode complicar com esofagite, dificuldade de engolir, estenose esofágica, esôfago de Barrett (lesão que pode progredir para câncer). O tratamento consiste  em mudança do estilo de vida, como perda de peso, não deitar logo após alimentação e atividade física. A terapia medicamentosa tem boa resposta na maioria dos casos, enquanto a cirurgia pode ser indicada quando sintomas refratários, presença da hérnia de hiato, pacientes que não desejam o uso do medicamento indefinidamente e nos casos de sintomas extra-esofágicos como ASMA e tosse crônica. A cirurgia se chama Fundoplicatura e é realizada de forma minimamente invasiva.</p>
                </div>

                <div id="txt1-4">
                  <p class="subtitle-2-content">Acalásia</p>
                  <p>A acalasia é quando a musculatura do esfíncter que controla a passagem do alimento do esôfago para o estômago fica contraído, impossibilitando a passagem do alimento, além disso os movimentos (peristalse) que impulsionam o alimento ficam enfraquecidos. As causas mais comuns desta condição são idiopática ou Doença de Chagas, mas outras patologias devem ser afastadas como origem dos sintomas. Os sintomas são a disfagia primeiro para alimentos sólidos e depois para líquidos, emagrecimento, regurgitação e dor no peito. O diagnóstico é feito por meio da Endoscopia Digestiva Alta, Rx de Esôfago, Estômago e Duodeno (REED) e concluído com a Manometria Esofágica. O tratamento pode ser feito por dilatação pneumática, miotomia endoscópica peroral ou cirurgia (Cardiomiotomia de Heller), sendo que as duas últimas modalidades resultam em melhor controle dos sintomas a longo prazo, variando a indicação entre elas.</p>
                </div>

                <div id="txt1-5">
                  <p class="subtitle-2-content">Doença Diverticular Colônica</p>
                  <p>É a presença de divertículos que se projetam através da parede do cólon para fora do órgão, como "bolsinhas", formados por camadas internas do intestino que por aumento de pressão são empurrados através da camada muscular em pontos de fraqueza. A idade avançada, sexo masculino, tabagismo e obesidade são os fatores de risco. Os sintomas mais comuns são desconforto abdominal e sensação de estufamento. A doença diverticular costuma ser diagnosticada através da colonoscopia, exame em que se tem visão direta do interior do cólon. A complicação mais comum é a diverticulite, com risco de perfurar o divertículo e desenvolver abscesso intra abdominal e sepse. O manejo deve-se iniciar por mudanças no estilo de vida para combater os fatores de risco. Nos pacientes que têm crises repetidas de diverticulite, crise com complicação grave ou dor crônica, o tratamento cirúrgico é uma opção.</p>
                </div>

                <div id="txt1-6">
                  <p class="subtitle-2-content">Hemangioma Hepático</p>
                  <p>É uma malformação vascular presente em até 20% da população geral. Raramente cursa com sintomas e a necessidade de tratamento cirúrgico é extremamente rara, é um achado comum em ultrassonografia, sem maior repercussão.</p>
                </div>

                <div id="txt1-7">
                  <p class="subtitle-2-content">Hiperplasia Nodular Focal</p>
                  <p>É a segunda lesão benigna mais comum do fígado. Na imagem possui uma cicatriz central, malformação vascular com hiperplasia das células do fígado (hepatócitos). Não necessita tratamento nem acompanhamento após diagnóstico definido, casos sintomáticos podem ser candidatos a cirurgia, porém são extremamente raros.</p>
                </div>

                <div id="txt1-8">
                  <p class="subtitle-2-content">Adenoma Hepatocelular</p>
                  <p>É um tumor benigno mais comum em mulheres e associado com obesidade, uso de anticoncepcionais, uso de esteróides anabolizantes e síndromes como as de depósito de glicogênio. É classificado em subtipos: inflamatório, mutação HNF-1 alfa e os com ativação da Beta-Catenina. Os dois primeiros são mais comuns em mulheres, enquanto o último subtipo é o menos frequente (10-15%), mais comum em homens e o tipo com maior associação com progressão para malignidade. Tratamento é descontinuar o uso hormonal, tratamento da obesidade e cirurgia nos casos com tamanho >5 cm (risco de sangramento e malignidade), sintomáticos ou em homens. Em todos os casos é recomendado o acompanhamento médico.</p>
                </div>

                <div id="txt1-9">
                  <p class="subtitle-2-content">Cistos do Pâncreas</p>
                  <p>Cistos são estruturas de tecido epitelial como revestimento e líquido ou mucina no interior. No pâncreas as lesões císticas são preocupantes devido ao risco de malignidade, progressão para câncer pancreático. O cisto simples não possui potencial de malignidade e contém líquido seroso no interior, enquanto que as neoplasias císticas contém mucina e variam quanto ao risco de malignidade. Os tipos de neoplasias císticas e o respectivo potencial de malignidade são: Neoplasia Mucinosa Papilar Intraductal (IPMN) de ducto principal (70%), IPMN de ducto secundário (20%), Neoplasia Mucinosa Cística (11-38%), Neoplasias Pseudopapilares Sólidas (15%), Neoplasia Cística Serosa (irrelevante). De forma direta, IPMN de ducto principal, Neoplasia Cística Mucinosa e Neoplasia Pseudopapilar Sólida possuem indicação cirúrgica, enquanto que o IPMN de ducto secundário deve ser avaliado quanto a características para malignidade antes de proceder com cirurgia ou ser optado o acompanhamento.</p>
                </div>

                <div id="btn-txt1">
                  <button for="txt1-1" class="btn btn-primary btn-apa">Colelitiase</button>
                  <button for="txt1-2" class="btn btn-primary btn-apa">Coledocolitiase</button>
                  <button for="txt1-3" class="btn btn-primary btn-apa">Doença do Refluxo Gastroesofágico (DRGE)</button>
                  <button for="txt1-4" class="btn btn-primary btn-apa">Acalásia</button>
                  <button for="txt1-5" class="btn btn-primary btn-apa">Doença Diverticular Colônica</button>
                  <button for="txt1-6" class="btn btn-primary btn-apa">Hemangioma Hepático</button>
                  <button for="txt1-7" class="btn btn-primary btn-apa">Hiperplasia Nodular Focal</button>
                  <button for="txt1-8" class="btn btn-primary btn-apa">Adenoma Hepatocelular</button>
                  <button for="txt1-9" class="btn btn-primary btn-apa">Cistos do Pâncreas</button>
                </div>
              </div>

              <div id="cirurOncoDigest" class="text-2">
                <p class="title-2-content">Cirurgia oncológica digestiva</p>
                <p>É a área da Cirurgia do Aparelho Digestivo que estuda e trata das neoplasias (tumores malignos) com origem neste sistema. Os fatores de risco, métodos diagnósticos e tratamento variam de acordo com o tipo de tumor, estadiamento e órgão de origem.</p>
                </br>

                <div id="txt2-1">
                  <p class="subtitle-2-content">Esôfago</p>
                  <p>No esôfago existem duas neoplasias mais comuns, o Carcinoma Espinocelular e o Adenocarcinoma. No primeiro, os principais fatores de risco são tabagismo, etilismo e bebidas com temperatura elevada, dentre outras. Enquanto que o segundo tipo é associado principalmente com Doença do Refluxo Gastroesofágico, tabagismo e obesidade. O tratamento vai variar de acordo com o tipo de tumor, localização e estágio ao diagnóstico. A conduta em casos curativos é a cirurgia (esofagectomia) associada com quimioterapia e/ou radioterapia.</p>
                </div>

                <div id="txt2-2">
                  <p class="subtitle-2-content">Estômago</p>
                  <p>O principal tipo é o Adenocarcinoma que pode ser do tipo intestinal ou difuso, sendo o segundo mais agressivo. Os principais fatores de risco são gastrite atrófica, infecção por Helicobacter pylori, dieta rica em nitrosaminas e alimentos conservados no sal, obesidade e tabagismo. História familiar positiva e algumas mutações genéticas também contribuem para o surgimento do câncer, como mutação CDH1, Síndrome de Lynch, Síndrome de Peutz-Jeghers e Polipose Adenomatosa Familiar. O tratamento vai variar de acordo com o tipo de tumor, localização e estágio ao diagnóstico. A conduta em casos curativos é associada à cirurgia com quimioterapia e radioterapia.</p>
                </div>

                <div id="txt2-3">
                  <p class="subtitle-2-content">Fígado</p>
                  <p>Este órgão participa do processo digestivo por meio da produção de bile e metabolismo dos nutrientes absorvidos pelo intestino, recebendo todo sangue proveniente do território esplâncnico (vasos do intestino). Possui alguns tumores benignos, como hemangioma hepático, adenoma hepatocelular e hiperplasia nodular focal e os malignos, como as lesões metastáticas e o carcinoma hepatocelular.</p>
                  
                  <div id="txt2-3-1">
                    <p class="subtitle-2-content">Lesões Metastáticas</p>
                    <p>O fígado possui uma particularidade por ser um dos órgãos mais comuns para lesões metastáticas, por exemplo, o câncer avançado do do cólon libera células na corrente sanguínea que terminam por se implantar no fígado e ali se desenvolvem. Praticamente todos órgãos do sistema digestivo e até mesmo de outros sistemas têm a capacidade de metastatizar para o fígado. Essas lesões metastáticas correspondem pela maioria das lesões tumorais encontradas no fígado. O tratamento varia de acordo com o tumor primário (órgão que originou as células neoplásicas), em alguns casos deve ser ressecado e em outros o tratamento é sistêmico com quimioterapia.</p>
                  </div>

                  <div id="txt2-3-2">
                    <p class="subtitle-2-content">O Carcinoma Hepatocelular</p>
                    <p>É a neoplasia originada nas células do fígado (hepatócitos), representa 75% dos tumores malignos primários do fígado. O principal fator de risco é a cirrose, que é o último estágio da inflamação crônica do fígado. Outros fatores são hepatites pelos vírus B, C e D, dieta com Aflatoxina B1 (fungos mais comum em alguns países da África e Ásia), alcoolismo, tabagismo, doença hepática gordurosa não-alcoólica, Hemocromatose, Deficiência de Alfa-1-antitripsina. O diagnóstico é feito com base na avaliação clínica, laboratorial e por imagem. O tratamento varia de acordo com as condições clínicas do paciente, tamanho tumoral e função hepática. A cirurgia com retirada do tumor é o principal tratamento, o fígado cirrótico permanece no paciente. Enquanto que o transplante hepático, apesar dos riscos, é indicado em muitos casos por retirar o tumor e o fígado comprometido pela cirrose, tratando tanto a insuficiência hepática quanto a neoplasia. Radioablação, procedimento menos agressivo pode ser usado em tumores pequenos ou em paciente na lista de espera para transplante. Tratamento sistêmico com quimioterapia e terapia-alvo fazem parte do arsenal terapêutico.</p>
                  </div>
                  
                  <div id="btn-txt2-3">
                    <button for="txt2-3-1" class="btn btn-primary btn-fig">Lesões Metastáticas</button>
                    <button for="txt2-3-2" class="btn btn-primary btn-fig">O Carcinoma Hepatocelular</button>
                  </div>
                
                </div>

                <div id="txt2-4">
                  <p class="subtitle-2-content">Vias Biliares</p>
                  <p>São compostas pelos canais de bile do fígado, que tem origem por todo o órgão e termina no ducto colédoco que elimina a bile no intestino (duodeno) junto do suco pancreático, a vesícula biliar armazena bile e libera no ducto hepático comum. Os tumores são: Colangiocarcinoma Intra-hepático, Colangiocarcinoma Extra-hepático (hilar e distal) e Carcinoma de Vesícula Biliar. São tumores agressivos e muitas vezes diagnosticados em fases avançadas. Os fatores de risco para carcinoma de vesícula biliar são colelitíase, pólipos de vesícula biliar, vesícula em porcelana (colecistite crônica), colangite esclerosante primária e obesidade. Os fatores de risco para o colangiocarcinoma são: Colangite Esclerosante Primária, cistos de colédoco, Litíase, Síndrome de Caroli, hepatolitíase, processos inflamatórios crônicos do fígado (hepatites virais, alcoolismo), obesidade e Fibrose Cística. O tratamento curativo é composto pela cirurgia combinada com quimioterapia. O procedimento cirúrgico varia de acordo com a localização do tumor e no caso em que a cirurgia não é possível, procede-se com a quimioterapia paliativa.</p>
                </div>

                <div id="txt2-5">
                  <p class="subtitle-2-content">Pâncreas</p>
                  <p>A principal neoplasia é o Adenocarcinoma Pancreático, um tumor agressivo e pouco sintomático nas fases iniciais, que resulta em diagnóstico apenas em fase avançada na maioria dos casos. Os fatores de risco são tabagismo, obesidade, história familiar, alterações genéticas (mutações no genes CDKN2A, MLH1, BRCA), Síndrome de Lynch, Síndrome de Peutz-Jeghers, Fibrose Cística e cistos pancreáticos. O diagnóstico é feito por avaliação clínica e exames de imagem. O tratamento curativo é por meio da cirurgia e quimioterapia, enquanto que no caso de doença avançada, cirurgias paliativas (para conforto) podem ser realizadas e a quimioterapia é o tratamento paliativo principal.</p>
                </div>

                <div id="txt2-6">
                  <p class="subtitle-2-content">Câncer Colorretal</p>
                  <p>A neoplasia de colon (adenocarcinoma) é o tumor mais comum do aparelho digestivo e possui indicação de rastreio, que é realizado por meio da colonoscopia para indivíduos acima dos 50 anos na população geral (sem risco aumentado ou história familiar). A conduta de rastreio foi empregada devido ao entendimento dos pólipos intestinais como lesões precursoras da maioria dos casos e com carcinogênese (formação do tumor) melhor compreendida, onde as células passam por uma sequência de mudanças que variam de displasia de baixo grau, displasia de alto grau e neoplasia. Vale lembrar que o rastreio não é anual e varia de acordo com o tipo (adenoma como principal) e número de pólipos. Fatores de risco são: Polipose Adenomatosa Familiar, Síndrome de Lynch, Doença de Crohn, Retocolite Ulcerativa, Fibrose Cística, idade superior a 45 anos, tabagismo, alcoolismo e alta ingestão de alimentos processados. Apesar da presença de síndromes familiares acima, a grande maioria ocorre de forma esporádica. Fatores protetores como atividade física, dieta rica em fibras, frutas e vegetais são estudados. Diagnóstico é feito por exames de imagem como tomografia computadorizada, laboratoriais e colonoscopia. O tratamento do câncer no cólon é realizado por meio de cirurgia e quimioterapia, enquanto que o câncer no reto é tratado por meio da cirurgia, quimioterapia e radioterapia. Medicamentos de terapia-alvo podem ser associados na terapia de acordo com o caso e mutações encontradas.</p>
                </div>

                <div id="btn-txt2">
                  <button for="txt2-1" class="btn btn-primary btn-onco">Esôfago</button>
                  <button for="txt2-2" class="btn btn-primary btn-onco">Estômago</button>
                  <button for="txt2-3" class="btn btn-primary btn-onco">Fígado</button>
                  <button for="txt2-4" class="btn btn-primary btn-onco">Vias Biliares</button>
                  <button for="txt2-5" class="btn btn-primary btn-onco">Pâncreas</button>
                  <button for="txt2-6" class="btn btn-primary btn-onco">Câncer Colorretal</button>
                </div>
                
              </div>

              <div id="herniaAbd" class="text-2">
                <p class="title-2-content">Hérnias abdominais</p>
                <p>Hérnias são "defeitos" na parede abdominal, mais especificamente na camada músculo-aponeurótica por onde pode passar o intestino e causar complicações. Podem ter origem congênita ou adquirida. Alguns fatores de risco variam de acordo com o tipo de hérnia, contudo tabagismo e patologias que afetam o colágeno aumentam o risco de hérnias no geral. Todos os tipos de hérnias podem complicar com encarceramento, intestino fica preso no interior da hérnia, ou estrangulamento, quando o intestino no interior da hérnia fica sem suprimento sanguíneo e pode necrosar. O risco dessas complicações variam de acordo com o local e tamanho da hérnia. O tratamento é sempre cirúrgico, para evitar aumento do tamanho e complicações. O tratamento minimamente invasivo é realizado sempre que possível e o uso de tela é indicado na maioria dos casos.</p>
                </br>
                <div id="txt3-1">
                  <p class="subtitle-2-content">Hérnia Inguinal</p>
                  <p>Cerca de 75% de todas as hérnias ocorrem na região inguinal, sendo aproximadamente 25 vezes mais comum no sexo masculino. São identificadas como desconforto local e aumento de volume na região inguinal. Os tipos são: Direta, Indireta e Femoral.</p>
                  <ul class="list-group list-group-flush">                      
                    <li>Direta: acomete mais homens acima dos 50 anos, relacionada com a fraqueza na musculatura devido aos esforços e ao tabagismo, entre outras causas.</li>
                    <li>Indireta: é a mais comum (50% de todas). Consequência da descida do testículo para a bolsa escrotal, que ocorre normalmente durante o desenvolvimento fetal, e atraso no fechamento do conduto peritoneal (liga o abdome à bolsa escrotal) e alargamento durante os anos seguintes pelo esforço. Por isso o intestino pode descer até o testículo, com risco de complicar!</li>
                    <li>Femoral: mais comum em mulheres, ocorre em uma região de fraqueza ao lado dos vasos para os membros inferiores (vasos ilíacos). Possui risco aumentado de complicar com encarceramento e estrangulamento.</li>
                  </ul>
                </div>
                <div id="txt3-2">
                  <p class="subtitle-2-content">Hérnia Umbilical</p>
                  <p>Este tipo comum de hérnia (até 30% das hérnias), muitas vezes notado ao nascimento, como uma saliência no umbigo. É causado quando a abertura no local da passagem do cordão umbilical na parede abdominal, que normalmente fecha antes do nascimento, não fecha completamente. Mesmo quando ocorre o fechamento correto desta área, a hérnia umbilical pode aparecer na idade adulta, já que é uma área de fraqueza da parede abdominal. Gravidez, obesidade e tabagismo são fatores de risco para este tipo de hérnia.</p>
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
                <p>As cirurgias abdominais eram feitas de forma aberta, ou seja, com incisões abdominais amplas para possibilitar acesso a cavidade abdominal e tratamento das mais diversas patologias. A Cirurgia Minimamente Invasiva é aquela realizada por meio da Videolaparoscopia ou Cirurgia Robótica.</p>
                </br>
                <div id="txt4-1">
                  <p>A videolaparoscopia, a cirurgia é realizada por meio de incisões pequenas, em média de 5-12mm cada, por onde entra uma câmera e pinças, possibilitando recuperação precoce no pós-operatório e retorno às atividades, além de reduzir alguns riscos como infecção de ferida operatória e hérnias incisionais.</p>
                </div>
                <div id="txt4-2">
                  <p>Na sequência, surgiu a Cirurgia Robótica, que possibilita aumento dos movimentos das pinças cirúrgicas, melhor campo de visão, ergonomia para o cirurgião e ótimos resultados cirúrgicos, no mínimo comparáveis com os resultados das outras modalidades.</p>
                </div>
                <button for="txt4-1" class="btn btn-primary btn-rob">Videolabaroscopia</button>
                <button for="txt4-2" class="btn btn-primary btn-rob">Cirurgia Robótica</button>
              </div>

          </div>
        </div>
    </div>
  </div>
@endsection

@section('segunda-foto')
    <div class=" content-2" id="ft-aba">
      <img class="cover" src="{{ asset('build/assets/img6-afd4082b.jpg') }}" alt="assinatura-dr.rodrigo">
    </div>
@endsection

@section('terceiro-conteudo')
  <div id="cnt">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" id="title" href="#">Conteúdo</a>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <p id="lcon" for="art" class="nav-item nav-link active">Artigos</p>
              <p id="lcon" for="cir" class="nav-item nav-link">Cirurgias</p>
              <p id="lcon" for="vid" class="nav-item nav-link">Vídeos</p>
            </div>
          </div>
          <div>
            <a target="_blank" href="https://www.researchgate.net/profile/Rodrigo-Piltcher-Da-Silva"><button class="btn btn-primary">Mais Artigos</button></a>
          </div>
        </div>
    </nav>
    <div class="general-content container">
      <div id="artigos" class="div-content">
        <div class="cell">
          <a target="_blank" href="https://www.researchgate.net/publication/370125814_Encapsulating_peritoneal_sclerosis_post_liver_transplant_and_peritoneal_dialysis_case_report_and_literature_review?_sg=ha8Bi94isAQYWSLJrAB0MFtrh2Rc3oqiynUcS9k2NxRYBWaJupYJk9VRTR9ECke2jsYxJTpdklmZko8&_tp=eyJjb250ZXh0Ijp7ImZpcnN0UGFnZSI6InF1ZXN0aW9uIiwicGFnZSI6Il9kaXJlY3QifX0"><img clas="cover" src="{{ asset('build/assets/artigo1-3f40401b.png') }}" alt="foto-artigo-1"></a>
          <p>Encapsulating peritoneal sclerosis post liver transplant and peritoneal dialysis</p>
        </div>

        <div class="cell">
          <a target="_blank" href="https://www.researchgate.net/publication/373368153_Incisional_Hernias_after_Vascular_Surgery_for_Aortoiliac_Aneurysm_and_Aortoiliac_Occlusive_Arterial_Disease_Has_Prophylactic_Mesh_Changed_This_Scenario"><img clas="cover" src="{{ asset('build/assets/artigo2-c4ca59c6.jpg') }}" alt="foto-artigo-2"></a>
          <p>Incisional Hernias after Vascular Surgery for Aortoiliac Aneurysm and Aortoiliac Occlusive Arterial Disease</p>
        </div>

        <div class="cell">
          <a target="_blank" href="https://www.researchgate.net/publication/361494872_Mesenteric_venous_thrombosis_in_a_pregnant_woman_at_first_trimester_gestation_a_case_report?_sg=WL1_hb9AIQBeq92c51TfdzR0_W-a1t56adnMREzXd3I1zROF-VR05uSkY77nEnCu1JPncYrA8wfcBMs&_tp=eyJjb250ZXh0Ijp7ImZpcnN0UGFnZSI6InF1ZXN0aW9uIiwicGFnZSI6Il9kaXJlY3QifX0"><img clas="cover" src="{{ asset('build/assets/artigo3-07f89f0e.jpg') }}" alt="foto-artigo-3"></a>
          <p>Mesenteric venous thrombosis in a pregnant woman at first trimester gestation: a case report</p>
        </div>
        
        <div class="cell">
          <a target="_blank" href="https://www.researchgate.net/publication/359628446_Pneumatosis_cystoides_intestinalis_with_pneumoperitoneum_in_an_87-years-old_male_patient_a_case_report?_sg=VX4kwgLX2FaadoeaT4cNBW8gEm4KvXYGZj4W17SlIuu6onyG9TdRVSOUlJvvhS8kwTPjlp6giHL4Zps&_tp=eyJjb250ZXh0Ijp7ImZpcnN0UGFnZSI6InF1ZXN0aW9uIiwicGFnZSI6Il9kaXJlY3QifX0"><img clas="cover" src="{{ asset('build/assets/artigo4-ba2954b5.jpg') }}" alt="foto-artigo-4"></a>
          <p>Pneumatosis cystoides intestinalis with pneumoperitoneum in an 87-years-old male patient: a case report</p>
        </div>
        
        <div class="cell">
          <a target="_blank" href="https://www.researchgate.net/publication/353943689_Complex_abdominal_wall_reconstruction_after_massive_resection_due_to_neoplastic_invasion_a_case_report"><img clas="cover" src="{{ asset('build/assets/artigo5-beb4ec80.jpg') }}" alt="foto-artigo-5"></a>
          <p>Complex abdominal wall reconstruction after massive resection due to neoplastic invasion: a case report</p>
        </div>
        
        <div class="cell">
          <a target="_blank" href="https://www.researchgate.net/publication/363730900_Gastric_adenocarcinoma_in_the_excluded_stomach_18_years_after_bariatric_surgery_a_case_report?_sg=a5_SX676-okqIs43MzcwRe19n7_Oek82_vCDwpWLmRx4b4bNiA4GIiC0R4p-wRvVFkqhT_Q5QFTkeFo&_tp=eyJjb250ZXh0Ijp7ImZpcnN0UGFnZSI6InF1ZXN0aW9uIiwicGFnZSI6Il9kaXJlY3QifX0"><img clas="cover" src="{{ asset('build/assets/artigo6-8a439a72.jpg') }}" alt="foto-artigo-6"></a>
          <p>Gastric adenocarcinoma in the excluded stomach 18 years after bariatric surgery: a case report</p>
        </div>
        
        <div class="cell">
          <a target="_blank" href="https://www.researchgate.net/publication/356986154_Biliary_tract_melanoma_metastasis_mimicking_hilar_cholangiocarcinoma_a_case_report"><img clas="cover" src="{{ asset('build/assets/artigo7-3b59fb17.jpg') }}" alt="foto-artigo-7"></a>
          <p>Biliary tract melanoma metastasis mimicking hilar cholangiocarcinoma: a case report</p>
        </div>
        
        <div class="cell">
          <a target="_blank" href="https://www.researchgate.net/publication/354452869_Wandering_spleen_as_a_cause_of_sinistral_portal_hypertension?_sg=TgP1sqJydGJY1tmXD--HnYiq4dDVQSlivMptPicn623kcT0Lgp6WJGhPaVljBl9YZnzs1WQOAaKYg54&_tp=eyJjb250ZXh0Ijp7ImZpcnN0UGFnZSI6InF1ZXN0aW9uIiwicGFnZSI6Il9kaXJlY3QifX0"><img clas="cover" src="{{ asset('build/assets/artigo8-e24c9abe.png') }}" alt="foto-artigo-8"></a>
          <p>Wandering spleen as a cause of sinistral portal hypertension</p>
        </div>
        
        <div class="cell">
          <a target="_blank" href="https://www.researchgate.net/publication/354189583_The_impact_of_COVID-19_and_social_avoidance_in_urgent_and_emergency_surgeries_-_will_a_delay_in_diagnosis_result_in_perioperative_complications"><img clas="cover" src="{{ asset('build/assets/artigo9-27e5ca83.png') }}" alt="foto-artigo-9"></a>
          <p>The impact of COVID-19 and social avoidance in urgent and emergency surgeries</p>
        </div>

      </div>
    </div>
  </div>
@endsection

@section('terceira-foto')
    <div class=" content-2">
      <img class="cover" src="{{ asset('build/assets/img7-c40ef9b9.jpg') }}" alt="foto-dr.rodrigo">
    </div>
@endsection

@section('quarto-conteudo')
    <div class="general-content container">
        <div class="content" style="border: 5px groove">
            <div class="content-inside">
              <div class="item-contact">
                  <img src="{{ asset('build/assets/telefone-bbe13aae.png') }}" alt="telefone-dr.rodrigo">
                  <p>(53) 3227 9065</p>
              </div>
              <div class="item-contact">
              <a href="https://api.whatsapp.com/send?phone=5553999689900" target="_blank"><img src="{{ asset('build/assets/whats-c511663c.png') }}" alt="whatsapp-dr.rodrigo"></a>
                  <p>(53) 9 9968 9900</p>
              </div>
              <div class="item-contact">
                  <a href="https://www.instagram.com/rodrigopiltcher/" target="_blank"><img src="{{ asset('build/assets/insta-ae16c753.png') }}" alt="instagram-dr.rodrigo"></a>
                  <p>@rodrigopiltcher</p>
              </div>
              <div class="item-contact">
                  <a href="https://www.google.com.br/maps/place/R.+Andrade+Neves,+3006+-+Centro,+Pelotas+-+RS,+96020-080/@-31.7579854,-52.3400494,17z/data=!3m1!4b1!4m6!3m5!1s0x9511b5a1ab101e81:0x8e226fd26d0fa376!8m2!3d-31.75799!4d-52.3374745!16s%2Fg%2F11c1pbjqzt?entry=ttu" target="_blank"><img src="{{ asset('build/assets/local-7f60c8d0.png') }}" alt="local-dr.rodrigo"></a>
                  <p>Rua Andrade Neves, 3006</p>
              </div>
            </div>
            <div class="content-inside">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3392.4582423854667!2d-52.34004942466707!3d-31.757985412847656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9511b5a1ab101e81%3A0x8e226fd26d0fa376!2sR.%20Andrade%20Neves%2C%203006%20-%20Centro%2C%20Pelotas%20-%20RS%2C%2096020-080!5e0!3m2!1spt-BR!2sbr!4v1703765121756!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection

@section('style')

    #lcon:hover{
      cursor: pointer;
    }

    #navbarNavAltMarkup{
      margin-top: 15px;
    }

    .div-content{
      display: grid;
      gap: 25px;
      grid-template-columns: repeat(3, 1fr);

      place-items: center;
      margin-top: 35px;

    }

    #cnt{
      height: 1200px;
      width: 100%;
    }

    .cell p{
      text-align: center;

      font-size: 16px;
      font-style: italic;
      line-height: normal;
    }

    .cell img{
      width: 100%;
      height: 230px;

      text-align: center;
    }


    .cell{
      padding: 0px;

      width: 70%;
      height: 300px;

      overflow: hidden;

    }

    .cover{
      object-fit: cover;
    }

    
    #textos{
      text-align: justify !important;
    }

    #sc{
      height: 880px;
      width: 100%;

      position: relative;
      
    }

    .btn-apa{
      margin-bottom: 5px;
    }

    #btn-txt1{
      padding-top: 20px;
    }
    
    #btn-txt3{
      padding-top: 20px;
    }   

    .btn-primary{
      background-color: #002080 !important;
    }

    .btn-fig{
      background-color: #0058f0 !important;
      margin-bottom: 5px;
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

      text-align: justify;

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
      padding-top: 40px;
      

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
      margin-top: 40px;

      text-align: justify;

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
@endsection
