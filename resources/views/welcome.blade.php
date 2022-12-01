<x-header/>
<x-top-nav/>
<style>
  a {
    text-decoration: none
  }
</style>
<div class="wrapper bgded overlay" style="background-image:url('{{asset('layout/img/backgrounds/01.png')}}');">
  <div id="pageintro" class="hoc clear"> 
    
	
    <article>
      <h2 class="heading">Mango Tree Plantation Instructions</h2>
      <p>Mango, Mangifera indica, is an evergreen tree in the family Anacardiaceae grown for its edible fruit. The mango tree is erect and branching with a thick trunk and broad, rounded canopy. The leaves of the tree are are shiny and dark green. They are either elliptical or lanceolate with long petioles and a leathery texture. The tree produces dense clusters of flowers with cream-pink petals on branched panicles.</p>
      @if (Auth::check())
      <footer><a class="btn btn-warning" href="/user">My Profile</a></footer>
      @else
      <footer><a class="btn btn-warning" href="/login">My Profile</a></footer>

      @endif
    </article>
    
  </div>
</div>




<div class="wrapper row3">
  <main class="hoc container clear"> 
  
    <!-- main body -->

    <div class="center btmspace-50">
      <h2 class="heading">About</h2>
      <p>There are many different kinds of mango. They vary in color, shape, flavor, and seed size. Although mango skin can be green, red, yellow, or orange, its inner flesh is mostly golden yellow..</p>
    </div>
    <ul class="nospace group btmspace-50">
      <li class="one_third first">
        <article class="element">
          <figure><img src="{{asset('layout/img/320x210 1.png')}}" alt="">
            <figcaption style="margin-bottom: 8px;"><a class="btns small" style="padding: 10px 10px" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">More</a></figcaption>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mangos pack a nutritional punch.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <ul>
                      <li>A mango serving size is equivalent to 3/4 cup of sliced mangos and is just 70 calories, so it’s a satisfyingly sweet treat.</li><br>
                      <li>There are 202 calories in 1 whole mango (without refuse and 336g).</li><br>
                      <li>Each serving of mango is fat free, sodium free and cholesterol free.</li><br>
                      <li>Mangos contain over 20 different vitamins and minerals, helping to make them a superfood.</li><br>
                      <li>3/4 cup of mango provides 50% of your daily vitamin C, 8% of your daily Vitamin A and 8% of your daily vitamin B6. These nutrients in mango may help support your body’s immune system</li><br>
                      <li>One serving (3/4 cup) of mango contains 7% of your daily fiber. It’s a delicious and fun way to get some fiber in your diet.</li><br>
                      <li>3/4 cup of mango is also a good source of folate, making up 15% of your daily requirement and also of copper, making up 15% of your daily needs.</li><br>
                      <li>There are 19g of carbohydrates in a 3/4 cup serving of mango, making up 7% of your daily value. Give your body a delicious and super fun super fruit!</li><br>
                      <li><a href = "{{ asset('assets/pdf/Mango_Nutrition_Handout_2022_final.pdf') }}" download > Download Link</a></li>
                    </ul>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </figure>
          <div class="excerpt">
            <!--<time datetime="2045-06-06T08:15+00:00" data-title="June"><strong>Jun</strong> <em>06</em></time>-->
            <h6 class="heading"><a href="#">Benefits</a></h6>
            <p>Consuming mangoes has a variety of health benefits that can help protect and strengthen the body. The sections below discuss these benefits in more detail.</p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="element">
          <figure><img src="{{asset('layout/img/320x210 2.png')}}" alt="">
            <figcaption style="margin-bottom: 8px;"><a class="btns small" style=" padding: 10px 10px" href="/diseases/symptoms">More</a></figcaption>
          </figure>
          <div class="excerpt">
            <!--<time datetime="2045-06-06T08:15+00:00" data-title="June"><strong>Jun</strong> <em>06</em></time>-->
            <h6 class="heading"><a href="#">Diseases</a></h6>
            <p>Mangos are tropical and sub-tropical trees that thrive in regions with warm temperatures. Indigenous to India and southeast Asia, trees are particularly susceptible to two diseases of mango:</p>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="element">
          <figure><img src="{{asset('layout/img/320x210 3.png')}}" alt="">
            <figcaption style="margin-bottom: 8px;"><a class="btns small" style="padding: 10px 10px" href="/pests">More</a></figcaption>
          </figure>
          <div class="excerpt">
            <!--<time datetime="2045-06-06T08:15+00:00" data-title="June"><strong>Jun</strong> <em>06</em></time>-->
            <h6 class="heading"><a href="#">pests</a></h6>
            <p>Below is a brief overview of the main pests and diseases of mangoes.</p>
          </div>
        </article>
      </li>
    </ul>
	
    <div class="clear"></div>
  </main>
