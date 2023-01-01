<style>
    li.active a {
        background: pink;
        color: #2175bc;
    }
</style>

<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-house"></i><span>Classe</span>
            </a>
        </li><!-- End Classe Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-person"></i><span>Enseignants</span>
            </a>
        </li><!-- End Ensiegnants Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('etudiants.index') }}">
                <i class="bi bi-grid"></i>
                <span>Etudiants</span>
            </a>
        </li><!-- End Etudiants Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-book"></i><span>Matières</span>
            </a>
        </li><!-- End Matières Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-journal-text"></i><span>Niveaux</span>
            </a>
        </li><!-- End Niveaux Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-pen"></i><span>Notes</span>
            </a>
        </li><!-- End Notes Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Parcours</span>
            </a>
        </li><!-- End Parcours Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-pie-chart"></i>
                <span>Statistiques des étudiants</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-bar-chart"></i>
                <span>Statistiques des notes</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Générer un bulletin de notes</span>
            </a>
        </li><!-- End Contact Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
