<body class="bg-dark-custom" style="font-family: 'Poppins', sans-serif; position: relative; overflow: hidden;">

  <!-- Flying Letters Animation -->
  <div id="flying-letters-container"></div>

  <!-- Loading Animation -->
  <div id="loading-animation" class="d-none">
    <div class="loading-container">
      <div class="loading-letter">
        <img src="./assets/1.png" alt="Server Icon" style="width: 5rem; height: 5rem;">
      </div>
      <div class="loading-letter">
        <img src="./assets/2.png" alt="Cloud Icon" style="width: 6rem; height: 6rem;">
      </div>
      <div class="loading-letter">
        <img src="./assets/3.png" alt="Code Icon" style="width: 5rem; height: 5rem;">
      </div>
    </div>
  </div>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5" style="border-radius: 15px; background-color: #1e1e2f;">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 bg-dark-logo text-center d-flex justify-content-center align-items-center" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;">
                <img src="./assets/rso.png" alt="Logo Anos" class="img-fluid" style="max-height: 130%; max-width: 130%; object-fit: contain;">
              </div>
              <div class="col-lg-6" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px; background-color: #2a2a3c;">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-light mb-4" style="font-weight: 600;">Selamat Datang</h1>
                    <p class="text-muted mb-4">Silahkan login untuk melanjutkan</p>
                  </div>
                  <?php
                  if ($this->session->flashdata('message')) {
                    echo '<div class="alert alert-danger" role="alert">' . $this->session->flashdata('message') . '</div>';
                  }
                  ?>
                  <form class="user" method="post" action="<?= base_url('auth') ?>" onsubmit="showLoadingAnimation(event)">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control form-control-user bg-dark-input text-light" id="username" name="username" placeholder="Masukkan Username Anda..." value="<?= set_value('username'); ?>" required>
                      </div>
                      <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text bg-primary text-white"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control form-control-user bg-dark-input text-light" id="password" name="password" placeholder="Masukkan Password Anda..." required>
                      </div>
                      <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block" style="font-weight: 600; border-radius: 25px;">
                      Login
                    </button>
                    <hr>
                    <div class="text-center">
                      <!-- <a class="small text-primary" href="<?= base_url('auth/forgot_password') ?>">Lupa Password?</a> -->
                    </div>
                    <div class="text-center">
                      <!-- <a class="small text-primary" href="<?= base_url('auth/register') ?>">Buat Akun Baru</a> -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  <!-- Custom Styles -->
  <style>
    .bg-dark-custom {
      background: linear-gradient(135deg, #121212, #1e1e2f);
    }

    .btn-primary:hover {
      background-color: #2575fc;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }

    .bg-dark-logo {
      background: #1e1e2f;
    }

    .bg-dark-input {
      background-color: #2a2a3c;
      border: 1px solid #444;
    }

    .bg-dark-input:focus {
      border-color: #2575fc;
      box-shadow: 0 0 5px #2575fc;
    }

    /* Flying Letters Animation */
    #flying-letters-container {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      overflow: hidden;
    }

    .flying-letter {
      position: absolute;
      font-size: 1.5rem;
      color: rgba(255, 255, 255, 0.8);
      animation: fly 10s linear infinite;
    }

    @keyframes fly {
      0% {
        transform: translateY(100vh) rotate(0deg);
        opacity: 1;
      }
      100% {
        transform: translateY(-10vh) rotate(360deg);
        opacity: 0;
      }
    }

    /* Loading Animation */
    #loading-animation {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .loading-container {
      display: flex;
      gap: 1rem;
    }

    .loading-letter {
      font-size: 2rem;
      color: white;
      animation: bounce 1.5s infinite;
    }

    .loading-letter:nth-child(2) {
      animation-delay: 0.3s;
    }

    .loading-letter:nth-child(3) {
      animation-delay: 0.6s;
    }

    @keyframes bounce {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-20px);
      }
    }
  </style>

  <!-- Flying Script -->
  <script>
    const container = document.getElementById('flying-letters-container');
    const letters = [
      '<img src="./assets/heart.png" alt="Server Icon" style="width: 1rem; height: 1rem;">',
      '<img src="./assets/heart.png" alt="Server Icon" style="width: 2rem; height: 2rem;">',
      '<img src="./assets/heart.png" alt="Cloud Icon" style="width: 3rem; height: 3rem;">',
    ];

    function createFlyingLetter() {
      const letter = document.createElement('div');
      letter.className = 'flying-letter';
      letter.innerHTML = letters[Math.floor(Math.random() * letters.length)];
      letter.style.left = Math.random() * 100 + 'vw';
      letter.style.animationDuration = Math.random() * 5 + 5 + 's';
      container.appendChild(letter);

      setTimeout(() => {
        letter.remove();
      }, 10000);
    }

    setInterval(createFlyingLetter, 500);
  </script>

  <!-- Loading Animation Script -->
  <script>
    function showLoadingAnimation(event) {
      event.preventDefault(); // Prevent form submission for demo purposes
      document.getElementById('loading-animation').classList.remove('d-none');
      setTimeout(() => {
        event.target.submit(); // Submit the form after showing animation
      }, 2000); // Simulate a delay of 2 seconds
    }
  </script>
</body>
