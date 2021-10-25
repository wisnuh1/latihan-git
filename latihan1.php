<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II | Merancang Templete Sederhana dengan codeigniter</title>
    <link rel="stylesheet"  type="text/css" href="<?php echo base_url('');?>assets/css/style.css">
</head>
<body>
    <div class="wrapper">
        <header>
            <hgroup>
                <h1>RentalBuku.net</h1>
                <h3>Membuat Templet Sedergana dengan Codeigniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?php echo base_url().'index.php/web'?>">Home</a></li>
                    <li><a href="<?php echo base_url().'index.php/web/about'?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>
    </div>

    <!-- Section / index.php -->
    <section>
        <h1><?php echo $judul ?></h1>
        <p align='justify'>Pada pengertian Codeigniter di atas tadi di jelaskan bahwa Codeigniter menggunakan metode MVC, Apa itu MVC? 
            kita juga harus mengetahui apa itu MVC sebelum masuk dan lebih jauh dalam belajar Codeigniter.</p>
                            <p>MVC adalah teknik atau konsep yang memisahkan komponen untama menjadi tiga komponen yaitu
                                model, viw, dan controller.</p>
                                <ol type="A"></ol>
                                <li>Model</li>
        <p align='justify'>Model adalah kelas yang mempresentasikan atau memodelkan tipe data yang akan di gunakan oleh aplikasi.
            Model juga dapat di definisikan sebagai bagian penanganan yang berhubungan dengan pengolahan atau manipulasi database.
            Seperti misalnya mengambil data dari database, menginput dan pengolahan database lainnya.
            Semua intruksi atau fungsi yang berhubungan dengan pengolahan database di letakan di dalam model. Sebagai contoh,
            jika ingin membuat aplikasi untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan object lingkaran sebagai kelas model.
        </p>
        <p align= 'justify'>
            Sebagai catatan, semua model di dalam folder application/models
        </p>
        <li>View</li>
        <p align='justify'>
            View Merupakan bagian yang menangani halaman user interface atau halaman yang muncul pada user (Browser).
            Tampilan dari user di kumpulkan pada view untuk memisahkannya dengan controller dan model sehingga memudahkan
            web designer dalam melakukan pengenbangan tampilan halaman website.
        </p>
        <li>Controller</li>
        <p align='justify'>
            Controller merupakan kumpulan intruksi aksi yang menghubungkan model dan view, jadi user tidak akan berhubungan
            dengan model secara langsung, intinya data yang tersimpan di database (model) di ambil oleh controller
            dan kemudian controller pula yang manmpilkannya ke view, jadi controller lah yang mengolah intruksi.
        </p>
        <p align='justify'>
            Dari penjelasan tentang model, view dan controller di atas dapat di simpulkan bahwa controller sebagai penghubung
            view dan model. Misalnya pada applikasi yang manampilkan data dengan menggunakan metode MVC, controller memanggil
            intruksi pada model yang memanggil data pada database, kemudian controller yang meneruskannya pada View
            untuk di tampikan. Jadi jelas sudah dan sangat mudah dalam pengembangan aplikasi dengan cara MVC
            karena web designer atau front-end developer tidak perlu lagi berhubungan dengan controller, dia hanya perlu berhubungan
            dengan View untuk mendesign tampilan applikasi, karena back-end developer yang menangani bagian controller don modelnya.
            Jadi pembagian tugas pun menjadi mudah dan pengenbangan applikasi menjadi dapat di lakukan dengan cepat dan terstruktur.
        </p>
    </section>
    <!-- Akhir Section / index.php -->

    <!-- FOOTER / v_FOOTER.php -->
    <footer>
        <a href="https://www.google.com/?hl=id">Google</a>
    </footer>
</body>
</html>