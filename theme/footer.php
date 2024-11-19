<?php if ( !is_front_page() ) : ?>
<picture class="main-bg">
	<source media="(max-width: 480px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-inner-mob-480.webp" />
	<source media="(max-width: 640px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-inner-mob-640.webp" />
	<source media="(max-width: 768px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-inner-mob.webp" />
	<source media="(min-width: 900px)" srcset="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-inner.webp" />
	<img
			src="<?php echo esc_url(get_template_directory_uri()); ?>/img/bg-inner.webp"
			alt="approach"
			loading="lazy"
			width="1080"
			height="4068"
			decoding="async"
			class="main-bg__img"
	/>
</picture>
<?php endif; ?>
</main>
<footer class="footer" role="contentinfo">
   <div class="container">
      Copyright &copy; <?php echo date("Y"); ?> - Dr. Anna Polotskaia. <br> All Rights Reserved.
   </div>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js" type="text/javascript"></script>
<script type="application/ld+json">
[
{
  "@context": "https://schema.org",
  "@type": "Physician",
  "name": "Dr. Anna Polotskaia",
  "description": "Private individual psychotherapy for youth focused on strengths, resilience, and acceptance. Consultations for parents and caregivers based on evidence-based psychological research and practice.",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1-226-499-1776",
    "contactType": "Telephone",
    "areaServed": "Waterloo, Ontario",
    "availableLanguage": "English"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "25 Dupont St E Unit 1",
    "addressLocality": "Waterloo",
    "addressRegion": "ON",
    "postalCode": "N2J 2G8",
    "addressCountry": "CA"
  },
  "url": "https://www.example.com/online-calendar",
  "sameAs": [
    "https://www.anxietycanada.com/",
    "https://www.youtube.com/watch?v=J44e8gpA7fk",
    "https://www.youtube.com/watch?v=eaeIOvmjfVQ",
    "https://www.youtube.com/watch?v=RRMBHQ-Bmk0"
  ],
  "paymentAccepted": "Credit Card, Debit, Health Insurance",
  "areaServed": {
    "@type": "Place",
    "name": "Waterloo, Ontario"
  }
}
,
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "Dr. Anna",
    "address": [
      {
        "@type": "PostalAddress",
        "streetAddress": "25 Dupont St E Unit 1",
        "addressLocality": "Waterloo",
        "addressRegion": "ON",
        "postalCode": "N2J 2G8",
        "addressCountry": "CA"
      }
    ]
  },
  {
    "@context": "http://schema.org",
    "@type": "WPHeader",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "<?php echo esc_url(home_url('/')); ?>"
    }
  },
  {
    "@context": "http://schema.org",
    "@type": "WPFooter",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "name": "Dr. Anna Polotskaia",
    "copyrightYear": "<?php $current_year = date('Y');echo $current_year;?>",
    "copyrightHolder": {
      "@type": "Organization",
      "name": "Dr. Anna Polotskaia"
    },
    "mainEntityOfPage": "<?php echo esc_url(home_url('/')); ?>"
  },
  {
    "@context": "http://schema.org",
    "@type": "WebPage",
    "url": "<?php echo esc_url(home_url('/')); ?>",
    "mainEntity": {
      "@type": "Organization",
      "name": "Dr. Anna Polotskaia",
      "url": "<?php echo esc_url(home_url('/')); ?>",
      "logo": "<?php bloginfo('template_url'); ?>/img/logo.svg",
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+1-226-499-1776",
        "contactType": "Confidential voicemail",
        "areaServed": "CA",
        "availableLanguage": "English"
      },

      "address": [
        {
          "@type": "PostalAddress",
          "streetAddress": "25 Dupont St E Unit 1",
          "addressLocality": "Waterloo",
          "addressRegion": "ON",
          "postalCode": "N2J 2G8",
          "addressCountry": "CA"
        }
      ]
    }
  }
]
</script>
<?php wp_footer(); ?>
</body>
</html>
