<header>
    <div class="me-auto ms-auto headerCont">
        <section class="d-flex justify-content-between align-items-center">
           
           <a href="{{URL::to('/')}}"> <img src="{{URL::asset('../img/dc-logo.png')}}" class="imgHead"> </a>
            <nav class="navbar-cont">
              <a href="#" class="mx-2 text-decoration-none text-dark">CHARACTERS</a>
              <a href="#" class="mx-2 text-decoration-none text-dark">COMICS</a>
              <a href="#" class="mx-2 text-decoration-none text-dark">MOVIES</a>
              <a href="#" class="mx-2 text-decoration-none text-dark">TV</a>
              <a href="#" class="mx-2 text-decoration-none text-dark">GAMES</a>
              <a href="#" class="mx-2 text-decoration-none text-dark">COLLECTIBLES</a>
              <a href="#" class="mx-2 text-decoration-none text-dark">VIDEOS</a>
              <a href="#" class="mx-2 text-decoration-none text-dark">FANS</a>
              <a href="#" class="mx-2 text-decoration-none text-dark">NEWS</a>
              <a href="#" class="mx-2 text-decoration-none text-dark">SHOP &#129171;</a>
            </nav>
            <div class="search">
            <div class="input-group">
                <div class="form-outline" data-mdb-input-init>
                    <input type="search" id="form1" class="form-control" placeholder="Search" />
                </div>
                <button type="button" class="btn btn-primary" data-mdb-ripple-init>
                 <i class="fas fa-search"></i>
                </button>
            </div>
            </div>                 
        </section>
    </div>
    {{-- JUMBOTRON    --}}
    <div id="jumbo" class="mb-5 position-relative">
        <img class="w-100 h-100 imgJumbo" src="{{URL::asset('../img/jumbotron.jpg')}}">
        <div class="current text-center position-absolute pt-1">
            <a href="{{URL::to('/')}}">
          <span class="fs-5 text-light font-weight-bold"><b>CURRENT SERIES</b></span>
            </a>
        </div>
    </div>
</header>