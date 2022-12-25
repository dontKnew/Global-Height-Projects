<?php include "header.php" ?>
<section id="saasio-breadcurmb" class="saasio-breadcurmb-section">
            <div class="container">
               <div class="row align-items-center justify-content-between">
<div class="col-lg-6 col-md-6 col-12">
                    <div class="app-tra-section-title  app-tra-headline  pera-content">
					 <h2 class="text-warning">PRINCE2 FOUNDATION & PRACTITIONER CERTIFICATION TRAINING</h2>
                    
                        <span class="title-tag text-dark">PRINCE2® Certification is a globally recognized credential for Project Managers that ensures great Project Management skills to grow both professionally and financially. This 4-Days live Instructor-led PRINCE2 Certification by Invensis Learning is accredited by AXELOS, and provides live online training along with PRINCE2 Certification Exam cost. The two levels of PRINCE2 project management certifications - PRINCE2 Foundation & PRINCE2 Practitioner will be covered in the training.

<div class="man_coubtn mt-3">
							<a href="#" class="theme_enrbtn">View Training Dates & Prices <i class="fa fa-long-arrow-alt-right"></i></a>
							</div>
</span>
<ul class="man_certi">
<li><img src="assets/img/certi1.png" alt=""></li>
<li><i class="fab fa-google text-danger"></i> &nbsp; 4.8/5</li>
<li><i class="fab fa-facebook-f"></i> &nbsp; 4.5/5</li>
<li><i class="fa fa-star text-success"></i> &nbsp; 4.7/5</li>
</ul>
                       </div>
					</div>
					
<div class="col-lg-6 col-md-6 col-12">
<img src="assets/images/cpt.svg" class="img-fluid" alt="">
</div>
					
					</div>
         </div>
     </section>
	 
	<main>
  <div>
    <h1>Smooth Scrolling Sticky ScrollSpy Navigation</h1>
    <p><em>Want an explanation of how this works?<br />&rarr; <a href="https://www.bram.us/2020/01/10/smooth-scrolling-sticky-scrollspy-navigation/" target="_top">https://www.bram.us/2020/01/10/smooth-scrolling-sticky-scrollspy-navigation/</a></em></p>
    <section id="introduction">
      <h2>Introduction</h2>
      <p>…</p>
    </section>
    <section id="request-response">
      <h2>Request &amp; Response</h2>
      <p>…</p>
    </section>
    <section id="authentication">
      <h2>Authentication</h2>
      <p>…</p>
    </section>
    <section id="endpoints">
      <h2>Endpoints</h2>
      <section id="endpoints--root">
        <h3>Root</h3>
        <p>…</p>
      </section>
      <section id="endpoints--cities-overview">
        <h3>Cities Overview</h3>
        <p>…</p>
      </section>
      <section id="endpoints--city-detail">
        <h3>City Detail</h3>
        <p>…</p>
      </section>
      <section id="endpoints--city-config">
        <h3>City Config</h3>
        <p>…</p>
      </section>
      <section id="endpoints--city-spots-overview">
        <h3>City Spots Overview</h3>
        <p>…</p>
      </section>
      <section id="endpoints--city-spot-detail">
        <h3>City Spot Detail</h3>
        <p>…</p>
      </section>
      <section id="endpoints--city-icons-overview">
        <h3>City Icons Overview</h3>
        <p>…</p>
      </section>
      <section id="endpoints--city-icon-detail">
        <h3>City Icon Detail</h3>
        <p>…</p>
      </section>
    </section>
    <section id="links">
      <h2>Links</h2>
      <p>…</p>
    </section>
    <section id="expanders">
      <h2>Expanders</h2>
      <p>…</p>
    </section>
    <section id="filters">
      <h2>Filters</h2>
      <p>…</p>
    </section>
  </div>
  <nav class="section-nav">
    <ol>
      <li><a href="#introduction">Introduction</a></li>
      <li><a href="#request-response">Request &amp; Response</a></li>
      <li><a href="#authentication">Authentication</a></li>
      <li><a href="#endpoints">Endpoints</a>
        <ul>
          <li class=""><a href="#endpoints--root">Root</a></li>
          <li class=""><a href="#endpoints--cities-overview">Cities Overview</a></li>
          <li class=""><a href="#endpoints--city-detail">City Detail</a></li>
          <li class=""><a href="#endpoints--city-config">City Config</a></li>
          <li class=""><a href="#endpoints--city-spots-overview">City Spots Overview</a></li>
          <li class=""><a href="#endpoints--city-spot-detail">City Spot Detail</a></li>
          <li class=""><a href="#endpoints--city-icons-overview">City Icons Overview</a></li>
          <li class=""><a href="#endpoints--city-icon-detail">City Icon Detail</a></li>
        </ul>
      </li>
      <li class=""><a href="#links">Links</a></li>
      <li class=""><a href="#expanders">Expanders</a></li>
      <li class=""><a href="#filters">Filters</a></li>
    </ol>
  </nav>
</main>
<style>
/* 1. Enable smooth scrolling */
html {
  scroll-behavior: smooth;
}

/* 2. Make nav sticky */
main > nav {
  position: sticky;
  top: 2rem;
  align-self: start;
}

/* 3. ScrollSpy active styles (see JS tab for activation) */
.section-nav li.active > a {
  color: #333;
  font-weight: 500;
}

/* Sidebar Navigation */
.section-nav {
  padding-left: 0;
  border-left: 1px solid #efefef;
}

.section-nav a {
  text-decoration: none;
  display: block;
  padding: .125rem 0;
  color: #ccc;
  transition: all 50ms ease-in-out; /* 💡 This small transition makes setting of the active state smooth */
}

.section-nav a:hover,
.section-nav a:focus {
  color: #666;
}

/** Poor man's reset **/
* {
  box-sizing: border-box;
}

html, body {
  background: #fff;
}

body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
}

ul, ol {
  list-style: none;
  margin: 0;
  padding: 0;
}
li {
  margin-left: 1rem;
}

h1 {
  font-weight: 300;
}

/** page layout **/
main {
  display: grid;
  grid-template-columns: 1fr 15em;
  max-width: 100em;
  width: 90%;
  margin: 0 auto;
}

/** enlarge the sections for this demo, so that we have a long scrollable page **/
section {
  padding-bottom: 20rem;
}
</style>
<script>
window.addEventListener('DOMContentLoaded', () => {

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const id = entry.target.getAttribute('id');
      if (entry.intersectionRatio > 0) {
        document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.add('active');
      } else {
        document.querySelector(`nav li a[href="#${id}"]`).parentElement.classList.remove('active');
      }
    });
  });

  // Track all sections that have an `id` applied
  document.querySelectorAll('section[id]').forEach((section) => {
    observer.observe(section);
  });
  
});
</script>
<?php include "footer.php" ?>

  