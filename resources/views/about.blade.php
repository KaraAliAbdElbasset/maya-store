@extends('layouts.app')

@section('content')

<section id="latest" class="py-6 products">
      <br><br><br><br>
      <div class="container">

       <h3 class="fw-bold text-center text-lg-start  px-3">
        À propos
         </h3>
         <table>
           <tr>
            <td><img src="{{asset('assets/images/cecimg.jpeg')}}" alt="img" width="400px" height="300px"  ></td>

            <td width="900px" style="text-align:center; ">
            CEC est une société informatique qui à plus de 30 années d'existence qui propose des solutuions professionnelles avec des véritable avantages.</td>
           </tr>
         </table>


</div>
       </div>
     </section>


<br><br><br><br>

  <section id="latest" class="py-6 products">
      <div class="container">

       <h3 class="fw-bold text-center text-lg-start  px-3">
        Services
         </h3>
         <div class="row mt-0 mt-lg-5">

            <div class="col-lg-4 mt-0 mt-5 mt-lg-0">



                <div class="product-image">
                  <img src="{{asset('assets/images/images.png')}}" alt="img" width="300px" height="200px"  >
                  <!--<span class="badge bg-orange rounded-2 product-discount">- 15%</span>-->
                 <div class="px-3 product-infos">

              <div class="product-title">
     <p class="mb-0 mt-4 text-truncate">
    <button class="first" style="border: none ; background:#87CEEB ; color:white ; padding:0.3em 1.2em;border-radius:2em; margin-left: 10%;
margin-right: 30%" >Service Maintenance</button>

     </p>
       <script>
  document.querySelector(".first").addEventListener("click", function() {
  Swal.fire({
  title: 'Service Maintenance ',
  html:
    ' <br> 1-Gestion de la garantie <br><br>' +
    '  2-Service de maintenance (Laptopes & Desktops, Imprimantes, Serveurs, Traceurs, Onduleurs, Reseaux & Routeurs) <br><br>' +
    '  3-Installation et mise en service (Grandes Imprimantes, Traceurs, Onduleurs)<br><br>'+
    '  4-Installation et correction software <br>',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
}) });
</script>
     </div>
   </div>
 </div>
</div>


            <div class="col-lg-4 mt-0 mt-5 mt-lg-0">
                <div class="product-image">
                  <img src="assets/images/img1.png" alt="img" width="300px" height="200px"  >
                  <!--<span class="badge bg-orange rounded-2 product-discount">- 15%</span>-->
                 <div class="px-3 product-infos">

              <div class="product-title">
     <p class="mb-0 mt-4 text-truncate">


    <button class="second " style="border: none ; background:#87CEEB ; color:white ; padding:0.3em 1.2em;border-radius:2em; margin-left: 10%;
margin-right: 30%" >Service commercial</button>

     </p>
       <script>
  document.querySelector(".second").addEventListener("click", function() {
  Swal.fire({
  title: 'Service Commercial ',
  html:
     ' <br> Le service commercial regroupe une équipe spécialiste prête à vous apporter:  <br><br>' +
    "  1-Un meilleur service et un confort d'achat amélioré<br><br>"+
    '  2-Des conseils et des réponses à toutes vos questions concernant le secteur de la mico-informatique et accessoires <br>',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
}) });
</script>
     </div>
   </div>
 </div>

  </div>





            <div class="col-lg-3 mt-0 mt-5 mt-lg-0">
                <div class="product-image">
                  <img src="assets/images/marketing.png" alt="img"  width="300px" height="200px" style=" background:white "  >
                  <!--<span class="badge bg-orange rounded-2 product-discount">- 15%</span>-->
                 <div class="px-3 product-infos">

              <div class="product-title">
     <p class="mb-0 mt-4 text-truncate">
    <button class="third" style="border: none ; background:#87CEEB ; color:white ; padding:0.3em 1.2em;border-radius:2em; margin-left: 10%;
margin-right: 30%" >Service Marché</button>

     </p>
       <script>
  document.querySelector(".third").addEventListener("click", function() {
  Swal.fire({
  title: 'Service Marché ',
  html:
    ' <br><b> Le service commercial regroupe une équipe spécialiste prête à vous apporter:  <br><br>' +
    "  -Un meilleur service et un confort d'achat amélioré<br><br>"+
    " -Des conseils et des réponses à toutes vos questions concernant le secteur de la mico-informatique et accessoires <br><br>"+
    'Num : 05.61.87.98.25 // 05.55.03.68.50<br>'
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
}) });
</script>
     </div>
   </div>
 </div>

  </div>


        </div>

    </div>
    </section>




<br><br><br><br>


    <!-- brand Start -->
    <section id="latest" class="py-5 products">
      <div class="container">

       <h3 class="fw-bold text-center text-lg-start  px-3">
          Nos Clients
        </h3>

        <div class="row mt-0 mt-lg-5">
         
              <div class="owl-gallery owl-carousel owl-theme">
              <div class="row d-flex justify-content-around">
              <div class="col-3">
            <img src="assets/client/Mentouri.jpg"  alt="img"  style="border-radius:50%" width="100px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/Mehri.jpg"  alt="img"  style="border-radius:50%" width="60px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/Boubnider.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
          <img src="assets/client/Setifferhat.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
          </div>
          </div>
          <div class="row d-flex justify-content-around">
          <div class="col-3">
            <img src="assets/client/SetifElhadib.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/Skikda.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/OumElBouaghi.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/Jijel.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            </div>
            <div class="row d-flex justify-content-around">
            <div class="col-3">
            <img src="assets/client/Batna.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/Khenchela.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/Msila.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/Biskra.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            </div>
            <div class="row d-flex justify-content-around">
            <div class="col-3">
            <img src="assets/client/ENS.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/sonatrach.png"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/Somikskikda.png"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/seaco.png"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            </div>
            <div class="row d-flex justify-content-around">
            <div class="col-3">
            <img src="assets/client/GICA.png"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/APC.jpg"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/Naftal.png"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>
            <div class="col-3">
            <img src="assets/client/CRMA.png"  alt="img"  style="border-radius:50%" width="150px" height="120px"/>
            </div>

                </div>
            </div>

          </div>
        </div>



      </div>
    </section>
 @endsection
