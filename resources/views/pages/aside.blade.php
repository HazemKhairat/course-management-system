<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="index.html">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    @if(Auth::user()->type != 'student')
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('user.index')}}">
      <i class="bi bi-person"></i>
      <span>Users</span>
      </a>
    </li><!-- End user Page Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('student.index')}}">
      <i class="bi bi-person"></i>
      <span>Students</span>
      </a>
    </li><!-- End student Page Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('course.index')}}">
      <i class="bi bi-person"></i>
      <span>Course</span>
      </a>
    </li><!-- End course Page Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('round.index')}}">
      <i class="bi bi-person"></i>
      <span>Round</span>
      </a>
    </li><!-- End round Page Nav -->
  @endif

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('project.index')}}">
        <i class="bi bi-person"></i>
        <span>Project</span>
      </a>
    </li><!-- End Profile Page Nav -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('reply.index')}}">
        <i class="bi bi-person"></i>
        <span>Reply</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="{{route('user.profile')}}">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <!-- <li class="nav-item">
      <a class="nav-link collapsed" href="pages-faq.html">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-contact.html">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-register.html">
        <i class="bi bi-card-list"></i>
        <span>Register</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-login.html">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-error-404.html">
        <i class="bi bi-dash-circle"></i>
        <span>Error 404</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-blank.html">
        <i class="bi bi-file-earmark"></i>
        <span>Blank</span>
      </a>
    </li> -->

  </ul>

</aside><!-- End Sidebar-->