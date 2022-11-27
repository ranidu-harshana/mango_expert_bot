<x-header/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-top-nav/>
<div class="wrapper row3">
    <main class="hoc container clear"> 
        <div class="center btmspace-50">
            <h2 class="heading">Pests</h2>
            <hr>
        </div>
        <div class="center btmspace-50">
            <h3 class="heading">Mango hopper</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/mango_hopper/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#mango_hopper_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/mango_hopper/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#mango_hopper_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/mango_hopper/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#mango_hopper_Modal3">
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
                <div class="modal fade" id="mango_hopper_Modal" tabindex="-1" aria-labelledby="mango_hopper_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/mango_hopper/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="mango_hopper_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_hopper_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mango_hopper_collapseOne" aria-expanded="true" aria-controls="mango_hopper_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="mango_hopper_collapseOne" class="accordion-collapse collapse show" aria-labelledby="mango_hopper_headingOne" data-bs-parent="#mango_hopper_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Females lay more eggs and nymphs develop faster during the flowering and fruiting period. Eggs hatch in two to three days and nymphs develop between 12 to 20 days.</li>
                                                <li>Nymphs: The nymphs are greenish with black or brown markings, cannot fly and move rapidly on the plant.</li>
                                                <li>Adult: Adult mango leafhoppers are golden-brown or dark brown, wedge-shaped insects about 4-5 mm in length whichlook rather like a small cicada. When disturbed, the adults jump off the plant with a clicking sound, fly a short distance and then quickly resettle on the plant.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_hopper_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_hopper_collapseTwo" aria-expanded="false" aria-controls="mango_hopper_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="mango_hopper_collapseTwo" class="accordion-collapse collapse" aria-labelledby="mango_hopper_headingTwo" data-bs-parent="#mango_hopper_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The wedge shaped nymphs and adult insects puncture and suck sap of tender parts, reducing vigour of plants and particularly destroying the inflorescence and causing fruit drop.</li>
                                                <li>Heavy puncturing and continuous draining of sap causes curling and drying of infested tissue.</li>
                                                <li>They also damage the crop by excreting a sweet sticky substance facilitates the development of sooty mould</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_hopper_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_hopper_collapseThree" aria-expanded="false" aria-controls="mango_hopper_collapseThree">
                                            Natural enemies of mango hopper
                                        </button>
                                    </h2>
                                    <div id="mango_hopper_collapseThree" class="accordion-collapse collapse" aria-labelledby="mango_hopper_headingThree" data-bs-parent="#mango_hopper_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Parasitoids: Polynema spp., Gonatocerus sp, Tetrastichus sp</li>
                                                <li>Predators: Mallada boninensis, Plexippus paykullii</li>
                                            </ul>
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
                <div class="modal fade" id="mango_hopper_Modal2" tabindex="-1" aria-labelledby="mango_hopper_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/mango_hopper/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="mango_hopper_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_hopper_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mango_hopper_collapseOne" aria-expanded="true" aria-controls="mango_hopper_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="mango_hopper_collapseOne" class="accordion-collapse collapse show" aria-labelledby="mango_hopper_headingOne" data-bs-parent="#mango_hopper_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Females lay more eggs and nymphs develop faster during the flowering and fruiting period. Eggs hatch in two to three days and nymphs develop between 12 to 20 days.</li>
                                                <li>Nymphs: The nymphs are greenish with black or brown markings, cannot fly and move rapidly on the plant.</li>
                                                <li>Adult: Adult mango leafhoppers are golden-brown or dark brown, wedge-shaped insects about 4-5 mm in length whichlook rather like a small cicada. When disturbed, the adults jump off the plant with a clicking sound, fly a short distance and then quickly resettle on the plant.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_hopper_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_hopper_collapseTwo" aria-expanded="false" aria-controls="mango_hopper_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="mango_hopper_collapseTwo" class="accordion-collapse collapse" aria-labelledby="mango_hopper_headingTwo" data-bs-parent="#mango_hopper_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The wedge shaped nymphs and adult insects puncture and suck sap of tender parts, reducing vigour of plants and particularly destroying the inflorescence and causing fruit drop.</li>
                                                <li>Heavy puncturing and continuous draining of sap causes curling and drying of infested tissue.</li>
                                                <li>They also damage the crop by excreting a sweet sticky substance facilitates the development of sooty mould</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_hopper_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_hopper_collapseThree" aria-expanded="false" aria-controls="mango_hopper_collapseThree">
                                            Natural enemies of mango hopper
                                        </button>
                                    </h2>
                                    <div id="mango_hopper_collapseThree" class="accordion-collapse collapse" aria-labelledby="mango_hopper_headingThree" data-bs-parent="#mango_hopper_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Parasitoids: Polynema spp., Gonatocerus sp, Tetrastichus sp</li>
                                                <li>Predators: Mallada boninensis, Plexippus paykullii</li>
                                            </ul>
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
                <div class="modal fade" id="mango_hopper_Modal3" tabindex="-1" aria-labelledby="mango_hopper_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/mango_hopper/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="mango_hopper_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_hopper_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mango_hopper_collapseOne" aria-expanded="true" aria-controls="mango_hopper_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="mango_hopper_collapseOne" class="accordion-collapse collapse show" aria-labelledby="mango_hopper_headingOne" data-bs-parent="#mango_hopper_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Females lay more eggs and nymphs develop faster during the flowering and fruiting period. Eggs hatch in two to three days and nymphs develop between 12 to 20 days.</li>
                                                <li>Nymphs: The nymphs are greenish with black or brown markings, cannot fly and move rapidly on the plant.</li>
                                                <li>Adult: Adult mango leafhoppers are golden-brown or dark brown, wedge-shaped insects about 4-5 mm in length whichlook rather like a small cicada. When disturbed, the adults jump off the plant with a clicking sound, fly a short distance and then quickly resettle on the plant.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_hopper_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_hopper_collapseTwo" aria-expanded="false" aria-controls="mango_hopper_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="mango_hopper_collapseTwo" class="accordion-collapse collapse" aria-labelledby="mango_hopper_headingTwo" data-bs-parent="#mango_hopper_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The wedge shaped nymphs and adult insects puncture and suck sap of tender parts, reducing vigour of plants and particularly destroying the inflorescence and causing fruit drop.</li>
                                                <li>Heavy puncturing and continuous draining of sap causes curling and drying of infested tissue.</li>
                                                <li>They also damage the crop by excreting a sweet sticky substance facilitates the development of sooty mould</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_hopper_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_hopper_collapseThree" aria-expanded="false" aria-controls="mango_hopper_collapseThree">
                                            Natural enemies of mango hopper
                                        </button>
                                    </h2>
                                    <div id="mango_hopper_collapseThree" class="accordion-collapse collapse" aria-labelledby="mango_hopper_headingThree" data-bs-parent="#mango_hopper_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Parasitoids: Polynema spp., Gonatocerus sp, Tetrastichus sp</li>
                                                <li>Predators: Mallada boninensis, Plexippus paykullii</li>
                                            </ul>
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
            <h3 class="heading">Mango mealy bug</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/mango_mealy_bug/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#mango_mealy_bug_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/mango_mealy_bug/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#mango_mealy_bug_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/mango_mealy_bug/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#mango_mealy_bug_Modal3">
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
                <div class="modal fade" id="mango_mealy_bug_Modal" tabindex="-1" aria-labelledby="mango_mealy_bug_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/mango_mealy_bug/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="mango_mealy_bug_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_mealy_bug_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mango_mealy_bug_collapseOne" aria-expanded="true" aria-controls="mango_mealy_bug_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="mango_mealy_bug_collapseOne" class="accordion-collapse collapse show" aria-labelledby="mango_mealy_bug_headingOne" data-bs-parent="#mango_mealy_bug_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Eggs: Females lay their eggs directly on the host in a fluted ovisac that is attached to the body of the adult female. Inseminated eggs produce hermaphrodites and un inseminated eggs produce males.</li>
                                                <li>Nymphs: The first instar nymphs are also called as crawlers, which are mobile.They settle on the plants, start sucking the sap and form the colonies.</li>
                                                <li>Adults: In general they have 4 female instars and 5 male instars, but unlike most other scale insects, the prepupa is quite mobile and although it may have wing buds, the legs and antennae are well developed. Females actually are hermaphrodites that frequently inseminate themselves. Adult males mate with females, but it is not clear if their sperm are used for reproduction.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_mealy_bug_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_mealy_bug_collapseTwo" aria-expanded="false" aria-controls="mango_mealy_bug_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="mango_mealy_bug_collapseTwo" class="accordion-collapse collapse" aria-labelledby="mango_mealy_bug_headingTwo" data-bs-parent="#mango_mealy_bug_accordion">
                                        <div class="accordion-body">
                                            <li>The adult bugs are covered with whitish powder and colonize between bark of tree trunk, young shoots and panicles</li>
                                            <li>The nymphs‟ ascent the trees and settle on inflorescence causing flower drop, affecting fruit set.</li>
                                            <li>They also excrete honey dew, a sticky substance, which facilitates development of sooty mould</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_mealy_bug_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_mealy_bug_collapseThree" aria-expanded="false" aria-controls="mango_mealy_bug_collapseThree">
                                            Natural enemies of mealybug
                                        </button>
                                    </h2>
                                    <div id="mango_mealy_bug_collapseThree" class="accordion-collapse collapse" aria-labelledby="mango_mealy_bug_headingThree" data-bs-parent="#mango_mealy_bug_accordion">
                                        <div class="accordion-body">
                                            Predators: Menochilus sexmaculatus, Rodolia fumida, Cryptolaemus montrozieri.
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
                <div class="modal fade" id="mango_mealy_bug_Modal2" tabindex="-1" aria-labelledby="mango_mealy_bug_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/mango_mealy_bug/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="mango_mealy_bug_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_mealy_bug_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mango_mealy_bug_collapseOne" aria-expanded="true" aria-controls="mango_mealy_bug_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="mango_mealy_bug_collapseOne" class="accordion-collapse collapse show" aria-labelledby="mango_mealy_bug_headingOne" data-bs-parent="#mango_mealy_bug_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Eggs: Females lay their eggs directly on the host in a fluted ovisac that is attached to the body of the adult female. Inseminated eggs produce hermaphrodites and un inseminated eggs produce males.</li>
                                                <li>Nymphs: The first instar nymphs are also called as crawlers, which are mobile.They settle on the plants, start sucking the sap and form the colonies.</li>
                                                <li>Adults: In general they have 4 female instars and 5 male instars, but unlike most other scale insects, the prepupa is quite mobile and although it may have wing buds, the legs and antennae are well developed. Females actually are hermaphrodites that frequently inseminate themselves. Adult males mate with females, but it is not clear if their sperm are used for reproduction.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_mealy_bug_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_mealy_bug_collapseTwo" aria-expanded="false" aria-controls="mango_mealy_bug_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="mango_mealy_bug_collapseTwo" class="accordion-collapse collapse" aria-labelledby="mango_mealy_bug_headingTwo" data-bs-parent="#mango_mealy_bug_accordion">
                                        <div class="accordion-body">
                                            <li>The adult bugs are covered with whitish powder and colonize between bark of tree trunk, young shoots and panicles</li>
                                            <li>The nymphs‟ ascent the trees and settle on inflorescence causing flower drop, affecting fruit set.</li>
                                            <li>They also excrete honey dew, a sticky substance, which facilitates development of sooty mould</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_mealy_bug_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_mealy_bug_collapseThree" aria-expanded="false" aria-controls="mango_mealy_bug_collapseThree">
                                            Natural enemies of mealybug
                                        </button>
                                    </h2>
                                    <div id="mango_mealy_bug_collapseThree" class="accordion-collapse collapse" aria-labelledby="mango_mealy_bug_headingThree" data-bs-parent="#mango_mealy_bug_accordion">
                                        <div class="accordion-body">
                                            Predators: Menochilus sexmaculatus, Rodolia fumida, Cryptolaemus montrozieri.
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
                <div class="modal fade" id="mango_mealy_bug_Modal3" tabindex="-1" aria-labelledby="mango_mealy_bug_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/mango_mealy_bug/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="mango_mealy_bug_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_mealy_bug_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mango_mealy_bug_collapseOne" aria-expanded="true" aria-controls="mango_mealy_bug_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="mango_mealy_bug_collapseOne" class="accordion-collapse collapse show" aria-labelledby="mango_mealy_bug_headingOne" data-bs-parent="#mango_mealy_bug_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Eggs: Females lay their eggs directly on the host in a fluted ovisac that is attached to the body of the adult female. Inseminated eggs produce hermaphrodites and un inseminated eggs produce males.</li>
                                                <li>Nymphs: The first instar nymphs are also called as crawlers, which are mobile.They settle on the plants, start sucking the sap and form the colonies.</li>
                                                <li>Adults: In general they have 4 female instars and 5 male instars, but unlike most other scale insects, the prepupa is quite mobile and although it may have wing buds, the legs and antennae are well developed. Females actually are hermaphrodites that frequently inseminate themselves. Adult males mate with females, but it is not clear if their sperm are used for reproduction.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_mealy_bug_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_mealy_bug_collapseTwo" aria-expanded="false" aria-controls="mango_mealy_bug_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="mango_mealy_bug_collapseTwo" class="accordion-collapse collapse" aria-labelledby="mango_mealy_bug_headingTwo" data-bs-parent="#mango_mealy_bug_accordion">
                                        <div class="accordion-body">
                                            <li>The adult bugs are covered with whitish powder and colonize between bark of tree trunk, young shoots and panicles</li>
                                            <li>The nymphs‟ ascent the trees and settle on inflorescence causing flower drop, affecting fruit set.</li>
                                            <li>They also excrete honey dew, a sticky substance, which facilitates development of sooty mould</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_mealy_bug_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_mealy_bug_collapseThree" aria-expanded="false" aria-controls="mango_mealy_bug_collapseThree">
                                            Natural enemies of mealybug
                                        </button>
                                    </h2>
                                    <div id="mango_mealy_bug_collapseThree" class="accordion-collapse collapse" aria-labelledby="mango_mealy_bug_headingThree" data-bs-parent="#mango_mealy_bug_accordion">
                                        <div class="accordion-body">
                                            Predators: Menochilus sexmaculatus, Rodolia fumida, Cryptolaemus montrozieri.
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
            <h3 class="heading">Fruit fly</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/fruit_fly/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#fruit_fly_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/fruit_fly/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#fruit_fly_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/fruit_fly/3.png') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#fruit_fly_Modal3">
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
                <div class="modal fade" id="fruit_fly_Modal" tabindex="-1" aria-labelledby="fruit_fly_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/fruit_fly/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="fruit_fly_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="fruit_fly_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fruit_fly_collapseOne" aria-expanded="true" aria-controls="fruit_fly_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="fruit_fly_collapseOne" class="accordion-collapse collapse show" aria-labelledby="fruit_fly_headingOne" data-bs-parent="#fruit_fly_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Female flies insert eggs under the skin of fruit in clusters of 10 to 50 about 1/25 to 1/8 inch below the fruit surface. The eggs measure about 1/25 by 1/250 inch and are white, elongate, and elliptical. They hatch in 1-1/2 days.</li>
                                                <li>Maggot: The white maggot is legless, and resembles an elongated cone. The mouth is at the pointed end of the body. There are 3 larval stages, or instars. The third instar is about 2/5 inch long. The entire maggot stage lasts for 11-15 days.</li>
                                                <li>Pupae: When mature, maggot drop to the ground and pupate in the soil. The puparium is yellowish-brown and seed-like. Adults emerge in about 10 days.</li>
                                                <li>Adults: Generally, the abdomen has two horizontal black stripes and a longitudinal median stripe extending from the base of the third segment to the apex of the abdomen. These markings may form a "T" shaped pattern, but the pattern varies considerably.Females begin to lay eggs about 8 days after emergence from the puparium. Under optimum conditions, a female can lay more than 3,000 eggs during her lifetime, but under field conditions approximately 1,200 to 1,500 eggs per female is considered to be the usual production. Ripe fruit are preferred for egg laying, but immature ones may be also attacked.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="fruit_fly_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fruit_fly_collapseTwo" aria-expanded="false" aria-controls="fruit_fly_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="fruit_fly_collapseTwo" class="accordion-collapse collapse" aria-labelledby="fruit_fly_headingTwo" data-bs-parent="#fruit_fly_accordion">
                                        <div class="accordion-body">
                                            <li>The female punctures outer wall of mature fruits with the help of its pointed ovipositor and insert eggs in small clusters inside mesocarp of mature fruits.</li>
                                            <li>On hatching, the maggots feed on fruit pulp and the infested fruits start rotting due to further secondary infection</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="fruit_fly_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fruit_fly_collapseThree" aria-expanded="false" aria-controls="fruit_fly_collapseThree">
                                            Natural enemies of fruit fly
                                        </button>
                                    </h2>
                                    <div id="fruit_fly_collapseThree" class="accordion-collapse collapse" aria-labelledby="fruit_fly_headingThree" data-bs-parent="#fruit_fly_accordion">
                                        <div class="accordion-body">
                                            Parasitoids: Fopius arisanus, Diachasmi morphakraussi
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
                <div class="modal fade" id="fruit_fly_Modal2" tabindex="-1" aria-labelledby="fruit_fly_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/fruit_fly/2.png') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="fruit_fly_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="fruit_fly_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fruit_fly_collapseOne" aria-expanded="true" aria-controls="fruit_fly_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="fruit_fly_collapseOne" class="accordion-collapse collapse show" aria-labelledby="fruit_fly_headingOne" data-bs-parent="#fruit_fly_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Female flies insert eggs under the skin of fruit in clusters of 10 to 50 about 1/25 to 1/8 inch below the fruit surface. The eggs measure about 1/25 by 1/250 inch and are white, elongate, and elliptical. They hatch in 1-1/2 days.</li>
                                                <li>Maggot: The white maggot is legless, and resembles an elongated cone. The mouth is at the pointed end of the body. There are 3 larval stages, or instars. The third instar is about 2/5 inch long. The entire maggot stage lasts for 11-15 days.</li>
                                                <li>Pupae: When mature, maggot drop to the ground and pupate in the soil. The puparium is yellowish-brown and seed-like. Adults emerge in about 10 days.</li>
                                                <li>Adults: Generally, the abdomen has two horizontal black stripes and a longitudinal median stripe extending from the base of the third segment to the apex of the abdomen. These markings may form a "T" shaped pattern, but the pattern varies considerably.Females begin to lay eggs about 8 days after emergence from the puparium. Under optimum conditions, a female can lay more than 3,000 eggs during her lifetime, but under field conditions approximately 1,200 to 1,500 eggs per female is considered to be the usual production. Ripe fruit are preferred for egg laying, but immature ones may be also attacked.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="fruit_fly_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fruit_fly_collapseTwo" aria-expanded="false" aria-controls="fruit_fly_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="fruit_fly_collapseTwo" class="accordion-collapse collapse" aria-labelledby="fruit_fly_headingTwo" data-bs-parent="#fruit_fly_accordion">
                                        <div class="accordion-body">
                                            <li>The female punctures outer wall of mature fruits with the help of its pointed ovipositor and insert eggs in small clusters inside mesocarp of mature fruits.</li>
                                            <li>On hatching, the maggots feed on fruit pulp and the infested fruits start rotting due to further secondary infection</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="fruit_fly_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fruit_fly_collapseThree" aria-expanded="false" aria-controls="fruit_fly_collapseThree">
                                            Natural enemies of fruit fly
                                        </button>
                                    </h2>
                                    <div id="fruit_fly_collapseThree" class="accordion-collapse collapse" aria-labelledby="fruit_fly_headingThree" data-bs-parent="#fruit_fly_accordion">
                                        <div class="accordion-body">
                                            Parasitoids: Fopius arisanus, Diachasmi morphakraussi
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
                <div class="modal fade" id="fruit_fly_Modal3" tabindex="-1" aria-labelledby="fruit_fly_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/fruit_fly/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="fruit_fly_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="fruit_fly_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#fruit_fly_collapseOne" aria-expanded="true" aria-controls="fruit_fly_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="fruit_fly_collapseOne" class="accordion-collapse collapse show" aria-labelledby="fruit_fly_headingOne" data-bs-parent="#fruit_fly_accordion">
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
                                    <h2 class="accordion-header" id="fruit_fly_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fruit_fly_collapseTwo" aria-expanded="false" aria-controls="fruit_fly_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="fruit_fly_collapseTwo" class="accordion-collapse collapse" aria-labelledby="fruit_fly_headingTwo" data-bs-parent="#fruit_fly_accordion">
                                        <div class="accordion-body">
                                            Pathogens survive in plant debris which is the source of primary inoculums.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="fruit_fly_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#fruit_fly_collapseThree" aria-expanded="false" aria-controls="fruit_fly_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="fruit_fly_collapseThree" class="accordion-collapse collapse" aria-labelledby="fruit_fly_headingThree" data-bs-parent="#fruit_fly_accordion">
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
            <h3 class="heading">Inflorescence midge</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/inflorescence_midge/1.png') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#inflorescence_midge_Modal">
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
                <div class="modal fade" id="inflorescence_midge_Modal" tabindex="-1" aria-labelledby="inflorescence_midge_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/inflorescence_midge/1.png') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="inflorescence_midge_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="inflorescence_midge_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#inflorescence_midge_collapseOne" aria-expanded="true" aria-controls="inflorescence_midge_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="inflorescence_midge_collapseOne" class="accordion-collapse collapse show" aria-labelledby="inflorescence_midge_headingOne" data-bs-parent="#inflorescence_midge_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Eggs: Eggs are single on floral parts like tender inflorescence axis newly set fruit or tender leaves encircling the inflorescence. The eggs hatch within 2-3 days.</li>
                                                <li>Maggot: The minute maggots penetrate the tender parts where the eggs have been laid and start feeding on them. The mature larvae drop down into the soil for pupation. The larval period varies from 7-10 days, while pupal period varies from 5-7 days</li>
                                                <li>Pupae: Pupae are yellowish-brown and 1-2 mm long, with male pupae generally smaller than females.</li>
                                                <li>Adults: Adults are small midges with a wing length of 1.0-1.5 mm. Eye facets are circular, but further apart laterally than in other genera and the tarsal claws are toothed, which is unusual in Cecidomyiini. The ovipositor is protrusible but relatively short and the terminal cerci are fused to form a single lobe. The male gonocoxites are elongate and, unlike those of other Cecidomyiini, have a short mesobasal lobe</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="inflorescence_midge_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inflorescence_midge_collapseTwo" aria-expanded="false" aria-controls="inflorescence_midge_collapseTwo">
                                            Damage symptom
                                        </button>
                                    </h2>
                                    <div id="inflorescence_midge_collapseTwo" class="accordion-collapse collapse" aria-labelledby="inflorescence_midge_headingTwo" data-bs-parent="#inflorescence_midge_accordion">
                                        <div class="accordion-body">
                                            <li>The larvae tunnel the axis of inflorescence and destroy it completely.</li>
                                            <li>Damage by E. indicacauses bending and drying of the inflorescences.</li>
                                            <li>Second attacks starts at fruit setting as young maggots bore into these tender fruitswhich slowly turn yellow and finally drop.</li>
                                            <li>Third attack is on tender „new leaves encircling inflorescence.</li>
                                            <li>The most damaging one is first attack in which the entire inflorescence is destroyed.</li>
                                            <li>The inflorescence shows stunted growth and its axis bends, at the entrance point of larva</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="inflorescence_midge_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inflorescence_midge_collapseThree" aria-expanded="false" aria-controls="inflorescence_midge_collapseThree">
                                            Natural enemies of Inflorescence midge
                                        </button>
                                    </h2>
                                    <div id="inflorescence_midge_collapseThree" class="accordion-collapse collapse" aria-labelledby="inflorescence_midge_headingThree" data-bs-parent="#inflorescence_midge_accordion">
                                        <div class="accordion-body">
                                            Parasitoids: Tetrastichus sp., Platygaster sp., Systasis dasyneurae, Aprostocetus spp.
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
            <h3 class="heading">Bark eating caterpillar</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/bark_eating_caterpillar/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#bark_eating_caterpillar_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/bark_eating_caterpillar/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#bark_eating_caterpillar_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/bark_eating_caterpillar/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#bark_eating_caterpillar_Modal2">
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
                <div class="modal fade" id="bark_eating_caterpillar_Modal" tabindex="-1" aria-labelledby="bark_eating_caterpillar_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/bark_eating_caterpillar/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="bark_eating_caterpillar_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bark_eating_caterpillar_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bark_eating_caterpillar_collapseOne" aria-expanded="true" aria-controls="bark_eating_caterpillar_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="bark_eating_caterpillar_collapseOne" class="accordion-collapse collapse show" aria-labelledby="bark_eating_caterpillar_headingOne" data-bs-parent="#bark_eating_caterpillar_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Adults female emerge in summer and lays 15-25 eggs in clusters under loose bark of the trees spherical eggs, usually singly, eggs hatch in 8-10 days.</li>
                                                <li>Larvae: The larval stage is for 10 months. Pupation takes place inside the bore hole. The full grown caterpillar is dirty brown in colour and is about 35-45 mm in length.Larvae makes webs and feeds making zigzag galleries on the wood filled with frass and excreta and later bores inside the wood.</li>
                                                <li>Pupae: About 10 mm long, it feeds at first in the meristem and later penetrates deep. Pupation takes place inside the bore hole. Pupal stage is 3-4 months</li>
                                                <li>Adults:</li>
                                                <li>Male: Head and thorax are rufous. Forewing is pale-rufous with numerous dark-rufous bands of strigae; there is a spot at the end of the cell. The abdomen and hindwings are fuscous.</li>
                                                <li>Female: Head, thorax and abdomen are ochreous-white. Forewings are ochreous-white with markings as in the male. Hindwings are pale, slightly suffused with fuscous, with numerous obsolescent brown striga.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bark_eating_caterpillar_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bark_eating_caterpillar_collapseTwo" aria-expanded="false" aria-controls="bark_eating_caterpillar_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="bark_eating_caterpillar_collapseTwo" class="accordion-collapse collapse" aria-labelledby="bark_eating_caterpillar_headingTwo" data-bs-parent="#bark_eating_caterpillar_accordion">
                                        <div class="accordion-body">
                                            <li>Caterpillars bore into the trunk or junction of branches</li>
                                            <li>Caterpillars remain hidden in the tunnel during day time and come out at night, feed on the bark.</li>
                                            <li>Larvae construct galleries and move in it.</li>
                                            <li>Affected plant show dried galleries on the stem and shoots.</li>
                                            <li>Webbing consists of wooden frass and faecal pellets of larvae hanging outside the tunnel.</li>
                                            <li>Heavy infestations retard the growth of tree and affect the fruits yield.</li>
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
                <div class="modal fade" id="bark_eating_caterpillar_Modal2" tabindex="-1" aria-labelledby="bark_eating_caterpillar_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/bark_eating_caterpillar/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="bark_eating_caterpillar_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bark_eating_caterpillar_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bark_eating_caterpillar_collapseOne" aria-expanded="true" aria-controls="bark_eating_caterpillar_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="bark_eating_caterpillar_collapseOne" class="accordion-collapse collapse show" aria-labelledby="bark_eating_caterpillar_headingOne" data-bs-parent="#bark_eating_caterpillar_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Adults female emerge in summer and lays 15-25 eggs in clusters under loose bark of the trees spherical eggs, usually singly, eggs hatch in 8-10 days.</li>
                                                <li>Larvae: The larval stage is for 10 months. Pupation takes place inside the bore hole. The full grown caterpillar is dirty brown in colour and is about 35-45 mm in length.Larvae makes webs and feeds making zigzag galleries on the wood filled with frass and excreta and later bores inside the wood.</li>
                                                <li>Pupae: About 10 mm long, it feeds at first in the meristem and later penetrates deep. Pupation takes place inside the bore hole. Pupal stage is 3-4 months</li>
                                                <li>Adults:</li>
                                                <li>Male: Head and thorax are rufous. Forewing is pale-rufous with numerous dark-rufous bands of strigae; there is a spot at the end of the cell. The abdomen and hindwings are fuscous.</li>
                                                <li>Female: Head, thorax and abdomen are ochreous-white. Forewings are ochreous-white with markings as in the male. Hindwings are pale, slightly suffused with fuscous, with numerous obsolescent brown striga.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bark_eating_caterpillar_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bark_eating_caterpillar_collapseTwo" aria-expanded="false" aria-controls="bark_eating_caterpillar_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="bark_eating_caterpillar_collapseTwo" class="accordion-collapse collapse" aria-labelledby="bark_eating_caterpillar_headingTwo" data-bs-parent="#bark_eating_caterpillar_accordion">
                                        <div class="accordion-body">
                                            <li>Caterpillars bore into the trunk or junction of branches</li>
                                            <li>Caterpillars remain hidden in the tunnel during day time and come out at night, feed on the bark.</li>
                                            <li>Larvae construct galleries and move in it.</li>
                                            <li>Affected plant show dried galleries on the stem and shoots.</li>
                                            <li>Webbing consists of wooden frass and faecal pellets of larvae hanging outside the tunnel.</li>
                                            <li>Heavy infestations retard the growth of tree and affect the fruits yield.</li>
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
                <div class="modal fade" id="bark_eating_caterpillar_Modal3" tabindex="-1" aria-labelledby="bark_eating_caterpillar_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/bark_eating_caterpillar/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="bark_eating_caterpillar_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bark_eating_caterpillar_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#bark_eating_caterpillar_collapseOne" aria-expanded="true" aria-controls="bark_eating_caterpillar_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="bark_eating_caterpillar_collapseOne" class="accordion-collapse collapse show" aria-labelledby="bark_eating_caterpillar_headingOne" data-bs-parent="#bark_eating_caterpillar_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Adults female emerge in summer and lays 15-25 eggs in clusters under loose bark of the trees spherical eggs, usually singly, eggs hatch in 8-10 days.</li>
                                                <li>Larvae: The larval stage is for 10 months. Pupation takes place inside the bore hole. The full grown caterpillar is dirty brown in colour and is about 35-45 mm in length.Larvae makes webs and feeds making zigzag galleries on the wood filled with frass and excreta and later bores inside the wood.</li>
                                                <li>Pupae: About 10 mm long, it feeds at first in the meristem and later penetrates deep. Pupation takes place inside the bore hole. Pupal stage is 3-4 months</li>
                                                <li>Adults:</li>
                                                <li>Male: Head and thorax are rufous. Forewing is pale-rufous with numerous dark-rufous bands of strigae; there is a spot at the end of the cell. The abdomen and hindwings are fuscous.</li>
                                                <li>Female: Head, thorax and abdomen are ochreous-white. Forewings are ochreous-white with markings as in the male. Hindwings are pale, slightly suffused with fuscous, with numerous obsolescent brown striga.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="bark_eating_caterpillar_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bark_eating_caterpillar_collapseTwo" aria-expanded="false" aria-controls="bark_eating_caterpillar_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="bark_eating_caterpillar_collapseTwo" class="accordion-collapse collapse" aria-labelledby="bark_eating_caterpillar_headingTwo" data-bs-parent="#bark_eating_caterpillar_accordion">
                                        <div class="accordion-body">
                                            <li>Caterpillars bore into the trunk or junction of branches</li>
                                            <li>Caterpillars remain hidden in the tunnel during day time and come out at night, feed on the bark.</li>
                                            <li>Larvae construct galleries and move in it.</li>
                                            <li>Affected plant show dried galleries on the stem and shoots.</li>
                                            <li>Webbing consists of wooden frass and faecal pellets of larvae hanging outside the tunnel.</li>
                                            <li>Heavy infestations retard the growth of tree and affect the fruits yield.</li>
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
            <h3 class="heading">Mango nut weevil</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/mango_nut_weevil/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#mango_nut_weevil_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/mango_nut_weevil/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#mango_nut_weevil_Modal2">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/mango_nut_weevil/3.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#mango_nut_weevil_Modal3">
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
                <div class="modal fade" id="mango_nut_weevil_Modal" tabindex="-1" aria-labelledby="mango_nut_weevil_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/mango_nut_weevil/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="mango_nut_weevil_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_nut_weevil_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mango_nut_weevil_collapseOne" aria-expanded="true" aria-controls="mango_nut_weevil_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="mango_nut_weevil_collapseOne" class="accordion-collapse collapse show" aria-labelledby="mango_nut_weevil_headingOne" data-bs-parent="#mango_nut_weevil_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Eggs are elliptical, about 0.8 mm long and 0.3 mm wide and are creamy-white in colour when freshly laid. They are laid singly in small cavities made by the female in the skin of young fruits. There are reports that eggs may also be laid into inflorescences. The female then covers each egg with a brown exudate and cuts a very small crescent-shaped area (0.3 mm) in the fruit, near the back end of the egg. The wound creates a sap flow, which hardens and covers the egg with a protective coating. Several eggs may be laid in each fruit. Incubation requires 5 to 7 day.</li>
                                                <li>Larvae: Larvae are white grubs with a curved body, brown heads and legless. Newly hatched larvae are extremely slender and elongated and about 1 mm long. Mature larvae are about 17 mm long. After hatching, the larva burrows through the flesh of the fruit and into the seed where they feed until pupation. The development of the larva is usually completed within the maturing seed, but also very occasionally within the flesh.</li>
                                                <li>Pupae: Pupae are whitish when newly formed, but change to a very pale red colour just before the adult emerges. They are about 8 mm long and 7 mm wide. Pupation takes place in the seed within the stone of the fruit.</li>
                                                <li>Adults: Adults are weevils with a compact body, about 8 mm long. They are usually active at dusk. Adults can fly, but they are not known to be strong fliers. They pretend to be dead when touched or disturbed. Females start egg laying 3 to 4 days after mating, when the fruit is about marble-size. Adult weevils feed on mango leaves, tender shoots or flower buds. They can live for two years.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_nut_weevil_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_nut_weevil_collapseTwo" aria-expanded="false" aria-controls="mango_nut_weevil_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="mango_nut_weevil_collapseTwo" class="accordion-collapse collapse" aria-labelledby="mango_nut_weevil_headingTwo" data-bs-parent="#mango_nut_weevil_accordion">
                                        <div class="accordion-body">
                                            <li>Grub makes zigzag tunnels in pulp</li>
                                            <li>Eats unripe tissue and bore into cotyledons</li>
                                            <li>Fruit dropping at marble stage</li>
                                            <li>Oviposition injuries on marble sized fruits.</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_nut_weevil_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_nut_weevil_collapseThree" aria-expanded="false" aria-controls="mango_nut_weevil_collapseThree">
                                            Natural enemies of Mango nut weevil
                                        </button>
                                    </h2>
                                    <div id="mango_nut_weevil_collapseThree" class="accordion-collapse collapse" aria-labelledby="mango_nut_weevil_headingThree" data-bs-parent="#mango_nut_weevil_accordion">
                                        <div class="accordion-body">
                                            Predators: Rhizoglyphus sp, Camponatus spoecophylla, Smaragdina sp.
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
                <div class="modal fade" id="mango_nut_weevil_Modal2" tabindex="-1" aria-labelledby="mango_nut_weevil_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/mango_nut_weevil/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="mango_nut_weevil_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_nut_weevil_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mango_nut_weevil_collapseOne" aria-expanded="true" aria-controls="mango_nut_weevil_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="mango_nut_weevil_collapseOne" class="accordion-collapse collapse show" aria-labelledby="mango_nut_weevil_headingOne" data-bs-parent="#mango_nut_weevil_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Eggs are elliptical, about 0.8 mm long and 0.3 mm wide and are creamy-white in colour when freshly laid. They are laid singly in small cavities made by the female in the skin of young fruits. There are reports that eggs may also be laid into inflorescences. The female then covers each egg with a brown exudate and cuts a very small crescent-shaped area (0.3 mm) in the fruit, near the back end of the egg. The wound creates a sap flow, which hardens and covers the egg with a protective coating. Several eggs may be laid in each fruit. Incubation requires 5 to 7 day.</li>
                                                <li>Larvae: Larvae are white grubs with a curved body, brown heads and legless. Newly hatched larvae are extremely slender and elongated and about 1 mm long. Mature larvae are about 17 mm long. After hatching, the larva burrows through the flesh of the fruit and into the seed where they feed until pupation. The development of the larva is usually completed within the maturing seed, but also very occasionally within the flesh.</li>
                                                <li>Pupae: Pupae are whitish when newly formed, but change to a very pale red colour just before the adult emerges. They are about 8 mm long and 7 mm wide. Pupation takes place in the seed within the stone of the fruit.</li>
                                                <li>Adults: Adults are weevils with a compact body, about 8 mm long. They are usually active at dusk. Adults can fly, but they are not known to be strong fliers. They pretend to be dead when touched or disturbed. Females start egg laying 3 to 4 days after mating, when the fruit is about marble-size. Adult weevils feed on mango leaves, tender shoots or flower buds. They can live for two years.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_nut_weevil_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_nut_weevil_collapseTwo" aria-expanded="false" aria-controls="mango_nut_weevil_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="mango_nut_weevil_collapseTwo" class="accordion-collapse collapse" aria-labelledby="mango_nut_weevil_headingTwo" data-bs-parent="#mango_nut_weevil_accordion">
                                        <div class="accordion-body">
                                            <li>Grub makes zigzag tunnels in pulp</li>
                                            <li>Eats unripe tissue and bore into cotyledons</li>
                                            <li>Fruit dropping at marble stage</li>
                                            <li>Oviposition injuries on marble sized fruits.</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_nut_weevil_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_nut_weevil_collapseThree" aria-expanded="false" aria-controls="mango_nut_weevil_collapseThree">
                                            Natural enemies of Mango nut weevil
                                        </button>
                                    </h2>
                                    <div id="mango_nut_weevil_collapseThree" class="accordion-collapse collapse" aria-labelledby="mango_nut_weevil_headingThree" data-bs-parent="#mango_nut_weevil_accordion">
                                        <div class="accordion-body">
                                            Predators: Rhizoglyphus sp, Camponatus spoecophylla, Smaragdina sp.
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
                <div class="modal fade" id="mango_nut_weevil_Modal3" tabindex="-1" aria-labelledby="mango_nut_weevil_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/mango_nut_weevil/3.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="mango_nut_weevil_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_nut_weevil_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#mango_nut_weevil_collapseOne" aria-expanded="true" aria-controls="mango_nut_weevil_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="mango_nut_weevil_collapseOne" class="accordion-collapse collapse show" aria-labelledby="mango_nut_weevil_headingOne" data-bs-parent="#mango_nut_weevil_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Egg: Eggs are elliptical, about 0.8 mm long and 0.3 mm wide and are creamy-white in colour when freshly laid. They are laid singly in small cavities made by the female in the skin of young fruits. There are reports that eggs may also be laid into inflorescences. The female then covers each egg with a brown exudate and cuts a very small crescent-shaped area (0.3 mm) in the fruit, near the back end of the egg. The wound creates a sap flow, which hardens and covers the egg with a protective coating. Several eggs may be laid in each fruit. Incubation requires 5 to 7 day.</li>
                                                <li>Larvae: Larvae are white grubs with a curved body, brown heads and legless. Newly hatched larvae are extremely slender and elongated and about 1 mm long. Mature larvae are about 17 mm long. After hatching, the larva burrows through the flesh of the fruit and into the seed where they feed until pupation. The development of the larva is usually completed within the maturing seed, but also very occasionally within the flesh.</li>
                                                <li>Pupae: Pupae are whitish when newly formed, but change to a very pale red colour just before the adult emerges. They are about 8 mm long and 7 mm wide. Pupation takes place in the seed within the stone of the fruit.</li>
                                                <li>Adults: Adults are weevils with a compact body, about 8 mm long. They are usually active at dusk. Adults can fly, but they are not known to be strong fliers. They pretend to be dead when touched or disturbed. Females start egg laying 3 to 4 days after mating, when the fruit is about marble-size. Adult weevils feed on mango leaves, tender shoots or flower buds. They can live for two years.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_nut_weevil_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_nut_weevil_collapseTwo" aria-expanded="false" aria-controls="mango_nut_weevil_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="mango_nut_weevil_collapseTwo" class="accordion-collapse collapse" aria-labelledby="mango_nut_weevil_headingTwo" data-bs-parent="#mango_nut_weevil_accordion">
                                        <div class="accordion-body">
                                            <li>Grub makes zigzag tunnels in pulp</li>
                                            <li>Eats unripe tissue and bore into cotyledons</li>
                                            <li>Fruit dropping at marble stage</li>
                                            <li>Oviposition injuries on marble sized fruits.</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="mango_nut_weevil_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#mango_nut_weevil_collapseThree" aria-expanded="false" aria-controls="mango_nut_weevil_collapseThree">
                                            Natural enemies of Mango nut weevil
                                        </button>
                                    </h2>
                                    <div id="mango_nut_weevil_collapseThree" class="accordion-collapse collapse" aria-labelledby="mango_nut_weevil_headingThree" data-bs-parent="#mango_nut_weevil_accordion">
                                        <div class="accordion-body">
                                            Predators: Rhizoglyphus sp, Camponatus spoecophylla, Smaragdina sp.
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
            <h3 class="heading">Shoot gall psyllid</h3>
        </div>
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/shoot_gall_psyllid/1.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#shoot_gall_psyllid_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
            
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light" >
                            <img src="{{ asset('assets/img/pests/shoot_gall_psyllid/2.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#shoot_gall_psyllid_Modal2">
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
                <div class="modal fade" id="shoot_gall_psyllid_Modal" tabindex="-1" aria-labelledby="shoot_gall_psyllid_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/shoot_gall_psyllid/1.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="shoot_gall_psyllid_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="shoot_gall_psyllid_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#shoot_gall_psyllid_collapseOne" aria-expanded="true" aria-controls="shoot_gall_psyllid_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="shoot_gall_psyllid_collapseOne" class="accordion-collapse collapse show" aria-labelledby="shoot_gall_psyllid_headingOne" data-bs-parent="#shoot_gall_psyllid_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Eggs: Adult female lays 80-100 eggs on either side of the midrib of a single leaf. Freshly laid egg looked like a rectangular block with rounded corners. The incubation period ranges between 191-211 days.</li>
                                                <li>Nymphs: Freshly hatched nymph is yellowish in colour, but changed in size and colourwith time. There were six nymphal instars. Each instar moults after duration of about one month except 2nd nymphal instar, which moulted 2-3 weeks after hatching. Only one generation occur in a year. The nymphal period is about five to six months.</li>
                                                <li>Adults: Adult emergence starts from fourth week of February and continued up to third week of March.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="shoot_gall_psyllid_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shoot_gall_psyllid_collapseTwo" aria-expanded="false" aria-controls="shoot_gall_psyllid_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="shoot_gall_psyllid_collapseTwo" class="accordion-collapse collapse" aria-labelledby="shoot_gall_psyllid_headingTwo" data-bs-parent="#shoot_gall_psyllid_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Nymphs emerge during August September and suck cell sap from adjacent buds.</li>
                                                <li>As a result of feeding, buds develop into hard conical green galls.</li>
                                                <li>The galls are usually seen during September-October.</li>
                                                <li>Consequently there is no flowering and fruit setting. Nymphs pass winter inside the galls.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="shoot_gall_psyllid_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shoot_gall_psyllid_collapseThree" aria-expanded="false" aria-controls="shoot_gall_psyllid_collapseThree">
                                            Natural enemies of shoot gall psyllid
                                        </button>
                                    </h2>
                                    <div id="shoot_gall_psyllid_collapseThree" class="accordion-collapse collapse" aria-labelledby="shoot_gall_psyllid_headingThree" data-bs-parent="#shoot_gall_psyllid_accordion">
                                        <div class="accordion-body">
                                            <li>Parasitoids: Tiny parasitic wasp, Inostemma apsyllae</li>
                                            <li>Predators: Ladybird beele, purplish pirate bug, brown lacewings</li>
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
                <div class="modal fade" id="shoot_gall_psyllid_Modal2" tabindex="-1" aria-labelledby="shoot_gall_psyllid_Modal2Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/shoot_gall_psyllid/2.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="shoot_gall_psyllid_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="shoot_gall_psyllid_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#shoot_gall_psyllid_collapseOne" aria-expanded="true" aria-controls="shoot_gall_psyllid_collapseOne">
                                            Biology
                                        </button>
                                    </h2>
                                    <div id="shoot_gall_psyllid_collapseOne" class="accordion-collapse collapse show" aria-labelledby="shoot_gall_psyllid_headingOne" data-bs-parent="#shoot_gall_psyllid_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Eggs: Adult female lays 80-100 eggs on either side of the midrib of a single leaf. Freshly laid egg looked like a rectangular block with rounded corners. The incubation period ranges between 191-211 days.</li>
                                                <li>Nymphs: Freshly hatched nymph is yellowish in colour, but changed in size and colourwith time. There were six nymphal instars. Each instar moults after duration of about one month except 2nd nymphal instar, which moulted 2-3 weeks after hatching. Only one generation occur in a year. The nymphal period is about five to six months.</li>
                                                <li>Adults: Adult emergence starts from fourth week of February and continued up to third week of March.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="shoot_gall_psyllid_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shoot_gall_psyllid_collapseTwo" aria-expanded="false" aria-controls="shoot_gall_psyllid_collapseTwo">
                                            Damage symptoms
                                        </button>
                                    </h2>
                                    <div id="shoot_gall_psyllid_collapseTwo" class="accordion-collapse collapse" aria-labelledby="shoot_gall_psyllid_headingTwo" data-bs-parent="#shoot_gall_psyllid_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Nymphs emerge during August September and suck cell sap from adjacent buds.</li>
                                                <li>As a result of feeding, buds develop into hard conical green galls.</li>
                                                <li>The galls are usually seen during September-October.</li>
                                                <li>Consequently there is no flowering and fruit setting. Nymphs pass winter inside the galls.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="shoot_gall_psyllid_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shoot_gall_psyllid_collapseThree" aria-expanded="false" aria-controls="shoot_gall_psyllid_collapseThree">
                                            Natural enemies of shoot gall psyllid
                                        </button>
                                    </h2>
                                    <div id="shoot_gall_psyllid_collapseThree" class="accordion-collapse collapse" aria-labelledby="shoot_gall_psyllid_headingThree" data-bs-parent="#shoot_gall_psyllid_accordion">
                                        <div class="accordion-body">
                                            <li>Parasitoids: Tiny parasitic wasp, Inostemma apsyllae</li>
                                            <li>Predators: Ladybird beele, purplish pirate bug, brown lacewings</li>
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
                <div class="modal fade" id="shoot_gall_psyllid_Modal3" tabindex="-1" aria-labelledby="shoot_gall_psyllid_Modal3Label" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/pests/shoot_gall_psyllid/3.png') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="shoot_gall_psyllid_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="shoot_gall_psyllid_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#shoot_gall_psyllid_collapseOne" aria-expanded="true" aria-controls="shoot_gall_psyllid_collapseOne">
                                            Disease symptoms
                                        </button>
                                    </h2>
                                    <div id="shoot_gall_psyllid_collapseOne" class="accordion-collapse collapse show" aria-labelledby="shoot_gall_psyllid_headingOne" data-bs-parent="#shoot_gall_psyllid_accordion">
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
                                    <h2 class="accordion-header" id="shoot_gall_psyllid_headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shoot_gall_psyllid_collapseTwo" aria-expanded="false" aria-controls="shoot_gall_psyllid_collapseTwo">
                                            Survival and spread
                                        </button>
                                    </h2>
                                    <div id="shoot_gall_psyllid_collapseTwo" class="accordion-collapse collapse" aria-labelledby="shoot_gall_psyllid_headingTwo" data-bs-parent="#shoot_gall_psyllid_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>The severity of infection depends on the honey dew secretions by the scale insects which provide the necessary medium for the fungal growth.</li>
                                                <li>Transmission occurs by air-borne as co-spores.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="shoot_gall_psyllid_headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shoot_gall_psyllid_collapseThree" aria-expanded="false" aria-controls="shoot_gall_psyllid_collapseThree">
                                            Favourable conditions
                                        </button>
                                    </h2>
                                    <div id="shoot_gall_psyllid_collapseThree" class="accordion-collapse collapse" aria-labelledby="shoot_gall_psyllid_headingThree" data-bs-parent="#shoot_gall_psyllid_accordion">
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
        
    </main>
</div>
<x-footer/>