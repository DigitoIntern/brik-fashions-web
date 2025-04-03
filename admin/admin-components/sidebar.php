<ul class="nav nav-tabs flex-column bg-dark text-light" style="height: 100vh; position: fixed; width: 200px; left:0px;">
    <li class="nav-item">
        <a class="nav-link <?php echo $current_page == 'dashboard' ? 'active' : ''  ?>" href="/admin">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo $current_page == 'promotions' ? 'active' : ''  ?>"
            href="/admin/promotions">Promotions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo $current_page == 'categories' ? 'active' : ''  ?>"
            href="/admin/categories">Categories</a>
    </li>
</ul>