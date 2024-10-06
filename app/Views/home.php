<?php ob_start(); ?>

<div class="hero-area">
  <div class="container h-100">
    <div class="hero-content">
      <h1 class="hero-title long-title" amp-fx="parallax" data-parallax-factor="1.7">
        Ground Penetrating Radar <br>
        Find Post Tension Cables, Electric, <br>
        Plumbing & Rebars
      </h1>
    </div>
  </div>
</div>

<div class="hero-footer">
  <div class="container">
    <div class="box">
      <h2 class="long-title">
        Ground Penetrating Radar
      </h2>
      <ul>
        <li><b>Concrete Scanning:</b> Identifying embedded rebar, post-tension cables, and other structures within concrete.</li>
        <li><b>Subsurface Mapping:</b> Creating detailed maps of subsurface conditions for construction and renovation.</li>
        <li><b>Location of Utilities:</b> Detecting buried utilities to prevent damage during excavation.</li>
        <li><b>Void Detection:</b> Identifying voids or anomalies within concrete structures.</li>
        <li><b>Thickness Measurement:</b> Measuring the thickness of concrete slabs.</li>
      </ul>
    </div>
  </div>
</div>




<section class="pricing" id="pricing">
  <div class="container">
    <div class="pricing-area text-right">
      <!-- <span class="short-title">Pricing</span> -->
      <h1 class="long-title">
        Ground Penetrating Radar (GPR)
      </h1>
      <div>
        <p>Ground Penetrating Radar (GPR) is a high-resolution geophysical method used to create detailed cross-sectional images of the shallow subsurface. By collecting data along multiple grid lines, GPR can also generate three-dimensional images of subsurface conditions.</p>
        <p>GPR is widely employed in scanning concrete structures, such as walls, floors, and bridges, to detect embedded objects like rebar, post-tension cables, and other materials. This technology is crucial for construction and renovation projects, ensuring accuracy and safety.</p>
        <p><b>How GPR Works</b></p>
        <p>A standard GPR system consists of an antenna unit, which acts as both the transmitter and receiver, connected to a profiling recorder. The antenna emits pulses of electromagnetic (radar) waves into the subsurface and captures the reflected waves, which vary depending on the physical and electrical properties of the materials below the surface. The profiling recorder processes this data, displaying a continuous profile of the scanned area. The results can be visualized in real-time on a video display.</p>
        <p><b>Ensuring Construction Compliance</b></p>
        <p>When unlicensed contractors perform work without permits or proper inspections, projects are at risk. GPR technology can provide verifiable evidence of rebar, steel ties, loops, and concrete depth, ensuring compliance with city inspectors' and engineers' specifications, thus safeguarding your project from costly errors or rework.</p>
      </div>
    </div>
  </div>
</section>
<!-- <div class="section-border">
  Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security Safe Blue Security
</div> -->


<section class="about-us" id="about-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 pe-lg-5">
        <img src="storage/images/about.png" alt="" class="img-fluid w-90">
      </div>
      <div class="col-lg-6 col-12 ps-lg-5">
        <div class="about-content">
          <span class="short-title">
            About us
          </span>
          <h2 class="long-title">
            About Our Company
          </h2>
          <p>
            We specialize in providing high-quality Ground Penetrating Radar (GPR) services to ensure safe and precise subsurface scanning for construction and renovation projects. Our expert team is committed to delivering reliable results that meet industry standards and client needs.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/layout/master.php'; ?>