<footer>
    <div class="main_container">
        <hr class="footer_line">
        <div class="footer_links">
            <div class="site_link">
                <ul>
                    {{-- Ciclo array creato su Vue --}}
                    <li v-for="link in footerLinks">
                        <a href="">@{{link}}</a>
                    </li>
                </ul>
            </div>
            <div class="social_link"></div>
        </div>
    </div>
</footer>