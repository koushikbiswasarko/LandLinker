<?php include __DIR__ . '/includes/header.php';
  
     ?>

<section class="hero-banner">
  <div class="container hero-banner__inner">
    <div class="hero-banner__content">
      <h1>Discover your perfect property for your future</h1>
      <p>
        Explore premium listings, track deals, and connect with a trusted network of buyers and sellers —
        all in one place.
      </p>
      <a class="btn btn-primary" href="<?= url('pages/deal-statistics.php') ?>">Get Started</a>
    </div>
  </div>
</section>

<section class="stats">
  <div class="container stats__grid">
    <div class="stat card">
      <div class="stat__icon" aria-hidden="true">★</div>
      <div class="stat__meta">
        <div class="stat__value">5.6K+</div>
        <div class="stat__label">Premium Product</div>
      </div>
    </div>

    <div class="stat card">
      <div class="stat__icon" aria-hidden="true">☺</div>
      <div class="stat__meta">
        <div class="stat__value">2.3K+</div>
        <div class="stat__label">Happy Customers</div>
      </div>
    </div>

    <div class="stat card">
      <div class="stat__icon" aria-hidden="true">🏗</div>
      <div class="stat__meta">
        <div class="stat__value">268+</div>
        <div class="stat__label">Constructions</div>
      </div>
    </div>

    <div class="stat card">
      <div class="stat__icon" aria-hidden="true">✓</div>
      <div class="stat__meta">
        <div class="stat__value">197K+</div>
        <div class="stat__label">Sold</div>
      </div>
    </div>
  </div>
</section>

<section class="showcase">
  <div class="container">
    <div class="section-head">
      <div>
        <h2 class="section-title">Showcase Properties</h2>
        <p class="section-subtitle">Handpicked listings to match your goals — land, homes, and investment opportunities.</p>
      </div>
      <a class="btn btn-outline" href="<?= url('pages/deal-statistics.php') ?>">Browse All</a>
    </div>

    <div class="property-grid">
      <!-- Card 1 -->
      <article class="property-card card">
        <div class="property-card__media">
          <img src="/images/hero.jpg" alt="Property in Brackettville, TX" loading="lazy">
        </div>

        <div class="property-card__body">
          <div class="property-card__top">
            <div class="property-card__price">$995,000</div>
            <span class="badge-accent">392 Acres</span>
          </div>

          <div class="property-card__location">Brackettville, TX</div>

          <div class="property-card__facts">
            <span class="fact" title="Bedrooms">
              <span class="fact__icon" aria-hidden="true">🛏</span>
              <span class="fact__text">4</span>
            </span>
            <span class="fact" title="Bathrooms">
              <span class="fact__icon" aria-hidden="true">🛁</span>
              <span class="fact__text">3</span>
            </span>
          </div>

          <a class="btn btn-primary property-card__btn" href="<?= url('pages/property-details.php') ?>">View Details</a>
        </div>
      </article>

      <!-- Card 2 -->
      <article class="property-card card">
        <div class="property-card__media">
          <img src="/images/hero.jpg" alt="Property in Austin, TX" loading="lazy">
        </div>

        <div class="property-card__body">
          <div class="property-card__top">
            <div class="property-card__price">$640,000</div>
            <span class="badge-accent">1,850 Sq Ft</span>
          </div>

          <div class="property-card__location">Austin, TX</div>

          <div class="property-card__facts">
            <span class="fact" title="Bedrooms">
              <span class="fact__icon" aria-hidden="true">🛏</span>
              <span class="fact__text">3</span>
            </span>
            <span class="fact" title="Bathrooms">
              <span class="fact__icon" aria-hidden="true">🛁</span>
              <span class="fact__text">2</span>
            </span>
          </div>

          <a class="btn btn-primary property-card__btn" href="<?= url('pages/property-details.php') ?>">View Details</a>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="property-card card">
        <div class="property-card__media">
          <img src="/images/hero.jpg" alt="Property in Dallas, TX" loading="lazy">
        </div>

        <div class="property-card__body">
          <div class="property-card__top">
            <div class="property-card__price">$1,250,000</div>
            <span class="badge-accent">5,200 Sq Ft</span>
          </div>

          <div class="property-card__location">Dallas, TX</div>

          <div class="property-card__facts">
            <span class="fact" title="Bedrooms">
              <span class="fact__icon" aria-hidden="true">🛏</span>
              <span class="fact__text">5</span>
            </span>
            <span class="fact" title="Bathrooms">
              <span class="fact__icon" aria-hidden="true">🛁</span>
              <span class="fact__text">4</span>
            </span>
          </div>

          <a class="btn btn-primary property-card__btn" href="<?= url('pages/property-details.php') ?>">View Details</a>
        </div>
      </article>

      <!-- Card 4 -->
      <article class="property-card card">
        <div class="property-card__media">
          <img src="/images/hero.jpg" alt="Property in Houston, TX" loading="lazy">
        </div>

        <div class="property-card__body">
          <div class="property-card__top">
            <div class="property-card__price">$420,000</div>
            <span class="badge-accent">2,100 Sq Ft</span>
          </div>

          <div class="property-card__location">Houston, TX</div>

          <div class="property-card__facts">
            <span class="fact" title="Bedrooms">
              <span class="fact__icon" aria-hidden="true">🛏</span>
              <span class="fact__text">3</span>
            </span>
            <span class="fact" title="Bathrooms">
              <span class="fact__icon" aria-hidden="true">🛁</span>
              <span class="fact__text">2</span>
            </span>
          </div>

          <a class="btn btn-primary property-card__btn" href="<?= url('pages/property-details.php') ?>">View Details</a>
        </div>
      </article>
    </div>
  </div>
</section>

<section class="network">
  <div class="container">
    <div class="network__wrap card">
      <div class="network__text">
        <h2>Land Linker is one of the largest Network...</h2>
        <p>
          Join thousands of users discovering opportunities daily. Post your listing to reach interested
          buyers faster and manage your pipeline from one dashboard.
        </p>
      </div>
      <div class="network__cta">
        <a class="btn btn-primary" href="<?= url('pages/property-details.php') ?>">Post your Listing</a>
        <span class="network__note">Fast • Secure • Trusted</span>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
