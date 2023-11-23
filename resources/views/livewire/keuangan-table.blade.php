<div class="container-fluid">
    <div class="container-fluid">
      <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-semibold">Laporan Keuangan</h5>
                <div class="d-flex align-items-center">
                    <div class="dropdown me-3">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="sortingDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Urut dari yang terbaru
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="sortingDropdown">
                            <li><a class="dropdown-item" href="#">Urut dari yang terbaru</a></li>
                            <li><a class="dropdown-item" href="#">Urut dari yang terlama</a></li>
                        </ul>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari tahun donasi" aria-label="Search" aria-describedby="searchButton">
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
                        <h6 class="fw-semibold mb-0">Tanggal</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Jenis Keuangan</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Deskripsi</h6>
                      </th>
                      <th class="border-bottom-0">
                        <h6 class="fw-semibold mb-0">Nominal</h6>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($keuangan as $keuangan)
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">{{ $keuangan->created_at->format('H:i:s | j F Y') }}</h6></td>
                              <td class="border-bottom-0">
                                  <p class="mb-0 fw-normal">{{ $keuangan->tipe }}</p>
                              </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{ $keuangan->name }}</h6>                         
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $keuangan->debit }}</p>
                            </td>
                        </tr>                            
                  </tbody>
                  @endforeach
                </table>
            </div>
        </div>
        <div class="button-container">
          <button class="btn btn-primary" id="pemasukanButton">Pemasukan</button>
          <button class="btn btn-primary" id="pengeluaranButton">Pengeluaran</button>
        </div>
        </div>
    </div>
  </div>
    {{-- <div class="d-flex justify-content-end">
      {{ $keuangan->links('livewire.custom-pagination-links') }}
  </div> --}}
</div>