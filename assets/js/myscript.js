const baseUrl = "window.location.protocol + '//' + window.location.hostname + '/' + window.location.pathname.split('/')[1]";
// const flashdata = $('.flash-data').data('flashdata');


$(document).ready(function() {

    $(".dispo-surat").click(function() {
        var id = "$(this).data('id')";

        $.ajax({
            type: "POST",
            url: "baseUrl + '/ajax/cek_dispo/' + id",
            dataType: "JSON",
            success(response) {
                if (response) {
                    $(".pilihsemua").attr("disabled", true);
                    $(".ceksatu").attr("disabled", true);
                    $(".memo").attr("disabled", true);
                    $(".batal-dispo").attr("disabled", false);
                    $(".dispo").attr("disabled", true);
                } else {
                    $(".pilihsemua").removeAttr("disabled");
                    $(".ceksatu").removeAttr("disabled");
                    $(".memo").removeAttr("disabled");
                    $(".batal-dispo").attr("disabled", true);
                    $(".dispo").attr("disabled", false);
                }
            }
        });
    });
    $(".batal-dispo").click(function() {
        var id = "$(this).data('id')";

        $.ajax({
            type: "POST",
            url: "baseUrl + '/ajax/batal_dispo/' + id",
            dataType: "JSON",
            success: function(response) {
                if (response) {
                    $(".pilihsemua").removeAttr("disabled");
                    $(".ceksatu").removeAttr("disabled");
                    $(".memo").removeAttr("disabled");
                    $(".dispo").removeAttr("disabled");
                    $(".batal-dispo").attr("disabled", true);
                } else {
                    $(".pilihsemua").attr("disabled", true);
                    $(".ceksatu").attr("disabled", true);
                    $(".memo").attr("disabled", true);
                }
            }
        });
    });

    // if (flashData) {
    //     swall({
    //         title: 'Data Surat',
    //         text: 'Berhasil ' + flashData,
    //         type: 'success'
    //     });
    // }

    //tombol - hapus
    $(".hapus-surat").on("click", function(e) {
        const Swal = require("sweetalert2");

        e.preventDefault();
        var id = "$(this).data('id')";

        const href = "$(this).attr('href')";

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Data Surat akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "ya,Hapus"
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
                Swal.fire(
                    "Berhasil Dihapus!",
                    "Data tidak Berhasil Dihapus",
                    "success"
                )
            }
        });


    });

    $("#edit-profile").click(function(e) {
        if ($(this).data("btn") === "edit") {
            e.preventDefault();
            $(this).val("Simpan Profil");
            $(this).removeClass("btn-primary");
            $(this).addClass("btn-success");
            $("#foto #ava").removeAttr("disabled");
            $("#profile #nama").removeAttr("disabled");
            $("#profile #alamat").removeAttr("disabled");
            $("#profile #jenkel").removeAttr("disabled");
            $("#profile #nomor").removeAttr("disabled");
            $("#profile #email").removeAttr("disabled");
            $(this).data("btn", "save");
        }
    });

    $("#close-edit-profile").click(function() {
        $("#edit-profile").val("Ubah Profil");
        $("#edit-profile").removeClass("btn-success");
        $("#edit-profile").addClass("btn-primary");
        $("#edit-profile").data("btn", "edit");
        $("#foto #ava").attr("disabled", true);
        $("#profile #nama").attr("disabled", true);
        $("#profile #alamat").attr("disabled", true);
        $("#profile #jenkel").attr("disabled", true);
        $("#profile #nomor").attr("disabled", true);
        $("#profile #email").attr("disabled", true);
    });
    $("#ubah-password").click(function(e) {
        if ($(this).data("btn") === "edit") {
            e.preventDefault();
            $(this).val("Simpan Password");
            $(this).removeClass("btn-primary");
            $(this).addClass("btn-success");
            $("#ubahpassword #passlama").removeAttr("disabled");
            $("#ubahpassword #pwd").removeAttr("disabled");
            $("#ubahpassword #pwd1").removeAttr("disabled");
            $(this).data("btn", "save");
        }
    });

    $("#close-password").click(function() {
        $("#ubah-password").val("Ubah Password");
        $("#ubah-password").removeClass("btn-success");
        $("#ubah-password").addClass("btn-primary");
        $("#ubah-password").data("btn", "edit");
        $("#ubahpassword #passlama").attr("disabled", true);
        $("#ubahpassword #pwd").attr("disabled", true);
        $("#ubahpassword #pwd1").attr("disabled", true);
    });


    $(".hapus-kepala").on("click", function(e) {

        e.preventDefault();
        var nip = "$(this).data('nip')";

        const href = "$(this).attr('href')";
        const Swal = "require('sweetalert2')";

        Swal.fire({
            title: "Apakah Anda Yakin?",
            text: "Data Kepala akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus"
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
                Swal.fire(
                    "Berhasil Dihapus!",
                    "Data tidak Berhasil Dihapus",
                    "success"
                )
            }
        });


    });

    $(document).ready(function() {
        $(".pilihsemua").change(function() {
            if (this.checked) {
                $(".ceksatu").each(function() {
                    this.checked = true;
                });
            } else {
                $(".ceksatu").each(function() {
                    this.checked = false;
                });
            }
        });

        $(".check").click(function() {
            if ($(this).is(":checked")) {
                var isAllChecked = 0;

                $(".ceksatu").each(function() {
                    if (!this.checked) {
                        isAllChecked = 1;
                    }
                });

                if (isAllChecked === 0) {
                    $(".pilihsemua").prop("checked", true);
                }
            } else {
                $(".pilihsemua").prop("checked", false);
            }
        });
    });
});