<x-header/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<x-top-nav/>
<div class="wrapper row3">
    <main class="hoc container clear"> 
        <div class="center btmspace-50">
            <h2 class="heading">Mango Verieties</h2>
        </div>
        
        <!-- Modal gallery -->
        <section class="">
            <section class="">
                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light"  style="text-align: center">
                            <img src="{{ asset('assets/img/mango_verieties/horanahiru.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#horanahiru_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                            <span>Horanahiru</span>
                        </div>
                    </div>
            
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light"  style="text-align: center">
                            <img src="{{ asset('assets/img/mango_verieties/karthacolomban.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#karthacolomban_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                            <span>Karthacolomban</span>
                        </div>
                    </div>
            
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light"  style="text-align: center">
                            <img src="{{ asset('assets/img/mango_verieties/velleicolomban.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#velleicolomban_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                            <span>Velleicolomban</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light"  style="text-align: center">
                            <img src="{{ asset('assets/img/mango_verieties/villard.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#villard_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                            <span>Villard</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light"  style="text-align: center">
                            <img src="{{ asset('assets/img/mango_verieties/tom_ejc.png') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#tom_ejc_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                            <span>TOM EJC</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light"  style="text-align: center">
                            <img src="{{ asset('assets/img/mango_verieties/malwana.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#malwana_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                            <span>Malwana</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light"  style="text-align: center">
                            <img src="{{ asset('assets/img/mango_verieties/dampara.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#dampara_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                            <span>Dampara</span>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light"  style="text-align: center">
                            <img src="{{ asset('assets/img/mango_verieties/giraamba.jpg') }}" class="w-100" style="height: 250px" />
                            <a href="#!" data-mdb-toggle="modal" data-mdb-target="#giraamba_Modal">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                            <span>Giraamba</span>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        
            <!-- Section: Modals -->
            <section class="">
                <!-- Modal 1 -->
                <div class="modal fade" id="horanahiru_Modal" tabindex="-1" aria-labelledby="horanahiru_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/mango_verieties/horanahiru.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="horanahiru_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="horanahiru_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#horanahiru_collapseOne" aria-expanded="true" aria-controls="horanahiru_collapseOne">
                                            Horanahiru
                                        </button>
                                    </h2>
                                    <div id="horanahiru_collapseOne" class="accordion-collapse collapse show" aria-labelledby="horanahiru_headingOne" data-bs-parent="#horanahiru_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>This variety was selected and recommended for the low county wet zone by Fruit Research & Development Institute, Horana.</li>
                                                <li>HoranaHiru has fast vegetative growth and regular and prolific flowering habit.</li>
                                                <li>Has its unique taste.</li>
                                                <li>Moderately resistant to Anthracnose.</li>
                                                <li>Long shelf life.</li>
                                                <li>Pulp is golden yellow when ripe.</li>
                                                <li>Bagging practice is essential to get yellow peel color & low pest incidents.</li>
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
                <div class="modal fade" id="karthacolomban_Modal" tabindex="-1" aria-labelledby="karthacolomban_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/mango_verieties/karthacolomban.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="karthacolomban_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="karthacolomban_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#karthacolomban_collapseOne" aria-expanded="true" aria-controls="karthacolomban_collapseOne">
                                            Karthacolomban
                                        </button>
                                    </h2>
                                    <div id="karthacolomban_collapseOne" class="accordion-collapse collapse show" aria-labelledby="karthacolomban_headingOne" data-bs-parent="#karthacolomban_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Recommended for dry and intermediate zones.</li>
                                                <li>Long shape, short beak, and dark green and thick peel are external characters.</li>
                                                <li>Soft, golden color and Juicy flesh.</li>
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

                <div class="modal fade" id="velleicolomban_Modal" tabindex="-1" aria-labelledby="velleicolomban_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/mango_verieties/velleicolomban.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="velleicolomban_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="velleicolomban_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#velleicolomban_collapseOne" aria-expanded="true" aria-controls="velleicolomban_collapseOne">
                                            velleicolomban
                                        </button>
                                    </h2>
                                    <div id="velleicolomban_collapseOne" class="accordion-collapse collapse show" aria-labelledby="velleicolomban_headingOne" data-bs-parent="#velleicolomban_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Recommended for wet and intermediate zone.</li>
                                                <li>Selection from local mango germplasm.</li>
                                                <li>Show ploy embryonic.</li>
                                                <li>Light green in color.</li>
                                                <li>Low fiber content, golden yellow flesh andJuicy.</li>
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

                <div class="modal fade" id="villard_Modal" tabindex="-1" aria-labelledby="villard_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/mango_verieties/villard.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="villard_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="villard_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#villard_collapseOne" aria-expanded="true" aria-controls="villard_collapseOne">
                                            Villard
                                        </button>
                                    </h2>
                                    <div id="villard_collapseOne" class="accordion-collapse collapse show" aria-labelledby="villard_headingOne" data-bs-parent="#villard_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Recommended for dry zone.</li>
                                                <li>Red peel color, round shape, and soft peel.</li>
                                                <li>Low fiber content.</li>
                                                <li>Has its unique taste and aroma.</li>
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

                <div class="modal fade" id="tom_ejc_Modal" tabindex="-1" aria-labelledby="tom_ejc_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/mango_verieties/tom_ejc.png') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="tom_ejc_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="tom_ejc_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#tom_ejc_collapseOne" aria-expanded="true" aria-controls="tom_ejc_collapseOne">
                                            TOM EJC
                                        </button>
                                    </h2>
                                    <div id="tom_ejc_collapseOne" class="accordion-collapse collapse show" aria-labelledby="tom_ejc_headingOne" data-bs-parent="#tom_ejc_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>A large fruit, average fruit weigh is 400g.</li>
                                                <li>Bagging practice is essential to have yellow color fruits.</li>
                                                <li>Orange, less fiber flesh with good taste.</li>
                                                <li>Recommended for commercial cultivation in dry zone of Sri Lanka.</li>
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

                <div class="modal fade" id="malwana_Modal" tabindex="-1" aria-labelledby="malwana_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/mango_verieties/malwana.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="malwana_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="malwana_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#malwana_collapseOne" aria-expanded="true" aria-controls="malwana_collapseOne">
                                            Malwana
                                        </button>
                                    </h2>
                                    <div id="malwana_collapseOne" class="accordion-collapse collapse show" aria-labelledby="malwana_headingOne" data-bs-parent="#malwana_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Medium size, light green color fruits.</li>
                                                <li>Has good taste.</li>
                                                <li>Recommended for dry and intermediate zones.</li>
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

                <div class="modal fade" id="dampara_Modal" tabindex="-1" aria-labelledby="dampara_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/mango_verieties/dampara.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="dampara_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="dampara_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#dampara_collapseOne" aria-expanded="true" aria-controls="dampara_collapseOne">
                                            Dampara
                                        </button>
                                    </h2>
                                    <div id="dampara_collapseOne" class="accordion-collapse collapse show" aria-labelledby="dampara_headingOne" data-bs-parent="#dampara_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Recommended for wet zone.</li>
                                                <li>Round shape, average weight 100g per fruit , pale green color, Dark yellow flesh.</li>
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

                <div class="modal fade" id="giraamba_Modal" tabindex="-1" aria-labelledby="giraamba_ModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="ratio ratio-16x9">
                                <img src="{{ asset('assets/img/mango_verieties/giraamba.jpg') }}" class="w-100 img-thumbnail img-fluid rounded" />
                            </div>
                
                            <div class="accordion" id="giraamba_accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="giraamba_headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#giraamba_collapseOne" aria-expanded="true" aria-controls="giraamba_collapseOne">
                                            Giraamba
                                        </button>
                                    </h2>
                                    <div id="giraamba_collapseOne" class="accordion-collapse collapse show" aria-labelledby="giraamba_headingOne" data-bs-parent="#giraamba_accordion">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>Recommended for wet zone.</li>
                                                <li>Conspicuous beak.</li>
                                                <li>Average weight 150g per fruit.</li>
                                                <li>Dark orange flesh.</li>
                                                <li>Has unique taste.</li>
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


        
        
    </main>
</div>
<x-footer/>


