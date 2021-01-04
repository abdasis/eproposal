<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    </ol>
                </div>
                <h4 class="page-title"> Dashboard</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a class="weatherwidget-io" href="https://forecast7.com/en/n7d03112d75/bangkalan/" data-label_1="BANGKALAN"
                data-label_2="Cuaca Saat Ini" data-theme="original">BANGKALAN Cuaca Saat Ini</a>
        </div>
        <div class="col-12 py-3">
            <h1>Selamat Datang di SIRASTI <div class="badge badge-danger shadow-none">{{ Auth::user()->name }}</div>
            </h1>
        </div>
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header bg-white border-bottom">Projek PEL Terbaru</h5>
                <table class="table card-body table-sm ">
                    <thead class="bg-light">
                        <tr>
                            <th class="text-center">No</th>
                            <th>Projek</th>
                            <th>Dibuat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataProposal as $key => $proposal)
                        <tr>
                            <td class="text-center align-middle" scope="row">{{ $key+1 }}</td>
                            <td class="align-middle">{{ Str::upper($proposal->judul) }}</td>
                            <td class="align-middle">
                                <div class="badge badge-success shadow-none">
                                    {{ Carbon\Carbon::parse($proposal->created_at)->format('d-m-y') }}</div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-12">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                    <i class="fe-shopping-bag font-22 avatar-title text-danger"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="mt-1"><span
                                            data-plugin="counterup">{{ App\Models\Proposal::all()->count() }}</span>
                                    </h3>
                                    <p class="text-muted mb-1 text-truncate">Total Projek</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->

                <div class="col-12">
                    <div class="widget-rounded-circle card-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-soft-secondary border-secondary border">
                                    <i class="fe-users font-22 avatar-title text-secondary"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-right">
                                    <h3 class="mt-1"><span
                                            data-plugin="counterup">{{ App\Models\Anggota::all()->count() }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Stak Holder</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end widget-rounded-circle-->
                </div> <!-- end col-->
            </div>
        </div>
    </div>

</div>

@push('js')
<script>
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
@endpush
