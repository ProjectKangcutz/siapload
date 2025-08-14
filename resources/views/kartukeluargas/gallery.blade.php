        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 templatemo-content-wrapper">
            <div class="templatemo-content">   
              <section id="templatemo-page1-text" class="active">
                <div class="col-sm-12 col-md-12">
                  <h2>Berkas-berkas</h2>

                  <div id="slider" class="flexslider">
                    <ul class="slides">
                      @foreach($files as $index => $berkas)
                      <li>
                       <div class="slider-label">
                        Gambar {{ $index+1 }} - {{ $berkas->jenis ?? 'Tanpa Judul' }}
                      </div>
                      <img src="{{ asset('storage/'.$berkas->path) }}" width="100%" height="400px" alt="Slide {{ $index+1 }}"/>

                    </li>
                    @endforeach
                  </ul>
                </div>
                <div id="carousel" class="flexslider">
                  <ul class="slides">
                    @foreach($files as $index => $berkas)
                    <li>
                      <img src="{{ asset('storage/'.$berkas->path) }}" width="150px" height="100" alt="Thumbnail {{ $index+1 }}"/>
                    </li>
                    @endforeach

                  </ul>
                </div>
              </div>

            </div><!-- /.templatemo-content -->  
          </div><!-- /.templatemo-content-wrapper --> 
        </div><!-- /.row --> 

        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div><!-- /#preloader -->

        <script src="{{asset('templatemo/js/jquery.min.js')}}"></script>
        <script src="{{asset('templatemo/js/jquery.backstretch.min.js')}}"></script>
        <script src="{{asset('templatemo/js/jquery.flexslider.min.js')}}"></script>
        <script src="{{asset('templatemo/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('templatemo/js/templatemo_script.js')}}"></script>
        <link rel="stylesheet" href="{{asset('templatemo/css/templatemo_main.css')}}">