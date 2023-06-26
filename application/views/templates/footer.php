
<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>
    <script>
    // Mengatur waktu akhir perhitungan mundur
    var countDownDate = new Date("Jan 11, 2022 15:00:00").getTime();
    
    // Memperbarui hitungan mundur setiap 1 detik
    var x = setInterval(function() {
      // Untuk mendapatkan tanggal dan waktu hari ini
      var now = new Date().getTime();
      // Temukan jarak antara sekarang dan tanggal hitung mundur
      var distance = countDownDate - now;

      // Perhitungan waktu untuk jam, menit dan detik
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);
      // Keluarkan hasil dalam elemen dengan id = "demo"
      document.getElementById("demo").innerHTML = hours + " ";
      document.getElementById("demo1").innerHTML = minutes + " ";
      document.getElementById("demo2").innerHTML = seconds + " ";
        
      // Jika hitungan mundur selesai, tulis beberapa teks 
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXP";
        document.getElementById("demo1").innerHTML = "EXP";
        document.getElementById("demo2").innerHTML = "EXP";
      }
    }, 1000);
    </script>
</body>
</html>