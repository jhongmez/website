@extends('layout/app')

<section id="slider">
    <div class="owl-carousel owl-theme mt-5">
        <div class="item mt-5">
            <img src="{{ asset('images/firstslider.jpg') }}" class="slider" alt="industrias maviltex s.a.s">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                            <h2 class="TextSlider">
                                manejamos<br> 
                                altos estandares <br> 
                                de calidad
                            </h2>
                            <span class="line"></span>
                            <p class="description">
                                En Industrias Maviltex nos preocupamos por que nuestros productos <br> se han de primera calidad <br> <br>
                            </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="item"><h4>2</h4></div>
        <div class="item"><h4>3</h4></div>
    </div>
        <img src="{{ asset('svg/mouse.svg') }}" alt="mouse" class="mouse">
</section>
<section id="how">
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center TitleHow mt-5">quienes somos</h2>
                <span class="text-center underline"></span>
                <p class="howDescription mt-5 mb-5">Empresa licenciataria oficial de Walt Disney, fundada en el año 2004 en el sector textil enfocada a diseño, confección y comercialización de vestidos de baño a través de la prestación de servicios de excelente calidad, contamos con <strong>15 años de experiencia</strong> en el mercado.</p>
                <div class="row justify-content-center containHow">
                        <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                            <a href="">
                                <img src="{{ asset('svg/industria.svg') }}" alt="" class="img-thumbnail shadow p-3 mb-5 bg-white rounded" width="200">
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                            <a href="">
                                <img src="{{ asset('svg/machine.svg') }}" alt="" class="img-thumbnail shadow p-3 mb-5 bg-white rounded" width="200">
                            </a>
                         </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                            <a href="">
                                <img src="{{ asset('svg/quality.svg') }}" alt="" class="img-thumbnail shadow p-3 mb-5 bg-white rounded" width="200">
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="clients">
    <div class="container-fluid background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="TitleClients text-center mt-5">confian&nbsp;&nbsp;en&nbsp;&nbsp;nosotros</h2>
                    <span class="DobleUnderline"></span>
                    <p class="DescriptionClients text-center mt-5 mb-5">Estos son algunos de nuestros clientes, los cuales confian plenamente en nosotros.</p>
                    <div class="row justify-content-center mt-5">
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="{{ asset('svg/surtitodo.svg') }}" alt="industrias maviltex s.a.s">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="{{ asset('svg/didetexco.svg') }}" alt="industrias maviltex s.a.s">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4">
                                    <img src="{{ asset('images/1233.jpg') }}" alt="industrias maviltex s.a.s" class="img-thumbnail shadow p-3 mb-5 ImagesClients">
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="mark">
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2 class="text-center mt-5 TitleMark">Nuestras Marcas</h2>
                <span class="thirdUnderline"></span>
                <p class="text-center mt-5 mb-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate saepe nobis ut necessitatibus vero, possimus tempore aspernatur. Debitis quasi quos ad! Incidunt ratione laborum commodi dolore, illo tenetur sed amet.
                </p>
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                        <img src="{{ asset('images/tropical.png') }}" alt="Industrias Maviltex" class="img-thumbnail shadow p-3 mb-5" width="85%">
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                        <img src="{{ asset('svg/palmarena.svg') }}" alt="Industrias Maviltex" class="img-thumbnail shadow p-3 mb-5" width="78%">
                     </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 text-center">
                        <img src="{{ asset('images/marehia.png') }}" alt="Industrias Maviltex" class="img-thumbnail shadow p-3 mb-5" width="91%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <h2 class="text-center TitleContact mt-5">contactanos</h2>
                <span class="fourUnderline"></span>
            </div>
            <div class="col-md-12 mb-5">
                <p class="text-center icons">Para cualquier tipo de información puedes acercate a nuestra sede principal o enviarnos un correo donde nos podemos contactar contigo.</p>
            </div>
            <div class="col-md-4 mb-4 mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.257042484052!2d-75.47905148588552!3d5.06203279632588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e476f7e41a246e1%3A0x8faace5968e9954d!2sIndustrias+Maviltex!5e0!3m2!1ses!2sco!4v1539709680755" width="100%" height="350"></iframe>
            </div>
            <div class="col-md-4 mb-4 mb-5">
                <form action="{{ url('send') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nombre" placeholder="* Nombre Completo" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="correo" placeholder="* Correo electrónico" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="number" name="celular" placeholder="* Celular o Telefono fijo" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea name="mensaje" cols="30" rows="5" placeholder="* Mensaje o comentario" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block ButtonSubmit">
                            Enviar mensaje <i class="fas fa-share"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-4 mb-4 mb-5">
                <div class="form-group">
                    <p class="icons"><i class="far fa-compass"></i> Calle 64 # 10 – 151</p>
                </div>
                <div class="form-group">
                    <p class="icons"><i class="fas fa-headset"></i> 875-0502 | 875-0455</p>
                </div>
                <div class="form-group">
                    <p class="icons"><i class="far fa-envelope-open"></i> servicioalcliente@tropicalbeach.com.co</p>
                </div>
                <div class="form-group">
                    <p class="icons"><i class="far fa-clock"></i> Horario de atención: 8:00am - 6:00pm</p>
                </div>
            </div>
        </div>
    </div>
</section>