</div>

{{-- 
<div class="wrapper row3">
  <section class="hoc container clear"> 

    <div class="group">
      <div class="one_third first btmspace-30">
        <h6 class="font-x3 uppercase">Information On Planting And Caring For A Mango Tree <a href="#">&raquo;</a></h6>
      </div>
      <article class="one_third btmspace-30">
        <h6 class="uppercase font-x1"><a href="#">Climate requirement</a></h6>
        <p class="nospace">Well grown in tropical & subtropical regions. Can be grown up to 1300 m. But commercial cultivation is successful from sea level to 600 m of height and optimum temperature is between 27-30 Celsius &hellip;</p>
      </article>
      <article class="one_third btmspace-30">
        <h6 class="uppercase font-x1"><a href="#">Soil </a></h6>
        <p class="nospace">Mangoes can be grown in a wide range of soil types. Deep, rich, well drained soils provide the best production. Water logging soils are not suitable for mango production. The pH   range of soil should be 5.5 – 7.5 &hellip;</p>
      </article>
      <article class="one_third first">
        <h6 class="uppercase font-x1"><a href="#">Field Preparation</a></h6>
        <p class="nospace">This is best done before the onset of the rainy season. Shrubs and trees should be cut down, preferable up rooted and the debris removed from the site.In flat and gently sloping lands, although hilly lands can also be planted&hellip;</p>
      </article>
      <article class="one_third">
        <h6 class="uppercase font-x1"><a href="#">Planting Materials</a></h6>
        <p class="nospace">Budded or grafted plants are recommended. The plant should reflect the characters of its variety and label, which certified by the DOA&hellip;</p>
      </article>
      <article class="one_third">
        <h6 class="uppercase font-x1"><a href="#">Spacing for TOM EJC </a></h6>
        <p class="nospace">High density planting is practiced for commercial cultivation of TOM EJC in Sri Lanka. 5‹5m, 5‹6m, 5‹6m, 6‹6m spacings are practiced and 5‹5m is the most applicable spacing&hellip;</p>
      </article>
    </div>
   
  </section>
</div> --}}




<div class="wrapper row4 bgded overlay" style="background-image:url('{{asset('layout/img/03.png')}}');">
  <footer id="footer" class="hoc clear"> 
   
   <!--
   
    <div class="one_quarter first">
      <h6 class="title">Libero semper nec</h6>
      <p>Eros et magna ut vitae faucibus dui nec fermentum mauris nunc molestie venenatis metus et porttitor nisi faucibus ut cras non sem facilisis.</p>
      <p>Hendrerit ligula ut blandit sem nulla non ipsum rutrum tempor dolor non faucibus eros cras imperdiet cursus sapien.</p>
    </div>
    <div class="one_quarter">
      <h6 class="title">Nisi ornare aliquet</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
          +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Donec at tellus eu</h6>
      <ul class="nospace linklist">
        <li><a href="#">Mauris in condimentum lacus</a></li>
        <li><a href="#">Sed hendrerit est praesent</a></li>
        <li><a href="#">Tempor dapibus enim phasellus</a></li>
        <li><a href="#">Convallis lectus a tristique</a></li>
        <li><a href="#">Lectus nisi sodales sem at</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">ac urna morbi rutrum</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">dignissim libero augue</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">aenean non egestas urna curabitur vitae aliquam felis&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">et nisl id pretium</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">eros vehicula eros nec lacinia sem tellus vel turpis vivamus&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
   
  </footer>
</div>

-->


<x-footer/>