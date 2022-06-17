<!-- <style>
    .scanner-laser {
        position: absolute;
        margin: 40px;
        height: 30px;
        width: 30px;
        opacity: 0.5;
    }

    .laser-leftTop {
        top: 0;
        left: 0;
        border-top: solid red 5px;
        border-left: solid red 5px;
    }

    .laser-leftBottom {
        bottom: 0;
        left: 0;
        border-bottom: solid red 5px;
        border-left: solid red 5px;
    }

    .laser-rightTop {
        top: 0;
        right: 0;
        border-top: solid red 5px;
        border-right: solid red 5px;
    }

    .laser-rightBottom {
        bottom: 0;
        right: 0;
        border-bottom: solid red 5px;
        border-right: solid red 5px;

    }
</style>
 -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Beritar</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                </div>
            </div>
            <div class="card-body">
                <div class="card card-danger col-md-6">
                    <center><video id="preview"></video></center>
                </div>
            </div>

            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content -->
</div>
<script type="text/javascript">
    let scanner = new Instascan.Scanner({
        video: document.getElementById("preview"),
    });

    scanner.addListener("scan", function(content) {
        const data = content;
        var url = '<?php echo base_url("petugas/scan/" . ":id") ?>';
        url = url.replace(':id', data);
        window.location.href = url;
    });

    Instascan.Camera.getCameras()
        .then(function(cameras) {
            if (cameras.length > 0) {
                scanner.start(cameras[0]);
            } else {
                console.error("No cameras found.");
            }
        })
        .catch(function(e) {
            console.error(e);
        });
</script>