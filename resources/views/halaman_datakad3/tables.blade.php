@extends('halaman_dashboard.index')
@section('fiture')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Data Komputerasi Akutansi D3</h4>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="ti-plus btn-icon-prepend"></i>Tambah Data
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">KAD3 TABLE</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Gambar
                                        </th>
                                        <th>
                                            Full name
                                        </th>
                                        <th>
                                            Progress
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                            Deadline
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces/face1.jpg" alt="image" />
                                        </td>
                                        <td>
                                            Herman Beck
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            $ 77.99
                                        </td>
                                        <td>
                                            May 15, 2015
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces/face2.jpg" alt="image" />
                                        </td>
                                        <td>
                                            Messsy Adam
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            $245.30
                                        </td>
                                        <td>
                                            July 1, 2015
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces/face3.jpg" alt="image" />
                                        </td>
                                        <td>
                                            John Richards
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            $138.00
                                        </td>
                                        <td>
                                            Apr 12, 2015
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces/face4.jpg" alt="image" />
                                        </td>
                                        <td>
                                            Peter Meggik
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            $ 77.99
                                        </td>
                                        <td>
                                            May 15, 2015
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces/face5.jpg" alt="image" />
                                        </td>
                                        <td>
                                            Edward
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%"
                                                    aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            $ 160.25
                                        </td>
                                        <td>
                                            May 03, 2015
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces/face6.jpg" alt="image" />
                                        </td>
                                        <td>
                                            John Doe
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%"
                                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            $ 123.21
                                        </td>
                                        <td>
                                            April 05, 2015
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../images/faces/face7.jpg" alt="image" />
                                        </td>
                                        <td>
                                            Henry Tom
                                        </td>
                                        <td>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td>
                                            $ 150.00
                                        </td>
                                        <td>
                                            June 16, 2015
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
