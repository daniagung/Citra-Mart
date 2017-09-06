<?php
$id = $_SESSION['karyawan']['id_member'];
$hasil = $lihat->member_edit($id);
?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12 main-chart">

                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4><i class="fa fa-lock"></i> Ganti Password</h4>
                        </div>
                        <div class="panel-body">
                            <div class="box-content">
                                <form class="form-horizontal" method="POST"
                                      action="fungsi/edit/edit.php?pass=ganti-pas">

                                    <fieldset>
                                        <div class="control-group">
                                            <label class="control-label" for="typeahead">Username </label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                                <input type="text" class="form-control" style="border-radius:0px;"
                                                       name="user" data-items="4"
                                                       value="<?php echo $hasil['user']; ?>"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="typeahead">Password Baru</label>
                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-lock"></i>
                                                </div>
                                                <input type="password" class="form-control"
                                                       placeholder="Enter Your New Password" style="border-radius:0px;"
                                                       id="pass" name="pass" data-items="4" value=""
                                                       required="required"/>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="pull-right">
                                            <input type="hidden" class="form-control" style="border-radius:0px;"
                                                   name="id" value="<?php echo $hasil['id_member']; ?>"
                                                   required="required"/>
                                            <button type="submit" class="btn btn-primary" value="Tambah"
                                                    style="border-radius:0px;" name="proses"><i
                                                        class="fa fa-pencil"></i> Ubah Password
                                            </button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix" style="padding-top:5%;"></div>
        </div>
        </div>
    </section>
</section>