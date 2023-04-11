$(function () {

    

    $(".tambahMhs").on("click", function () {

        $("#exampleModalLabel").html("Form Tambah Mahasiswa");
        $(".modal-footer button[type='submit']").html("Tambah");

        $("form").attr("action", "http://localhost/phpmvc/public/Mahasiswa/tambah");
        // console.log($("form").attr("action"));
    });

    $(".modalUbah").on("click", function () {

        $("#exampleModalLabel").html("Edit Mahasiswa");
        $(".modal-footer button[type='submit']").html("Edit");

        $("form").attr("action", "http://localhost/phpmvc/public/Mahasiswa/edit");
        // console.log($("form").attr("action"));






        const id = $(this).data("id");


        $.ajax({
            url: "http://localhost/phpmvc/public/Mahasiswa/dataUbah",
            type: "post",
            data: {id:id},
            dataType: "json",
            success: function (data)
            {
                $("#nama").val(data.nama);
                $("#nim").val(data.nim);
                $("#jurusan").val(data.jurusan);
                $("#email").val(data.email);
                $("#id").val(data.id);
            }
        });


    });


    



});