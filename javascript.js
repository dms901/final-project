
function loadData() {
    var table_db = "home";//membuat variable dengan isi data home

    $.ajax({//memanggil fungsi ajax (ajax adalah asynchronous javascript and xml) yang memungkinkan develop meminta data secara dinamis
        url: "tampilan.php",
        method: "POST",
        data: { table_db: table_db },
        cache: false,
        success: function (result) {
            $(".tampilan").html(result);
        }
    });
}

function home() {
    var table_db = document.getElementById('home').value;
    console.log(table_db)

    $.ajax({
        url: "tampilan.php",
        method: "POST",
        data: { table_db: table_db },
        cache: false,
        success: function (result) {
            $(".tampilan").html(result);
        }
    });
} function btn_on1() {
    var order = document.getElementById('pria_baju').value;
    var table_db = document.getElementById('pria_baju').name;
    console.log(order)
    console.log(table_db)

    $.ajax({
        url: "tampilan.php",
        method: "POST",
        data: { order: order, table_db: table_db },
        cache: false,
        success: function (result) {
            $(".tampilan").html(result);
        }
    });


} function btn_on2() {
    var order = document.getElementById('pria_celana').value;
    var table_db = document.getElementById('pria_celana').name;
    console.log(order)
    console.log(table_db)

    $.ajax({
        url: "tampilan.php",
        method: "POST",
        data: { order: order, table_db: table_db },
        success: function (result) {
            $(".tampilan").html(result);
        }
    });
} function btn_on3() {
    var order = document.getElementById('pria_hodie').value;
    var table_db = document.getElementById('pria_hodie').name;
    console.log(order)
    console.log(table_db)

    $.ajax({
        url: "tampilan.php",
        method: "POST",
        data: { order: order, table_db: table_db },
        success: function (result) {
            $(".tampilan").html(result);
        }
    });
} function btn_on4() {
    var order = document.getElementById('wanita_baju').value;
    var table_db = document.getElementById('wanita_baju').name;
    console.log(order)
    console.log(table_db)

    $.ajax({
        url: "tampilan.php",
        method: "POST",
        data: { order: order, table_db: table_db },
        success: function (result) {
            $(".tampilan").html(result);
        }
    });


} function btn_on5() {
    var order = document.getElementById('wanita_celana').value;
    var table_db = document.getElementById('wanita_celana').name;
    console.log(order)
    console.log(table_db)

    $.ajax({
        url: "tampilan.php",
        method: "POST",
        data: { order: order, table_db: table_db },
        success: function (result) {
            $(".tampilan").html(result);
        }
    });
} function btn_on6() {
    var order = document.getElementById('wanita_gamis').value;
    var table_db = document.getElementById('wanita_gamis').name;
    console.log(order)
    console.log(table_db)

    $.ajax({
        url: "tampilan.php",
        method: "POST",
        data: { order: order, table_db: table_db },
        success: function (result) {
            $(".tampilan").html(result);
        }
    });

}

function onsubmit2() {
    //ambil data foto
    var form_data = new FormData();
    var img = $("#foto")[0].files;
    form_data.append('foto', img[0]);
    form_data.append('nama_produk', $('#nama_produk').val());
    form_data.append('ketegori', $('#kategori').val());
    form_data.append('harga', $('#harga').val());
    form_data.append('deskripsi', $('#deskripsi').val());
    form_data.append('ukuran1', $('#ukuran1').val());
    form_data.append('ukuran2', $('#ukuran2').val());
    form_data.append('ukuran3', $('#ukuran3').val());



    //ambil data gender/jenis kelamin
    var rd_wn = document.getElementById('jenis_wanita');
    var rd_pr = document.getElementById('jenis_pria');
    if (rd_pr.checked == true) {
        var gender = rd_pr.value;
        form_data.append('gender', gender);
    } else if (rd_wn.checked == true) {
        var gender = rd_wn.value;
        form_data.append('gender', gender);
    }
    $.ajax({
        type: 'POST',
        url: "upload.php",
        data: form_data,
        cache: false,
        processData: false,
        contentType: false,

        success: function (response) {
            alert(response);
            document.getElementById('form-data').reset();
        }
    });

} function Onkeranjang() {

    var data = document.getElementById('keranjang').name;
    size = window.size; //proses pengambilan sebuah variable dari fungsi radio()

    $.ajax({
        url: "upload.php",
        method: "POST",
        data: { data: data, size: size },
        success: function (response) {
            alert(response);
        }
    });


}
function radio() {

    var rb_xl = document.getElementById('xl');
    var rb_l = document.getElementById('l');
    var rb_m = document.getElementById('m');

    if (rb_xl.checked == true) {
        size = rb_xl.value;

    } else if (rb_l.checked == true) {
        size = rb_l.value;



    } else if (rb_m.checked == true) {
        size = rb_m.value;
    }

}

function pageRegister() {
    window.location.href = "register.php";
}

function batalRegister() {
    window.location.href = "login.php";
}

function gopageshopping() {
    window.location.href = "keranjang.php";
}
function gopageinfoakun() {
    window.location.href = "informasi_akun.php";
}
function deletItem() {
    $(".btn-hapus").click(function () {
        order_id = $(this).val();

        $.ajax({
            url: "delet.php",
            method: "POST",
            data: { order_id: order_id },
            success: function (response) {
                alert(response);
                window.location.href = "keranjang.php";
            }
        });

    });

}

