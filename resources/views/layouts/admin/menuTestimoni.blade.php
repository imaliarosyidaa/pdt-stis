<x-app-layout>
  <script>
    function showModal() {
      event.preventDefault();
      $('#exampleModal').modal('show');
    }

    function updateButton() {
      $('#exampleModal').modal('hide');
    }

    function showModal2() {
      event.preventDefault();
      $('#exampleModal2').modal('show');
    }

    function updateButton2() {
      $('#exampleModal2').modal('hide');
      document.getElementById('hapusTestimoniForm').submit();
    }
  </script>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            </div>
            <div class="modal-body">
              Data berhasil ditampilkan di halaman utama
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="updateButton()">OK</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            </div>
            <div class="modal-body">
              Apakah data ingin dihapus?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="updateButton2()">OK</button>
            </div>
          </div>
        </div>
      </div>
      <!--  Header Start -->
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-semibold">Tabel Testimoni dan Feedback</h5>
                <div class="d-flex align-items-center">
                  <div class="dropdown me-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="sortingDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      Urut dari yang terbaru
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="sortingDropdown">
                      <li><a class="dropdown-item" href="#">Urut dari yang terbaru</a></li>
                      <li><a class="dropdown-item" href="#">Urut dari yang terlama</a></li>
                    </ul>
                  </div>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari tahun pendaftaran" aria-label="Search" aria-describedby="searchButton">
                    <button class="btn btn-primary" type="button" id="searchButton">Cari</button>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">User ID</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Testimoni</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Feedback</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>

                    <tbody>
                      @foreach ($feedback as $f)
                      <tr>
                        <td class="border-bottom-0">{{ $f->id_user}}</td>
                        <td class="border-bottom-0">{{ $f->testimoni}}</td>
                        <td class="border-bottom-0">{{ $f->feedback}}</td>
                        <!-- <td class="border-bottom-0">{{ $f->status}}</td> -->
                        <td class="border-bottom-0">
                          <form method="post" action="{{ route('feedback.editview', ['id' => $f->id]) }}">
                            @csrf
                            <input type="hidden" name="status" value="{{ $f->status }}">
                            <button type="submit" name="tampilkan" class="btn btn-primary mr-2" id="tampilkanButton" onclick="showModal()">Tampilkan</button>
                          </form>
                        </td>

                        <td class="border-bottom-0">
                          <form id="hapusTestimoniForm" method="post" action="{{ route('feedback.hapusTestimoni', ['id' => $f->id]) }}">
                            @csrf
                            <input type="hidden" name="status" value="{{ $f->status }}">
                            <button type="submit" name="tampilkan" class="btn btn-primary mr-2" id="tampilkanButton" onclick="showModal2()">Hapus</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>