                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('dashboard') }}">
                              <span class="nav-link-title">Home</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('Beranda') }}">
                              <span class="nav-link-title">Beranda</span>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('artikel') }}">
                              <span class="nav-link-title">Artikel</span>
                          </a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown"
                              data-bs-auto-close="outside" role="button" aria-expanded="false">
                              <span class="nav-link-title">Help</span>
                          </a>
                          <div class="dropdown-menu">
                              <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
                                  Documentation
                              </a>
                              <a class="dropdown-item" href="./changelog.html">
                                  Changelog
                              </a>
                          </div>
                      </li>
                  </ul>
