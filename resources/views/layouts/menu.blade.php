<li class="nav-item has-treeview">
  <a href="{{ route('home') }}" class="nav-link">
    <i class="nav-icon fas "></i>
    <p>
      Home
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('home.kandidat') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Kandidat</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('home.voter') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Voter</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('home.pengaturan') }}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Pengaturan Voting</p>
      </a>
    </li>
  </ul>
</li>


      
