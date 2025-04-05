<footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.youtube.com/@itrsudh.abdulazizmarabahan" class="font-weight-bold" target="_blank">IT RSHAA</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  
</body>

</html>

<!-- Kumpulan script -->
<!-- Chart.js Capaian Pengiriman Antrol di Dashboard-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- DataTables -->
<script>
  $(document).ready(function() {
      $('#antrolTable').DataTable({
          dom: 'Bfrtip',
          buttons: [
              {
                  extend: 'copy',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'csv',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'excel',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'pdf',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'print',
                  className: 'btn btn-sm btn-primary'
              }
          ],
          language: {
              search: "",
              searchPlaceholder: "Search..."
          },
          pageLength: 10,
          ordering: true,
          responsive: true
      });
  });
</script>
<script>
  $(document).ready(function() {
      $('#antrolTable2').DataTable({
          dom: 'Bfrtip',
          buttons: [
              {
                  extend: 'copy',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'csv',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'excel',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'pdf',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'print',
                  className: 'btn btn-sm btn-primary'
              }
          ],
          language: {
              search: "",
              searchPlaceholder: "Search..."
          },
          pageLength: 10,
          ordering: true,
          responsive: true
      });
  });
</script>
<script>
  $(document).ready(function() {
      $('#taskidTable').DataTable({
          dom: 'Bfrtip',
          buttons: [
              {
                  extend: 'copy',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'csv',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'excel',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'pdf',
                  className: 'btn btn-sm btn-primary'
              },
              {
                  extend: 'print',
                  className: 'btn btn-sm btn-primary'
              }
          ],
          language: {
              search: "",
              searchPlaceholder: "Search..."
          },
          pageLength: 10,
          ordering: true,
          responsive: true
      });
  });
</script>
<script>
    const ctxCapaian = document.getElementById('capaianChart').getContext('2d');

    const chartAntrol = <?= $chartData ?>;

    // Gradient Background
    const gradient = ctxCapaian.createLinearGradient(0, 0, 0, 200);
    gradient.addColorStop(0, 'rgba(66, 133, 244, 0.4)');
    gradient.addColorStop(1, 'rgba(255, 255, 255, 0)');

    const persenSudah = chartAntrol.sudah.map((sudah, i) => {
        const total = chartAntrol.belum[i];
        return total > 0 ? ((sudah / total) * 100).toFixed(2) : 0;
    });

    new Chart(ctxCapaian, {
        type: 'line',
        data: {
            labels: chartAntrol.labels,
            datasets: [
                {
                    label: 'Capaian Antrol (%)',
                    data: persenSudah,
                    borderColor: '#4285F4',
                    backgroundColor: gradient,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3, 
                    pointHoverRadius: 5, 
                },
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false, 
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom', 
                },
                tooltip: {
                    enabled: true,
                    callbacks: {
                        label: function (tooltipItem) {
                            return tooltipItem.raw + '%';
                        },
                    },
                },
            },
            scales: {
                x: {
                    grid: {
                        display: false,
                    },
                },
                y: {
                    grid: {
                        color: 'rgba(0, 0, 0, 0.05)',
                    },
                    beginAtZero: true,
                },
            },
        },
    });
</script>


<script>
    const chartTaskid = <?= $chart_pengirim ?>;
    const ctxPengirim = document.getElementById('chartPengirimPerBulan').getContext('2d');

    // Gradient Backgrounds
    const gradientRajif = ctxPengirim.createLinearGradient(0, 0, 0, 300);
    gradientRajif.addColorStop(0, 'rgba(66, 133, 244, 0.4)');
    gradientRajif.addColorStop(1, 'rgba(255, 0, 0, 0)');

    const gradientAqli = ctxPengirim.createLinearGradient(0, 0, 0, 300);
    gradientAqli.addColorStop(0, 'rgba(82, 34, 192, 0.4)');
    gradientAqli.addColorStop(1, 'rgba(255, 255, 255, 0)');

    const gradientFaiq = ctxPengirim.createLinearGradient(0, 0, 0, 300);
    gradientFaiq.addColorStop(0, 'rgba(28, 12, 73, 0.37)');
    gradientFaiq.addColorStop(1, 'rgba(255, 255, 255, 0)');

    new Chart(ctxPengirim, {
        type: 'line',
        data: {
            labels: chartTaskid.labels,
            datasets: [
                {
                    label: 'Rajif',
                    data: chartTaskid.rajif,
                    borderColor: '#4285F4',
                    backgroundColor: gradientRajif,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3,
                    pointHoverRadius: 5
                },
                {
                    label: 'Aqli',
                    data: chartTaskid.aqli,
                    borderColor: '#172b4d',
                    backgroundColor: gradientAqli,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3,
                    pointHoverRadius: 5
                },
                {
                    label: 'Faiq',
                    data: chartTaskid.faiq,
                    borderColor: '#5e72e4',
                    backgroundColor: gradientFaiq,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 3,
                    pointHoverRadius: 5
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                },
                tooltip: {
                    enabled: true
                },
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0,0,0,0.05)'
                    }
                }
            }
        }
    });
</script>

<!-- Script for Pie Chart -->
<script>
    var pieData = {
        labels: ["Sudah Terkirim Diana", "Sudah Terkirim Bobby"],
        datasets: [{
            data: [<?= $sudah_terkirim_diana; ?>, <?= $sudah_terkirim_bobby; ?>],
            backgroundColor: ["#172b4d", "#5e72e4"],
        }]
    };
    var pieOptions = {
        responsive: true,
        maintainAspectRatio: false,
    };
    var ctxPie = document.getElementById('pieChartUser').getContext('2d');
    var myPieChart = new Chart(ctxPie, {
        type: 'doughnut',
        data: pieData,
        options: pieOptions,
    });
</script>

<!-- Script submenu Tables -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  var menuToggle = document.getElementById("tablesMenuToggle");
  var submenu = document.getElementById("tablesSubmenu");
  var chevron = document.getElementById("tablesChevron");

  menuToggle.addEventListener("click", function(event) {
    event.preventDefault();
    submenu.classList.toggle("show");
    chevron.classList.toggle("rotate-180");
    menuToggle.classList.toggle("active");
  });

  document.querySelectorAll("#tablesSubmenu .nav-link").forEach(function(link) {
    link.addEventListener("click", function(event) {
      document.querySelectorAll("#tablesSubmenu .nav-link").forEach(el => el.classList.remove("active", "bg-gradient-primary", "text-white"));
      this.classList.add("active", "bg-gradient-primary", "text-white");

      event.stopPropagation();
    });
  });
});
</script>
<!-- Script toggle sidebar  -->
<script>
document.getElementById("toggleSidebar").addEventListener("click", function () {
  const sidebar = document.getElementById("sidenav-main");
  sidebar.classList.toggle("hidden");
  sidebar.classList.toggle("active");

  document.body.classList.toggle("sidebar-open");
  document.body.classList.toggle("sidebar-hidden");
});
</script>