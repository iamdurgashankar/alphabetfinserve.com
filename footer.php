<?php
/**
 * The template for displaying the footer
 *
 * @package Alphabet_Finserve
 */

$logo_url = get_theme_mod('custom_logo');
if ($logo_url) {
    $logo_url = wp_get_attachment_image_url($logo_url, 'full');
} else {
    $logo_url = get_template_directory_uri() . '/assets/images/logo-alphabet-final-CQvIlwWI.png';
}
?>

    <footer id="colophon" class="bg-footer text-text-dark pt-16 pb-8">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Branding -->
                <div class="space-y-6">
                    <div class="inline-flex items-center justify-center transition-all duration-300">
                        <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" class="w-auto h-14 object-contain" />
                    </div>
                    <p class="text-text-light leading-relaxed">
                        Alphabet Finserve Consultancy FZE LLC is a dynamic and forward-thinking consultancy firm, established to provide comprehensive business solutions across diverse industries.
                    </p>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="font-heading text-lg font-semibold mb-6 text-text-heading">Company</h4>
                    <ul class="space-y-4">
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>" class="text-text-light hover:text-primary transition-colors">About Us</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-text-light hover:text-primary transition-colors">Services</a></li>
                        <li><a href="<?php echo esc_url(home_url('/products')); ?>" class="text-text-light hover:text-primary transition-colors">Products</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="font-heading text-lg font-semibold mb-6 text-text-heading">Services</h4>
                    <ul class="space-y-4">
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-text-light hover:text-primary transition-colors">Commercial Brokerage</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-text-light hover:text-primary transition-colors">IT Consultancy</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-text-light hover:text-primary transition-colors">Banking Consultancy</a></li>
                        <li><a href="<?php echo esc_url(home_url('/services')); ?>" class="text-text-light hover:text-primary transition-colors">Management Consultancies</a></li>
                    </ul>
                </div>

                <!-- Connect -->
                <div>
                    <h4 class="font-heading text-lg font-semibold mb-6 text-text-heading">Connect</h4>
                    <ul class="space-y-4">
                        <li><span class="text-text-light block">BC-888648 26th Floor,<br />Amber Gem Tower, Ajman UAE</span></li>
                        <li><a href="tel:+971523572566" class="text-text-light hover:text-primary transition-colors flex items-center gap-2">+971 52 3572566</a></li>
                        <li><a href="mailto:info@alphabetfinserve.com" class="text-text-light hover:text-primary transition-colors flex items-center gap-2">info@alphabetfinserve.com</a></li>
                        <li class="flex gap-4 mt-4 pt-4 border-t border-border">
                            <a href="#" class="text-text-light hover:text-primary transition-colors" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect width="4" height="12" x="2" y="9"/><circle cx="4" cy="4" r="2"/></svg>
                            </a>
                            <a href="#" class="text-text-light hover:text-primary transition-colors" aria-label="Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter"><path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"/></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-border pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-text-muted text-sm">&copy; <?php echo date('Y'); ?> Alphabet Finserve Consultancy FZE LLC. All rights reserved.</p>
                <div class="flex gap-6 text-sm text-text-muted">
                    <a href="<?php echo esc_url(home_url('/privacy-policy')); ?>" class="hover:text-text-dark transition-colors">Privacy Policy</a>
                    <span>|</span>
                    <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>" class="hover:text-text-dark transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Cookie Consent Banner -->
<div id="cookie-consent" class="fixed bottom-0 left-0 right-0 bg-white border-t border-border shadow-lg p-4 z-[99999] hidden animate-fade-in-up">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        <p class="text-sm text-text-light text-center md:text-left">
            We use cookies to enhance your experience. By continuing to visit this site you agree to our use of cookies.
        </p>
        <div class="flex gap-4">
            <button id="accept-cookies" class="px-6 py-2 bg-primary text-white text-sm font-bold rounded-md hover:bg-primary-dark transition-all transform hover:-translate-y-0.5 shadow-sm">
                Accept
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    setTimeout(function() {
        if (!localStorage.getItem('cookieConsent')) {
            const banner = document.getElementById('cookie-consent');
            if (banner) {
                banner.classList.remove('hidden');
            }
        }
    }, 1500);

    const acceptBtn = document.getElementById('accept-cookies');
    if (acceptBtn) {
        acceptBtn.addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'true');
            const banner = document.getElementById('cookie-consent');
            if (banner) {
                banner.classList.add('hidden');
            }
        });
    }
});
</script>

<style>
@keyframes fade-in-up {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}
.animate-fade-in-up {
  animation: fade-in-up 0.5s ease-out forwards;
}

/* Success Stories Title Color Reinforcement */
.alphabet-case-study-card h3 {
  color: #ffffff !important;
}
</style>

</body>
</html>