$(document).ready(function () {//berfungsi untuk memastikan bahwa kode JavaScript hanya dijalankan setelah dokumen HTML dimuat sepenuhnya

    loadData();//memanggil fungsi loadData

    var popup = $("#dialog");//membuar variable yang nilainya diambil dari html yang ber ID = dialog

    var close = $(".close-1");//membuar variable yang nilainya diambil dari html yang ber class = close-1


    $('.btn-beli').click(function () {//ketika class = btn-beli diklik maka akan melakukan proses function berikut

        var metod_beli = "keranjang";//membuat variable baru

        var order_beli = $(this).val();//membuat variable yang berisi value dari tombol .btn-beli ( this artinya ini jadi this memastikan bahwa value tombol ini yang diklik )
        $.ajax({
            url: "pembelian.php",//link pengiriman data
            method: "POST",//setting metode
            data: { order_beli: order_beli, metod_beli: metod_beli },//didalam data berisi variable variable yang dikirim ke pembelian.php dengan metode POST
            success: function (response) {
                popup.show();//memanggil popup dan show untuk menampilkan halaman/menu
                $(".popup-content").html(response);

            }
        });


    });

    $('#btn-beli-k').click(function () {

        var metod_beli = "detail_produk";

        var order_beli = $(this).val();

        varian = window.size;

        $.ajax({
            url: "pembelian.php",
            method: "POST",
            data: { order_beli: order_beli, metod_beli: metod_beli },
            success: function (response) {
                popup.show();
                $(".popup-content").html(response);
                $(".varian_beli").html(varian);

            }
        });



    });

    close.on('click', function () {
        popup.hide();
    });

    jne = 15000;
    jnt = 18000;
    sicepat = 11000;
    reguler = 8000;

    $('#jasa-kirim').change(function () {
        var jasa_kirim = $(this).val();
        jasrim = jasa_kirim;
        var harga_brg = $('#total-harga').val();

        if (jasa_kirim == 'JNE') {
            pengirim = jne;
        } else if (jasa_kirim == 'J&T') {
            pengirim = jnt;
        } else if (jasa_kirim == 'Sicepat') {
            pengirim = sicepat;
        } else if (jasa_kirim == 'Reguler') {
            pengirim = reguler;
        }

        metod_bayar = window.bayar;

        if (metod_bayar == 'OVO') {
            harga_adm = 2500;
        } else if (metod_bayar == 'DANA') {
            harga_adm = 1500;
        } else if (metod_bayar == ' Virtual BRI') {
            harga_adm = 2000;
        } else if (metod_bayar == 'Virtual BCA') {
            harga_adm = 1000;
        } else if (metod_bayar == 'Virtual Permata') {
            harga_adm = 1200;
        } else if (typeof metod_bayar == 'undefined') {
            harga_adm = 0;
        }
        $.ajax({
            url: "operator.php",
            method: "POST",
            data: { pengirim: pengirim, harga_brg: harga_brg, metod_bayar: harga_adm },
            success: function (response) {
                $("#total-harga-beli").html(response);
            }
        });

        $('#content-jaskim').html(jasa_kirim);

    });

    $('#metod-bayar').change(function () {
        var metod_bayar = $(this).val();
        bayar = metod_bayar;
        var harga_brg = $('#total-harga').val();
        kirim = window.jasrim;
        if (kirim == 'JNE') {
            pengirim = jne;
        } else if (kirim == 'J&T') {
            pengirim = jnt;
        } else if (kirim == 'Sicepat') {
            pengirim = sicepat;
        } else if (kirim == 'Reguler') {
            pengirim = reguler;
        } else {
            pengirim = 0;
        }


        if (metod_bayar == 'OVO') {
            harga_adm = 2500;
        } else if (metod_bayar == 'DANA') {
            harga_adm = 1500;
        } else if (metod_bayar == ' Virtual BRI') {
            harga_adm = 2000;
        } else if (metod_bayar == 'Virtual BCA') {
            harga_adm = 1000;
        } else if (metod_bayar == 'Virtual Permata') {
            harga_adm = 1200;
        } else if (typeof metod_bayar == 'undefined') {
            harga_adm = 0;
        }

        $.ajax({
            url: "operator.php",
            method: "POST",
            data: { pengirim: pengirim, harga_brg: harga_brg, metod_bayar: harga_adm },
            success: function (response) {
                $("#total-harga-beli").html(response);
            }
        });
        $('#content-pembayaran').html(metod_bayar);

    });
    setInterval(function () {
        tglWkt();
    }, 1000);

    tglWkt();

    function tglWkt() {
        $.ajax({

            url: "http://api.geonames.org/timezoneJSON?",//link API
            type: "GET",//mengatur metode
            data: {
                formatted: true,//Memastikan bahwa data dari API brformat JSON
                lang: "id",//lang untuk mengatur bahasa dari data yang diminta dari API
                city: "Jakarta",  // Mengatur lokasi atau zona waktu
                username: "dimasmulyadi1237" // username pada api geonames
            },
            dataType: "json",
            success: function (response) {

                var time = moment(response.time).format('DD-MMMM-YYYY, HH:mm:ss');//Menggunakan libry moment untuk mengatur format pada jam (response adalah data yang diterima dan time memanggil data time dari json)
                $("#time").html(time);//Menampilkan data yang diterima dari API pada html yang memiliki ID = time
            }

        });


    }

})
function myFunction(x) {
    x.classList.toggle("change");

}
