<footer class="footer" style="background-color: #f8f9fa; padding: 1rem 0;">
    <div class="container">
        <div class="d-sm-flex justify-content-between align-items-center">
            <!-- Copyright -->
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
                Copyright © <a href="https://www.bimboilori.com/" target="_blank"
                    style="color: #6c757d; text-decoration: none;">bimboilori.com</a> {{ now()->year }}
            </span>
            <!-- Livewire Current Date -->
            <div class="text-center mt-3">
                @livewire('superadmin.current-date')
            </div>
            <!-- Designer Credit -->
            <span class="text-muted text-center mt-2 mt-sm-0">
                Designed by: <a href="https://sites.google.com/view/thaddeaus-samuel/home" target="_blank"
                    style="color: #6c757d; text-decoration: none;">Unique Graphics</a>
            </span>
        </div>


    </div>
</footer>
