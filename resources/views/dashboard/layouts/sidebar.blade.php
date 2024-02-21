<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
  <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard/student">
                      <i class="bi bi-person"></i> <!-- Icon Bootstrap -->
                      Student
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/kelas">
                      <i class="bi bi-calendar"></i> <!-- Icon Bootstrap -->
                      Class
                  </a>
              </li>
          </ul>

          <hr class="my-3">

          <ul class="nav flex-column mb-auto">
              <li class="nav-item">
                  <form action="/auth/logout" method="POST">
                      @csrf
                      <button class="btn btn-danger btn-sm"> <!-- Tombol warna merah menggunakan kelas btn-danger -->
                          <i class="bi bi-box-arrow-right"></i> <!-- Icon Bootstrap -->
                          Sign out
                      </button>
                  </form>
              </li>
          </ul>
      </div>
  </div>
</div>
