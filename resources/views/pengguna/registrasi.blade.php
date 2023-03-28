<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ 'assets/img/apple-icon.png' }}">
    <link rel="icon" type="image/png" href="{{ 'assets/img/favicon.png' }}">
    <title>
        Aplikasi Pengaduan Masyarakat
    </title>


    <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard" />

    <meta name="keywords"
        content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, Soft UI Dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, free dashboard, free admin dashboard, free bootstrap 5 admin dashboard">
    <meta name="description"
        content="Soft UI Dashboard is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Soft UI Dashboard by Creative Tim">
    <meta name="twitter:description"
        content="Soft UI Dashboard is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/450/original/opt_sd_free_thumbnail.png">

    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Soft UI Dashboard by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://demos.creative-tim.com/soft-ui-dashboard/examples/dashboard.html" />
    <meta property="og:image"
        content="https://s3.amazonaws.com/creativetim_bucket/products/450/original/opt_sd_free_thumbnail.png" />
    <meta property="og:description"
        content="Soft UI Dashboard is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful and organized. If you are looking for a tool to manage and visualize data about your business, this dashboard is the thing for you." />
    <meta property="og:site_name" content="Creative Tim" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="{{ 'assets/css/nucleo-icons.css' }}" rel="stylesheet" />
    <link href="{{ 'assets/css/nucleo-svg.css' }}" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ 'assets/css/nucleo-svg.css' }}" rel="stylesheet" />

    <link id="pagestyle" href="{{ 'assets/css/soft-ui-dashboard.min.css?v=1.0.7' }}" rel="stylesheet" />

    <!-- <style>
        .async-hide {
            opacity: 0 !important
        }
    </style>
    <script>
        (function(a, s, y, n, c, h, i, d, e) {
            s.className += ' ' + y;
            h.start = 1 * new Date;
            h.end = i = function() {
                s.className = s.className.replace(RegExp(' ?' + y), '')
            };
            (a[n] = a[n] || []).hide = h;
            setTimeout(function() {
                i();
                h.end = null
            }, c);
            h.timeout = c;
        })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
            'GTM-K9BGS8K': true
        });
    </script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46172202-22', 'auto', {
            allowLinker: true
        });
        ga('set', 'anonymizeIp', true);
        ga('require', 'GTM-K9BGS8K');
        ga('require', 'displayfeatures');
        ga('require', 'linker');
        ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
    </script>


    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script> -->

</head>

<body class="">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <main class="main-content  mt-0">
      <section class="min-vh-100 mb-8">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('../assets/img/curved-images/curved14.jpg');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Selamat datang!</h1>
                        <p class="text-lead text-white">Gunakan formulir luar biasa ini untuk masuk atau membuat akun baru di proyek Anda secara gratis</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10">
                <div class="col-xl-8 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">
                        <div class="card-header text-center pt-4">
                            <h5>Daftar</h5>
                        </div>
                        <div class="card-body">
                          <form role="form" action="{{ route('simpanregistrasi') }}" method="post">
                            @csrf
                            <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                      <label for="example-date-input" class="form-control-label">NIK</label>
                                      <input class="form-control" name="nik" type="number"
                                          id="example-date-input" autocomplete="off">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-date-input" class="form-control-label">Nama</label>
                                    <input type="text" name="nama" class="form-control"
                                        id="exampleFormControlInput1"  autocomplete="off">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input"
                                        class="form-control-label">Email</label>
                                    <input class="form-control" name="email" type="email"
                                        id="example-date-input"  autocomplete="off">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input"
                                        class="form-control-label">Password</label>
                                    <input class="form-control" name="password" type="password"
                                        id="example-date-input">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Jenis
                                          Kelamin</label>
                                      <div style="display:flex;">
                                          <div class="form-check" style="margin-right: 20px">
                                              <input class="form-check-input" type="radio" value="laki-laki"
                                                  name="jenkel" id="laki-laki">
                                              <label class="custom-control-label" for="laki-laki">Laki-laki</label>
                                          </div>
                                          <div class="form-check">
                                              <input class="form-check-input" type="radio" value="perempuan"
                                                  name="jenkel" id="perempuan">
                                              <label class="custom-control-label" for="perempuan">Perempuan</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control"
                                            id="exampleFormControlInput1"  autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">RT</label>
                                        <input type="text" name="rt" class="form-control"
                                            id="exampleFormControlInput1"  autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-date-input" class="form-control-label">RW</label>
                                        <input type="text" name="rw" class="form-control"
                                            id="exampleFormControlInput1"  autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Kode Pos</label>
                                        <input type="number" name="kode_pos" class="form-control"
                                            id="exampleFormControlInput1"  autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Provinsi</label>
                                        <select class="form-control" id="provinsi" name="province_id">
                                            <option value="">Pilih Provinsi</option>
                                            @foreach ($provinces as $p)
                                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-date-input"
                                            class="form-control-label">Kota/Kabupaten</label>
                                        <select class="form-control" id="kabupaten" name="regency_id">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Kecamatan</label>
                                        <select class="form-control" id="kecamatan" name="district_id">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Desa</label>
                                        <select class="form-control" id="desa" name="village_id">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Telp</label>
                                    <input class="form-control" name="telp" type="number"
                                        id="example-date-input"  autocomplete="off">
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mx-2 mb-2">mendaftar</button>
                              </div>
                              <div class="col-md-12">
                                <p class="text-sm mt-3 mb-0">Sudah memiliki akun? <a href="/login" class="text-dark font-weight-bolder">Sign in</a></p>
                              </div>
                            </div>
                          </div>
                        </div>   
                    </div>
                    
                    </form>
                </div>
            </div>
        </div>
      </section>
    </main>

    <script src="{{ 'assets/js/core/popper.min.js' }}"></script>
    <script src="{{ 'assets/js/core/bootstrap.min.js' }}"></script>
    <script src="{{ 'assets/js/plugins/perfect-scrollbar.min.js' }}"></script>
    <script src="{{ 'assets/js/plugins/smooth-scrollbar.min.js' }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="{{ 'assets/js/soft-ui-dashboard.min.js?v=1.0.7' }}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA=="
        data-cf-beacon='{"rayId":"7a787fbf8b5a4d75","version":"2023.2.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}'
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function() {
                $('#provinsi').on('change', function() {
                    let id_provinsi = $('#provinsi').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkabupaten') }}",
                        data: {
                            id_provinsi: id_provinsi
                        },
                        cache: false,

                        success: function(msg) {
                            $('#kabupaten').html(msg);
                            $('#kecamatan').html('');
                            $('#desa').html('');
                        },
                        error: function(data) {
                            console.log('error:', data);
                        },
                    })
                })

                $('#kabupaten').on('change', function() {
                    let id_kabupaten = $('#kabupaten').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getkecamatan') }}",
                        data: {
                            id_kabupaten: id_kabupaten
                        },
                        cache: false,

                        success: function(msg) {
                            $('#kecamatan').html(msg);
                            $('#desa').html('');
                        },
                        error: function(data) {
                            console.log('error:', data);
                        },
                    })
                })

                $('#kecamatan').on('change', function() {
                    let id_kecamatan = $('#kecamatan').val();

                    $.ajax({
                        type: 'POST',
                        url: "{{ route('getdesa') }}",
                        data: {
                            id_kecamatan: id_kecamatan
                        },
                        cache: false,

                        success: function(msg) {
                            $('#desa').html(msg);
                        },
                        error: function(data) {
                            console.log('error:', data);
                        },
                    })
                })
            });


        });
    </script>
</body>

</html>
