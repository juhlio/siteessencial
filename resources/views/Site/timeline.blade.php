@extends('Site.layout')

@section('title',"Linha do Tempo Essencial Energia  - Grupos Geradores")

@section('content')

  <section id="page-title" class="page-title page-title-layout12 bg-overlay bg-overlay-2 text-center">
      <div class="bg-img"><img src="https://apiessencial.com.br/vercel/assets/images/page-titles/projetos-essencial-energia.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">Linha do tempo</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Institucional</a></li>
                <li class="breadcrumb-item active">Linha do Tempo</li>
              </ol>
            </nav><br>
             <div class="video__btn align-v-h">
            <a class="popup-video" href="https://www.youtube.com/watch?4=&v=Yxk5Ke7sbbM">
              <span class="video__player-animation"></span>
              <div class="video__player">
                <img src="assets/images/icons/player.png" alt="player">
              </div>
              <h6 class="video__player-title">Veja!</h6>
            </a>
          </div>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->


    <div class="col-sm-12 col-md-12 col-lg-12 bg-gray">
        <div class="inner-padding">
          <div class="timeline-wrap">
              <!-- Timeline Item #1 -->
              <div class="timeline__item">
                <div class="timeline__item-date">2020</div>
                <div class="timeline__item-content">
                  <h4 class="timeline__item-title">Suporte a Concessionária</h4>
                  <p class="timeline__item-desc">Acompanhamento nas operações de uma conssecionária de energia. Locamos Geradoes para atuar durante as manutenções de alta complexidade
                    e para outras necessidades pontuais.  </p><br>
                  <a href="https://www.youtube.com/watch?4=&v=ACT9bryKBsM" class="popup-video btn btn__rounded btn__primary btn__hover3">Vídeo</a>

                </div>
              </div><!-- /.timeline-item -->
             <!-- Timeline Item #2 -->
              <div class="timeline__item">
                <div class="timeline__item-date">2017</div>
                <div class="timeline__item-content">
                  <h4 class="timeline__item-title">Mais de 700 equipamentos atendidos</h4>
                  <p class="timeline__item-desc">Chegamos as essa expressiva marca. 700 equipamentos cobertos por nossa manutenção.
                    Sempre com suporte e plantão 24h todos os dias. </p>
                </div>
              </div><!-- /.timeline-item -->
              <!-- Timeline Item #3 -->
              <div class="timeline__item">
                <div class="timeline__item-date">2013</div>
                <div class="timeline__item-content">
                  <h4 class="timeline__item-title">Usina Full Time na Bahia</h4>
                  <p class="timeline__item-desc">Um grande Shoopping na Bahia precisava de uma Usina funcionando todo o tempo. A energia fornecida pela concessionária não era suficiente
                    para seu funcionamento. Projetamos e executamos essa usina para funcionamento ininterrupto. </p>
                </div>
              </div><!-- /.timeline-item -->
              <!-- Timeline Item #4 -->
              <div class="timeline__item">
                <div class="timeline__item-date">2013</div>
                <div class="timeline__item-content">
                  <h4 class="timeline__item-title">Turn Key em Data Center</h4>
                   <p class="timeline__item-desc">Mais uma grande usina para Data Center.   </p>

                </div>
              </div><!-- /.timeline-item -->

              <!-- Timeline Item #5 -->
              <div class="timeline__item">
                <div class="timeline__item-date">2010</div>
                <div class="timeline__item-content">
                  <h4 class="timeline__item-title">100 clientes em manutenção</h4>
                  <p class="timeline__item-desc">Nosso crescimento em todas as áreas é fundamental. Em 2010 chegamos marca de 100 cliente com contrato de manuteção. Todos com suporte 24h e plantão todos os dias.  </p>
                </div>
              </div><!-- /.timeline-item -->

              <!-- Timeline Item #6 -->
              <div class="timeline__item">
                <div class="timeline__item-date">2009</div>
                <div class="timeline__item-content">
                  <h4 class="timeline__item-title">Fornecimento e instalação de Usina</h4>
                  <p class="timeline__item-desc">Fizemos todo o projeto de uma grande usina para um Data Center.  </p>
                </div>
              </div><!-- /.timeline-item -->

              <!-- Timeline Item #6 -->
              <div class="timeline__item">
                <div class="timeline__item-date">2008</div>
                <div class="timeline__item-content">
                  <h4 class="timeline__item-title">7 Estados Atendidos</h4>
                  <p class="timeline__item-desc">Nossa expansão está a toda. E em 2008 já estávamos em 7 estados brasileiros. </p>
                </div>
              </div><!-- /.timeline-item -->

              <!-- Timeline Item #6 -->
              <div class="timeline__item">
                <div class="timeline__item-date">2007</div>
                <div class="timeline__item-content">
                  <h4 class="timeline__item-title">Fornecimento ao Walmart</h4>
                  <p class="timeline__item-desc">Fornecemos equipamentos ao maior varejista do Planeta. A esse cliente também já locamos e fizemos manutenção em seus GMG's </p>
                </div>
              </div><!-- /.timeline-item -->

               <!-- Timeline Item #6 -->
              <div class="timeline__item">
                <div class="timeline__item-date">2006</div>
                <div class="timeline__item-content">
                  <h4 class="timeline__item-title">Fundação Essencial Energia</h4>
                  <p class="timeline__item-desc">Começam os trabalhos com o objetivo de mudar a forma do atendimento a Geradores de Energia. </p>
                </div>
              </div><!-- /.timeline-item -->

            </div><!-- /.timeline wrap -->

        </div>
      </div><!-- /.col-lg-6 -->



@endsection
