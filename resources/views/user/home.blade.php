@extends('layouts.user')

@section('header')
    <style>
        .full-img {
          position: absolute;
          width: 1920px;
          height: 1024px;
          left: 0px;
          top: 1px;

          background: linear-gradient(0deg, rgba(0, 0, 0, 0.18), rgba(0, 0, 0, 0.18));
            /* background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 180px; */
        }
        #hero{
          
            background: url('{{asset('user/images/main-bg.JPG')}}') top center;
        }
        .image-center{
          display: block;
          margin-left: 6.5px;
          margin-right: 6.5px;
          width: 100%;
        } 
    </style>    
@endsection

@section('hero')
    <h1 style="
width: 363px;
height: 70px;

/* Font/Minion Variable Concept/Bold/24 */

font-family: 'Minion Variable Concept';
font-style: normal;
font-weight: 700;
font-size: 24px;
line-height: 146%;
/* or 35px */

text-align: right;
letter-spacing: 0.12em;

/* Color/414042 */

color: #414042;

text-shadow: 14px 24px 28px rgba(0, 0, 0, 0.25);

/* Inside auto layout */

flex: none;
order: 0;
flex-grow: 0;">MAKE A DIFFERENT LOOK WITH SORA</h1>
   
    <a href="#about" class="btn-get-started" style="/* Frame 53 */


/* Auto layout */

display: flex;
flex-direction: row;
align-items: flex-start;
padding: 8px 46px;
gap: 10px;

width: 163px;
height: 45px;

/* Color/414042 */

background: #414042;
border-radius: 49px;

/* Font/Minion Variable Concept/Regular/20 */

font-family: 'Minion Variable Concept';
color: #FFFFFF;

flex: none;
order: 1;
flex-grow: 0;">Look Us</a>
@endsection


@section('content')

      <!--========================== About Us Section ============================-->
      <section id="about">
        <div class="container">
          <div class="row about-container">
  
            <div class="col-lg-7 content order-lg-1 order-2">
              <h2 class="title">Tentang Kami</h2>
              <p> {!!$about[0]->caption!!}</p>
            </div>
  
            <div class="col-lg-5 background order-lg-2 order-1 wow fadeInRight" 
                style="background: url('{{asset('about_image/'.$about[0]->image)}}') center top no-repeat; background-size: cover;"></div>
          </div>
  
        </div>
      </section>
  
      <!--========================== Services Section ============================-->
      <section id="services">
        <div class="container wow fadeIn">
          <div class="section-header">
            <h3 class="section-title">Mengapa Memilih Kami?</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="box">
                <div class="icon"><i class="fa fa-shield"></i></div>
                <h4 class="title">Keamanan Berkendara</h4>
                <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
              <div class="box">
                <div class="icon"><i class="fa fa-money"></i></div>
                <h4 class="title">Harga Ekonomis</h4>
                <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
              <div class="box">
                <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                <h4 class="title">Kenyamanan Pelanggan</h4>
                <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- #services -->
  
      <!--========================== Call To Action Section ============================-->
      <section id="call-to-action">
        <div class="container wow fadeIn">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Bergabung dan Bepergian Bersama Kami</h3>
              <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Contact</a>
            </div>
          </div>
  
        </div>
      </section>
  
      <!--========================== category Section ============================-->
      <section id="category">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title"></h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
          <div class="row">
  
          <div class="row" id="category-wrapper">
            @foreach ($categories as $category)
                <div class="col-md-4 col-sm-12 category-item filter-app" >
                      <a href="">
                        <img src="{{asset('category_image/'.$category->image)}}" class="image-center">
                        <div class="details">
                          <h4>{{$category->name}}</h4>
                          <span>{{$category->description}}</span>
                        </div>
                      </a>
                </div>
            @endforeach  
          </div>
  
        </div>
      </section>
  
      <!--========================== Gallery Section ============================-->
      <section id="contact" style="padding-bottom:85px">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h3 class="section-title">Galeri</h3>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
        </div>
  
        <div class="container wow fadeInUp">
          <div class="row justify-content-center">
  
            <div class="col-lg-12 col-md-4">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/prambanan.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata2.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata3.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata4.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata5.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata6.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata7.png')}})">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 full-img" style="background-image: url({{asset('user/images/gallery/wisata8.png')}})">
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
@endsection