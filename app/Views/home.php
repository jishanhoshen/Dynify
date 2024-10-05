<?php ob_start(); ?>

<div class="hero-area">
  <div class="container h-100">
    <div class="hero-content">
      <h1 class="hero-title long-title" amp-fx="parallax" data-parallax-factor="1.7">
        Off-Duty Police Expertise, Anytime, Anywhere
      </h1>
    </div>
  </div>
</div>

<div class="hero-footer">
  <div class="container">
    <div class="box">
      <h2 class="long-title">
        Off-Duty Police for <br> Security Services and<br>
        Traffic Control
      </h2>
      <ul>
        <li>Contracted Off-Duty Police Officer from the jurisdiction the job/event is located</li>
        <li>Personal Protection - VIP Client Services</li>
        <li>Traffic Control / Safety</li>
      </ul>
    </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include __DIR__ . '/layout/master.php'; ?> 