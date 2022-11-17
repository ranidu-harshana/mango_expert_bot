<x-header/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-top-nav/>
<div class="wrapper row3">
    <main class="hoc container clear"> 
        <div class="center btmspace-50">
            <h2 class="heading">Diseases And Symptoms</h2>
            <hr>
        </div>
        <div class="center btmspace-50">
            <h3 class="heading">Powdery mildew</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/powdery_mildew/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#powdery_mildew_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/powdery_mildew/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#powdery_mildew_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/powdery_mildew/3.png') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#powdery_mildew_Modal3">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="powdery_mildew_Modal" tabindex="-1" aria-labelledby="powdery_mildew_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/powdery_mildew/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="powdery_mildew_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="powdery_mildew_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#powdery_mildew_collapseOne" aria-expanded="true" aria-controls="powdery_mildew_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="powdery_mildew_collapseOne" class="accordion-collapse collapse show" aria-labelledby="powdery_mildew_headingOne" data-bs-parent="#powdery_mildew_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The characteristic symptom of the disease is the white superficial powdery fungal growth on leaves, stalks of panicles, flowers and young fruits.</li>
                                                <li>The affected flowers and fruits drop pre-maturely reducing the crop load considerably or might even prevent the fruit set.</li>
                                                <li>The fungus parasitizes young tissues of all parts of the inflorescence, leaves and fruits.</li>
                                                <li>Young leaves are attacked on both the sides but it is more conspicuous on the grower surface. Often these patches coalesce and occupy larger areas turning into purplish brown in colour</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="powdery_mildew_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#powdery_mildew_collapseTwo" aria-expanded="false" aria-controls="powdery_mildew_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="powdery_mildew_collapseTwo" class="accordion-collapse collapse" aria-labelledby="powdery_mildew_headingTwo" data-bs-parent="#powdery_mildew_accordion">
                                        <div class="accordion-body">
                                            <strong>The powdery mildew fungus overwinters in dormant buds.</strong> When conditions are favorable for growth of the fungus in spring, spores are produced, released, and cause new infections. Secondary spread of the disease can occur if spores are produced in these new infections
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="powdery_mildew_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#powdery_mildew_collapseThree" aria-expanded="false" aria-controls="powdery_mildew_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="powdery_mildew_collapseThree" class="accordion-collapse collapse" aria-labelledby="powdery_mildew_headingThree" data-bs-parent="#powdery_mildew_accordion">
                                        <div class="accordion-body">
                                            Rains or mists accompanied by cooler nights during flowering are congenial for the disease spread.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="powdery_mildew_Modal2" tabindex="-1" aria-labelledby="powdery_mildew_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/powdery_mildew/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="powdery_mildew_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="powdery_mildew_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#powdery_mildew_collapseOne" aria-expanded="true" aria-controls="powdery_mildew_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="powdery_mildew_collapseOne" class="accordion-collapse collapse show" aria-labelledby="powdery_mildew_headingOne" data-bs-parent="#powdery_mildew_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The characteristic symptom of the disease is the white superficial powdery fungal growth on leaves, stalks of panicles, flowers and young fruits.</li>
                                                <li>The affected flowers and fruits drop pre-maturely reducing the crop load considerably or might even prevent the fruit set.</li>
                                                <li>The fungus parasitizes young tissues of all parts of the inflorescence, leaves and fruits.</li>
                                                <li>Young leaves are attacked on both the sides but it is more conspicuous on the grower surface. Often these patches coalesce and occupy larger areas turning into purplish brown in colour</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="powdery_mildew_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#powdery_mildew_collapseTwo" aria-expanded="false" aria-controls="powdery_mildew_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="powdery_mildew_collapseTwo" class="accordion-collapse collapse" aria-labelledby="powdery_mildew_headingTwo" data-bs-parent="#powdery_mildew_accordion">
                                        <div class="accordion-body">
                                            <strong>The powdery mildew fungus overwinters in dormant buds.</strong> When conditions are favorable for growth of the fungus in spring, spores are produced, released, and cause new infections. Secondary spread of the disease can occur if spores are produced in these new infections
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="powdery_mildew_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#powdery_mildew_collapseThree" aria-expanded="false" aria-controls="powdery_mildew_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="powdery_mildew_collapseThree" class="accordion-collapse collapse" aria-labelledby="powdery_mildew_headingThree" data-bs-parent="#powdery_mildew_accordion">
                                        <div class="accordion-body">
                                            Rains or mists accompanied by cooler nights during flowering are congenial for the disease spread.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
                <div class="modal fade" id="powdery_mildew_Modal3" tabindex="-1" aria-labelledby="powdery_mildew_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/powdery_mildew/3.png') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="powdery_mildew_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="powdery_mildew_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#powdery_mildew_collapseOne" aria-expanded="true" aria-controls="powdery_mildew_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="powdery_mildew_collapseOne" class="accordion-collapse collapse show" aria-labelledby="powdery_mildew_headingOne" data-bs-parent="#powdery_mildew_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The characteristic symptom of the disease is the white superficial powdery fungal growth on leaves, stalks of panicles, flowers and young fruits.</li>
                                                <li>The affected flowers and fruits drop pre-maturely reducing the crop load considerably or might even prevent the fruit set.</li>
                                                <li>The fungus parasitizes young tissues of all parts of the inflorescence, leaves and fruits.</li>
                                                <li>Young leaves are attacked on both the sides but it is more conspicuous on the grower surface. Often these patches coalesce and occupy larger areas turning into purplish brown in colour</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="powdery_mildew_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#powdery_mildew_collapseTwo" aria-expanded="false" aria-controls="powdery_mildew_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="powdery_mildew_collapseTwo" class="accordion-collapse collapse" aria-labelledby="powdery_mildew_headingTwo" data-bs-parent="#powdery_mildew_accordion">
                                        <div class="accordion-body">
                                            <strong>The powdery mildew fungus overwinters in dormant buds.</strong> When conditions are favorable for growth of the fungus in spring, spores are produced, released, and cause new infections. Secondary spread of the disease can occur if spores are produced in these new infections
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="powdery_mildew_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#powdery_mildew_collapseThree" aria-expanded="false" aria-controls="powdery_mildew_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="powdery_mildew_collapseThree" class="accordion-collapse collapse" aria-labelledby="powdery_mildew_headingThree" data-bs-parent="#powdery_mildew_accordion">
                                        <div class="accordion-body">
                                            Rains or mists accompanied by cooler nights during flowering are congenial for the disease spread.
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->


        <br><br>
        <div class="center btmspace-50">
            <h3 class="heading">Anthracnose</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/anthracnose/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#anthracnose_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/anthracnose/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#anthracnose_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/anthracnose/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#anthracnose_Modal3">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="anthracnose_Modal" tabindex="-1" aria-labelledby="anthracnose_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/anthracnose/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="anthracnose_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="anthracnose_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#anthracnose_collapseOne" aria-expanded="true" aria-controls="anthracnose_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="anthracnose_collapseOne" class="accordion-collapse collapse show" aria-labelledby="anthracnose_headingOne" data-bs-parent="#anthracnose_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease causes serious losses to young shoots, flowers and fruits It is also affects fruits during storage.</li>
                                                <li>The disease produces leaf spot, blossom blight, wither tip, twig blight and fruit rot symptoms. Tender shoots and foliage are easily affected which ultimately cause „die back‟ of young branches. Older twigs may also be infected through wounds which in severe cases may be fatal.</li>
                                                <li>Depending on the prevailing weather conditions blossom blight may vary in severity from slight to a heavy infection of the panicles. Black spots develop on panicles as well as on fruits. Severe infection destroys the entire inflorescence resulting in no setting of fruits. Young infected fruits develop black spots, shrivel and drop off.</li>
                                                <li>Fruits infected at mature stage carry the fungus into storage and cause considerable loss during storage, transit and marketing.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="anthracnose_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#anthracnose_collapseTwo" aria-expanded="false" aria-controls="anthracnose_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="anthracnose_collapseTwo" class="accordion-collapse collapse" aria-labelledby="anthracnose_headingTwo" data-bs-parent="#anthracnose_accordion">
                                        <div class="accordion-body">
                                            Fungus survives in dead twig and other host for long time which is the source of primary infection.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="anthracnose_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#anthracnose_collapseThree" aria-expanded="false" aria-controls="anthracnose_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="anthracnose_collapseThree" class="accordion-collapse collapse" aria-labelledby="anthracnose_headingThree" data-bs-parent="#anthracnose_accordion">
                                        <div class="accordion-body">
                                            High humidity, frequent rains and a temperature of 24-32oC fabours the development of disease.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="anthracnose_Modal2" tabindex="-1" aria-labelledby="anthracnose_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/anthracnose/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="anthracnose_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="anthracnose_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#anthracnose_collapseOne" aria-expanded="true" aria-controls="anthracnose_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="anthracnose_collapseOne" class="accordion-collapse collapse show" aria-labelledby="anthracnose_headingOne" data-bs-parent="#anthracnose_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease causes serious losses to young shoots, flowers and fruits It is also affects fruits during storage.</li>
                                                <li>The disease produces leaf spot, blossom blight, wither tip, twig blight and fruit rot symptoms. Tender shoots and foliage are easily affected which ultimately cause „die back‟ of young branches. Older twigs may also be infected through wounds which in severe cases may be fatal.</li>
                                                <li>Depending on the prevailing weather conditions blossom blight may vary in severity from slight to a heavy infection of the panicles. Black spots develop on panicles as well as on fruits. Severe infection destroys the entire inflorescence resulting in no setting of fruits. Young infected fruits develop black spots, shrivel and drop off.</li>
                                                <li>Fruits infected at mature stage carry the fungus into storage and cause considerable loss during storage, transit and marketing.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="anthracnose_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#anthracnose_collapseTwo" aria-expanded="false" aria-controls="anthracnose_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="anthracnose_collapseTwo" class="accordion-collapse collapse" aria-labelledby="anthracnose_headingTwo" data-bs-parent="#anthracnose_accordion">
                                        <div class="accordion-body">
                                            Fungus survives in dead twig and other host for long time which is the source of primary infection.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="anthracnose_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#anthracnose_collapseThree" aria-expanded="false" aria-controls="anthracnose_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="anthracnose_collapseThree" class="accordion-collapse collapse" aria-labelledby="anthracnose_headingThree" data-bs-parent="#anthracnose_accordion">
                                        <div class="accordion-body">
                                            High humidity, frequent rains and a temperature of 24-32oC fabours the development of disease.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
                <div class="modal fade" id="anthracnose_Modal3" tabindex="-1" aria-labelledby="anthracnose_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/anthracnose/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="anthracnose_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="anthracnose_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#anthracnose_collapseOne" aria-expanded="true" aria-controls="anthracnose_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="anthracnose_collapseOne" class="accordion-collapse collapse show" aria-labelledby="anthracnose_headingOne" data-bs-parent="#anthracnose_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease causes serious losses to young shoots, flowers and fruits It is also affects fruits during storage.</li>
                                                <li>The disease produces leaf spot, blossom blight, wither tip, twig blight and fruit rot symptoms. Tender shoots and foliage are easily affected which ultimately cause „die back‟ of young branches. Older twigs may also be infected through wounds which in severe cases may be fatal.</li>
                                                <li>Depending on the prevailing weather conditions blossom blight may vary in severity from slight to a heavy infection of the panicles. Black spots develop on panicles as well as on fruits. Severe infection destroys the entire inflorescence resulting in no setting of fruits. Young infected fruits develop black spots, shrivel and drop off.</li>
                                                <li>Fruits infected at mature stage carry the fungus into storage and cause considerable loss during storage, transit and marketing.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="anthracnose_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#anthracnose_collapseTwo" aria-expanded="false" aria-controls="anthracnose_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="anthracnose_collapseTwo" class="accordion-collapse collapse" aria-labelledby="anthracnose_headingTwo" data-bs-parent="#anthracnose_accordion">
                                        <div class="accordion-body">
                                            Fungus survives in dead twig and other host for long time which is the source of primary infection.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="anthracnose_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#anthracnose_collapseThree" aria-expanded="false" aria-controls="anthracnose_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="anthracnose_collapseThree" class="accordion-collapse collapse" aria-labelledby="anthracnose_headingThree" data-bs-parent="#anthracnose_accordion">
                                        <div class="accordion-body">
                                            High humidity, frequent rains and a temperature of 24-32oC fabours the development of disease.
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->


        <br><br>
        <div class="center btmspace-50">
            <h3 class="heading">Die back</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/die_back/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#die_back_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/die_back/2.png') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#die_back_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/die_back/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#die_back_Modal3">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="die_back_Modal" tabindex="-1" aria-labelledby="die_back_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/die_back/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="die_back_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="die_back_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#die_back_collapseOne" aria-expanded="true" aria-controls="die_back_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="die_back_collapseOne" class="accordion-collapse collapse show" aria-labelledby="die_back_headingOne" data-bs-parent="#die_back_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The pathogen causing dieback, tip dieback, graft union blight, twig blight, seedling rot, wood stain, stem-end rot, black root rot, fruit rot, dry rot, brown rot of panicle etc. The disease is most conspicuous during October November.</li>
                                                <li>It is characterized by drying back of twigs from top downwards, particularly in older trees followed by drying of leaves which gives an appearance of fire scorch. Internal browning in wood tissue is observed when it is slit open along with the long axis.</li>
                                                <li>Cracks appear on branches and gum exudes before they die out. When graft union of nursery plant is affected, it usually dies.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="die_back_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#die_back_collapseTwo" aria-expanded="false" aria-controls="die_back_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="die_back_collapseTwo" class="accordion-collapse collapse" aria-labelledby="die_back_headingTwo" data-bs-parent="#die_back_accordion">
                                        <div class="accordion-body">
                                            Pathogens survive in plant debris which is the source of primary inoculums.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="die_back_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#die_back_collapseThree" aria-expanded="false" aria-controls="die_back_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="die_back_collapseThree" class="accordion-collapse collapse" aria-labelledby="die_back_headingThree" data-bs-parent="#die_back_accordion">
                                        <div class="accordion-body">
                                            High humidity and moist conditions favours the development of disease. The disease is most common in October-November.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="die_back_Modal2" tabindex="-1" aria-labelledby="die_back_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/die_back/2.png') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="die_back_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="die_back_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#die_back_collapseOne" aria-expanded="true" aria-controls="die_back_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="die_back_collapseOne" class="accordion-collapse collapse show" aria-labelledby="die_back_headingOne" data-bs-parent="#die_back_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The pathogen causing dieback, tip dieback, graft union blight, twig blight, seedling rot, wood stain, stem-end rot, black root rot, fruit rot, dry rot, brown rot of panicle etc. The disease is most conspicuous during October November.</li>
                                                <li>It is characterized by drying back of twigs from top downwards, particularly in older trees followed by drying of leaves which gives an appearance of fire scorch. Internal browning in wood tissue is observed when it is slit open along with the long axis.</li>
                                                <li>Cracks appear on branches and gum exudes before they die out. When graft union of nursery plant is affected, it usually dies.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="die_back_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#die_back_collapseTwo" aria-expanded="false" aria-controls="die_back_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="die_back_collapseTwo" class="accordion-collapse collapse" aria-labelledby="die_back_headingTwo" data-bs-parent="#die_back_accordion">
                                        <div class="accordion-body">
                                            Pathogens survive in plant debris which is the source of primary inoculums.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="die_back_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#die_back_collapseThree" aria-expanded="false" aria-controls="die_back_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="die_back_collapseThree" class="accordion-collapse collapse" aria-labelledby="die_back_headingThree" data-bs-parent="#die_back_accordion">
                                        <div class="accordion-body">
                                            High humidity and moist conditions favours the development of disease. The disease is most common in October-November.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
                <div class="modal fade" id="die_back_Modal3" tabindex="-1" aria-labelledby="die_back_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/die_back/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="die_back_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="die_back_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#die_back_collapseOne" aria-expanded="true" aria-controls="die_back_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="die_back_collapseOne" class="accordion-collapse collapse show" aria-labelledby="die_back_headingOne" data-bs-parent="#die_back_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The pathogen causing dieback, tip dieback, graft union blight, twig blight, seedling rot, wood stain, stem-end rot, black root rot, fruit rot, dry rot, brown rot of panicle etc. The disease is most conspicuous during October November.</li>
                                                <li>It is characterized by drying back of twigs from top downwards, particularly in older trees followed by drying of leaves which gives an appearance of fire scorch. Internal browning in wood tissue is observed when it is slit open along with the long axis.</li>
                                                <li>Cracks appear on branches and gum exudes before they die out. When graft union of nursery plant is affected, it usually dies.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="die_back_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#die_back_collapseTwo" aria-expanded="false" aria-controls="die_back_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="die_back_collapseTwo" class="accordion-collapse collapse" aria-labelledby="die_back_headingTwo" data-bs-parent="#die_back_accordion">
                                        <div class="accordion-body">
                                            Pathogens survive in plant debris which is the source of primary inoculums.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="die_back_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#die_back_collapseThree" aria-expanded="false" aria-controls="die_back_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="die_back_collapseThree" class="accordion-collapse collapse" aria-labelledby="die_back_headingThree" data-bs-parent="#die_back_accordion">
                                        <div class="accordion-body">
                                            High humidity and moist conditions favours the development of disease. The disease is most common in October-November.
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->


        <br><br>
        <div class="center btmspace-50">
            <h3 class="heading">Phoma blight</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/phoma_blight/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#phoma_blight_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/phoma_blight/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#phoma_blight_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/phoma_blight/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#phoma_blight_Modal3">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="phoma_blight_Modal" tabindex="-1" aria-labelledby="phoma_blight_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/phoma_blight/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="phoma_blight_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="phoma_blight_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#phoma_blight_collapseOne" aria-expanded="true" aria-controls="phoma_blight_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="phoma_blight_collapseOne" class="accordion-collapse collapse show" aria-labelledby="phoma_blight_headingOne" data-bs-parent="#phoma_blight_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The symptoms of the disease are noticeable only on old leaves. Initially, the lesions are angular, minute, irregular, yellow to light brown, scattered over leaf lamina.</li>
                                                <li>As the lesions enlarge their colour changes from brown to cinnamon and they become almost irregular.</li>
                                                <li>Fully developed spots are characterized by dark margins and dull grey necrotic centres. In case of severe infection such spots coalesce forming patches measuring 3.5-13 cm in size, resulting in complete withering and defoliation of infected leaves.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="phoma_blight_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#phoma_blight_collapseTwo" aria-expanded="false" aria-controls="phoma_blight_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="phoma_blight_collapseTwo" class="accordion-collapse collapse" aria-labelledby="phoma_blight_headingTwo" data-bs-parent="#phoma_blight_accordion">
                                        <div class="accordion-body">
                                            The pathogen is seed borne fungus and inoculums present in the seeds are source of primary infection. Fungus also survives on glumes, fruit and plant debris.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="phoma_blight_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#phoma_blight_collapseThree" aria-expanded="false" aria-controls="phoma_blight_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="phoma_blight_collapseThree" class="accordion-collapse collapse" aria-labelledby="phoma_blight_headingThree" data-bs-parent="#phoma_blight_accordion">
                                        <div class="accordion-body">
                                            Rainy seasons favour the development of disease.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="phoma_blight_Modal2" tabindex="-1" aria-labelledby="phoma_blight_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/phoma_blight/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="phoma_blight_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="phoma_blight_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#phoma_blight_collapseOne" aria-expanded="true" aria-controls="phoma_blight_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="phoma_blight_collapseOne" class="accordion-collapse collapse show" aria-labelledby="phoma_blight_headingOne" data-bs-parent="#phoma_blight_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The symptoms of the disease are noticeable only on old leaves. Initially, the lesions are angular, minute, irregular, yellow to light brown, scattered over leaf lamina.</li>
                                                <li>As the lesions enlarge their colour changes from brown to cinnamon and they become almost irregular.</li>
                                                <li>Fully developed spots are characterized by dark margins and dull grey necrotic centres. In case of severe infection such spots coalesce forming patches measuring 3.5-13 cm in size, resulting in complete withering and defoliation of infected leaves.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="phoma_blight_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#phoma_blight_collapseTwo" aria-expanded="false" aria-controls="phoma_blight_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="phoma_blight_collapseTwo" class="accordion-collapse collapse" aria-labelledby="phoma_blight_headingTwo" data-bs-parent="#phoma_blight_accordion">
                                        <div class="accordion-body">
                                            The pathogen is seed borne fungus and inoculums present in the seeds are source of primary infection. Fungus also survives on glumes, fruit and plant debris.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="phoma_blight_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#phoma_blight_collapseThree" aria-expanded="false" aria-controls="phoma_blight_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="phoma_blight_collapseThree" class="accordion-collapse collapse" aria-labelledby="phoma_blight_headingThree" data-bs-parent="#phoma_blight_accordion">
                                        <div class="accordion-body">
                                            Rainy seasons favour the development of disease.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
                <div class="modal fade" id="phoma_blight_Modal3" tabindex="-1" aria-labelledby="phoma_blight_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/phoma_blight/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="phoma_blight_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="phoma_blight_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#phoma_blight_collapseOne" aria-expanded="true" aria-controls="phoma_blight_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="phoma_blight_collapseOne" class="accordion-collapse collapse show" aria-labelledby="phoma_blight_headingOne" data-bs-parent="#phoma_blight_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The symptoms of the disease are noticeable only on old leaves. Initially, the lesions are angular, minute, irregular, yellow to light brown, scattered over leaf lamina.</li>
                                                <li>As the lesions enlarge their colour changes from brown to cinnamon and they become almost irregular.</li>
                                                <li>Fully developed spots are characterized by dark margins and dull grey necrotic centres. In case of severe infection such spots coalesce forming patches measuring 3.5-13 cm in size, resulting in complete withering and defoliation of infected leaves.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="phoma_blight_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#phoma_blight_collapseTwo" aria-expanded="false" aria-controls="phoma_blight_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="phoma_blight_collapseTwo" class="accordion-collapse collapse" aria-labelledby="phoma_blight_headingTwo" data-bs-parent="#phoma_blight_accordion">
                                        <div class="accordion-body">
                                            The pathogen is seed borne fungus and inoculums present in the seeds are source of primary infection. Fungus also survives on glumes, fruit and plant debris.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="phoma_blight_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#phoma_blight_collapseThree" aria-expanded="false" aria-controls="phoma_blight_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="phoma_blight_collapseThree" class="accordion-collapse collapse" aria-labelledby="phoma_blight_headingThree" data-bs-parent="#phoma_blight_accordion">
                                        <div class="accordion-body">
                                            Rainy seasons favour the development of disease.
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->


        <br><br>
        <div class="center btmspace-50">
            <h3 class="heading">Bacterial canker</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/bacterial_canker/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#bacterial_canker_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/bacterial_canker/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#bacterial_canker_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="bacterial_canker_Modal" tabindex="-1" aria-labelledby="bacterial_canker_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/bacterial_canker/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="bacterial_canker_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bacterial_canker_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bacterial_canker_collapseOne" aria-expanded="true" aria-controls="bacterial_canker_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="bacterial_canker_collapseOne" class="accordion-collapse collapse show" aria-labelledby="bacterial_canker_headingOne" data-bs-parent="#bacterial_canker_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is noticed on leaves, leaf stalks, stems, twigs, branches and fruits, initially producing water soaked lesions, later turning into typical canker.</li>
                                                <li>On leaves, water soaked irregular satellite to angular raised lesions measuring 1-4 mm in diameter are formed. These lesions are light yellow in colour, initially with yellow halo but with age enlarge or coalesce to form irregular necrotic cankerous patches with dark brown colour.</li>
                                                <li>On fruits, water-soaked, dark brown to black coloured lesions are observed which gradually developed into cankerous, raised or flat spots. These spots grow bigger usually up to 1 to 5 mm in diameter, which covers / almost the whole fruit.</li>
                                                <li>These spots often, burst extruding gummy substances containing highly contagious bacterial cells.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bacterial_canker_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bacterial_canker_collapseTwo" aria-expanded="false" aria-controls="bacterial_canker_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="bacterial_canker_collapseTwo" class="accordion-collapse collapse" aria-labelledby="bacterial_canker_headingTwo" data-bs-parent="#bacterial_canker_accordion">
                                        <div class="accordion-body">
                                            In lesions on plant parts and can also survive for long periods in diseased plant tissues.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bacterial_canker_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bacterial_canker_collapseThree" aria-expanded="false" aria-controls="bacterial_canker_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="bacterial_canker_collapseThree" class="accordion-collapse collapse" aria-labelledby="bacterial_canker_headingThree" data-bs-parent="#bacterial_canker_accordion">
                                        <div class="accordion-body">
                                            Spring session is responsible for the development of diseases.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="bacterial_canker_Modal2" tabindex="-1" aria-labelledby="bacterial_canker_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/bacterial_canker/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="bacterial_canker_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bacterial_canker_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bacterial_canker_collapseOne" aria-expanded="true" aria-controls="bacterial_canker_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="bacterial_canker_collapseOne" class="accordion-collapse collapse show" aria-labelledby="bacterial_canker_headingOne" data-bs-parent="#bacterial_canker_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is noticed on leaves, leaf stalks, stems, twigs, branches and fruits, initially producing water soaked lesions, later turning into typical canker.</li>
                                                <li>On leaves, water soaked irregular satellite to angular raised lesions measuring 1-4 mm in diameter are formed. These lesions are light yellow in colour, initially with yellow halo but with age enlarge or coalesce to form irregular necrotic cankerous patches with dark brown colour.</li>
                                                <li>On fruits, water-soaked, dark brown to black coloured lesions are observed which gradually developed into cankerous, raised or flat spots. These spots grow bigger usually up to 1 to 5 mm in diameter, which covers / almost the whole fruit.</li>
                                                <li>These spots often, burst extruding gummy substances containing highly contagious bacterial cells.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bacterial_canker_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bacterial_canker_collapseTwo" aria-expanded="false" aria-controls="bacterial_canker_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="bacterial_canker_collapseTwo" class="accordion-collapse collapse" aria-labelledby="bacterial_canker_headingTwo" data-bs-parent="#bacterial_canker_accordion">
                                        <div class="accordion-body">
                                            In lesions on plant parts and can also survive for long periods in diseased plant tissues.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bacterial_canker_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bacterial_canker_collapseThree" aria-expanded="false" aria-controls="bacterial_canker_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="bacterial_canker_collapseThree" class="accordion-collapse collapse" aria-labelledby="bacterial_canker_headingThree" data-bs-parent="#bacterial_canker_accordion">
                                        <div class="accordion-body">
                                            Spring session is responsible for the development of diseases.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->


        <br><br>
        <div class="center btmspace-50">
            <h3 class="heading">Red rust</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/red_rust/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#red_rust_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/red_rust/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#red_rust_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/red_rust/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#red_rust_Modal3">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="red_rust_Modal" tabindex="-1" aria-labelledby="red_rust_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/red_rust/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="red_rust_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="red_rust_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#red_rust_collapseOne" aria-expanded="true" aria-controls="red_rust_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="red_rust_collapseOne" class="accordion-collapse collapse show" aria-labelledby="red_rust_headingOne" data-bs-parent="#red_rust_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Red rust disease, caused by an alga, has been observed in mango growing areas. The algal attack causes reduction in photosynthetic activity and defoliation of leaves thereby lowering vitality of the host plant.</li>
                                                <li>The disease can easily be recognized by the rusty red spots mainly on leaves and sometimes on petioles and bark of young twigs and is epiphytic in nature.</li>
                                                <li>The spots are greenish grey in colour and velvety in texture. Later, they turn reddish brown. The circular and slightly elevated spots sometimes coalesce to form larger and irregular spots. The disease is more common in closely planted orchards.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="red_rust_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#red_rust_collapseTwo" aria-expanded="false" aria-controls="red_rust_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="red_rust_collapseTwo" class="accordion-collapse collapse" aria-labelledby="red_rust_headingTwo" data-bs-parent="#red_rust_accordion">
                                        <div class="accordion-body">
                                            The pathogens reproduce and survive in spots on leaves or stems and in fallen plant host debris.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="red_rust_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#red_rust_collapseThree" aria-expanded="false" aria-controls="red_rust_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="red_rust_collapseThree" class="accordion-collapse collapse" aria-labelledby="red_rust_headingThree" data-bs-parent="#red_rust_accordion">
                                        <div class="accordion-body">
                                            Frequent rains and warm weather are favorable conditions for these pathogens. For hosts, poor plant nutrition, poor soil drainage, and stagnant air are predisposing factors to infection by the algae
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="red_rust_Modal2" tabindex="-1" aria-labelledby="red_rust_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/red_rust/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="red_rust_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="red_rust_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#red_rust_collapseOne" aria-expanded="true" aria-controls="red_rust_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="red_rust_collapseOne" class="accordion-collapse collapse show" aria-labelledby="red_rust_headingOne" data-bs-parent="#red_rust_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Red rust disease, caused by an alga, has been observed in mango growing areas. The algal attack causes reduction in photosynthetic activity and defoliation of leaves thereby lowering vitality of the host plant.</li>
                                                <li>The disease can easily be recognized by the rusty red spots mainly on leaves and sometimes on petioles and bark of young twigs and is epiphytic in nature.</li>
                                                <li>The spots are greenish grey in colour and velvety in texture. Later, they turn reddish brown. The circular and slightly elevated spots sometimes coalesce to form larger and irregular spots. The disease is more common in closely planted orchards.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="red_rust_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#red_rust_collapseTwo" aria-expanded="false" aria-controls="red_rust_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="red_rust_collapseTwo" class="accordion-collapse collapse" aria-labelledby="red_rust_headingTwo" data-bs-parent="#red_rust_accordion">
                                        <div class="accordion-body">
                                            The pathogens reproduce and survive in spots on leaves or stems and in fallen plant host debris.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="red_rust_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#red_rust_collapseThree" aria-expanded="false" aria-controls="red_rust_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="red_rust_collapseThree" class="accordion-collapse collapse" aria-labelledby="red_rust_headingThree" data-bs-parent="#red_rust_accordion">
                                        <div class="accordion-body">
                                            Frequent rains and warm weather are favorable conditions for these pathogens. For hosts, poor plant nutrition, poor soil drainage, and stagnant air are predisposing factors to infection by the algae
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
                <div class="modal fade" id="red_rust_Modal3" tabindex="-1" aria-labelledby="red_rust_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/red_rust/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="red_rust_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="red_rust_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#red_rust_collapseOne" aria-expanded="true" aria-controls="red_rust_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="red_rust_collapseOne" class="accordion-collapse collapse show" aria-labelledby="red_rust_headingOne" data-bs-parent="#red_rust_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Red rust disease, caused by an alga, has been observed in mango growing areas. The algal attack causes reduction in photosynthetic activity and defoliation of leaves thereby lowering vitality of the host plant.</li>
                                                <li>The disease can easily be recognized by the rusty red spots mainly on leaves and sometimes on petioles and bark of young twigs and is epiphytic in nature.</li>
                                                <li>The spots are greenish grey in colour and velvety in texture. Later, they turn reddish brown. The circular and slightly elevated spots sometimes coalesce to form larger and irregular spots. The disease is more common in closely planted orchards.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="red_rust_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#red_rust_collapseTwo" aria-expanded="false" aria-controls="red_rust_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="red_rust_collapseTwo" class="accordion-collapse collapse" aria-labelledby="red_rust_headingTwo" data-bs-parent="#red_rust_accordion">
                                        <div class="accordion-body">
                                            The pathogens reproduce and survive in spots on leaves or stems and in fallen plant host debris.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="red_rust_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#red_rust_collapseThree" aria-expanded="false" aria-controls="red_rust_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="red_rust_collapseThree" class="accordion-collapse collapse" aria-labelledby="red_rust_headingThree" data-bs-parent="#red_rust_accordion">
                                        <div class="accordion-body">
                                            Frequent rains and warm weather are favorable conditions for these pathogens. For hosts, poor plant nutrition, poor soil drainage, and stagnant air are predisposing factors to infection by the algae
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->


        <br><br>
        <div class="center btmspace-50">
            <h3 class="heading">Sooty mould</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/sooty_mould/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#sooty_mould_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/sooty_mould/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#sooty_mould_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/sooty_mould/3.png') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#sooty_mould_Modal3">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="sooty_mould_Modal" tabindex="-1" aria-labelledby="sooty_mould_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/sooty_mould/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="sooty_mould_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sooty_mould_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sooty_mould_collapseOne" aria-expanded="true" aria-controls="sooty_mould_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="sooty_mould_collapseOne" class="accordion-collapse collapse show" aria-labelledby="sooty_mould_headingOne" data-bs-parent="#sooty_mould_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is common in the orchards where mealy bug, scale insect and hopper are not controlled efficiently.</li>
                                                <li>The disease in the field is recognized by the presence of a black velvety coating, i.e., sooty mould on the leaf surface. In severe cases the trees turn completely black due to the presence of mould over the entire surface of twigs and leaves.</li>
                                                <li>The severity of infection depends on the honey dew secretion by the above said insects. Honey dew secretions from insects sticks to the leaf surface and provide necessary medium for fungal growth.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sooty_mould_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sooty_mould_collapseTwo" aria-expanded="false" aria-controls="sooty_mould_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="sooty_mould_collapseTwo" class="accordion-collapse collapse" aria-labelledby="sooty_mould_headingTwo" data-bs-parent="#sooty_mould_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The severity of infection depends on the honey dew secretions by the scale insects which provide the necessary medium for the fungal growth.</li>
                                                <li>Transmission occurs by air-borne as co-spores.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sooty_mould_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sooty_mould_collapseThree" aria-expanded="false" aria-controls="sooty_mould_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="sooty_mould_collapseThree" class="accordion-collapse collapse" aria-labelledby="sooty_mould_headingThree" data-bs-parent="#sooty_mould_accordion">
                                        <div class="accordion-body">
                                            High humidity and moist situation favours the development of disease
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="sooty_mould_Modal2" tabindex="-1" aria-labelledby="sooty_mould_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/sooty_mould/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="sooty_mould_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sooty_mould_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sooty_mould_collapseOne" aria-expanded="true" aria-controls="sooty_mould_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="sooty_mould_collapseOne" class="accordion-collapse collapse show" aria-labelledby="sooty_mould_headingOne" data-bs-parent="#sooty_mould_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is common in the orchards where mealy bug, scale insect and hopper are not controlled efficiently.</li>
                                                <li>The disease in the field is recognized by the presence of a black velvety coating, i.e., sooty mould on the leaf surface. In severe cases the trees turn completely black due to the presence of mould over the entire surface of twigs and leaves.</li>
                                                <li>The severity of infection depends on the honey dew secretion by the above said insects. Honey dew secretions from insects sticks to the leaf surface and provide necessary medium for fungal growth.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sooty_mould_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sooty_mould_collapseTwo" aria-expanded="false" aria-controls="sooty_mould_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="sooty_mould_collapseTwo" class="accordion-collapse collapse" aria-labelledby="sooty_mould_headingTwo" data-bs-parent="#sooty_mould_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The severity of infection depends on the honey dew secretions by the scale insects which provide the necessary medium for the fungal growth.</li>
                                                <li>Transmission occurs by air-borne as co-spores.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sooty_mould_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sooty_mould_collapseThree" aria-expanded="false" aria-controls="sooty_mould_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="sooty_mould_collapseThree" class="accordion-collapse collapse" aria-labelledby="sooty_mould_headingThree" data-bs-parent="#sooty_mould_accordion">
                                        <div class="accordion-body">
                                            High humidity and moist situation favours the development of disease
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
                <div class="modal fade" id="sooty_mould_Modal3" tabindex="-1" aria-labelledby="sooty_mould_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/sooty_mould/3.png') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="sooty_mould_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sooty_mould_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sooty_mould_collapseOne" aria-expanded="true" aria-controls="sooty_mould_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="sooty_mould_collapseOne" class="accordion-collapse collapse show" aria-labelledby="sooty_mould_headingOne" data-bs-parent="#sooty_mould_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is common in the orchards where mealy bug, scale insect and hopper are not controlled efficiently.</li>
                                                <li>The disease in the field is recognized by the presence of a black velvety coating, i.e., sooty mould on the leaf surface. In severe cases the trees turn completely black due to the presence of mould over the entire surface of twigs and leaves.</li>
                                                <li>The severity of infection depends on the honey dew secretion by the above said insects. Honey dew secretions from insects sticks to the leaf surface and provide necessary medium for fungal growth.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sooty_mould_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sooty_mould_collapseTwo" aria-expanded="false" aria-controls="sooty_mould_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="sooty_mould_collapseTwo" class="accordion-collapse collapse" aria-labelledby="sooty_mould_headingTwo" data-bs-parent="#sooty_mould_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The severity of infection depends on the honey dew secretions by the scale insects which provide the necessary medium for the fungal growth.</li>
                                                <li>Transmission occurs by air-borne as co-spores.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="sooty_mould_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sooty_mould_collapseThree" aria-expanded="false" aria-controls="sooty_mould_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="sooty_mould_collapseThree" class="accordion-collapse collapse" aria-labelledby="sooty_mould_headingThree" data-bs-parent="#sooty_mould_accordion">
                                        <div class="accordion-body">
                                            High humidity and moist situation favours the development of disease
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->


        <br><br>
        <div class="center btmspace-50">
            <h3 class="heading">Gummosis</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/gummosis/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#gummosis_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/gummosis/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#gummosis_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/gummosis/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#gummosis_Modal3">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="gummosis_Modal" tabindex="-1" aria-labelledby="gummosis_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/gummosis/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="gummosis_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="gummosis_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#gummosis_collapseOne" aria-expanded="true" aria-controls="gummosis_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="gummosis_collapseOne" class="accordion-collapse collapse show" aria-labelledby="gummosis_headingOne" data-bs-parent="#gummosis_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is characterized by the presence of profuse oozing of gum on the surface of the affected wood, bark of the trunk and also on larger braches but more common on the cracked branches.</li>
                                                <li>In severe cases, droplets of gum trickle down on stem, bark turn dark brown with longitudinal cracks, rots completely and the tree dries up because of cracking, rotting and girdling effects</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="gummosis_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gummosis_collapseTwo" aria-expanded="false" aria-controls="gummosis_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="gummosis_collapseTwo" class="accordion-collapse collapse" aria-labelledby="gummosis_headingTwo" data-bs-parent="#gummosis_accordion">
                                        <div class="accordion-body">
                                            Pathogen survives in disease plant debris.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="gummosis_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gummosis_collapseThree" aria-expanded="false" aria-controls="gummosis_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="gummosis_collapseThree" class="accordion-collapse collapse" aria-labelledby="gummosis_headingThree" data-bs-parent="#gummosis_accordion">
                                        <div class="accordion-body">
                                            Warm weather favours the development of disease.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="gummosis_Modal2" tabindex="-1" aria-labelledby="gummosis_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/gummosis/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="gummosis_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="gummosis_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#gummosis_collapseOne" aria-expanded="true" aria-controls="gummosis_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="gummosis_collapseOne" class="accordion-collapse collapse show" aria-labelledby="gummosis_headingOne" data-bs-parent="#gummosis_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is characterized by the presence of profuse oozing of gum on the surface of the affected wood, bark of the trunk and also on larger braches but more common on the cracked branches.</li>
                                                <li>In severe cases, droplets of gum trickle down on stem, bark turn dark brown with longitudinal cracks, rots completely and the tree dries up because of cracking, rotting and girdling effects</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="gummosis_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gummosis_collapseTwo" aria-expanded="false" aria-controls="gummosis_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="gummosis_collapseTwo" class="accordion-collapse collapse" aria-labelledby="gummosis_headingTwo" data-bs-parent="#gummosis_accordion">
                                        <div class="accordion-body">
                                            Pathogen survives in disease plant debris.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="gummosis_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gummosis_collapseThree" aria-expanded="false" aria-controls="gummosis_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="gummosis_collapseThree" class="accordion-collapse collapse" aria-labelledby="gummosis_headingThree" data-bs-parent="#gummosis_accordion">
                                        <div class="accordion-body">
                                            Warm weather favours the development of disease.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
                <div class="modal fade" id="gummosis_Modal3" tabindex="-1" aria-labelledby="gummosis_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/gummosis/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="gummosis_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="gummosis_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#gummosis_collapseOne" aria-expanded="true" aria-controls="gummosis_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="gummosis_collapseOne" class="accordion-collapse collapse show" aria-labelledby="gummosis_headingOne" data-bs-parent="#gummosis_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is characterized by the presence of profuse oozing of gum on the surface of the affected wood, bark of the trunk and also on larger braches but more common on the cracked branches.</li>
                                                <li>In severe cases, droplets of gum trickle down on stem, bark turn dark brown with longitudinal cracks, rots completely and the tree dries up because of cracking, rotting and girdling effects</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="gummosis_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gummosis_collapseTwo" aria-expanded="false" aria-controls="gummosis_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="gummosis_collapseTwo" class="accordion-collapse collapse" aria-labelledby="gummosis_headingTwo" data-bs-parent="#gummosis_accordion">
                                        <div class="accordion-body">
                                            Pathogen survives in disease plant debris.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="gummosis_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gummosis_collapseThree" aria-expanded="false" aria-controls="gummosis_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="gummosis_collapseThree" class="accordion-collapse collapse" aria-labelledby="gummosis_headingThree" data-bs-parent="#gummosis_accordion">
                                        <div class="accordion-body">
                                            Warm weather favours the development of disease.
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->


        <br><br>
        <div class="center btmspace-50">
            <h3 class="heading">Root rot & Damping off</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/root_rot_dampingoff/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#root_rot_dampingoff_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/root_rot_dampingoff/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#root_rot_dampingoff_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/diseases/root_rot_dampingoff/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#root_rot_dampingoff_Modal3">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="root_rot_dampingoff_Modal" tabindex="-1" aria-labelledby="root_rot_dampingoff_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/root_rot_dampingoff/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="root_rot_dampingoff_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="root_rot_dampingoff_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#root_rot_dampingoff_collapseOne" aria-expanded="true" aria-controls="root_rot_dampingoff_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="root_rot_dampingoff_collapseOne" class="accordion-collapse collapse show" aria-labelledby="root_rot_dampingoff_headingOne" data-bs-parent="#root_rot_dampingoff_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is characterized by sudden dropping of leaves after the emergence of seedlings from the soil.</li>
                                                <li>During prolonged rainy and humid weather, infection occurs at / or below the ground level with circular to irregular water soaked patches.</li>
                                                <li>These patches enlarge and ultimately girdle the entire base of the seedlings.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="root_rot_dampingoff_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#root_rot_dampingoff_collapseTwo" aria-expanded="false" aria-controls="root_rot_dampingoff_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="root_rot_dampingoff_collapseTwo" class="accordion-collapse collapse" aria-labelledby="root_rot_dampingoff_headingTwo" data-bs-parent="#root_rot_dampingoff_accordion">
                                        <div class="accordion-body">
                                            Disease is soil borne and pathogen survives in soils of orchards. Primary infection occurs by soil and secondary by conidia through rain or wind.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="root_rot_dampingoff_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#root_rot_dampingoff_collapseThree" aria-expanded="false" aria-controls="root_rot_dampingoff_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="root_rot_dampingoff_collapseThree" class="accordion-collapse collapse" aria-labelledby="root_rot_dampingoff_headingThree" data-bs-parent="#root_rot_dampingoff_accordion">
                                        <div class="accordion-body">
                                            High humidity, high soil moisture, cloudiness and low temperatures below 24° C for few days are ideal for infection and development of disease
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 2 -->
                <div class="modal fade" id="root_rot_dampingoff_Modal2" tabindex="-1" aria-labelledby="root_rot_dampingoff_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/root_rot_dampingoff/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="root_rot_dampingoff_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="root_rot_dampingoff_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#root_rot_dampingoff_collapseOne" aria-expanded="true" aria-controls="root_rot_dampingoff_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="root_rot_dampingoff_collapseOne" class="accordion-collapse collapse show" aria-labelledby="root_rot_dampingoff_headingOne" data-bs-parent="#root_rot_dampingoff_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is characterized by sudden dropping of leaves after the emergence of seedlings from the soil.</li>
                                                <li>During prolonged rainy and humid weather, infection occurs at / or below the ground level with circular to irregular water soaked patches.</li>
                                                <li>These patches enlarge and ultimately girdle the entire base of the seedlings.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="root_rot_dampingoff_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#root_rot_dampingoff_collapseTwo" aria-expanded="false" aria-controls="root_rot_dampingoff_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="root_rot_dampingoff_collapseTwo" class="accordion-collapse collapse" aria-labelledby="root_rot_dampingoff_headingTwo" data-bs-parent="#root_rot_dampingoff_accordion">
                                        <div class="accordion-body">
                                            Disease is soil borne and pathogen survives in soils of orchards. Primary infection occurs by soil and secondary by conidia through rain or wind.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="root_rot_dampingoff_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#root_rot_dampingoff_collapseThree" aria-expanded="false" aria-controls="root_rot_dampingoff_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="root_rot_dampingoff_collapseThree" class="accordion-collapse collapse" aria-labelledby="root_rot_dampingoff_headingThree" data-bs-parent="#root_rot_dampingoff_accordion">
                                        <div class="accordion-body">
                                            High humidity, high soil moisture, cloudiness and low temperatures below 24° C for few days are ideal for infection and development of disease
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal 3 -->
                <div class="modal fade" id="root_rot_dampingoff_Modal3" tabindex="-1" aria-labelledby="root_rot_dampingoff_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/diseases/root_rot_dampingoff/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="root_rot_dampingoff_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="root_rot_dampingoff_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#root_rot_dampingoff_collapseOne" aria-expanded="true" aria-controls="root_rot_dampingoff_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="root_rot_dampingoff_collapseOne" class="accordion-collapse collapse show" aria-labelledby="root_rot_dampingoff_headingOne" data-bs-parent="#root_rot_dampingoff_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The disease is characterized by sudden dropping of leaves after the emergence of seedlings from the soil.</li>
                                                <li>During prolonged rainy and humid weather, infection occurs at / or below the ground level with circular to irregular water soaked patches.</li>
                                                <li>These patches enlarge and ultimately girdle the entire base of the seedlings.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="root_rot_dampingoff_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#root_rot_dampingoff_collapseTwo" aria-expanded="false" aria-controls="root_rot_dampingoff_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="root_rot_dampingoff_collapseTwo" class="accordion-collapse collapse" aria-labelledby="root_rot_dampingoff_headingTwo" data-bs-parent="#root_rot_dampingoff_accordion">
                                        <div class="accordion-body">
                                            Disease is soil borne and pathogen survives in soils of orchards. Primary infection occurs by soil and secondary by conidia through rain or wind.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="root_rot_dampingoff_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#root_rot_dampingoff_collapseThree" aria-expanded="false" aria-controls="root_rot_dampingoff_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="root_rot_dampingoff_collapseThree" class="accordion-collapse collapse" aria-labelledby="root_rot_dampingoff_headingThree" data-bs-parent="#root_rot_dampingoff_accordion">
                                        <div class="accordion-body">
                                            High humidity, high soil moisture, cloudiness and low temperatures below 24° C for few days are ideal for infection and development of disease
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="text-center py-3">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal"> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Modals -->
        </section>
        <!-- Modal gallery -->
    </main>
</div>
<x-footer/>